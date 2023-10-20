@extends('admin.layout.app')
@section('title','edit classs')

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
            <form action="{{ route('dashbord_class.update',$class->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="card-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">name</label>
                        <input type="text" value="{{ $class->name }}" name="name" class="form-control" id="exampleFormControlInput1" >
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
                        <label for="exampleFormControlInput1" class="form-label">course place</label>
                        <input type="text" value="{{ $class->place }}" name="place" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('place')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">course description</label>
                        <br>
                       <textarea name="course_descr" id="" cols="50" rows="5">{{ $class->course_descr }}</textarea>
                      </div>
                      @error('course_descr')
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">update</button>
                  </div>

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
