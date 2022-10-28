@extends('layouts.app')

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
            
            <div class="grid grid-cols-2 gap-4">
                @include('layouts.nav')
                <div>
                    <div class="shadow p-9">
                        <div class="text-2xl">
                            <h4>All Users</h4>
                        </div>
                        <div>
                            @if(count($users) > 0)
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        {{$users->links()}}
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="UserAllDashboard" class="w-full">
                                    <tr class="text-left">
                                        <th class="px-6 py-2 text-xs text-gray-500">Name</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Email</th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                    </tr>
                                    @foreach($users as $user)
                                    <tr class="divide-y divide-gray-300 border-b-2">
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->name}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$user->email}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <form action="/users/{{$user->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="bg-red-700 p-2 rounded text-white">
                                            </form>
                                        </td>
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