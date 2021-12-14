

<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">	

		<link rel="stylesheet" href="/css/qwerty.css" />
		<style>
		@media (max-width: 1280px) {
			.nav-container { margin-left: 10vw; }
			.stroke { margin-left: -1vw; }
		}
		.notification {
			margin-left: 2vw;
		}
		h1 {
			font-family: 'Gardens';
		}
		h2 {
			font-family: 'Gardens';
		}
		p {
			font-family: 'Gardens';
			font-size: 18px;
		}
		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "/">
					<img src = "/images/petrsu.png" width = "55" height = "55" alt = "symbol" id = "img_1">
				</a>
			</div>
			
			<div class = "stroke">
				
				<div class = "PetrSU">
					ПетрГУ
				</div>
						
				<div class = "Sn">
					Социальный навигатор
				</div>
			</div>
			
			<div class = "nav">
				<div class = "nav-container">
					<ul>
						<li id = "Main"><a href="./">Главная страница</a></li>
						<li id = "Students"><a href="#">Студентам</a>
							<ul>
								<li><a href="./Navi1">Запись к врачу</a></li>
								<li><a href="./href">Полезные ресурсы</a></li>
								<li><a href="./buildings">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class = "bady">
			<div class='notification'>
				<h1>Вы записаны:</h1> 
							<p>Доктор: {{ $doctor }}</p>
				<h2>Детали записи:</h2>
							<p>ФИО студента: {{ $name }}</p>
							<p>Институт: {{ $institute }}</p>
							<p>Курс: {{ $course }}</p>
							<p>Группа: {{ $group }}</p>
							<p>Номер телефона: {{ $phone_number }}</p>
							<p>Электронная почта: {{ $email }}</p>
							<p>Дата и время приёма: {{ $date }}</p>
			</div>
		</div>
		<div class = "footer">
			<div class = "number">
				8*********9 - Copyright
			</div>
			
			<div class = "copy">
				Copyright &#169;2021
			</div>
		</div>
		
	</body>

</html>