<p>Una nueva consulta ha sido agregada al sistema por: <strong><?php echo $reported_by; ?></strong></p>

<blockquote>
	<?php echo $content; ?>
</blockquote>

<p>Para ingresar a la consulta: <?php echo anchor('tickets/view/' . $ticket_id); ?></p>