@extends('layout.teacher')
@section('title', 'Course')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Edit Lesson</h5><br>
        @foreach ($lesson as $lsn)
        <form action="/editlesson" method="POST">
            @csrf
            <input type="hidden" name="classid" value="{{$lsn->id_classroom}}">
            <input type="hidden" name="id" value="{{$lsn->id}}">
            <div class="mb-3">
                <label for="name" class="form-label">Lesson Title</label>
                <input type="text" class="form-control" id="name" name="title" value="{{$lsn->title}}" required>
            </div>
            <div class="mb-3">
                <label for="materi" class="form-label">Lesson Inrtoduction</label>
                <textarea class="form-control" id="materi" rows="15" name="materi">{{$lsn->materi}}</textarea>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Redirect Title</label>
                <input type="text" class="form-control" id="desc" value="{{$lsn->redirecttitle}}" name="redirect">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Redirect Link</label>
                <input type="text" class="form-control" id="desc" value="{{$lsn->redirect}}" name="link">
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Save Change(s)</button>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection