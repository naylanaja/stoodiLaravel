@extends('layout.class')
@section('title', 'Course')

@section('body')
@foreach ($classroom as $room)
<div style="position: relative">
    <img src="{{'/imagersc/course.png'}}" style="width: 100%; border-radius: 10px">
    <h5 style="position: absolute; top: 230px; left: 30px; width: 60%; font-family: serif; color: white">{{ $room->description }}</h5>
    <h1 style="position: absolute; top: 175px; left: 30px; color: white">{{ $room->name }}</h1>
</div>
@endforeach

@php
    $m = 0;
    $a = 0;
    $q = 0;
    $qcompl = 0;
    $acompl = 0;
@endphp

<div style="margin-top: 30px">
    <h3>Lessons</h3>
</div>

@foreach ($course as $crs)
@php
    $m += 1;
@endphp
<div class="card" style="margin-top: 20px; border-radius: 10px">
    <div class="card-body">
        <h3>{{ $crs->title }}</h3>
        <div class="accordion accordion-flush" id="{{$crs->id}}acordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne{{$crs->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$crs->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span class="material-icons" style="margin-right: 10px">local_library</span>Materi
                    </button>
                </h2>
                <div id="flush-collapseOne{{$crs->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$crs->id}}" data-bs-parent="#{{$crs->id}}acordion">
                    <div class="accordion-body">
                        <p>{{ $crs->materi }}</p>
                        @if (!$crs->redirect == NULL)
                        <a href="{{$crs->redirect}}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">local_library</span>{{ $crs->redirecttitle }}</a>
                        @endif
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
                    @foreach ($assessment as $asmt)
                        @if ($asmt->id_materi == $crs->id)
                            @php
                                $a += 1;
                                $unc = true;
                            @endphp
                                
                            @forelse ($collection as $col)
                                @if ($asmt->id == $col->id_assessment)
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <a href="{{ $asmt->redirect }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">sticky_note_2</span>{{ $asmt->name }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                @php
                                                    $acompl += 1;
                                                    $unc = false;
                                                @endphp
                                                <span class="badge rounded-pill bg-success">Completed</span>
                                            </div>
                                        </div>
                                        <div class="card" style="border-radius: 10px; margin-top: 15px">
                                            <div style="margin-top: 10px; margin-left: 15px; margin-right: 15px; margin-bottom: 10px">
                                                <h6>Submitted Assessment</h6>
                                                <table>
                                                    <tr>
                                                        <td>Nama File</td>
                                                        <td>: {{$col->filename}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px">Tanggal pengiriman</td>
                                                        <td>: {{$col->datecollection}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                @if ($asmt->id_materi == $crs->id)
                                    @php
                                        $a += 1;
                                        $unc = false;
                                    @endphp
                                    <div class="accordion-body">
                                        <a href="{{ $asmt->redirect }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">sticky_note_2</span>{{ $asmt->name }}</a>
                                        <p>{{ $asmt->description }}</p>
                                        <form action="/assessmentcomp" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="crsid" value="{{$asmt->id_course}}">
                                            <input type="hidden" name="mtrid" value="{{$asmt->id_materi}}">
                                            <input type="hidden" name="asmtid" value="{{$asmt->id}}">
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file" required>
                                                <button type="submit" class="btn btn-primary" id="inputGroupFileAddon04">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                            @endforelse
                            @if ($unc == true)
                                <div class="accordion-body">
                                    <a href="{{ $asmt->redirect }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">sticky_note_2</span>{{ $asmt->name }}</a>
                                    <p>{{ $asmt->description }}</p>
                                    <form action="/assessmentcomp" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="crsid" value="{{$asmt->id_course}}">
                                        <input type="hidden" name="mtrid" value="{{$asmt->id_materi}}">
                                        <input type="hidden" name="asmtid" value="{{$asmt->id}}">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file" required>
                                            <button type="submit" class="btn btn-primary" id="inputGroupFileAddon04">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree{{$crs->id}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree{{$crs->id}}" aria-expanded="false" aria-controls="flush-collapseThree">
                        <span class="material-icons" style="margin-right: 10px">contact_support</span>Quiz
                    </button>
                </h2>
                <div id="flush-collapseThree{{$crs->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingThree{{$crs->id}}" data-bs-parent="#{{$crs->id}}acordion">
                @foreach ($quizes as $quiz)
                    @forelse ($attemp as $atmp)
                        @if ($quiz->id_materi == $crs->id)
                            @php
                                $q += 1;
                                $unc = true;
                            @endphp
                            @if ($quiz->id == $atmp->id_quiz)
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body" style="vertical-align: middle">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <a href="/review/{{ $quiz->id }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">contact_support</span>{{$quiz->name}}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge rounded-pill bg-success">Completed</span>
                                                @php
                                                    $qcompl += 1;
                                                    $unc = false;
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body" style="vertical-align: middle">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <a href="/quiz/{{ $quiz->id }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">contact_support</span>{{$quiz->name}}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge rounded-pill bg-secondary">Uncompleted</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endif
                    @empty
                        @if ($quiz->id_materi == $crs->id)
                            @php
                                $q += 1;
                                $unc = false;
                            @endphp
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body" style="vertical-align: middle">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <a href="/quiz/{{ $quiz->id }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">contact_support</span>{{$quiz->name}}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="badge rounded-pill bg-secondary">Uncompleted</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif 
                    @endforelse
                    @if ($unc == true)
                        <div class="accordion-body">
                            <div class="card">
                                <div class="card-body" style="vertical-align: middle">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <a href="/quiz/{{ $quiz->id }}"><span class="material-icons" style="margin-right: 10px; vertical-align: middle;">contact_support</span>{{$quiz->name}}</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <span class="badge rounded-pill bg-secondary">Uncompleted</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif 
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<br><br>
@endsection

@section('info')
<div class="card" style="background-color: white; border-radius: 10px;">
    <nav class="nav flex-column">
        <h5 style="margin-left: 15px; margin-top: 15px; align-self: center">Course Detail</h5><br>
        <div style="margin-left: 15px; margin-right: 15px">
            <h5>Total Materi : {{$m}}</h5>
            <h6>Assessment : {{$a}}</h6>
            <p>Done : {{$acompl . '/' . $a}}</p>
            <div class="progress">
                @php
                    if ($acompl == 0) {
                        $wa = 0;
                    }else {
                        $wa = number_format($acompl/$a*100);
                    }
                @endphp
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{$wa}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <h6>Quiz : {{$q}}</h6>
            <p>Done : {{$qcompl . '/' . $q}}</p>
            <div class="progress">
                @php
                    if ($qcompl == 0) {
                        $wq = 0;
                    }else {
                        $wq = number_format($qcompl/$q*100);
                    }
                @endphp
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$wq}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
        </div>
    </nav>
</div>
@endsection