@extends('teacher')

@section('content')

<div class="page-header">
    <h1>طلاب <small></small></h1>
</div>
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse2" class="">    <span class="glyphicon glyphicon-search"></span>  بحث </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="container-fluid">

                <div class="row ">
                    <form action="{{url('/teacher/searchStudent')}}"role="form" class="form-inline" method="post">
                        <div class="fp">
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
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<form action="{{url('admin/teacher/create')}}"role="form" class="form-inline" method="post">

<div class="form-group"style="display: inline-block;">
    <label for="InputEmail" class="">الصف</label>
    <div class="input-group">
        <select id="level" class="form-control " >
            <option value=""></option>
        @if($levels!=null)
        @foreach($levels as $level)
            <option value="{{$level->id}}">{{$level->name}}</option>
            @endforeach
            @endif;
        </select>
    </div>
</div>
<div class="form-group">
    <label for="InputEmail" class="" style="display: inline-block; ">الشعبة</label>
    <div class="input-group">
        <select id="class" class="form-control " >
        </select>
    </div>
</div>
</form>

<table class="table table-bordered text-center">
    <thead>
    <tr class="success">
        <th  >رقم الطالب</th>
        <th >اسم الطالب</th>


    </tr>
    </thead>
    <tbody id="test">
    @if($students!=null)
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>

        <td >{{$student->person->name->fullName()}}</td>
    </tr>
    @endforeach;
        @endif;
    </tbody>
</table>
    <script>
        drop=$('#class');
        $('#level').change(function(){
            $(drop).find('option').remove();

        $.post('student/getClasses',"levelId="+$(this).children('option:selected').attr('value')+"&_token="+$('input[name=_token]').val(),function (response) {
            var classes=JSON.parse(response);
            for(var i=0;i<classes.length;i++)
            {
                $(drop).append($("<option></option>") .attr("value", classes[i].id).text(classes[i].section));
            }
        })
        })
    </script>
@endsection
