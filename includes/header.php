<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Portfolio</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">


  <!-- ✅ Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- ✅ Optional Custom Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1d4ed8', // blue-700
          }
        }
      }
    }
  </script>

  <!-- ✅ JavaScript for animations (you'll create this file) -->
  <script defer src="assets/js/animations.js"></script>
  <!-- Particle.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

</head>

<body class="bg-[#0f172a] text-white font-sans leading-relaxed relative overflow-x-hidden">

  <!-- ✅ Particle Background -->
  <div id="particles-js" class="absolute inset-0 -z-10"></div>

 <!-- Add this to your <head> to use Font Awesome icons -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>

<header class="sticky top-0 bg-[#0f172a]/70 backdrop-blur-md shadow-md z-50">
  <nav class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
  <h1 class="text-4xl font-pacifico text-blue-400 mr-10 whitespace-nowrap drop-shadow-md">
  Everything...Is Here
</h1>


    <ul class="flex space-x-8 text-gray-200 font-medium whitespace-nowrap">
      <li>
        <a href="#about" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-user"></i> <span>About Me</span>
        </a>
      </li>
      <li>
        <a href="#skills" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-code"></i> <span>My Skills</span>
        </a>
      </li>
      <li>
        <a href="#projects" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-folder-open"></i> <span>My Projects</span>
        </a>
      </li>
      <li>
        <a href="#education" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-graduation-cap"></i> <span>My Education</span>
        </a>
      </li>
      <li>
        <a href="#experience" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-briefcase"></i> <span>Or Experience..etc.</span>
        </a>
      </li>
      <li>
        <a href="#contact" class="hover:text-blue-400 transition flex items-center space-x-2">
          <i class="fas fa-envelope"></i> <span>Contact</span>
        </a>
      </li>
    </ul>
  </nav>
</header>


