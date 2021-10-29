@extends('layouts.main')

@section('container')
<section class="container-fluid body-text">
    <div class="container m-t-75 m-b-100">
        <div class="d-flex justify-content-center text-center vote-text-1">e-Voting Pemilu</div>
        <div class="d-flex justify-content-center text-center vote-text-1">Politeknik Negeri Malang</div>
        <div class="d-flex justify-content-center text-center secondary-text m-t-100">Pemilihan Ketua Organisasi 2021/2022</div>
        <div class="d-flex justify-content-around m-t-100">
            <div class="card border-0">
                <img src="/storage/images/ketua-hero-1.svg" class="card-img-top" alt="ketua-1">
            </div>
            <div class="card border-0 m-l-25 m-t-5">
                <img src="/storage/images/ketua-hero-2.svg" class="img-fluid" alt="ketua-2">
            </div>
        </div>
        <div class="d-flex justify-content-around">

            @foreach ($kandidats as $kandidat)
            @if(Auth::user()->status_ketua == 1)
                <div class="d-grid gap-2 col-2">
                    <button class="btn btn-lg btn-primary btn-vote m-t-50" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kandidat->id }}">Vote</button>
                </div>

                {{-- Modal Box --}}
                <div class="modal fade" id="exampleModal-{{ $kandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-body">
                            <i class="fa fa-exclamation-circle fa-2x icon-red d-flex justify-content-center"></i>
                            <h4 class="modal-title fw-bold text-center m-t-10">Apakah kamu sudah yakin?</h4>
                            <h5 class="text-center m-t-10">Proses e-Voting hanya dapat dilakukan 1x, pastikan pilihan sudah benar</h5>
                            <a class="nav-link disabled text-center m-t-10">Jika sudah silakan tekan tombol confirm.</a>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button>
                            </div>
                            <div class="d-grid gap-2 col-5 mx-auto">
                                <form action="{{ route('addVoteKetua', $kandidat->id) }}" method="POST">
                                    @csrf
                                        <button type="submit" class="btn btn-primary btn-vote" id="vote" name="vote">Confirm</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @else
                    <div class="d-grid gap-2 col-2">
                        <span class="btn btn-lg btn-primary btn-vote m-t-50">Anda Sudah Melakukan Vote Ketua</span>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center text-center secondary-text m-t-125">Pemilihan Wakil Ketua Organisasi 2021/2022</div>
        <div class="d-flex justify-content-around m-t-100">
            <div class="card border-0 m-t-5">
                <img src="/storage/images/wakil-hero-1.svg" class="card-img-top" alt="wakil-1">
            </div>
            <div class="card border-0 m-l-25">
                <img src="/storage/images/wakil-hero-2.svg" class="img-fluid" alt="wakil-2">
            </div>
        </div>

        <div class="d-flex justify-content-around">
            @foreach ($wakKandidats as $wakKandidat)
                @if(Auth::user()->status_wakil == 1)
                <div class="d-grid gap-2 col-2">
                    <button class="btn btn-lg btn-primary btn-vote m-t-50" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $wakKandidat->id }}">Vote</button>
                </div>
                {{-- Modal Box --}}
                <div class="modal fade" id="exampleModal-{{ $wakKandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-body">
                            <i class="fa fa-exclamation-circle fa-2x icon-red d-flex justify-content-center"></i>
                            <h4 class="modal-title fw-bold text-center m-t-10">Apakah kamu sudah yakin?</h4>
                            <h5 class="text-center m-t-10">Proses e-Voting hanya dapat dilakukan 1x, pastikan pilihan sudah benar</h5>
                            <a class="nav-link disabled text-center m-t-10">Jika sudah silakan tekan tombol confirm.</a>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button>
                            </div>
                            <div class="d-grid gap-2 col-5 mx-auto">
                                <form action="{{ route('addVoteWakil', $wakKandidat->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-vote" id="vote" name="vote">Confirm</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @else
                    <div class="d-grid gap-2 col-2">
                        <span class="btn btn-lg btn-primary btn-vote m-t-50">Anda Sudah Melakukan Vote Wakil Ketua</span>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="d-grid gap-2 col-5 mx-auto">
            <a href="/" class="btn btn-lg btn-primary btn-vote rounded-pill h-auto m-t-100">
                Selesai
            </a>
            {{-- <button class="btn btn-lg btn-primary btn-vote rounded-pill h-auto m-t-100" type="button">Selesai</button> --}}
        </div>
    </div>
</section>
@endsection
