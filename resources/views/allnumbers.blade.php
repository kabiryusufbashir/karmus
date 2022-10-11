@extends('layouts.app')

@section('meta')
<meta name="description" content="Numbers">
@endsection

@section('title')
    Numbers - Kamus Dictionary
@endsection

@section('content')

    <div class="py-2 mb-4">
        <div class="w-full bg-green-600 mx-auto">
            <h2 class="text-2xl text-center py-2 text-white">Number</h2>
        </div>
    </div>

    <div class="row">
        <div class="w-full bg-white">
            @if(count($numbers) > 0)
                <div class="lg:grid grid-cols-3 gap-3">
                    @foreach($numbers as $number)
                        <div class="w-full mx-1 my-4 p-4 border shadow">
                            <h5><b>{{$number->digit}})</b></h5>
                            <hr>
                            <h5>{{$number->hausa}}</h5>
                            <hr>
                            <h5>{{$number->english}}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="pt-4">
                    {{$numbers->links()}}
                </div>
            @else
                <h3>No Number Stored</h3>
            @endif    
        </div>
    </div>

@endsection
