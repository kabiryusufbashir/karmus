@extends('layouts.app')

@section('page-title')
    Numbers - Kamus Dictionary
@endsection

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
                        <div class="text-2xl"><h4>Add Number</h4></div>
                        <div>
                            <form action="/numbers" method="POST">
                                @csrf 
                                <div class="row my-3">
                                    <input required type="text" name="digit" class="input-field" placeholder="Enter Number in Digit e.g 001">
                                </div>
                                <div class="row my-3">
                                    <input required type="text" name="english" class="input-field" placeholder="Enter Number in English">
                                </div>
                                <div class="row my-3">
                                    <input required type="text" name="hausa" class="input-field" placeholder="Enter Number in Hausa">
                                </div>
                                <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                <div class="row my-3">
                                    <input type="submit" value="Add Number" name="add-number" id="add-number" class="w-full bg-green-600 rounded p-3 text-white">
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
                            <h4>All Number</h4>
                        </div>
                        <div class="card-body">
                            @if(count($numbers) > 0)
                                
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-6">
                                        
                                        <form action="/search_number" id="searchNumberDashBoard" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="search_number_dashboard" id="search" class="input-field w-100" placeholder="Search Number" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <input class="input-group-text bg-success text-white" id="basic-addon2" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="NumberAllDashboard" class="w-full">
                                    <tr class="text-left">
                                        <th>No</th>
                                        <th>English</th>
                                        <th>Hausa</th>
                                        <th>Author</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($numbers as $number)
                                    <tr class="border-b">
                                        <td>{{$number->digit}}</td>
                                        <td>{{$number->english}}</td>
                                        <td>{{$number->hausa}}</td>
                                        <td>{{$number->author}}</td>
                                        <td><a href="/numbers/numbers/edit/{{$number->id}}" class="bg-green-700 p-2 rounded text-white">Edit</a></td>
                                        <td>
                                            <form action="/numbers/{{$number->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="bg-red-700 p-2 rounded text-white">
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </table> 

                                <div class="row d-flex justify-content-center">
                                    {{$numbers->links()}}
                                </div>           
                            @else
                                <h3>No Number Stored</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
