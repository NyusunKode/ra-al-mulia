@extends('layouts.home-master')
@section('title', 'Home')
@section('style')
@endsection

@section('container')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 class="">Selamat Datang di Website Raudhatul Athfal Al Mulia
                    </h1>
                    <p class="">Jalan Soekarno Hatta km 4,5 Balikpapan Utara</p>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started">Pendaftaran siswa 2024/2025</a>
                        <a href="https://youtu.be/sFr6ab0Sy9s" class="glightbox btn-watch-video d-flex align-items-right"><i
                                class="bi bi-play-circle"></i><span>Tonton Video </span></a>
                    </div>
                </div>
                <div class="d-flex justify-content-center col-lg-6 order-1 order-lg-2 gambar1">
                    <img src="assets/img/gambar1.png" class="img-fluid animated" alt="hero" width="90%">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">Tentang Sekolah</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Pendidikan merupakan salah satu hal yang paling penting dan vital dalam kehidupan seseorang,
                        khususnya bagi masa depannya.
                        Oleh karena itu hadirlah Pendidikan TK/RA (Raudhatul Athfal) merupakan sebagai awal proses
                        belajar anak sesuai dengan usianya, sehingga anak memiliki kesiapan secara fisik, mental,
                        maupun sosial/emosional dalam mengikuti jenjang sekolah selanjutnya.
                    <p>
                        Lembaga pendidikan formal yang diberi nama RA Al Mulia merupakan dibawah naungan yayasan
                        Membaul Huda Balikpapan yang terletak di
                        Jl.Soekarno Hatta km 4,5 RT 57 NO 02 Kelurahan Batu Ampar, Kecamatan Balikpapan Utara Kota
                        Balikpapan.
                        Pada Prinsipnya RA Al Mulia didirikan sejak tahun 2018 dan telah beroperasi pada tanggal 16
                        juli 2018 tahun pelajaran 2018/2019.

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>Tujuan Pendidikan RA Al Mulia</p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan dan membantu Pemerintah
                                dalam bidang pembinaan mental spiritual sejak dini </span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan dan membantu Pemerintah
                                dalam usaha mencerdaskan kehidupan bangsa </span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan kemampuan
                                berbahasa,mandirian dan kreatifitas</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan potensi anak sejak dini,
                                sebagai persiapan untuk hidup dan dapat menyesuaikan diri dengan
                                lingkunganya</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Menciptakan lulusan yang mempunyai
                                kepribadian islami, memahami aqidah islam, menguasai dasar-dasar seni dan
                                keterampilan</span></li>

                    </ul>
                </div>

            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3 class=""><span class="">Raudhatul Athfal Al Mulia </span><strong>Latar
                                Belakang dan Tujuan Pendidikan</strong></h3>
                        <p class="">

                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">

                            <h3><span>01</span> ARTI LOGO RA AL MULIA</h3>
                            <div class="faq-content">
                                <p>Simbol persegi lima yang digunakan sebagai pengertian bahwa di dalam membentuk
                                    generasi yang berakhlak mulia kita harus berlandaskan 5 tiang agama (Rukun
                                    Islam) dan 5 Dasar Negara (Pancasila).</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span>02</span> TATA RUANG LOKASI RA AL MULIA</h3>
                            <div class="faq-content">
                                <p>Raudhatul athfal Al Mulia menjamin keamanan warga sekolah dari terjadinya ancaman
                                    bahaya dan kecelakaan. Warga RA Al MULIA sebisa mungkin selalu berusaha
                                    menciptakan keamanan dan menjaga sekolah dari segala kemungkinan buruk yang kaan
                                    terjadi.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span>03</span> KONDISI GEOGRAFIS LOKASI RA AL MULIA</h3>
                            <div class="faq-content">
                                <p>Aman dari bencana, Lokasi RA Al Mulia aman dan jauh dari keributan dan kebisingan
                                    seperti halnya ditengah kota. RA AL Mulia terletak jauh dari keramaian, kurang
                                    lebih 30 meter dari jalan raya. Dalam sejarahnya lokasi RA AL Mulia belum pernah
                                    mengalami terjadi bencana alam apapun.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2 gambar2">
                    <img src="assets/img/gambar2.png" class="img-fluid" alt="" data-aos="zoom-in"
                        data-aos-delay="400">
                </div>
            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="assets/img/gambar3.png" class="img-fluid" alt="struktur-organisasi">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">

                    <h3>Rekap Total Siswa Per Tahun Ajaran </h3>
                    <p class="fst-times new roman ">

                    <div class="skills-content skills-animation">

                        <div class="progress">
                            <span class="skill"><span>2018/2019</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>2019/2020</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>2020/2021</span> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
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

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <img src="assets/img/mulia14.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>KLIK DAFTAR SEKARANG</h3>
                    <p>RA AL MULIA BALIKPAPAN menerima pendaftaran murid baru tahun ajaran 2024/2025.</p>
                    <p>Dengan Program Unggulan</p>
                    <p>Calistung|Menciptakan Generasi Yang Berlandaskan Aqidah Dan Akhlaqul Karima|Mengaji
                    <p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="/registration">Daftar</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Media dan Informasi</h2>
        </div><!-- End Section Title -->

        <div class="container">

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

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tenaga Pendidik</h2>
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

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>KONTAK</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jalan Soekarno Hatta km 4,5 Kelurahan Batu Ampar Kecamatan Balikpapan Utara
                                    Kota Balikpapan </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>No Telp </h3>
                                <p>0813-4871-2063</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email </h3>
                                <p>Raalmulia@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2301072556247!2d116.85546856956637!3d-1.2155731591200356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df149da63597ce1%3A0x59208d36c5702888!2sRA%20AL%20MULIA!5e0!3m2!1sid!2sid!4v1717241316162!5m2!1sid!2sid"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Nama</label>
                                <input type="text" name="name" id="name-field" class="form-control"
                                    required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Email</label>
                                <input type="email" class="form-control" name="email" id="email-field"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject-field"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Pesan </label>
                                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesanmu akan dilihat. Teriamkasih!</div>

                                <button type="submit">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

@section('script')
@endsection
