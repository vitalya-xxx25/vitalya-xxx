<footer>
    <?php
        if(\Yii::$app->user->isGuest) {
            echo \frontend\widgets\LoginWidget::widget();
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Vitalya-xxx 2016 All right reserved.</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
        </div>
    </div>
</footer>

