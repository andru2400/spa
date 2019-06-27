@extends('back.template.main')
@section('content')
    <div class="m-3">
        <home :asset="'{{ $asset = asset('') }}'"></home>
    </div>
@endsection
