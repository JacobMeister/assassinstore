@extends('main.navbar') 

 
@section('content')
 
    
        
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Admin</td>
                    <td></td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->admin}}</td>
                            <td>
<!--                             only creates buttons for users that are not the current user, this way an admin cannot delete/demote himself -->
                            @if($user->admin)
                            	@if(Auth::user()->id != $user->id)<a href="/cms/user/changeAdmin/{{$user->id}}"><button class="btn btn-danger">Disable Admin</button></a> @endif
                            @else
                            	@if(Auth::user()->id != $user->id)<a href="/cms/user/changeAdmin/{{$user->id}}"><button class="btn btn-success">Make Admin</button></a> @endif
                            @endif
                            </td>
                            <td>@if(Auth::user()->id != $user->id)<a href="/cms/user/destroy/{{$user->id}}"><button class="btn btn-danger">Delete User</button></a> @endif</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   
 
@endsection