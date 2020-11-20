<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ff6cc33864.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

	<div id="wrapper">
		
		<div id="picker">

			<div class="calendar">
				<header>
					<a href="#" class="arrow previous"><i class="fa fa-arrow-left"></i></a>
					<div class="month-title">Novembro</div>
					<a href="#" class="arrow following"><i class="fa fa-arrow-right"></i></a>
				</header>

				<div class="days">
					<table>
						<tr>
							<th>Dom</th>
							<th>Seg</th>
							<th>Ter</th>
							<th>Qua</th>
							<th>Qui</th>
							<th>Sex</th>
							<th>Sab</th>
						</tr>

						<tr>
							<td class="previous">29</td>
							<td class="previous">30</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						<tr>
							<td>6</td>
							<td>7</td>
							<td>8</td>
							<td>9</td>
							<td>10</td>
							<td>11</td>
							<td>12</td>
						</tr>
						<tr>
							<td>13</td>
							<td>14</td>
							<td>15</td>
							<td>16</td>
							<td>17</td>
							<td>18</td>
							<td>19</td>
						</tr>
						<tr>
							<td>20</td>
							<td>21</td>
							<td>22</td>
							<td>23</td>
							<td>24</td>
							<td>25</td>
							<td>26</td>
						</tr>
						<tr>
							<td>27</td>
							<td>28</td>
							<td>29</td>
							<td>30</td>
							<td>31</td>
							<td class="following">1</td>
							<td class="following">2</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="hours">
				<header>Horário</header>
				<div class="time-selection">
					<span class="description">Horários disponíveis</span>
					<ul>
						<li><a href="#" class="time-option"><span class="icon"><i class="fa fa-clock"></i></span> <span class="hour">9:00</span></a></li>
						<li><a href="#" class="time-option"><span class="icon"><i class="fa fa-clock"></i></span> <span class="hour">11:00</span></a></li>
						<li><a href="#" class="time-option"><span class="icon"><i class="fa fa-clock"></i></span> <span class="hour">13:00</span></a></li>
					</ul>
				</div>

				<div class="submit-scheduling">
					<a href="#">Agendar <i class="fa fa-check"></i></a>
				</div>
			</div>

		</div>


	</div>
	
	<script>																					
		var days = document.getElementsByTagName("td");

		for(i=0; i<days.length; i++){
			days[i].onclick = function(){
				for(i2=0; i2<days.length; i2++){
					days[i2].classList.remove("selected");
				}
				this.classList.toggle("selected");
			}
		}

		var hours = document.getElementsByClassName("time-option");

		for(i=0; i<hours.length; i++){
			hours[i].onclick = function(){
				for(i2=0; i2<hours.length; i2++){
					hours[i2].classList.remove("selected");
				}
				this.classList.toggle("selected");
			}
		}

	</script>
</body>
</html>
