@extends('test.layout')

@section('container')

<form class="form" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pemilih as $voter)
    <tr>

        <td>{{ $voter->nim }}</td>
        <td>{{ $voter->name }}</td>
        <td>{{ $voter->email }}</td>
        <td>
        <form action="{{ route('voters.destroy',$voter->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('voters.show',$voter->nim) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('voters.edit',$voter->nim) }}">Edit</a>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $voter->nim }}">
                    Delete
                </button>
                <div class="modal fade" id="exampleModal-{{ $voter->nim }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Apakah Anda Yakin Melakukan Delete User {{ $voter->name }}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    </div>
                </div>


                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
        </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $pemilih->links() }}
@endsection

