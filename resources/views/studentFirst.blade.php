
@extends('student')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>{{$user->person->name->fullName()}}</p>
    </div>



    <div class="container-fluid">
        <div class="row ">
            <form  class="form-inline" method="post">
                <div class="fp">
                    <h3 class="ft"> بيانات الطالب الشخصية</h3>
                    <div class="form-group">
                        <label for="InputName" class="ic">الاسم الاول</label>
                        <div class="input-group">
                            <input type="text" class="form-control ci" name="firstName" id="firstName" value="{{$user->person->name->first}}" disabled  >
                        </div>
                    </div>
                     <div class="form-group">
                         <label for="InputEmail" class="ic">اسم الاب</label>
                         <div class="input-group">
                             <input type="text" class="form-control" id="InputEmailFirst" name="secondName" value="{{$user->person->name->second}}" disabled  >
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="InputEmail" class="ic">اسم الجد</label>
                         <div class="input-group">
                             <input type="text" class="form-control" id="InputEmailSecond" name="thirdName" value="{{$user->person->name->third}}" disabled >
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="InputEmail" class="ic">اسم العائلة</label>
                         <div class="input-group">
                             <input type="text" class="form-control" id="InputEmailSecond" name="lastName" value="{{$user->person->name->last}}" disabled  >
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="InputEmail" class="ic">الهاتف</label>
                         <div class="input-group">
                             <input type="text" class="form-control" id="InputEmailSecond" name="phone" disabled value="{{$user->person->phone}}"  >
                         </div>
                     </div>



                   <div class="form-group">
                        <label for="InputEmail" class="ic"> الجنسية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  disabled value="{{$user->person->nationality}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> مكان الولادة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" disabled value="{{$user->person->placeOfBirth}}"   >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic">الديانة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="religon" disabled value="{{$user->person->religon}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> رقم الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="ni"  disabled value="{{$user->person->ni}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> نوع الهوية</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="idType"  disabled value="{{$user->person->idType}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  disabled value="{{$user->person->distanceFromSchool}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوة</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberBrothers"  disabled value="{{$user->person->student->numberBrothers}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic">عدد الاخوات</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="InputEmailSecond" name="numberSisters" disabled value="{{$user->person->student->numberSisters}}"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic"> كم جزء تحفظ من كتاب الله</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="numberPartMemorize"  disabled value="{{$user->person->student->numberPartMemorize}}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> الأمراض</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="diseases" disabled value="{{$user->person->student->diseases}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic"> العمليات الجراحية </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputEmailSecond" name="surgeries" disabled value="{{$user->person->student->surgeries}}"  >
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth" disabled value="{{$user->person->dateOfBirth}}"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات صباحا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="transMorning" disabled value="{{$user->person->student->transMorning}}"  >

                    </div>
                    <div class="form-group">
                        <label for="InputEmail" class="ic" > المواصلات ظهرا</label>
                        <input type="text" class="form-control" id="InputEmailSecond" name="transAfternoon" disabled value="{{$user->person->student->transAfternoon}}"  >

                    </div>
                </div>



            </form>

        </div>
    </div>


@endsection
