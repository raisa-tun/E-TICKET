<div class="services-section text-center" id="services">
                <!-- Services section (small) with icons -->
                <div class="container">
                    <div class="row  justify-content-md-center">
                        <div class="col-md-8">
                            <div class="services-content">
                                <h1 class="wow fadeInUp" data-wow-delay="0s">We take care our products for more feature rich</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Adminty is one of the finest Admin dashboard template in its category. Premium admin dashboard with high end feature rich possibilities.
                                </p>
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @elseif(session('error'))
                                <div class="alert alert-error">
                                    {{ session('error') }}
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>