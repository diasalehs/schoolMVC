@extends('admin')

@section('content')
<div class="page-header">
              <h1>المواد <small></small></h1>
</div>

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1" class="">اضافة مادة  <span class="glyphicon glyphicon-plus"></span></a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse colla">
            <div class="container-fluid">
                @if (count($errors)>0)
                    @foreach($errors -> all() as $error)

                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link"> {{ $error }}}</a>
                        </div>

                    @endforeach
                @endif
                <div class="row ">
                    <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">

                        <div class="form-group">
                            <label for="InputEmail">اسم المادة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-8 col-md-offset-2 bm" >
                                <button class="btn btn-success btn-block" type="submit" >اضافة</button></div>
                        </div>

                    </form>

                </div>
            </div>


        </div>
    </div>
</div>
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse11" class="">تعديل / حذف المادة  <span class="glyphicon glyphicon-edit"></span></a>
            </h4>
        </div>
        <div id="collapse11" class="panel-collapse collapse colla">
            <div class="container-fluid">
                @if (count($errors)>0)
                    @foreach($errors -> all() as $error)

                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link"> {{ $error }}}</a>
                        </div>

                    @endforeach
                @endif
                <div class="row ">
                    <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <div class="form-group">
                            <label for="InputEmail" class="ic">المادة</label>
                            <select id="sts" class="form-control " >
                                <option value="full">مواصلات كاملة</option>
                                <option value="family">مع الاهل</option>
                                <option value="walk">مشاه</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">الاسم الجديد</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                            </div>
                        </div>

                        <p class="butn">
                            <a href="#" class="btn btn-primary" role="button">تعديل</a>
                            <a href="#" class="btn btn-danger" role="button">حذف</a>
                        </p>


                    </form>

                </div>
            </div>


        </div>
    </div>
</div>
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse111" class="">ربط المواد مع الصفوف   <span class="glyphicon glyphicon-calendar"></span></a>
            </h4>
        </div>
        <div id="collapse111" class="panel-collapse collapse colla">
            <div class="container-fluid">
                @if (count($errors)>0)
                    @foreach($errors -> all() as $error)

                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link"> {{ $error }}}</a>
                        </div>

                    @endforeach
                @endif
                <div class="row ">
                    <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">

                        <div class="form-group">
                            <label for="InputEmail" class="ic">الصف</label>
                            <select id="sts" class="form-control " >
                                <option value="full">مواصلات كاملة</option>
                                <option value="family">مع الاهل</option>
                                <option value="walk">مشاه</option>
                            </select>
                        </div>
                            <br>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id">وجهك</label>

                        </div>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id">وجهك</label>

                        </div>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id" >وجهك</label>

                        </div>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id">وجهك</label>

                        </div>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id">وجهك</label>

                        </div>
                        <div class="form-group matCheck" >
                            <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                            <label for="checkbox_id">وجهك</label>

                        </div>

                        <div class="">
                            <div class="col-md-8 col-md-offset-2 bm" >
                                <button class="btn btn-success btn-block" type="submit" >حفظ</button></div>
                        </div>

                    </form>


                </div>
            </div>


        </div>
    </div>
</div>
@endsection
