@extends('admin.layout.app')

@section('title','all orders')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_order.create')}}" class="btn btn-primary mt-2 mb-2"> create order</a> --}}
    <thead>
        <th>id</th>
        <th>fname</th>
        <th>lname</th>
        <th>email</th>
        <th>phone</th>
        <th>company name</th>
        <th>address</th>
        <th>payment</th>
        <th>card number</th>
        <th>card name</th>
        <th>epiration date</th>
        <th>security code</th>
        <th>order owner</th>
        {{-- <th>order duration</th> --}}
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>

        @foreach ($orders as $order)
        <tr>

            <td>{{$order->id}}</td>
            <td>{{$order->fname}}</td>
            <td>{{$order->lname}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->company_name}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->payment}}</td>
            <td>{{$order->card_number}}</td>
            <td>{{$order->card_name}}</td>
            <td>{{$order->epiration_date}}</td>
            <td>{{$order->security_code}}</td>
            <td>{{$order->user?->fname . ' ' . $order->user?->lname}}</td>
            {{-- <td>{{$order->pricing?->duration}}</td> --}}
            <td><a href="{{route('dashbord_order.edit',$order->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_order.show',$order->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_order.destroy', $order->id) }}" method="post">
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
