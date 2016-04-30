
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

    <form class="form-signin">
        <h2 class="form-signin-heading">تسجيل الدخول</h2>
        <label for="inputEmail" class="sr-only">رقم المستخدم</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="رقم المستخدم" required autofocus>
        <label for="inputPassword" class="sr-only">كلمة السر</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="كلمة السر" required>

        <button class="btn btn-lg btn-success btn-block" type="submit">دخول</button>
    </form>

</div> <!-- /container -->


</body>
</html>
