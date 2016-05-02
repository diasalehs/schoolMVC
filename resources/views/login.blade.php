
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>تسجيل الدخول</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/signin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url::asset('rtl/dist/css/bootstrap-rtl.css')}}">

</head>

<body>

<div class="container">

    @if (Session::has('fail'))
        @foreach($errors -> all() as $error)
            <div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link"> {{ Session::get('fail') }}}</a>
            </div>
        @endforeach
    @endif
    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">تسجيل الدخول</h2>
        <label for="inputEmail" class="sr-only">رقم المستخدم</label>
            <input type="text" id="inputEmail" class="form-control" name="inputName" placeholder="رقم المستخدم"  autofocus>
        <label for="inputPassword" class="sr-only">كلمة السر</label>
            <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="كلمة السر" >
        <button class="btn btn-lg btn-success btn-block" type="submit">دخول</button>
        <input type="hidden" class="form-control" id="InputEmailSecond" name="_token" value="{{csrf_token()}}"  >
    </form>
    @if (count($errors)>0)
        @foreach($errors -> all() as $error)

            <div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link"> {{ $error }}</a>
            </div>
        @endforeach
    @endif
</div> <!-- /container -->


</body>
</html>
