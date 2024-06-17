@extends('layouts.home-master')
@section('title', 'Sejarah Singkat')
@section('style')
@endsection

@section('container')

    <body id="not-transparent">
        <!-- About Section -->
        <section id="about" class="about section" style="margin: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Sarana dan Prasarana</li>
                        </ol>
                    </nav>
                    <h1>Sarana dan Prasarana</h1>
                </div>
            </div><!-- End Page Title -->
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                <h2>Sarana Dan Prasana</h2>
                <p>TK RAUHDATUL ATHFAL AL MULIA BALIKPAPAN</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-backpack icon"></i></div>
                            <h4><a href="" class="stretched-link">1 RUANG KELAS</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-house-heart icon"></i></div>
                            <h4><a href="" class="stretched-link">1 RUANG GURU </a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-balloon icon"></i></div>
                            <h4><a href="" class="stretched-link">TAMAN BERMAIN </a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">MUSHOLLA</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- /Services Section -->
        {{-- <section id="service" class="service section" style="margin: 8vh">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                <h2>Sarana Dan Prasana</h2>
                <p>TK RAUHDATUL ATHFAL AL MULIA BALIKPAPAN</p>
            </div><!-- End Section Title -->
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-backpack icon"></i></div>
                            <h4><a href="" class="stretched-link">1 RUANG KELAS</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-house-heart icon"></i></div>
                            <h4><a href="" class="stretched-link">1 RUANG GURU </a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-balloon icon"></i></div>
                            <h4><a href="" class="stretched-link">TAMAN BERMAIN </a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">MUSHOLLA</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- /About Section --> --}}
    </body>
@endsection

@section('script')
@endsection
