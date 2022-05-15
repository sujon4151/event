@extends('layouts.app')

@section('content')
<section id="CommonBanner" class="banner-player">
  <div class="content text-center text-white">
    <div class="container">
      <h1 class="text-uppercase mb-3">Players</h1>
      <p><em>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</em></p>
    </div>
  </div>
</section>
<section class="view-event-section py-5">
      <div class="container">
        <h2 class="title  text-primary pb-3 mb-4">Lorem Ipsum has be en the industry's standard dum</h2>

        <!-- players table  -->
        <div class="table-responsive">
          <table class="table players-list-table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Player</th>
                <th scope="col">School</th>
                <th scope="col">Pitch velocity</th>
                <th scope="col">sprint time</th>
                <th scope="col">Exit Velocity</th>
                <th scope="col">Jump Velocity</th>
              </tr>
            </thead>
            <tbody class="font-italic">
              @foreach ($players as $key => $item)
              <tr>
                <td scope="row" class="font-weight-bold text-secondary">{{ $key+1 }}</td>
                <td scope="row" class="text-primary font-weight-bold">
                  <div class="player d-flex align-items-center">
                    <img src="/frontend/images/player.png" alt="player" class="player-img">
                    <a href="{{ route('home.playerProfile',$item->id) }}"><p>{{  $item->name }}</p> </a>
                    
                  </div>
                </td>
                <td scope="row" class="font-weight-medium text-primary">{{  $item->school_name }}</td>
                <td scope="row" class="font-weight-medium text-primary">{{  $item->top_pitch_velocity }}</td>
                <td scope="row" class="font-weight-medium text-primary">{{  $item->sprit_time }}</td>
                <td scope="row" class="font-weight-medium text-primary">{{  $item->hitting_rap }}</td>
                <td scope="row" class="font-weight-medium text-primary">{{  $item->vertical_jump_height }}</td>
              </tr>

              @endforeach
            
             
            </tbody>
          </table>
        </div>
        <!-- players table  -->
        <!-- pagiantion  -->
        <ul class="custom-pagination justify-content-end mt-4">
          <li><a href="#" class="pagination-link prev disabled">
            <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg><!-- <i class="fas fa-angle-left"></i> -->
          </a></li>
          <li><a href="#" class="pagination-link active">1</a></li>
          <li><a href="#" class="pagination-link">2</a></li>
        
          <li><a href="#" class="pagination-link">...</a></li>
          <li><a href="#" class="pagination-link">9</a></li>
          <li><a href="#" class="pagination-link">10</a></li>
          <li><a href="#" class="pagination-link next">
            <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg><!-- <i class="fas fa-angle-right"></i> -->
          </a></li>
        </ul>
        <!-- pagiantion  ends-->

      </div>
    </section>
@endsection
