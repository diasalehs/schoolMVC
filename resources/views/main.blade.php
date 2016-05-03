
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <!-- The best place for this one is your <HEAD> tag -->
    <title>المدرسة الاسلامية</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>


    </script>
    <!-- Bootstrap core CSS -->


    <link href="{{URL::asset('css/bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url::asset('rtl/dist/css/bootstrap-rtl.css')}}">
</head>

<body dir="rtl" >
<div style="width: 100%;height: 5px; background: #73af73; position: fixed; top: 0px;opacity: .95;"></div>

    <nav class="navbar navbar-light bg-faded navbar-fixed-top" style="margin-top: 5px; ">

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
</button>
<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <a class="navbar-brand" href="#">المدرسة الإسلامية الاساسية</a>

    <ul class="nav navbar-nav pull-xs-left">
        <li class="nav-item active ">
            <a class="btn btn-success-outline"  href="{{route('loginPage')}}">تسجيل الدخول</a>
        </li>

    </ul>
</div>
</nav>


<section class="jumbotron text-xs-center">
    <div class="container">
        <h1 class="jumbotron-heading">المدرسة الإسلامية - نابلس</h1>
        <p class="lead text-muted">ترحب المدرسة الإسلامية الأساسية للذكور بطلابها الأعزاء
            وتتمنى لهم التقدم والنجاح.</p>
        <div>
            <a class="btn btn-success-outline"  href="{{route('loginPage')}}">تسجيل الدخول</a>
            <a href="#" class="btn btn-info-outline">اتصل بنا</a>
        </div>
    </div>
</section>

<footer class="text-muted " style="margin-top: 30px">
    <div class="container">
        <div class="pull-xs-right">
            <h3>موقعنا</h3>
            <p >	بالقرب من المستشفى العربي التخصصي
                رفيديا , نابلس</p>
        </div>
        <div class="pull-xs-left">
            <h3>موقعنا</h3>
        </div>
    </div>
</footer>

<script src="{{URL::asset('js/jquery-1.12.2.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
</html>
