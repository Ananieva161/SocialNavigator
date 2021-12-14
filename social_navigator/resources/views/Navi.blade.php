<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">	

		<link rel="stylesheet" href="/css/qwerty.css" />
	</head>


</html>

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
								<li><a href="./1">Полезные ресурсы</a></li>
								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
			<div class = "Left">
				<p id = "nameLeft">
					Новости
				</p>
			
				
				@foreach ($news as $s)
					@if ($s->id_news == 1)
					<div class = "oneRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$s->news_title}}
						</div>
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw;">
							{{$s->news_text}}
						</div>
					</div>
					@endif
					@if ($s->id_news != 1)
						<div class = "twoRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$s->news_title}}
						</div>
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw;">
							{{$s->news_text}}
						</div>
					</div>
					@endif
				@endforeach
				<div style = 'margin-top: 3vh; width:0.9vh;'></div>
			</div>
			
			<div class = "Right">
			
				<p id = "nameRight">
					Объявления
				</p>
				<div style = 'margin-top: 5.9vh; width:0.9vh;'></div>
				@foreach ($ads as $q)			
					<div class = "twoRight">
						<div class = "Teext" style = "padding-top:1.5vh;">
							{{$q->ad_title}}
						</div>
						<div class = "sss" style = "padding-top:3vh; padding-right: 1vw;">
							{{$q->ad_text}}
						</div>
					</div>
				@endforeach
				<div style = 'margin-top: 3vh; width:0.9vh;'></div>
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
