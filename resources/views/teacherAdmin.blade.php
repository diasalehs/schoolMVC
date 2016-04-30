@extends('admin')

@section('content')
 <div class="page-header">
              <h1>الموظفين <small></small></h1>
        </div>    
          <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" class="">اضافة معلم   <span class="glyphicon glyphicon-plus"></span></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">

          <div class="container">
              @if (count($errors)>0)
                  @foreach($errors -> all() as $error)

                      <div class="alert alert-danger" role="alert">
                          <a href="#" class="alert-link"> {{ $error }}}</a>
                      </div>

                  @endforeach
              @endif
              <div class="row formm">
                  <form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">
                        <div class="fp">
                            <h3 class="ft"> بيانات الموظف الشخصية</h3>
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
                                    <input type="date" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                                </div>
                            </div>
                            <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                            <div class="form-group">
                                <label for="InputEmail"> اسم الزوج/ة</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  >
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
                            <div class="form-group">
                                <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                                <div class="input-group">
                                    <select id="sts" class="form-control">
                                        <option value="teacher">لا</option>
                                        <option value="supervisor">نعم</option>

                                    </select>
                                </div>
                            </div>

                      <div class="form-group">
                          <label for="InputEmail"> عدد الاطفال</label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="InputEmail"> عدد الاطفال في نفس المدرسة </label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"> عدد الاطفال في المدارس اخرى</label>
                          <div class="input-group" style="width: 80px">
                              <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                          </div>
                      </div>

                        </div>
                      <div >
                          <h3 class="ft">البيانات الوظيفية</h3>
                          <div class="form-group">
                              <label for="InputEmail">المسمى الوظيفي</label>
                              <div class="input-group">
                                  <select id="sts" class="form-control">
                                      <option value="teacher">معلم</option>
                                      <option value="supervisor">مشرف</option>

                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail">التصنيف الوظيفي</label>
                              <div class="input-group">
                                  <select id="sts" class="form-control">
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
                                  <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="InputEmail"> سنوات الخبرة الخارجية</label>
                              <div class="input-group" style="width: 100px">
                                  <input type="number" class="form-control" id="InputEmailSecond" name="InputEmail"  >
                              </div>
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
  </div>
       
       <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2" class=""> بحث    <span class="glyphicon glyphicon-search"></span></a>
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

              </div>
          </div>
      </div>
    </div>
  </div>


         <div class="row glyphicon-align-right">
{{--             @if(isset($teacheres))--}}
         @foreach($teacheres as $t=>$teacher)
          <div class="col-sm-4 col-md-4">
            <div class="panel panel-default " style="padding: 5px; text-align: center">
              <img class="timg" style="width: 90%" src="{{URL::asset('career-shift-how-to-become-a-substitute-teacher.jpg')}}" alt="...">
              <div class="caption">
                <h3>{{$teacher->employee->person->name->first}}</h3>
                <p>{{$teacher->employee->person->religon}}</p>
                <p><a href="#" class="btn btn-primary" role="button">عرض</a> <a href="#" class="btn btn-default" role="button">تعديل</a></p>
              </div>
            </div>
            </div>
            @endforeach
                 {{--@endif--}}
          </div>
@endsection

          
          

