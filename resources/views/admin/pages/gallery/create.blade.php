@extends('admin.layout.app')
@section('title','create gallery')

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
            <form action="{{ route('dashbord_gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

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
                        <select name="status" class="form-control" id="exampleInputPassword1">
                            <option selected disabled>الحالة</option>
                            <option value="1">avaliable</option>
                            <option value="0">unavaliable</option>
                        </select>
                      </div>
                      @error('status')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
