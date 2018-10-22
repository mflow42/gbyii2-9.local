<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.10.2018
 * Time: 22:18
 */
?>
<div class="user_history">
  <h2>История просмотров</h2>
  <?php if (is_array($history)): ?>
    <ol>
      <?php foreach ($history as $item): ?>
        <li><a href="#"><?= $item ?></a></li>
      <?php endforeach ?>
    </ol>
  <?php else: ?>
    <div><?= $history ?></div>
  <?php endif; ?>
</div>