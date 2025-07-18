<<section id="contact" class="max-w-3xl mx-auto py-16 px-6 transition duration-700 ease-out">

  <h2 class="text-4xl font-bold mb-6 text-primary">Contact</h2>
  <form action="contact-handler.php" method="POST" class="space-y-4">
    <input type="text" name="name" placeholder="Your Name" required class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:outline-none" />
    <input type="email" name="email" placeholder="Your Email" required class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:outline-none" />
    <textarea name="message" placeholder="Your Message" required class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:outline-none h-32 resize-none"></textarea>
    <button type="submit" class="bg-primary text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Send</button>
  </form>
</section>
