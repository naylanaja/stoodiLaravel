@extends('layout.teacher')
@section('title', 'Course')

@section('body')
@foreach ($classroom as $room)
@php
    $class=$room->id;
@endphp
<div style="position: relative">
    <img src="{{'/imagersc/course.png'}}" style="width: 100%; border-radius: 10px">
    <h5 style="position: absolute; top: 230px; left: 30px; width: 60%; font-family: serif; color: white">{{ $room->description }}</h5>
    <h1 style="position: absolute; top: 175px; left: 30px; color: white">{{ $room->name }}</h1>
</div>

<div style="margin-top: 30px">
    <div class="row">
        <div class="col-sm-7">
            <h3>Lessons</h3>
        </div>
        <div class="col-sm-5">
            <p align="right">
                <a class="btn btn-primary btn-sm" href="/add/lesson/{{$room->id}}" role="button" style="border-radius: 7px;"> + Add Lesson </a>
            </p>
        </div>
    </div>
</div>
@endforeach

@foreach ($course as $crs)
<div class="card" style="margin-top: 20px; border-radius: 10px">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <h3>{{ $crs->title }}</h3>
            </div>
            <div class="col-sm-3">
                @if ($crs->visible == 0)
                <p align="right">
                    <a class="btn btn-primary btn-sm" href="/edit/lesson/{{$crs->id}}" role="button" style="border-radius: 7px;"><img src="{{'/imagersc/edit.png'}}"> Edit </a>
                    <a class="btn btn-primary btn-sm" href="/show/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"><img src="{{'/imagersc/show.png'}}"> Show </a>
                </p>
                @else
                <p align="right">
                    <a class="btn btn-primary btn-sm" href="/edit/lesson/{{$crs->id}}" role="button" style="border-radius: 7px;"><img src="{{'/imagersc/edit.png'}}"> Edit </a>
                    <a class="btn btn-primary btn-sm" href="/hide/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"><img src="{{'/imagersc/hide.png'}}"> Hide </a>
                </p>
                @endif
            </div>
        </div>
        <div class="accordion accordion-flush" id="{{$crs->id}}acordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne{{$crs->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$crs->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span class="material-icons" style="margin-right: 10px">local_library</span>Materi
                    </button>
                </h2>
                <div id="flush-collapseOne{{$crs->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$crs->id}}" data-bs-parent="#{{$crs->id}}acordion">
                    <div class="accordion-body">
                        <div class="card">
                            <div class="card-body" style="vertical-align: middle">
                                <p>{{ $crs->materi }}</p>
                                @if (!$crs->redirect == NULL)
                                <a href="{{$crs->redirect}}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">local_library</span>{{ $crs->redirecttitle }}</a>
                                @endif
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo{{$crs->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo{{$crs->id}}" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <span class="material-icons" style="margin-right: 10px">sticky_note_2</span>Tugas
                    </button>
                </h2>
                <div id="flush-collapseTwo{{$crs->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo{{$crs->id}}" data-bs-parent="#{{$crs->id}}acordion">
                    @php
                        $a = 0
                    @endphp
                    @foreach ($assessment as $asmt)
                        @if ($asmt->id_materi == $crs->id)
                            @php
                                $a++
                            @endphp
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body" style="vertical-align: middle">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <a href="{{ $asmt->redirect }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">sticky_note_2</span>{{ $asmt->name }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <a class="badge rounded-pill bg-primary" href="/edit/asmt/{{$asmt->id}}">edit</a>
                                                <a class="badge rounded-pill bg-danger" onclick="return confirm('Yakin ingin menghapus?')" href="/delasmt/{{$asmt->id_course}}/{{$asmt->id}}">delete</a>
                                            </div>
                                            <p>{{ $asmt->description }}</p>
                                        </div>
                                    </div>
                                </div><br>
                                <p align="right">
                                    <a class="btn btn-primary btn-sm" href="/add/asmt/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"> + Add Assessment </a>
                                </p>
                            </div>
                        @endif
                    @endforeach
                    @if ($a == 0)
                    <div class="accordion-body">
                        <p align="right">
                            <a class="btn btn-primary btn-sm" href="/add/asmt/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"> + Add Assessment </a>
                        </p>
                    </div>
                @endif
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree{{$crs->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree{{$crs->id}}" aria-expanded="false" aria-controls="flush-collapseThree">
                        <span class="material-icons" style="margin-right: 10px">contact_support</span>Quiz
                    </button>
                </h2>
                <div id="flush-collapseThree{{$crs->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingThree{{$crs->id}}" data-bs-parent="#{{$crs->id}}acordion">
                @php
                    $q = 0
                @endphp
                @foreach ($quizes as $quiz)
                    @if ($quiz->id_materi == $crs->id)
                        @php
                            $q++
                        @endphp
                        <div class="accordion-body">
                            <div class="card">
                                <div class="card-body" style="vertical-align: middle">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <a href="/quizrev/{{ $quiz->id }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">contact_support</span>{{$quiz->name}}</a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="badge rounded-pill bg-warning" href="/grade/quiz/{{$quiz->id_course}}/{{$quiz->id}}">grading</a>
                                            <a class="badge rounded-pill bg-primary" href="/edit/quiz/{{$quiz->id}}">edit</a>
                                            <a class="badge rounded-pill bg-danger" onclick="return confirm('Yakin ingin menghapus?')" href="/delquiz/{{$quiz->id_course}}/{{$quiz->id}}">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <p align="right">
                                <a class="btn btn-primary btn-sm" href="/add/quiz/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"> + Add Quiz </a>
                            </p>
                        </div>
                    @endif
                @endforeach
                @if ($q == 0)
                    <div class="accordion-body">
                        <p align="right">
                            <a class="btn btn-primary btn-sm" href="/add/quiz/{{$class}}/{{$crs->id}}" role="button" style="border-radius: 7px;"> + Add Quiz </a>
                        </p>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<br><br>
@endsection
