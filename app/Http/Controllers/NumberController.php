<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Number;
use DB;

class NumberController extends Controller
{

    public function index()
    {
        $numbers = Number::orderBy('digit', 'asc')->paginate(10);
        
        return view('numbers')->with('numbers', $numbers);
    }

    public function store(Request $request)
    {
        $number = new Number();

        $number->digit = request('digit');
        $number->english = request('english');
        $number->hausa = request('hausa');
        $number->author = request('author');

        $number->save();

        return redirect('/numbers')->with('msg','Number Stored');
    }

    public function edit($id)
    {
        $number = Number::findOrFail($id);
        return view('numbers.edit')->with('number', $number);
    }

    public function update($id)
    {

        $number = Number::find($id);

        $number->digit = request('digit');
        $number->english = request('english');
        $number->hausa = request('hausa');
        $number->author = request('author');

        $number->save();

        return redirect('/numbers')->with('msg','Number Edited');

    }

    public function destroy($id)
    {
        $number = Number::findOrFail($id);
        $number->delete();

        return redirect('/numbers')->with('msg','Number Deleted');
    }

    public function search(Request $request){
        
        $number = request('search_number_dashboard');

        $number_search = Number::select('*')->where('digit', $number)->orwhere('english', $number)->orwhere('hausa', $number)->get();
        
        if(count($number_search) > 0){
            return view('numbers.edit')->with('number', $number_search[0]);
        }else{
            return redirect('/numbers')->with('msg', $number.' Not Found');
        }
    }

    public function numbers(){

        $set = DB::table('numbers')->where('digit','=',9000)->first();
        $setOne = $set->digit + 1;
        $range = DB::table('numbers')->where('digit','>=',1)->where('digit','<=',99)->orderBy('digit', 'asc')->get();
        
        // foreach($range as $num){
        //     $number = new Number();
        //     $number->digit = $setOne++;
        //     if($number->digit < 10000){
        //          $number->english = $set->english.' and '.$num->english;
        //          $number->hausa = $set->hausa.' da '.$num->hausa;
        //          $number->author = 'Kabir Yusuf Bashir';
        //          $number->save();
        //     }
        // }
        
        
        $setTwo = $set->digit + 101;
        $range2 = DB::table('numbers')->where('digit','>=',101)->where('digit','<=',999)->orderBy('digit', 'asc')->get();
        
        
        // foreach($range2 as $num){
        //     $number = new Number();
        //     $number->digit = $setTwo++;
        //     if($number->digit < 10000){
        //          $number->english = $set->english.' '.$num->english;
        //          $number->hausa = $set->hausa.' da '.$num->hausa;
        //          $number->author = 'Kabir Yusuf Bashir';
        //          $number->save();
        //     }
        // }
        
        $numbers = DB::table('numbers')->orderby('digit','asc')->paginate(10);
        
        return view('allnumbers',compact('numbers'));
    }
}