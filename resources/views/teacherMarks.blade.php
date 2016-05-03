
@extends('teacher')

@section('content')

    <div class="page-header">
        <h1>العلامات <small></small></h1>
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

                    <div class="row ">
                        <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                            <div class="fp">
                                <div class="form-group">
                                    <label for="InputName" class="ic">الاسم الاول</label>
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                                        <input type="text" class="form-control ci" name="firstName" id="InputName"  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم الاب</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم الجد</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم العائلة</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الصف</label>
                                    <div class="input-group">
                                        <select id="sts" class="form-control " >
                                            <option value="full">الاول  </option>
                                            <option value="family">الاول </option>
                                            <option value="walk">الثاني </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الشعبة</label>
                                    <div class="input-group">
                                        <select id="sts" class="form-control " >
                                            <option value="full"> أ </option>
                                            <option value="family"> ب</option>
                                            <option value="walk"> ج</option>
                                        </select>
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
    <table class="table table-bordered text-center">
        <thead>
        <tr class="success">
            <th  >رقم الطالب</th>
            <th >اسم الطالب</th>

            <th >الاول</th>
            <th >الثاني</th>
            <th >الشهرين</th>
            <th >الثالث</th>
            <th >الرابع</th>
            <th >النهائي</th>
        </tr>
        </thead>
        <tbody id="test">
        <tr>
            <td>١</td>

            <td >اول</td>

            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>
            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>
            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>

            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>
            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>
            <td>
                <input type="number" class="form-control" id="InputEmailSecond" name="newName" style="width: 70px" >
            </td>



        </tr>


        </tbody>
    </table>


    <button class="btn btn-success btn-block" type="submit" >حفظ</button></div>

@endsection
