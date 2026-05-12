<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Higgle Session</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-black text-white">
    
    <?= $this->include('layout_front/nabvar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-6 text-center text-gray-500">
      <p class="mb-2">Follow us on social media:</p>
      <div class="flex justify-center space-x-4 mb-4">
        <a href="#" class="text-gray-400 hover:text-gray-200 transition-colors duration-300">
          <i class="fa-brands fa-square-instagram w-xl h-auto"></i>      
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-200 transition-colors duration-300">
          <i class="fa-solid fa-envelope"></i>
        </a>
        </div>
        <p>© 2026 Higgle Session</p>
    </footer>
  </body>
</html>