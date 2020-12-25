@extends('layout.class')
@section('title', 'Quiz')

@section('body')
<div style="position: relative">
    <img src="imagersc/quiz.png" style="width: 100%; border-radius: 10px">
    <h3 style="position: absolute; top: 30px; left: 30px; color: white">Quiz Matematika BAB 1</h3>
</div>

<div class="card" style="margin-top: 30px; border-radius: 10px">
    <div class="card-header">
        No 1
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>1 + 1 = </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    4
                </label>
            </div>
        </blockquote>
    </div>
</div>
@endsection