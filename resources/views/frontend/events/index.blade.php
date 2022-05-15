@extends('layouts.app')

@section('content')
    <section id="CommonBanner" class="banner-events">
        <div class="content text-center text-white">
            <div class="container">
                <h1 class="text-uppercase mb-3">upcoming events</h1>
                <p><em>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</em></p>
            </div>
        </div>
    </section>
    <section class="upcoming-event-section py-5">
        <div class="container">
            <h2 class="title title-2 text-secondary pb-3 mb-4">upcoming events</h2>

            <div class="table-responsive">
                <table class="table upcoming-events-table">
                    <thead>
                        <tr>
                            <th scope="col">Showcase</th>
                            <th scope="col">State</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody class="font-italic">
                        @foreach ($events as $item)
                            <tr>
                                <td scope="row" class="font-weight-bold text-secondary"><a
                                        href="{{ route('home.viewEvent', $item->id) }}"
                                        rel="noopener noreferrer">{{ $item->name }}</a> </td>
                                <td scope="row" class="text-primary font-weight-bold">{{ $item->state }}</td>
                                <td scope="row" class="text-center"><span
                                        class="tilted-tag  bg-light-2  bg-secondary text-nowrap text-primary">
                                        <span>{{ $item->date }}</span>
                                    </span></td>
                                <td scope="row" class="font-weight-medium text-primary">{{ $item->location }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <!-- pagination  -->
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
            <!-- pagination ends -->

        </div>
    </section>
@endsection
