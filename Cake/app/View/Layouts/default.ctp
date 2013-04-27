<?php
/**
 *
 * PHP 5
 *
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<?php echo $this->Facebook->html(); ?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	


	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link('Crazy But True', '/'); ?>
			<!-- Clickable Nav -->
		<div class="click-nav">
			<ul class="no-js">
				<li>
					<a class="clicker"><?php echo $this->Html->image('gear.png', array('alt' => 'Settings', 'border' => '0'));?></a>
					<ul>
						<li><?php echo $this->Html->link('Contact', '/'); ?></li>
						<li><?php echo $this->Html->link('Bugs', '/'); ?></li>
						<li><?php echo $this->Html->link('Privacy', '/posts/terms'); ?></li>
						<li><?php echo $this->Html->link('Help', '/'); ?></li>
						
					</ul>
				</li>
			</ul>
		</div>
</h1>
		<!-- /Clickable Nav -->
		      	
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
<?php
/*		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
*/
?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
<?php echo $this->Facebook->init(); ?>
<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
		$(function() {
			// Clickable Dropdown
			$('.click-nav > ul').toggleClass('no-js js');
			$('.click-nav .js ul').hide();
			$('.click-nav .js').click(function(e) {
				$('.click-nav .js ul').slideToggle(200);
				$('.clicker').toggleClass('active');
				e.stopPropagation();
			});
			$(document).click(function() {
				if ($('.click-nav .js ul').is(':visible')) {
					$('.click-nav .js ul', this).slideUp();
					$('.clicker').removeClass('active');
				}
			});
		});
		</script>
</html>
