<div>
    @include('partials.nav')

    {{-- HERO --}}
    <div class="img-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-11 col-xl-10">
                    @if ($destination->hero_img)
                        <img src="{{ asset('uploads/destinations/heros/' . $destination->hero_img) }}"
                            class="img-fluid rounded shadow-lg" alt="Hero Example">
                    @else
                        <img src="https://picsum.photos/1200/600" class="img-fluid rounded shadow-lg" alt="Hero Example">
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- END HERO --}}


    {{-- DESCRIPTION --}}
    <div class="description mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 pe-4">
                    <h2 class="name mb-4">{{ $destination->name }}</h2>
                    <span class="location">
                        <h6><i class="fa-solid fa-location-dot me-2"></i>{{ $destination->location }} <span
                                class="mx-5">|</span> <small>Opened: <span
                                    class="time">{{ $destination->time }}</span></small></h6>
                    </span>
                    <div class="wrap d-flex flex-row justify-content-between mt-4 mb-3">
                        <h3 class="title ps-3">Description</h3>
                        <h3 class="review d-flex align-items-start"><i
                                class="fa-solid fa-star me-1"></i>{{ number_format($rating_value, 1) }}</h3>
                    </div>
                    <div>
                        {!! $destination->description !!}
                    </div>

                    <div class="card-order rounded p-4 d-block d-lg-none mt-4">
                        <h3 class="caption">Start From</h3>
                        <h2 class="price">${{ $destination->price }}</h2>
                        <a href="#" class="button d-inline-block text-center w-100 mt-3">Order Ticket</a>
                        <hr>
                        <h5 class="transaction m-0">ticket FLEXI</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                        <h5 class="transaction m-0">ticket CLEAN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                    </div>

                    <h3 class="title ps-3 mt-4">Other Destinations</h3>
                    <div>
                        @foreach ($others as $other)
                            <div class="card-destination d-flex flex-column flex-md-row rounded overflow-hidden mt-3">
                                @if ($other->thumbnail_img)
                                    <img src="{{ asset('uploads/destinations/thumbnails/' . $other->thumbnail_img) }}"
                                        class="img-fluid col-12 col-md-5" alt="Img Example">
                                @else
                                    <img src="https://picsum.photos/600/400" class="img-fluid col-12 col-md-5"
                                        alt="Img Example">
                                @endif
                                <div class="card-description col p-4 py-3 d-flex flex-column justify-content-center">
                                    <span class="d-flex justify-content-between mb-3">
                                        <h2 class="name">{{ $other->name }}</h2>
                                        <h3 class="review"><i class="fa-solid fa-star me-1"></i>
                                            @if ($other->rating)
                                                {{ number_format($other->rating, 1) }}
                                            @else
                                                0.0
                                            @endif
                                        </h3>
                                    </span>
                                    <h3 class="mb-3"><i class="fa-solid fa-location-dot me-1"></i>
                                        {{ $other->location }}</h3>
                                    <span class="d-flex justify-content-between">
                                        <h2 class="price m-0">${{ $other->price }}<small
                                                class="d-inline-block d-md-none d-xl-inline-block">/per
                                                person</small></h2>
                                        <a href="#" class="button">Book Now</a>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="d-none d-lg-block col-lg-3">
                    <div class="card-order rounded p-4">
                        <h3 class="caption">Start From</h3>
                        <h2 class="price">$200</h2>
                        <a href="#" class="button d-inline-block text-center w-100 mt-3">Order Ticket</a>
                        <hr>
                        <h5 class="transaction m-0">ticket FLEXI</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                        <h5 class="transaction m-0">ticket CLEAN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END DESCRIPTION --}}

    @include('partials.footer')
</div>
