<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;

use App\SearchWord;
use App\WordNotFound;
use App\Word;
use App\Contact;
use App\Models\Contributor;
use DB;

class ContributorController extends Controller
{

    public function index(){
        $latest_word = Word::inRandomOrder()->limit(1)->get();

        $english_word = Word::select('wordEnglish', 'id')->orderBy('wordEnglish','asc')->simplePaginate(15);
        
        $hausa_word = Word::select('wordHausa', 'id')->orderBy('wordHausa','asc')->simplePaginate(15);

        return view('welcome', 
            [
                'hausa_word'=>$hausa_word,
                'english_word'=> $english_word,
                'word_search'=> $latest_word[0]
            ]
        );
    }

    public function signUp(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:contributors'],
        ]);

        $password = Hash::make($request->password);

        try{
            Contributor::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $password,
            ]);

            try{
                if(Auth::guard('contributors')->attempt(['email' => $request->email, 'password' => $request->password])){
                    $request->session()->regenerate();
                    return redirect()->route('landing-page')->with('success', $data['name'].' created successfully!');
                }else{
                    return back()->with('error', 'Incorrect login details');
                }
            }catch(Exception $e){
                return redirect('/')->with('error', $e->getMessage());
            } 
            
        }catch(Expection $e){
            return back()->with(['error' => 'Please try again later! ('.$e.')']);
        }

    }
}
