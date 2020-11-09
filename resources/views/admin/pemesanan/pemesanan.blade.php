@extends ('layout/main')

@section('title','Pemesanan')
@section('menu','Pemesanan')


@section('container')
<div class="card">
<a href="" class="btn btn-primary"><i class="now-ui-icons ui-1_simple-add"></i></a>
<table class="table">
  <thead class="thead-dark" style="text-align:center;">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Id. Pelanggan</th>
      <th scope="col">No.Hp</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Total Hari</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Id Kamar</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody style="text-align:center;">
    @foreach ( $Pemesanan as $pem )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $pem->nama }}</td>
      <td>{{ $pem->no_hp }}</td>
      <td>{{ $pem->check_in }}</td>
      <td>{{ $pem->check_out }}</td>
      <td>{{ $pem->total_hari }}</td>
      <td>{{ $pem->total_harga }}</td>
      <td>{{ $pem->jenis_kamar }}</td>
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