@extends('layouts.main')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="card">
                    <h5 class="card-header">Athlete List
                        <span style="float: right;"><a href="{{ route('student.create') }}"
                                class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Add
                                Athlete</a></span>
                    </h5>
                    <hr>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Player Name</th>
                                    <th>School Name</th>
                                    <th>School Level</th>
                                    <th>Position</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <strong>{{ $student->name }}</strong>
                                        </td>
                                        <td>{{ $student->school_name }}</td>
                                        <td>
                                            <?php if ($student->school_level == 1) {
                                                echo '<span class="badge bg-label-primary me-1">High School</span> ';
                                            } elseif ($student->school_level == 2) {
                                                echo '<span class="badge bg-label-info me-1">4 year college</span> ';
                                            } elseif ($student->school_level == 3) {
                                                echo '<span class="badge bg-label-success me-1">2year/JUCO</span> ';
                                            } elseif ($student->school_level == 4) {
                                                echo '<span class="badge bg-label-warning me-1">Free agent/Post School</span> ';
                                            } ?>
                                        </td>
                                        <td>{{ $student->position }}</td>
                                        <td>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                                <a href="{{ route('student.edit', $student->id) }}" type="button"
                                                    class="btn btn-sm btn-outline-primary">Edit</a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- / Content -->

        </div>
        <!-- Content wrapper -->


        <!-- / Content -->

    </div>
    <!-- Content wrapper -->
@endsection
