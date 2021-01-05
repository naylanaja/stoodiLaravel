@extends('layout.teacher')
@section('title', 'Add Quiz')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Add Assessment</h5><br>
        <form action="/addasmt" method="POST">
            @csrf
            <input type="hidden" name="courseid" value="{{$courseid}}">
            <input type="hidden" name="lessonid" value="{{$lessonid}}">
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Assessment Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="soal" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="soal" rows="3" name="desc"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="link" class="col-sm-2 col-form-label">Add Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="soal" name="link">
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Add Assessment</button>
            </div>
        </form>
    </div>
</div>
@endsection