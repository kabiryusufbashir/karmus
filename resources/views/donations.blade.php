@extends('layouts.app')

@section('page-title')
    Donation - Kamus Dictionary
@endsection

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
            
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-1">
                    @include('layouts.nav')
                </div>
                <div class="col-span-5">
                    <div class="shadow p-9">
                        <div class="text-2xl border-b-2">
                            <h4>All Donations</h4>
                        </div>
                        <div>
                            @if(count($donations) > 0)
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        {{$donations->links()}}
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="UserAllDashboard" class="w-full">
                                    <tr class="text-left whitespace-nowrap">
                                        <th class="px-6 py-2 text-xs text-gray-500">Reference</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Email</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Phone</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Amount</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Time</th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                    </tr>
                                    @foreach($donations as $user)
                                    <tr class="divide-y divide-gray-300 border-b-2">
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->reference}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->name}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->email}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->phone}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{($user->amount / 100)}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{date('H:i:s F d, Y', strtotime($user->created_at))}}</td>
                                    </tr>    
                                    @endforeach
                                </table>            
                            @else
                                <h3>No User Found</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection