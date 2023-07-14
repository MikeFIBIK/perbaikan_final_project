@extends('listpaket')

@section('content')
    <form method="post" action="/paket">
        @csrf
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" name='nama_paket' id="nama_paket">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <input type="textarea" class="form-control" id="detail">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Paket</label>
            <textarea class="from-control" id="harga"></textarea>
        </div>
        <div class="mb-3">
            <label for="minimal_p" class="form-label">Minimal Pengunjung</label>
            <input type="text" class="form-control" id="minimal_P">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="checkbox" class="form-control" id="status">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection