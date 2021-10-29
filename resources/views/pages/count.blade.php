@extends('layouts.main')

@section('container')

<section class="container-fluid body-text m-t-75 m-b-100">
    <div class="container">
        <div class="d-flex justify-content-center vote-text-1 text-center">Pengumuman Pemilihan Ketua dan</div>
        <div class="d-flex justify-content-center vote-text-1 text-center">Wakil Ketua Organisasi</div>
        <div class="d-flex justify-content-center vote-text-1 m-t-25 text-center">Periode 2021/2022</div>
        <div class="row align-items-center d-flex justify-content-center p-t-50" id="content-count">
            <div class="col-12 col-lg-6 py-5" id="image-count">
                <img src="/storage/images/wait-hero.png" alt="wait-hero" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5" id="timer">
                <h1>Coming Soon</h1>
                <div class="py-5 d-flex justify-content-between">
                    <span class="count-text" id="days">00</span>
                    <span class="count-text" id="hours">00</span>
                    <span class="count-text" id="minutes">00</span>
                </div>
                <div class="d-flex justify-content-between text-center mx-auto p-l-20">
                <span class="count-text-2">Days</span>
                <span class="count-text-2">Hours</span>
                <span class="count-text-2">Minutes</span>
                </div>
            </div>
        </div>

        {{-- {{ $wakKandidats->nama }} --}}
    </div>
</section>


@endsection

@section('script')
<script>
 (() => {

const sec = 1000,
  min = sec * 60,
  hour = min * 60,
  day = hour * 24;

const end = new Date("Oct 30, 2020 00:00:00").getTime();

var announcement = document.getElementById("announcement");
// announcement.style.visibility = 'hidden';
// announcement.style.display = 'none';

const int = setInterval(() => {
    const current = new Date().getTime();
    const remaining = end - current;
    document.getElementById("days").innerText = Math.floor(remaining / day);
    document.getElementById("hours").innerText = Math.floor( (remaining % day) / hour );
    document.getElementById("minutes").innerText = Math.floor( (remaining % hour) / min );
    //   document.getElementById("seconds").innerText = Math.floor( (remaining % min) / sec );

    if (remaining < 0) {
        document.getElementById("content-count").remove();
        window.location.replace('/announcement/result');
        clearInterval(int);

    }
    }, 1000);

})();
</script>
@endsection
