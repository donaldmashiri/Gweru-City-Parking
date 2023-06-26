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
                                <input type="text"class="form-group form-control" id="searchInput" placeholder="Search">

                            @if($users->count() > 0)
                                    <table id="usersTable" class="table table-bordered table-sm">
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
                                            <tr class="userRow">
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h3 class='text-center alert alert-danger'>No Users added</h3>
                                @endif
                            </div>

                            <script>
                                function searchByName() {
                                    // Get the search input value
                                    var input = document.getElementById("searchInput").value.toLowerCase();

                                    // Get all the rows in the table body
                                    var rows = document.getElementsByClassName("userRow");

                                    // Loop through each row and hide/show based on search input
                                    for (var i = 0; i < rows.length; i++) {
                                        var nameCell = rows[i].getElementsByTagName("td")[1]; // Index 1 corresponds to the "Name" column

                                        if (nameCell) {
                                            var name = nameCell.textContent || nameCell.innerText;
                                            if (name.toLowerCase().indexOf(input) > -1) {
                                                rows[i].style.display = ""; // Show the row
                                            } else {
                                                rows[i].style.display = "none"; // Hide the row
                                            }
                                        }
                                    }
                                }

                                // Attach an event listener to the search input field
                                document.getElementById("searchInput").addEventListener("keyup", searchByName);
                            </script>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->



@endsection
