$(function(){
	var USERNAMEDOM = $(".J_username");
	var PASSWORDDOM = $(".J_password");
	var ALERTDOM = $(".J_alert");


	function alertError(str){
		!str ? ALERTDOM.addClass("Hide") : ALERTDOM.removeClass("Hide").html(str+"");
	}



	Check = {
		all:function(){
			var value = USERNAMEDOM.val();

			for(key in this){
				if(key == "all")
					continue;

				if(!this[key].call(this)){
					return false;
				}
			}

			return true;


		},

		username:function(){
			var value = USERNAMEDOM.val().trim();

			if(!value){
				alertError("账号名不能空");
				return false;

			}

			if(value.length>20){
				alertError("账号名的长度不能超过20字");
				return false;
			}

			alertError();
			return value;
		},

		password:function(){
			var value = PASSWORDDOM.val().trim();

			if(!value){
				alertError("密码不能为空");
				return false;
			}

			if(value.length > 20){
				alertError("密码的长度不能超过20字");
				return false;
			}

			alertError();

			return value;

		}

	}

	// 提交check
	$(".J_submit").on("click",function(e){
		var  elem  = this;
		
		if(!Check.all())
			return false;
		

	})

	$(".J_username").on("blur",function(e){
		Check.username();
	})

	$(".J_password").on("blur",function(e){
		Check.password();
	})

})