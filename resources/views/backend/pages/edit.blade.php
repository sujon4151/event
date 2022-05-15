@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/editor.css') }}" />
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Multi Column with Form Separator -->
                <div class="card mb-4">
                    <h5 class="card-header">EDIT {{ strtoupper($page->page_slug) }} PAGES </h5>
                    <form class="card-body" method="POST" action="{{ route('page.update', $page->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <hr class="my-3 mx-n2">
                        <h6 class="fw-normal"> Page Info</h6>
                        <div class="row g-3">


                            <div class="col-md-6">
                                <label class="form-label" for="title"> Page Heading</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $page->name) }}"
                                    class="form-control" placeholder="Page Heading" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title"> Page Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $page->title) }}"
                                    class="form-control" placeholder="Title" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="header"> Page Sub Heading</label>
                                <input type="text" name="header" id="header" value="{{ old('header', $page->header) }}"
                                    class="form-control" placeholder="Sub Header" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="banner">Banner</label>
                                <input class="form-control" type="file" id="banner" name="banner"
                                    value="{{ old('file', $page->file) }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="video_link">Video Link</label>
                                <input class="form-control" type="text" id="video_link" name="video_link"
                                    value="{{ old('video_link', $page->video_link) }}" placeholder="Write Video Link">
                            </div>

                        </div>
                        <hr class="my-4 mx-n4">
                        <h6 class="fw-normal"> ADD Banner Section</h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="add_banner_1">Add Banner 1</label>
                                <input class="form-control" type="file" id="add_banner_1" name="add_banner_1"
                                    value="{{ old('file', $page->file) }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="add_banner_2">Add Banner 2</label>
                                <input class="form-control" type="file" id="add_banner_2" name="add_banner_2"
                                    value="{{ old('file', $page->file) }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="add_banner_3">Add Banner 3</label>
                                <input class="form-control" type="file" id="add_banner_3" name="add_banner_3"
                                    value="{{ old('file', $page->file) }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="add_banner_4">Add Banner 4</label>
                                <input class="form-control" type="file" id="add_banner_4" name="add_banner_4"
                                    value="{{ old('file', $page->file) }}">
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
@section('js')
    <script src="{{ asset('admin/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/quill/quill.js') }}"></script>
    <script>
        const snowEditor = new Quill('#snow-editor', {
            bounds: '#snow-editor',
            modules: {
                formula: true,
                toolbar: '#snow-toolbar'
            },
            theme: 'snow'
        });
        snowEditor.on('text-change', function(delta, oldDelta, source) {
            console.log(snowEditor.container.firstChild.innerHTML)
            $('#detail').val(snowEditor.container.firstChild.innerHTML);
        });
    </script>
@endsection
