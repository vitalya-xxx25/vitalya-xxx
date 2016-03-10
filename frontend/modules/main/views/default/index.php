<section id="featured">
    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="/source/img/slides/1.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Modern Design</h3> 
                                <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="/source/img/slides/2.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Fully Responsive</h3> 
                                <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="/source/img/slides/3.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Clean & Fast</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <?php if (!empty($sections)) :?>
            <?php foreach ($sections as $chKey => $chunk) :?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php foreach ($chunk as $chItem) :?>
                                <div class="col-lg-3">
                                    <div class="box">
                                        <div class="box-gray aligncenter">
                                            <h4><?php echo $chItem['title']?></h4>
                                            <div class="icon">
                                                <i class="fa fa-desktop fa-3x"></i>
                                            </div>
                                            <p><?php echo $chItem['description']?></p>
                                        </div>
                                        <div class="box-bottom">
                                            <a href="#">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</section>