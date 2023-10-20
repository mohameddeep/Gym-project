@extends('admin.layout.app')
@section('title','edit trainers')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>

                    @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('dashbord_order.update',$order->id) }}" method="post" >
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">fname</label>
                            <input type="text" value="{{ $order->fname }}" name="fname" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('fname')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                  <div class="card-body">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">lname</label>
                            <input type="text"  value="{{ $order->lname }}" name="lname" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('lname')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">phone</label>
                            <input type="text"  value="{{ $order->phone }}" name="phone" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('phone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">email</label>
                            <input type="email" value="{{ $order->email }}" name="email" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">company name</label>
                            <input type="text" value="{{ $order->company_name }}" name="company_name" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('company_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">address</label>
                            <input type="text"  value="{{ $order->address }}"  name="address" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('address')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">status</label>
                        <select name="user_id" class="form-control" id="exampleInputPassword1">
                            <option selected disabled>select your user</option>
                            @foreach ($users as $user)

                            <option value="{{ $user->id }}">{{ $user ->fname . ' ' . $user ->lname }}</option>

                            @endforeach


                        </select>
                      </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
