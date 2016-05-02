
@extends('teacher')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>اسم المعلم.</p>
    </div>

        <div class="container-fluid" style="margin-bottom: 150px">
            <div class="row ">
                <form  class="form-inline" method="post">
                    <div class="fp">
                        <h3 class="ft"> بيانات الموظف الشخصية</h3>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">جوال</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="mobile"  value="" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic">الهاتف</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="phone" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic"> الجنسية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="nationality"disabled  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> مكان الولادة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">الديانة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="religon"  disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> رقم الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="ni" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> نوع الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="idType" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="dateOfBirth"  disabled>
                            </div>
                        </div>
                        <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                        <div class="form-group">
                            <label for="InputEmail"> اسم الزوج/ة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="married" disabled >
                            </div>
                        </div>

                        <div class="form-group mc" >
                            <label for="InputEmail" > عدد الاطفال</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" disabled >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail">متزوج</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" disabled >


                            </div>
                        </div>
                        <div class="form-group mc">
                            <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="numberOfChildren" disabled >

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="InputEmail" > عدد الاطفال في نفس المدرسة </label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="childrenInSchool" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" > عدد الاطفال في المدارس اخرى</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="childrenOtherSchools" disabled >
                            </div>
                        </div>

                    </div>
                    <div >


                    </div>

                </form>

            </div>
        </div>




@endsection



