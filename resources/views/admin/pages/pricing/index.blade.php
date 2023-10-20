@extends('admin.layout.app')

@section('title','all offers')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_offer.create')}}" class="btn btn-primary mt-2 mb-2"> create offer</a> --}}
    <thead>
        <th>id</th>
        <th>duration</th>
        <th>price</th>
        <th>options</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>

        @foreach ($offers as $offer)
        <tr>

            <td>{{$offer->id}}</td>
            <td>{{$offer->duration}}</td>
            <td>{{$offer->price}}</td>
            <td>{{$offer->options}}</td>
            <td><a href="{{route('dashbord_offer.edit',$offer->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_offer.show',$offer->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_offer.destroy', $offer->id) }}" method="post">
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
