
@extends('student')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>{{Auth::user()->person->name->fullName()}}</p>
    </div>

{{--
    <div class="container-fluid">
        <div class="row ">
            <form  class="form-inline" method="post">
                <div class="fp">
                    <h3 class="ft"> بيانات الطالب الشخصية</h3>
                    <div class="form-group">
                        <label for="InputName" class="ic">الاسم الاول</label>
                        <div class="input-group">
                            <input type="text" class="form-control ci" name="firstName" id="firstName" value="{{Auth::user()->person->name->first}}" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم الاب</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailFirst" name="secondName" value="{{Auth::user()->person->name->second}}" disabled value=""  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم الجد</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="thirdName" value="{{Auth::user()->person->name->third}}" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم العائلة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="lastName" value="{{Auth::user()->person->name->last}}" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">جوال</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="mobile" disabled value="{{Auth::user()->person->mobile}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">الهاتف</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="phone" disabled value="{{Auth::user()->person->employee->phone}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> الجنسية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  disabled value="{{Auth::user()->person->nationality}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> مكان الولادة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" disabled value="{{Auth::user()->person->placeOfBirth}}"   >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic">الديانة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="religon" disabled value="{{Auth::user()->person->religon}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> رقم الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="ni"  disabled value="{{Auth::user()->person->ni}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> نوع الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="idType"  disabled value="{{Auth::user()->person->idType}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  disabled value="{{Auth::user()->person->distanceFromSchool}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوة</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  disabled value="{{Auth::user()->person->student->numberBrothers}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوات</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters" disabled value="{{Auth::user()->person->student->numberSisters}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  disabled value="{{Auth::user()->person->student->numberPartMemorize}}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> الأمراض</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="diseases" disabled value="{{Auth::user()->person->student->diseases}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="surgeries" disabled value="{{Auth::user()->person->student->surgeries}}"  >
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value="{{Auth::user()->person->dateOfBirth}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value="{{Auth::user()->person->student->transMorning}}"  >

                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value="{{Auth::user()->person->student->transAfternoon}}"  >

                    </div>
                </div>


            </form>

        </div>
    </div>
--}}


@endsection
