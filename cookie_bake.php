<!doctype html>

<?php

setcookie("username", 'BettyW', time() + 7200);
setcookie("firstname", 'Betty', time() + 7200);
setcookie("lastname", 'White', time() + 7200);


setcookie("cookie[Institution]", "Clark", time() + 7200);
setcookie("cookie[City]", "Vancouver", time() + 7200);
setcookie("cookie[State]", "WA", time() + 7200);

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
