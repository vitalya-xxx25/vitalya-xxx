<?php
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use frontend\assets\AppAsset;
    use common\widgets\Alert;

    \frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>    
<div id="wrapper">
	<?=$this->render("//common/header") ?>
	<?=$content ?>
	<?=$this->render("//common/footer") ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>