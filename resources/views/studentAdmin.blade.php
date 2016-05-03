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

              <div class="row ">
                  <form action="{{route('studentCreate')}}"role="form" class="form-inline" method="post">
                      <div class="fp">
                          <h3 class="ft"> بيانات الطالب الشخصية</h3>
                          <div class="form-group">
                              <label for="InputName" class="ic">الاسم الاول</label>
                              <div class="input-group">
                                  <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                                  <input type="text" class="form-control ci" name="firstName" id="firstName"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">اسم الاب</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailFirst" name="secondName"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">اسم الجد</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="thirdName"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">اسم العائلة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="lastName"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">جوال</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="mobile"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">الهاتف</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="phone"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic"> الجنسية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> مكان الولادة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic">الديانة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="religon"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> رقم الهوية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="ni"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> نوع الهوية</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="idType"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">عدد الاخوة</label>
                              <div class="input-group">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic">عدد الاخوات</label>
                              <div class="input-group">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic"> الأمراض</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="diseases"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="InputEmailSecond" name="surgeries"  >
                              </div>
                          </div>



                          <div class="form-group">
                              <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                              <div class="input-group" >
                                  <input type="date" class="form-control" id="InputEmailSecond" name="dateOfBirth" >
                              </div>
                          </div>

                          <div class="form-group">
                                  <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                                      <select id="sts" class="form-control " name="transMorning">
                                          <option value="bus">مواصلات كاملة</option>
                                          <option value="parent">مع الاهل</option>
                                          <option value="on foot">مشاه</option>
                                      </select>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                              <select id="sts" class="form-control" name="transAfternoon">
                                  <option value="bus">مواصلات كاملة</option>
                                  <option value="parent">مع الاهل</option>
                                  <option value="on foot">مشاه</option>

                              </select>
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
                              <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
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
                <a data-toggle="collapse" href="#collapse2" class="">   <span class="glyphicon glyphicon-search"></span>  بحث  </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="container">
                <div class="row formm">
                    <form action="{{url('admin/student/search')}}"role="form" class="form-inline" method="post">
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
                        <th  >رقم المستخدم</th>
                        <th >الصف</th>
                        <th >الشعبة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody id="test">
                <?php $var = 0;?>
                     @foreach($students as $student)
                         <?php $var ++; ?>
                     <tr>
                         <td>{{$var}}</td>

                         <td>{{$student->person->name->fullName()}}</td>
                         <td>{{$student->person->id}}</td>
                     @if($student->class != null)
                         <td >{{$student->class->level->name}}</td>
                         <td >{{$student->class->section}}</td>
                         @else
                             <td >لم يضف</td>
                             <td >لم يضف</td>
                         @endif

                         <td ><div class="dropdown
                                 <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                                 <ul class="dropdown-menu">


                                     <li><a id="/student/show" class="post show" role="button" data-toggle="modal" data-target="#show">عرض</a>
                                     </li>
                                     <li><a id="/student/edit" class="post edit" role="button" data-toggle="modal" data-target="#myModal">تعديل</a>
                                     </li>
                                     <li><a id ="/student/delete" class="post delete" role="button" data-target="#deleteC"  data-toggle="modal">حذف</a>
                                     </li>
                                 </ul>

                                 <input type="hidden"  name="id" value="{{$student->id}}" id="studentid">
                                 <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                             </div>
                         </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>


