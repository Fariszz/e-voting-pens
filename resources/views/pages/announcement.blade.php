@extends('layouts.main')

@section('container')
<section class="container-fluid body-text">
    <div class="container m-t-75 m-b-100">
        <div class="d-flex justify-content-center vote-text-1 text-center">Pengumuman Pemilihan Ketua dan</div>
        <div class="d-flex justify-content-center vote-text-1 text-center">Wakil Ketua Organisasi</div>
        <div class="d-flex justify-content-center vote-text-1 m-t-25 text-center">Periode 2021/2022</div>
        <div class="row d-flex justify-content-center" id="announcement">
            <div class="col-5 py-5">
                <span class="annoucement-text p-l-30 text-center">Ketua Organinsasi</span>
            </div>
            <div class="col-5 py-5">
                <div class="d-lg-none">
                    <h5 class="annoucement-text text-center m-l-30">Wakil Ketua Organinsasi</h5>
                </div>
                <div class="d-none d-lg-block">
                    <h5 class="annoucement-text text-center m-l-100">Wakil Ketua Organinsasi</h5>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div class="card border-0">
                    <img src="{{ $kandidats->foto }}" class="card-img-top" alt="ketua-1">
                </div>
                <div class="card border-0 m-l-25 m-t-5">
                    <img src="{{ $wakKandidats->foto }}" class="img-fluid" alt="ketua-2">
                </div>
            </div>
        </div>
</section>


@endsection
