<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Organism</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="<?= site_url();?>public/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="../css/bootstrap-responsive.css" rel="stylesheet"> -->
        <link href="<?= site_url();?>public/css/base.css" rel="stylesheet">
        <link href="<?= site_url();?>public/css/index.css" rel="stylesheet">
    </head>
    <body>
        <div>

            <div class="row-fluid">
                <div class="span12">
                    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a href="<?=site_url();?>" class="navbar-brand">Organism</a>
                            </div>
                            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                              <ul class="nav navbar-nav">
                                <li class="active">
                                  <a href="<?=site_url();?>">首页</a>
                                </li>
                                <li>
                                  <a href="#">占位符</a>
                                </li>
                                <li>
                                  <a href="#">占位符</a>
                                </li>
                                <li>
                                  <a href="#">占位符</a>
                                </li>
                              </ul>
                              <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <div class="navbar-form navbar-left" role="search">
                                       <!--  <div class="form-group">
                                            <input type="text" class="form-control" placeholder="按回车键搜索">
                                        </div> -->
                                    </div>
                                </li>
                                
                                    <? if($uname){
                                        echo '<li>
                                            <a href="'.site_url().'index.php/videolist" class="glyphicon-class">
                                                <span class="glyphicon glyphicon-user">'.$uname.'</span>
                                            </a>
                                            </li>
                                            <li>
                                                 <a href="'.site_url().'index.php/login/logout" ">退出</a>
                                            </li>
                                        ';
                                    }else{
                                        echo '
                                            <li>
                                            <a href="'.site_url().'index.php/login" class="glyphicon-class">
                                                <span class="glyphicon glyphicon-user"></span>登录
                                            </a>
                                            </li>
                                        ';
                                    }?>
                                </li>

                              </ul>
                            </nav>
                        </div>          
                    </header>
                </div>
            </div>
        </div>