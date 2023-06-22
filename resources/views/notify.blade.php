@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
              <div class="row">
                  @foreach($clamps as $clamp)
                      <div class="col-lg-3 mb-4">
                          <div class="card bg-secondary text-white shadow">
                              <div class="card-body border border-white">
                                  <img src="{{ asset('storage/' . $clamp->image) }}" alt="" width="80" height="60">
                                  {{ $clamp->reason }}
                                  <p class="text-info fw-bolder"> {{ $clamp->plate_number }}</p>
                                  <div class="text-white-50 small">{{ $clamp->created_at }}</div>
                              </div>
                              <div>
                                  <td>
                                      <a href="https://www.google.com/maps/dir/?api=1&destination={{ $clamp->latitude }},{{ $clamp->longitude }}" target="_blank" class="btn btn-primary btn-sm">
                                          Get Directions
                                      </a>
                                  </td>

                              </div>
                          </div>
                      </div>


                      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
                      <!-- Include SweetAlert JS -->
                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

                      @if($clamps->count() > 0)
                          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                          <script>
                              swal({
                                  title: "Notifications!",
                                  text: "Your Vehicle has been Clamped",
                                  icon: "success",
                              });
                          </script>
                      @endif


                  @endforeach


              </div>
            </div>

        </div>

    </div>

@endsection
