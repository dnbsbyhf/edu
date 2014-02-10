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

        <div class="col-md-9">
            <div class="main-container">
                <?foreach ($video as $key => $value) {?>
                    <div class="detail-box">
                        <h3 class="title">
                            <?=$value['title'];?>
                        </h3>
                        <div class="type">
                            <a href="#"><?=$value['grade'];?></a>/
                            <a href="#"><?=$value['type'];?></a>/
                            <a href="#">第<?=$value['chapter'];?>章</a>
                        </div>
                        <div class="video">
                            <div class="cnt">
                            </div>
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

<?php $this->load->view('comm/footer'); ?>
