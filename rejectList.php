<!DOCTYPE html>
<?php
include 'connect.php';


$error = "";
if (isset($_REQUEST['interviewId']) and $_REQUEST['interviewId'] != "") {

    $isresults = $_REQUEST['act'];

    $sql = "Update `tblinterview` set `results`='$isresults' where interviewId=" . $_REQUEST['interviewId'];

    mysql_query($sql);

    $error = "success";
}

<<<<<<< HEAD
$query = "SELECT * FROM `tblinterview` where (isfeedback1='Disapprove' or isfeedback2='Disapprove' or isfeedback3='Disapprove' or isfeedback1='Not sure' or isfeedback2='Not sure' or isfeedback3='Not sure') ";
=======
$query = "SELECT * FROM `tblInterview` where results='reject' ";
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f

$result = mysql_query($query)or die(mysql_error());
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
        <script>
            history.pushState(null, null, document.title);
            window.addEventListener('popstate', function () {
            history.pushState(null, null, document.title);
                    });
            }
            );
        </script>
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

<<<<<<< HEAD
            <h2>Reject List</h2>
=======
            <h2>Reject Report</h2>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f

            <table class="table">
                <thead>
                    <tr>
                        <th>Sr#</th>
<<<<<<< HEAD
                        <th>Token #</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Exp.</th>
                        <th>Position</th>
						<th>Graduation Year</th>
						<th>Mukut</th>
						<th>Nitin</th>
						<th>Swar</th>
=======
                        <th>Token Number</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Experience</th>
                        <th>Position</th>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                    <?php
                    $i = 1;

                    while ($row = mysql_fetch_array($result)) {

                        if ($row['position'] == 'PHP Developer' || $row['position'] == '.NET Developer') {
                            $prefix = "D";
                        }
                        if ($row['position'] == 'IT Recruiter') {
                            $prefix = "R";
                        }
                        if ($row['position'] == 'Business Development Executive') {
                            $prefix = "B";
                        }
                        if ($row['position'] == 'Other') {
                            $prefix = "O";
                        }
                        ?>

                        <tr class="info">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $prefix . $row['interviewId']; ?></td>
=======
<?php
$i = 1;

while ($row = mysql_fetch_array($result)) {
    
    if ($row['position'] == 'PHP Developer' || $row['position'] == '.NET Developer') {
        $prefix = "D";
    }
    if ($row['position'] == 'IT Recruiter') {
        $prefix = "R";
    }
    if ($row['position'] == 'Business Development Executive') {
        $prefix = "B";
    }
    if ($row['position'] == 'Other') {
        $prefix = "O";
    }
    
    ?>

                        <tr class="info">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $prefix.$row['interviewId']; ?></td>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
                            <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['experience']; ?></td>
                            <td><?php echo $row['position']; ?></td>
<<<<<<< HEAD
							<td><?php echo $row['graduation_year']; ?></td>
							<td><?php echo ($row['isfeedback1']=="--- Select Your Feedback ---"?"N/A":$row['isfeedback1']); ?></td>
							<td><?php echo ($row['isfeedback2']=="--- Select Your Feedback ---"?"N/A":$row['isfeedback2']); ?></td>
							<td><?php echo ($row['isfeedback3']=="--- Select your Feedback ---"?"N/A":$row['isfeedback3']); ?></td>
                            <td><a href="feedback.php?interviewId=<?php echo$row['interviewId']; ?>">Feedback</a> | <a href="list.php?interviewId=<?php echo$row['interviewId']; ?>&act=clear">Accept</a> <label> </td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
           </div>

        <footer class="text-center">OpenEyes Technologies, Inc &copy 2017</footer>
        
=======
                            <td><a href="feedback.php?interviewId=<?php echo$row['interviewId']; ?>">Feedback</a> | <a href="list.php?interviewId=<?php echo$row['interviewId']; ?>&act=reject">Reject</a> | <a href="list.php?interviewId=<?php echo$row['interviewId']; ?>&act=clear">Accept</a> <label> </td>
                        </tr>
    <?php
    $i++;
}
?>
                </tbody>
            </table>
        </div>

        <footer class="text-center">OpenEyes Technologies, Inc &copy 2017</footer>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    </body>
</html>