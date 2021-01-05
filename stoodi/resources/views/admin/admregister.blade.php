@extends('layout.admin')
@section('title', 'Admin')

@section('body')
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <h4 align="center">Register Teacher</h4>
        <form action="/regteacher" method="POST">
            @csrf
            <div class="mb-3">
                <label for="namet" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="namet" name="name" required>
            </div>
            <div class="mb-3">
                <label for="emailt" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailt" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="passwordt" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordt" name="password" required>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Register Account</button>
            </div>
        </form>
    </div>
</div>
<br>
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <h4 align="center">Register Student</h4>
        <form action="/regstudent" method="POST">
            @csrf
            <div class="mb-3">
                <label for="names" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="names" name="name" required>
            </div>
            <div class="mb-3">
                <label for="emails" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emails" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="passwords" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwords" name="password" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Class</label>
                <input type="number" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div>
                <label>Peminatan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peminatan" id="peminatan1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        IPA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="peminatan" id="peminatan2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        IPS
                    </label>
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Register Account</button>
            </div>
        </form>
    </div>
</div><br><br>
@endsection

@section('info')
<div class="card" style="background-color: white; border-radius: 10px;">
    <nav class="nav flex-column">
        <h5 style="margin-left: 15px; margin-top: 15px">Total User</h5>
        @php
            $n = 0;
            $active = 0;
            $deactive = 0;
        @endphp
        @foreach ($user as $usr)
            @php
                $n++;
                if ($usr->status == 1) {
                    $active++;
                } else {
                    $deactive++;
                }
                $wac = $active/$n*100;
                $wde = $deactive/$n*100;
            @endphp
        @endforeach
        
        <p align="center" style="font-weight: 900; font-size: 40px">{{ $n }}</p>
        <div style="margin-left: 15px; margin-right: 15px">
            <h6>Active : {{$active}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{$wac}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <h6>Nonactive : {{$deactive}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$wde}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
        </div>
    </nav>
</div>
@endsection