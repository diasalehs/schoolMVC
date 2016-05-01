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
                      <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">
                          <input type="hidden" value="{{csrf_token()}}" name="_token">

                              <div class="form-group">
                                  <label for="InputEmail" class="ic">الصف</label>
                                  <select name="classname" id="level" class="form-control " >
                                      @foreach($levels as $level)
                                      <option value="{{$level->id}}">{{$level->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="InputEmail" class="ic"> رمز الشعبة</label>
                                  <select id="class" name="section" class="form-control" >
                                      <option value="أ">أ</option>
                                      <option value="ب">ب</option>
                                      <option value="جـ">جـ</option>
                                      <option value="د">د</option>
                                      <option value="هـ">هـ</option>
                                      <option value="و">و</option>
                                      <option value="ز">ز</option>
                                      <option value="حـ">حـ</option>
                                      <option value="ط">ط</option>
                                      <option value="ي">ي</option>
                                      <option value="ك">ك</option>
                                      <option value="ل">ل</option>
                                      <option value="م">م</option>
                                      <option value="ن">ن</option>
                                      <option value="س">س</option>


                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="InputEmail" class="ic"> السعة</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control col-md-5" id="InputEmailSecond" name="capacity" style="display: inline-block" >
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
                      <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">

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


     <script>$(document).ready(function(){
          $.ajaxSetup({
              headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
          });
//             $('#level').change(getClasses);
          function getClasses() {
                     $('#class').html('');
                   $.post('class/levels',"id="+$(this).children('option:selected').attr('value')+"&_token="+$('input[name=_token]').val(),function (response) {
                       var classes=JSON.parse(response);
                       for(var i=0;i<classes.length;i++)
                       {
                           console.log(classes[i]);
                           $('#class').append($("<option></option>") .attr("value", classes[i].id).text(classes[i].section));
                       }
                   })
                 }
         });
      </script>
    @endsection
    