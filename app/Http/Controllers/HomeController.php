<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\WordNotFound;
use App\SearchWord;
use App\Word;
use App\User;
use App\Number;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $words = Word::orderBy('wordEnglish', 'asc')->paginate(10);

        $no_of_words = Word::count();
        $no_of_numbers = Number::count();
        $no_of_users = User::count();
        $no_of_search = SearchWord::count();
        $no_of_word_not_found = WordNotFound::count();
        $allwordnotfound = WordNotFound::all();
        $wordnotfound = WordNotFound::orderby('id','desc')->Simplepaginate(9);

        $user_track = DB::select('SELECT author, COUNT(author) as `words_entered` FROM words GROUP BY author ORDER BY `words_entered` DESC');
        $numbers_track = DB::select('SELECT author, COUNT(author) as `numbers_entered` FROM numbers GROUP BY author ORDER BY `numbers_entered` DESC');

        return view('home', compact('numbers_track', 'user_track','words','no_of_words','no_of_numbers','no_of_word_not_found','no_of_users','no_of_search','allwordnotfound','wordnotfound'));
    }
}
