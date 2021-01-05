@extends('layout.teacher')
@section('title', 'Quiz')

@section('body')
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">No</th>
                    <th scope="col" style="width: 35%">Name</th>
                    <th scope="col" style="width: 15%">ID</th>
                    <th scope="col" style="width: 20%">Grade</th>
                    <th scope="col" style="width: 20%">Date attemp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grade as $grd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $grd->name }}</td>
                    <td>{{ $grd->id_user }}</td>
                    <td>{{ $grd->grade }}</td>
                    <td>{{ $grd->dateattemp }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection