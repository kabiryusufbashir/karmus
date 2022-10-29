<?php

namespace App\Http\Controllers;

use App\SearchWord;
use App\WordNotFound;
use App\Word;
use App\Contact;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function index()
    {
        
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

    public function store(Request $request)
    {
        // dd('ddd');
        $word = request('searchhausa');
        
        if($word == null){
            $word = request('searchenglish');
        }else{
            $word = request('searchhausa');
        }
        
        $word_search = Word::select('*')->where('wordEnglish', $word)->orwhere('wordHausa', $word)->orwhere('similar_word_one', $word)->orwhere('similar_word_two', $word)->orwhere('similar_word_three', $word)->orwhere('plural', $word)->orwhere('jami', $word)->get();
        
        $english_word = Word::select('wordEnglish', 'id')->orderBy('wordEnglish','asc')->simplePaginate(15);
        
        $hausa_word = Word::select('wordHausa', 'id')->orderBy('wordHausa','asc')->simplePaginate(15);

        if(count($word_search) > 0){
            
            $search = new SearchWord();
            $search->wordsearch = $word;
            $search->save();
            
            return view('search')->with('word', $word)->with('hausa_word', $hausa_word)->with('english_word', $english_word)->with('word_search', $word_search[0])->with('word', $word);
        
        }else{
            
            $word_not_found = new WordNotFound();
            $word_not_found->word_not_found = $word;
            $word_not_found->save();
            $error_msg = $word.' not found, we will add it to our database soon!';
            
            return view('searchnotfound')->with('word', $word)->with('error_msg', $error_msg);
        }

    }

    public function show($id)
    {
        $word_check = $id;
        $word_search = Word::where('wordEnglish', $id)->orwhere('wordHausa', $id)->get();
        $word_search = $word_search[0];

        $english_word = Word::select('wordEnglish', 'id')->orderBy('wordEnglish','asc')->simplePaginate(15);
        
        $hausa_word = Word::select('wordHausa', 'id')->orderBy('wordHausa','asc')->simplePaginate(15);

        return view('show')->with('word_check', $id)->with('word_search', $word_search)->with('hausa_word', $hausa_word)->with('english_word', $english_word);

    }

    public function autocompleteenglish(Request $request)
    {
        
        $word = request('term');

        $word_auto_complete = $word.'%';

        $result = Word::where('wordEnglish', 'LIKE', $word_auto_complete)->get();
 
          return response()->json($result);

    }

    public function autocompletehausa(Request $request)
    {
        
        $word = request('term');

        $word_auto_complete = $word.'%';

        $result = Word::where('wordHausa', 'LIKE', $word_auto_complete)->get();
 
          return response()->json($result);

    }

    public function getwords(Request $request)
    {
        echo $getWord = request('wordvalue');

        // $getWordFirstLetter ='%'.$getWord;

        // $getQuery = DB::('wordEnglish', 'LIKE', $getWordFirstLetter)->get();
        // $getQuery = DB::select("SELECT * FROM `words` WHERE `wordEnglish` LIKE '$getWordFirstLetter'");
        
        // echo $getQuery;
        // dd($getQuery);
        // return view('viewword')->with('getWordFirstLetter', $getQuery)->with('getWord', $getWord);
        
    }

    public function contact(Request $request)
    {

        $contact = new Contact();
        
        $contact->name = request('name');
        $contact->phone = request('phone');
        $contact->email_address = request('email_address');
        $contact->subject = request('subject');
        $contact->message = request('message');

        $contact->save();
        
        $name = request('name');
        $feedback = 'Thanks for contacting us '.$name.', we will get back to you...';
            return redirect('/contact-us')->with('msg', $feedback);

    }

}