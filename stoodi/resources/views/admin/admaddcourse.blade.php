@extends('layout.admin')
@section('title', 'Admin')

@section('body')
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <h4 align="center">Register Teacher</h4>
        <form action="/admaddcourse" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" id="desc" name="desc" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="number" class="form-control" id="class" name="kelas" required>
            </div>
            <div>
                <label>Majors</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peminatan" value="IPA" id="peminatan1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        IPA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peminatan" value="IPS" id="peminatan2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        IPS
                    </label>
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Add Course</button>
            </div>
        </form>
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