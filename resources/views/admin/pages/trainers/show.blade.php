@extends('admin.layout.app')

@section('title','one trainer')


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
        <tr>

            <td>{{$trainer->id}}</td>
            <td>{{$trainer->name}}</td>
            <td>{{$trainer->email}}</td>
            <td>{{$trainer->phone}}</td>
            <td>{{$trainer->qualification}}</td>
            <td>{{$trainer->description}}</td>
            <td>{{$trainer->specality}}</td>
            <td>{{$trainer->trainer?->name}}</td>

            {{-- <td>{{$trainer->major->title ?? 'general'}}</td>->for second method in index in trainercontroller --}}
            {{-- <td>{{$trainer->major_name}}</td>->for first method in index in trainercontroller --}}
            {{-- <td>{{$trainer->major?->title}}</td>-> ? mean do not print any thing let empty place --}}
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

    </tbody>
   </table>


   <h1  style="text-align: center">show my users</h1>
<table class="table">
{{-- <a href="{{route('dashbord_trainer.create')}}" class="btn btn-primary mt-2 mb-2"> create trainer</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>action</th>




    </thead>
    <tbody>
        @foreach ($trainer->users as $user )
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->fname . " " . $user->lname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
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

