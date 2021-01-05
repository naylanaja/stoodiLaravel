@extends('layout.teacher')
@section('title', 'Add Quiz')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Add Quiz</h5><br>
        @foreach ($quiz as $qz)
            @php
                $quizid = $qz->id;
                $courseid = $qz->id_course;
            @endphp
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Quiz Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="{{$qz->name}}" required>
                </div>
            </div>
        @endforeach
    </div>
</div><br><br>

@php
    $n=0;
@endphp

<form action="/storeeditquiz" method="POST">
    @csrf
    <input type="hidden" name="courseid" value="{{$courseid}}">
    @foreach ($questions as $q)
    <input type="hidden" name="quizid" value="{{$q->id_quiz}}">
    @php
        $n++;
    @endphp
    <div class="card" style="border-radius: 10px">
        <div class="card-header">
            No {{$n}}
        </div>
        <div class="card-body" style="vertical-align: middle;">
            <input type="hidden" name="quesid-{{$n}}" value="{{$q->id}}">
            <div class="mb-3">
                <label for="soal" class="form-label">Soal</label>
                <textarea class="form-control" id="soal" rows="3" name="soal-{{$n}}">{{$q->question}}</textarea>
            </div>
            <div class="mb-3 row">
                <label for="a" class="col-sm-2 col-form-label">Opsi A</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="a" name="a-{{$n}}" value="{{$q->a}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="b" class="col-sm-2 col-form-label">Opsi B</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="b" name="b-{{$n}}" value="{{$q->b}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="c" class="col-sm-2 col-form-label">Opsi C</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="c" name="c-{{$n}}" value="{{$q->c}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="d" class="col-sm-2 col-form-label">Opsi D</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="d" name="d-{{$n}}" value="{{$q->d}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="d" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-10">
                    <select class="form-select" name="answer-{{$n}}">
                        @if ($q->answer == 'a')
                            <option value="a" selected>A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        @elseif ($q->answer == 'b')
                            <option value="a">A</option>
                            <option value="b" selected>B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        @elseif ($q->answer == 'c')
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c" selected>C</option>
                            <option value="d">D</option>
                        @elseif ($q->answer == 'd'))
                            <option value="a" >A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d" selected>D</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div><br>
    @endforeach
    <input type="hidden" name="n" value="{{$n}}">
    <div align="right">
        <button type="submit" class="btn btn-primary">Save Change(s)</button>
    </div>
</form>
<br><br>
@endsection