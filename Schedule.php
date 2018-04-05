<?php
include 'connect.php';



$days = $_REQUEST['interviewId'];
<<<<<<< HEAD
$query = "SELECT * FROM `tblinterview` where interviewId='$days'";
=======
$query = "SELECT * FROM `tblInterview` where interviewId='$days'";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f

$result = mysql_query($query)or die(mysql_error());
$row = mysql_fetch_array($result)or die(mysql_error());

if (isset($_POST['save'])) {
    $demo = $_REQUEST['rupdate'];
    $scheduledays = $_REQUEST['scheduledays'];
    $scheduletime = $_REQUEST['scheduletime'];

<<<<<<< HEAD
    $update_query = "update `tblinterview` set `scheduledays`='$scheduledays',`scheduletime`='$scheduletime' where `interviewId`='$demo'";

    $z = mysql_query($update_query) or die(mysql_error());
    if ($z) {
        header("Location:list.php");
=======
    $update_query = "update `tblInterview` set `scheduledays`='$scheduledays',`scheduletime`='$scheduletime' where `interviewId`='$demo'";

    $z = mysql_query($update_query) or die(mysql_error());
    if ($z) {
        // header("Location:list.php");
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        ?>



        <?php
    } else {
        $msg = 'Error';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
<<<<<<< HEAD
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
    <body>
        <div class="cnt">
            <div class="container">
                <header>
                    <div class="row">
                        <div class="col-md-6"><img src="images/logo.png" width="70" alt=""/></div>
                        <div class="col-md-6 navigation">
                           
                        </div>
                        
                    </div>
                    
                </header>

         
            <h2>Schedule the interview</h2>
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="rupdate" value="<?php echo $row['interviewId']; ?>"/>
                <div class="form-group">
                    
                    <div> 
                        <select id="feedbackmukut" class="selectpicker form-control" name="scheduledays"onchange="MukutFeedback()">
                           <option>--- Select Your Days ---</option>
                            <option value="Monday July24"<?= $row['scheduledays'] == 'Monday July24' ? 'selected="selected"' : ' '; ?> >Monday July24</option>
                            <option value="Thursday July25"<?= $row['scheduledays'] == 'Thursday July25' ? 'selected="selected"' : ' '; ?> >Thursday July25</option>
                            <option value="Wednesday July26"<?= $row['scheduledays'] == 'Wednesday July26' ? 'selected="selected"' : ' '; ?> > Wednesday July26</option>

                          
                        </select>
                         <label id="mukut-value"><?php echo ($row['scheduledays'] == '' ? 'Select Your Feedback' : $row['scheduledays']) ?></label>
                        

                    </div>
                    
                </div>
                <div class="form-group">
                    
                    <div> 
                        <select id="feedbacknitin" class="selectpicker" onchange="NitinFeedback()" name="scheduletime">
                           <option>--- Select Your Time ---</option>
                            <option value="2:30PM to 3:00PM"<?= $row['scheduletime'] == '2:30PM to 3:00PM' ? 'selected="selected"' : ' '; ?> >2:30PM to 3:00PM</option>
                            <option value="3:00PM to 3:30PM"<?= $row['scheduletime'] == '3:00PM to 3:30PM' ? 'selected="selected"' : ' '; ?> >3:00PM to 3:30PM</option>
                            <option value="4:00PM to 4:30PM"<?= $row['scheduletime'] == '4:00PM to 4:30PM' ? 'selected="selected"' : ' '; ?> >4:00PM to 4:30PM</option>
                            <option value="5:00PM to 5:30PM"<?= $row['scheduletime'] == '5:00PM to 5:30PM' ? 'selected="selected"' : ' '; ?> >5:00PM to 5:30PM</option>
                            <option value="6:00PM to 6:30PM"<?= $row['scheduletime'] == '6:00PM to 6:30PM' ? 'selected="selected"' : ' '; ?> >6:00PM to 6:30PM</option>
                            <option value="7:00PM to 7:30PM"<?= $row['scheduletime'] == '7:00PM to 7:30PM' ? 'selected="selected"' : ' '; ?> >7:00PM to 7:30PM</option>
                            <option value="8:00PM to 8:30PM"<?= $row['scheduletime'] == '8:00PM to 8:30PM' ? 'selected="selected"' : ' '; ?> >8:00PM to 8:30PM</option>
                            <option value="9:00PM to 9:30PM"<?= $row['scheduletime'] == '9:00PM to 9:30PM' ? 'selected="selected"' : ' '; ?> >9:00PM to 9:30PM</option>
                        </select>
<label id="nitin-value"><?php echo ($row['scheduletime'] == '' ? 'Select Your Feedback' : $row['scheduletime']) ?></label>
=======
        <title>Openeyes Technologies</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Schedule form</h2>
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="rupdate" value="<?php echo $row['interviewId']; ?>"/>
                <div class="form-group">
                    <label class="control-label col-sm-2">Days:</label>
                    <div> 
                        <select class="selectpicker" name="scheduledays">
                            <option>Select Days</option>
                            <option value="Monday"<?= $row['scheduledays'] == 'Monday' ? 'selected="selected"' : ' '; ?> >Monday</option>
                            <option value="Thursday"<?= $row['scheduledays'] == 'Thursday' ? 'selected="selected"' : ' '; ?> >Thursday</option>
                            <option value="Wednesday"<?= $row['scheduledays'] == 'Wednesday' ? 'selected="selected"' : ' '; ?> > Wednesday</option>


                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Time:</label>
                    <div> 
                        <select class="selectpicker" name="scheduletime">
                            <option>Select Days</option>
                            <option value="2:30PM to 3:00PM"<?= $row['scheduletime'] == '2:30PM to 3:00PM' ? 'selected="selected"' : ' '; ?> >2:30PM to 3:00PM</option>
                            <option value="3:00PM to 3:30PM"<?= $row['scheduletime'] == '3:00PM to 3:30PM' ? 'selected="selected"' : ' '; ?> >3:00PM to 3:30PM</option>
                         <option value="4:00PM to 4:30PM"<?= $row['scheduletime'] == '4:00PM to 4:30PM' ? 'selected="selected"' : ' '; ?> >4:00PM to 4:30PM</option>
                         <option value="5:00PM to 5:30PM"<?= $row['scheduletime'] == '5:00PM to 5:30PM' ? 'selected="selected"' : ' '; ?> >5:00PM to 5:30PM</option>
                         <option value="6:00PM to 6:30PM"<?= $row['scheduletime'] == '6:00PM to 6:30PM' ? 'selected="selected"' : ' '; ?> >6:00PM to 6:30PM</option>
                         <option value="7:00PM to 7:30PM"<?= $row['scheduletime'] == '7:00PM to 7:30PM' ? 'selected="selected"' : ' '; ?> >7:00PM to 7:30PM</option>
                        <option value="8:00PM to 8:30PM"<?= $row['scheduletime'] == '8:00PM to 8:30PM' ? 'selected="selected"' : ' '; ?> >8:00PM to 8:30PM</option>
                        <option value="9:00PM to 9:30PM"<?= $row['scheduletime'] == '9:00PM to 9:30PM' ? 'selected="selected"' : ' '; ?> >9:00PM to 9:30PM</option>
                        </select>

>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="save" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
<<<<<<< HEAD
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script>
            function MukutFeedback() {
                var x = document.getElementById("feedbackmukut").value;
                document.getElementById("mukut-value").innerHTML = "" + x;
            }
            function NitinFeedback() {
                var x = document.getElementById("feedbacknitin").value;
                document.getElementById("nitin-value").innerHTML = "" + x;
            }
            function SwarFeedback() {
                var x = document.getElementById("feedbackswar").value;
                document.getElementById("swar-value").innerHTML = "" + x;
            }
        </script>
   <footer class="text-center">OpenEyes Technologies, Inc &copy 2017</footer>
        </div>


    </body>
</html>
=======

    </body>
</html>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
