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
                        class="card-header bg-gradient-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Users</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header font-weight-bolder">User</div>
                            <div class="card-body">
                                @if($users->count()> 0)
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date added</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <th>{{ $user->id }}</th>
                                                <th>{{ $user->name }}</th>
                                                <th>{{ $user->email }}</th>
                                                <th>{{ $user->created_at }}</th>
                                                <th>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h3 class='text-center alert alert-danger'>No Vehicles added</h3>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->



@endsection
