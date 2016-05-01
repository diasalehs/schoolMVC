@extends('admin')

@section('content')


<div class="page-header">
    <h1>الرسائل  <small></small></h1>
</div>
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1" class=""><span class="glyphicon glyphicon-pencil"></span> رسالة جديدة </a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse colla">
<div class="row">
    <form role="form" class="form-inline">
        <div class="form-group mi">
            <label for="InputName">المرسل اليه</label>
            <div class="input-group "  >
                <input type="text" class="form-control" name="InputName" id="InputName"  required>
            </div>
        </div>

        <div class="form-group mi ">
            <label for="InputEmail" >العنوان</label>
            <div class="input-group" >
                <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
            </div>
        </div>
        <div class="form-group mi">
            <label for="InputEmail">نص الرسالة </label>
            <div class="input-group">
                <textarea style="" id="myTextarea"></textarea>
            </div>
        </div>
        <div class="form-group mi">
            <label for="InputEmail"> </label>

            <div class="input-group mi" >
                <input class="btn btn-success btn-block" type="submit"value= "ارسال">
            </div>
        </div>
    </form>

</div>


        </div>
    </div>
</div>


<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse11" class=""><span class="glyphicon glyphicon-envelope"></span> الرسائل المستقبلة </a>
            </h4>
        </div>
        <div id="collapse11" class="panel-collapse collapse colla">
            <div class="row">
<table class="table table-bordered text-center">
    <thead>
    <tr class="success">
        <th  >المرسل</th>
        <th >عنوان الرسالة</th>
        <th >عمليات</th>

    </tr>
    </thead>
    <tbody id="test">
    <tr>
        <td>ضياء صالح سعودي</td>
        <td >اول</td>
        <td ><div class="dropdown">
                <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0);">رد</a></li>
                    <li><a href="{{url('admin/messages/show')}}">عرض</a></li>
                    <li><a href="javascript:void(0);">حذف</a></li>
                </ul>
            </div>
        </td>
    </tr>


    </tbody>
</table>

            </div>


        </div>
    </div>
</div>

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse111" class=""><span class="glyphicon glyphicon-send"></span> الرسائل المرسلة  </a>
            </h4>
        </div>
        <div id="collapse111" class="panel-collapse collapse colla">
            <div class="row">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr class="success">
                        <th  >المستقبل</th>
                        <th >عنوان الرسالة</th>
                        <th >عمليات</th>

                    </tr>
                    </thead>
                    <tbody id="test">
                    <tr>
                        <td>ضياء صالح سعودي</td>
                        <td >اول</td>
                        <td ><div class="dropdown">
                                <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">رد</a></li>
                                    <li><a href="{{url('admin/messages/show')}}">عرض</a></li>
                                    <li><a href="javascript:void(0);">حذف</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>

            </div>


        </div>
    </div>
</div>

@endsection
