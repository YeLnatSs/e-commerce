<?php $this->load->view('globals/header'); ?>

<!-- Page Content -->
<div class="container">


    <?php $this->load->view('globals/sidebar'); ?>


    <div class="col-md-9">

        <div class="thumbnail">
            <img class="img-responsive" src="<?php echo $idgame->displayImage();?>" alt="">
            <div class="caption-full">
                <h4 class="pull-right">€<?php echo $idgame->prix;?></h4>
                <h4><a href="#"><?php echo $idgame->titre;?></a>
                </h4>
                <p><?php echo $idgame->descrip;?><a target="_blank" href="http://bootsnipp.com">Bootsnipp </a>.</p>
                <p>Want to make these reviews work? Check out
                    <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                    </strong>over at maxoffsky.com!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">3 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        4.0 stars
                    </p>
                </div>
            </div>
            <?= form_open("info/article/".$idgame->idproduit);?>
            <?= validation_errors();?>
                <fieldset>
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="who are you?" value="<?php set_value('username') ?>">
                        <?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate it</label>
                        <input type="number" class="form-control" id="rate" placeholder="Rate it" name="rate" value="<?php set_value('rate') ?>">
                        <?php echo form_error('rate', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="rate">What is on your mind?</label>
                        <textarea class="form-control" name='content' rows="3" placeholder="What is on your mind?" value="<?php set_value('content') ?>"></textarea>
                        <?php echo form_error('content', '<div class="alert alert-danger">', '</div>'); ?>
                    </div> 
                    <!-- methode 2 avec CODEIGNITER 
                    <div class="form-group"> -->
                   <!--<?php  
                        // $data=["name"=>'username',
                        // "placeholder"=>'who are you?',
                        // "class"=>"form_control",
                        // "value"=>set_value("username")];
                        //echo form_input($data);
                        ?>
                        faire pareil pour la note,contenu.
                    </div>-->
                    <div>
                    <button type="submit" name="submit" class="btn btn-danger" value="<?php set_value('submit') ?>">Confirm</button>
                </div>
                </fieldset>
            <?=form_close();?>
            <div class="well">

                <div class="text-right">
                    <a class="btn btn-success">Leave a Review</a>
                </div>

                <hr>
                    <?php var_dump($show) ?>
                <?php foreach ($show as $key => $value): ?>
                <div class="row">
                    <div class="col-md-12">
                        <span>Note: <?= $value->note;?>/5</span>
                        <!-- <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span> -->
                        <?= $value->auteur;?>
                        <span class="pull-right"><?= $value->date_comments;?></span>
                        <p><?= $value->contenu;?></p>
                    </div>
                </div>

                <hr>
                <?php endforeach ?>


            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

