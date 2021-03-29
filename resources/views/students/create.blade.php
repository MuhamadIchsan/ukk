@extends('layouts.index')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Input Siswa</h2>
        </div>
        <div class="card-body">
            <div class="row">
            <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
                <div class="col">
                    <label for="">Input NIS</label>
                    <input type="text" class="form-control" name="nis">
                </div>
                <div class="col">
                    <label for="">Input nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col">
                    <label for="">Input jk</label>
                    <select name="jk" class="form-control">
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Input ttl</label>
                    <input type="date" class="form-control" name="ttl">
                </div>
                <div class="col">
                    <label for="">Input alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="col">
                    <label for="">Input asal_sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah">
                </div>
                <div class="col">
                    <label for="">Input kelas</label>
                    <input type="text" class="form-control" name="kelas">
                </div>
                <div class="col">
                    <label for="">Input jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="OTKP">OTKP</option>                        
                        <option value="RPL">RPL</option>                        
                        <option value="BDP">BDP</option>                        
                        <option value="MMD">MMD</option>                        
                        <option value="TBG">TBG</option>                        
                        <option value="TKJ">TKJ</option>                        
                        <option value="HTL">HTL</option>                        
                    </select>
                </div>
                <button class="btn btn-success">selesai</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection