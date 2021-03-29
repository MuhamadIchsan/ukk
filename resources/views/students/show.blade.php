@extends('layouts.index')
@section('content')
    <div class="container pt-5">        
            <div id="print" class="card">
            <ul class="list-group">
                <li class="list-group-item">
                    <p>NIS : {{ $student->nis }}</p>
                </li>
                <li class="list-group-item">
                    <p>Nama : {{ $student->nama }}</p>
                </li>
                <li class="list-group-item">
                    <p>Jenis Kelamin : {{ $student->jk }}</p>
                </li>
                <li class="list-group-item">
                    <p>Kelas : {{ $student->kelas }}</p>
                </li>
                <li class="list-group-item">
                    <p>Alamat : {{ $student->alamat }}</p>
                </li>
                <li class="list-group-item">
                    <p>Asal Sekolah : {{ $student->asal_sekolah }}</p>
                </li>
                <li class="list-group-item">
                    <p>Jurusan : {{ $student->jurusan }}</p>
                </li>
            </ul>                
        </div>       
        <a href="{{ route('siswa.edit',$student->id) }}" class="btn btn-info my-2">Edit</a>                           
        <button class="btn btn-primary" onclick="printPage('print')">Print</button>
    </div>
@endsection