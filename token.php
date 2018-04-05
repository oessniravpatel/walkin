<?php
include 'connect.php';

if (isset($_POST['save'])) {

    //SELECT * FROM `tblinterview` WHERE position='php' 
    // clean user inputs to prevent sql injectionfs
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $experience = $_REQUEST['experience'];
    $position = $_REQUEST['position'];
    $other = $_REQUEST['other'];
    $CreatedDate = $_REQUEST['CreatedDate'];
    $feedback1 = $_REQUEST['feedback1'];
    $feedback2 = $_REQUEST['feedback2'];
    $feedback3 = $_REQUEST['feedback3'];
    $results = $_REQUEST['results'];
<<<<<<< HEAD
	$graduation_year = $_REQUEST['graduation_year'];
=======
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f

    if (!$error) {

        //$query = "INSERT INTO tbl_emp(user_name ,first_name ,last_name,company,email,group_id) VALUES('$user_name','$first_name','$last_name','$company','$email','$group_id')";
<<<<<<< HEAD
        $query = "INSERT INTO `tblinterview`(`fname`,`lname`,`email`,`contact`,`experience`,`position`,`other`,`feedback1`,`feedback2`,`feedback3`,`results`,`CreatedDate`,`graduation_year`)"
                . "VALUES('$fname','$lname','$email','$contact','$experience','$position','$other','$feedback1','$feedback2','$feedback3','$results',now(),'$graduation_year')";
=======
        $query = "INSERT INTO `tblinterview`(`fname`,`lname`,`email`,`contact`,`experience`,`position`,`other`,`feedback1`,`feedback2`,`feedback3`,`results`,`CreatedDate`)"
                . "VALUES('$fname','$lname','$email','$contact','$experience','$position','$other','$feedback1','$feedback2','$feedback3','$results',now())";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        $res = mysql_query($query) or die($query);

        $id = mysql_insert_id();

        if ($position == 'PHP Developer') {
<<<<<<< HEAD
            header("Location:onlineTestPHP.php?act=$id");
        }

        if ($position == 'Business Developer') {
            header("Location:onlineTestBusiness.php?act=$id");
        }
		if ($position == 'Front-end Developer') {
            header("Location:onlineTestFrontend.php?act=$id");
        }
		if ($position == 'IT Recruiter') {
            header("Location:onlineTestIT.php?act=$id");
=======
            header("Location:onlineTest.php?act=$id");
        }

        if ($position == '.NET Developer') {
            header("Location:onlineTestMVC.php?act=$id");
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        }

        if ($position == 'PHP Developer' || $position == '.NET Developer') {
            $prefix = "D";
<<<<<<< HEAD
            $prefixMessg = "Thank you for applying Php Developer";
        } else if ($position == 'IT Recruiter') {
            $prefix = "R";
            $prefixMessg = "Thanky you for applying IT Recruiter";
        } else if ($position == 'Business Development Executive') {
            $prefix = "B";
            $prefixMessg = "Thanky you for applying Business Development Executive";
        } else if ($position == 'Other') {
            $prefix = "O";
            $prefixMessg = "Thanky you for applying IT Recruiter or Business Development Executive";
=======
        } else if ($position == 'IT Recruiter') {
            $prefix = "R";
        } else if ($position == 'Business Development Executive') {
            $prefix = "B";
        } else if ($position == 'Other') {
            $prefix = "O";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        }
        //echo "<h1>The tokan number $id </h1> ";

        $error = 'fail';
        if ($res) {
            $error = 'success';
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }
    }
}

<<<<<<< HEAD
if (isset($_REQUEST['retId']) and $_REQUEST['retId'] != '') {
    $id = $_REQUEST['retId'];

    $prefix = "D";
    $sql = "select * from tblinterview where interviewId='$id'";
    $res1 = mysql_query($sql);
    $row1 = mysql_fetch_array($res1);
    //print_r($row1);
    //die;
    if ($row1['position'] == 'PHP Developer') {
        $prefixMessg = "Thank you for applying Php Developer";
    } else {
        $prefixMessg = "Thank you for applying .Net Developer";
    }
=======
if(isset($_REQUEST['retId']) and $_REQUEST['retId']!='')
{
   $id=$_REQUEST['retId'];
  
    $prefix = "D";
    
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
}
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


        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<<<<<<< HEAD


    </head>

=======
    </head>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    <body class="hamburgler-active home">
        <div class="token">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
<<<<<<< HEAD
                        <h1><strong><?php echo $prefixMessg; ?></strong></h1>
                        <h2><strong>Your Token Number is</strong></h2>
                        <div class="token-number martop20"><strong><?php echo $prefix . $id; ?></strong></div>
						<h2><strong>Please wait for turn .</strong></h2>
=======
                        <h1><strong>Thanks for applying us your details.</strong></h1>
                        <h2><strong>Your Token No. is</strong></h2>
                        <div class="token-number martop20"><strong><?php echo $prefix . $id; ?></strong></div> 
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                        <h1><strong>Good Luck!</strong></h1>
                    </div>
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
                var x = document.getElementById("ExperienceSelect").value;
                document.getElementById("experience-value").innerHTML = "" + x;
            }
            function BDEFunction() {
                var x = document.getElementById("BDESelect").value;
                document.getElementById("BDE-value").innerHTML = "" + x;
            }
<<<<<<< HEAD

            (function (global) {

                if (typeof (global) === "undefined")
                {
                    throw new Error("window is undefined");
                }

                var _hash = "!";
                var noBackPlease = function () {
                    global.location.href += "#";

                    // making sure we have the fruit available for juice....
                    // 50 milliseconds for just once do not cost much (^__^)
                    global.setTimeout(function () {
                        global.location.href += "!";
                    }, 50);
                };

                // Earlier we had setInerval here....
                global.onhashchange = function () {
                    if (global.location.hash !== _hash) {
                        global.location.hash = _hash;
                    }
                };

                global.onload = function () {

                    noBackPlease();

                    // disables backspace on page except on input fields and textarea..
                    document.body.onkeydown = function (e) {
                        var elm = e.target.nodeName.toLowerCase();
                        if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                            e.preventDefault();
                        }
                        // stopping event bubbling up the DOM tree..
                        e.stopPropagation();
                    };

                };

            })(window);
            
            setTimeout("window.location.href='index.php';",12000);
=======
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        </script>

    </body>
</html>
