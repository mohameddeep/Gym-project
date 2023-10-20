@extends('admin.layout.app')
@section('title','edit offers')

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
            <form action="{{ route('dashbord_offer.update',$offer->id) }}" method="post" >
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">duration</label>
                            <input type="text" value="{{ $offer->duration }}" name="duration" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('duration')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">price</label>
                            <input type="text" value="{{ $offer->price }}" name="price" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">options</label>
                            <input type="text" value="{{ $offer->options }}" name="options" class="form-control" id="exampleFormControlInput1" >
                          </div>
                          @error('options')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>

                        @enderror
                      </div>
                      </div>
                    {{-- <div class="form-group">
                        <div class="mb-3">
                        <label for="exampleInputPassword1">status</label>
                        <select name="user_id" class="form-control" id="exampleInputPassword1">
                            <option selected disabled>select your offer</option>
                            @foreach ($users as $user)

                            <option value="{{ $user->id }}">{{ $user ->name }}</option>

                            @endforeach


                        </select>
                      </div> --}}
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
