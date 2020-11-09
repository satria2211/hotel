@extends ('layout/main')

@section('title','Check-Out')
@section('menu','Check Out')


@section('container')
<div class="card">
<a href="" class="btn btn-primary"><i class="now-ui-icons ui-1_simple-add"></i></a>
<table class="table">
  <thead class="thead-dark" style="text-align:center;">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Check Out</th>
      <th scope="col">Nama</th>
      <th scope="col">Total Hari</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Jenis Kamar</th>
      <th scope="col">Opsi</th>
    
    </tr>
  </thead>
  <tbody style="text-align:center;">
    @foreach ( $Checkout as $out )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $out->check_out }}</td>
      <td>{{ $out->nama }}</td>
      <td>{{ $out->total_hari }}</td>
      <td>{{ $out->total_harga }}</td>
      <td>{{ $out->jenis_kamar }}</td>
     
      <td > 

      <a href="" class="btn btn-primary" class="d-inline">Edit</a>
      <a href="" class="btn btn-danger" class="d-inline">Delete</a>
      
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection