@extends('layouts.app')

@section('content')
    <section id="CommonBanner" class="banner-events">
        <div class="content text-center text-white">
            <div class="container">
                <h1 class="text-uppercase mb-3">Events</h1>
                <p><em>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</em></p>
            </div>
        </div>
    </section>
    <section class="view-event-section py-5">
        <div class="container">
            <h2 class="title  text-primary pb-3 mb-4 text-center">{{ $event->name }}</h2>
            <p class="text-center font-italic">{{ $event->description }}</p>

            <!-- event information  -->
            <div class="event-information mt-5">
                <div class="table-responsive">
                    <table class="table font-italic">
                        <tbody>
                            <tr>
                                <th>Date:</th>
                                <td>{{ $event->date }}</td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td>{{ $event->location }}</td>
                            </tr>
                            <tr>
                                <th>Ticket Price:</th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @foreach (json_decode($event->price_type) as $key => $item)
                                            <div class="custom-control custom-radio flex-grow-1">
                                                <input type="radio" class="custom-control-input priceInput"
                                                    id="Ticket{{ $key }}" name="ticket_price" value="${{ json_decode($event->price)[$key] }}">
                                                <label class="custom-control-label"
                                                    for="Ticket{{ $key }}">{{ $item }}: <span
                                                        class="text-secondary font-weight-bold">${{ json_decode($event->price)[$key] }}</span></label>
                                            </div>
                                        @endforeach


                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- event information  -->

        </div>
    </section>
    <section class="ticketPurchaseSection py-5">
        <div class="container">
            <div class="inner bg-light p-4">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#" class="text-primary font-bebas">First Name</label>
                                <input type="text" class="form-control border-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#" class="text-primary font-bebas">Last Name</label>
                                <input type="text" class="form-control border-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#" class="text-primary font-bebas">Player Email</label>
                                <input type="text" class="form-control border-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#" class="text-primary font-bebas">Player CellPhone # </label>
                                <input type="text" class="form-control border-0">
                            </div>
                        </div>
                    </div>
                    <div class="row action justify-content-end">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-primary btn-block py-2 priceBtn">Select Ticket Price</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-secondary btn-block py-2 buyBtn">BUY</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.buyBtn').attr('disabled',true)
        $('.priceInput').on('change',function(){
            $('.priceBtn').html($(this).val())
            $('.buyBtn').attr('disabled',false)
        })
    </script>
@endsection
