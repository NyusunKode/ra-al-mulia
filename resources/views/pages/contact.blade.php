@extends('layouts.home-master')
@section('title', 'Sejarah Singkat')
@section('style')

@endsection

@section('container')

    <body id="not-transparent">
        <!-- About Section -->
        <section id="contact" class="contact section" style="margin-top: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Kontak dan Maps</li>
                        </ol>
                    </nav>
                    <h1>Kontak dan Maps</h1>
                </div>
            </div><!-- End Page Title -->
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                <h2 class="">Kontak dan Maps</h2>
            </div><!-- End Section Title -->
            <div class="container">


                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row d-flex-wrap justify-content-between">

                            <div class= "col-md-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <h3>Alamat</h3>
                                    <p>Jalan Soekarno Hatta km 4,5 Kelurahan Batu Ampar Kecamatan Balikpapan Utara
                                        Kota Balikpapan </p>
                                </div>
                            </div><!-- End Service Item -->
                            <div class="col-md-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <h3>No Telp </h3>
                                    <p>0813-4871-2063</p>
                                </div>
                            </div><!-- End Service Item -->
                            <div class="col-md-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <h3>Email </h3>
                                    <p>Raalmulia@gmail.com</p>
                                </div>
                            </div><!-- End Service Item -->
                        </div>
                    </div>
                    <div class= "col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2301072556247!2d116.85546856956637!3d-1.2155731591200356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df149da63597ce1%3A0x59208d36c5702888!2sRA%20AL%20MULIA!5e0!3m2!1sid!2sid!4v1717241316162!5m2!1sid!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>
            </div>


        </section><!-- /About Section -->
    </body>
@endsection

@section('script')
@endsection
