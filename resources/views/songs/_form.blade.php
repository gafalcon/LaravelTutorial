<div class="form-group">
	<?= Form::label('title', 'Title') ?>
	<?= Form::text('title', null, array(
	'class' => 'form-control',
	'placeholder' => 'Song title'
	)) ?>
</div>

<div class="form-group">
	<?= Form::label('lyrics', 'Lyrics') ?>
	<?= Form::textarea('lyrics', null, [
	'class' => 'form-control',
	'placeholder' => 'enter the song\'s lyrics'
	]) ?>
</div>
<div class="form-group">
	<?= Form::label('slug', 'Slug', ['class' => 'class']) ?>
	<?= Form::text('slug', null, ['class'=> 'form-control']) ?>
</div>

