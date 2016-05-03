
@extends('teacher')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>{{Auth::user()->person->name->fullName()}}</p>
    </div>

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1" class="">  <span class="glyphicon glyphicon-pencil"></span> تغيير كلمة السر </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse colla">
                <div class="container-fluid">

                    <div class="row ">


                        <form action="{{route('teacherChangePassword')}}" role="form" class="form-inline" method="post">
                            <div class="form-group">
                                <label for="InputEmail">كلمة السر القديمة</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="oldPass"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">كلمة السر الجديدة</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="newPass"  >
                                </div>
                            </div>
                            <div class="">
                                <div class="col-md-8 col-md-offset-2 bm" >
                                    <button class="btn btn-success btn-block" type="submit" >حفظ</button></div>
                                <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            </div>
            </div>
        <div class="container-fluid" style="margin-bottom: 150px">
            <div class="row ">
                <form  class="form-inline" method="post">
                    <div class="fp">
                        <h3 class="ft"> البيانات الشخصية</h3>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">جوال</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="mobile"  value="{{Auth::user()->person->phone}}" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic">الهاتف</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="phone" value="{{Auth::user()->person->employee->mobile}}" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic"> الجنسية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="nationality" value="{{Auth::user()->person->nationality}}" disabled  >
                            </div>
                        </div>
                        <span>{{Auth::user()->person->nationality}}</span>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> مكان الولادة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" value="{{Auth::user()->person->placeOfBirth}}" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">الديانة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="religon" value="{{Auth::user()->person->religon}}"  disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> رقم الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="ni" value="{{Auth::user()->person->ni}}" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> نوع الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="idType" value="{{Auth::user()->person->idType}}" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool" value="{{Auth::user()->person->distanceFromSchool}}" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" value="{{Auth::user()->person->dateOfBirth}}"  disabled>
                            </div>
                        </div>
                        <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                        <div class="form-group">
                            <label for="InputEmail"> اسم الزوج/ة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="married" value="{{Auth::user()->person->employee->married}}" disabled >
                            </div>
                        </div>

                        <div class="form-group mc" >
                            <label for="InputEmail" > عدد الاطفال</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" value="{{Auth::user()->person->employee->numberOfChildren}}" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail">متزوج</label>
                            <div class="input-group">
                                @if(Auth::user()->person->employee->married != null)
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" value="نعم" disabled >
                                    @endif
                                    @if(Auth::user()->person->employee->married == null)
                                        <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" value="لا" disabled >
                                    @endif
                            </div>
                        </div>
                        <div class="form-group mc">
                            <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" value="{{Auth::user()->person->employee->religon}}" disabled >

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="InputEmail" > عدد الاطفال في نفس المدرسة </label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="childrenInSchool" value="{{Auth::user()->person->employee->childrenInSchool}}" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" > عدد الاطفال في المدارس اخرى</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="childrenOtherSchools" value="{{Auth::user()->person->employee->childrenOtherSchools}}" disabled >
                            </div>
                        </div>
                        <div >
                            <h3 class="ft">البيانات الوظيفية</h3>
                            <div class="form-group">
                                <label for="InputEmail">المسمى الوظيفي</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="childrenOtherSchools" value="{{Auth::user()->person->employee->job_type}}" disabled >

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">التصنيف الوظيفي</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputEmailSecond" name="childrenOtherSchools" value="{{Auth::user()->person->employee->job_con}}" disabled >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail"> سنوات الخبرةالداخلية</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="experince_local" value="{{Auth::user()->person->employee->experince_abroad}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail"> سنوات الخبرة الخارجية</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" id="InputEmailSecond" name="experince_abroad" value="{{Auth::user()->person->employee->experince_local}}" disabled >
                                </div>
                            </div>


                        </div>

                    </div>
                    <div >


                    </div>

                </form>

            </div>
        </div>




@endsection



