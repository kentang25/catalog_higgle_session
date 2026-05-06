<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Higgle Session</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-black text-white">
    
    <?= $this->include('layout_front/nabvar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-6 text-center text-gray-500">
        <p>© 2026 Higgle Session</p>
    </footer>
  </body>
</html>