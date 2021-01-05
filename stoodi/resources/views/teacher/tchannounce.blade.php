@extends('layout.teacher')
@section('title', 'classroom')

@section('body')
<div style="position: relative">
        <h1 style="position: absolute; top: 25px; left: 30px; color: black">Announcement</h1>
    </div>

    <div style="margin-top: 100px">
    @foreach($announce as $a)
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            {{ $a->title }}
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> {{ $a->pengumuman }}</p>
            </div>
            </div>
        </div>
        </div>
        <br>
		@endforeach
    </div>
@endsection