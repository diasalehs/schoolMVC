@extends('admin')

@section('content')
 <div class="page-header">
              <h1>المعلمين <small></small></h1>
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
              <div class="row formm">
                  <form role="form" class="form-inline">
                      <div class="form-group">
                          <label for="InputName">الاسم الاول</label>
                          <div class="input-group">
                              <input type="text" class="form-control" name="InputName" id="InputName"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم الاب</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم الجد</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">اسم العائلة</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail">جوال</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"> اجزاء القرآن المحفوظة</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="InputEmail">امراض</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputEmail"> عمليات جراحية</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
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
                  <div action="" class="form-horizontal" id="form_data">
                <div class="form-group">
                    <div class="col-md-8"><input id="stn" type="text"  class="form-control"></div>
                    <label for="stn" class="control-label col-md-2">اسم المعلم</label>

                </div>  
               <div class="form-group">
                    <div class="col-md-3">
                        <select id="sts" class="form-control">
                            <option value="">اختر الصف..</option>
                            <option value="computer">اول</option>
                            <option value="biology">ثاني</option>
                            <option value="handwriting">ثالث</option>
                            <option value="art">رابع</option>
                            <option value="handwork">خامس</option>
                            <option value="study">سادس</option>                    
                        </select>
                    </div> 
                                        <label for="sts" class="control-label col-md-2">الصف</label>

                    <div class="col-md-3"><input id="stf" type="number" class="form-control"></div>
                                         <label for="stf" class="control-label col-md-2">اسم الشعبة</label>

                </div>
                <div class="form-group"><div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block" onclick="ajax_request('add_new_record');">بحث</button></div></div>
            </div>
      </div>
    </div>
  </div>


         <div class="row glyphicon-align-right">
         @foreach($teacheres as $t=>$teacher)
          <div class="col-sm-4 col-md-3 pan">
            <div class="thumbnail">
              <img src="{{URL::asset('career-shift-how-to-become-a-substitute-teacher.jpg')}}" alt="...">
              <div class="caption">
                <h3>{{$teacher->employee->person->name->first}}</h3>
                <p>{{$teacher->id}}</p>
                <p><a href="#" class="btn btn-primary" role="button">عرض</a> <a href="#" class="btn btn-default" role="button">تعديل</a></p>
              </div>
            </div>
            @endforeach
          </div>
@endsection

          
          

