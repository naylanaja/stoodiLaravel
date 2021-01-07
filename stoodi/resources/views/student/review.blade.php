@extends('layout.class')
@section('title', 'Review')

@section('body')
@foreach ($quiz as $q)
<div style="position: relative">
    <img src="{{'/imagersc/quiz.png'}}" style="width: 100%; border-radius: 10px">
    <h3 style="position: absolute; top: 30px; left: 30px; color: white">{{$q->name}}</h3>
</div>

<div class="card" style="margin-top: 30px; border-radius: 10px">
    <div class="card-header">
        <h5>My Attemp</h5>
        <table style="border: 0px">
            <tr>
                <td>Name</td>
                <td>: {{Auth::user()->name}}</td>
            </tr>
            @foreach ($grade as $g)
            <tr>
                <td>Grade</td>
                <th>: {{$g->grade}}/100</th>
            </tr>
            <tr>
                <td style="width: 100px">Submitted</td>
                <td>: {{$g->dateattemp}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<form>
    @foreach ($questions as $ques)
        @foreach ($answer as $ans)
            @if ($q->id == $ques->id_quiz && $ans->id_question == $ques->id)
            <div class="card" style="margin-top: 30px; border-radius: 10px">
                <div class="card-header">
                    No {{ $loop->iteration }}
                </div>
                <div class="card-body" style="font-size: 17px">
                    <p>{{$ques->question}}</p>
                    @if ($ans->answer == "a")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-a-{{$ques->id}}" value="a" checked>
                            <label class="form-check-label" for="opsi-a-{{$ques->id}}">
                                {{$ques->a}}
                            </label>
                        </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-a-{{$ques->id}}" value="a" disabled>
                            <label class="form-check-label" for="opsi-a-{{$ques->id}}">
                                {{$ques->a}}
                            </label>
                        </div>
                    @endif
                    @if ($ans->answer == "b")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-b-{{$ques->id}}" value="b" checked>
                            <label class="form-check-label" for="opsi-b-{{$ques->id}}">
                                {{$ques->b}}
                            </label>
                        </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-b-{{$ques->id}}" value="b" disabled>
                            <label class="form-check-label" for="opsi-b-{{$ques->id}}">
                                {{$ques->b}}
                            </label>
                        </div>
                    @endif
                    @if ($ans->answer == "c")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-c-{{$ques->id}}" value="c" checked>
                            <label class="form-check-label" for="opsi-c-{{$ques->id}}">
                                {{$ques->c}}
                            </label>
                        </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-c-{{$ques->id}}" value="c" disabled>
                            <label class="form-check-label" for="opsi-c-{{$ques->id}}">
                                {{$ques->c}}
                            </label>
                        </div>
                    @endif
                    @if ($ans->answer == "d")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-d-{{$ques->id}}" value="d" checked>
                            <label class="form-check-label" for="opsi-d-{{$ques->id}}">
                                {{$ques->d}}
                            </label>
                        </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ques-{{$ques->id}}" id="opsi-d-{{$ques->id}}" value="d" disabled>
                            <label class="form-check-label" for="opsi-d-{{$ques->id}}">
                                {{$ques->d}}
                            </label>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <h6>Jawaban Benar : {{ $ques->answer }}</h6>
                </div>
            </div>
            @endif
        @endforeach
    @endforeach
    <div class="row">
        <div class="col-sm-10">
        </div>
        <div class="col-sm-2">
            <a class="btn btn-outline-success btn-sm" href="/course/{{$q->id_course}}" style="border-radius: 7px; margin-top: 20px">Back to course</a>
        </div>
    </div>
</form>
<br>
@endforeach
@endsection