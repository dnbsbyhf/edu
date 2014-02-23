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
                        删除成功
                    </div>
                    <div class="alert alert-danger J_error Hide">
                        删除失败
                    </div>
                    <div class="main-container content">
                        <ul class="nav nav-tabs">
                          <li ><a href="<?=base_url()."index.php/videoadd"?>">上传视频</a></li>
                          <li class="active"><a href="javascript:void(0);">管理视频</a></li>
                        </ul>

                        <table class="table video-list table-hover">
                            <thead>
                                <tr>
                                    <th>
                                       编号 
                                    </th>
                                    <th>
                                        标题
                                    </th>
                                    <th>
                                        上传时间
                                    </th>
                                    <th>
                                        操作
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach ($videos as $key => $value) {?>
                                    <tr>
                                        <td>
                                            <?=$value['id'];?>
                                        </td>
                                        <td>
                                            <?=$value['title'];?>
                                        </td>
                                        <td>
                                            <?=$value['date'];?>
                                        </td>
                                        <td>
                                            <button data="<?=$value['id'];?>" type="button" class="btn btn-danger J_delete">删除</button>
                                        </td>
                                    </tr>
                                <?}?>
                            </tbody>
                        </table>
                        <div align=right>
                            <ul class="pagination right">
                                <?if($page ==1){?>
                                    <li class="disabled"><a href="javascript:void(0)">上一页</a></li>
                                <?}else{?>
                                    <li><a href="<?=base_url()."index.php/videolist?page=".($page-1)?>">上一页</a></li>
                                <?}?>
                                <?if($page == $page_total){?>
                                    <li class="disabled"><a href="javascript:void(0)">下一页</a></li>
                                <?}else{?>
                                    <li><a href="<?=base_url()."index.php/videolist?page=".($page+1)?>">下一页</a></li>
                                <?}?>
                            </ul>
                            <div style="display: inline-block; vertical-align: top; margin-top: 28px; margin-left: 10px;font-size:14px;"><?=$page."/".$page_total;?>
                            </div>

                        </div>

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