<!-- Modal -->
<div id="show" class="modal fade" role="dialog" style=" width: 80%; position: fixed; right: 10%">
    <div class="modal-dialog" style="width: 100%">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">عرض المعلومات</h4>
            </div>
            <div class="modal-body" >

                    <div class="row ">
                        <form action="{{route('studentCreate')}}"role="form" class="form-inline" method="post">
                            <div class="fp">
                                <h3 class="ft"> بيانات الطالب الشخصية</h3>
                                <div class="form-group">
                                    <label for="InputName" class="ic">الاسم الاول</label>
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                                        <input type="text" class="form-control ci" name="firstName" id="firstName" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم الاب</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailFirst" name="secondName" disabled value=""  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم الجد</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="thirdName"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">اسم العائلة</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="lastName"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">جوال</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="mobile" disabled value=""  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الهاتف</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="phone" disabled value=""  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> الجنسية</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> مكان الولادة</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" disabled value=""   >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic">الديانة</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="religon" disabled value=""  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> رقم الهوية</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="ni"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> نوع الهوية</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="idType"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">عدد الاخوة</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic">عدد الاخوات</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters" disabled value=""  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  disabled value="" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> الأمراض</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="diseases" disabled value=""  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="InputEmailSecond" name="surgeries" disabled value=""  >
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                                    <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >

                                </div>
                                <div class="form-group">
                                    <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                                    <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >

                                </div>




                                <h3 class="ft ta">بيانات ولي الامر</h3>
                                <div class="form-group">
                                    <label for="InputEmail">الاسم الرباعي</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">صلة القرابة</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">حالة الاب</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">المؤهل العلمي</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">الوظيفة</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  disabled value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">مكان العمل</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  disabled value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">الهاتف</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">الجوال</label>
                                    <div class="input-group" >
                                        <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"disabled value=""  >
                                    </div>
                                </div>



                            </div>

                        </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            </div>
        </div>

    </div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style=" width: 80%; position: fixed; right: 10%">
    <div class="modal-dialog" style="width: 100%">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">تعديل المعلومات</h4>
            </div>
            <div class="modal-body" >
                <div class="row ">
                    <form action="{{route('studentCreate')}}"role="form" class="form-inline" method="post">
                        <div class="fp">
                            <h3 class="ft"> بيانات الطالب الشخصية</h3>
                            <div class="form-group">
                                <label for="InputName" class="ic">الاسم الاول</label>
                                <div class="input-group">
                                    <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                                    <input type="text" class="form-control ci" name="firstName" id="firstName"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">اسم الاب</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailFirst" name="secondName"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">اسم الجد</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="thirdName"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">اسم العائلة</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="lastName"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">جوال</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="mobile"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">الهاتف</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="phone"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail" class="ic"> الجنسية</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic"> مكان الولادة</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail" class="ic">الديانة</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="religon"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic"> رقم الهوية</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="ni"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic"> نوع الهوية</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="idType"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">عدد الاخوة</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic">عدد الاخوات</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail" class="ic"> الأمراض</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="diseases"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="surgeries"  >
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                                <div class="input-group" >
                                    <input type="date" class="form-control" id="InputEmailSecond" name="dateOfBirth" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                                <select id="sts" class="form-control " name="transMorning">
                                    <option value="bus">مواصلات كاملة</option>
                                    <option value="parent">مع الاهل</option>
                                    <option value="on foot">مشاه</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                                <select id="sts" class="form-control" name="transAfternoon">
                                    <option value="bus">مواصلات كاملة</option>
                                    <option value="parent">مع الاهل</option>
                                    <option value="on foot">مشاه</option>

                                </select>
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
                                <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            </div>
        </div>

    </div>
</div>


<div id="deleteC" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                هل انت متاكد ؟
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer">
                <button type="button" id="deleteCancel" class="btn btn-primary" data-dismiss="modal">لا</button>
                <button id='yes' type="button" id="deleteConfirm" class="btn btn-danger" data-dismiss="modal">نعم</button>
            </div>
        </div>
    </div>
</div>

<script>
    deleteId=0;
    $('#yes').click(function(){

        $.post('student/delete',"id="+deleteId+"&_token="+$('input[name=_token]').val(),function (response) {

        })
//        history.go(0);
//        window.location.reload();

    })
    $('.delete').click(function(){

        deleteId=$(this).closest('div').find('input').first().attr('value');
    });
</script>

@endsection
