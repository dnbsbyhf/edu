$(function(){
	$(".J_delete").on("click",function(e){
		var _elem = $(this);
		var id = _elem.attr("data");
		if(confirm("确定删除？")){
			$.ajax({
				url:"/weike/index.php/ajax/deleteVideoBy",
				method:"GET",
				dataType:"json",
				data:{
					vid:id
				},
				success:function(res){
					if(res.code == 200){
						$(".J_success").removeClass("Hide");
						setTimeout(function(){
							location.href="/weike/index.php/videolist";
						},1200);
					}else{
						$(".J_error").removeClass("Hide");
						setTimeout(function(){
							$(".J_error").addClass("Hide");
						},1200);
					}
				}
			});	
		}
	})
})