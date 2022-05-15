@extends('layouts.app')

@section('content')
    <section id="CommonBanner" class="banner-leaderboard">
        <div class="content text-center text-white">
            <div class="container">
                <h1 class="text-uppercase mb-3">LEADER BOARD</h1>
                <p><em>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</em></p>
            </div>
        </div>
    </section>
    <section class="view-event-section py-5">
        <div class="container">
            <h2 class="title  text-primary pb-3 mb-4">Lorem Ipsum has be en the industry's standard dum</h2>

            <!-- leaderboard table  -->
            <div class="table-responsive">
                <table class="table leaderboard-table">
                    <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Name of player</th>
                            <th scope="col">School Name</th>
                            <th scope="col" class="text-center">Velocity Record </th>
                        </tr>
                    </thead>
                    <tbody class="font-italic">
                        @foreach ($leaderboards as $key => $item)
                            <tr>
                                <td scope="row" class="font-weight-bold text-secondary">{{ $key + 1 }}</td>
                                <td scope="row" class="text-primary font-weight-bold"><a href="{{ route('home.playerProfile',$item->id) }}">{{ $item->name }}
                                    ({{ $item->state }}) </a>
                                </td>
                                <td scope="row" class="font-weight-bold text-primary">{{ $item->school_name }}</td>

                                <td scope="row" class="text-center">
                                    <span class="tilted-tag  bg-primary text-nowrap px-lg-5 py-1 text-white ">
                                        <span>{{ $item->top_pitch_velocity }}</span>
                                    </span>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


        </div>
    </section>
@endsection
