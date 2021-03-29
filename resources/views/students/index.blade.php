@extends('layouts.index')
@section('content')
<div class="container text-center pt-5">
  <div class="jumbotron">
    <h1 class="display-4">PPDB SMK WIKRAMA</h1>
    <p class="lead">Selamat datang dan selamat bergabung di SMK Wikrama</p>
    <hr class="my-4">
    <p>Jumlah Siswa Mendaftar : {{ $siswa->count() }}</p>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>            
          @foreach($siswa as $s)
          <tr>
            <td>{{ $s->nama }}</td>
            <td>
             <a href="{{ route('siswa.show',$s->id )}}" class="btn btn-info">Show</a>
             <form action="{{ route('siswa.destroy',$s->id) }}" method="post" class="d-inline">
             @csrf
             @method('DELETE')
              <button class="btn btn-danger">Hapus</button>
             </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="p-2">
    <a class="btn btn-primary btn-lg" href="{{ route('siswa.create') }}" >Daftar</a>    
    </div>
  </div>
</div>
@endsection