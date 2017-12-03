<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Sistema principal de gestion de informacion</div>
  <div class="panel-body">
  	<?php echo $output; ?>
  </div>
</div>