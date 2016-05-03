@extends('teacher')

@section('content')

<div class="page-header">
    <h1>طلاب <small></small></h1>
</div>
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse2" class="">    <span class="glyphicon glyphicon-search"></span>  بحث </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="container-fluid">
                @if (count($errors)>0)
                @foreach($errors -> all() as $error)

                <div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link"> {{ $error }}}</a>
                </div>

                @endforeach
                @endif
                <div class="row ">
                    <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                        <div class="fp">
                            <div class="form-group">
                                <label for="InputName">الاسم</label>
                                <div class="input-group">
                                    <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                                    <input type="text" class="form-control" name="name" id="InputName"  >
                                </div>
                            </div>




                            <div class="">
                                <div class="col-md-8 col-md-offset-2 bm" >
                                    <button class="btn btn-success btn-block" type="submit" >بحث</button></div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">

<div class="form-group"style="display: inline-block;">
    <label for="InputEmail" class="">الصف</label>
    <div class="input-group">
        <select id="sts" class="form-control " >
            <option value="full">الاول  </option>
            <option value="family">الاول </option>
            <option value="walk">الثاني </option>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="InputEmail" class="" style="display: inline-block; ">الشعبة</label>
    <div class="input-group">
        <select id="sts" class="form-control " >
            <option value="full"> أ </option>
            <option value="family"> ب</option>
            <option value="walk"> ج</option>
        </select>
    </div>
</div>
</form>

<table class="table table-bordered text-center">
    <thead>
    <tr class="success">
        <th  >رقم الطالب</th>
        <th >اسم الطالب</th>


    </tr>
    </thead>
    <tbody id="test">
    <tr>
        <td>١</td>

        <td >اول</td>





    </tr>
    <tr>
        <td>١</td>
        <td>ضياء صالح سعودي</td>

    </tr>

    </tbody>
</table>
@endsection
