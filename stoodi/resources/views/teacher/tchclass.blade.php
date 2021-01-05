@extends('layout.teacher')
@section('title', 'classroom')

@section('body')
    <div style="position: relative">
        <img src="{{'imagersc/welcome.png'}}" style="width: 100%; border-radius: 10px">
        <h1 style="position: absolute; top: 25px; left: 30px; color: white">Welcome, {{ Auth::user()->name }}</h1>
        <h5 style="position: absolute; top: 90px; left: 30px; width: 60%; font-family: serif; font-style: oblique; color: white">"Pendidikan
            merupakan tiket untuk masa depan. Hari esok untuk orang-orang yang telah mempersiapkan dirinya hari ini."</h5>
        <h6 style="position: absolute; top: 175px; left: 30px; font-family: serif; font-style: oblique; color: whitesmoke">-Malcolm X-</h6>
    </div>

    <div style="margin-top: 30px">
        <h4 style="margin-bottom: 20px">My Course</h4>
        
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
                                <p>{{$crs->kelas}} SMA</p>
                            </div>
                            <a class="btn btn-outline-success btn-sm" type="button" href="/tchcourse/{{ $crs->id }}" style="margin-left: 5%; margin-right: 5%; width: 90%; border-radius: 8px">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>

    <div>
        <h4 style="margin-bottom: 20px">To Do List</h4>
        <div class="card" style="border-radius: 10px">
            <div class="card-header" style="background-color: #00D2FC; border-radius: 10px; margin-left: 10px; margin-right: 10px; margin-top: 10px; ">
                <div class="row">
                    <div class="col">
                        <h4>List</h4>
                    </div>
                    <div class="col">
                        <div class="d-flex" style="margin-left: auto">
                            <button type="button" class="btn btn-outline-dark" style="margin-left: auto">Add Task</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="height: 400px;">
                <p align="center">
                    <img src="imagersc/notask.png" style="width: 100px; margin-top: 75px">
                </p>
                <p align="center">Nothing to do now</p>
            </div>
        </div>
    </div>
    <br><br>
@endsection