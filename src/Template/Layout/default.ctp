<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> - Jumpmaze Rankings Site
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css'); ?>
    <?= $this->Html->css('site.css'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<?= $this->element('menu'); ?>
	<h1><?= $this->fetch('title'); ?></h1>
	<?= $this->fetch('content'); ?>
</body>
</html>
