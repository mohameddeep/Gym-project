@extends('admin.layout.app')

@section('title','all admins')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_admin.create')}}" class="btn btn-primary mt-2 mb-2"> create admin</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>course place</th>
        <th>course description</th>
        <th>event date</th>
        <th>event time</th>
        <th>image</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>
        <tr>

            <td>{{$class->id}}</td>
            <td>{{$class->name}}</td>
            <td>{{$class->place}}</td>
            <td>{{$class->course_descr}}</td>
            <td>{{$class->event?->event_date}}</td>
            <td>{{$class->event?->event_time}}</td>
            <td><img src="{{ asset( 'images/class/' . $class->image)}}" width="10" height="10" alt=""></td>
            <td><a href="{{route('dashbord_class.edit',$class->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_class.show',$class->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_class.destroy', $class->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>

        </tr>

    </tbody>
   </table>

   @endsection

