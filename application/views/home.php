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
                                <? if($grade == $value['value']){?>
                                    <li class="active">
                                        <a href="javacript:void(0)">
                                            <? echo $value['value'] == "a"? "扩展课程" :"第".$value['value']."册";?>
                                        </a>
                                    </li>
                                <?}else{?>
                                <li> <? if($grade == $value['value']){echo 'class="active"';} ?>
                                    <a href="<? echo site_url()."?g=".$value['value']?>">
                                        <? echo $value['value'] == "a"? "扩展课程" :"第".$value['value']."册";?>
                                    </a>
                                </li>
                                <?}?>
                            <?}?>
                        </ul>
                    </li>
                    <li <? if(count($tab_chapter)>0){ echo 'class="active"';}?> > 
                        <a href="<?=site_url()."?".($grade?"g=".$grade:"")?>">章</a>
                        <ul class="nav">
                            <?foreach ($tab_chapter as $key => $value) { ?>
                                <? if($chapter == $value['value']){?>
                                    <li class="active">
                                        <a href="javacript:void(0)">
                                            <?="第".$value['value']."章";?>
                                        </a>
                                    </li>
                                <?}else{?>
                                    <li>
                                        <a href="<? echo site_url()."?".($grade?"g=".$grade."&":"")."c=".$value['value'];?>">
                                           <?="第".$value['value']."章";?>
                                        </a>
                                    </li>
                                <?}?>
                            <? }?>
                        </ul>
                    </li>
                    <li <? if(count($tab_section)>0){ echo 'class="active"';}?>>
                        <a href="<?=site_url()."?".($grade?"g=".$grade."&":"").($chapter?"c=".$chapter:"")?>">节</a>
                        <ul class="nav">
                            <?foreach ($tab_section as $key => $value) { ?>
                                <? if($section == $value['value']){?>
                                    <li class="active">
                                        <a href="javacript:void(0)">
                                            <?="第".$value['value']."节";?>
                                        </a>
                                    </li>
                                <?}else{?>
                                    <li>
                                        <a href="<? echo site_url()."?".($grade?"g=".$grade."&":"").($chapter?"c=".$chapter."&":"")."s=".$value['value'];?>">
                                           <?="第".$value['value']."节";?>
                                        </a>
                                    </li>
                                <?}?>
                            <? }?>
                        </ul>
                    </li>
                </ul>
              </div>
        </div>
        <div class="col-md-8">
            <div class="main-container">
                <div class="card-list-box">
                    <ul class="card clearfix">
                        <?foreach ($videos as $key => $value) {?>
                            <li>
                                <a href="#" class="link">
                                    <div class="title"><?=$value['title']?></div>
                                    <div class="icon">
                                        <span class="cnt">
                                            <img class="" src="<?=$value['src'];?>"/>
                                            <strong><?=$value['palytime'];?></strong>
                                        </span>
                                    </div>
                                </a>
                                <div class="content"><?=$value['intro'];?></div>
                                <div class="public-time">上传时间：<?=$value['date'];?></div>
                            </li>
                        <? }?>
                    </ul>
<div style="height:2000px"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("comm/jslib")?>


<script src="<?=site_url();?>public/js/home.js"></script>


<?php $this->load->view('comm/footer'); ?>
