<?php $this->load->view('globals/header'); ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
      <?php $this->load->view('globals/sidebar'); ?>

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1><em>Select your brands !</em></h1>
            <p>Right here, you will find all new and hot brands ! Enjoy Yourself!! Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">
            <?php foreach ($newBrands as $key => $value): ?>
            <div class="col-xs-6 col-lg-4">
              <h2><?= $value->nom_marque ?></h2>
              <p><?= $value->dscp_marque ?></p>
              <p><a class="btn btn-default" href="<?=site_url('Info/brands/'.$value->idmarque.'')?>" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <?php endforeach ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->

      <hr>

<?php $this->load->view('globals/footer'); ?>