@extends('admin.layout.app')
@section('title','edit events')

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
            <form action="{{ route('dashbord_event.update',$event->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">event date</label>
                        <input type="date" value="{{ $event->event_date }}" name="event_date" class="form-control" id="exampleFormControlInput1" >
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
                        <input type="time" value="{{ $event->event_time }}" name="event_time" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('event_time')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>


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
