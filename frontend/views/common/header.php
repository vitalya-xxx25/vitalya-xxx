<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span>V</span>italya-xxx</a>
            </div>
            <div class="navbar-collapse collapse ">
                <?php
                    echo yii\bootstrap\Nav::widget([
                        'options' => ['class' => 'nav navbar-nav'],
                        'items'   => [
                            ['label' => 'Главная', 'url' => '/', 'options' => ['class' => 'active']],
                            ['label' => 'Подписаться', 'url' => '#', 'linkOptions' => ['data-toggle' => 'modal', 'data-target' => '#subscribeModal']],
                            ['label' => 'Логин', 'url' => '#', 'visible' => \Yii::$app->user->isGuest, 'linkOptions' => ['data-toggle' => 'modal', 'data-target' => '#loginModal']],
                        ],
                    ]);
                ?>
            </div>
        </div>
    </div>
</header>

