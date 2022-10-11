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
            
            <div class="row justify-content-center">
                @include('layouts.nav')
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Add Pronunciation</h4></div>
                        <div class="card-body">
                            <form action="/addpronunciation" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="pronunciation_type">Pronunciation Type</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="pronunciation_type" class="form-control">
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
                                        <input type="text" name="sound" class="form-control" placeholder="Enter Letter">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="upload-sound">Upload Audio</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" name="upload_sound" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Letter Example</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="example" class="form-control" placeholder="Letter Example">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Example I</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="exampleone" class="form-control" placeholder="Word Example I">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="example">Example II</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="exampletwo" class="form-control" placeholder="Word Example I">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <label for="upload-example">Upload Example Audio</label>
                                    </div>
                                    <div class="col-sm-8">
                                    <input type="file" name="upload_example" class="form-control-file">
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
                                        <th>S/No</th>
                                        <th>Pronunciation Type</th>
                                        <th>Word</th>
                                        <th>Audio</th>
                                        <th>Example</th>
                                        <th>Example I</th>
                                        <th>Example II</th>
                                        <th>Example Audio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($pronunciations as $pronunciation)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$pronunciation->pronunciation_type}}</td>
                                        <td>
                                            {{$pronunciation->sound}}</td>
                                        </td>
                                        @if($pronunciation->upload_sound != 'empty')
                                            <td>
                                                <audio controls>
                                                    <source src="/audios/{{$pronunciation->upload_sound}}" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            @else
                                            <td>NULL</td>    
                                        @endif
                                        <td>{{$pronunciation->example}}</td>
                                        @if($pronunciation->exampleone != null)
                                            <td>
                                                {{$pronunciation->exampleone}}
                                            </td>
                                            @else
                                            <td>NULL</td>
                                        @endif
                                        @if($pronunciation->exampletwo != null)
                                            <td>
                                                {{$pronunciation->exampletwo}}
                                            </td>
                                            @else
                                            <td>NULL</td>
                                        @endif
                                        @if($pronunciation->upload_example != 'empty')    
                                            <td>
                                                <audio controls>
                                                    <source src="/audios/{{$pronunciation->upload_example}}" type="audio/mpeg">
                                                </audio>
                                                <a href="/audios/{{$pronunciation->upload_example}}" download>Download</a>
                                            </td>
                                            @else
                                            <td>NULL</td>
                                        @endif
                                        <td><a href="/pronunciation/pronunciation/edit/{{$pronunciation->id}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                            <form action="/pronunciation/{{$pronunciation->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="btn btn-danger">
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