<?php include('config/data.php'); ?>
<section id="experience" class="max-w-4xl mx-auto py-16 px-6 text-white">
  <h2 class="text-4xl font-bold mb-6 text-primary">Experience</h2>
  <?php foreach ($experience as $exp): ?>
    <div class="mb-6 bg-gray-800 p-4 rounded-lg shadow border border-gray-700">
      <h3 class="text-xl font-semibold"><?= htmlspecialchars($exp['role']) ?> at <?= htmlspecialchars($exp['company']) ?> (<?= htmlspecialchars($exp['year']) ?>)</h3>
      <p class="text-gray-300"><?= htmlspecialchars($exp['desc']) ?></p>
    </div>
  <?php endforeach; ?>
</section>
