<?php $this->load->view('comm/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="bs-sidebar hidden-print affix" role="complementary">
                <ul class="nav bs-sidenav">
                    <li>
                      <a href="#list-group">年级</a>
                      <ul class="nav">
                        <li><a href="#list-group-basic">初一</a></li>
                        <li><a href="#list-group-badges">初二</a></li>
                        <li><a href="#list-group-linked">初三</a></li>
                        <li><a href="#list-group-custom-content">高一</a></li>
                        <li><a href="#list-group-custom-content">高二</a></li>
                        <li><a href="#list-group-basic">高三</a></li>
                      </ul>
                    </li>
                    <li class="active">
                      <a href="#list-group">年级</a>
                      <ul class="nav">
                        <li class="active"><a href="#list-group-basic">初一</a></li>
                        <li><a href="#list-group-badges">初二</a></li>
                        <li><a href="#list-group-linked">初三</a></li>
                        <li><a href="#list-group-custom-content">高一</a></li>
                        <li><a href="#list-group-custom-content">高二</a></li>
                        <li><a href="#list-group-basic">高三</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#list-group">年级</a>
                      <ul class="nav">
                        <li><a href="#list-group-basic">初一</a></li>
                        <li><a href="#list-group-badges">初二</a></li>
                        <li><a href="#list-group-linked">初三</a></li>
                        <li><a href="#list-group-custom-content">高一</a></li>
                        <li><a href="#list-group-custom-content">高二</a></li>
                        <li><a href="#list-group-basic">高三</a></li>
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
