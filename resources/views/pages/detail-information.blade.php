@extends('layouts.home-master')
@section('title', 'Detail Informasi')
@section('style')
@endsection

@section('container')

    <body id="not-transparent">
        <!-- About Section -->
        <section id="service-details" class="service-details section" style="margin-top: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Media dan Informasi</li>
                        </ol>
                    </nav>
                    <h1>Detail Informasi</h1>
                </div>
            </div><!-- End Page Title -->
            <!-- Section Title -->
            <div class="container">
                <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                    <h2 class="">{{ $informasi->judul }}</h2>
                </div><!-- End Section Title -->

                <div class="isotope-layout" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4">
                        <div class="col-lg-12 d-flex-col align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-100 text-center mb-4">
                                <img src="{{ asset('storage/' . $informasi->thumbnail) }}" alt="" class="img-fluid"
                                    width="50%">
                            </div>
                            <span>{{ $informasi->created_at->format('d-M-Y') }}</span>
                            <p class="fw-medium" style="text-align: justify">{{ $informasi->isi }}</p>
                        </div>
                    </div><!-- End Portfolio Container -->

                </div>
            </div>
        </section><!-- /About Section -->
    </body>
@endsection

@section('script')
@endsection
