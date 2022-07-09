<div>
    <section class="hero-login">
        <div class="row">
            <div class="col-4 form d-flex align-items-center justify-content-center">
                <div class="card-content p-5">
                    <h1 class="title text-start mb-1">Log <span class="highlight">In</span></h1>
                    <p class="fs-6 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit .</p>
                    <form action="/login" method="POST" class="form-login mb-5">
                        @csrf
                        <div class="input-email d-flex flex-column mb-4">
                            <label for="email">Email Address</label>
                            <input type="email" class="input" name="email" id="email"
                                placeholder="Enter Your Email"
                                @if (Cookie::has('useremail')) value="{{ Cookie::get('useremail') }} @endif">
                        </div>
                        <div class="input-password d-flex flex-column mb-4">
                            <label for="password">Password</label>
                            <input type="password" class="input" name="password" id="password"
                                placeholder="Enter Your Password">
                        </div>
                        <div class="other d-flex flex-row justify-content-between mb-4">
                            <div class="input-remember">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="#" class="fs-6 forgot-password d-inline-block">Forgot Password?</a>
                        </div>
                        <button type="submit" class="button-signin">Login</button>
                    </form>
                    <span class="caption fs-6 d-block text-center">
                        Don't have an account?
                        <a href="/signup" class="caption-direct">Sign Up</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
</div>
