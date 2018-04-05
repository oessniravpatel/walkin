<?php
<<<<<<< HEAD
//ob_start();
=======
ob_start();
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
include 'connect.php';

if (isset($_REQUEST['buttonName'])) {

    $CanId = $_REQUEST['act'];
    $CorrectAns = 0;
    $WrongAns = 0;
<<<<<<< HEAD
    $correct = array(1 => 1, 2 => 1, 3 => 1, 4 => 1, 5 => 4);
=======
    $correct=array(1=>1, 2=>1, 3=>1, 4=>1, 5=>4);
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    $i = 1;
    foreach ($_REQUEST['testOption'] as $data) {

        if ($data == $correct[$i]) {
            $CorrectAns = $CorrectAns + 1;
        } else {
            $WrongAns = $WrongAns + 1;
        }
    }

    $Percentage = ($CorrectAns * 100) / 5;


    $ans = "insert into result (CandidateId, CorrectAns, WrongAns, Percentage, CreatedOn) values ('$CanId','$CorrectAns','$WrongAns','$Percentage',now())";

    $res = mysql_query($ans);
<<<<<<< HEAD
    header("Location:token.php?retId=" . $CanId);
=======
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
                <h2 class="martop20">.Net Question </h2>
                <div id="main-content" class="martop20">

                    <form name="question" id="question" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="CandidateId" value="1" />
                        <div class="news">
                            <table class="onlineTestTable" cellpadding="10px">
                                <tbody>
                                    <tr align="center">

                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 1</strong>Which is the base class for all the resulte type which returns form Action method?</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="0" value="1" autofocus="" type="radio">ActionResult</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="1" value="2" type="radio">ActionResults</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[1]" tabindex="2" value="3" type="radio">BaseActionResult</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[1]" tabindex="3" value="4" type="radio">BaseActionResults</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 2</strong>What is the default action method when an MVC project Created?</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="0" value="1" autofocus="" type="radio">Index</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="1" value="2" type="radio">Indexing</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[2]" tabindex="2" value="3" type="radio">Create</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[2]" tabindex="3" value="4" type="radio">Start</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	


                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 3</strong> Waht is controller in ASP.net MVC?
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="0" value="1" autofocus="" type="radio">Controller handles the user
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="1" value="2" type="radio">The controller renders the appropriate view  the model data as a response.</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[3]" tabindex="2" value="3" type="radio">A coordinator between view and model 
                                                </label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[3]" tabindex="3" value="4" type="radio">All Above</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	



                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 4</strong> With this type of index, the data are stored in the bottom level of the index and in the same order as that index.</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="0" value="1" autofocus="" type="radio">Secondary</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="1" value="2" type="radio">Primary</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[4]" tabindex="2" value="3" type="radio">Clustered</label></div>
                                        </td>

                                        <td>
                                            <div class="radio"><label><input name="testOption[4]" tabindex="3" value="4" type="radio">Nonclustered</label></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>	


                                    <tr>
                                        <td colspan="5">
                                            <div class="list-group-item list-group-item-info"><strong>Ques. 5</strong>An SQL Server 2000 language that adds programming elements like parameters, variables, IF, WHILE loops, and so forth, to the basic capabilities of SQL is called:</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="0" value="1" autofocus="" type="radio">Java</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="1" value="2" type="radio">.NET</label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label><input name="testOption[5]" tabindex="2" value="3" type="radio">TRANSACT SQL</label></div>
                                        </td>

                                        <td>
                                            <div class="radio">
                                                <label>
                                                    <input name="testOption[5]" tabindex="3" value="4" type="radio">VB</label></div>
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

                        </div>


                    </form>
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
            <div id="main-content" class="martop20">

<form name="question" id="question" method="post" enctype="multipart/form-data" >
<input type="hidden" name="CandidateId" value="1" />
<div class="news">
			<table class="onlineTestTable" cellpadding="10px">
			<tbody>
			<tr align="center">
				
			</tr>
			<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 1</strong>Which is the base class for all the resulte type which returns form Action method?</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="0" value="1" autofocus="" type="radio">ActionResult</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="1" value="2" type="radio">ActionResults</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[1]" tabindex="2" value="3" type="radio">BaseActionResult</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[1]" tabindex="3" value="4" type="radio">BaseActionResults</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>


				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 2</strong>What is the default action method when an MVC project Created?</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="0" value="1" autofocus="" type="radio">Index</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="1" value="2" type="radio">Indexing</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[2]" tabindex="2" value="3" type="radio">Create</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[2]" tabindex="3" value="4" type="radio">Start</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	


				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 3</strong> Waht is controller in ASP.net MVC?
</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="0" value="1" autofocus="" type="radio">Controller handles the user
</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="1" value="2" type="radio">The controller renders the appropriate view  the model data as a response.</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[3]" tabindex="2" value="3" type="radio">A coordinator between view and model 
</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[3]" tabindex="3" value="4" type="radio">All Above</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	



				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 4</strong> With this type of index, the data are stored in the bottom level of the index and in the same order as that index.</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<label><input name="testOption[4]" tabindex="0" value="1" autofocus="" type="radio">Secondary</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[4]" tabindex="1" value="2" type="radio">Primary</label>
						</div>
					</td>
				
					<td>
						<div class="radio">
							<label><input name="testOption[4]" tabindex="2" value="3" type="radio">Clustered</label></div>
					</td>
				
					<td>
						<div class="radio"><label><input name="testOption[4]" tabindex="3" value="4" type="radio">Nonclustered</label></div>
				</td>
					</tr>
				<tr>
					<td colspan="5">&nbsp;</td>
				</tr>	


				<tr>
					<td colspan="5">
						<div class="list-group-item list-group-item-info"><strong>Ques. 5</strong>An SQL Server 2000 language that adds programming elements like parameters, variables, IF, WHILE loops, and so forth, to the basic capabilities of SQL is called:</div>
					</td>
				</tr>
				<tr>
						<td>
							<div class="radio">
								<label><input name="testOption[5]" tabindex="0" value="1" autofocus="" type="radio">Java</label>
							</div>
						</td>
					
						<td>
							<div class="radio">
								<label><input name="testOption[5]" tabindex="1" value="2" type="radio">.NET</label>
							</div>
						</td>
					
						<td>
							<div class="radio">
								<label><input name="testOption[5]" tabindex="2" value="3" type="radio">TRANSACT SQL</label></div>
						</td>
					
						<td>
							<div class="radio">
								<label>
									<input name="testOption[5]" tabindex="3" value="4" type="radio">VB</label></div>
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
							
		</div>
		
		
		</form>
</div>

 </div>
</div>
       
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
    </body>
</html>