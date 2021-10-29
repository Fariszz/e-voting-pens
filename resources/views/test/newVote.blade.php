@extends('test.layout')

@section('container')

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <h1>Vote Kuy</h1>

    KETUA KANDIDAT
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah Suara</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kandidats as $kandidat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kandidat->nama }}</td>
                    <td>{{ $kandidat->jumlah_suara }}</td>
                    <td>
                        <input type="hidden" name="status" value="{{ Auth::user()->status == 1 ? 2 : 1 }}"/>
                        @if(Auth::user()->status == 1)
                        {{-- <form action="{{ route('addVote', $kandidat->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add Vote</button>
                        </form> --}}
                            <button type="submit" id="tombolUbah" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kandidat->id }}" >
                                Vote
                            </button>

                            {{-- Modal Box --}}
                            <div class="modal fade" id="exampleModal-{{ $kandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            Apakah Anda Yakin Melakukan Vote kandidat {{ $kandidat->nama }}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        <form action="{{ route('addVote', $kandidat->id)}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" id="vote" name="vote">Add Vote</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>


                        @else
                        <form action="{{ route('deleteVote', $kandidat->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete Vote</button>
                        </form>
                        <h4><span class="badge bg-primary">Anda Sudah Melakukan Vote</span></h4>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    WAKIL KANDIDAT
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah Suara</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wakKandidats as $kandidat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kandidat->nama }}</td>
                    <td>{{ $kandidat->jumlah_suara }}</td>
                    <td>
                        <input type="hidden" name="status" value="{{ Auth::user()->status == 1 ? 2 : 1 }}"/>
                        @if(Auth::user()->status == 1)
                        {{-- <form action="{{ route('addVote', $kandidat->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add Vote</button>
                        </form> --}}
                            <button type="submit" id="tombolUbah" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kandidat->id }}" >
                                Vote
                            </button>

                            {{-- Modal Box --}}
                            <div class="modal fade" id="exampleModal-{{ $kandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            Apakah Anda Yakin Melakukan Vote kandidat {{ $kandidat->nama }}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        <form action="{{ route('addVote', $kandidat->id)}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" id="vote" name="vote">Add Vote</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>


                        @else
                        <form action="{{ route('deleteVote', $kandidat->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete Vote</button>
                        </form>
                        <h4><span class="badge bg-primary">Anda Sudah Melakukan Vote</span></h4>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $wakKandidats[1]->nama }}

    <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> --}}

<!-- Modal -->


<script>
    $(document).on("click", "#exampleModal", function(){
        let id = $(this).data('id');
        $('.modal-body #vote').val(id);
    });
</script>
@endsection

