@extends('layout.admin')
@section('title', 'Admin')

@section('body')
<div class="card" style="border-radius: 10px">
    <div style="margin-top: 15px; margin-bottom: 15px; margin-left: 15px; margin-right: 15px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">id user</th>
                    <th scope="col" style="width: 35%">name</th>
                    <th scope="col" style="width: 35%">email</th>
                    <th scope="col" style="width: 10%">status</th>
                    <th scope="col" style="width: 10%">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $usr)
                <tr>
                    <td>{{ $usr->id }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->email }}</td>
                    @if ($usr->status == 1)
                        <td>{{ 'active' }}</td>
                        <td>
                            <a class="badge rounded-pill bg-danger" href="/nonactive/{{ $usr->id }}" role="button">deactivate</a>
                        </td>
                    @else
                        <td>{{ 'nonactive' }}</td>
                        <td>
                            <a class="badge rounded-pill bg-success" href="/active/{{ $usr->id }}" role="button">activate</a>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('info')
<div class="card" style="background-color: white; border-radius: 10px;">
    <nav class="nav flex-column">
        <h5 style="margin-left: 15px; margin-top: 15px">Total User</h5>
        @php
            $n = 0;
            $active = 0;
            $deactive = 0;
        @endphp
        @foreach ($user as $usr)
            @php
                $n++;
                if ($usr->status == 1) {
                    $active++;
                } else {
                    $deactive++;
                }
                $wac = $active/$n*100;
                $wde = $deactive/$n*100;
            @endphp
        @endforeach
        
        <p align="center" style="font-weight: 900; font-size: 40px">{{ $n }}</p>
        <div style="margin-left: 15px; margin-right: 15px">
            <h6>Active : {{$active}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{$wac}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <h6>Nonactive : {{$deactive}}</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$wde}}%" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
        </div>
    </nav>
</div>
@endsection