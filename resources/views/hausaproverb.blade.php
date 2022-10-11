@extends('layouts.template')

@section('meta')
<meta name="description" content="Hausa Proverb">
@endsection

@section('title')
    Hausa Proverb - Kamus Dictionary
@endsection

@section('content')

    <div class="row py-2 mb-4">
        <div class="col-md-12 bg-success mx-auto">
            <h2 class="text-center pt-2 text-white">Hausa Proverbs</h2>
        </div>
    </div>
            
    <div class="row">
        <div class="col-md-12 bg-white">
            @if(count($proverbs) > 0)
                <div class="row d-flex justify-content-between">
                    @foreach($proverbs as $proverb)
                        <div class="col-md-5 m-4 p-4 border shadow">
                            <h5><b>{{$loop->index + 1}}) Karin Magana</b></h5>
                            <h5>{{$proverb->hausa}}</h5>
                            <hr>
                            <h5><b>Ma'ana</b></h5>
                            <h5>{{$proverb->sharhi}}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center border-top pt-4">
                    {{$proverbs->links()}}
                </div>
            @else
                <h3>No Proverb Stored</h3>
            @endif
        </div>    
    </div>

@endsection
