<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AkuPintar</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <meta name="description" content="We craft awesome Bootstrap themes for free and share selected resources for web designer &amp; developer. Download Free HTML themes for Bootstrap" /> 
        <link href="{{ asset ('templateku/img/AP.png')}}"  rel="apple-touch-icon" sizes="96x96">
        <link href="{{ asset ('templateku/img/AP.png')}}" rel="icon" sizes="96x96" type="image/png">
        <link href="{{ asset ('templateku/img/AP.png')}}" rel="icon" sizes="32x32" type="image/png">
        <meta content="{{ asset ('templateku/img/AP.png')}}" name="msapplication-TileImage">
        
        <meta property="og:url" content="https://www.boostraptheme.com/demo/index.html" />
        <meta property="og:title" content="Startup - Business Free Bootstrap Template" />
        <meta property="og:locale" content="en_IN" /> 
        <meta property="og:site_name" content="Boostraptheme" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="BoostrapTheme" />
        <meta name="twitter:creator" content="BoostrapTheme" />

        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset ('templateku/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('templateku/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('templateku/css/app.css')}}">

        <script src="{{ asset ('templateku/js/jquery.min.js')}}"></script>
        <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>
    </head>

    <body>
        <div class="loader"></div>
        <!-- NAVIGATION 
            =================-->
            <nav class="navbar navbar-expand-sm fixed-top" id="mainNav" style="background-color: black">
              <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="{{ asset ('templateku/img/AP.png')}}" style="max-height: 51px;" alt="" class="img-fluid"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">                    
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger active" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="about.html">Kampus Pintar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="service.html">Layanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="team.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="testimonials.html">Tentang Kami</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="news.html">Akun</a>
                    </li>
{{--                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </nav>

        <!-- HEADER 
            =================-->
                <header id="conent">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="img-caption-hide"></div>
                          <img class="d-block w-100 img-fluid" src="{{ asset ('templateku/img/slide13.jpg')}}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Selamat datang di <span>AkuPintar</span></h3>
                            <div class="btn btn-general btn-white">Kampus</div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="img-caption-hide"></div>
                          <img class="d-block w-100" src="{{ asset ('templateku/img/slide15.jpg')}}" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3><span>Aplikasi Terbaik </span>untuk semua siswa SMA</h3>
                            <div class="btn btn-general btn-white">Materi</div>
                          </div>
                        </div> 
                      </div>
                      <a class="carousel-control-prev carousel-arrs" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="arrow-sliders"><i class="fa fa-angle-left"></i></span>
                      </a>
                      <a class="carousel-control-next carousel-arrs" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="arrow-sliders"><i class="fa fa-angle-right"></i></span>
                      </a>
                    </div>
                  </header>

        <!-- ABOUT 
            =================-->
            <section id="about" class="about">
              <div class="container">
                <div class="row">
                  <div class="col-md-4  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="about-cont">
                      <img src="{{ asset ('templateku/img/about/belajar_pintar.png')}}" alt="" class="img-fluid">
                      <p>Kamu bisa belajar sepuasnya mengenai materi pelajaran dan juga bisa melatih kemampuanmu agar bisa jadi juara. Semua konten telah dirancang sesuai kurikulum yang berlaku dan kamu juga bisa saling bertanya jawab seputar materi maupun latihan dengan sesama pengguna Aku Pintar. GRATIS!!! Ayo tunggu apalagi, belajar pintar bersama Aku Pintar.</p>
                      <a href="#">Selanjutnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="about-cont second" >
                      <img src="{{ asset ('templateku/img/about/minat_pintar.png')}}" alt="" style="max-width: 78%; height: auto;">
                      <p>Sobat pintar, taukah kamu lebih dari 87% pelajar Indonesia salah jurusan? Nah jangan galau jurusan lagi ya, karena sekarang sudah ada Aku Pintar. Kami akan membantumu untuk mengenali potensi minat tentang persiapan pemilihan jurusan dan pekerjaan di masa depan.</p>
                      <a href="#">Selanjutnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>                    
                  </div>
                  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="about-cont">
                      <img src="{{ asset ('templateku/img/about/kampus1.png')}}" alt="" class="img-fluid">
                      <p>Sobat pintar masih bingung mau melanjutkan kuliah di mana dan jurusan apa? Sekarang kamu tidak akan bingung lagi, aplikasi Aku Pintar akan membantu kamu untuk mencari kampus impianmu disini, hebatnya lagi Aku Pintar akan memberikan rekomendasi jurusan terbaik sesuai minatmu sehingga akan mempermudah kamu menentukan pilihan yang tepat. Temukan kampus dan jurusan terbaikmu disini sekarang juga!</p>
                      <a href="#">Selanjutnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>  
                </div>
              </div>
            </section>

        <!-- SERVICES 
            =================-->
            <section id="services" class="services">
              <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-md-12 text-center">
                        <div class="heading">
                            <h1 style="color: #000000"><span>Layanan</span></h1>
                            <div class="bord-bot"></div>
                            <p style="color: #000000">Aku Pintar merupakan perusahaan teknologi informasi yang didedikasikan dalam rangka membantu memasyarakatkan pendidikan untuk masyarakat Indonesia,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6 m-auto service-img">
                    <img src="{{ asset ('templateku/img/service-bg.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-6">
                    <div class="row"> 
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon3.png')}}" class="img-fluid" alt="">
                          <h5>Kampus Pintar</h5>
                          <p>Bersama Kampus Pintar kamu dengan mudah mencari kampus terbaikmu</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon9.png')}}" class="img-fluid" alt="">
                          <h5>Bantuan Psikolog</h5>
                          <p>Dalam memilih kampus dan jurusan kamu dapat melibatkan saran dan kritik dari psikolog ini, Sobat</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon6.png')}}" class="img-fluid" alt="">
                          <h5>Belajar Pintar</h5>
                          <p>Pelajari materi lengkap melalui pembelajaran materi serta latihan soal.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon5.png')}}" class="img-fluid" alt="">
                          <h5>Tes Kepribadian dan Penjurusan</h5>
                          <p>Cari potensi dirimu dan rancang masa depanmu muali dari sekarang</p>
                        </div>
                      </div> 
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon7.png')}}" class="img-fluid" alt="">
                          <h5>Kabar Kampus</h5>
                          <p>Ikuti segala informasi dari kampus yang kamu impikan sekarang juga</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 text-center px-4">
                        <div class="service-desc-cont">
                          <img src="{{ asset ('templateku/img/icons/icon8.png')}}" class="img-fluid" alt="">
                          <h5>Branding Event</h5>
                          <p>Sukses semakin mudah dengan Branding Event bersama AkuPintar</p>
                        </div>
                      </div>                                             
                    </div>
                  </div>
                </div>
              </div>
            </section>

        <!-- HOW TO WORK 
            =================-->
            <section id="how-work" class="how-work">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="how-work-cont">
                      <h6>Aku pintar untuk indonesia</h6>
                      <h1>Tentang Kami</h1>
                      <p>Aku pintar adalah perusahaan teknologi informasi yang bergerak di bidang pendidikan, nama perusahaan kami adalah PT Aku Pintar Indonesia. Kami ada karena melihat tantangan pada dunia pendidikan yang semakin komplek sehingga perlu mendapatkan perhatian serius dari semua pihak, tidak terkecuali dari Aku Pintar.</p>
                        <p>Aku Pintar berkomitmen turut aktif membantu memeratakan pendidikan melalui teknologi informasi yang mudah dijangkau oleh masyarakat Indonesia. Aplikasi Aku Pintar akan membantu generasi muda Indonesia dalam mendapatkan pendidikan yang sesuai dengan minat dan bakat yang dimiliki.</p>
                      <div class="btn btn-general btn-white">Contact now</div>
                    </div>
                  </div> 
                  <div class="col-md-1"></div>
                  <div class="col-md-5 m-auto">
                    <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                      <img src="{{ asset('templateku/img/how-work.png')}}" alt="" class="img-fluid">
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>

        <!-- FAQ 
            =================-->
            <section id="faq" class="faq" >
              <div class="container-fluid"> 
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="faq-cont">
                      <div class="faq-heading">
                        <h3>Pertanyaan Umum</h3>
                        <div class="heading-border-light" style="background:#fff;"></div>
                      </div>
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0 card-title">
                                <div class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #000000;">
                                  <i class="fa fa-long-arrow-right"></i>
                                  Mengapa harus AkuPintar ? 
                                </div>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Platform aplikasi Aku Pintar ini menjawab dengan menyajikan berbagai fitur pembelajaran yang kreatif. Aplikasi AkuPintar juga ada sisi kuantitasnya, intinya aplikasi ini lebih komplit dan benar-benar didedikasikan untuk anak SMA.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0 card-title">
                                <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #000000">
                                  <i class="fa fa-long-arrow-right" ></i>
                                  Mengapa perencanaan dan persiapan sangat dibutuhkan ? 
                                </div>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                  Perencanaan merupakan tahapan paling penting dari suatu fungsi manajemen, terutama dalam menghadapi lingkungan ekternal yang berubah dinamis. Dalam era globalisasi ini, perencanaan harus lebih mengandalkan prosedur yang rasional dan sistematis dan bukan hanya pada intuisi dan firasat (dugaan). Sedangkan untuk persiapan adalah suatu kegiatan yang akan dipersiapkan sebelum melakukan sebuah kegiatan.tanpa persiapan,kegiatan tidak akan terlaksanakan dengan baik atau pun susah untuk dilaksanakan.sebaliknya jika kita persiapan,maka kegiatan itu akan terlaksana dengan baik.hasil dari persiapan adalah sebuah kegiatan yang memuaskan
                              </div>
                            </div>
                          </div> 
                        </div>
                    </div>  
                  </div>
                  <div class="col-md-6 px-0 bg-faq-img"></div>
                </div>
              </div>
            </section>

        <!-- BLOG 
            =================-->
            <section id="blog" class="blog">
              <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-md-12 text-center">
                        <div class="heading">
                            <h1>Info <span>Kampus</span></h1>
                            <div class="bord-bot"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="blog-cont wow fadeInUp" data-wow-delay="0.3s">
                      <img src="{{ asset('templateku/img/blog/gesits234.jpg')}}" alt="" class="img-fluid">
                      <h5>Inovasi Berevolusi GESITS ITS</h5>
                      <p>GESITS tercetus dari sebuah mimpi anak bangsa Indonesia yang ingin mewujudkan Indonesia mandiri dalam sektor transpotrasi, teknologi dan industri. Dimulai dengan kerjasama Garansindo dan Institut Teknologi Sepuluh November (ITS) di 2015 dengan semangat dan tekad "Merah Putih" yang besar.</p>
                      <a href="#">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="blog-cont wow fadeInUp" data-wow-delay="0.6s">
                      <img src="{{ asset('templateku/img/blog/blog6.png')}}" alt="" class="img-fluid">
                      <h5>Keren! Mobil Karya Mahasiswa UGM Sabet Penghargaan Internasional</h5>
                      <p>Mobil balap formula Bimasakti karya mahasiswa Universitas Gadjah Mada merebut beberapa penghargaan dalam ajang kompetisi mobil formula karya mahasiswa "Student Formula SAE Competition of Japan" di Jepang, 6-10 September 2016.</p>
                      <a href="#">Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="blog-cont wow fadeInUp" data-wow-delay="0.9s">
                      <img src="{{ asset('templateku/img/blog/blog7.jpeg')}}" alt="" class="img-fluid">
                      <h5>UI Supermileage Vehicle Team (SMV) mengukir prestasi di Shell Eco-Marathon (SEM) Asia 2016</h5>
                      <p>UI (Universitas Indonesia) Supermileage Vehicle Team (SMV) mengukir prestasi dalam ajang internasional Shell Eco-Marathon (SEM) Asia 2016 pada 25 Februari—1 Maret 2016.</p>
                      <a href="#">Selanjutnya <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </section>

        <!-- CLIENTS
            =================-->
            <section id="client" class="client p-5">
              <div class="container-fluid">
                <div class="row wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <div id="clients-list" class="owl-carousel owl-theme">
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-1.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-2.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-3.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-4.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-5.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-6.jpg')}}" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset ('templateku/img/clients/logo-7.jpg')}}" class="img-fluid" alt="client">
                            </div> 
                        </div>
                    </div>
                </div>
              </div>
            </section>

        <!-- FOOTER 
            =================-->
            <footer>
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="company-desc">
                      <img src="{{ asset ('template/img/logo.png')}}" alt="" class="img-fluid">
                      <p>Aku Pintar adalah perusahaan teknologi informasi yang bergerak dibidang pendidikan, nama perusahaan kami adalah PT. Aku Pintar Indonesia </p>
                      <address><i class="fa fa-map-marker"></i> Sukolilo Park Regency Blok D no. 12, Keputih, Sukolilo,Kota Surabaya, Jawa Timur, 60111
                    </address>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="social">
                      <h3>Media Sosial</h3>
                      <ul>
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-twitter"></i></li>
                        <li><i class="fa fa-google-plus"></i></li>
                        <li><i class="fa fa-youtube"></i></li>
                      </ul>
                      <div class="cont-info number">
                        <i class="fa fa-phone"></i>
                        <a href="tel:1234567890">+62 8122000453</a>
                      </div>
                      <div class="cont-info mail">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mail@startup.com">info@akupintar.id</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="latest-news">
                      <h3>Informasi</h3>
                      <img src="{{ asset ('template/img/blog/blog-small-1.jpg')}}" alt="" class="img-fluid">
                      <p>Kebijakan Privasi <br>
                         Syarat & Ketentuan <br>
                         Karir</p>
                    </div>
                  </div>  
                </div>
              </div>
            </footer>
 
        <script src="{{ asset ('templateku/js/popper.min.js')}}"></script>
        <script src="{{ asset ('templateku/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset ('templateku/js/jquery.easing.min.js')}}"></script>
        <script src="{{ asset ('templateku/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset ('templateku/js/wow.min.js')}}"></script> 
        <script src="{{ asset ('templateku/js/app.js')}}"></script> 
        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5a6d77fc4b401e45400c7419/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
    </body>
</html>