<div>
    {{-- SEARCHING --}}
    {{-- <div class="searching mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">

                    <form action="/destinations">
                        <div class="input-group mb-3">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif

                            <input type="text" name="search" class="form-control"
                                placeholder="Searching destination.." aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-dark" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div> --}}
    {{-- END SEARCHING --}}

    {{-- CATEGORIES --}}
    {{-- <div class="categories mt-3">
        <div class="container">
            <div class="row">
                <div class="card-category col-12 d-flex justify-content-between align-items-center">
                    <select class="form-select d-block d-lg-none mb-2" aria-label="Default select example">
                        <option selected>Categories Destinations</option>
                        @foreach ($categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <ul class="list-category d-flex flex-row p-0 m-0 d-none d-lg-block">
                        <a href="/destinations" class="item d-inline-block text-decoration-none p-3">
                            <li class="{{ !request('category') ? 'text-dark' : '' }}">All destinations</li>
                        </a>
                        @foreach ($categories as $category)
                            <a href="/destinations?category={{ $category->slug }}"
                                class="item d-inline-block text-decoration-none p-3">
                                <li class="{{ request('category') === $category->slug ? 'text-dark' : '' }}">
                                    {{ $category->name }}</li>
                            </a>
                        @endforeach
                    </ul>
                    <span class="result">{{ $destinations->count() }}
                        {{ $destinations->count() > 1 ? 'destinations' : 'destination' }} found</span>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- END CATEGORIES --}}

    {{-- DESTINATION --}}
    {{-- <div class="destination mt-4">
        <div class="container">
            <div class="row">

                @if ($destinations->count())
                    @foreach ($destinations as $item)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="card-destination rounded overflow-hidden">
                                <a href="/destination/{{ $item->category_slug }}/{{ $item->slug }}">
                                    @if ($item->thumbnail_img)
                                        <img src="{{ asset('uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                            class="img-fluid w-100" alt="Image Example">
                                    @else
                                        <img src="https://picsum.photos/301" class="img-fluid w-100"
                                            alt="Image Example">
                                    @endif
                                </a>

                                <div class="content px-4 py-4">
                                    <div class="col-12 d-flex justify-content-between mb-2">
                                        <span class="name">{{ $item->name }}</span>
                                        <span class="review d-flex align-items-center">
                                            <i class="fa-solid fa-star me-1"></i>
                                            @if ($item->rating)
                                                {{ number_format($item->rating, 1) }}
                                            @else
                                                0.0
                                            @endif
                                        </span>
                                    </div>
                                    <span class="location">
                                        <i class="fa-solid fa-location-dot me-1"></i> {{ $item->location }}
                                    </span>
                                    <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                                        <span class="price">${{ $item->price }}</span>
                                        <a href="#" class="button">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center font-medium">Destination not found</p>
                @endif

            </div>
        </div>
    </div> --}}
    {{-- END DESTINATION --}}

    {{-- BUTTON LOAD --}}
    {{-- <div class="load mt-3">
        <div class="container">
            <div class="row">
                <a href="#" class="button reverse {{ $isAllLoaded ? 'd-none' : '' }}"
                    wire:click.prevent="loadMore">View More
                </a>

                @if ($perPage > $destinations->count())
                    <div>No more pages to load</div>
                @endif
            </div>
        </div>
    </div> --}}
    {{-- END BUTTON LOAD --}}

    <section class="hero-destination">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <form action="" class="search-group text-end">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        <input type="text" class="input" name="search" placeholder="Search your destinations..">
                        <button type="submit" class="button-search"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="category-group">
                        <a href="/destinations"
                            class="text-decoration-none link-category {{ !request('category') ? 'active' : '' }}">All
                            Category</a>
                        @foreach ($categories as $category)
                            <a href="/destinations?category={{ $category->slug }}"
                                class="text-decoration-none link-category {{ request('category') === $category->slug ? 'active' : '' }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="other">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    @if ($destinations->count() > 1)
                        <p class="m-0">{{ $destinations->count() }} destinations found.</p>
                    @else
                        <p class="m-0">{{ $destinations->count() }} destination found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="card-destination">
        <div class="container">
            <div class="row">
                @foreach ($destinations as $item)
                    <div class="col-4 mt-4">
                        <a href="/destinations/{{ $item->category_slug }}/{{ $item->slug }}"
                            class="text-decoration-none">
                            <div class="card-content">
                                <div class="card-image">
                                    @if ($item->thumbnail_img)
                                        <img src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                            class="img-fluid img-destination" alt="Image Example Destination">
                                    @else
                                        <img src="https://picsum.photos/200" class="img-fluid w-100"
                                            alt="Image Example">
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
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="button {{ $isAllLoaded ? 'd-none' : '' }}"
                        wire:click.prevent="loadMore">View More</a>

                    @if ($perPage > $destinations->count())
                        <p>No more pages to load</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>
