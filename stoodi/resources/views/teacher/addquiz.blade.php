@extends('layout.teacher')
@section('title', 'Add Quiz')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Add Quiz</h5><br>
        <form action="/addquiz" method="POST">
            @csrf
            <input type="hidden" name="courseid" value="{{$courseid}}">
            <input type="hidden" name="lessonid" value="{{$lessonid}}">
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Quiz Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="soal" class="col-sm-2 col-form-label">Jumlah Soal</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="soal" name="soal">
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </form>
    </div>
</div>
@endsection