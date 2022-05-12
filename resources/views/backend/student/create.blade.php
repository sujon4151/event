@extends('layouts.main')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header">Add Student</h5>
                    <form class="card-body">


                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="multicol-first-name">First Name</label>
                                <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="multicol-last-name">Last Name</label>
                                <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="multicol-country">School Level</label>
                                <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Type">Type 1</option>
                                    <option value="Type">Type 2</option>
                                    <option value="Type">Type 3</option>
                                    <option value="Type">Type 4</option>

                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="multicol-last-name">School Name</label>
                                <input type="text" id="multicol-last-name" class="form-control"
                                    placeholder="school name" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="multicol-country">State</label>
                                <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Type">State 1</option>
                                    <option value="Type">State 2</option>

                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="multicol-last-name">Position</label>
                                <input type="text" id="multicol-last-name" class="form-control" placeholder="Position" />
                            </div>


                            {{-- <div class="col-md-6">
                                <label class="form-label" for="multicol-birthdate">Birth Date</label>
                                <input type="text" id="multicol-birthdate" class="form-control dob-picker"
                                    placeholder="YYYY-MM-DD" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="multicol-phone">Phone No</label>
                                <input type="text" id="multicol-phone" class="form-control phone-mask"
                                    placeholder="658 799 8941" aria-label="658 799 8941" />
                            </div> --}}
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>
                </div>


                <!--/ Activity Timeline -->
            </div>
        </div>
        <!-- / Content -->

    </div>
    <!-- Content wrapper -->
@endsection
