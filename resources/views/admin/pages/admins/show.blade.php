@extends('admin.layout.app')

@section('title','all admins')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_admin.create')}}" class="btn btn-primary mt-2 mb-2"> create admin</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>image</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>
        <tr>

            <td>{{$admin->id}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->phone}}</td>


            {{-- <td>{{$admin->major->title ?? 'general'}}</td>->for second method in index in admincontroller --}}
            {{-- <td>{{$admin->major_name}}</td>->for first method in index in admincontroller --}}
            {{-- <td>{{$admin->major?->title}}</td>-> ? mean do not print any thing let empty place --}}
            <td><img src="{{ asset( 'images/admin/' . $admin->image)}}" width="10" height="10" alt=""></td>
            <td><a href="{{route('dashbord_admin.edit',$admin->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_admin.show',$admin->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_admin.destroy', $admin->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>

        </tr>

    </tbody>
   </table>

   @endsection

