<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Оснащение ПетрГУ
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty.css">
		<style>
		.stroke {
			margin-left: -1vw;
		}
		.nav-container {
			margin-left: 10vw;
		}
		
		.for_form {
			border: 1px solid #CDCDCD;
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			margin-top: 1.5%;
			height:69vh;
			border-radius:20px;
			padding-top: 3vh;
		}
		form {
			margin-left: 5%;	
		}
		
		.form_grid{
			display: grid;
			grid-template-columns: 1fr 1fr;
		}
		
		fieldset {
		}
		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		
		.bady {
			grid-template-columns: 1fr;
		}
		
		input, textarea, select {
			/* Убедимся, что все поля имеют одинаковые настройки шрифта
			По умолчанию в textarea используется моноширинный шрифт */
			font: 1em sans-serif;

			/* Определим размер полей */
			width: 300px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999;
			
			padding: 10px;
			margin:20px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
		}

		input:focus, textarea:focus, select:focus {
			/* Дополнительная подсветка для элементов в фокусе */
			border-color: #000;
		}

		textarea {
			/* Выравним многострочные текстовые поля с их текстами-подсказками */
			vertical-align: top;

			/* Предоставим пространство для ввода текста */
			height: 5em;
		}
		label {
			font-family: 'Gardens'; 
			font-size:18px;
			/* Определим размер и выравнивание */
			display: inline-block;
			width: 20%;
			text-align: left;
		}

		.form_right label {
			width: 35%;
		}

		#hp{
		margin: -60px 100px 100px 0px;	
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
		<div class = "for_form" style="margin-top:-100px">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:10Svh; font-family: 'Gardens'; font-size:30px;"><b>Первый корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src='/images/building1.jpg' align="right" style="width: 350px; height: 350px" id='hp'>
			</div>
			
			</div>
		</form>
		</div>
		</div>
		
		<div class = "bady">
		<div class = "for_form">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:-4Svh; font-family: 'Gardens'; font-size:30px;"><b>Второй корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src='/images/building2.jpg' align="right" style="width: 350px; height: 350px" id='hp'>
			</div>
			
			</div>
		</form>
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