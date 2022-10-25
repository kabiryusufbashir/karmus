@extends('layouts.app')

@section('content')
<div class="text-2xl font-medium my-5"><h4>Dashboard</h4></div>
<div class="grid grid-cols-8 gap-2">
    <div class="col-span-1">
        @include('layouts.nav')
    </div>
    <div class="col-span-5 shadow p-4 bg-gray-800 text-white">
        <div class="card-header">
            <h4 class="text-xl">Statistics</h4>
        </div>
        <div>
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
                    <tr class="text-left">
                        <th>User</th>
                        <th>Word Entered</th>
                    </tr>
                    @foreach($user_track as $user_track)
                        <tr>
                            <td>{{$user_track->author}}</td>
                            <td>{{$user_track->words_entered}}</td>
                        </tr>
                    @endforeach
                    <tr class="text-left">
                        <th>Total Word</th>
                        <th>{{$no_of_words}}</th>
                    </tr>
                </table>
            </p>
            <hr>
            <p class="text-left">
                <table>
                    <tr class="text-left">
                        <th>User</th>
                        <th>Numbers Entered</th>
                    </tr>
                    @foreach($numbers_track as $nums_track)
                        <tr>
                            <td>{{$nums_track->author}}</td>
                            <td>{{$nums_track->numbers_entered}}</td>
                        </tr>
                    @endforeach
                    <tr class="text-left">
                        <th>Total Number</th>
                        <th>{{$no_of_numbers}}</th>
                    </tr>
                </table>
            </p>
        </div>
    </div>
    <div class="col-span-2 bg-gray-800">
        @if(count($wordnotfound) > 0)
            <div class="p-4 text-white">
                <div class="text-xl"><h4>Word Search Not Found: {{$allwordnotfound->count()}}</h4></div>
                    <div>
                        <table>
                            <tr class="text-left border-b">
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
                                        <input type="submit" value="Add" class=" bg-green-600 p-2 rounded text-white">
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="/deletewordnotfound/{{$notfound->id}}">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="bg-red-700 p-2 rounded text-white">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="mt-5">
                            {{$wordnotfound->links()}}
                        </div>
                    </div>
            </div>    
        @endif
    </div>
</div>
@endsection
