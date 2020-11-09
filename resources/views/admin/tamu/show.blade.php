@extends ('layout/main')

@section('title','Tamu')
@section('menu','Tamu')


@section('container')
<div class="card">
<h1>Detail Tamu</h1>
<div class="card" style="width: 18rem;">
<a href="/tamu" class="card-link">Back</a>
  <div class="card-body">
    <h5 class="card-title">{{ $tamu->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $tamu->jenis_kelamin }}</h6>
    <p class="card-text">{{ $tamu->Email }}</p>
    <p class="card-text">{{ $tamu->no_hp }}</p>
    <button type="submit" class="btn btn-primary" >Edit</button> 
    <button type="submit" class="btn btn-danger" >Delete</button> 
    
  </div>
</div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->

@endsection