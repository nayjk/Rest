<!-- для передачи обратной связи -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $connect = new PDO("mysql:host=localhost; dbname=site;", 'root','root');
    if (isset($_POST['name'])) { //isset for date
        $name = $_POST['name'];
        $contacts = $_POST['contacts'];
        $comments = $_POST['comments'];
        $query = $connect->query ("INSERT INTO site.comments (name,contacts,comments) VALUES ('$name','$contacts','$comments')");
        }
    // Перенаправление на текущую страницу
    header("Location: {$_SERVER['REQUEST_URI']}");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Доставка</title>

	<link rel="stylesheet" href="css/main.css">

	<script src="libs/gsap/gsap.min.js" defer></script>
	<script src="libs/gsap/ScrollTrigger.min.js" defer></script>
	<script src="libs/gsap/ScrollSmoother.min.js" defer></script>

	<script src="js/app.js" defer></script>

</head>
<body>
	<div class="wrapper">
		<div class="scroll">
			<a class="caption reservhtml" href="reserv.php">Забронировать</a>
			<a class="caption indexhtml" href="index.php">Главная</a>
			<a class="caption contactshtml" href="contacts.php">Контакты</a>
			<a class="caption menuhtml" href="menu.php">Меню<a>
			<a class="caption galleryhtml" href="gallery.php">Галерея<a></a>
			<a class="caption deliveryhtml" href="delivery.php">Доставка<a></a>
		</div>
		<div class="content">
			<article class="main-article">
                <img class="up" src="img/background/up.png">
                <img class="backgroundforest" src="img/background/forests.png">
                <img class="photo_3" src="img/work/logowhite.png">

				<a class="big dungeon_text10"> Найтхорм </a>
                <a class="caption dungeon_text1">Доставка</a>

				<a class="obiknoveni dungeon_text2">Как осуществляется доставка?</a>

				<a class="caption dungeon_text3"><b>Ожидает<br>подтверждения</b></a>
				<img class="strela st1" src="img/work/strela.png">
				<a class="caption dungeon_text4"><b>Подтверждён</b></a>
				<img class="strela st2" src="img/work/strela.png">
				<a class="caption dungeon_text5"><b>Готовится</b></a>
				<img class="strela st3" src="img/work/strela.png">
				<a class="caption dungeon_text6"><b>В пути</b></a>
				<img class="strela st4" src="img/work/strela.png">
				<a class="caption dungeon_text7"><b>Выполнен</b></a>

				<form action="" method="POST" class="formes" name="Form" onsubmit="return validateForm()">
					
					<input class="place1" type="text" name="name" placeholder="Имя"></input>
					<input class="place2" type="text" name="contacts" placeholder="Почта или телефон"></input>
					<textarea class="place3" type="text" name="comments" placeholder="Пожелания или вопрос"></textarea>
					<center><input class="button1" type="submit"></center>
				</form>
				<img class="photo_6" src="img/work/free-icon-reindeer-2445186.png">
				<img class="photo_7" src="img/work/free-icon-deer-1063417.png">
			</article>
		</div>
	</div>

</body>
</html>
<!-- для текста -->
<style>
.big{
	font-size: calc(var(--index) * 2.2);
	position: absolute;
  	color: #ffffff; /* Цвет обычной ссылки */
}
.obiknoveni{
	font-size: calc(var(--index) * 1.3);
	position: absolute;
}
.caption{
	font-size: calc(var(--index) * 0.75);
	position: absolute;
  	color: #000000; /* Цвет обычной ссылки */
}
.captionmini{
	font-size: calc(var(--index) * 0.6);
	position: absolute;
  	color: #000000; /* Цвет обычной ссылки */
}
.dungeon_text1{
    /* Доставка под названием Найтхорм */
    color: #ffffff;
    margin-top: calc(var(--index) * 11.4);
  	margin-left: calc(var(--index) * 31.8);
}
.dungeon_text2{
    /* Как осуществляется доставка*/
    color: #000000;
    margin-top: calc(var(--index) * 14.4);
  	margin-left: calc(var(--index) * 23);
	text-align: center;
}
.dungeon_text3{
    /* Ожидает подтверждения*/
    color: #000000;
    margin-top: calc(var(--index) * 17.4);
  	margin-left: calc(var(--index) * 2);
	text-align: center;
}
.dungeon_text4{
    /* Подтверждён*/
    color: #1ecf9a;
    margin-top: calc(var(--index) * 25.4);
  	margin-left: calc(var(--index) * 2.5);
	text-align: center;
}
.dungeon_text5{
    /* Готовится*/
    color: #d9c91c;
    margin-top: calc(var(--index) * 32.4);
  	margin-left: calc(var(--index) * 3);
	text-align: center;
}
.dungeon_text6{
    /* В пути*/
    color: #d25018;
    margin-top: calc(var(--index) * 39.4);
  	margin-left: calc(var(--index) * 3.7);
	text-align: center;
}
.dungeon_text7{
    /* Выполнен*/
    color: #0fc72a;
    margin-top: calc(var(--index) * 46.4);
  	margin-left: calc(var(--index) * 3);
	text-align: center;
}
.dungeon_text10{
	/* Найтхорм */
    color: #ffffff;
	margin-top: calc(var(--index) * 8.3);
  	margin-left: calc(var(--index) * 27.6);
	text-align: left;
	z-index: 8;
}
</style>

