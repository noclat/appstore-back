<?php $this->view('_header', [
	'title' => 'Page not found',
]) ?>


		<p>The page you are looking for is missing. <a href="<?= url('/') ?>">Back to home</a>.</p>


<?php $this->view('_footer') ?>
