@extends('admin')

@section('content')
    <div class="page-header">
        <h1>الصفوف <small></small></h1>
    </div>

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1" class=""><span class="glyphicon glyphicon-plus"></span> اضافة صف </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse colla">
                <div class="container-fluid">
                    @if (count($errors)>0)
                        @foreach($errors -> all() as $error)

                            <div class="alert alert-danger" role="alert">
                                <a href="#" class="alert-link"> {{ $error }}</a>
                            </div>

                        @endforeach
                    @endif
                    <div class="row ">
                        <form action="{{route('levelCreate')}}"role="form" class="form-inline" method="post">

                            <div class="form-group">
                                <label for="InputEmail">اسم الصف</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="levelName"  >
                                </div>
                            </div>


                            <div class="">
                                <div class="col-md-8 col-md-offset-2 bm" >
                                    <button class="btn btn-success btn-block" type="submit" >اضافة</button></div>
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
                    <a data-toggle="collapse" href="#collapse11" class="">  <span class="glyphicon glyphicon-edit"></span >  تعديل / حذف الصف    </a>
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
                        <form action="/"role="form" class="form-inline" method="post">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="form-group">
                                <label for="InputEmail" class="ic">الصف</label>
                                <select id="sts" name="levelId" class="form-control " >
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">الاسم الجديد</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="newName"  >
                                </div>
                            </div>


                            <p class="butn">
                                <a id="level/edit" class="btn btn-primary post" role="button">تعديل</a>
                                <a  data-target="#deleteC"  id="level/delete" class="btn btn-danger post" data-toggle="modal" role="button">حذف</a>
                        </form>

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
        </div>

        <script>
            $(document).ready(function(){
                form=null;

                deleteConfirm=false;
                $('#deleteConfirm').click(function () {
                    form.submit();
                });
                $('.post').click(function () {
                    var action = $(this).attr('id');
                    form = $(this).closest('form')
                    form.attr('action', action);
                    if($(this).attr('id')=="level/edit")
                        form.submit();
                });

            });

        </script>
    </div>
@endsection
