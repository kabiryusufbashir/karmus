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
            
            <div class="row justify-content-center">
                @include('layouts.nav')
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Users</h4>
                        </div>
                        <div class="card-body">
                            @if(count($users) > 0)
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        {{$users->links()}}
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="UserAllDashboard" class="table table-striped table-responsive table-dark">
                                    <tr class="thead-dark">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <form action="/users/{{$user->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="btn btn-danger">
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