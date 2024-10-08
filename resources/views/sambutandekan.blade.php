@extends('layouts.frontend')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/uin2.jpg') }}" class="img-fluid carousel-img" alt="Image">
                    <div class="carousel-caption">
                        <div class="text-start p-4" style="max-width: 50%; margin-right: 40%">
                            <h3 class="display-1 text-light text-capitalize mb-4 mb-md-5 fs-3 wow fadeInUp"
                                data-wow-delay="0.5s">
                                Fakultas Ekonomi dan Bisnis Islam
                            </h3>
                            <h3 class="display-6 text-capitalize mb-3 wow fadeInUp" style="color: orange;"
                                data-wow-delay="0.3s">
                                Sambutan Dekan
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5 mb-0 mt-0">
        <div class="container py-5">
            <div class="row g-5 d-flex align-items-center">
                <!-- Teks di sebelah kiri -->
                <div class="col-lg-6 wow fadeInLeft d-flex flex-column text-start" data-wow-delay="0.2s">
                    <div class="section-title mb-5">
                        <h1 class="display-5 mb-4" style="color: orange;">Sambutan Dekan</h1>
                        <p>Assalamualaikum, Wr, Wb.</p>
                        <p>Puji serta syukur semoga senantiasa tercurah ke hadirat Allah Swt. Salawat serta salam semoga
                            tercurah limpahkan kepada junjungan kita Rasulullah Muhammad SAW.
                        </p>

                        <p>Saya mewakili seluruh civitas akademika FEBI UIN Sunan Gunung Djati Bandung dengan bangga dan
                            berbahagia menyambut kehadiran para calon pembelajar dan penggerak ekonomi bangsa. Selamat
                            bergabung menjadi bagian dari keluarga besar FEBI UIN Bandung
                            .</p>

                        <p>Terima kasih telah berkunjung di tempat kami.</p>

                        <p>Wallahul Muwaffiq ila Aqwamit Tharieq.<br>
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
                    </div>
                </div>
                <!-- Gambar di sebelah kanan -->
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/img/uin3.png') }}" alt="image" class="img-fluid wow fadeInUp"
                        data-wow-delay="0.3s" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
