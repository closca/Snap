<?php  $this->load->view('assets/inc/header'); ?>

<!-- navbar -->
<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<?php echo anchor('dashboard', '<img src="' . $this->resource->img('logo.png') . '" class="logo" alt="" />', array('class' => 'brand')); ?>

			<ul class="nav">

				<li><?php echo anchor('#', 'Guía de Usuario'); ?></li>
				<li><?php echo anchor('#', 'Preguntas Frecuentes'); ?></li>
				<li><?php echo anchor('#', 'Soporte'); ?></li>

			</ul>

			<?php if ($this->init->hasSession()): ?>

				<p class="navbar-text pull-right">Sesión iniciada como <strong><?php echo $this->session->userdata('name'); ?></strong> &mdash; <?php echo anchor('dashboard', 'ir a area de cliente'); ?> | <?php echo anchor('logout', 'salir'); ?></p>

			<?php else: ?>

				<?php echo form_open('login', array('class' => 'navbar-form pull-right')); ?>

					<input type="text" class="span2" name="username" placeholder="Usuario" />
					<input type="password" class="span2" name="password" placeholder="Contraseña" />
					<button class="btn submit"><?php echo icon('signin'); ?> Iniciar Sesión</button>

				<?php echo form_close(); ?>

			<?php endif; ?>

		</div>

	</div>

</div>

<!-- content -->
<?php echo $content; ?>

<!-- footer -->
<?php $this->load->view('assets/inc/footer'); ?>