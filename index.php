<?php

echo <<<_END
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>С ДР МАША</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Navigation </span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">С ДР, Маша</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Поздравления</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">O Маше</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Поздравь</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/face.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">Маша</h1>
                        <hr class="star-light">
                        <span class="skills">Сегодня лучший день в этом мире, потому что появилась в нем ты!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Поздравления</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
_END;



require_once 'mail/login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM congs";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;//out information
for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $image = substr($row['image'],15,strlen($row['image'])-15);
    $name = $row['name'];
    $count1 = $j+1;
    echo <<<_END
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal{$count1}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="$image" class="img-responsive" alt=$name>
                    </a>
                </div>
_END;
}
$result->close();
$conn->close();
echo <<<_END
          </div>
        </div>
    </section>
_END;

/*echo <<<_END
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </div>
        </div>
    </section>
_END;*/
echo<<<_END
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Мы о Маше</h2>
                    <h3>твои Принцесски</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <b><p>МАХА:</p></b>
                    <p>когда я первый раз увидела Машу, я сразу поняла, что это мой человек,</p>
                    <p>она прямо излучала кучу позитивной энергии!</p>
                    <p>(Маша, специально для тебя пользовалась Т9)</p>
                    
                </div>
                <div class="col-lg-4">
                    <b><p>НАТАША:</p></b>
                    <p>Маша, с днём рождения тебя!!!✨😘
                    С первым солидным юбилеем 
                    ❤Желаю быть счастливой и любимой, гармонии, понимания, 
                    крепкого здоровья, чтобы на утро после тусовок не болела голова! 
                    Огромных успехов на сессиях:) обнимаю тебя!</p>
                   
                </div>
                <div class="col-lg-4 col-lg-offset-2">
                    <b><p>КИРИЛЛ:</p></b>
                    <p>Для меня Маня - это самый родной человек, 
                    с которым я научился любить, дарить заботу, за всё
                     время нашего знакомства с которым мне ни разу не было скучно и о
                     диноко.Я очень рад, что в моей жизни однажды появилась она, 
                     что я смог открыть для неё своё сердце, и, надеюсь, смог 
                     остаться в её.</p>
                  </div>
                <div class="col-lg-4">
                    <b><p>Cамый лучший Дима на Земле:</p></b>
                    <p>Маша, я тебя знаю улыбчивым, отзывчивым, добрым, 
                    умным, сверхъестественно милым и бесконечно красивым человеком. 
                    У тебя всегда есть огонь в глазах, ты всегда поможешь и поймешь. 
                    Спасибо, что ты у нас есть<br><br><br></p>
                    
                </div>
                <div class="col-lg-4 col-lg-offset-2">
                    <b><p>ЮРЕЦ:</p></b>
                    <p>Маша классная</p>
                    
                </div>
                <div class="col-lg-4">
                    <b><p>Дмитрий:</p></b>
                    <p>Маша - человек, излучающий добро и тепло</p>
                    
                </div>
                
            </div>
        </div>
    </section>
_END;
//include_once 'mail/upload.php';
echo <<<_END
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Оставь поздравление</h2>
                    <hr class="star-primary">
                </div>
            </div><!--
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" enctype="multipart/form-data" action="index.php" method="POST" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Имя</label>
                                <input type="text"class="form-control" placeholder="Name" id="name" required data-validation-required-message="Забыл ввести походу">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Сообщение</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Забыл ввести походу"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!--<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Фотка с Машей</label>
                                <input type="file" class="form-control" placeholder="Image" id="image" required data-validation-required-message="Забыл ввести походу"></input>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                       <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Поздравить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->
_END;






echo <<<_END
<div class="row">
<form enctype="multipart/form-data" action="index.php" method="POST">
  <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">
                        
  
  <input type="text" placeholder='Имя' class="form-control" name="name" required data-validation-required-message="Забыл ввести походу">
  </div>
  </div>
  <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">
  <textarea rows="5" name="message" class="form-control" placeholder="Поздравление"required data-validation-required-message="Забыл ввести походу"></textarea>
    </div>
  </div>
  <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">
                        
  
  <input type="text" placeholder='Секретное слово' class="form-control" name="code" required data-validation-required-message="Забыл ввести походу">
  </div>
  </div>   
  <div class="row control-group">
  <div class="form-group col-xs-12 floating-label-form-group controls">                         
      <input  type="hidden" name="MAX_FILE_SIZE"/>
 
      <input name="userfile" type="file" placeholder="фотка с Машей" required data-validation-required-message="Забыл ввести походу"/>
    </div>
      </div>
  
      <input type="submit" value="Поздравить"  />
      
      </div>
      
    
</form>
</div>
_END;

echo <<<_END
</div>
    </section>
_END;

require_once  'mail/contact_me.php';

















    echo <<<_END
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        &copy; Принцесски 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>
_END;
echo <<<_END
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
_END;
//include_once 'mail/upload.php';
/*echo <<<_END
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>от кого</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>само поздравление</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>от кого</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>само поздравление</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>от кого</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>само поздравление</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>от кого</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>само поздравление</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>от кого</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>само поздравление</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
_END;*/

//require_once 'mail/login.php';
$conn1 = new mysqli($hn, $un, $pw, $db);
if ($conn1->connect_error) die($conn1->connect_error);


$query1 = "SELECT * FROM congs";
$result1 = $conn1->query($query1);
if (!$result1) die($conn1->error);

$rows1 = $result1->num_rows;//out information
for ($j1 = 0 ; $j1 < $rows1 ; ++$j1) {
    $result1->data_seek($j1);
    $row1 = $result1->fetch_array(MYSQLI_ASSOC);
    $name1 = $row1['name'];
    $message1 = $row1['message'];
    $image1 = substr($row1['image'], 15, strlen($row1['image']) - 15);
    $count2 = $j1 + 1;

    echo <<<_END
    <div class="portfolio-modal modal fade" id="portfolioModal{$count2}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>$name1</h2>
                            <hr class="star-primary">
                            <img src="$image1" class="img-responsive img-centered" alt="">
                            <p>$message1</p>

                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
_END;

}
//$result->close();
//$conn->close();


    echo <<<_END
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
_END;


//include_once 'mail/upload.php';
?>