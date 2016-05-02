
@extends('student')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>{{Auth::user()->person->name->fullName()}}</p>
    </div>

    <div class="container-fluid">
        @if (count($errors)>0)
            @foreach($errors -> all() as $error)

                <div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link"> {{ $error }}}</a>
                </div>

            @endforeach
        @endif
        <div class="row ">
            <form action="{{route('studentCreate')}}"role="form" class="form-inline" method="post">
                <div class="fp">
                    <h3 class="ft"> بيانات الطالب الشخصية</h3>
                    <div class="form-group">
                        <label for="InputName" class="ic">الاسم الاول</label>
                        <div class="input-group">
                            <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
                            <input type="text" class="form-control ci" name="firstName" id="firstName" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم الاب</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailFirst" name="secondName" disabled value=""  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم الجد</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="thirdName"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">اسم العائلة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="lastName"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">جوال</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="mobile" disabled value=""  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">الهاتف</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="phone" disabled value=""  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> الجنسية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> مكان الولادة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" disabled value=""   >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic">الديانة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="religon" disabled value=""  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> رقم الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="ni"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> نوع الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="idType"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوة</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوات</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters" disabled value=""  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  disabled value="" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> الأمراض</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="diseases" disabled value=""  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="surgeries" disabled value=""  >
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >

                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value=""  >

                    </div>




                    <h3 class="ft ta">بيانات ولي الامر</h3>
                    <div class="form-group">
                        <label for="InputEmail">الاسم الرباعي</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">صلة القرابة</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">حالة الاب</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">المؤهل العلمي</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">الوظيفة</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  disabled value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">مكان العمل</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  disabled value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">الهاتف</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail" disabled value="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">الجوال</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"disabled value=""  >
                        </div>
                    </div>



                </div>

            </form>

        </div>
    </div>


@endsection
