@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Hallo, Selamat datang {{ auth()->user()->name }}</h1>
        </div>
    </div>
@endsection
