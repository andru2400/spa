@extends('back.template.main')
@section('additional_script') 
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <link href="{{ asset('css/campaign.css') }}" rel="stylesheet"> --}}
@endsection
@section('content')
    <div id="app">
        <home></home>
    </div>    
@endsection 