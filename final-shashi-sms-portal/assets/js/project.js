$(document).ready(function(){
	// alert(1);
$(".rg-btn").click(function(){
	// alert(1);
	$.ajax({
		type:'post',
		data:$('#rg-form').serialize(),
		url:"../controller/register-action.php",
		success:function(res){
			// alert(res);
			// $(".rg_err").html(res);
			if (res==1) 
			{
				$("#rg-form")[0].reset();
				$(".rg_err").html("User added");
			}
			else
			{
				$(".rg_err").html(res);
			}
		}
	});
});


/////////////////////////////////////////////////////////////////////////////////
$(".lg-btn").click(function(){
	// alert(1);
	$.ajax({
		type:'post',
		data:$('#lg-form').serialize(),
		url:"../controller/login_action.php",
		success:function(res){
			// alert(res);
			if (res==1)
			{
				window.location.href="welcome.php";
			}
			 else
			{
			 	$(".rg-err").html(res);
			 	
			 }
			
		}
	});
});

//////////////////////////////////////////////////////////////////////////////////////

$(".lbr-btn").click(function(){
	// alert(1);
	$.ajax({
		type:'post',
		data:$('.lbr_form').serialize(),
		url:"../controller/library_action.php",
		success:function(res){
			// alert(res);

			if(res==1)
			{
			$(".lib_err").html("Library Added");
			$(".lbr_form")[0].reset();

			}
			else
			{
			$(".lib_err").html(res);

			}
		}
	});
});

//////////////////////////////////////////////////////////////////////////////////////

$(".grp-btn").click(function(){
	// alert(1);
	$.ajax({
		type:'post',
		data:$('.lg_grp_form').serialize(),
		url:"../controller/lg_group_action.php",
		success:function(res){
			// alert(res);
			if(res==1)
			{
			$(".lg_grp_err").html("User Added");
			$(".lg_grp_form")[0].reset();

			}
			else
			{
			$(".lg_grp_err").html(res);

			}
		}
	});
});
//////////////////////////////////////////////////////////////////////////////////////

$(".msg-btn").click(function(){
	// alert(1);
	$.ajax({
		type:'post',
		data:$('.message_form').serialize(),
		url:"../controller/message_action.php",
		success:function(res){
			// alert(res);
			if(res==1)
			{
			$(".msg_err").html("Message Added");
			$(".message_form")[0].reset();

			}
			else
			{
			$(".msg_err").html(res);

			}
		}
	});
});

//////////////////////////////////////////////////////////////////////////////////////

$(".contact-btn").click(function(){
	
	$.ajax({
		type:'post',
		data:$('.contact_form').serialize(),
		url:"../controller/contact_action.php",
		success:function(res){
			// alert(res);
				if(res==1)
				{
				alert("Contact added")
				$(".contact_form")[0].reset();
				location.reload();

				}
				else
				 {
				 	$(".contact_err").html(res);
				}
			
		}
	});
});

//////////////////////////////////////////////////////////////////////////////////////

$(".libclick").click(function(xyz){
		// alert(1)
		xyz.preventDefault();

		var ans = $(this).attr("for");
		// alert(ans);
		// xyz=9&abc=90
		$.ajax({
			type:"post",
			data:"library_id="+ans,
			url:"../controller/send_smslibfilter.php",
			success:function(res){
				$(".message").html(res);
			},
			error:function(res){
				alert(res);
			}
		})
	});

/////////////////////////////////////////////////////////////////

$(".grpclick").click(function(xyz){
		// alert(1)
		xyz.preventDefault();

		var ans = $(this).attr("for");
		// alert(ans);
		// xyz=9&abc=90
		$.ajax({
			type:"post",
			data:"group_id="+ans,
			url:"../controller/send_smsgrpfilter.php",
			success:function(res){
				$(".cont-name").html(res);
			},
			error:function(res){
				alert(res);
			}
		})
	});

///////////////////////////////////////////////////////////////////

$(".send-sms").click(function(){
	//	alert(1)
		$.ajax({
			type:"post",
			data:$("#message").serialize(),
			url:"../controller/msgsuccessfull.php",
			success:function(res){
				$(".err_msg").html(res);
				// alert(res);
			}
		});
	});
///////////////////////////////////////////////////////////////////////////

$(document).on("click",".msgdisplay",function(){
	// alert(1)
	$("#msg").val($(this).html())
})
///////////////////////////////////////////////////////////////////////////


$(document).on("click",".conname",function(){
	// alert(1)
	$("#entername").val($(this).html());
	$("#no").val($(this).attr("for"));
})
///////////////////////////////////////////////////////////////////////////


// $(".send-msg").click(function(xyz){
// // alert(1);
// xyz.preventDefault();
// 	$.post("../controller/msgsuccessfull.php",$("#msg_form").serialize(),function(res){
// 		// alert(1);
// 		$(".err_reg").html(res)
// 	})
// });

/////////////////////////////////////////////////////////////////////////////////////////////////////




});