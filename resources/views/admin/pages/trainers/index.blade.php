@extends('admin.layout.app')

@section('title','all trainers')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_trainer.create')}}" class="btn btn-primary mt-2 mb-2"> create trainer</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>qualification</th>
        <th>description</th>
        <th>specality</th>
        <th>your class</th>
        <th>image</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>

        @foreach ($trainers as $trainer)
        <tr>

            <td>{{$trainer->id}}</td>
            <td>{{$trainer->name}}</td>
            <td>{{$trainer->email}}</td>
            <td>{{$trainer->phone}}</td>
            <td>{{$trainer->qualification}}</td>
            <td>{{$trainer->description}}</td>
            <td>{{$trainer->specality}}</td>
            <td>{{$trainer->course?->name}}</td>
            <td><img src="{{ asset( 'images/trainer/' . $trainer->image)}}" width="10" height="10" alt=""></td>
            <td><a href="{{route('dashbord_trainer.edit',$trainer->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_trainer.show',$trainer->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_trainer.destroy', $trainer->id) }}" method="post">
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
