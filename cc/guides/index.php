<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Гайды по настройке</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../js/Blob.js"></script>
    <script type="text/javascript" src="../js/FileSaver.js"></script>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div style="margin:-10px 0 0 10px"><a class="navbar-brand" href="index.php"><img src="../css/logo1.png" width="100px"></a></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../"><i class="fa fa-dashboard"></i> Статистика</a>
                    </li>
                    <li>
                        <a href="../hta/"><i class="fa fa-bug"></i> HTA</a>
                    </li>
                     <li>
                        <a href="../phishing/"><i class="fa fa-certificate"></i> Фишинг</a>
                    </li>
                     <li>
                        <a href="../makros/"><i class="glyphicon glyphicon-play-circle"></i> Макросы</a>
                    </li>
                    <li>
                        <a href="../usb/"><i class="fa fa-flag"></i> USB</a>
                    </li>
                    <li>
                        <a><i class="glyphicon glyphicon-list-alt"></i> Шаблоны </a>
                        <ul id="demo">
                            <li>
                                <a href="../template/">Готовые</a>
                            </li>
                            <li>
                                <a href="../template/deployed.php">Развернутые шаблоны</a>
                            </li>
                            <li>
                                <a href="../template/new.php">Загрузить новый</a>
                            </li>
                            <li>
                                <a href="../template/delete.php">Удалить</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a ><i class="glyphicon glyphicon-file"></i> Создание отчета </a>
                        <ul id="demo1">
                            <li>
                                <a href="../report/">Создать отчет</a>
                            </li>
                            <li>
                                <a href="../report/statistic.php">Статистика</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="../guides/"><i class="glyphicon glyphicon-film "></i> Гайды по настройке</a>
                    </li>
                    <li>
                        <a href="../wiki/"><i class="glyphicon glyphicon-info-sign"></i> Вики</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Гайды по настройке
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../">Статистика</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-film"></i> Гайды по настройке
                            </li>
                        </ol>
         
                    </div> <!--/top -->
                    </div>
                    <div class="row">
                
 <!-- Таблица -->     <div class="col-lg-12">

                        <div class="table-responsive">
                           <div class="footer"></div>
                            
                            <div id='showmenu' style="font-size: 20px">1. Установка шаблона "Яндекс.Диск
                                <div class='menu' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/yandex_disk.mp4?version=1&modificationDate=1512698489000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                    
                                </div>
                             </div>

                            <div id='showmenu2' style="margin-top: 10px;font-size: 20px">2. Установка шаблона "Outlook" <small style="color:grey">(фишинг)</small></h4>
                                <div class='menu2' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/owa.mp4?version=2&modificationDate=1512698545000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>

                            <div id='showmenu5' style="margin-top: 10px;font-size: 20px">3. Установка шаблона "Яндекс.Паспорт" <small style="color:grey">(фишинг)</small></h4>
                                <div class='menu5' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/yandex_passport.mp4?version=1&modificationDate=1512698620000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>        
                          
                            <div id='showmenu3' style="margin-top: 10px;font-size: 20px">4. Установка шаблона "Проверка пароля" <small style="color:grey">(фишинг)</small></h4>
                                <div class='menu3' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/check.mp4?version=1&modificationDate=1514310812017&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>

                            <div id='showmenu6' style="margin-top: 10px;font-size: 20px">5. Установка шаблона "Вебинар" <small style="color:grey">(hta)</small></h4>
                                <div class='menu6' style="display: none;">
                                   <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/webinar.mp4?version=1&modificationDate=1512698725000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>                      

                            <div id='showmenu7' style="margin-top: 10px;font-size: 20px">6. Установка шаблона "Обновление VPN" <small style="color:grey">(exe)</small></h4>
                                <div class='menu7' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/openvpn.mp4?version=1&modificationDate=1512698878000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>

                            <div id='showmenu9' style="margin-top: 10px;font-size: 20px">7. Установка шаблона "Установка антивируса" <small style="color:grey">(exe)</small></h4>
                                <div class='menu9' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/avast.mp4?version=1&modificationDate=1512698965000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>

                            <div id='showmenu8' style="margin-top: 10px;font-size: 20px">8. Установка шаблона "Перерасчет ЗП" <small style="color:grey">(макросы)</small></h4>
                                <div class='menu8' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/pereraschet.mp4?version=1&modificationDate=1512699101000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>

                            <div id='showmenu4' style="margin-top: 10px;font-size: 20px">9. Установка шаблона "Премия" <small style="color:grey">(макросы)</small></h4>
                                <div class='menu4' style="display: none;">
                                    <iframe src="https://duma.corp.dsec.ru/download/attachments/10977328/premia.mp4?version=1&modificationDate=1512699168000&api=v2" allowfullscreen="true" width="500" height="300"></iframe> 
                                </div>
                            </div>
                                    
                                
                        </div>
<!-- /Таблица -->       </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#showmenu').click(function() {
                $('.menu').slideToggle("fast");
                    });

        $('#showmenu2').click(function() {
                $('.menu2').slideToggle("fast");
            });
        $('#showmenu3').click(function() {
                $('.menu3').slideToggle("fast");
            });
        $('#showmenu4').click(function() {
                $('.menu4').slideToggle("fast");
            });
        $('#showmenu5').click(function() {
                $('.menu5').slideToggle("fast");
            });
        $('#showmenu6').click(function() {
                $('.menu6').slideToggle("fast");
            });
        $('#showmenu7').click(function() {
                $('.menu7').slideToggle("fast");
            });
        $('#showmenu8').click(function() {
                $('.menu8').slideToggle("fast");
            });
        $('#showmenu9').click(function() {
                $('.menu9').slideToggle("fast");
            });
    });
</script>

</body>

</html>
