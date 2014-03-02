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

        <div class="container">
            <div class="row center">
                <div class="col-md-2 ">
                </div>
                <div class="col-md-8 video-box">
                    <h3><a href="<?=base_url();?>">返回首页</a></h3>
                    <div class="alert alert-success J_success Hide">
                       添加成功
                    </div>
                    <div class="alert alert-danger J_error <?if(!$error){ echo "Hide";}?>">
                        <?=$error?>
                    </div>
                    <form method="post" action="<?=base_url()."index.php/videoadd/update"?>" enctype="multipart/form-data" />
                        <div class="main-container content">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#">上传视频</a></li>
                              <li><a href="<?=base_url()."index.php/videolist";?>">管理视频</a></li>
                            </ul>

                            <form role="form" class="video-form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">标题</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="标题">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">简介</label>
                                    <textarea id="intro" name="intro" class="form-control" placeholder="最多300个字" rows="4"></textarea>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="exampleInputPassword1">教材</label>
                                    <select name="grade" class="form-control">
                                        <option value="1">第一册</option>
                                        <option value="2">第二册</option>
                                        <option value="3">第三册</option>
                                        <option value="a">扩展课程</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">章</label>
                                    
                                    <select name="chapter" class="form-control">
                                        <? for($num=1;$num<7;$num++){?>
                                            <option value="<?=$num?>"><?=$num?></option>
                                        <?}?>
                                    </select>
                                 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">节</label>
                                    <select name="section" class="form-control">
                                        <? for($num=1;$num<7;$num++){?>
                                            <option value="<?=$num?>"><?=$num?></option>
                                        <?}?>
                                    </select>
                                </div>

                            <!--     <div class="form-group">
                                    <label for="exampleInputPassword1">标签</label>
                                    <input type="text"  class="form-control" id="tag" name="tag" placeholder="贴上标签，便于查询">
                                </div> -->



                                <div class="form-group">
                                    <label for="userfile">选择视频</label>
                                    <input type="file" id="userfile" name="userfile">
                                </div>
                              <input type="submit" id="J_submit" class="btn btn-primary" value="上传">
                            </form>


                        </div>
                    </form>
                </div>
                <div class="col-md-2 ">
                </div>
            </div>
        </div>

        
        <?php $this->load->view("comm/jslib")?>


        
       
    </body>

</html>