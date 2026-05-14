<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Higgle Session</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-black text-white scroll-smooth">

    <?= $this->include('layout_front/nabvar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer id="contact" class="border-t border-gray-800 bg-black text-gray-400 py-12 px-6">

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Brand -->
            <div>
                <h2 class="text-2xl font-bold text-white tracking-wide mb-4">
                    HIGGLE SESSION
                </h2>

                <p class="text-sm leading-relaxed text-gray-500">
                    Independent band merchandise & underground culture inspired by
                    black metal, punk, hardcore, and streetwear aesthetics.
                </p>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">
                    Contact
                </h3>

                <div class="space-y-3 text-sm">

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-gray-300"></i>
                        <span>higglesession@gmail.com</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-brands fa-instagram text-gray-300"></i>
                        <span>@higglesession</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-location-dot text-gray-300"></i>
                        <span>Indonesia</span>
                    </div>

                </div>
            </div>

            <!-- Social -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">
                    Follow Us
                </h3>

                <div class="flex gap-4">

                    <a href="#"
                        class="w-11 h-11 rounded-full border border-gray-700 flex items-center justify-center hover:bg-white hover:text-black transition duration-300">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>

                    <a href="#"
                        class="w-11 h-11 rounded-full border border-gray-700 flex items-center justify-center hover:bg-white hover:text-black transition duration-300">
                        <i class="fa-solid fa-envelope text-lg"></i>
                    </a>

                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-800 mt-10 pt-6 text-center text-sm text-gray-600">
            <p>© 2026 Higgle Session — All Rights Reserved.</p>
        </div>

    </footer>
</body>

</html>