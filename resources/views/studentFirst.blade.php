
@extends('student')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>{{Auth::user()->person->name->fullName()}}</p>
    </div>



@endsection
