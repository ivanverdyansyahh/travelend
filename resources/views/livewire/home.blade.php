<div>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="card-content text-center">
                        <h5 class="fs-5 mb-2">We are here to Make your Travel Comfort</h5>
                        <h1 class="display-1 mb-2">Let's Make New Memories</h1>
                        <p class="fs-6 w-75 m-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Praesent at consequat scelerisque urna semper. Sapien odio consectetur sed urna.</p>
                        <a href="/destinations" class="button">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row mb-5">
                <div class="col-6">
                    <h5 class="sub-title">About</h5>
                    <h1 class="display-5 title">Get Ready For Real Time Adventure</h1>
                </div>
                <div class="col-6 d-flex align-items-end">
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus faucibus dolor
                        sapien tincidunt. Lectus dictumst cursus rutrum sit nibh aenean. Tortor, nunc viverra velit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <img src="assets/img/img-about-1.jpg" class="img-fluid img-about" alt="Image About Example"
                        width="310">
                    <img src="assets/img/img-about-2.jpg" class="img-fluid img-about" alt="Image About Example"
                        width="310">
                    <img src="assets/img/img-about-3.jpg" class="img-fluid img-about" alt="Image About Example"
                        width="310">
                    <img src="assets/img/img-about-1.jpg" class="img-fluid img-about" alt="Image About Example"
                        width="310">
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="container">
            <div class="card-content">
                <div class="row mb-5">
                    <div class="col-6">
                        <h5 class="sub-title">Featured</h5>
                        <h1 class="display-5 title">Why Choose Us</h1>
                    </div>
                    <div class="col-6 d-flex align-items-end">
                        <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus faucibus dolor
                            sapien tincidunt. Lectus dictumst cursus rutrum sit nibh aenean. Tortor, nunc viverra velit.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 d-flex flex-row">
                        <div class="card-image">
                            <img src="assets/img/headset-solid.svg" alt="">
                        </div>
                        <div class="card-description ms-4">
                            <h4 class="featured-title">Best Guides</h4>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor amet amet.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-row">
                        <div class="card-image">
                            <img src="assets/img/headset-solid.svg" alt="">
                        </div>
                        <div class="card-description ms-4">
                            <h4 class="featured-title">Best Guides</h4>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor amet amet.
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-row">
                        <div class="card-image">
                            <img src="assets/img/headset-solid.svg" alt="">
                        </div>
                        <div class="card-description ms-4">
                            <h4 class="featured-title">Best Guides</h4>
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor amet amet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h5 class="sub-title">Popular Destination</h5>
                    <h1 class="display-5 title">Travel Most Popular Destinations</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($popular_destinations as $item)
                    <div class="col-4">
                        <a href="/destinations/{{ $item->category_slug }}/{{ $item->slug }}"
                            class="text-decoration-none">
                            <div class="card-content">
                                <div class="card-image">

                                    @if ($item->thumbnail_img)
                                        <img src="{{ asset('storage/uploads/destinations/thumbnails/' . $item->thumbnail_img) }}"
                                            class="img-fluid img-popular" alt="Image Example Destination">
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
        </div>
    </section>

    <section class="achievement">
        <div class="container">
            <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card-content text-center">
                        <i class="fa-solid fa-earth-asia mb-3"></i>
                        <h1 class="display-5 total mb-3">2000+</h1>
                        <h6 class="fs-6 m-0">Clients</h6>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card-content text-center">
                        <i class="fa-solid fa-earth-asia mb-3"></i>
                        <h1 class="display-5 total mb-3">2000+</h1>
                        <h6 class="fs-6 m-0">Clients</h6>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card-content text-center">
                        <i class="fa-solid fa-earth-asia mb-3"></i>
                        <h1 class="display-5 total mb-3">2000+</h1>
                        <h6 class="fs-6 m-0">Clients</h6>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card-content text-center">
                        <i class="fa-solid fa-earth-asia mb-3"></i>
                        <h1 class="display-5 total mb-3">2000+</h1>
                        <h6 class="fs-6 m-0">Clients</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h5 class="sub-title">Tour Gallery</h5>
                    <h1 class="display-5 title">Best Tourist's Shared Photos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4"><img src="assets/img/img-gallery-1.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
                <div class="col-4"><img src="assets/img/img-gallery-2.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
                <div class="col-4"><img src="assets/img/img-gallery-3.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
                <div class="col-4"><img src="assets/img/img-gallery-3.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
                <div class="col-4"><img src="assets/img/img-gallery-2.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
                <div class="col-4"><img src="assets/img/img-gallery-1.jpg" class="img-fluid img-gallery mt-4"
                        alt="Image Gallery Example"></div>
            </div>
        </div>
    </section>

    <section class="partner">
        <div class="container">
            <div class="card-content">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/img/trivago-brand.png" class="img-fluid" alt="Image Partner Example"
                            width="196">
                    </div>
                    <div class="col-3">
                        <img src="assets/img/airbnb-brand.png" class="img-fluid" alt="Image Partner Example"
                            width="188">
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/img/trainline-brand.png" class="img-fluid" alt="Image Partner Example"
                            width="195">
                    </div>
                    <div class="col-3">
                        <img src="assets/img/expedia-brand.png" class="img-fluid" alt="Image Partner Example"
                            width="191">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h5 class="sub-title">Testimonial</h5>
                    <h1 class="display-5 title w-50">What Saying our Happy Customers</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card-testimonial text-center">
                        <img src="assets/img/testimonial-1.png" class="img-fluid img-testimonial mb-4"
                            alt="Image Testimonial Example">
                        <p class="fs-6 pb-4 mb-4">Lorem ipsum dolor sit amet cons adip.Ullamcorper tempor, elementum
                            risus vitae ullamcorper tempor.</p>
                        <h5 class="name-user">Amanda Selvie</h5>
                        <p class="profession-user m-0">Web Designner</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-testimonial text-center">
                        <img src="assets/img/testimonial-2.png" class="img-fluid img-testimonial mb-4"
                            alt="Image Testimonial Example">
                        <p class="fs-6 pb-4 mb-4">Lorem ipsum dolor sit amet cons adip.Ullamcorper tempor, elementum
                            risus vitae ullamcorper tempor.</p>
                        <h5 class="name-user">Jasmine Aurell</h5>
                        <p class="profession-user m-0">Model</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-testimonial text-center">
                        <img src="assets/img/testimonial-3.png" class="img-fluid img-testimonial mb-4"
                            alt="Image Testimonial Example">
                        <p class="fs-6 pb-4 mb-4">Lorem ipsum dolor sit amet cons adip.Ullamcorper tempor, elementum
                            risus vitae ullamcorper tempor.</p>
                        <h5 class="name-user">Taylor Khanedy</h5>
                        <p class="profession-user m-0">Data Analist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6">
                    <h1 class="display-5 title">Get In Touch</h1>
                </div>
                <div class="col-6">
                    <h1 class="display-5 title">Catch Us Here</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <form action="" class="card-form d-flex flex-column">
                        <div class="input-merge d-flex flex-row mb-2">
                            <input type="text" class="input w-50 me-2" placeholder="Name">
                            <input type="email" class="input w-50" placeholder="Email">
                        </div>
                        <input type="text" class="input mb-2" placeholder="Subject">
                        <textarea class="input mb-2" rows="5" placeholder="Message"></textarea>
                        <button type="submit" class="button button-contact">Submit Now</button>
                    </form>
                </div>
                <div class="col-6">
                    <div class="card-contact">
                        <p class="fs-6 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus faucibus
                            dolor sapien tincidunt. Lectus dictumst cursus rutrum sit nibh aenean. Tortor, nunc viverra
                            velit scelerisque integer. Amet at tempor, eleifend ac. Nunc viverra velit scelerisque
                            integer.</p>
                        <div class="card-number d-flex flex-row align-items-center mb-3">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="description ms-4">
                                <h5 class="fs-5">Phone Number</h5>
                                <p class="fs-6 m-0">+123 4567 8910</p>
                            </div>
                        </div>
                        <div class="card-email d-flex flex-row align-items-center mb-3">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="description ms-4">
                                <h5 class="fs-5">Email Address</h5>
                                <p class="fs-6 m-0">example@example.com</p>
                            </div>
                        </div>
                        <div class="card-location d-flex flex-row align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="description ms-4">
                                <h5 class="fs-5">Office Address</h5>
                                <p class="fs-6 m-0">2369 Robinson Lane Jackson</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
