@extends('layouts.admin')
@section('content')
<h1 class="text-center">Users Dashboard</h1>
<div class="container">
<table class="table text-center">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Role</th>
    <th scope="col">Email</th>
    <th scope="col">Controls</th>

</tr>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->roles->role_name}}</td>
    <td>{{$user->email}}</td>
    <td>
        <a href="{{route('users.show',$user->id)}}" class="btn btn-success">Show</a>
        @if (Auth::user()->role_id==1)
        <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{route('users.destroy',$user->id)}}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete" />
        </form>
@else
@endif

    </td>
</tr>
@endforeach
</tbody>
</table>
<a class="mt-3 btn btn-primary" href="{{route('users.create')}}">
Add Users
</a>
</div>
@endsection
