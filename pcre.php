<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression Testing</title>	
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			// trim the strings
			$pattern = trim($_POST['pattern']);
			$subject = trim($_POST['subject']);
			
			// print a caption:
			echo"<p>The result of checking<br />
			<b>$pattern</b><br />against<br />
			$subject<br />is ";
			
			// test :
			if (preg_match ($pattern, $subject) ) {
				echo 'TRUE!</p>';
				
			} else {
				echo 'FALSE!</p>';
			}
		} // end of submission if
	?>
	
	<form action="pcre.php" method="post">
		<p>Regular Expression Pattern:
			<input type="text" name="pattern" value="<?php if (isset($pattern)) echo htmlentities($pattern); ?>" size="40" />
			(include the delimiters)</p>
		<p>Test Subject: <input type="text" name="subject" value="<?php if (isset ($subject)) echo htmlentities($subject); ?>" size="40" /></p>
		<input type="submit" name="submit" value="Test!" />
	</form>

</body>
</html>