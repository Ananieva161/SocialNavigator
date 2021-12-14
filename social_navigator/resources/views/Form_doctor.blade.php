<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Запись к врачу
		</title>		
		<meta charset="utf-8">		
		<link rel="stylesheet" href="/css/qwerty.css">
		<style>
		form {
			margin-left: 5%;	
		}		
		.form_grid{
			display: grid;
			grid-template-columns: 1fr 1fr;
			margin-top: 5vh;
		}		
		fieldset {
			border: 1px solid #CDCDCD;
			width: 90%;
			margin-left: 2%;
			margin-right: 5%;
			margin-top: 1.5%;
			height:69vh;
			border-radius:20px;
			padding-top: 10vh;
			padding-left: 15vh;
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
			box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
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
			width: 37%;
		}
		.form_right {
			margin-left:-2vw;
		}		
		#button {
			font-size:20px; 
			font-family: 'Gardens'; 
			/*width: 90%;*/
			margin-left: 57%;
			margin-top: 5%; 
			background: rgba(0, 203, 132, 0.2);
			width: 200px;
		}		
		#button:hover {
			background: rgba(0, 203, 132, 0.4);
		}
		legend {
			font-size:26px; 
			margin-left: 63vw; /*Надо поменять для более большого экрана*/
			margin-top: 1vh; 
			font-family: 'Gardens';
		}
		p.text_in_form {
			margin-left:0px; 
			margin-top:-4vh; 
			font-family: 'Gardens'; 
			font-size:20px;
		}		
		@media (max-height: 580px) {
			input, textarea, select { margin:10px 0; }
			fieldset { padding-top: 4vh; }
			#button { margin-top: 10%; }
		}
		@media (max-width: 1280px) {
			fieldset { padding-left: 10vh; }
			#button { margin-left: 58%; }
			.stroke { margin-left: -1vw; }
			.nav-container { margin-left: 10vw; }
			legend { margin-left: 63vw; }
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
			<form action="/result_doctor_form/" method="get" name="my_form" id="form">
			<fieldset>
			<legend>Запись к врачу</legend><br>
			<p class="text_in_form">Пожалуйста, заполните форму:</p>
			
				<div class = "form_grid">			
					<div class = "form_left">			
						<div>
							<label for="name">ФИО*:</label>
							<input type="text" id="name" name="user_name" pattern="^[А-Яа-яЁё\s]+$" autofocus required>
						</div>
			
						<div>
							<label for="institute">Институт:</label>
							<select size="1" id="institute" name="institute">
								<option selected disabled></option>
								<option value="ИМИТ">ИМИТ</option>
								<option value="ИЭП">ИЭП</option>
								<option value="ИБЭА">ИБЭА</option>
								<option value="ИИЯ">ИИЯ</option>
								<option value="ИИПСН">ИИПСН</option>
								<option value="ИЛГСН">ИЛГСН</option>
								<option value="ИПП">ИПП</option>
								<option value="ИФКСТ">ИФКСТ</option>
								<option value="ИФ">ИФ</option>
								<option value="МИ">МИ</option>
								<option value="ФТИ">ФТИ</option>
							</select>
						</div>
			
						<div>
							<label for="course">Курс:</label>
							<input type="number" id="course" name="user_course" value="" min="1" max="6" step="1">
						</div>
			
						<div>
							<label for="group">Группа:</label>
							<input type="text" id="group" name="user_group">
						</div>			
					</div>
			
					<div class = "form_right">			
						<div>
							<label for="tel_number">Номер телефона:</label>
							<input type="text" id="tel_number" name="user_tel_number" pattern="[+0-9]{11,12}">
						</div>
			
						<div>
							<label for="login">Электронная почта*:</label>
							<input type="email" id="login" name="user_login" required>
						</div>
			
						<div>
							<label for="date_time">Дата и время приёма*:</label>
							<select size="1" id="date_time" name="user_date_time" required>
								<option selected disabled></option>
								<option value="2021-11-10 17:00:00">10.11.2021 17:00</option>
								<option value="2021-11-11 13:00:00">11.11.2021 13:00</option>
								<option value="2021-11-11 15:00:00">11.11.2021 15:00</option>
								<option value="2021-11-11 17:00:00">11.11.2021 17:00</option>
								<option value="2021-11-12 13:00:00">12.11.2021 13:00</option>
							</select>
						</div>
			
						<input id="button" type="submit" value="Записаться">
			
					</div>
				</div>
			</fieldset>
			</form>
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