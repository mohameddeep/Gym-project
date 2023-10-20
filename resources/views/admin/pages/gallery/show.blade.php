@extends('admin.layout.app')

@section('title','show one gallery')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_trainer.create')}}" class="btn btn-primary mt-2 mb-2"> create trainer</a> --}}
    <thead>
        <th>id</th>
        <th>image</th>
        <th>status</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>
        <tr>
            <td>{{$gallery->id}}</td>
            <td><img src="{{ asset( 'images/gallery/' . $gallery->image) }}" width="40px" alt=""></td>
            <td > {{ $gallery-> status == 1?"avaliable" : "unavaliable" }} </td>
            <td><a href="{{route('dashbord_gallery.edit',$gallery->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_gallery.show',$gallery->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_gallery.destroy', $gallery->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>


        </tr>

    </tbody>
   </table>

   @endsection

