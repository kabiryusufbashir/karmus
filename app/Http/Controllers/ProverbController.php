<?php

namespace App\Http\Controllers;

use App\Proverb;
use App\Word;
use Illuminate\Http\Request;

class ProverbController extends Controller
{
    
    public function index()
    {
        
        $proverbs = Proverb::orderBy('hausa', 'asc')->paginate(10);
        
        return view('proverbs')->with('proverbs', $proverbs);
    }

    public function store(Request $request)
    {
        $proverb = new Proverb();

        $proverb->hausa = request('hausa');
        $proverb->sharhi = request('sharhi');
        // $proverb->english = request('english');
        // $proverb->idiomatic = request('idiomatic');
        $proverb->author = request('author');

        $proverb->save();

        return redirect('/proverbs')->with('msg','Proverb Stored');
    }

    public function edit($id)
    {
        $proverb = Proverb::findOrFail($id);
        return view('proverbs.edit')->with('proverb', $proverb);
    }
    
    public function update($id)
    {
        $proverb = Proverb::find($id);

        $proverb->hausa = request('hausa');
        $proverb->sharhi = request('sharhi');
        // $proverb->english = request('english');
        // $proverb->idiomatic = request('idiomatic');
        $proverb->author = request('author');

        $proverb->save();

        return redirect('/proverbs')->with('msg','Proverb Edited');
    }

    public function destroy($id)
    {
        $proverb = Proverb::findOrFail($id);
        $proverb->delete();

        return redirect('/proverbs')->with('msg','Proverb Deleted');
    }

    public function search(Request $request){
        
        $proverb = request('search_proverb_dashboard');

        $proverb_search = Proverb::select('*')->where('hausa', $proverb)->orwhere('sharhi', $proverb)->get();
        
        if(count($proverb_search) > 0){
            return view('proverbs.edit')->with('proverb', $proverb_search[0]);
        }else{
            return redirect('/proverbs')->with('msg', $proverb.' Not Found');
        }
    }

    public function hausaProverb(){

        $proverbs = Proverb::orderBy('hausa', 'asc')->simplePaginate(10);
        
        return view('hausaproverb', compact('proverbs'));
    }
}