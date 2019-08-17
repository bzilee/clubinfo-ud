<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<style type="text/css">

	body
	{
		margin: 0;
		background-color: rgb(66, 66, 66);
	}
	.container
	{
		width: 100%;
		background-color: rgb(66, 66, 66);
		height: 100vh;
		text-align: center;
	}

	.msg
	{
		position: fixed;
		top: calc((100vh - 200px)/2) ;
		/*bottom: calc((100vh - 200px)/2) ;*/
		height: 200px;
		width: 100%;
		background-color: #9e9e9e;
	}

	.msg-error
	{
		font-size: 30px;
		padding: 0;

		margin: calc(200px / 2 - 30px) 0  calc(200px / 2 - 60px) 0;
	}

</style>
<body>

<div class="container">

	<div class="msg">
		<p class="msg-error"><?php echo $msg; ?></p>
		<p><font size="1"><?php echo $footer; ?></font></p>
	</div>

</div>

</body>
</html>
