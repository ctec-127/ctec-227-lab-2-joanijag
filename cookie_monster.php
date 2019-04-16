<!DOCTYPE html>
<?php 

setcookie("username", 'BettyW', time() - 8600);
setcookie("firstname", 'Betty', time() - 8600);
setcookie("lastname", 'White', time() - 8600);

setcookie("cookie[institution]", "Clark", time() - 8600);
setcookie("cookie[city]", "Vancouver", time() - 8600);
setcookie("cookie[state]", "WA", time() - 8600);

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <pre>
		<?php print_r(headers_list());?>
	</pre>
</body>
</html>