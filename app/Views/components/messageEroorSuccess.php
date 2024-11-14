<?php if (session()->getFlashdata('errors')): ?>
  <div class="text-red-500 text-sm bg-red  p-5">
    <?php foreach (session()->getFlashdata('errors') as $error): ?>
      <p><?= esc($error) ?></p>
    <?php endforeach; ?>
  </div>
<?php endif;   ?>

<!-- -------------------------------sucess message--------------------------- -->
<?php if (session()->getFlashdata('success')): ?>
<div class="text-white  bg-green-400 p-5  text-sm">
  <?= (session()->getFlashdata('success'));?>
</div>
<?php endif; ?>
