<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pronunciation;
use App\Word;
use DB;

class PronunciationController extends Controller
{
    public function index()
    {
        $pronunciations = Pronunciation::orderBy('sound', 'asc')->paginate(10);
        return view('pronunciations')->with('pronunciations', $pronunciations);
    }

    public function store(Request $request)
    {

        if(request('upload_sound') != null){
            if ($file = $request->file('upload_sound')){      
                $soundPath = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('audios',$soundPath);           
            }
        }else{
            $soundPath = 'empty';
        }
    
        if(request('upload_example') != null){
            if ($file = $request->file('upload_example')){      
                $examplePath = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('audios',$examplePath);           
            }
        }else{
            $examplePath = 'empty';
        }

        $pronunciation = new Pronunciation();

        $pronunciation->pronunciation_type = request('pronunciation_type');
        $pronunciation->sound = request('sound');
        $pronunciation->upload_sound = $soundPath;
        $pronunciation->example = request('example');
        $pronunciation->exampleone = request('exampleone');
        $pronunciation->exampletwo = request('exampletwo');
        $pronunciation->upload_example = $examplePath;

        $pronunciation->save();

            return redirect('/pronunciation')->with('msg','pronunciation Stored');
    }

    public function edit($id)
    {
        $pronunciation = pronunciation::findOrFail($id);
        return view('pronunciations.edit')->with('pronunciation', $pronunciation);
    }

    public function update(Request $request, $id)
    {
        if(request('upload_sound') != null){
            if($file = $request->file('upload_sound')){      
                $upload_sound = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('audios',$upload_sound);           
            }
        }else{
            $upload_sound = request('upload_sound_not_empty');
        }
        
        if(request('upload_example') != null){
            if($file = $request->file('upload_example')){      
                $upload_example = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('audios',$upload_example);           
            }
        }else{
            $upload_example = request('upload_example_not_empty');
        }
        
        $pronunciation = pronunciation::find($id);

        $pronunciation->pronunciation_type = request('pronunciation_type');
        $pronunciation->sound = request('sound');
        $pronunciation->upload_sound = $upload_sound;
        $pronunciation->example = request('example');
        $pronunciation->exampleone = request('exampleone');
        $pronunciation->exampletwo = request('exampletwo');
        $pronunciation->upload_example = $upload_example;

        $pronunciation->update();

        return redirect('/pronunciation')->with('msg','Pronunciation Edited');

    }

    public function destroy($id)
    {
        $pronunciation = pronunciation::findOrFail($id);
        $pronunciation->delete();

        return redirect('/pronunciation')->with('msg','Pronunciation Deleted');
    }

    public function pronunciations(){
        
        $alphabets = DB::table('pronunciations')->orderby('sound','asc')->get();
        $vowels = DB::table('pronunciations')->where('pronunciation_type','=', 'vowel')->orderby('sound','asc')->get();
        $consonants = DB::table('pronunciations')->where('pronunciation_type','=', 'consonant')->orderby('sound','asc')->get();
        $special_characters = DB::table('pronunciations')->where('pronunciation_type','=', 'special characters')->orderby('sound','asc')->get();
        
        return view('allpronunciations', compact('alphabets','vowels','consonants','special_characters'));
    
    }
}
