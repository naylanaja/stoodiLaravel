@extends('layout.class')
@section('title', 'classroom')

@section('body')
    <div style="position: relative">
        <img src="{{ '/imagersc/welcome.png' }}" style="width: 100%; border-radius: 10px">
        <h1 style="position: absolute; top: 25px; left: 30px; color: white">Welcome, user</h1>
        <h5 style="position: absolute; top: 90px; left: 30px; width: 60%; font-family: serif; font-style: oblique; color: white">"Pendidikan
            merupakan tiket untuk masa depan. Hari esok untuk orang-orang yang telah mempersiapkan dirinya hari ini."</h5>
        <h6 style="position: absolute; top: 175px; left: 30px; font-family: serif; font-style: oblique; color: whitesmoke">-Malcolm X-</h6>
    </div>

    <div style="margin-top: 30px">
        <h4 style="margin-bottom: 20px">My Course</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="border-radius: 10px">
                    <div style="background: blue; width: 90%; margin-left: 5%; margin-top: 5%; height: 40px; border-radius: 10px">
                        <h4 style="text-align: center; margin-top: 3px; color: white">Matematika</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Matematika Bilingual Kelas 3 Semester 1</h5><br>
                        <div class="row">
                            <div class="col">
                                <h6>Pengajar</h6>
                                <p>Rheza Dewantara</p>
                            </div>
                            <div class="col">
                                <h6>Progres</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" type="button" style="margin-left: 5%; margin-right: 5%; width: 90%;">View Course</button>
                        </div>
                    </div>
                </div>
            </div>
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