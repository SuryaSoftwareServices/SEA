<?php
	include("include/indo.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="Frest - Clean & Minimal Bootstrap HTML & HTML + Laravel Dashboard Template" content="The most developer friendly & highly customisable clean & minimal Design Bootstrap Admin Dashboard Template of 2020!" />
  <meta name="keywords" content="admin, chat, email, calendar, kunbun, todo, dark layout, dashboard, ecommerce, analytics material, bootstrap, laravel, html5, css3, minimal, morden" />
  <!-- Title -->
  <title>Sea-Landing Page</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.png" />
  <!-- Core Stylesheet -->
  <link href="style.css" rel="stylesheet" />
  <!-- Responsive CSS -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="venobox/venobox.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
  <!-- Resource style -->
  <script src="js/modernizr.js"></script>
  
</head>
<body>
<section id="auth-login" class="row flexbox-container">
	<div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
    <div class="col-12">
        <div class="card bg-authentication mb-0">
            <div class="row m-0 p-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                        <div class=" pb-1" style='padding-left:10px;'>
                        </div>
                        <div class="card-body">
                            <div class="mb-10">
                                <h4 class="text-left mb-2 pl-1">Welcome Back</h4>
                                <p class="text-left mb-2 pl-1 " style='color:red;display:none;' id='loginInfo'>Welcome Back</p>
                            </div>
                            <form action="apiLogin.php" method='post' id='loginform'>
                                <div class="form-group ">
                                    <label class="text-bold-600" for="exampleInputEmail1">Member ID</label>
                                    <input autocomplete='off' required type="text" class="form-control" id="exampleInputEmail1" name='username' placeholder="Member ID">
								</div>
                                <div class="form-group">
                                    <label  autocomplete='off' required class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"name='password' placeholder="Password">
                                </div>
								<input type='hidden' name='token' value='<?php echo encr("seaLogin", "123123");?>' />
                                <button type="submit" class="btn btn-primary glow w-100 position-relative" id='btnLogin'>Login <i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- right section image -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3" style='background:#F1F3F2;padding:0px;'>
                    <img class="img-fluid" src="panel/app-assets/images/pages/login.png" style='border:none;' alt="branding logo">
                </div>
            </div>
        </div>
    </div>
	</div>
	</div>
</section>
  <script src="js/jquery-2.2.4.min.js"></script>
  <!-- Headroom js -->
  <script src="js/headroom.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap-4 Beta JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All Plugins JS -->
  <script src="js/plugins.js"></script>
  <!-- Active JS -->
  <script src="js/active.js"></script>
  <!-- Resource jQuery -->
  <script src="js/jquery.mobile.custom.min.js"></script>
  <!-- Resource jQuery -->
  <script >
  
	$("#loginform").on( "submit", function(event) { 
		event.preventDefault();
		var proceed = true; //set proceed flag
		var error = [];	//errors		
		$.ajax({
			type: "post",
			url: "apiLogin.php",
			contentType: 'application/x-www-form-urlencoded',
			cache: false,
			contentType:false,
			processData:false,
			crossDomain: false,
			data: new FormData(this),
			success: function(responseData, textStatus, jqXHR) {
				$("#loginInfo").css("display", "block");
				if(responseData != '0'){
					$("#loginInfo").html(responseData);
				}else{
					window.location.href="panel/";
				}
				console.log(responseData);		
			},
			error: function (responseData, textStatus, errorThrown) {
				console.log("submit");		
			}
					
		})
	});
  </script>
</body>
</html>