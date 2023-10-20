@extends('admin.layout.app')

@section('title','all contacts')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_contact.create')}}" class="btn btn-primary mt-2 mb-2"> create contact</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>

        @foreach ($contacts as $contact)
        <tr>

            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->message}}</td>
            <td><a href="{{route('dashbord_contact.edit',$contact->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_contact.show',$contact->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_contact.destroy', $contact->id) }}" method="post">
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
