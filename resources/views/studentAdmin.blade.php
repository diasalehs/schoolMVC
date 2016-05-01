@extends('admin')

@section('content')
<div class="page-header">
              <h1>الطلاب <small></small></h1>
        </div>    
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" class="">  <span class="glyphicon glyphicon-plus"></span> اضافة طالب </a>
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
                      <div class="fp">
                          <h3 class="ft"> بيانات الطالب الشخصية</h3>
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
                              <label for="InputEmail" class="ic">جوال</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">الهاتف</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic"> الجنسية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> مكان الولادة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic">الديانة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> رقم الهوية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> نوع الهوية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                              <div class="input-group" >
                                  <input type="date" class="form-control" id="InputEmailSecond" name="InputEmail" >
                              </div>
                          </div>
                          <div class="form-group">
                                  <label for="InputEmail" class="ic"> المواصلات صباحا</label>
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
                              <label for="InputEmail" class="ic">عدد الاخوة</label>
                              <div class="input-group">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">عدد الاخوات</label>
                              <div class="input-group">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>

                          <h3 class="ft ta">بيانات ولي الامر</h3>
                          <div class="form-group">
                              <label for="InputEmail">الاسم الرباعي</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">صلة القرابة</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">حالة الاب</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">المؤهل العلمي</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">الوظيفة</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">مكان العمل</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">الهاتف</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">الجوال</label>
                              <div class="input-group" >
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail">صورة شخصية</label>
                              <div class="input-group" style="width: 100px">
                                  <input type="hidden" role="uploadcare-uploader" name="my_file" style="display: inline-block"/>
                              </div>
                          </div>

                          <div class="">
                              <div class="col-md-8 col-md-offset-2 bm" >
                                  <button class="btn btn-success btn-block" type="submit" >تسجيل</button></div>
                          </div>
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
          <a data-toggle="collapse" href="#collapse2" class="">   <span class="glyphicon glyphicon-search">  </span>  بحث </a>
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
                              <label for="InputEmail" class="ic">الديانة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
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
