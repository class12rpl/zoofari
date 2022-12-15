@extends('layouts.main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">
                Contact Us
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Address
                            </p>
                            <h5 class="mb-0">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Call Now
                            </p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">
                                <span class="text-primary me-2">#</span>Mail Now
                            </p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Contact Us</p>
                    <h1 class="display-5 mb-4">Have Any Query? Please Contact Us!</h1>
                    <p class="mb-4">
                        The contact form is currently inactive. Get a functional and
                        working contact form with Ajax & PHP in a few minutes. Just copy
                        and paste the files, add a little code and you're done.
                        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                    </p>
                    <form action="/contacts" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror bg-light border-0"
                                        id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" />
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email"
                                        class="form-control @error('email') is-invalid @enderror bg-light border-0"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Your Email" />
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control @error('subject') is-invalid @enderror bg-light border-0"
                                        id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject" />
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror bg-light border-0" value="{{ old('message') }}"
                                        placeholder="Leave a message here" id="message" name="message" style="height: 100px">{{ old('message') }}</textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px">
                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
