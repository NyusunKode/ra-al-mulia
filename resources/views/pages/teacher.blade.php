@extends('layouts.home-master')
@section('title', 'Tenaga Pendidik')
@section('style')
@endsection

@section('container')

    <body id="not-transparent">
        <!-- About Section -->
        <section id="team" class="team section" style="margin-top: 8vh">
            <div class="page-title" data-aos="fade">
                <div class="container">
                    <nav class="breadcrumbs">
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li class="current">Tenaga Pendidik</li>
                        </ol>
                    </nav>
                    <h1>Tenaga Pendidik</h1>
                </div>
            </div><!-- End Page Title -->
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="padding-top: 50px">
                <h2 class="">Tenaga Pendidik</h2>
                <p>RAUDHATUL ATHFAL AL MULIA BALIKPAPAN</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">

                                <div class="row gy-4">

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic"><img src="assets/img/team/guru1.jpg" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Anik Mukardayah S.Hum</h4>
                                                <span>Kepala Sekolah/Tenaga pendidik di RA AL MULIA</span>
                                                <p>Tempat Tanggal Lahir : Gresik, 20 Agustus 1979 </p>
                                                <p>Pendidikan Terakhir : S1 </p>
                                                <p>Alamat : Jl.Perum Sumber Indah Rt 70 Blok K4 No 2
                                                <p>

                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic"><img src="{{ asset('assets/img/team/guru2.jpg') }}"
                                                    class="img-fluid" alt="guru-2"></div>
                                            <div class="member-info">
                                                <h4>Rismatul Kasanah S.Psi</h4>
                                                <span>Tenaga Pendidik di RA AL MULIA</span>
                                                <p>Tempat Tanggal Lahir : Balikpapan </p>
                                                <p>Pendidikan Terakhir : S1 </p>
                                                <p>Alamat : Jl.</p>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row gy-4">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="team-member d-flex align-items-start">
                                            <div class="pic"><img src="assets/img/team/guru1.jpg" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Anik Mukardayah S.Hum</h4>
                                                <span>Kepala Sekolah/Tenaga pendidik di RA AL MULIA</span>
                                                <p>Tempat Tanggal Lahir : Gresik, 20 Agustus 1979 </p>
                                                <p>Pendidikan Terakhir : S1 </p>
                                                <p>Alamat : Jl.Perum Sumber Indah Rt 70 Blok K4 No 2
                                                <p>

                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Team Member -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
    </body>
@endsection

@section('script')
@endsection
