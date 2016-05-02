
@extends('teacher')

@section('content')

    <div class="jumbotron" id="adminJumbo">
        <h1>مرحبا بك!</h1>
        <p>اسم المعلم.</p>
    </div>

        <div class="container-fluid">
            <div class="row ">
                <form  class="form-inline" method="post">
                    <div class="fp">
                        <h3 class="ft"> بيانات الموظف الشخصية</h3>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">جوال</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="mobile"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic">الهاتف</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="phone"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic"> الجنسية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="nationality"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> مكان الولادة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="placeOfBirth"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail" class="ic">الديانة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="religon"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> رقم الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="ni"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> نوع الهوية</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="idType"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> البعد عن مكان الاقامة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailSecond" name="distanceFromSchool"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail" class="ic"> تاريخ الولادة</label>
                            <div class="input-group" >
                                <input type="date" class="form-control" id="InputEmailSecond" name="dateOfBirth"  >
                            </div>
                        </div>
                        <h3 class="ft">الوضع الاجتماعي والعائلي</h3>
                        <div class="form-group">
                            <label for="InputEmail"> اسم الزوج/ة</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" id="InputEmailSecond" name="married"  >
                            </div>
                        </div>

                        <div class="form-group mc" >
                            <label for="InputEmail" > عدد الاطفال</label>
                            <div class="input-group" style="width: 80px">
                                <input type="number" class="form-control" id="InputEmailSecond" name="numberOfChildren"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputEmail">متزوج</label>
                            <div class="input-group">
                                <select id="sts" class="form-control" >
                                    <option value="teacher">لا</option>
                                    <option value="supervisor">نعم</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mc">
                            <label for="InputEmail">هل الزوج او الزوجة يعمل</label>
                            <div class="input-group">
                                <select id="sts" class="form-control" name="DoesPartnerWork">
                                    <option value="teacher">لا</option>
                                    <option value="supervisor">نعم</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="InputEmail" style="width: 250px"> عدد الاطفال في نفس المدرسة </label>
                            <div class="input-group" style="width: 80px">
                                <input type="number" class="form-control" id="InputEmailSecond" name="childrenInSchool"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail"  style="width: 250px"> عدد الاطفال في المدارس اخرى</label>
                            <div class="input-group" style="width: 80px">
                                <input type="number" class="form-control" id="InputEmailSecond" name="childrenOtherSchools"  >
                            </div>
                        </div>

                    </div>
                    <div >


                    </div>

                </form>

            </div>
        </div>




@endsection



