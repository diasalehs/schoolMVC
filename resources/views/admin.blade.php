
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


    <title>مدير الموقع</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tcss.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url::asset('rtl/dist/css/bootstrap-rtl.css')}}">
</head>

<body dir="rtl" >
<div class="page-container">

    <!-- top navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="" style="" id="admin"><a >مدير الموقع</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
                <ul class="nav ">
                    <li class="" id="te"><a href="{{url('admin/teacher')}}" >المعلمين</a></li>
                    <li id="st"><a href="{{URL('admin/student')}}" >الطلاب</a></li>
                    <li id="cl"><a href="{{URL('admin/class')}}" onclick="">الشعب
                    </a></li>
                    <li id="su"><a href="{{url('admin/subject')}}" onclick="">المواضيع</a></li>
                    <li id="su"><a href="{{url('admin/messages')}}" onclick="">الرسائل</a></li>
                </ul>

            </div>

            <!-- main area -->
            <div class="col-xs-12 col-sm-10" id="main">
                @yield('content')

            </div><!-- /.col-xs-12 main -->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/.page-container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{URL::asset('js/jquery-1.12.2.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>

</body>
</html>
