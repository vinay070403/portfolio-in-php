document.addEventListener("DOMContentLoaded", () => {
  const text = ["Frontend Developer", "Backend Developer", "Full Stack Developer"];
  let i = 0, j = 0, current = "", isDeleting = false;
  const typingElement = document.getElementById("typing");

  function type() {
    if (!typingElement) return;

    if (!isDeleting && j <= text[i].length) {
      current = text[i].slice(0, j++);
    } else if (isDeleting && j >= 0) {
      current = text[i].slice(0, j--);
    }

    typingElement.textContent = current;

    if (j === text[i].length) {
      isDeleting = true;
      setTimeout(type, 1000);
    } else if (isDeleting && j === 0) {
      isDeleting = false;
      i = (i + 1) % text.length;
      setTimeout(type, 300);
    } else {
      setTimeout(type, isDeleting ? 50 : 100);
    }
  }

  type();

  // Init particles.js
  if (document.getElementById("particles-js")) {
    particlesJS.load('particles-js', 'assets/js/particles-config.json', function () {
      console.log('particles.js config loaded');
    });
  }
});
