<?php $this->load->view('globals/header'); ?>
    <!-- Page Content -->
<div class="container">

    
    <?php $this->load->view('globals/sidebar'); ?>
 <div class="col-md-9">

    <div class="jumbotron">
        <h1><em><?=$idgame[0]->nom_marque?>!</em></h1>
       

    </div>
    <?php foreach ($idgame as $key => $value): ?>
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?= $value->titre;?><a href="<?=site_url('info/article/'.$value->idproduit.'') ?>"></a><span class="text-muted"> See for yourself.</span></h2>
          <h3><?= $value->prix;?> </h3>
          <p class="lead"><?= $value->descrip;?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo $value->displayImage();?> " data-holder-rendered="true">
        </div>
        <hr class="featurette-divider">
    </div>
    <?php endforeach ?>

       