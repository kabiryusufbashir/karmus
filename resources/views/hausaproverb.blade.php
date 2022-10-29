@extends('layouts.app')

@section('meta')
<meta name="description" content="Hausa Proverb">
@endsection

@section('title')
    Hausa Proverb - Kamus Dictionary
@endsection

@section('content')

    <div class="py-2">
        <div class="w-full bg-success mx-auto">
            <h2 class="text-2xl text-center py-2">Hausa Proverbs</h2>
        </div>
    </div>
            
    <div class="w-full bg-white">
        @if(count($proverbs) > 0)
            <div class="lg:grid grid-cols-2 gap-2">
                @foreach($proverbs as $proverb)
                    <div class="m-4 p-4 border shadow">
                        <h5><b>{{$loop->index + 1}}) Karin Magana</b></h5>
                        <h5>{{$proverb->hausa}}</h5>
                        <hr class="py-2">
                        <h5><b>Ma'ana</b></h5>
                        <h5>{{$proverb->sharhi}}</h5>
                    </div>
                @endforeach
            </div>
            <div class="border-t pt-4">
                {{$proverbs->links()}}
            </div>
        @else
            <h3>No Proverb Stored</h3>
        @endif
    </div>

@endsection
