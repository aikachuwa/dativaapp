@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <form method="post">
        First Name:<br><input type="text" name="login">

    </form>
@endsection