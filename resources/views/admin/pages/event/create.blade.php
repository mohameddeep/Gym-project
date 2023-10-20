@extends('admin.layout.app')
@section('title','create events')

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

            <form action="{{ route('dashbord_event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">topic</label>
                        <input type="text" name="topic" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('topic')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">event description</label>
                        <br>
                       <textarea name="event_descr" id="" cols="50" rows="5"></textarea>
                      </div>
                      @error('event_descr')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">event date</label>
                        <input type="date" name="event_date" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('event_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>


                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">event time</label>
                        <input type="time" name="event_time" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('event_time')
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


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>

        </div>


      </div>

    </div>
  </section>
@endsection
