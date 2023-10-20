@extends('admin.layout.app')

@section('title','show one partner')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_trainer.create')}}" class="btn btn-primary mt-2 mb-2"> create trainer</a> --}}
    <thead>
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th>status</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>
        <tr>
            <td>{{$partner->id}}</td>
            <td>{{$partner->name}}</td>
            <td><img src="{{ asset( 'images/partner/' . $partner->image) }}" width="40px" alt=""></td>
            <td > {{ $partner-> status == 1?"avaliable" : "unavaliable" }} </td>
            <td><a href="{{route('dashbord_partner.edit',$partner->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_partner.show',$partner->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_partner.destroy', $partner->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>


        </tr>

    </tbody>
   </table>

   @endsection

