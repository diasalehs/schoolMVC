@extends('admin')

@section('content')
<div class="page-header">
              <h1>الطلاب <small></small></h1>
        </div>    
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" class="">اضافة طالب  <span class="glyphicon glyphicon-plus"></span></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
                  <div action="" class="form-horizontal" id="form_data">
                <div class="form-group">
                    <div class="col-md-8"><input id="stn" type="text"  class="form-control"></div>
                    <label for="stn" class="control-label col-md-2">اسم الطالب</label>

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
                <div class="form-group"><div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block" onclick="ajax_request('add_new_record');">اضافة</button></div></div>
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
                    <label for="stn" class="control-label col-md-2">اسم الطالب</label>

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
       
       
        <table class="table table-striped">
                <thead>
                    <tr class="success">
                        <th  width="10%">رقم الطالب</th>
                        <th width="40%">اسم الطالب</th>
                        <th width="20%">الصف</th>
                        <th width="10%">الشعبة</th>
                        <th width="20%">العمليات</th>
                    </tr>
                </thead>
                <tbody id="test">
                     <tr>
                        <td width="10%">١</td>
                        <td width="40%">ضياء صالح سعودي</td>
                        <td width="20%">اول</td>
                        <td width="10%">أ</td>
                        <td width="20%"><div class="dropdown">
                        <button class="btn btn-primary" data-toggle="dropdown">عمليات <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);" onclick=" ?>)">تعديل</a></li>
                            <li><a href="javascript:void(0);"  ?>)">حذف</a></li>
                        </ul>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>

@endsection
