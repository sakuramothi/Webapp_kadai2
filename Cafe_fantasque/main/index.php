<html>
	<head lang="ja">
		<meta http-equiv = "ContentType" content = "text/html;charset=utf8">
		<title>CafeSite</title>
		<link rel = "stylesheet" href="../css/main.css">
		<?
			$page = "";
			if($_GET["mode"]){
				$page = "./".$_GET["mode"].".php";
			}else{
				$page = "./Top.php";
			}

		?>
	</head>
	<body>
		<form action = "index.php" method = "get">
			<div class = "title">
				<button type = "submit" name = "mode" value = "top" class = "titlebutton"><img src="../img/title.png"></button>
			</div>


			<div class = "menu">
				<ul>
					<li><button type = "submit" name = "mode" value = "Top" class = "menubutton">Top</button></li>
					<li><button type = "submit" name = "mode" value = "Menu" class = "menubutton">Menu</button></li>
					<li><button type = "submit" name = "mode" value = "Location" class = "menubutton">Location</button></li>
					<li><button type = "submit" name = "mode" value = "News" class = "menubutton">News</button></li>
				</ul>
			</div>


			<div class = "subtitle">
				<?echo $_GET["mode"];?>
			</div>

			<div class = "main">
				<? require($page);?>
			</div>


			<div class = "menu">
				<ul>
					<li><button type = "submit" name = "mode" value = "Top" class = "menubutton">Top</button></li>
					<li><button type = "submit" name = "mode" value = "Menu" class = "menubutton">Menu</button></li>
					<li><button type = "submit" name = "mode" value = "Location" class = "menubutton">Location</button></li>
					<li><button type = "submit" name = "mode" value = "News" class = "menubutton">News</button></li>
				</ul>
			</div>
		</form>
		<a class = "back" href="<? echo './index.php?mode='.$_GET['mode'] ?>">
	</body>
</html>