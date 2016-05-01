
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
    <meta name="_token" content="{!! csrf_token() !!}"/>


    <title>مدير الموقع</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>

        if ( $(window).width() > 739) {
            //Add your javascript for large screens here
            tinymce.init({
                selector: '#myTextarea',
                theme: 'modern',
                width: 800,
                height: 300,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],
            });
        }
        else {
            //Add your javascript for small screens here
            tinymce.init({
                selector: '#myTextarea',
                theme: 'modern',
                width: 350,
                height: 300,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],
            });
        }

    </script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Bootstrap core CSS -->


    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tcss.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url::asset('rtl/dist/css/bootstrap-rtl.css')}}">
</head>

<body dir="rtl" >
<div class="page-container">

    <nav class="navbar navbar-default" style="z-index: 4; position: fixed; top: 0; width: 100%">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin')}}">مدير الموقع</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">تسجيل الخروج</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="margin-left: 100px;">اقسام الموقع <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('admin/teacher')}}">الموظفين</a></li>
                            <li><a href="{{URL('admin/student')}}">الطلاب</a></li>
                            <li><a href="{{URL('admin/class')}}">الشعب</a></li>
                            <li><a href="{{url('admin/subject')}}">المواد</a></li>
                            <li><a href="{{url('admin/messages')}}">الرسائل</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
                <ul class="nav ">
                    <li class="" id="te"><a href="{{url('admin/teacher')}}" >الموظفين</a></li>
                    <li id="st"><a href="{{URL('admin/student')}}" >الطلاب</a></li>
                    <li id="cl"><a href="{{URL('admin/class')}}" onclick="">الشعب
                    </a></li>
                    <li id="su"><a href="{{url('admin/subject')}}" onclick="">المواد</a></li>
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
