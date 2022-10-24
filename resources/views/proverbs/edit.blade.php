@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Proverbs</h4>
                        </div>
                        <div class="card-body">
                            <a href="/proverbs">
                                <img class="img-responsive w-50 mx-auto" src="/images/home_icon.png" alt="Home"><br>
                                <span class="mx-3">Go Back</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"><h4>Edit Proverb</h4></div>
                        <div class="card-body">
                            {{session('msg')}}
                                <form action="/proverbs/proverbs/edit/{{$proverb->id}}" method="POST">
                                    @csrf 
                                    @method('PATCH')
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="hausa"><h5>Karin Magana</h5></label>
                                            <input value="{{$proverb->hausa}}" required type="text" name="hausa" class="form-control" placeholder="Karin Magana">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="sharhi"><h5>Sharhi</h5></label>
                                            <input value="{{$proverb->sharhi}}" required type="text" name="sharhi" class="form-control" placeholder="Sharhi Karin Maganar">
                                        </div>
                                    </div>
                                    <!-- <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="proverb"><h5>Proverb</h5></label>
                                            <input value="{{$proverb->english}}" required type="text" name="english" class="form-control" placeholder="Proverb">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="idiomatic"><h5>idiomatic</h5></label>
                                            <input value="{{$proverb->idiomatic}}" required type="text" name="idiomatic" class="form-control" placeholder="Idiomatic">
                                        </div>
                                    </div> -->
                                    <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                    <div class="row my-3">
                                        <input type="submit" value="Edit Proverb" name="add-proverb" id="add-proverb" class="w-100 btn btn-warning">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
