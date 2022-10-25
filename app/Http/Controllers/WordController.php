<?php

namespace App\Http\Controllers;

use App\Word;
use App\User;
use DB;
use Auth;
use App\WordNotFound;
use Illuminate\Http\Request;

class WordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user()->name;
        
        if($user == 'Bashir Abdul'){
            $words = Word::orderBy('wordEnglish', 'asc')->paginate(10);
        }else{
            $words = Word::orderBy('wordHausa', 'asc')->paginate(10);
        }
        
        $allwordnotfound = WordNotFound::all();

        $wordnotfound = WordNotFound::orderby('id','desc')->Simplepaginate(9);

        return view('words', compact('words','allwordnotfound','wordnotfound'));
    }

    public function store(Request $request)
    {
        $word = new Word();

        $word->wordEnglish = request('wordEnglish');
        $word->wordHausa = request('wordHausa');
        $word->meaning = request('meaning');
        $word->maanarkamar = request('maanarkamar');
        $word->author = request('author');
        $word->tilo = request('tilo');
        $word->jami = request('jami');
        $word->singular = request('singular');
        $word->plural = request('plural');
        $word->similar_word_one = request('similar_word_one');
        $word->similar_word_two = request('similar_word_two');
        $word->similar_word_three = request('similar_word_three');
        
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
            return redirect('/words')->with('msg','Word already Exists');
        }

        $word->save();

        return redirect('/words')->with('msg','Word Stored');
    }

    public function edit($id)
    {
        $word = Word::findOrFail($id);
        return view('words.edit')->with('word', $word);
    }

    public function update($id)
    {
        $word = Word::find($id);

        $word->wordEnglish = request('wordEnglish');
        $word->wordHausa = request('wordHausa');
        $word->meaning = request('meaning');
        $word->maanarkamar = request('maanarkamar');
        // $word->author = request('author');
        $word->tilo = request('tilo');
        $word->jami = request('jami');
        $word->singular = request('singular');
        $word->plural = request('plural');
        $word->similar_word_one = request('similar_word_one');
        $word->similar_word_two = request('similar_word_two');
        $word->similar_word_three = request('similar_word_three');
        
        //CHECKING TO SEE IF A WORD EXISTS IN THE DATABASE
        // $wordEnglish = request('wordEnglish');
        // $wordHausa = request('wordHausa');
        // $checkIfWordExist =  Word::where('wordEnglish', '=', $wordEnglish)->where('wordHausa', '=', $wordHausa)->get();
        // if(count($checkIfWordExist) > 0){
        //     return redirect('/words')->with('msg','Word already Exists');
        // }

        $word->save();

        return redirect('/words')->with('msg','Word Edited');
    }
    
    public function destroy($id)
    {
        $word = Word::findOrFail($id);
        $word->delete();

        return redirect('/words')->with('msg','Word Deleted');
    }

    public function search(Request $request){
        
        $word = request('search_dashboard');

        $word_search = Word::select('*')->where('wordEnglish', $word)->orwhere('wordHausa', $word)->orwhere('similar_word_one', $word)->orwhere('similar_word_two', $word)->orwhere('similar_word_three', $word)->orwhere('singular', $word)->orwhere('plural', $word)->orwhere('tilo', $word)->orwhere('jami', $word)->get();
        
        if(count($word_search) > 0){
            return view('words.edit')->with('word', $word_search[0]);
        }else{
            return redirect('/words')->with('msg', $word.' Not Found');
        }
    }

    public function addwordnotfound($id){
        $addwordnotfound = $id;
        
        return view('words.addwordnotfound', compact('addwordnotfound'));
    }

    public function deletewordnotfound($id){
        
        $deletewordnotfound = WordNotFound::findOrFail($id);
        $deletewordnotfound->delete();

        return redirect('/words')->with('msg','Word Deleted');
    }

    public function addwordcontribute($id){
        
        $word = Word::find($id);
        $word->status = 1;
        $word->save();

        return redirect('/words')->with('success','Word Added');
    }

    public function deletewordcontribute($id){
        
        $deletewordcontribute = Word::findOrFail($id);
        $deletewordcontribute->delete();

        return redirect('/words')->with('success','Word Deleted');
    }
}
