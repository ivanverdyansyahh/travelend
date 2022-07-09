{{-- <section class="signin">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <span class="line">
                    <p class="sub-title">welcome</p>
                </span>
                <p class="headline">Let's Explore <br> The World With Us</p>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <div class="card-form d-flex flex-column">
                    <p class="title text-center">Sign In</p>
                    <form action="/signin" method="POST" class="form">
                        @csrf
                        <input type="email" name="email" class="input-email" placeholder="Email"
                            @if (Cookie::has('useremail')) value="{{ Cookie::get('useremail') }} @endif">
                        <input type="password" name="password" class="input-password" placeholder="Password">
                        <span
                            class="other
                            d-flex align-items-center justify-content-between">
                            <span class="remember">
                                <input type="checkbox" name="remember" class="input-remember me-2" id="remember-me">
                                <label for="remember-me" class="label-remember">Remember Me</label>
                            </span>
                            <span class="reset-pass">
                                <a href="#">Forgot Password?</a>
                            </span>
                        </span>
                        <button type="submit">Sign In</button>
                    </form>
                    <p class="caption">Don't have an account?
                        <a href="/signup" class="signup">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
