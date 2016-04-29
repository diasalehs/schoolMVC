
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script>
        //  alert("Hello");

        function ajax_request( id ) {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var result = document.getElementById('main');
                    result.innerHTML = xmlhttp.responseText;
                }
            }
            if(id==0) {
                xmlhttp.open('GET', 'admin/first', true);
                $('#admin').addClass('active');
                $('#st').removeClass('active');
                $('#te').removeClass('active');
                $('#cl').removeClass('active');
                $('#su').removeClass('active');

            } else if(id==1) {
                xmlhttp.open('GET', 'admin/teacher', true);
                $('#te').addClass('active');
                $('#st').removeClass('active');
                $('#cl').removeClass('active');
                $('#admin').removeClass('active');
                $('#su').removeClass('active');

            } else if (id ==2){
                xmlhttp.open('GET', 'admin/student', true);
                $('#st').addClass('active');
                $('#te').removeClass('active');
                $('#cl').removeClass('active');
                $('#su').removeClass('active');
                $('#admin').removeClass('active');
            } else if (id ==3){
                xmlhttp.open('GET', 'admin/class', true);
                $('#cl').addClass('active');
                $('#te').removeClass('active');
                $('#st').removeClass('active');
                $('#admin').removeClass('active');
                 $('#su').removeClass('active');
            }else if (id ==4){
                xmlhttp.open('GET', 'admin/subject', true);
                $('#su').addClass('active');
                $('#te').removeClass('active');
                $('#st').removeClass('active');
                $('#admin').removeClass('active');
                $('#cl').removeClass('active');
            }
            xmlhttp.send();


        }
    </script>
    <title>معلمين</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tcss.css')}}" rel="stylesheet">
</head>

<body onload="ajax_request(0)">
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
                <li class="" id="admin"><a f="javascript:void(0);" onclick="ajax_request(0)">مدير الموقع</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
                <ul class="nav ">
                    <li class="" id="te"><a href="javascript:void(0);" onclick="ajax_request(1)">المعلمين</a></li>
                    <li id="st"><a href="javascript:void(0);" onclick="ajax_request(2)">الطلاب</a></li>
                    <li id="cl"><a href="javascript:void(0);" onclick="ajax_request(3)">الشعب
                    </a></li>
                    <li id="su"><a href="javascript:void(0);" onclick="ajax_request(4)">المواضيع</a></li>
                </ul>

            </div>

            <!-- main area -->
            <div class="col-xs-12 col-sm-10" id="main">

            </div><!-- /.col-xs-12 main -->
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/.page-container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery-1.12.2.min.js"></script>

</body>
</html>
