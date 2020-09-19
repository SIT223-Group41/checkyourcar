<?php if (count($errors) > 0) :  ?>
	<div >
		<?php foreach ($errors as $error) : ?>
			<?php echo $error ?> 
		<?php endforeach ?>
	</div>
<?php endif ?>