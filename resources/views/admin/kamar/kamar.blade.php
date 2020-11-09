@extends ('layout/main')

@section('title','Kamar')
@section('menu','Kamar')

@section('container')

<div class="card">
    <center>
    <h1>Kamar</h1>
    </center>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if (session('success'))
      <div class="alert alert-danger">
        {{ session('success') }}
      </div>
  @endif
<a href="/kamar/create" class="btn btn-primary"><i class="now-ui-icons ui-1_simple-add"></i></a>
<table class="table">
  <thead class="thead-dark" style="text-align:center;">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Jenis Kamar</th>
      <th scope="col">Harga Kamar</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">Foto Kamar</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody style="text-align:center;">
    @foreach ( $kamar as $kamar )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $kamar->jenis_kamar }}</td>
      <td>{{ $kamar->harga_kamar }}</td>
      <td>{{ $kamar->fasilitas }}</td>
      <td>{{ $kamar->foto_kamar }}</td>
      <td>

      <a href="/kamar/ubah/{{ $kamar->id_kamar }}" class="btn btn-primary">Edit</a>
      <a href="/kamar/hapus/{{ $kamar->id_kamar }}" class="btn btn-danger">Delete</i></a>
      
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
@endsection