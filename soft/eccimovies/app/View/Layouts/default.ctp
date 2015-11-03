<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'ECCI Movies' ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery-1.11.3.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header class="page">
			<div class="row">

				<!-- LOGO DE LA PÁGINA -->

				<div class="col-md-2">
					<?php
					echo $this->Html->link(
						$this->Html->image(
							'movies-logo.jpg',
							array(
								'alt' => 'Bienvenido a ECCI Movies',
								'class' => 'img-rounded',
								'style' => 'width:200px',
								'id' => 'principal-header-img'
							)
						),
						array('controller'=>'pages', 'action' => 'home', 'display'),
						array('target' => '_self', 'escape' => false)
					);
					?>
				</div>

				<!-- NOMBRE DE LA PÁGINA -->

				<div class="col-md-6" id="principal-header-text">

					<div class="row">
						<div class="col-md-12">
							<h1>ECCI Movies</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3>All you're looking at one click</h3>
						</div>
					</div>

				</div>

				<!-- FORMULARIO -->

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12" id="principal-header-nav">
							<nav id="header-nav">
								<ul>
									<!--LOGIN -->
									<li id="login">
										<?php echo $this->Html->link(
											'<span class="glyphicon glyphicon-log-in">                                             </span> LOGIN ',
											array('controller'=>'users', 'action'=>'login'),
											array('escape'=>false));
										?>
									</li>

									<!-- SIGNUP -->

									<li id="signup">
										<?php echo $this->Html->link(
											'<span class="glyphicon glyphicon-user" id="signup-button">                                                </span>SIGN UP ',
											array('controller'=>'users','action'=>'signup'),
											array('escape'=>false));
										?>
									</li>

									<!--CARRITO-->
									<li>
										<?php echo $this->Html->link(
											'<span class="glyphicon glyphicon-shopping-cart"></span>Cart ',
											array('controller'=>'pages','action' => 'home','display'),
											array('target' => '_self', 'escape' => false));
										?>
									</li>
								</ul>
							</nav>
						</div>
					</div>

					<!--BUSCAR -->

					<div class="row">
						<div class="col-md-12" id="principal-nav-search">

						 <!-- BOTÓN DE BUSCAR -->
							<?php
								echo $this->Form->create(
									'Product',
									array(
										'url'=> array('controller' => 'products', 'action'=>'buscar'),
										'type' => 'post',
										'id' => 'indexform',
										'class'=>'form-inline',
										'inputDefaults' => array('label'=>false, 'div'=>false)
									)
								);

								echo "<div class='form-group' id='search'>";

								echo $this->Form->input(' ',array(
									'options' => array('Title','Actor','Director'),
									'empty' => 'All',
									'class'=>'form-control btn btn-default dropdown-toggle',
									'data-toggle'=> 'dropdown',
									'name'=>'filter',
									'id'=>'search-filter'
								));

								echo $this->Form->input(
									'search',
									array(
										'name' => 'name',
										'type' => 'search',
										'class'=> 'form-control',
										'placeholder'=>'Search',
										'id' => 'search-text'
									)
								);

								echo "</div>";

								echo $this->Form->button(
									'<span class="glyphicon glyphicon-search" aria-hidden="true" id="search-btn"></span>',
									array('type'=>'submit', 'class'=>'btn btn-default')
								);

								echo $this->Form->end();

								echo "<p id = 'text'> </p>"
							?>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<footer>
		</footer>
	</div>
<!--
	<?php echo $this->element('sql_dump'); ?>
-->
</body>
</html>
