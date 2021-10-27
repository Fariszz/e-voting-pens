@extends('test.layout')

@section('container')
<table class="table">
    <thead>
      <tr>

        <th scope="col">Jumlah Suara</th>
        <th scope="col">Belum Voting</th>
        <th scope="col">Suara Masuk</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>@foreach ($jumlahSuara as $jumlah)
                {{ $jumlah->jumlahSuara }}
        @endforeach</td>
        <td>@foreach ($belumVoting as $jumlah)
                {{ $jumlah->jumlahbelumvoting }}
            @endforeach
        </td>
        <td>
            @foreach ($suaraMasuk as $jumlah)
                {{ $jumlah->suaramasuk }}
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>
@endsection
