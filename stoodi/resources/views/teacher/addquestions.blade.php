@extends('layout.teacher')
@section('title', 'Add Quiz')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Add Quiz</h5><br>
        @foreach ($quiz as $q)
            @php
                $quizid = $q->id;
            @endphp
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Quiz Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="{{$q->name}}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="soal" class="col-sm-2 col-form-label">Jumlah Soal</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="soal" name="soal" value="{{$soal}}" disabled>
                </div>
            </div>
        @endforeach
    </div>
</div><br><br>

<form action="/addquestions" method="POST">
    @csrf
    <input type="hidden" name="jmlsoal" value="{{$soal}}">
    <input type="hidden" name="course" value="{{$course}}">
    @for ($i = 1; $i <= $soal; $i++)
    <div class="card" style="border-radius: 10px">
        <div class="card-header">
            No {{$i}}
        </div>
        <div class="card-body" style="vertical-align: middle;">
            <input type="hidden" name="quizid" value="{{$quizid}}">
            <div class="mb-3">
                <label for="soal" class="form-label">Soal</label>
                <textarea class="form-control" id="soal" rows="3" name="soal-{{$i}}"></textarea>
            </div>
            <div class="mb-3 row">
                <label for="a" class="col-sm-2 col-form-label">Opsi A</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="a" name="a-{{$i}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="b" class="col-sm-2 col-form-label">Opsi B</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="b" name="b-{{$i}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="c" class="col-sm-2 col-form-label">Opsi C</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="c" name="c-{{$i}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="d" class="col-sm-2 col-form-label">Opsi D</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="d" name="d-{{$i}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="d" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-10">
                    <select class="form-select" name="answer-{{$i}}">
                        <option selected>Select answer</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
                </div>
            </div>
        </div>
    </div><br>
@endfor
    <div align="right">
        <button type="submit" class="btn btn-primary">Submit All</button>
    </div>
</form>
<br><br>
@endsection