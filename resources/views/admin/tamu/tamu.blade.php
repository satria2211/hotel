@extends ('layout/main')

@section('title','Tamu')
@section('menu','Tamu')


@section('container')
<div class="card">
<h1>Data Tamu</h1>

<ul class="list-group">
    @foreach( $tamu as $tm )
        <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $tm-> nama }}
        <a href="/tamu/{{ $tm->id }}" class="badge badge-info" >Detail</a>
    </li>
    @endforeach
 
</ul>
</div>


@endsection