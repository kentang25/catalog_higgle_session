<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Higgle Session | Admin Login</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

</head>

<body class="bg-black overflow-hidden">

    <!-- Background -->
    <div class="fixed inset-0">

        <!-- Gradient -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-black via-zinc-950 to-neutral-900">
        </div>

        <!-- Blur Circle -->
        <div
            class="absolute top-[-120px] left-[-120px] w-96 h-96 bg-white/5 rounded-full blur-3xl">
        </div>

        <div
            class="absolute bottom-[-150px] right-[-100px] w-[30rem] h-[30rem] bg-gray-500/10 rounded-full blur-3xl">
        </div>

        <!-- Noise -->
        <div class="absolute inset-0 opacity-[0.03]"
            style="background-image: url('https://grainy-gradients.vercel.app/noise.svg');">
        </div>

    </div>

    <!-- Container -->
    <div class="relative min-h-screen flex items-center justify-center px-5">

        <!-- Card -->
        <div
            class="w-full max-w-6xl grid lg:grid-cols-2 bg-[#0f0f0f]/90 backdrop-blur-2xl border border-gray-800 rounded-[2rem] overflow-hidden shadow-2xl">

            <!-- LEFT SIDE -->
            <div
                class="hidden lg:flex flex-col justify-between p-12 bg-gradient-to-br from-zinc-950 to-black border-r border-gray-800">

                <!-- Logo -->
                <div>

                    <div class="flex items-center gap-4 mb-8">

                        <div
                            class="w-16 h-16 rounded-3xl bg-white text-black flex items-center justify-center text-2xl shadow-xl">

                            <i class="fa-solid fa-skull-crossbones"></i>

                        </div>

                        <div>

                            <h1
                                class="text-3xl font-black tracking-[6px] text-white">
                                HIGGLE
                            </h1>

                            <p
                                class="text-xs uppercase tracking-[4px] text-gray-500 mt-1">
                                Session Admin
                            </p>

                        </div>

                    </div>

                    <div class="max-w-md">

                        <h2
                            class="text-5xl leading-tight font-black text-white">

                            Underground
                            Merchandise
                            Dashboard.

                        </h2>

                        <p
                            class="text-gray-400 mt-6 leading-relaxed text-lg">

                            Manage collections, gallery, about pages,
                            and underground culture merchandise in one
                            modern admin panel.

                        </p>

                    </div>

                </div>

                <!-- Bottom -->
                <div>

                    <div class="flex items-center gap-4 mb-5">

                        <div
                            class="w-12 h-12 rounded-2xl bg-white/10 border border-gray-700 flex items-center justify-center">

                            <i class="fa-solid fa-bolt text-white"></i>

                        </div>

                        <div>

                            <h3 class="text-white font-semibold">
                                Black Metal / Punk / Hardcore
                            </h3>

                            <p class="text-sm text-gray-500">
                                Higgle Session Culture
                            </p>

                        </div>

                    </div>

                    <div class="flex items-center gap-4 text-gray-500">

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-instagram text-xl"></i>

                        </a>

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-discord text-xl"></i>

                        </a>

                        <a href="#"
                            class="hover:text-white transition duration-300">

                            <i class="fa-brands fa-github text-xl"></i>

                        </a>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="p-8 sm:p-12 lg:p-16 flex items-center">

                <div class="w-full">

                    <!-- Mobile Logo -->
                    <div class="lg:hidden flex items-center gap-4 mb-10">

                        <div
                            class="w-14 h-14 rounded-2xl bg-white text-black flex items-center justify-center text-xl">

                            <i class="fa-solid fa-skull-crossbones"></i>

                        </div>

                        <div>

                            <h1
                                class="text-2xl font-black tracking-[4px] text-white">
                                HIGGLE
                            </h1>

                            <p
                                class="text-xs uppercase tracking-[3px] text-gray-500">
                                Session Admin
                            </p>

                        </div>

                    </div>

                    <!-- Heading -->
                    <div class="mb-10">

                        <p
                            class="text-sm uppercase tracking-[4px] text-gray-500 mb-3">

                            Welcome Back

                        </p>

                        <h2
                            class="text-4xl font-black text-white leading-tight">

                            Sign In Admin

                        </h2>

                        <p class="text-gray-500 mt-4 leading-relaxed">

                            Login to manage Higgle Session collections
                            and dashboard system.

                        </p>

                    </div>

                    <!-- Form -->
                    <form action="/admin/login/process" method="POST"
                        class="space-y-6">

                        <!-- Email -->
                        <div>

                            <label
                                class="block text-sm font-medium text-gray-400 mb-3">

                                Email Address

                            </label>

                            <div class="relative">

                                <input type="email"
                                    name="email"
                                    placeholder="admin@higglesession.com"
                                    class="w-full bg-[#151515] border border-gray-800 rounded-2xl px-5 py-4 pl-14 text-white placeholder:text-gray-600 focus:outline-none focus:border-white transition">

                                <i
                                    class="fa-solid fa-envelope absolute left-5 top-1/2 -translate-y-1/2 text-gray-500"></i>

                            </div>

                        </div>

                        <!-- Password -->
                        <div>

                            <div
                                class="flex items-center justify-between mb-3">

                                <label
                                    class="text-sm font-medium text-gray-400">

                                    Password

                                </label>

                                <a href="#"
                                    class="text-sm text-gray-500 hover:text-white transition duration-300 no-underline">

                                    Forgot Password?

                                </a>

                            </div>

                            <div class="relative">

                                <input type="password"
                                    name="password"
                                    placeholder="••••••••"
                                    class="w-full bg-[#151515] border border-gray-800 rounded-2xl px-5 py-4 pl-14 text-white placeholder:text-gray-600 focus:outline-none focus:border-white transition">

                                <i
                                    class="fa-solid fa-lock absolute left-5 top-1/2 -translate-y-1/2 text-gray-500"></i>

                            </div>

                        </div>

                        <!-- Remember -->
                        <div
                            class="flex items-center justify-between gap-4">

                            <label
                                class="flex items-center gap-3 cursor-pointer">

                                <input type="checkbox"
                                    class="w-4 h-4 rounded border-gray-700 bg-[#151515]">

                                <span class="text-sm text-gray-400">
                                    Remember me
                                </span>

                            </label>

                        </div>

                        <!-- Button -->
                        <button type="submit"
                            class="w-full bg-white hover:bg-gray-200 text-black font-bold py-4 rounded-2xl transition duration-300 shadow-2xl">

                            <i class="fa-solid fa-right-to-bracket mr-2"></i>

                            Sign In Admin

                        </button>

                    </form>

                    <!-- Footer -->
                    <div
                        class="mt-10 pt-6 border-t border-gray-800 text-center">

                        <p class="text-sm text-gray-600">

                            © 2026 Higgle Session Admin Panel

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>