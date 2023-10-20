@extends('admin.layout.app')
@section('title','create user')

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
            <form action="{{ route('dashbord_user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="card-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">fname</label>
                        <input type="text" value="{{ $user->fname }}" name="fname" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('fname')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">lname</label>
                        <input type="text" value="{{ $user->lname }}" name="lname" class="form-control" id="exampleFormControlInput1" >
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
                        <input type="text" value="{{ $user->phone }}" name="phone" class="form-control" id="exampleFormControlInput1" >
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
                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" id="exampleFormControlInput1" >
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
                        <label for="exampleFormControlInput1" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">status</label>
                    <select name="trainer_id" class="form-control" id="exampleInputPassword1">
                        <option selected disabled>select your trainer</option>
                        @foreach ($trainers as $trainer)

                        <option value="{{ $trainer->id }}">{{ $trainer ->name }}</option>

                        @endforeach


                    </select>
                  </div>



              <!-- /.card-body -->


                <button type="submit" class="btn btn-primary">update</button>

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
