@extends('layout.teacher')
@section('title', 'Course')

@section('body')

<div class="card" style="border-radius: 10px">
    <div class="card-body" style="vertical-align: middle;">
        <h5 align="center">Add Lesson</h5><br>
        <form action="/addlesson" method="POST">
            @csrf
            <input type="hidden" name="classid" value="{{$classid}}">
            <div class="mb-3">
                <label for="name" class="form-label">Lesson Title</label>
                <input type="text" class="form-control" id="name" name="title" required>
            </div>
            <div class="mb-3">
                <label for="materi" class="form-label">Lesson Inrtoduction</label>
                <textarea class="form-control" id="materi" rows="15" name="materi"></textarea>
              </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Redirect Title</label>
                <input type="text" class="form-control" id="desc" name="redirect">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Redirect Link</label>
                <input type="text" class="form-control" id="desc" name="link">
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Add Lesson</button>
            </div>
        </form>
    </div>
</div>
@endsection