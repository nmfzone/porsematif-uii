@extends('layouts.pages')

@section('javascript')
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
@endsection

@section('content')

    <div class="row main-content text-center">
        <div class="contest-logo">
            <img src="{{ asset('assets/images/programming.png') }}">
        </div>
        <h3 class="title">Programming</h3>
        <div class="col-md-2 col-md-offset-1 p-s-left">
            <ul class="tabs">
                <li><a href="#tab1">Tab 1</a></li>
                <li><a href="#tab2">Tab 2</a></li>
                <li><a href="#tab3">Tab 3</a></li>
            </ul>
        </div>
        <div class="col-md-6 p-s-right">
            <div class="tabContainer">
                <div id="tab1" class="tabContent">
                    Content in Tab 1
                </div>
                <div id="tab2" class="tabContent">
                    Content in Tab 2
                </div>
                <div id="tab3" class="tabContent">
                    Content in Tab 3
                </div>
            </div>
        </div>
    </div>

@endsection
