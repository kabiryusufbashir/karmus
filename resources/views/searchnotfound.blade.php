@extends('layouts.template')

@section('title')
    {{$word}} - Kamus Dictionary
@endsection

@section('content')
<!-- Search Word  -->
<div class="bg-white col-md-12">
    
    <h3>
        <p class="text-center">{{$error_msg}}</p>
    </h3>

</div>
@endsection