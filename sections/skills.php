<?php include('config/data.php'); ?>
<section id="skills" class="max-w-4xl mx-auto py-16 px-6 text-white">
  <h2 class="text-4xl font-bold mb-6 text-primary">Skills</h2>
  <ul class="grid grid-cols-2 sm:grid-cols-3 gap-4">
    <?php foreach ($skills as $skill): ?>
      <li class="bg-gray-800 shadow rounded-md px-4 py-4 text-center border border-gray-600 flex flex-col items-center justify-center">
        <i class="<?= htmlspecialchars($skill['icon']) ?> text-4xl mb-2"></i>
        <span><?= htmlspecialchars($skill['name']) ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
