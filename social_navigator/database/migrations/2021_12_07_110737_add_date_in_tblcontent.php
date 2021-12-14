<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDateInTblcontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tblcontent')->insert(
			['page_title' => 'Главная страница',
			 'page_status' => true,
			 'content' => '<body class = "Grid">
	
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
			<div class = "Left">
				<p id = "nameLeft">
					Новости
				</p>
			
				<div class = "oneRight">
					<p class = "Teext">
						Новость 1
					</p>
					<p class = "sss">Какое-то новость</p>
				</div>
				
				<div class = "twoRight">
					<p class = "Teext">
						Новость 2
					</p>
					<p class = "sss">Какое-то новость</p>
				</div>
			</div>
			
			<div class = "Right">
			
				<p id = "nameRight">
					Объявления
				</p>
			
				<div class = "oneRight">
					<p class = "Teext">
						Объявление 1
					</p>
					<p class = "sss">Какое-то объявление</p>
				</div>
				
				<div class = "twoRight">
					<p class = "Teext">
						Объявление 2
					</p>
					<p class = "sss">Какое-то объявление</p>
				</div>
				
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
		
	</body>',
			 'date_create' => '2021-12-07',
			 'category' => 'static',
			 'scripts' => '<link rel="stylesheet" href="/css/qwerty.css" />'
			 ]
		);
            
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tblContent')->where('page_title', '=' ,'Главная страница')->delete();
    }
}
