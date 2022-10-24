@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Numbers</h4>
                        </div>
                        <div class="card-body">
                            <a href="/numbers">
                                <img class="img-responsive w-50 mx-auto" src="/images/home_icon.png" alt="Home"><br>
                                <span class="mx-3">Go Back</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"><h4>Edit Number</h4></div>
                        <div class="card-body">
                            {{session('msg')}}
                                <form action="/numbers/numbers/edit/{{$number->id}}" method="POST">
                                    @csrf 
                                    @method('PATCH')
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="digit"><h5>Digit</h5></label>
                                            <input value="{{$number->digit}}" required type="text" name="digit" class="form-control" placeholder="Enter Number in Digit e.g 001">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="english"><h5>English</h5></label>
                                            <input value="{{$number->english}}" required type="text" name="english" class="form-control" placeholder="Enter Number in English">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="hausa"><h5>Hausa</h5></label>
                                            <input value="{{$number->hausa}}" required type="text" name="hausa" class="form-control" placeholder="Enter Number in Hausa">
                                        </div>
                                    </div>
                                    <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                    <div class="row my-3">
                                        <input type="submit" value="Edit Number" name="add-number" id="add-number" class="w-100 btn btn-warning">
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
