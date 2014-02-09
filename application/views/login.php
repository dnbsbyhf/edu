<?php $this->load->view('comm/no-header'); ?>
	<div class="alert alert-danger J_alert <?php if(!$error){echo "Hide";} ?> " align="center">
		 <?php echo $error; ?> 
	</div>
	<div class="row center">
	    <div class="col-md-4 ">
	    </div>
	    <div class="col-md-4 ">
	        <div class="main-container login-box">
	            <form role="form" method="POST" action="<?=site_url();?>index.php/login">
	                <div class="form-group">
	                    <label for="username">账号</label>
	                    <input type="text"  name="username" id="username" class="form-control J_username" value="<? echo $username;?>" placeholder="账号名">
	                </div>
	                <div class="form-group">
	                  <label for="password">密码</label>
	                  <input type="password" id="password" name="password" class="form-control J_password" value="<? echo $password;?>"  placeholder="密码">
	                </div>
	                <input type="submit"   class="J_submit btn btn-primary" value="登录" />
	            </form>
	        </div>
	    </div>
	    <div class="col-md-4 ">
	    </div>
	</div>
<?php $this->load->view("comm/jslib")?>


<script src="<?=site_url();?>public/js/index/login.js"></script>

</div>
</body>
</html>