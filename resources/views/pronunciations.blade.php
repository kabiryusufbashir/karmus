@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        <p class="text-center">{{session('msg')}}</p>
                    </h3>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                @include('layouts.nav')
                <div>
                    <div class="shadow p-9">
                        <div class="text-2xl"><h4>Add Pronunciation</h4></div>
                        <div class="card-body">
                            <form action="/addpronunciation" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="pronunciation_type">Pronunciation Type</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="pronunciation_type" class="input-field">
                                            <option></option>
                                            <option value="Vowel">Vowel</option>
                                            <option value="Consonant">Consonant</option>
                                            <option value="Special Characters">Special Characters</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="sound">Enter Letter</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="sound" class="input-field" placeholder="Enter Letter">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="upload-sound">Upload Audio</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" name="upload_sound" class="input-field-file">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Letter Example</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="example" class="input-field" placeholder="Letter Example">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Example I</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="exampleone" class="input-field" placeholder="Word Example I">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Example II</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="exampletwo" class="input-field" placeholder="Word Example I">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="upload-example">Upload Example Audio</label>
                                    </div>
                                    <div class="col-sm-8">
                                    <input type="file" name="upload_example" class="input-field-file">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <input type="submit" value="Add Pronunciation" name="add-pronunciation" id="add-pronunciation" class="w-100 btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="row my-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Pronunciations</h4>
                        </div>
                        <div class="card-body">
                            @if(count($pronunciations) > 0)
                                
                                <!-- <div class="bg-white text-dark" id="searchFeedbackDashboard"></div> -->
                                
                                <table id="pronunciationAllDashboard" class="table table-striped table-responsive">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">S/No</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Pronunciation Type</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Word</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Audio</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Example</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Example I</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Example II</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Example Audio</th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                    </tr>
                                    @foreach($pronunciations as $pronunciation)
                                    <tr class="divide-y divide-gray-300 border-b-2">
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$loop->index + 1}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$pronunciation->pronunciation_type}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{$pronunciation->sound}}</td>
                                        </td>
                                        @if($pronunciation->upload_sound != 'empty')
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                <audio controls>
                                                    <source src="/audios/{{$pronunciation->upload_sound}}" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            @else
                                            <td>NULL</td>    
                                        @endif
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$pronunciation->example}}</td>
                                        @if($pronunciation->exampleone != null)
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{$pronunciation->exampleone}}
                                            </td>
                                            @else
                                            <td class="px-6 py-4 text-sm text-gray-500">NULL</td>
                                        @endif
                                        @if($pronunciation->exampletwo != null)
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{$pronunciation->exampletwo}}
                                            </td>
                                            @else
                                            <td class="px-6 py-4 text-sm text-gray-500">NULL</td>
                                        @endif
                                        @if($pronunciation->upload_example != 'empty')    
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                <audio controls>
                                                    <source src="/audios/{{$pronunciation->upload_example}}" type="audio/mpeg">
                                                </audio>
                                                <a href="/audios/{{$pronunciation->upload_example}}" download>Download</a>
                                            </td>
                                            @else
                                            <td class="px-6 py-4 text-sm text-gray-500">NULL</td>
                                        @endif
                                        <td class="px-6 py-4 text-sm text-gray-500"><a href="/pronunciation/pronunciation/edit/{{$pronunciation->id}}" class="bg-green-700 p-2 rounded text-white">Edit</a></td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <form action="/pronunciation/{{$pronunciation->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="bg-red-700 p-2 rounded text-white">
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </table> 

                                <div class="row d-flex justify-content-center">
                                    {{$pronunciations->links()}}
                                </div>           
                            @else
                                <h3>No Pronunciation Stored</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection