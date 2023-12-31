<!DOCTYPE html>

<?php
session_start(); // Start the session

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == true) {
    header('Location: layout.php');
    exit;
}
?>
<style>
    #Progress_Status {
        width: 100%;
        background-color: #ddd;
    }

    #myprogressBar {
        width: 2%;
        height: 20px;
        background-color: #4CAF50;
    }
</style>
<html lang="en" class="bg-dark">
<!-- Mirrored from flatfull.com/themes/note/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 10:00:57 GMT -->


<head>
	<meta charset="utf-8" /> 
	<title>Notebook | Web Application</title> 
	<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<link rel="stylesheet" href="css/font.css" type="text/css" /> 
	<link rel="stylesheet" href="css/app.v1.css" type="text/css" /> 
	<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="">
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
		<div class="container aside-xxl"> 
			<!--<a class="navbar-brand block" href="#">Friends-98 Multipurpose Association</a>-->
            <div align="center" style="width: 100%;">
                <img style="height:50px;" src="images/logo.png">
            </div>
			<section class="panel panel-default bg-white m-t-lg"> 
				<header class="panel-heading text-center"> <strong>Sign in</strong> </header> 
				<form data-validate="parsley"Za id="login_form" action="#" class="panel-body wrapper-lg">
                    <div id="msgPanel"></div>


                    <div id="Progress_Status" style="display: none;">
                        <div id="myprogressBar"></div>
                    </div>



					<div class="form-group"> <label class="control-label">User ID</label> 
						<input type="text" id="user_name" name="user_name" placeholder="User Id" class="form-control input-lg" data-required="true" >
					</div> 
					<div class="form-group"> 
						<label class="control-label">Password</label> 
						<input type="password" id="user_password" name="user_password" placeholder="Password" class="form-control input-lg"> 
					</div> 
					<div class="checkbox"> <label> <input type="checkbox"> Keep me logged in </label> </div> 
					<a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a> 
					<button type="submit" id="btnSubmit" class="btn btn-primary btn-block">Sign in</button>
					<!--<div class="line line-dashed"></div> 
					<p class="text-muted text-center"><small>Do not have an account?</small></p>
					<a href="signup.html" class="btn btn-default btn-block">Create an account</a>-->
					
				</form> 
			</section> 
		</div> 
	</section> <!-- footer --> 
	
	<footer id="footer"> 
		<div class="text-center padder"> <p> <small>Developed by Nixon Khan<br>&copy; 2023</small> </p> </div>
	</footer> <!-- / footer --> <!-- Bootstrap --> <!-- App --> 
	<script src="js/app.v1.js"></script> <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/note/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2023 10:00:57 GMT -->
</html>

<script type="text/javascript">

$(document).ready(function(){
	var userList	= "";
	jQuery.ajaxSetup({
		beforeSend: function() {
			$('#wait').show();
		},
		complete: function(){
			$('#wait').hide();
		},
		success: function() {}
	}); 


	/*Clear Button Action Performed*/
	
	$('#btnClear').click(function(){
		//clearForm();	
		alert("clear form");
		return false;
	});	
	
	
	
	/*Submit Button Action Performed*/
	$("form#login_form").submit(function(event) {
		// alert($.trim($('#member_name').val()).length);
		
		if($.trim($('#user_name').val()).length==0 ){
			alert('Please Enter User ID');
			return false;
		}else {
			
			$('#btnSubmit').prop('disabled',true);			
			event.preventDefault();
			var formData = new FormData($(this)[0]);
			formData.append("action","insertOrUpdate");	
			$.ajax({
				url: "../ahsca/controller/login_controller.php",
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data) {						
					$('#btnSubmit').prop('disabled',false);	
					var result = JSON.parse(data);
					// alert(result.loginStatus);
					if ($.trim(result.loginStatus) == 'yes') {
                        var ssMass = '<div class="alert alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<i class="fa fa-ok-sign"></i>'+
                        'Login successfully.</div>';
                        $('#msgPanel').html(ssMass);
                        $("#Progress_Status").show();
                        update();
                        // window.location.assign("../ahsca/layout.php")
					}else if($.trim(result.loginStatus) == 'no') {
                        //alert alert-danger
                        var ssMass = '<div class="alert alert-danger">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                            '<i class="fa fa-ok-sign"></i>Sorry!! you are not a valid user.</div>';
                        $('#msgPanel').html(ssMass);

						// alert('wrong user or password');
					}
				}
			});
			return false;	
		}
		
	});
		
	clearForm();
});


function update() {
    var element = document.getElementById("myprogressBar");
    var width = 1;
    var identity = setInterval(scene, 10);
    function scene() {
        if (width >= 100) {
            clearInterval(identity);
            window.location.assign("../ahsca/layout.php");
        } else {
            width++;
            element.style.width = width + '%';
        }
    }
}
</script>