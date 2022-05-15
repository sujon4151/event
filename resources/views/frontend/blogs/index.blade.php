@extends('layouts.app')

@section('content')
    <section id="CommonBanner" class="banner-blog">
        <div class="content text-center text-white">
            <div class="container">
                <h1 class="text-uppercase mb-3">{{ $pageInfo[0]->name }}</h1>
                <p><em>{{ $pageInfo[0]->title }}</em></p>
            </div>
        </div>
    </section>
    <section class="EventSection py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="text-primary title pb-2 mb-4">{{ $pageInfo[0]->header }}</h2>
                    <div class="row events-list">
                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="event position-relative  bg-primary">
                                <span class="tilted-tag bg-light-2 event-tag position-absolute text-white">
                                    <span class="text-secondary">WI</span>
                                </span>
                                <div class="inner">
                                    <div class="content text-white">
                                        <h3>Lorem Ipsum has be en the industry 's standard dum</h3>
                                        <p class="font-weight-medium">Lorem Ipsum has been the industry's standard dummy
                                            text ever since
                                            the
                                            1500s...</p>
                                    </div>
                                    <span
                                        class="tilted-tag  bg-light-2  bg-secondary event-date text-primary position-absolute">
                                        <span>29-04-2022</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- pagiantion  -->
                    <ul class="custom-pagination justify-content-end mt-4">
                        <li><a href="#" class="pagination-link prev disabled">
                                <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-left"></i> -->
                            </a></li>
                        <li><a href="#" class="pagination-link active">1</a></li>
                        <li><a href="#" class="pagination-link">2</a></li>

                        <li><a href="#" class="pagination-link">...</a></li>
                        <li><a href="#" class="pagination-link">9</a></li>
                        <li><a href="#" class="pagination-link">10</a></li>
                        <li><a href="#" class="pagination-link next">
                                <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> -->
                            </a></li>
                    </ul>
                    <!-- pagiantion  ends-->

                </div>
                <div class="col-lg-4">
                    <!-- upcoming events  -->
                    <div class="upcoming-events">
                        <h2 class="text-secondary title title-2 pb-2  mb-4">Recent posts</h2>
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white border-bottom d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white border-bottom d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white border-bottom d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white border-bottom d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white border-bottom d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                        <!-- upcoming event  -->
                        <div class="upcoming-event bg-white  d-flex align-items-center">
                            <span class="tilted-tag text-nowrap bg-secondary text-white mr-3">
                                <span>29-04-2022</span>
                            </span>
                            <h4>Lorem Ipsum has be en the isa</h4>
                        </div>
                        <!-- upcoming event  ends-->
                    </div>
                    <!-- upcoming events ends -->

                </div>
            </div>
        </div>
    </section>
@endsection
