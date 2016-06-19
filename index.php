<?php include_once "./config/altconfig.php"; ?>
<html lang="en">
    <head>
        <?php include_once BASE_PATH."/includes/styles.inc"; ?>
        <title><?php echo INDEX_TITLE;?></title>
    </head>

  <body>

    <?php include_once BASE_PATH."/includes/topbar.inc"; ?>

    <?php include_once BASE_PATH."/includes/header.inc"; ?>

    <?php include_once BASE_PATH."/includes/navbar.inc"; ?>
    <?php if(ABOVE_SLIDER_NOTIFICATION=="1"){ ?>
    <div class="container-fluid" style="margin-bottom:10px;">
        <div class="col-md-12">
            <marquee>Notification: Hey this is notification liner. Replace it with some cool jQuery plugin.!</marquee>
        </div>
    </div>
    <?php } ?>
    <div class="container-fluid">
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://dummyimage.com/850x380/000/fff" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://dummyimage.com/850x380/000/fff" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://dummyimage.com/850x380/000/fff" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Latest News</b></h3>
                </div>
                <div class="panel-body">
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                     <p>Panel content</p>
                </div>
            </div>
        </div>
    </div>
    <?php if(BELOW_SLIDER_NOTIFICATION=="1"){ ?>
    <div class="container-fluid" style="margin-bottom:10px;">
        <div class="col-md-12">
            <marquee>Notification: Hey this is notification liner. Replace it with some cool jQuery plugin.!</marquee>
        </div>
    </div>
    <?php } ?>
    <div class="container-fluid" style="padding-left:50px;padding-right:50px;margin-bottom:20px;">
        <div class="row">
            <div class="col-md-4">
                <div style="background:#FFF;min-height:200px;box-shadow:0px 0px 1px 1px rgba(0,0,0,0.3);border-top:3px solid red;padding-left:10px;padding-right:10px;">
                    <h2>Heading 1</h2>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
                </div>
            </div>
            <div class="col-md-4">
               <div style="background:#FFF;min-height:200px;box-shadow:0px 0px 1px 1px rgba(0,0,0,0.3);border-top:3px solid red;padding-left:10px;padding-right:10px;">
                    <h2>Heading 2</h2>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
                </div>
            </div>    
            <div class="col-md-4">
                <div style="background:#FFF;min-height:200px;box-shadow:0px 0px 1px 1px rgba(0,0,0,0.3);border-top:3px solid red;padding-left:10px;padding-right:10px;">
                    <h2>Heading 3</h2>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Footer -->

    <?php include_once BASE_PATH."/includes/footer.inc"; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?php include_once BASE_PATH."/includes/scripts.inc"; ?>
  

 </body>
</html>