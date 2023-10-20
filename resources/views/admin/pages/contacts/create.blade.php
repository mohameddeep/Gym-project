@extends('admin.layout.app')
@section('title','create contacts')

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

            <form action="{{ route('dashbord_contact.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleFormControlInput1" class="form-label">subject</label>
                        <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      @error('subject')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>

                    @enderror
                  </div>
                  </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">subject</label>
                       <textarea name="message" id="" cols="30" rows="3"></textarea>
                      </div>
                      @error('message')
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
