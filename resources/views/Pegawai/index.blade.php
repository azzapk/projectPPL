@extends('Pegawai.layout')

@section('content')
  <h1 class="text-center">Pendaftaran Pegawai</h1>

  @if(Session::has('success'))
    <div>
      {{Session::get('success')}}
    </div>
  @endif
  <div class="row">
    <a href="{{route('pegawais.create')}}" class="btn btn-primary pull-right">Buat</a>
    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
    </thead>
    <tbody>
      @foreach($pegawais as $pegawai)
        <tr>
          <td>{{$pegawai->id  }}</td>
          <td>{{$pegawai->nama}}</td>
          <td>{{$pegawai->username}}</td>
          <td>{{$pegawai->password}}</td>
          <td>{{$pegawai->agama}}</td>
          <td>
            <form action="{{route('pegawais.destroy', $pegawai->id)}}" method="POST">
              <button class="btn btn-danger" name="button">Hapus</button>
              <a href="{{route('pegawais.edit', $pegawai->id)}}" class="btn btn-info">Edit</a>
              @csrf
              @method('DELETE')
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  @endsection
