@extends('layout.teacher')
@section('title', 'Quiz')

@section('body')
@foreach ($quiz as $q)
<div style="position: relative">
    <img src="{{'/imagersc/quiz.png'}}" style="width: 100%; border-radius: 10px">
    <h3 style="position: absolute; top: 30px; left: 30px; color: white">{{$q->name}}</h3>
</div>

<form method="POST" action="/quizattemp">
    @csrf
    <input type="hidden" value="{{Auth::user()->id}}" name="userid">
    <input type="hidden" value="{{$q->id}}" name="quizid">
    @foreach ($questions as $ques)
        <input type="hidden" name="id_soal[{{ $loop->iteration }}]" value="{{ $ques->id }}">
        @if ($q->id == $ques->id_quiz)
        <div class="card" style="margin-top: 30px; border-radius: 10px">
            <div class="card-header">
                No {{ $loop->iteration }}
            </div>
            <div class="card-body" style="font-size: 17px">
                <p>{{$ques->question}}</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ques[{{ $loop->iteration }}]" id="opsi-a-{{ $loop->iteration }}" value="a">
                    <label class="form-check-label" for="opsi-a-{{ $loop->iteration }}">
                        {{$ques->a}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ques[{{ $loop->iteration }}]" id="opsi-b-{{ $loop->iteration }}" value="b">
                    <label class="form-check-label" for="opsi-b-{{ $loop->iteration }}">
                        {{$ques->b}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ques[{{ $loop->iteration }}]" id="opsi-c-{{ $loop->iteration }}" value="c">
                    <label class="form-check-label" for="opsi-c-{{ $loop->iteration }}">
                        {{$ques->c}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ques[{{ $loop->iteration }}]" id="opsi-d-{{ $loop->iteration }}" value="d">
                    <label class="form-check-label" for="opsi-d-{{ $loop->iteration }}">
                        {{$ques->d}}
                    </label>
                </div>
            </div>
            <input type="hidden" name="ans[{{ $loop->iteration }}]" value="{{ $ques->answer }}">
        </div>
        @endif
    @endforeach
    <div class="row">
        <div class="col-sm-10">
        </div>
        <div class="col-sm-2">
            <a class="btn btn-outline-danger btn-sm" href="/tchcourse/{{$q->id_course}}" style="border-radius: 7px; margin-top: 20px">Back to course</a>
        </div>
    </div>
</form>
<br><br>
@endforeach
@endsection