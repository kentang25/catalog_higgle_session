<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Higgle Session Admin</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #3f3f46;
            border-radius: 999px;
        }
    </style>

</head>

<body class="bg-[#0a0a0a] text-white overflow-x-hidden">

    <!-- Wrapper -->
    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside
            class="hidden lg:flex lg:flex-col w-72 bg-[#111111] border-r border-gray-800 shadow-2xl">

            <!-- Logo -->
            <div class="px-8 py-8 border-b border-gray-800">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14 rounded-2xl bg-white text-black flex items-center justify-center text-2xl shadow-lg">

                        <i class="fa-solid fa-skull-crossbones"></i>

                    </div>

                    <div>

                        <h1 class="text-xl font-black tracking-[4px] text-white">
                            HIGGLE
                        </h1>

                        <p class="text-xs uppercase tracking-[3px] text-gray-500">
                            Session Admin
                        </p>

                    </div>

                </div>

            </div>

            <!-- Navigation -->
            <div class="flex-1 overflow-y-auto px-5 py-6">

                <!-- Main -->
                <div class="mb-10">

                    <p class="text-xs uppercase tracking-[3px] text-gray-500 mb-4 px-3">
                        Main Menu
                    </p>

                    <ul class="space-y-2">

                        <li>
                            <a href="/admin"
                                class="flex items-center gap-4 bg-white text-black px-4 py-3 rounded-2xl font-semibold shadow-lg transition duration-300 no-underline">

                                <i class="fa-solid fa-chart-line text-lg"></i>

                                Dashboard

                            </a>
                        </li>

                        <li>
                            <a href="/admin/collection"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-shirt text-lg"></i>

                                Collections

                            </a>
                        </li>

                        <li>
                            <a href="/admin/about"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-circle-info text-lg"></i>

                                About Higgle

                            </a>
                        </li>

                    </ul>

                </div>

                <!-- Management -->
                <div class="mb-10">

                    <p class="text-xs uppercase tracking-[3px] text-gray-500 mb-4 px-3">
                        Management
                    </p>

                    <ul class="space-y-2">

                        <li>
                            <a href="#"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-image"></i>

                                Gallery

                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-tags"></i>

                                Categories

                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-users"></i>

                                Customers

                            </a>
                        </li>

                    </ul>

                </div>

                <!-- System -->
                <div>

                    <p class="text-xs uppercase tracking-[3px] text-gray-500 mb-4 px-3">
                        System
                    </p>

                    <ul class="space-y-2">

                        <li>
                            <a href="#"
                                class="flex items-center gap-4 text-gray-400 hover:bg-gray-900 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-gear"></i>

                                Settings

                            </a>
                        </li>

                        <li>
                            <a href="/logout"
                                class="flex items-center gap-4 text-red-400 hover:bg-red-500 hover:text-white px-4 py-3 rounded-2xl transition duration-300 no-underline">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Footer -->
            <div class="border-t border-gray-800 p-5">

                <div
                    class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-3xl p-5">

                    <div class="flex items-center gap-4 mb-4">

                        <div
                            class="w-12 h-12 rounded-2xl bg-white text-black flex items-center justify-center">

                            <i class="fa-solid fa-bolt"></i>

                        </div>

                        <div>

                            <h3 class="text-white font-semibold">
                                Underground Culture
                            </h3>

                            <p class="text-xs text-gray-500">
                                Black Metal / Punk / Hardcore
                            </p>

                        </div>

                    </div>

                    <p class="text-sm text-gray-400 leading-relaxed">
                        Manage your merchandise collections with a modern
                        underground dashboard experience.
                    </p>

                </div>

            </div>

        </aside>
        <!-- END SIDEBAR -->

        <!-- MAIN CONTENT -->
        <main class="flex-1 flex flex-col min-h-screen">

            <!-- TOPBAR -->
            <header
                class="sticky top-0 z-40 bg-[#111111]/90 backdrop-blur-xl border-b border-gray-800">

                <div class="flex items-center justify-between px-5 lg:px-8 py-5">

                    <!-- Left -->
                    <div>

                        <h2 class="text-2xl font-bold text-white">
                            Admin Dashboard
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            Welcome back to Higgle Session.
                        </p>

                    </div>

                    <!-- Right -->
                    <div class="flex items-center gap-4">

                        <!-- Search -->
                        <div class="hidden md:flex relative">

                            <input type="text"
                                placeholder="Search..."
                                class="bg-[#1a1a1a] border border-gray-700 rounded-2xl px-5 py-3 pl-12 text-sm text-white focus:outline-none focus:border-gray-500 w-72">

                            <i
                                class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"></i>

                        </div>

                        <!-- Profile -->
                        <div
                            class="w-12 h-12 rounded-2xl bg-white text-black flex items-center justify-center font-bold shadow-lg">

                            A

                        </div>

                    </div>

                </div>

            </header>
            <!-- END TOPBAR -->

            <!-- PAGE CONTENT -->
            <div class="flex-1 bg-[#0a0a0a]">

                <?= $this->include('layout_admin/navbar_admin'); ?>
                <?= $this->renderSection('content'); ?>

            </div>
            <!-- END PAGE CONTENT -->

            <!-- FOOTER -->
            <footer
                class="border-t border-gray-800 bg-[#111111] px-6 lg:px-8 py-5">

                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-4">

                    <p class="text-sm text-gray-500 text-center md:text-left">
                        © 2026 Higgle Session Admin Panel
                    </p>

                    <div class="flex items-center gap-4 text-gray-500">

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-instagram"></i>

                        </a>

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-discord"></i>

                        </a>

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-github"></i>

                        </a>

                    </div>

                </div>

            </footer>
            <!-- END FOOTER -->

        </main>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END WRAPPER -->

    <!-- Script -->
    <script src="<?= base_url() ?>js/animation.js"></script>

</body>

</html>