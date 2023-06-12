@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <div
                        class="card-header bg-gradient-success py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Add Vehicles</h6>
                        <div class="justify-content-end">
                            <a href="{{ route('vehicles.index') }}" class="btn btn-success btn-sm justify-content-end" >Back</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header font-weight-bolder">Add Vehicle</div>
                            <div style="background-color: #1c606a" class="card-body ">
                                @include('partials.errors')
                                <form method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="">
                                    <div class="row mb-3">

                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Make') }}</label>

                                        <div class="col-md-6">
                                            <input id="make" type="text" class="form-control @error('make') is-invalid @enderror" name="make" value="{{ old('make') }}"  autocomplete="make" autofocus>

                                            @error('make')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>

                                        <div class="col-md-6">
                                            <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}"  autocomplete="model">

                                            @error('model')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>

                                        <div class="col-md-6">
                                            <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}"  autocomplete="national_id">

                                            @error('year')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('License Photo') }}</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image">

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="plate_number" class="col-md-4 col-form-label text-md-end">{{ __('Plate Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="plate_number" type="text" class="form-control @error('plate_number') is-invalid @enderror" name="plate_number" value="{{ old('plate_number') }}"  autocomplete="plate_number">

                                            @error('plate_number')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    {{--    <!-- Modal -->--}}
    {{--    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header bg-gradient-primary text-white">--}}
    {{--                    <h5 class="modal-title " id="staticBackdropLabel">Add Driver</h5>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <form method="POST" action="{{ route('users.store') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

    {{--                                @error('name')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

    {{--                                @error('email')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="national_id" class="col-md-4 col-form-label text-md-end">{{ __('National ID') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id">--}}

    {{--                                @error('national_id')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('national_id') }}" required autocomplete="dob">--}}

    {{--                                @error('dob')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="modal-footer">--}}
    {{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Submit') }}--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}


    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection
