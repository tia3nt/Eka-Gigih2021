
<?php
  $menus = array('ABOUT'=>'./profile.php','TRAINING TRACK'=>'./track.php','TRAINING GROUND'=>'./ground.php','GALERY'=>'./galery.php','CONTACT ME'=>'./contact.php');
?>

<div class="menu">
    <ul>
      <img width="7%" height="90px" src="../images/Logo Eka.png" alt="Eka Dewi">
      <?php foreach ($menus as $menu => $content) { ?>
        <li>
            <a href=<?php echo $content ?>>
              <?php echo $menu ?>
            </a>
        </li>
      <?php }  ?>
    </ul>

</div>

<style>


</style>
