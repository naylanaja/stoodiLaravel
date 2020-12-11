@extends ('layout/main')

@section('title','Stoodi')

@section ('container')
    <div class="container" style="margin-top: 20px; font-size: 20px">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">Berlangganan</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="#" role="button" style="font-size: 20px; border-radius: 40px">Login</a>
            </li>
        </ul>
    </div>
    @endsection
    


    