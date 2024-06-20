@extends('layouts.home-master')
@section('title', 'Media dan Informasi')
@section('style')
@endsection

@section('container')

    <body id="not-transparent">
        <!-- About Section -->
        <section id="portfolio" class="portfolio section" style="margin-top: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Media dan Informasi</li>
                        </ol>
                    </nav>
                    <h1>Media dan Informasi</h1>
                </div>
            </div><!-- End Page Title -->
            <!-- Section Title -->
            <div class="container">
                <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                    <h2 class="">Media dan Informasi</h2>
                </div><!-- End Section Title -->

                <div class="isotope-layout" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($informasi as $informasi)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                                <a href="/detail-information/{{ $informasi->id }}" class="my-2 text-primary">
                                    <img src="{{ asset('storage/' . $informasi->thumbnail) }}" class="img-fluid"
                                        alt="">
                                </a>

                                <div class="portfolio-info">
                                    <h4>{{ $informasi->judul }}</h4>
                                    <p>{{ substr($informasi->isi, 0, 150) }}{{ strlen($informasi->isi) > 150 ? '...' : '' }}</p>
                                    <a href="/detail-information/{{ $informasi->id }}" class="my-2 text-primary">
                                        Read More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->

                </div>
            </div>
        </section><!-- /About Section -->
    </body>
@endsection

@section('script')
@endsection
