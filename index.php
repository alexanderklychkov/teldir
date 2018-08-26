<?php
 	require_once "db.php";
 	$listPhones = getPhonesList(); 
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Телефонный справочник</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<header>
  		<section id="nav">
  			<div class="nav-box">
  				<div class="nav-logo">
  					<a href="index.php"><i class="fa fa-address-book" aria-hidden="true"></i> Телефонный справочник</a>
  				</div>
  				<div class="nav-search">
  					<input id="search" type="text" name="search" placeholder="Поиск контакта">
  				</div>
  			</div>
  		</section>
  	</header>

  	<main>
  		<section id="main">
  			<div class="main-box">
  				<div class="main-addcontact">
  					<h2>Добавить контакт</h2>
  					<form action="functions/add.php" method="GET">
  						<input type="text" name="fio" placeholder="ФИО" required>
  						<input type="text" name="phone" placeholder="Номер телефона" required>
  						<input type="text" name="address" placeholder="Адрес" required><br>
  						<input type="submit" name="do_add" value="Добавить">
  					</form>
  				</div>
  				<div class="main-contacts">
  					<table border="1">
  						<tr>
  							<!-- <th>№</th> -->
  							<th width="30%">ФИО</th>
  							<th width="30%">Номер телефона</th>
  							<th width="30%">Адрес</th>
  							<th></th>
  							<th></th>
  						</tr>
  						<?php 

  							for ($i = 0; $i < sizeof($listPhones); $i++) { ?>
								<tr>
									
									<td><?=$listPhones[$i][1]?></td>
									<td><?=$listPhones[$i][2]?></td>
									<td><?=$listPhones[$i][3]?></td>
									<td><a class="black" href="../functions/edit.php?id=<?=$listPhones[$i][0]?>"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
									<td><a class="black" href="../functions/del.php?id=<?=$listPhones[$i][0]?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								</tr>
  						<?php } ?>
  					</table>
  				</div>
  			</div>
  		</section>
  	</main>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>