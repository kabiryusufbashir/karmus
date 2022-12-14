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
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"><h4>Add Proverb</h4></div>
                        <div class="card-body">
                            <form action="/proverbs" method="POST">
                                @csrf 
                                <div class="row my-3">
                                    <input required type="text" name="hausa" class="form-control" placeholder="Karin Magana">
                                </div>
                                <div class="row my-3">
                                    <input required type="text" name="sharhi" class="form-control" placeholder="Sharhi Karin Maganar">
                                </div>
                                <!-- <div class="row my-3">
                                    <input required type="text" name="english" class="form-control" placeholder="Proverbs">
                                </div>
                                
                                <div class="row my-3">
                                    <input required type="text" name="idiomatic" class="form-control" placeholder="Idiomatic">
                                </div> -->
                                <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                <div class="row my-3">
                                    <input type="submit" value="Add Proverb" name="add-proverb" id="add-proverb" class="w-100 btn btn-success">
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
                            <h4>All Proverbs</h4>
                        </div>
                        <div class="card-body">
                            @if(count($proverbs) > 0)
                                
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-6">
                                        
                                        <form action="/search_proverb" id="searchProverbDashBoard" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="search_proverb_dashboard" id="search" class="form-control w-100" placeholder="Search Proverb" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <input class="input-group-text bg-success text-white" id="basic-addon2" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="ProverbAllDashboard" class="table table-striped table-responsive">
                                    <tr>
                                        <th>Hausa</th>
                                        <th>Sharhi</th>
                                        <!-- <th>English</th>
                                        <th>Idiomatic</th> -->
                                        <th>Author</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($proverbs as $proverb)
                                    <tr>
                                        <td>{{$proverb->hausa}}</td>
                                        <td>{{$proverb->sharhi}}</td>
                                        <!-- <td>{{$proverb->english}}</td>
                                        <td>{{$proverb->idiomatic}}</td> -->
                                        <td>{{$proverb->author}}</td>
                                        <td><a href="/proverbs/proverbs/edit/{{$proverb->id}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                            <form action="/proverbs/{{$proverb->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </table> 

                                <div class="row d-flex justify-content-center">
                                    {{$proverbs->links()}}
                                </div>           
                            @else
                                <h3>No Proverb Stored</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection