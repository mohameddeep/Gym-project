@extends('admin.layout.app')

@section('title','all users')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_user.create')}}" class="btn btn-primary mt-2 mb-2"> create user</a> --}}
    <thead>
        <th>id</th>
        <th>fname</th>
        <th>lname</th>
        <th>email</th>
        <th>phone</th>
        <th>my trainer</th>
        <th>image</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>

        @foreach ($users as $user)
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->lname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->trainer?->name}}</td>
            <td><img src="{{ asset( 'images/user/' . $user->image)}}" width="10" height="10" alt=""></td>
            <td><a href="{{route('dashbord_user.edit',$user->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_user.show',$user->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_user.destroy', $user->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>

        </tr>
        @endforeach
    </tbody>
   </table>
   @endsection
