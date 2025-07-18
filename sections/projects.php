<?php include('config/data.php'); ?>
<section id="projects" class="max-w-5xl mx-auto py-16 px-6 text-white">
  <h2 class="text-4xl font-bold mb-6 text-primary">Projects</h2>
  <div class="grid md:grid-cols-2 gap-6">
    <?php foreach ($projects as $project): ?>
      <div class="bg-gray-800 text-white shadow-md rounded-lg p-6 border border-gray-700">
        <h3 class="text-2xl font-semibold"><?= htmlspecialchars($project['title']) ?></h3>
        <p class="text-sm text-gray-400 mb-2"><strong>Tools:</strong> <?= htmlspecialchars($project['tools']) ?></p>
        <div class="space-x-4 mt-3">
          <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="text-blue-400 hover:underline">Live Demo</a>
          <a href="<?= htmlspecialchars($project['source']) ?>" target="_blank" class="text-blue-400 hover:underline">Source Code</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
