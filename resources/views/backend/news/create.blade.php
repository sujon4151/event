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
                    <h5 class="card-header">Add News </h5>
                    <form class="card-body" method="POST" action="{{ route('news.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-5">
                                <label class="form-label" for="title"> News Heading</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Name" />
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="date">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label" for="date"></label>
                                <div class="form-check mt-3">
                                    <label class="form-check-label" for="defaultCheck1"> Fetured News </label>
                                    <input class="form-check-input" type="checkbox" value="1" id="is_featured"
                                        name="is_featured">

                                </div>
                            </div>


                            <div class="col-md-12">
                                <label class="form-label" for="description">Description </label>
                                <!-- Snow Theme -->
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <h5 class="card-header">Write Details</h5>
                                        <div class="card-body">
                                            <div id="snow-toolbar">
                                                <span class="ql-formats">
                                                    <select class="ql-font"></select>
                                                    <select class="ql-size"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-strike"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <select class="ql-color"></select>
                                                    <select class="ql-background"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-script" value="sub"></button>
                                                    <button class="ql-script" value="super"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-header" value="1"></button>
                                                    <button class="ql-header" value="2"></button>
                                                    <button class="ql-blockquote"></button>
                                                    <button class="ql-code-block"></button>
                                                </span>
                                            </div>
                                            <div id="snow-editor">

                                            </div>
                                            <input type="hidden" id="detail" name="description"
                                            value="">
                                        </div>
                                    </div>
                                </div>
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
