
@extends('admin')

@section('content')


    <div class="page-header">
        <h1>عنوان الرسالة  <small></small></h1>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">المرسل</h3>
    </div>
    <div class="panel-body">
        نص الرسالة
    </div>
</div>

    <a href="{{url('admin/messages')}}" onclick="" class="btn btn-primary">رجوع</a>


@endsection
