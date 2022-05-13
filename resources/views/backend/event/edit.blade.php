@extends('layouts.main')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header">Edit Event </h5>
                    <form class="card-body" method="POST" action="{{ route('event.update', $event->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">
                            <div class="col-md-5">
                                <label class="form-label" for="name"> Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $event->name) }}"
                                    class="form-control" placeholder="Name" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="date">Date</label>
                                <input type="text" name="date" id="date" value="{{ old('date', $event->date) }}"
                                    class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                            </div>

                            <div class="col-md-5">
                                <label class="form-label" for="price_type">Price Type</label>
                                <select id="price_type" name="price_type" class="select2 form-select"
                                    data-allow-clear="true" required>
                                    <option value="">Select</option>
                                    <option value="1" {{ $event->price_type == 1 ? 'selected' : '' }}>Price for jump
                                    </option>
                                    <option value="2" {{ $event->price_type == 2 ? 'selected' : '' }}>Price for sprint
                                    </option>
                                    <option value="3" {{ $event->price_type == 3 ? 'selected' : '' }}>Price for both
                                    </option>


                                </select>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label" for="price">Price</label>
                                <input type="text" name="price" id="price" value="{{ old('price', $event->price) }}"
                                    class="form-control" placeholder="price" />
                            </div>

                            <div class="col-md-5">
                                <label class="form-label" for="description">Description </label>
                                <textarea type="text" name="description" id="description" class="form-control dob-picker"
                                    placeholder="Write Details">{{ old('description', $event->description) }}</textarea>
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
    <script src="admin/assets/js/form-layouts.js"></script>
@endsection
