@extends ('layout/main')

@section('title','Tamu')
@section('menu','Create Kamar')


@section('container')
<div class="card">
<h3>Tambah Kamar</h3>
<a href="/kamar" class="card-link mt-3">Back</a>
@foreach( $kamar as $k )
<form  action="/kamar/update " method="post">
{{ csrf_field() }}
    
    <input type="hidden" class="form-control" value="{{ $k->id_kamar }}" id="id" placeholder="Example input placeholder" name="id" required>

  <div class="form-group col-8 mt-3">
    <label for="jenis">Jenis Kamar</label>
    <input type="text" class="form-control" value="{{ $k->jenis_kamar }}" id="jenis" placeholder="Example input placeholder" name="jenis_kamar" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Harga Kamar</label>
    <input type="text" class="form-control" value="{{ $k->harga_kamar }}" id="harga_kamar" name="harga_kamar" placeholder="Another input placeholder" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Foto Kamar</label>
    <input type="text" class="form-control" value="{{ $k->foto_kamar }}" id="foto_kamar"  name="foto_kamar" placeholder="Another input placeholder" required>
  </div>
  <div class="form-group col-8">
    <label for="harga">Fasilitas</label>
    <input type="text" class="form-control" value="{{ $k->fasilitas }}" id="fasilitas"  name="fasilitas" placeholder="Another input placeholder" required>
    </div>
  <button type="submit" class="btn btn-primary" >Add</button> 
</form>
@endforeach
</div>

<!-- Button trigger modal -->


<!-- Modal -->

@endsection