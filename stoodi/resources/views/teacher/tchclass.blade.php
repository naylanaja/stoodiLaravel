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
                    <div class="col col-lg-2">
                        <div class="d-flex" style="margin-left: auto">
                            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#todo">
                                + Add Todo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="height: 400px;">
                @if (count($todo) == 0)
                <p align="center">
                    <img src="imagersc/notask.png" style="width: 100px; margin-top: 75px">
                </p>
                <p align="center">Nothing to do now</p>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%">no</th>
                            <th scope="col" style="width: 80%">To Do</th>
                            <th scope="col" style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todo as $td)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$td->todo}}</td>
                            <td>
                                <a class="badge rounded-pill bg-success" onclick="return confirm('Tugas telah diselesaikan?')" href="/tddone/{{$td->id}}">done</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="todo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">What you want to do?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/addtodo" method="POST">
                        @csrf
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="todo" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection