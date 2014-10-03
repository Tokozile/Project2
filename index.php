<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>xkcd password generator</title>


    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    	<link rel='stylesheet' href='style.css' type='text/css'>


    <?php require('code.php'); ?>

  

<style>


</style>
	
</head>

<body bgcolor="#CCFFFF">
	


		<h1>xkcd password generator<br> CSCI E-15 </h1>
<?php $words = array_rand($rand_words, 5); ?>

		<div class='echo'>

<?php	echo $rand_words[$words[0]] . "-"; ?>
<?php	echo $rand_words[$words[1]] . "-"; ?>
<?php	echo $rand_words[$words[2]] . "-"; ?>
<?php	echo $rand_words[$words[3]] . "-"; ?>
<?php	echo $rand_words[$words[4]]; ?>

</div>

<br>
<br>

<div>


			<form method='POST' action='index.php'>

		Number of Words <input type='text' name='words' class='Words'> (Max 9)<br><br>
		<input type="checkbox" name="num" value="Number">Include a Number<br>
		<input type="checkbox" name="sym" value="Symbol">Include a Symbol<br>
		<br>
		<input type='submit' value='New Passphrase' class='button'>

	</form>


		


		<h4>Using a password phrase rather than random symbols and letters, is far much more human friendly and can even be far more difficult to crack in the case of a brut force attack.</h4>
		<h4>So I've create a random phrase password generator. Have fun with it!</h4>	
		<img src="img/password_strength.png" alt="xkcd password generator" /*height="500" width="500"*/>
	
		</div>



<br>
<br>
<br>
		
</body>
</html>