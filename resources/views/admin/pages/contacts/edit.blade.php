@extends('admin.layout.app')
@section('title','edit contacts')

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
            <form action="{{ route('dashbord_contact.update',$contact->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">name</label>
                            <input type="text" value="{{ $contact->name }}" name="name" class="form-control" id="exampleFormControlInput1" >
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
                            <input type="email" value="{{ $contact->email }}" name="email" class="form-control" id="exampleFormControlInput1" >
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
                            <input type="text" value="{{ $contact->subject }}" name="subject" class="form-control" id="exampleFormControlInput1" >
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
                           <textarea name="message" id=""  cols="30" rows="3">{{ $contact->message }}</textarea>
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
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
