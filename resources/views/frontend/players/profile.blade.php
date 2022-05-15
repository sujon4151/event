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
            <h2 class="title  text-primary pb-3 mb-4">{{ $player->name }}</h2>

            <div class="row">
                <div class="col-lg-9 order-lg-1 order-2">
                    <!-- player information  -->
                    <div class="player-information">
                        <div class="table-responsive">
                            <table class="table font-italic">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $player->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Born:</th>
                                        <td>Apr 4, 2001 in San Pedro de Marcoris, Dominican Republic</td>
                                    </tr>
                                    <tr>
                                        <th>height:</th>
                                        <td>{{ $player->height }}</td>
                                    </tr>
                                    <tr>
                                        <th>Weight:</th>
                                        <td>{{ $player->weight }}</td>
                                    </tr>
                                    <tr>
                                        <th>bats:</th>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <th>throws:</th>
                                        <td>R</td>
                                    </tr>
                                    <tr>
                                        <th>sprit time:</th>
                                        <td>{{ $player->sprit_time }}</td>
                                    </tr>
                                    <tr>
                                        <th>top velocity:</th>
                                        <td>{{ $player->top_pitch_velocity }}</td>
                                    </tr>
                                    <tr>
                                        <th>state:</th>
                                        <td>{{ $player->state }}</td>
                                    </tr>
                                    <tr>
                                        <th>description:</th>
                                        <td>{{ $player->description }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- player information  -->

                </div>
                <div class="col-lg-3 order-lg-1 order-1 mb-4 mb-lg-0">
                    <div class="player-img">
                        <img src="/frontend/images/player.png" alt="player">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="playerVideos">
        <div class="container">
            <div class="video-list slick-initialized slick-slider slick-dotted"><button
                    class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true"
                    style="">Previous</button>
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 2191px; transform: translate3d(0px, 0px, 0px);">
                        <div class="player-video-box text-center slick-slide slick-current slick-active"
                            data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00"
                            aria-describedby="slick-slide-control00" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">Velocity/Pitch</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide slick-active" data-slick-index="1"
                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">sprint</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide slick-active" data-slick-index="2"
                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">jump</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide slick-active" data-slick-index="3"
                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">3d resistance</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide" data-slick-index="4" aria-hidden="true"
                            tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control01"
                            style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">3d resistance</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide" data-slick-index="5" aria-hidden="true"
                            tabindex="-1" role="tabpanel" id="slick-slide05" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">3d resistance</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                        <div class="player-video-box text-center slick-slide" data-slick-index="6" aria-hidden="true"
                            tabindex="-1" role="tabpanel" id="slick-slide06" style="width: 283px;">
                            <div class="video-box-2 position-relative mb-4">
                                <img src="/frontend/images/video-thumbnail-2.png" alt="video thumbnail">
                                <div class="overlay position-absolute d-flex align-items-center justify-content-center">
                                    <span class="btn-play cursor-pointer" data-toggle="modal" data-target="#PlayVideoModal">
                                        <img src="/frontend/images/play-btn.png" alt="play btn" class="d-inline-block">
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-primary mb-2">3d resistance</h3>
                            <span class="tilted-tag h6 font-montserrat font-italic bg-secondary text-white">
                                <span>29-04-2022</span>
                            </span>
                        </div>
                    </div>
                </div>

















                <button class="slick-next slick-arrow" aria-label="Next" type="button" style=""
                    aria-disabled="false">Next</button>
                <ul class="slick-dots" style="" role="tablist">
                    <li class="slick-active" role="presentation"><button type="button" role="tab"
                            id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0"
                            aria-selected="true">1</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control01"
                            aria-controls="slick-slide04" aria-label="2 of 2" tabindex="-1">2</button></li>
                </ul>
            </div>



        </div>
    </section>
    <div class="modal fade" id="PlayVideoModal" tabindex="-1" role="dialog" aria-labelledby="PlayVideoModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Video Title </h5>
              <button type="button" class="close text-secondary h2 py-1 px-3" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <video class="w-100" height="400" controls="">
                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
              </video>
            </div>
            
          </div>
        </div>
      </div>
@endsection
