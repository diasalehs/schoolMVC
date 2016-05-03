
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


<div class="navbar-collapse collapse inverse" id="navbar-header">
    <div class="container-fluid">
        <div class="about">
            <h4> موقعنا</h4>
            <p >	بالقرب من المستشفى العربي التخصصي
                رفيديا , نابلس</p>
        </div>
        <div class="social">
            <h4>اتصل بنا</h4>
            <ul class="list-unstyled">
                <li>الهاتف:٠٩-٢٣٣٠٣١٢</li>
                <li><a href="#">Like on Facebook</a></li>
                <li><a href="#">Email me</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="navbar navbar-static-top navbar-light bg-faded">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header">
            &#9776;
        </button>
        <a href="#" class="navbar-brand" >المدرسة الإسلامية الاساسية</a>
        <div class="form-inline pull-xs-left">
            <a class="btn btn-success-outline"  href="{{route('loginPage')}}">تسجيل الدخول</a>
        </div>
    </div>
</div>

<section class="jumbotron text-xs-center">
    <div class="container">
        <h1 class="jumbotron-heading">المدرسة الإسلامية - نابلس</h1>
        <p class="lead text-muted">ترحب المدرسة الإسلامية الأساسية للذكور بطلابها الأعزاء
            وتتمنى لهم التقدم والنجاح.</p>
        <div>
            <a href="#" class="btn btn-info">Main call to action</a>
            <a href="#" class="btn btn-secondary">Secondary action</a>
        </div>
    </div>
</section>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 100%; height: 300px;">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="card">
                <img src="img/" alt="Guitar">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img data-src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <img data-src="..." alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="album text-muted">
    <div class="container">

        <div class="row">
            <div class="card">
                <img src="img/guitar.jpg" alt="Guitar">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card">
                <img src="img/lady-guitar.jpg" alt="A woman playing a guitar">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card">
                <img src="img/mic.jpg" alt="Microphone">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>

    </div>
</div>

<footer class="text-muted">
    <div class="container">
        <p class="pull-xs-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    </div>
</footer>

<script src="{{URL::asset('js/jquery-1.12.2.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
</html>
