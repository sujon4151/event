@extends('layouts.main')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Website Analytics-->
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Top Velocity</h5>

                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>POSITION</th>
                                            <th>PLAYER NAME</th>
                                            <th>SCHOOL NAME</th>
                                            <th>VALOCITY</th>
                                            <th>STATE</th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($students->orderBy('top_pitch_velocity', 'desc')->get() as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><strong>{{ $item->name }}</strong> </td>
                                                <td>{{ $item->school_name }}</td>
                                                <td>{{ $item->top_pitch_velocity }}</td>
                                                <td><span class="badge bg-label-primary me-1">{{ $item->state }}</span></td>


                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Top Sprint</h5>

                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>POSITION</th>
                                            <th>PLAYER NAME</th>
                                            <th>SCHOOL NAME</th>
                                            <th>SPRINT</th>
                                            <th>STATE</th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($students->orderBy('sprit_time', 'desc')->get() as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><strong>{{ $item->name }}</strong> </td>
                                                <td>{{ $item->school_name }}</td>
                                                <td>{{ $item->top_pitch_velocity }}</td>
                                                <td><span class="badge bg-label-primary me-1">{{ $item->state }}</span></td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Top Exit Valocity</h5>

                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>POSITION</th>
                                            <th>PLAYER NAME</th>
                                            <th>SCHOOL NAME</th>
                                            <th>EXIT VALOCITY</th>
                                            <th>STATE</th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>1</td>
                                            <td> <strong>Name</strong>
                                            </td>
                                            <td>School Name</td>
                                            <td>exit Valocity</td>
                                            <td><span class="badge bg-label-primary me-1">STATE</span></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Top Jump Height</h5>

                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>POSITION</th>
                                            <th>PLAYER NAME</th>
                                            <th>SCHOOL NAME</th>
                                            <th>JUMP HEIGHT</th>
                                            <th>STATE</th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($students->orderBy('vertical_jump_height', 'desc')->get() as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><strong>{{ $item->name }}</strong> </td>
                                            <td>{{ $item->school_name }}</td>
                                            <td>{{ $item->top_pitch_velocity }}</td>
                                            <td><span class="badge bg-label-primary me-1">{{ $item->state }}</span></td>


                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <!--/ Activity Timeline -->
            </div>
        </div>
        <!-- / Content -->

    </div>
    <!-- Content wrapper -->
@endsection
