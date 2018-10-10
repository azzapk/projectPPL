@extends('Pegawai.layout')

@section('content')
  <h1 class="text-center">Pendaftaran Pegawai</h1>
  <h3 class="text-center">Edit Data Pegawai </h3>

  <div class="row">
    <a href="{{route('pegawais.index')}}" class="btn btn-primary pull-right">Kembali</a>

    <div class="col-md-6 col-md-offset-3">

      <form action="{{route('pegawais.update', $pegawai->id)}}" method="POST">

        <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" value="{{$pegawai->nama}}">
          <span>
            @if($errors->has('nama'))
              {{$errors->first('nama')}}
            @endif
          </span>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" value="{{$pegawai->username}}">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control" value="{{$pegawai->password}}">
        </div>
        <div class="form-group">
          <label>Agama</label>
          <input type="text" name="agama" class="form-control" value="{{$pegawai->agama}}">
        </div>
        <button type="submit" class="btn btn-succes btn-block">Submit</button>
        @csrf
        @method('PATCH')
      </form>
    </div>

  </div>
  @endsection
