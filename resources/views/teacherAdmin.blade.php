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
                  <form  action="admin/teacher/create" class="form-horizontal" id="form_data">
                <div class="form-group">
                    <div class="col-md-8"><input id="stn" type="text"  class="form-control"></div>
                    <label for="stn" class="control-label col-md-2">اسم المعلم</label>

                </div>
               <div class="form-group">
                    <div class="col-md-3">
                        <select id="sts" class="form-control">
                            <option value="">اختر الصف..</option>
                            @foreach($classes as $class)
                            <option value="{{$class->classname}}">{{$class->classname}}</option>
                            @endforeach
                        </select>
                    </div> 
                                        <label for="sts" class="control-label col-md-2">الصف</label>

                   <div class="form-group">
                       <div class="col-md-3">
                           <select id="sts" class="form-control">
                               <option value="">اختر الصف..</option>
                               @foreach($classes as $class)
                                   <option value="{{$class->section}}">{{$class->section}}</option>
                               @endforeach
                           </select>
                       </div>
                       </div>

                       <label for="stf" class="control-label col-md-2">اسم الشعبة</label>

                </div>
                <div class="form-group"><div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block" onclick="submit">اضافة</button></div></div>
            </form>
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
          <div class="col-sm-4 col-md-3 ">
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

          
          

