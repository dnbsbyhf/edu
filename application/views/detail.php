<?php $this->load->view('comm/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="bs-sidebar hidden-print affix" role="complementary">
                <ul class="nav bs-sidenav">
                    <li class="active">
                        <a href="<?=site_url()?>">教材</a>
                        <ul class="nav">
                            <?foreach ($tab_grade as $key => $value) { ?>
                                <li> 
                                    <a href="<? echo site_url()."?g=".$value['value']?>">
                                        <? echo $value['value'] == "a"? "扩展课程" :"第".$value['value']."册";?>
                                    </a>
                                </li>
                            <?}?>
                        </ul>
                    </li>
                </ul>
              </div>
        </div>

        <div class="col-md-9">
            <div class="main-container">
                <?if(count($video)==0) {echo '没有该相关视频,<a href="'.site_url().'">返回首页</a>';}?>
                <?foreach ($video as $key => $value) {?>
                    <div class="detail-box">
                        <h3 class="title">
                            <?=$value['title'];?>
                        </h3>
                        <div class="type">
                            <span><? echo $value['grade'] == "a"? "扩展课程" :"第".$value['grade']."册";?></span><span>/第<?=$value['chapter'];?>章</span><span >/第<?=$value['section'];?>节</span>
                        </div>
                        <div class="video Fix">
                           <video id="movie" width="100%" preload="true" controls>
                              <source src="<?=$value['src'];?>" type="video/mp4">
                              <source src="<?=$value['src'];?>" type="video/ogg">
                            </video> 
                        </div>
                        <div class="related-msg">             
                            <p>
                                上传时间：<?=$value['date'];?>
                            </p>
                            <p class="intro">
                            </p>
                            <p>
                                上传用户：<?=$value['uname'];?>
                            </p>
                            <p>
                                简介：<?=$value['intro'];?>
                            </p>
                        </div>
                    </div>
                <?}?>
            </div>
        </div>

    </div>
</div>


<?php $this->load->view("comm/jslib")?>
<script type="text/javascript" src="<?=site_url();?>public/flash/flowplayer.min.js" charset="utf-8"></script>
<script src="<?=site_url();?>public/js/index/detail.js"></script>

<?php $this->load->view('comm/footer'); ?>
