<?php include "./inc/header.php"; ?>
<h2>Les Gagnants</h2>

<div class="row">

  <?php foreach ($winners as $winner) : ?>
    <div class="col-sm-3" style="margin-bottom:20px">
      <h4 class="cut"><?php echo (($categories[$winner['category_id']]['title'])) ?></h4>
      <div style="position:relative">
        <img src="<?php echo $winner['pic_url'] ?>" class="img-responsive">
      </div>
      <div class="cut nomine">
        <?php echo (($winner['name'])) ?>
        <small class="cut">&nbsp;<?php echo ($winner['info']) ?></small>
      </div>
    </div>
  <?php endforeach; ?>

</div>

<h2>Les meilleurs joueurs</h2>

<ol>
  <?php foreach ($bestplayers as $player) : ?>
    <li><?php echo utf8_encode($player['screen_name']) ?> : <?php echo $player['score'] ?> pts</li>
  <?php endforeach; ?>
</ol>

<?php include "./inc/footer.php"; ?>