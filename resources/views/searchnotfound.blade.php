@extends('layouts.app')

@section('page-title')
    {{$word}} - Kamus Dictionary
@endsection

@section('content')
<!-- Search Word  -->
<div class="bg-white w-full">
    
    <h3>
        <p class="text-center text-2xl mt-4">{{$error_msg}}</p>
    </h3>

</div>
@endsection