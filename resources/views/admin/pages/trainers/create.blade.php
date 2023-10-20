@extends('admin.layout.app')
@section('title','create trainer')

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
            <form action="{{ route('dashbord_trainer.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" >
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
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" >
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
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">qualification</label>
                        <input type="text" name="qualification" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('qualification')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">description</label>
                        <input type="text" name="description" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">specality</label>
                        <input type="text" name="specality" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('specality')
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
                    <select name="course_id" class="form-control" id="exampleInputPassword1">
                        <option selected disabled>select your class</option>
                        @foreach ($classes as $class)

                        <option value="{{ $class->id }}">{{ $class ->name }}</option>

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
