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
        $latest_word = Word::inRandomOrder()->where('status', 1)->limit(1)->get();

        $english_word = Word::select('wordEnglish', 'id')->where('status', 1)->orderBy('wordEnglish','asc')->simplePaginate(15);
        
        $hausa_word = Word::select('wordHausa', 'id')->where('status', 1)->orderBy('wordHausa','asc')->simplePaginate(15);

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
                if(Auth::guard('contributors')->attempt(['email' => $request->email, 'password' => $password])){
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

    public function signIn(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $password = Hash::make($request->password);

        try{
            if(Auth::guard('contributors')->attempt(['email' => $request->email, 'password' => $request->password])){
                $request->session()->regenerate();
                return redirect()->route('landing-page')->with('success', 'Welcome to Kamus Dictionary');
            }else{
                return back()->with('error', 'Incorrect login details');
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function contributorAddWord(Request $request){
        
        $author = Auth::guard('contributors')->user()->name;

        $word = new Word();

        $word->wordEnglish = request('wordEnglish');
        $word->wordHausa = request('wordHausa');
        $word->meaning = request('meaning');
        $word->maanarkamar = request('maanarkamar');
        $word->author = $author;
        $word->tilo = request('tilo');
        $word->jami = request('jami');
        $word->singular = request('singular');
        $word->plural = request('plural');
        $word->similar_word_one = request('similar_word_one');
        $word->similar_word_two = request('similar_word_two');
        $word->similar_word_three = request('similar_word_three');
        $word->status = 0;
        
        //REMOVING WORD FROM WORD NOT FOUND TABLE
        $addword = request('wordEnglish');
        $checkword =  WordNotFound::where('word_not_found', $addword)->get();
        if(count($checkword) > 0){
            $checkword[0]->delete();
        }

        //CHECKING TO SEE IF A WORD EXISTS IN THE DATABASE
        $wordEnglish = request('wordEnglish');
        $wordHausa = request('wordHausa');
        $checkIfWordExist =  Word::where('wordEnglish', '=', $wordEnglish)->where('wordHausa', '=', $wordHausa)->get();
        if(count($checkIfWordExist) > 0){
            return redirect()->route('landing-page')->with('error', $request->wordEnglish.' already Exists');
        }

        $word->save();

        return redirect()->route('landing-page')->with('success', $request->wordEnglish.' Added Successfully');
    }

    public function logout()
    {
        Auth::guard('contributors')->logout();
        return redirect()->route('landing-page');
    }
}
