@extends('admin')

@section('content')
<div class="page-header">
              <h1>المواد <small></small></h1>
</div>

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1" class="">  <span class="glyphicon glyphicon-plus"></span> اضافة مادة </a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse colla">
            <div class="container-fluid">

                <div class="row ">
                    <form action="{{route('subjectCreate')}}"role="form" class="form-inline" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">

                        <div class="form-group">
                            <label for="InputEmail">اسم المادة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="subjectName"  >
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-8 col-md-offset-2 bm" >
                                <button class="btn btn-success btn-block" type="submit"  >اضافة</button></div>
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
                <a data-toggle="collapse" href="#collapse11" class=""> <span class="glyphicon glyphicon-edit"></span> تعديل / حذف المادة  </a>
            </h4>
        </div>
        <div id="collapse11" class="panel-collapse collapse colla">
            <div class="container-fluid">

                <div class="row ">
                    <form action="" role="form" class="form-inline" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <div class="form-group">
                            <label for="InputEmail" class="ic">المادة</label>
                            <select id="sts" class="form-control " name="subjectId" >
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">الاسم الجديد</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="newSubjectName"  >
                            </div>
                        </div>

                        <p class="butn">
                            <a id="subject/edit" class="btn btn-primary post" role="button">تعديل</a>
                            <a  data-target="#deleteC"  id="subject/delete" class="btn btn-danger post" data-toggle="modal" role="button">حذف</a>
                        </p>


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
                <a data-toggle="collapse" href="#collapse111" class="">  <span class="glyphicon glyphicon-calendar"></span> ربط المواد مع الصفوف  </a>
            </h4>
        </div>
        <div id="collapse111" class="panel-collapse collapse colla">
            <div class="container-fluid">
                <div class="row ">
                    <form action="{{url('admin/class/create')}}"role="form" class="form-inline" method="post">

                        <div class="form-group">
                            <label for="InputEmail" class="ic">الصف</label>
                            <select id="sts" class="form-control " >
                                @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                        </div>
                            <br>
                        <div class="row">
                            <div class="col-md-4">
                        <fieldset class="form-group" >
                            <label for="exampleSelect2">المواد</label>
                            <select class="select-cities" name="city" multiple="multiple" style="width: 200px;height: 200px; margin-left: 60px">
                                @foreach($subjects as $subject)

                                <option>{{$subject->name}}</option>

                                @endforeach

                            </select>
                        </fieldset>
                            </div>
                            <div class="col-md-4">

                        <fieldset class="form-group" >
                            <label for="SelectedSubjects" >المواد المختارة</label>
                        <select  class="chosen-cities" name="chosen-cities-name" multiple="multiple"style="width: 200px;height: 200px" >

                        </select>
                        </fieldset>
                        </div>
                        </div>
                        <div class="">
                            <div class="col-md-8 col-md-offset-2 bm" >
                                <button class="btn btn-success btn-block" type="submit" >حفظ</button></div>
                        </div>

                    </form>


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
                    <button type="button" id="deleteConfirm" class="btn btn-danger" data-dismiss="modal">نعم</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        form=null;

        deleteConfirm=false;
        $('#deleteConfirm').click(function () {
            form.submit();
        });
        $('.post').click(function () {
            alert("hi");
            var action = $(this).attr('id');
            form = $(this).closest('form')
            form.attr('action', action);
            if($(this).attr('id')=="subject/edit")
                    form.submit();
        });

    });

</script>
@endsection
