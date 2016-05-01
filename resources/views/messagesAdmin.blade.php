@extends('admin')

@section('content')


<div class="page-header">
    <h1>الرسائل  <small></small></h1>
</div>

<div class="row">
    <form role="form" class="form-inline">
        <div class="form-group mi">
            <label for="InputName">المرسل اليه</label>
            <div class="input-group "  style="width: 40%">
                <input type="text" class="form-control" name="InputName" id="InputName"  required>
            </div>
        </div>

        <div class="form-group mi ">
            <label for="InputEmail" >العنوان</label>
            <div class="input-group"  style="width: 40%">
                <input type="text" class="form-control" id="InputEmailSecond" name="InputEmail"  required>
            </div>
        </div>
        <div class="form-group mi">
            <label for="InputEmail">نص الرسالة </label>
            <div class="input-group">
                <textarea style="" id="myTextarea"></textarea>
            </div>
        </div>
        <div class="form-group mi">
            <label for="InputEmail"> </label>

            <div class="input-group " >
                <button class="btn btn-success btn-block" type="submit" >ارسال</button></div>
        </div>
    </form>

</div>




@endsection
