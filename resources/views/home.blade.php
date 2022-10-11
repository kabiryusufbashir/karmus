@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row justify-content-center">
                @include('layouts.nav')
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistics</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <p class="text-right">
                                        <b>No of Word: {{$no_of_words}}</b>
                                    </p> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-left">
                                                No of User: <b>{{$no_of_users}}</b>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right">
                                                No of Search: <b>{{$no_of_search}}</b>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-left">
                                        No of Word Not Found: <b>{{$no_of_word_not_found}}</b>
                                    </p>
                                    <p class="text-left">
                                        <table class="table table-striped table-responsive">
                                            <tr>
                                                <th>User</th>
                                                <th>Word Entered</th>
                                            </tr>
                                            @foreach($user_track as $user_track)
                                                <tr>
                                                    <td>{{$user_track->author}}</td>
                                                    <td>{{$user_track->words_entered}}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th>Total Word</th>
                                                <th>{{$no_of_words}}</th>
                                            </tr>
                                        </table>
                                    </p>
                                    <hr>
                                    <p class="text-left">
                                        <table class="table table-striped table-responsive">
                                            <tr>
                                                <th>User</th>
                                                <th>Numbers Entered</th>
                                            </tr>
                                            @foreach($numbers_track as $nums_track)
                                                <tr>
                                                    <td>{{$nums_track->author}}</td>
                                                    <td>{{$nums_track->numbers_entered}}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th>Total Number</th>
                                                <th>{{$no_of_numbers}}</th>
                                            </tr>
                                        </table>
                                    </p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($wordnotfound) > 0)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"><h4>Word Search Not Found: {{$allwordnotfound->count()}}</h4></div>
                            <div class="card-body">
                                <table class="table table-striped table-responsive table-hover table-dark">
                                    <tr class="thead-dark">
                                        <th>Word</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($wordnotfound as $notfound)
                                    <tr>
                                        <td>{{$notfound->word_not_found}}</td>
                                        <td>
                                            <form method="POST" action="/addwordnotfound/{{$notfound->word_not_found}}">
                                                @csrf 
                                                <input type="submit" value="Add" class="btn btn-success text-white">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST" action="/deletewordnotfound/{{$notfound->id}}">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger text-white">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{$wordnotfound->links()}}
                                </div>
                            </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