<!-- для фотографий без эффектов -->
<style>
.photo_3{
	margin-top: calc(var(--index) * 1);
	margin-left: calc(var(--index) * 28);
	width: 15vw;
  	height: 11vw;
	position: absolute;
    z-index: 99;
}
.photo_6{
	margin-top: calc(var(--index) * 50);
	margin-left: calc(var(--index) * 7);
	width: 10vw;
  	height: 10vw;
	position: absolute;
	opacity: 0.5;
}
.photo_7{
	margin-top: calc(var(--index) * 59.8);
	margin-left: calc(var(--index) * 52);
	width: 10vw;
  	height: 10vw;
	position: absolute;
	opacity: 0.5;
}
.backgroundforest{
	position: absolute;
	width: 100vw;
}

.strela{
	position: absolute;
	height: 15vh;
	width: 0.7vw;
}
.st1{
	margin-top: calc(var(--index) * 20);
	margin-left: calc(var(--index) * 5);
}
.st2{
	margin-top: calc(var(--index) * 27);
	margin-left: calc(var(--index) * 5);
}
.st3{
	margin-top: calc(var(--index) * 34);
	margin-left: calc(var(--index) * 5);
}
.st4{
	margin-top: calc(var(--index) * 41);
	margin-left: calc(var(--index) * 5);
}
</style>

<style>

/* для обратной связи */
.formes{
	margin-left: calc(var(--index) * 26.5);
    z-index: 99;
	position: absolute;
}
.place1{
	margin-top: calc(var(--index) * 56);
	width: 22vw;
	height: 3vw;
	position: absolute;
	font-size: 1vw;
}
.place2{
	margin-top: calc(var(--index) * 59);
	width: 22vw;
	height: 3vw;
	position: absolute;
	font-size: 1vw;
}
.place3{
	margin-top: calc(var(--index) * 62);
	width: 22vw;
	height: 8vw;
	position: absolute;
	font-size: 1.1vw;
}
.button1{
	margin-top: calc(var(--index) * 69);
	width: 10vw;
	height: 3vw;
	color: black;
	background-color: #0000003e;
	justify-content: center;
	text-align: center;
	font-size: 1.1vw;
	margin-left: calc(var(--index) * 4.2);
	border-width: 0.01vw;
	border-color: black;
}

/* для панели переключения между страницами */
.up{
	margin-top: 0;
	width: 100vw;
	height: 8vh;
	position: absolute;
	z-index: 10;
}
.scroll{
	z-index: 99;
	width: 100vw;
	height: 4vw;
	position: absolute;
}
.reservhtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 3);
	margin-top: calc(var(--index) * 0.7);
}
.indexhtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 12);
	margin-top: calc(var(--index) * 0.7);
}
.contactshtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 19);
	margin-top: calc(var(--index) * 0.7);
}
.menuhtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 27);
	margin-top: calc(var(--index) * 0.7);
}
.galleryhtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 39);
	margin-top: calc(var(--index) * 0.7);
}
.deliveryhtml{
	text-shadow: 0 0 1vw #ffffff;
	text-decoration: none;
	color:rgb(255, 255, 255);
	margin-left: calc(var(--index) * 46);
	margin-top: calc(var(--index) * 0.7);
}
.main-article {
	--main-article-transform: translate3d(0, calc(var(--scrollTop) / -7.5), 0);
	min-height: 220vh;
	background-size: cover;
    background-color: white;
	color: var(--text);
	display: flex;
	position: relative;
	/* Update: */
	top: -1px;
	z-index: 10;
}
.forest{
    z-index: 0;
    width: 100vw;
    height: 100vh;
    position: absolute;
}
.river{
    z-index: 0;
    width: 100vw;
    height: 100vh;
    margin-top: 100vh;
    position: absolute;
}
</style>
