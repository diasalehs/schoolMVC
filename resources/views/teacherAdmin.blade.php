@extends('admin')

@section('content')
 <div class="page-header">
              <h1>الموظفين <small></small></h1>
        </div>    
          <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" class="">   <span class="glyphicon glyphicon-plus"></span> اضافة معلم </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">

          <div class="container-fluid">
              <div class="row ">
                  <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                        <div class="fp">
                            <h3 class="ft"> بيانات الموظف الشخصية</h3>
                      <div class="form-group">
                          <label for="InputName" class="ic">الاسم الاول</label>
                          <div class="input-group">
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
                                <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                                <div class="input-group" >
                                    <input type="date" class="form-control" id="InputEmailSecond" name="dateOfBirth"  >
                                </div>
                            </div>
                            <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                            <div class="form-group">
                                <label for="InputEmail"> اسم الزوج/ة</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="married"  >
                                </div>
                            </div>

                      <div class="form-group mc" >
                          <label for="InputEmail" > عدد الاطفال</label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="numberOfChildren"  >
                          </div>
                      </div>

                            <div class="form-group">
                                <label for="InputEmail">متزوج</label>
                                <div class="input-group">
                                    <select id="sts" class="form-control" >
                                        <option value="teacher">لا</option>
                                        <option value="supervisor">نعم</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mc">
                                <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                                <div class="input-group">
                                    <select id="sts" class="form-control" name="DoesPartnerWork">
                                        <option value="teacher">لا</option>
                                        <option value="supervisor">نعم</option>

                                    </select>
                                </div>
                            </div>


                      <div class="form-group">
                          <label for="InputEmail" style="width: 250px"> عدد الاطفال في نفس المدرسة </label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="childrenInSchool"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"  style="width: 250px"> عدد الاطفال في المدارس اخرى</label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="childrenOtherSchools"  >
                          </div>
                      </div>

                        </div>
                      <div >
                          <h3 class="ft">البيانات الوظيفية</h3>
                          <div class="form-group">
                              <label for="InputEmail">المسمى الوظيفي</label>
                              <div class="input-group">
                                  <select id="sts" class="form-control" name="job_type">
                                      <option value="teacher">معلم</option>
                                      <option value="supervisor">مشرف</option>

                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">التصنيف الوظيفي</label>
                              <div class="input-group">
                                  <select id="sts" class="form-control" name="job_con">
                                      <option value="">اختر العقد..</option>
                                      <option value="contract">عقد</option>
                                      <option value="biology">كادر</option>
                                      <option value="handwriting">بديل</option>

                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail"> سنوات الخبرةالداخلية</label>
                              <div class="input-group" style="width: 100px">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="experince_local"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail"> سنوات الخبرة الخارجية</label>
                              <div class="input-group" style="width: 100px">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="experince_abroad"  >
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="InputEmail">صورة شخصية</label>
                              <div class="input-group" style="width: 100px">
                                  <input type="hidden" role="uploadcare-uploader" name="my_file" style="display: inline-block"/>
                              </div>
                          </div>

                      </div>
                      <div class="">
                          <div class="col-md-8 col-md-offset-2 bm" >
                              <button class="btn btn-success btn-block" type="submit" >تسجيل</button></div>
                          <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
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
                  <form action="{{url('admin/teacher/search')}}"role="form" class="form-inline" method="post">
                      <div class="form-group">
                          <label for="InputName">الاسم الاول</label>
                          <div class="input-group">
                              <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                              <input type="text" class="form-control" name="name" id="InputName"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم الاب</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم الجد</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم العائلة</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">جوال</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"> اجزاء القرآن المحفوظة</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="InputEmail">امراض</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"> عمليات جراحية</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>

                      <div class="">
                          <div class="col-md-8 col-md-offset-2 bm" >
                              <button class="btn btn-success btn-block" type="submit" >بحث</button></div>
                      </div>
                  </form>

                  @if (count($errors)>0)
                      @foreach($errors -> all() as $error)
                          <div class="alert alert-danger" role="alert">
                              <a href="#" class="alert-link"> {{ $error }}}</a>
                          </div>
                      @endforeach
                  @endif
              </div>
          </div>
      </div>
    </div>
  </div>


         <div class="row glyphicon-align-right">
{{--             @if(isset($teacheres))--}}
         @foreach($employees as $t=>$employee)
          <div class="  col-xm-6 col-md-3">
            <div class="panel panel-default " style="padding: 5px; text-align: center">
              <img class="timg" style="width: 90%" src="{{URL::asset('career-shift-how-to-become-a-substitute-teacher.jpg')}}" alt="...">
              <div class="caption">
                <h3>{{$employee->person->name->first}}</h3>
                <p>{{$employee->person->religon}}</p>
                <p>
                    <a id="/teacher/edit" class="btn btn-primary post" role="button">عرض</a>

                    <a id="/teacher/show" type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteC" role="button">حذف</a>


                    <a id="/teacher/show" type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" role="button"> تعديل</a>


                  <input type="hidden" name="id" value="{{$employee->id}}" id="employeeid">
                  <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                  </p>
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
                                     <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                                         <div class="fp">
                                             <h3 class="ft"> بيانات الموظف الشخصية</h3>
                                             <div class="form-group">
                                                 <label for="InputName" class="ic">الاسم الاول</label>
                                                 <div class="input-group">
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
                                                 <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                                                 <div class="input-group" >
                                                     <input type="date" class="form-control" id="InputEmailSecond" name="dateOfBirth"  >
                                                 </div>
                                             </div>
                                             <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                                             <div class="form-group">
                                                 <label for="InputEmail"> اسم الزوج/ة</label>
                                                 <div class="input-group" >
                                                     <input type="text" class="form-control" id="InputEmailSecond" name="married"  >
                                                 </div>
                                             </div>

                                             <div class="form-group mc" >
                                                 <label for="InputEmail" > عدد الاطفال</label>
                                                 <div class="input-group" style="width: 80px">
                                                     <input type="number" class="form-control" id="InputEmailSecond" name="numberOfChildren"  >
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="InputEmail">متزوج</label>
                                                 <div class="input-group">
                                                     <select id="sts" class="form-control" >
                                                         <option value="teacher">لا</option>
                                                         <option value="supervisor">نعم</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="form-group mc">
                                                 <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                                                 <div class="input-group">
                                                     <select id="sts" class="form-control" name="DoesPartnerWork">
                                                         <option value="teacher">لا</option>
                                                         <option value="supervisor">نعم</option>

                                                     </select>
                                                 </div>
                                             </div>


                                             <div class="form-group">
                                                 <label for="InputEmail" style="width: 250px"> عدد الاطفال في نفس المدرسة </label>
                                                 <div class="input-group" style="width: 80px">
                                                     <input type="number" class="form-control" id="InputEmailSecond" name="childrenInSchool"  >
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="InputEmail"  style="width: 250px"> عدد الاطفال في المدارس اخرى</label>
                                                 <div class="input-group" style="width: 80px">
                                                     <input type="number" class="form-control" id="InputEmailSecond" name="childrenOtherSchools"  >
                                                 </div>
                                             </div>

                                         </div>
                                         <div >
                                             <h3 class="ft">البيانات الوظيفية</h3>
                                             <div class="form-group">
                                                 <label for="InputEmail">المسمى الوظيفي</label>
                                                 <div class="input-group">
                                                     <select id="sts" class="form-control" name="job_type">
                                                         <option value="teacher">معلم</option>
                                                         <option value="supervisor">مشرف</option>

                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="InputEmail">التصنيف الوظيفي</label>
                                                 <div class="input-group">
                                                     <select id="sts" class="form-control" name="job_con">
                                                         <option value="">اختر العقد..</option>
                                                         <option value="contract">عقد</option>
                                                         <option value="biology">كادر</option>
                                                         <option value="handwriting">بديل</option>

                                                     </select>
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="InputEmail"> سنوات الخبرةالداخلية</label>
                                                 <div class="input-group" style="width: 100px">
                                                     <input type="number" class="form-control" id="InputEmailSecond" name="experince_local"  >
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="InputEmail"> سنوات الخبرة الخارجية</label>
                                                 <div class="input-group" style="width: 100px">
                                                     <input type="number" class="form-control" id="InputEmailSecond" name="experince_abroad"  >
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="InputEmail">صورة شخصية</label>
                                                 <div class="input-group" style="width: 100px">
                                                     <input type="hidden" role="uploadcare-uploader" name="my_file" style="display: inline-block"/>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="">
                                             <div class="col-md-8 col-md-offset-2 bm" >
                                                 <button class="btn btn-success btn-block" type="submit" >تسجيل</button></div>
                                             <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
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
                                 <button type="button" class="btn btn-primary" data-dismiss="modal">لا</button>
                                 <button type="button" class="btn btn-danger" data-dismiss="modal">نعم</button>
                             </div>
                         </div>
                     </div>
                 </div>


             @endforeach
                 {{--@endif--}}
          </div>
    <script>
        $(document).ready(function(){

       $('.post').click(function () {
           var action = $(this).attr('id');
           var form = $(this).closest('form')
//           console.log(action);
           form.attr('action', action);
           form.submit();
       });
       });
    </script>
@endsection

          
          

