@extends('layouts.main')

@section('container')
<section class="container-fluid body-text">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-5 py-5">
                <h1 class="py-5 primary-text">e-Voting Polinema</h1>
                <p class="lh-base p-text">Selamat datang di e-Voting Politeknik Negeri Malang. e-Voting merupakan wujud dari perkembangan teknologi dalam bidang pemilihan umum. Silakan memberikan suara kepada kandidat yang kamu percaya dengan jujur</p><br>
                <div class="d-grid col-lg-5 col-7">
                  <a href="/vote">
                    <button type="button" class="btn btn-vote btn-primary btn-lg">Use My Vote ></button>
                  </a>
                </div>
                <div class="mb-3"></div>
                <p><a href="#how" class="p-l-35 link-primary text-decoration-none">How to Vote ?</a></p>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-block">
                <img src="/storage/images/landing_hero.png" alt="landing" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="container-fluid py-5 mt-5 body-text" id="how">
    <div class="container d-grid gap-5">
        <div class="secondary-text h-75 shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-center">
          <span class="p-t-10">How to Vote ?</span>
        </div>
        <div class="text-center">
            <img src="/storage/images/how1.svg" alt="how1" class="img-fluid shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-start how" data-aos="fade-right">
            <img src="/storage/images/how2.svg" alt="how2" class="img-fluid shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-center mx-auto d-block how-2" data-aos="fade-right" data-aos-delay="300">
            <img src="/storage/images/how3.svg" alt="how3" class="img-fluid shadow p-3 mb-5 bg-body border rounded-3 float-end how" data-aos="fade-right" data-aos-delay="600">
        </div>
    </div>
</section>
@endsection
