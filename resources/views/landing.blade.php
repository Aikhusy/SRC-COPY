<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <!-- Header -->
    <header class="bg-main py-5">
        <div class="container ">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('storage/image/gmbr1.png') }}" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-white mt-5 mb-2 text-uppercase">Selamat Datang di Toko Madura</h1>
                    <p class="lead mb-5 text-white-50">Temukan berbagai produk kebutuhan sehari-hari dengan harga
                        terjangkau.</p>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ url('/login') }}">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section class="kelebihan bg-mainbutmorelighter text-white" data-aos="slide-down" data-aos-duration="800">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('storage/image/Land/Group3.png') }}" alt=""
                        srcset="" style="width: 240px; height: 200px;">
                </div>
                <div class="col-lg-8">
                    <h4>Produk lengkap</h4>
                    <p>Kami menyediakan beragam produk berkualitas, mulai dari makanan, minuman, hingga barang-barang
                        kebutuhan rumah tangga.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-cream text-white" data-aos="slide-down" data-aos-duration="400">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('storage/image/Land/Group.png') }}" alt=""
                        srcset="" style="width: 240px; height: 200px;">
                </div>
                <div class="col-lg-8">
                    <h4>Pelayanan Terbaik</h4>
                    <p>Kami selalu berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan. Kepuasan Anda adalah
                        prioritas kami.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-mainbutmorelighter text-white" data-aos="slide-down" data-aos-duration="400">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('storage/image/Land/Group2.png') }}" alt=""
                        srcset="" style="width: 240px; height: 200px;">
                </div>
                <div class="col-lg-8">
                    <h4>Tim Profesional</h4>
                    <p>Kami siap membantu Anda dalam setiap langkah belanja. Tim kami yang ramah dan profesional akan
                        dengan senang hati menjawab pertanyaan dan memberikan rekomendasi produk yang sesuai dengan
                        kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-cream text-white" data-aos="slide-down" data-aos-duration="400">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('storage/image/Land/Group1.png') }}" alt=""
                        srcset="" style="width: 180px; height: 200px;">
                </div>
                <div class="col-lg-8">
                    <h4>Harga Kompetitif</h4>
                    <p>Jelajahi koleksi produk kami yang lengkap dan temukan apa yang Anda butuhkan. Dengan harga yang
                        kompetitif, Anda bisa berbelanja dengan hemat tanpa mengorbankan kualitas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white bg-mainbutmorelighter" data-aos="slide-up" data-aos-duration="800">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center pb-4">Kunjungi Kami</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3953.3631696214375!2d112.66399821477785!3d-7.751250194413367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDUnMDQuNSJTIDExMsKwMzknNTguMyJF!5e0!3m2!1sid!2sid!4v1687524615037!5m2!1sid!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
