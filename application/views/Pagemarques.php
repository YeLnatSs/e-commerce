<?php $this->load->view('globals/header'); ?>

    <!-- Page Content -->
    <div class="container">


            <?php $this->load->view('globals/sidebar'); ?>

            <div class="col-md-9">
 
               <div class="row">
            <?php foreach ($produits as $key => $value): ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=$value->displayImage()?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">€<?= $value->prix?></h4>
                                <h4><a href="<?= site_url('info/article/'.$value->idproduit.'') ?>"><?= $value->titre?></a>
                                </h4>
                                <p><?= word_limiter($value->descrip,3);?>.<p><a target="_blank" href="#">Détails</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    
            <?php endforeach ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

<?php $this->load->view('globals/footer'); ?>

