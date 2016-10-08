<?php include("classes/Hoofding.class.php"); ?>
<?php include("classes/Nieuws.class.php"); ?>
<div class="col-xs-12 col-sm-9">
  <p class="pull-right visible-xs">
    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><span class="span-offcanvas glyphicon glyphicon-chevron-right"></span></button>
  </p>
  <!-- Main well -->
  <div class="well well-lg">
    <h1>Chiro Don Bosco</h1>
    <div>
      <?php new Hoofding($db); ?>
    </div>
  </div>
  <!-- Activity panel -->
  <?php new Nieuws($db); ?>
</div>
