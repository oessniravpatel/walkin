<?php
include 'connect.php';
<<<<<<< HEAD
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=1024, initial-scale=1, minimum-scale: 1, maximum-scale: 1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>Openeyes Technologies</title>
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.6.css" />
        <link rel="apple-touch-icon" href="img/favicon-apple.png">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hamburgler-active home">
        <div class="enter-site-logo">
            <table width="100%" height="100%;">
                <tr>
                    <td valign="middle">
                        <img src="images/logo_about.png" alt=""/>
                        <h1>Walkin Interview</h1>
                        <h2><?php 
						$stop_date = date('Y-m-d H:i:s');
						echo   $stop_date = date('d-m-Y', strtotime($stop_date . ' +1 day')); ?></h2>
                    </td>
                
                </tr>
                
            </table>
        </div>
        <div class="form-interview">
            <div class="container-fluid">
                <div class="row contact-form">
                    <div class="col-md-8 col-md-offset-2 text-center"><h3>Tell us about yourself </h3></div>
                    <form id="form1" name="form1" method="post" action="token.php">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" maxlength="50">
                                <label><span> First Name*</span></label>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" maxlength="50">
                                <label><span> Last Name* </span></label>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <input type="text" name="email" id="email" maxlength="50">
                                <label><span> Email*</span></label>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <input type="text" name="contact" id="contact" minlength="10">
                                <label><span>Contact No.*</span></label>
                            </div>
                        </div>
						<div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <input type="text" name="graduation_year" id="graduation_year">
                                <label><span>Graduation Year *</span></label>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <select id="experience" name="experience" class="form-control select" onchange="ExperienceFunction()">
                                    <option value=""selected="selected">--- Select Experience ---</option>
									<option value="0-1 Years">0-1 Years</option>
                                     <option value="1-2 Years">1-2 Years</option>
                                    <option value="2-4 Years">2-4 Years</option>
                                    <option value="4+ Years">4+ Years</option>
                                </select>
                                <label id="experience-value"><span>Experience *</span></label>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <select id="position" class="form-control select" name="position" onChange="BDEFunction()">

                                    <option value="" selected="selected">Select Position</option>
									<option value="Business Developer">Business Developer</option>
                                    <option value="PHP Developer">PHP Developer</option>
                                    <option value="Front-end Developer">Front-end Developer</option>
                                    <option value="IT Recruiter">IT Recruiter</option>                                    
                                    <option value="Other">Other</option>
                                </select>
                                <label id="BDE-value"><span>Position *</span></label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="other" id="lastposition" maxlength="50" style="display:none" placeholder="Last Position">
                            </div>
                        </div>
						
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <button type="submit" name="save" onClick="return validateForm()"  class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div id="particles-js" class="hamburgler-menu">
            <canvas class="particles-js-canvas-el" width="1920"></canvas>
        </div>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-3.3.6.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/particles.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <script>
                                $('input,textarea').val("");
                                $('.contact-form .form-group input,.contact-form .form-group textarea, .contact-form .form-group select').focusout(function () {
                                    var text_val = $(this).val();
                                    if (text_val === "") {
                                        $(this).removeClass('has-value');
                                    } else {
                                        $(this).addClass('has-value');
                                    }
                                });
        </script>
        <script>
            function ExperienceFunction() {
                var x = document.getElementById("experience").value;
                document.getElementById("experience-value").innerHTML = "" + x;
            }
            function BDEFunction() {
                var x = document.getElementById("position").value;
                document.getElementById("BDE-value").innerHTML = "" + x;
            }
        </script>

        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/additional-methods.js"></script>



        <script type="text/javascript">
            $(document).ready(function () {

                $("#form1").validate({

                    rules: {

                        'fname': {

                            required: true,

                            pattern: /^[a-zA-Z._-\s\',]+$/,

                        },
                        'lname': {

                            required: true,

                            pattern: /^[a-zA-Z._-\s\',]+$/,

                        },

                        'email': {

                            required: true,
                            pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
                            email: true


                        },

                        'contact': {

                            required: true,
                            pattern: /^[0-9]+$/,
                            min: 10,
                            

                        },

                        'experience': {

                            required: true,

                        },
                        'position': {

                            required: true,

                        },
						'graduation_year': {

                            required: true,

                        }

                    },

                    messages: {

                        'fname': {

                            required: "First name is mandatory!",

                            pattern: "Please enter characters !",

                        },

                        'lname': {

                            required: "Last name is mandatory!",

                            pattern: "Please enter characters !",

                        },

                        'email': {

                            required: "Email is mandatory!",

                            pattern: "Please enter a valid email address!",
                            email: "Please enter a valid email address!",

                        },

                        'contact': {

                            required: "Phone is mandatory!",

                            pattern: "Please enter phone number!",
                            
                            min: "Required minimum 10 numbers"

                        },

                        'experience': {

                            required: "Experience is mandatory!",

                        },

                        'position': {

                             required: "Position is mandatory!",

                        },
						'graduation_year': {

                             required: "Graduation Year is mandatory!",

                        }

                    }

                });

            });



            $(function () {
                $('#position').change(function () {
                    //alert("helo");
                    if ($(position).val() == "Other") //I'm supposing the "Other" option value is 0.
                    {
                        $("#lastposition").show();

                    } else
                    {
                        $("#lastposition").hide();
                    }
                });
            });


        </script>

    </body>
=======

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=1024, initial-scale=1, minimum-scale: 1, maximum-scale: 1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>Openeyes Technologies</title>
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.6.css" />
<link rel="apple-touch-icon" href="img/favicon-apple.png">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hamburgler-active home">
<div class="enter-site-logo">
	<table width="100%" height="100%;">
    	<tr>
        	<td valign="middle">
            	<img src="images/logo_about.png" alt=""/>
            </td>
        </tr>
    </table>
</div>
<div class="form-interview">
	<div class="container-fluid">
    	<div class="row contact-form">
        	<div class="col-md-8 col-md-offset-2"><h3>Applicant</h3></div>
                <form id="form1" name="form1" method="post" action="token.php">
        	<div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <input type="text" name="fname" id="fname" maxlength="50">
                    <label><span> First Name*</span></label>
                </div>
            </div>
                    
            <div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <input type="text" name="lname" id="lname" maxlength="50">
                    <label><span> Last Name* </span></label>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <input type="text" name="email" id="email" maxlength="50">
                    <label><span> Email*</span></label>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <input type="text" name="contact" id="contact" maxlength="10">
                    <label><span>Contact No.*</span></label>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <select id="ExperienceSelect" name="experience" class="form-control select" onchange="ExperienceFunction()">
                        <option value="1-2 Years">1-2 Years</option>
                        <option value="2-3 Years">2-3 Years</option>
                        <option value="3-5 Years">3-5 Years</option>
                        <option value="5-10 Years">5-10 Years</option>
                        <option value="10+ Years">10+ Years</option>
                    </select>
                    <label id="experience-value">Experience</label>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            	<div class="form-group">
                    <select id="BDESelect" class="form-control select" name="position" onChange="BDEFunction()">
                        
                        <option value="Select Position" selected="selected">Select Position</option>
                         <option value="PHP Developer">PHP Developer</option>
                        <option value=".NET Developer">.NET Developer</option>
                        <option value="IT Recruiter">IT Recruiter</option>
                        <option value="Business Development Executive">Business Development Executive</option>
                        <option value="Other">Other</option>
                    </select>
                    <label id="BDE-value">Position</label>
                </div>
                <div class="form-group">
                    <input type="text" name="other" id="lastposition" maxlength="50" style="display:none" placeholder="Last Position">
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            	<button type="submit" name="save" onClick="return validateForm()"  class="btn btn-success btn-lg">Submit</button>
            </div>
            </form>
        </div>
    </div>
	
</div>
<div id="particles-js" class="hamburgler-menu">
	<canvas class="particles-js-canvas-el" width="1920"></canvas>
</div>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.6.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/particles.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script>
 $('input,textarea').val("");
      $('.contact-form .form-group input,.contact-form .form-group textarea, .contact-form .form-group select').focusout(function(){
      var text_val = $(this).val();
       if(text_val === "") {
         $(this).removeClass('has-value');
       } else {
         $(this).addClass('has-value');
       }
    });
</script>
<script>
function ExperienceFunction() {
    var x = document.getElementById("ExperienceSelect").value;
    document.getElementById("experience-value").innerHTML = "" + x;
}
function BDEFunction() {
    var x = document.getElementById("BDESelect").value;
    document.getElementById("BDE-value").innerHTML = "" + x;
}
</script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        $("#form1").validate({

            rules: {

                'fname': {

                    required: true,

                    pattern: /^[a-zA-Z._-\s\',]+$/,

                },
                'lname': {

                    required: true,

                    pattern: /^[a-zA-Z._-\s\',]+$/,

                },
                
                'email': {

                    required: true,
                    pattern: /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i,
                    email: true


                },

                'contact': {

                    required: true,
                     pattern: /^[0-9]+$/,

                },
                
                'lastposition': {

                    required: true,
                     

                }
                
            },

            messages: {

                'fname': {

                    required: "First name is mandatory!",

                    pattern: "Please enter characters !",

                },

                'lname': {

                    required: "Last name is mandatory!",

                    pattern: "Please enter characters !",

                },
                
                'email': {

                    required: "Email is mandatory!",

                    pattern: "Please enter a valid email address!",
                    email: "Please enter a valid email address!",

                },

                'contact': {

                    required: "Phone is mandatory!",

                    pattern: "Please enter phone number!",

                },

             'lastposition': {

                    required: "lastposition is mandatory!",

                    

                },
                

                'pass2': {

                    equalTo: "The two passwords do not match!"

                }

            }

        });

    });
    
    

$(function() {
  $('#BDESelect').change(function() {
      //alert("helo");
    if($("#BDESelect").val() == "Other") //I'm supposing the "Other" option value is 0.
    {
         $("#lastposition").show();
         
     }
     else
     {
         $("#lastposition").hide();
     }
 });
});


</script>

</body>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
</html>
