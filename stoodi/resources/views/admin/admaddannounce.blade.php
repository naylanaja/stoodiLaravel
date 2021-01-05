@extends('layout.admin')
@section('title', 'Admin')

@section('body')
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <h4 align="center">Announce</h4>
        <form action="/admaddannounce" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Announcement</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="pengumuman" rows="3"></textarea>
            </div>
            
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Add Announcement</button>
            </div>
        </form>
    </div>
</div>


<div class="row row-cols-sm-2 g-2" style="margin-left:350px">
    @foreach ($announce as $a)
        <div class="col">
            <div class="card" style="width:18rem;border-radius:10px">
                <div class="card-body">
                    <h5 class="card-title">{{ $a->title }}</h5>
                    <p class="card-text">{{ $a->pengumuman }}</p>
                </div>
            </div>
        </div>
        @endforeach
</div>

@endsection


