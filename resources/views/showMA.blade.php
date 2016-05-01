
@extends('admin')

@section('content')


    <div class="page-header">
        <h1>عرض الرسالة  <small></small></h1>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">عنوان الرسالة</h3>
    </div>
    <div class="panel-body">
        نص الرسالة
    </div>
</div>
    <button href="{{url('admin/messages')}}" class="btn btn-primary" >رجوع </button>



@endsection
