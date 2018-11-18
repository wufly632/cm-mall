@extends('layouts.bootstrap')

@section('title', '后台管理')

@section('head')

    @parent

    <script>

    </script>

@endsection

@section('body')

    <div id="app"></div>

    @parent

    <script src="{{ mix('js/admin.js', 'assets') }}"></script>

@endsection
