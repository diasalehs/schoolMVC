@extends('supervisor')

@section('content')
    <div class="page-header">
        <h1>الحضور والغياب <small></small></h1>
    </div>



                    <div class="row ">
                        <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                            <div class="fp">

                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الصف</label>
                                    <div class="input-group">
                                        <select id="sts" class="form-control " >
                                            <option value="full">الاول أ </option>
                                            <option value="family">الاول ب</option>
                                            <option value="walk">الثاني ج</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الشعبة</label>
                                    <div class="input-group">
                                        <select id="sts" class="form-control " >
                                            <option value="full">الاول أ </option>
                                            <option value="family">الاول ب</option>
                                            <option value="walk">الثاني ج</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">


                                        <button class="btn btn-success" type="submit" style="width: 100px">بحث</button></div>
                            </div>

                        </form>

                    </div>


    <table class="table table-bordered text-center" style="margin-top: 20px">
        <thead>
        <tr class="success">
            <th  >رقم الطالب</th>
            <th >اسم الطالب</th>
            <th >الصف</th>
            <th >الشعبة</th>
            <th>العمليات</th>
        </tr>
        </thead>
        <tbody id="test">
        <tr>
            <td>١</td>
            <td>ضياء صالح سعودي</td>
            <td >اول</td>
            <td >أ</td>
            <td ><div class="dropdown">
                    <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">تعديل</a></li>
                        <li><a href="javascript:void(0);">حذف</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td>١</td>
            <td>ضياء صالح سعودي</td>
            <td >اول</td>
            <td >أ</td>
            <td ><div class="dropdown">
                    <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">تعديل</a></li>
                        <li><a href="javascript:void(0);">حذف</a></li>
                    </ul>
                </div>
            </td>
        </tr>

        </tbody>
    </table>

@endsection
