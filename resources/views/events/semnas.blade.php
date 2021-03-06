@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content row-centered text-center">
        <div class="contest-logo">
            <!-- <img src=""> -->
        </div>
        <h3 class="title">Seminar</h3>
        <div class="col-md-6 p-s-right col-centered">
            <center>
                <img src="{{ asset('assets/images/poster_seminar.png') }}" width="90%" />
                <br><br>
                Informasi Pendaftaran dan sebagainya silahkan hubungi <i>contact person</i> terkait.
            </center>
        </div>
    </div>

@endsection
