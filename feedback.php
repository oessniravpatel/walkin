<?php
include 'connect.php';


$update = $_REQUEST['interviewId'];
<<<<<<< HEAD
$query = "SELECT * FROM `tblinterview` where interviewId='$update'";
=======
$query = "SELECT * FROM `tblInterview` where interviewId='$update'";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f

$result = mysql_query($query)or die(mysql_error());
$row = mysql_fetch_array($result)or die(mysql_error());
if (isset($_POST['save'])) {

    $demo = $_REQUEST['rupdate'];

    $feedback1 = mysql_real_escape_string($_REQUEST['feedback1']);
    $feedback2 = mysql_real_escape_string($_REQUEST['feedback2']);
    $feedback3 = mysql_real_escape_string($_REQUEST['feedback3']);

    $isfeedback1 = mysql_real_escape_string($_REQUEST['isfeedback1']);
    $isfeedback2 = mysql_real_escape_string($_REQUEST['isfeedback2']);
    $isfeedback3 = mysql_real_escape_string($_REQUEST['isfeedback3']);



<<<<<<< HEAD
    $update_query = "update `tblinterview` set `feedback1`='$feedback1',`feedback2`='$feedback2', `feedback3`='$feedback3',`isfeedback1`='$isfeedback1',`isfeedback2`='$isfeedback2',`isfeedback3`='$isfeedback3' where `interviewId`='$demo'";
=======
    $update_query = "update `tblInterview` set `feedback1`='$feedback1',`feedback2`='$feedback2', `feedback3`='$feedback3',`isfeedback1`='$isfeedback1',`isfeedback2`='$isfeedback2',`isfeedback3`='$isfeedback3' where `interviewId`='$demo'";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f



    $z = mysql_query($update_query) or die(mysql_error());
    if ($z) {
        header("Location:list.php");
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
<<<<<<< HEAD

    </head>
    <body>
        <div class="cnt">
=======
    </head>
    <body>

>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-md-6"><img src="images/logo.png" width="70" alt=""/></div>
                    <div class="col-md-6 navigation">
                        <a href="list.php?interviewId=<?php echo$row['interviewId']; ?>">Waiting List</a> | 
                        <a href="rejectList.php?interviewId=<?php echo$row['interviewId']; ?>&act=reject">Reject</a> |
                        <a href="clearList.php?interviewId=<?php echo$row['interviewId']; ?>&act=clear">Accept</a>  
                    </div>
                </div>
            </header>
            <h2>Feedback </h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">.
                    <form action="" method="post">
                        <input type="hidden" name="rupdate" value="<?php echo $row['interviewId']; ?>"/>  
                        <div class="row">
                            <div class="col-md-3 text-right">

                                <label class="" for="subject">Feedbackb by Mukut</label>
                            </div>
                            <div class="col-md-9">
                                <textarea id="subject" class="form-control" name="feedback1" placeholder="Write something.." ><?php echo $row['feedback1']; ?></textarea>
                                <div class="martop20 form-group">
<<<<<<< HEAD
                                    <select id="feedbackmukut" class="selectpicker form-control" name="isfeedback1" onchange="MukutFeedback()">
                                        <option>--- Select Your Feedback ---</option>
                                          
=======
                                    <select class="selectpicker form-control" name="isfeedback1">
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                                        <option value="Approve"<?= $row['isfeedback1'] == 'Approve' ? 'selected="selected"' : ' '; ?> >Approve</option>
                                        <option value="Disapprove"<?= $row['isfeedback1'] == 'Disapprove' ? 'selected="selected"' : ' '; ?> >Disapprove</option>
                                        <option value="Not sure"<?= $row['isfeedback1'] == 'Not sure' ? 'selected="selected"' : ' '; ?> >Not sure</option>
                                    </select>
<<<<<<< HEAD
                                    <label id="mukut-value"><?php echo ($row['isfeedback1'] == '' ? 'Select Your Feedback' : $row['isfeedback1']) ?></label>
                                </div>
                            </div>
                        </div>

=======
                                    <label>Select your Feedback</label>
                                </div>
                            </div>
                        </div>
                        
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                        <div class="row martop20">
                            <div class="col-md-3 text-right">
                                <label class="" for="subject">Feedback by Nitin</label>
                            </div>
                            <div class="col-md-9">
                                <textarea id="subject" class="form-control" name="feedback2" placeholder="Write something.." ><?php echo $row['feedback2']; ?></textarea>
<<<<<<< HEAD
                                <div class="form-group martop20">
                                    <select id="feedbacknitin" class="selectpicker form-control" name="isfeedback2" onchange="NitinFeedback()">
                                        <option>--- Select Your Feedback ---</option>
                                        <option value="Approve"<?= $row['isfeedback2'] == 'Approve' ? 'selected="selected"' : ' '; ?> >Approve</option>
                                        <option value="Disapprove"<?= $row['isfeedback2'] == 'Disapprove' ? 'selected="selected"' : ' '; ?> >Disapprove</option>
                                        <option value="Not sure"<?= $row['isfeedback2'] == 'Not sure' ? 'selected="selected"' : ' '; ?> >Not sure</option>
                                    </select>
                                    <label id="nitin-value"><?php echo ($row['isfeedback2'] == '' ? 'Select Your Feedback' : $row['isfeedback2']) ?></label>
                                </div>
                            </div>
                        </div>
                        
=======
                            </div>
                        </div>
                        <div>
                            <select class="selectpicker" name="isfeedback2">
                                <option>Select your Feedback</option>
                                <option value="Approve"<?= $row['isfeedback2'] == 'Approve' ? 'selected="selected"' : ' '; ?> >Approve</option>
                                <option value="Disapprove"<?= $row['isfeedback2'] == 'Disapprove' ? 'selected="selected"' : ' '; ?> >Disapprove</option>
                                <option value="Not sure"<?= $row['isfeedback2'] == 'Not sure' ? 'selected="selected"' : ' '; ?> >Not sure</option>
                                
                                
                            </select>

                        </div>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                        <div class="row martop20">
                            <div class="col-md-3 text-right">
                                <label class="" for="subject">Feedback by Swar</label>
                            </div>
                            <div class="col-md-9">
                                <textarea id="subject" class="form-control" name="feedback3" placeholder="Write something.." ><?php echo $row['feedback3']; ?></textarea>
<<<<<<< HEAD
                                <div class="form-group martop20">
                                    <select id="feedbackswar" class="selectpicker form-control" name="isfeedback3" onchange="SwarFeedback()">
                                        <option>--- Select your Feedback ---</option>
                                        <option value="Approve"<?= $row['isfeedback3'] == 'Approve' ? 'selected="selected"' : ' '; ?> >Approve</option>
                                        <option value="Disapprove"<?= $row['isfeedback3'] == 'Disapprove' ? 'selected="selected"' : ' '; ?> >Disapprove</option>
                                        <option value="Not sure"<?= $row['isfeedback3'] == 'Not sure' ? 'selected="selected"' : ' '; ?> >Not sure</option>
                                    </select>
                                    <label id="swar-value"><?php echo ($row['isfeedback3'] == '' ? 'Select Your Feedback' : $row['isfeedback3']) ?></label>
                                </div>
                            </div>
                        </div>
                        
=======
                            </div>
                        </div>
                        <div>
                            <select class="selectpicker" name="isfeedback3">
                                <option>Select your Feedback</option>
                                <option value="Approve"<?= $row['isfeedback3'] == 'Approve' ? 'selected="selected"' : ' '; ?> >Approve</option>
                                <option value="Disapprove"<?= $row['isfeedback3'] == 'Disapprove' ? 'selected="selected"' : ' '; ?> >Disapprove</option>
                                <option value="Not sure"<?= $row['isfeedback3'] == 'Not sure' ? 'selected="selected"' : ' '; ?> >Not sure</option>
                                
                                
                            </select>

                        </div>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                        <div class="row martop20">
                            <div class="col-md-3 text-right">
                            </div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" name="save" value="Submit">
                            </div>
                        </div>
                </div>    



                </table>
                </form>
            </div>
<<<<<<< HEAD
        </div>
        <footer class="text-center">OpenEyes Technologies, Inc &copy 2017</footer>
        </div>
        
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
=======
        </div> 
        <footer class="text-center">OpenEyes Technologies, Inc &copy 2017</footer>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    </body>
</html>