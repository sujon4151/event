@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('/admin/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/admin/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/admin/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header">Add Athlete </h5>
                    <form class="card-body" method="POST" action="{{ route('student.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="fw-normal"> Personal Info</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label" for="name"> Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control" placeholder="Age" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="gender">Gender</label>
                                <select name="gender" id="gender" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="height">Height</label>
                                <input type="number" id="height" name="height" class="form-control"
                                    placeholder="Height" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="weight">Weight</label>
                                <input type="number" name="weight" id="weight" class="form-control"
                                    placeholder="Weight" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="school_level">School Level</label>
                                <select id="school_level" name="school_level" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="1">High School</option>
                                    <option value="2">4 Year College</option>
                                    <option value="3">2 Year/JUCO</option>
                                    <option value="4">Free Agent/Post School </option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="school_name">School Name</label>
                                <input type="text" name="school_name" id="school_name" class="form-control"
                                    placeholder="school name" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder="state" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="position">Position</label>
                                <input type="text" name="position" id="position" class="form-control"
                                    placeholder="Position" />
                            </div>
                        </div>
                        <hr class="my-4 mx-n4">
                        <h6 class="fw-normal">Statics </h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label" for="top_pitch_velocity"> Top pitch velocity</label>
                                <input type="text" name="top_pitch_velocity" id="top_pitch_velocity" class="form-control"
                                    placeholder="Top pitch velocity" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="average_velocity">Average Velocity</label>
                                <input type="text" id="average_velocity" name="average_velocity" class="form-control"
                                    placeholder="Average Velocity" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="sprit_time">Sprint time</label>
                                <input type="text" name="sprit_time" id="sprit_time" class="form-control"
                                    placeholder="Sprint time" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="vertical_jump_height">Vertical jump height</label>
                                <input type="text" id="vertical_jump_height" name="vertical_jump_height"
                                    class="form-control" placeholder="Vertical jump heigh" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="hitting_rap">Hitting Rapsodo</label>
                                <input type="text" name="hitting_rap" id="hitting_rap" class="form-control"
                                    placeholder="Hitting Rapsodo" />
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="resistance_ratio">3d resistance ratio </label>
                                <input type="text" name="resistance_ratio" id="resistance_ratio" class="form-control"
                                    placeholder="3d resistance ratio " />
                            </div>
                        </div>

                        <hr class="my-4 mx-n4">
                        <h6 class="fw-normal">VIDEOS </h6>
                        <div class="row g-3">
                            <div class="col-md-7">
                                <label class="form-label" for="velocity_video"> Velocity /Pitch video link </label>
                                <input type="text" name="velocity_video" id="velocity_video" class="form-control"
                                    placeholder="Velocity /Pitch video link" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="valo_video_date">Video date </label>
                                <input type="text" id="flatpickr-datetime" name="valo_video_date"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>
                            <div class="col-md-7">
                                <label class="form-label" for="velocity_video2"> Velocity /Pitch video link 2
                                </label>
                                <input type="text" name="velocity_video2" id="velocity_video2" class="form-control"
                                    placeholder="Velocity /Pitch video link 2" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="valo_video_date2">Video date </label>
                                <input type="text" id="valo_video_date2" name="valo_video_date2"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="col-md-7">
                                <label class="form-label" for="sprint_video"> Spint video link: </label>
                                <input type="text" name="sprint_video" id="sprint_video" class="form-control"
                                    placeholder="Spint video link:" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="multicol-last-name">It's date </label>
                                <input type="text" name="sprint_video_date" id="sprint_video_date"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="col-md-7">
                                <label class="form-label" for="jump_video_link"> Jump video link: </label>
                                <input type="text" name="jump_video_link" id="jump_video_link" class="form-control"
                                    placeholder="Jump video link:" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="jump_video_link_date">It's date </label>
                                <input type="text" name="jump_video_link_date" id="jump_video_link_date"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>


                            <div class="col-md-7">
                                <label class="form-label" for="hitting_video"> Hitting video link </label>
                                <input type="text" id="hitting_video" name="hitting_video" class="form-control"
                                    placeholder="Hitting vide link" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="hitting_video_date">It's date </label>
                                <input type="text" name="hitting_video_date" id="hitting_video_date"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="col-md-7">
                                <label class="form-label" for="resistance_video"> Resistance video link </label>
                                <input type="text" name="resistance_video" id="resistance_video" class="form-control"
                                    placeholder="Resistance video link " />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="resistance_video_date">It's date </label>
                                <input type="text" name="resistance_video_date" id="resistance_video_date"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="col-md-5">
                                <label class="form-label" for="description">Description </label>
                                <textarea type="text" name="description" id="description" class="form-control dob-picker"
                                    placeholder="Write Details"></textarea>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label" for="date">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>

                        </div>

                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

                        </div>
                    </form>
                </div>


                <!--/ Activity Timeline -->
            </div>
        </div>
        <!-- / Content -->

    </div>
    <!-- Content wrapper -->
    <!-- Page JS -->
@endsection
@section('js')
    <script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/pickr/pickr.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/forms-pickers.js') }}"></script> --}}
    <script>
        $('.dob-picker').flatpickr({
            enableTime: false,
            dateFormat: 'Y-m-d '
        });
    </script>
@endsection
