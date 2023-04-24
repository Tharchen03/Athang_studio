<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="nullstyle.css">
	<link rel="stylesheet" href="style.css">

	<title>Athang Studio</title>
</head>
<style>
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #fea7b8;
}
</style>
<div class="wrapper">
		@include('navbar')
	<div class="container">
		@yield('content')
	</div>
<button class="button1" onclick="location.href='https://www.athang.com/public/w'">
    <span>Click here to go to Homepage</span>
  </button>



</body>
</body>
</html>