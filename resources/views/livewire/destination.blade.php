<div>
    {{-- HERO --}}
    {{-- <div class="img-hero">
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
    </div> --}}
    {{-- END HERO --}}

    {{-- DESCRIPTION --}}
    {{-- <div class="description mt-4">
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
    </div> --}}
    {{-- END DESCRIPTION --}}

    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-1">{{ $destination->name }} in {{ $destination->location }}</h1>
                    <p class="fs-6">{{ $destination->category->name }} | 3 Days Trip</p>
                    @if ($destination->hero_img)
                        <img src="{{ asset('storage/uploads/destinations/heros/' . $destination->hero_img) }}"
                            class="img-fluid img-destination mt-5" alt="Image Destinations Example">
                    @else
                        <img src="https://picsum.photos/1200/600" class="img-fluid rounded shadow-lg"
                            alt="Image Destinations Example">
                    @endif
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h4 class="fs-4 title">Description</h4>
                    <p class="fs-6 mt-4">{!! $destination->description !!}</p>

                    <h4 class="fs-4 title mt-5">Give Feedback</h4>
                    <form action="/reviews" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="destination_id" value="{{ $destination->id }}">

                        <input type="text" class="input mb-2" placeholder="Name">
                        <input type="text" class="input mb-2" placeholder="Email">

                        <div>
                            <input type="checkbox" name="rating" value="1">
                            <input type="checkbox" name="rating" value="2">
                            <input type="checkbox" name="rating" value="3">
                            <input type="checkbox" name="rating" value="4">
                            <input type="checkbox" name="rating" value="5">
                        </div>

                        <button type="submit" class="button">Submit Now</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="card-order">
                        <h4 class="fs-4">Start From</h4>
                        <h1 class="display-6 price">${{ $destination->price }}</h1>
                        <button type="button" class="button w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Order Ticket Now</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="/orders" method="POST">
                                        <div class="modal-body">

                                            @csrf
                                            <input type="hidden" name="destination_id"
                                                value="{{ $destination->id }}">
                                            <input type="hidden" name="current_price"
                                                value="{{ $destination->price }}">

                                            <input type="number" class="form-control" min="1"
                                                name="total_ticket" value="1">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <p class="fs-6 text-center description">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Vel mi quis posuere suscipit.</p>

                        <h5 class="fs-5 transaction">ticket FLEXI</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis
                            molestie ut fermentum. At duis at duis.</p>
                        <h5 class="fs-5 transaction">ticket CLEAN</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis
                            molestie ut fermentum. At duis at duis.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="fs-4 title">Other Destinations</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($others as $item)
                    <div class="col-4 mt-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card-content">
                                <div class="card-image">
                                    @if ($item->thumbnail_img)
                                        <img src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                            class="img-fluid img-destination" alt="Image Example Destination">
                                    @else
                                        <img src="https://picsum.photos/200" class="img-fluid img-destination"
                                            alt="Image Destinations Example">
                                    @endif
                                    <p class="fs-6 price">${{ $item->price }}</p>
                                </div>
                                <div class="card-description">
                                    <div class="time d-flex flex-row align-items-center mb-2">
                                        <i class="fa-regular fa-clock"></i>
                                        <p class="fs-6 d-inline-block m-0 ms-2">3 Days Trip</p>
                                    </div>
                                    <h4 class="title-destination">{{ $item->name }} in {{ $item->location }}</h4>
                                    <div class="stars">
                                        @for ($i = 0; $i < $item->rating; $i++)
                                            <i class="bi bi-star-fill me-1"></i>
                                        @endfor
                                        @for ($j = $item->rating + 1; $j <= 5; $j++)
                                            <i class="bi bi-star me-1"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
