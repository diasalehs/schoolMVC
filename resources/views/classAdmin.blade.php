@extends('admin')

@section('content')
  <div class="page-header">
              <h1>الشعب <small></small></h1>
        </div>
  <div class="panel-group">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse1" class="">اضافة شعبة  <span class="glyphicon glyphicon-plus"></span></a>
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
                      <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">

                              <div class="form-group">
                                  <label for="InputEmail" class="ic">الصف</label>
                                  <select id="sts" class="form-control " >
                                      <option value="full">الاول</option>
                                      <option value="family">الثاني</option>
                                      <option value="walk">الثالث</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="InputEmail" class="ic"> رمز الشعبة</label>
                                  <select id="sts" class="form-control" >
                                      <option value="full">أ</option>
                                      <option value="family">ب</option>
                                      <option value="walk">ج</option>

                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="InputEmail" class="ic"> السعة</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control col-md-5" id="InputEmailSecond" name="InputEmail" style="display: inline-block" >
                                  </div>
                              </div>





                              <div class="">
                                  <div class="col-md-8 col-md-offset-2 bm" >
                                      <button class="btn btn-success btn-block" type="submit" >تسجيل</button></div>
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
                  <a data-toggle="collapse" href="#collapse11" class="">الجدول  <span class="glyphicon glyphicon-plus"></span></a>
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
                      <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">

                          <div class="form-group">
                              <label for="InputEmail" class="ic">الصف</label>
                              <select id="sts" class="form-control " >
                                  <option value="full">مواصلات كاملة</option>
                                  <option value="family">مع الاهل</option>
                                  <option value="walk">مشاه</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> المواصلات ظهرا</label>
                              <select id="sts" class="form-control" >
                                  <option value="full">مواصلات كاملة</option>
                                  <option value="family">مع الاهل</option>
                                  <option value="walk">مشاه</option>

                              </select>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control col-md-5" id="InputEmailSecond" name="InputEmail" style="display: inline-block" >
                              </div>
                          </div>





                          <div class="">
                              <div class="col-md-8 col-md-offset-2 bm" >
                                  <button class="btn btn-success btn-block" type="submit" >تسجيل</button></div>
                          </div>

                      </form>
                      <table class="table table-bordered text-center">
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
                    </div>
          </div>


      </div>
  </div>

    
    @endsection
    