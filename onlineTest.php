<?php
<<<<<<< HEAD
=======

>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
include 'connect.php';

if (isset($_REQUEST['buttonName'])) {

    $CanId = $_REQUEST['act'];

    $CorrectAns = 0;
    $WrongAns = 0;
    $correct = array(1 => 1, 2 => 1, 3 => 1, 4 => 1, 5 => 4);
    $i = 1;
    foreach ($_REQUEST['testOption'] as $data) {
        //print_r($_REQUEST);
        //die;
        if ($data == $correct[$i]) {
            $CorrectAns = $CorrectAns + 1;
        } else {
            $WrongAns = $WrongAns + 1;
        }
    }

    $Percentage = ($CorrectAns * 100) / 5;
<<<<<<< HEAD
    $ans = "insert into result (CandidateId, CorrectAns, WrongAns, Percentage, CreatedOn) values ('$CanId','$CorrectAns','$WrongAns','$Percentage',now())";

    $res = mysql_query($ans);
    header("Location:token.php?retId=" . $CanId);
=======
     $ans = "insert into result (CandidateId, CorrectAns, WrongAns, Percentage, CreatedOn) values ('$CanId','$CorrectAns','$WrongAns','$Percentage',now())";
   
    $res = mysql_query($ans);
    header("Location:token.php?retId=".$CanId);
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
        <div class="token2">
            <div class="cnt">
            <div class="container">
                <div class="text-center">
                    <img src="images/logo.png" width="70" alt=""/>
                </div>
                <h2 class="martop20">PHP Question </h2>

                <div id="main-content">

                    <div class="news">
                        <form name="question" id="question" method="post" enctype="multipart/form-data" >
                            <table class="onlineTestTable" cellpadding="10px">
                                <tbody>
                                    <tr align="center">

                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 1</strong>What will be the values of $a and $b after the code below is executed? Explain your answer.	 $a = '1'; $b = &$a; $b = "2$b";
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="0" value="1" autofocus="" type="radio">"21"</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="1" value="2" type="radio">"12"</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="2" value="3" type="radio">"20"</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[1]" tabindex="3" value="4" type="radio">12</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 2</strong>What will this code output and why? $x = true and false;  var_dump($x);</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="0" value="1" autofocus="" type="radio">bool(true)</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="1" value="2" type="radio">true</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="2" value="3" type="radio">array( 0=>'true')</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[2]" tabindex="3" value="4" type="radio">None of the above.</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	


                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 3</strong>What will $x be equal to after the statement $x = 3 + "15%" + "$25"?

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="0" value="1" autofocus="" type="radio">18</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="1" value="2" type="radio">19</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="2" value="3" type="radio">17</label></div>
                                        </td>
                                        <td>
                                            <div class="radio"><label><input name="testOption[3]" tabindex="3" value="4" type="radio">1.8</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	
                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 4</strong>What is PEAR in php?</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="0" value="1" autofocus="" type="radio">PHP Extension and Application Repository</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="1" value="2" type="radio">PHP Extension and Application Regularity</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="2" value="3" type="radio">PHP Exception and Application Repository</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[4]" tabindex="3" value="4" type="radio">a and b</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	
                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 5</strong>How we can retrieve the data in the result set of MySQL using PHP?</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="0" value="1" autofocus="" type="radio">mysql_fetch_row</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="1" value="2" type="radio">mysql_fetch_array</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="2" value="3" type="radio">mysql_fetch_object</label></div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label>
                                                    <input name="testOption[5]" tabindex="3" value="4" type="radio">All of the above</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	
                                <input name="quesNo" value="2" type="hidden"><input name="quiz" value="Microsoft SQL Server Online Test | Online Quiz | Mock Exam" type="hidden"><input name="remainingSecs" id="remainingSecs" type="hidden">
                                </tbody>
                            </table>
                            <div class="news text-center">

                                <input name="buttonName" id="showResult" class="btn btn-success" value="Submit Answer" tabindex="5" type="submit">		
                            </div>
                            </from>		
                    </div>
                </div>
            </div>
            </div>
        </div>

=======
    </head>
    <body>
        <div class="token2">
        <div class="container">
            <div class="text-center">
            <img src="images/logo.png" width="" alt=""/>
            </div>
            <h2 class="martop20">Mock Test</h2>

<div id="main-content">

<div class="news">
		<form name="question" id="question" method="post" enctype="multipart/form-data" >
			<table class="onlineTestTable" cellpadding="10px">
			<tbody>
			<tr align="center">
				
			</tr>
			<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 1</strong>What will be the values of $a and $b after the code below is executed? Explain your answer.	 $a = '1'; $b = &$a; $b = "2$b";
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="0" value="1" autofocus="" type="radio">"21"</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="1" value="2" type="radio">"12"</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="2" value="3" type="radio">"20"</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[1]" tabindex="3" value="4" type="radio">12</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 2</strong>What will this code output and why? $x = true and false;  var_dump($x);</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="0" value="1" autofocus="" type="radio">bool(true)</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="1" value="2" type="radio">true</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="2" value="3" type="radio">array( 0=>'true')</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[2]" tabindex="3" value="4" type="radio">None of the above.</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	


				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 3</strong>What will $x be equal to after the statement $x = 3 + "15%" + "$25"?

						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="0" value="1" autofocus="" type="radio">18</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="1" value="2" type="radio">19</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="2" value="3" type="radio">17</label></div>
					</td>
						<td>
							<div class="radio"><label><input name="testOption[3]" tabindex="3" value="4" type="radio">1.8</label></div>
						</td>
					</tr>
					<tr>
						<td colspan="5">&nbsp;</td>
					</tr>	
					<tr>
						<td colspan="5">
							<div class="list-group-item list-group-item-info"><strong>Ques. 4</strong>What is PEAR in php?</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="radio">
								<label><input name="testOption[4]" tabindex="0" value="1" autofocus="" type="radio">PHP Extension and Application Repository</label>
							</div>
						</td>
				
						<td>
							<div class="radio">
								<label><input name="testOption[4]" tabindex="1" value="2" type="radio">PHP Extension and Application Regularity</label>
							</div>
						</td>
				
						<td>
							<div class="radio">
								<label><input name="testOption[4]" tabindex="2" value="3" type="radio">PHP Exception and Application Repository</label></div>
						</td>
				
						<td>
							<div class="radio"><label><input name="testOption[4]" tabindex="3" value="4" type="radio">a and b</label></div>
						</td>
				</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	
				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 5</strong>How we can retrieve the data in the result set of MySQL using PHP?</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[5]" tabindex="0" value="1" autofocus="" type="radio">mysql_fetch_row</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[5]" tabindex="1" value="2" type="radio">mysql_fetch_array</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[5]" tabindex="2" value="3" type="radio">mysql_fetch_object</label></div>
					</td>
				
					<td>
						<div class="radio">
							<label>
								<input name="testOption[5]" tabindex="3" value="4" type="radio">All of the above</label></div>
					</td>
				</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	
						<input name="quesNo" value="2" type="hidden"><input name="quiz" value="Microsoft SQL Server Online Test | Online Quiz | Mock Exam" type="hidden"><input name="remainingSecs" id="remainingSecs" type="hidden">
				</tbody>
				</table>
				<div class="news text-center">
                                    <input name="buttonName" id="showResult" class="btn btn-success" value="Complete Exam" tabindex="5" type="submit">		
				</div>
                </from>		
		</div>
        </div>
        </div>
    </div>
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    </body>
</html>