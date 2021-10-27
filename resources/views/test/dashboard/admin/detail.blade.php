<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pemilih
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$pemilih->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$pemilih->nama}}</li>
                    <li class="list-group-item"><b>Email : </b>{{ $pemilih->email }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>

        </div>
    </div>
</div>
