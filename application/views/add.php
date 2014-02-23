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
                    <div class="alert alert-danger J_error Hide">
                        添加失败
                    </div>
                    <div class="main-container content">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#">上传视频</a></li>
                          <li><a href="<?=base_url()."index.php/videolist";?>">管理视频</a></li>
                        </ul>

                        <form role="form" class="video-form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">标题</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="标题">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">简介</label>
                                <textarea class="form-control" placeholder="最多300个字" rows="4"></textarea>
                            </div>
                                
                            <div class="form-group">
                                <label for="exampleInputPassword1">年级</label>
                                <select class="form-control">
                                    <option>初一</option>
                                    <option>初二</option>
                                    <option>初三</option>
                                    <option>高一</option>
                                    <option>高二</option>
                                    <option>高三</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">章</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">节</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">标签</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="贴上标签，便于查询">
                            </div>



                            <div class="form-group">
                                <label for="exampleInputFile">选择视频</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                          <button type="submit" class="btn btn-primary">上传</button>
                        </form>


                    </div>
                </div>
                <div class="col-md-2 ">
                </div>
            </div>
        </div>

        
        <?php $this->load->view("comm/jslib")?>


        <script src="<?=site_url();?>public/js/index/list.js"></script>

       
    </body>

</html>