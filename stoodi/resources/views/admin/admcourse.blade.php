@extends('layout.admin')
@section('title', 'Admin')

@section('body')
<div>
    <h4 style="margin-bottom: 20px">Course List</h4>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($courses as $crs)
        <div class="col">
            <div class="card" style="border-radius: 10px">
                <div style="background: turquoise; width: 90%; margin-left: 5%; margin-top: 5%; height: 40px; border-radius: 10px">
                    <h4 style="text-align: center; margin-top: 3px; color: white">{{ $crs->name }}</h4>
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{ $crs->description }}</h5><br>
                    <div class="row">
                        <div class="col">
                            <h6>Peminatan</h6>
                            <p>{{ $crs->category }}</p>
                        </div>
                        <div class="col">
                            <h6>Kelas</h6>
                            <p>{{$crs->kelas}} {{$crs->category}}</p>
                        </div>
                        <a class="btn btn-outline-success btn-sm" type="button" href="/tcourse/{{ $crs->id }}" style="margin-left: 5%; margin-right: 5%; margin-bottom: 5px; width: 90%; border-radius: 8px">Detail Course</a>
                        <a class="btn btn-outline-danger btn-sm" type="button" href="/delcourse/{{ $crs->id }}" onclick="return confirm('Yakin ingin menghapus?')" style="margin-left: 5%; margin-right: 5%; width: 90%; border-radius: 8px">Delete Course</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('info')
<div class="card" style="background-color: white; border-radius: 10px;">
    <nav class="nav flex-column">
        <h5 style="margin-left: 15px; margin-top: 15px">Total Courses</h5>
        @php
            $n = 0;
            $ipa = 0;
            $ips = 0;
        @endphp
        @foreach ($courses as $crs)
            @php
                $n++;
                if ($crs->category == 'IPA') {
                    $ipa++;
                } else {
                    $ips++;
                }
                $wipa = $ipa/$n*100;
                $wips = $ips/$n*100;
            @endphp
        @endforeach
        
        <p align="center" style="font-weight: 900; font-size: 40px">{{ $n }}</p>
        <div style="margin-left: 15px; margin-right: 15px">
            <h6>IPA : {{$ipa}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{$wipa}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <h6>IPS : {{$ips}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$wips}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
        </div>
    </nav>
</div>
@endsection