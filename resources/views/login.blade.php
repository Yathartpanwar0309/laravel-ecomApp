<x-header />

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row mx-5 px-5">
                <div class="col-lg-12 col-md-12">
                    <div class="blog__details__comment">
                        <h4>Login Here</h4>
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <p>{{ session()->get('success') }}</p>
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                <p>{{ session()->get('error') }}</p>
                            </div>
                        @endif
                        <form method="post" action="{{ URL::to('/login/auth') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="email" name="email" required placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="password" name="password" required placeholder="Password">
                                </div>
                                <div class="col-lg-12 text-right">
                                    <a href="{{URL::to('register')}}">Register</a>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" name="login" class="site-btn">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <x-footer />