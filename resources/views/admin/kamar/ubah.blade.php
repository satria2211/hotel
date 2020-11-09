@extends ('layout/main')

@section('title','Tamu')
@section('menu','Create Kamar')


@section('container')
<div class="card">
<h3>Tambah Kamar</h3>
<a href="/kamar" class="card-link mt-3">Back</a>
<form method="post" action="/kamar">
@csrf
    @method('PUT')
  <div class="form-group col-8 mt-3">
    <label for="jenis">Jenis Kamar</label>
    <input type="text" class="form-control" id="jenis" placeholder="Example input placeholder" name="jenis_kamar" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Harga Kamar</label>
    <input type="text" class="form-control" id="harga_kamar" name="harga_kamar" placeholder="Another input placeholder" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Foto Kamar</label>
    <input type="text" class="form-control" id="foto_kamar" name="foto_kamar" placeholder="Another input placeholder" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Fasilitas</label>
    <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Another input placeholder" required>
    </div>
  <button type="submit" class="btn btn-primary" >Add</button> 
</form>
</div>

<!-- Button trigger modal -->


<!-- Modal -->

@endsection