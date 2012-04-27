<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>City Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header">
		<div class="login">
                <?php
		if(isset($_SESSION['login_id']))
                {
                    print <<<_HTML_
                    <form action="login.php" method="post">
                          <input type="submit" value="Logout" name="logout">
                    </form>
_HTML_;
                }
                else
                {
                    print <<<_HTML_
                       <form action="login.php" method="post">
                        <input type="text" class="input" name="login">
                        <input type="submit" value="Enter">
                        </form>
_HTML_;
                 }

                 ?>
   		</div>
		<ul id="menu">

                    <?php include("includes/links.php"); ?>
                    <li> <?php
                            if(isset($_SESSION["login"])){
                                echo "<font color=blue>Login:{$_SESSION["login"]}</font>";
                            }
                        ?>
                    </li>
                </ul>
	</div>
