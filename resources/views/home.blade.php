@extends('layouts.app')

@section('content')
    
    <div class="home">

        <h1>This is home.</h1>

        <div class="output">

            {{ dd($users) }}

        </div>
    </div>

@endsection
