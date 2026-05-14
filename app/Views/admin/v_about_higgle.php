<?php $this->extend('layout_admin/template_admin'); ?>
<?php $this->section('content'); ?>

<div class="min-h-screen bg-gray-100 p-4 md:p-8">

    <!-- Main Container -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="border-b border-gray-200 px-6 py-5">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800">
                        About Higgle
                    </h1>

                    <p class="text-gray-500 text-sm mt-1">
                        Manage your about page content and information.
                    </p>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-3">

                    <!-- Search -->
                    <div class="relative">

                        <input type="text"
                            placeholder="Search about content..."
                            class="w-full sm:w-72 pl-10 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    </div>

                    <!-- Add Button -->
                    <button id="btn-open"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow-md transition duration-300">

                        <i class="fa-solid fa-plus mr-2"></i>
                        Tambah Data

                    </button>

                </div>

            </div>

        </div>

        <!-- Table -->
        <div class="p-6">

            <div class="overflow-x-auto rounded-2xl border border-gray-200">

                <table class="min-w-full">

                    <!-- Head -->
                    <thead class="bg-gray-900 text-white">

                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold">
                                ID
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-semibold">
                                Judul
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-semibold">
                                About
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-semibold">
                                Gambar
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-semibold">
                                Aksi
                            </th>
                        </tr>

                    </thead>

                    <!-- Body -->
                    <tbody class="divide-y divide-gray-200 bg-white">

                        <?php foreach($about_higgle as $about) : ?>

                        <tr class="hover:bg-gray-50 transition duration-200">

                            <!-- ID -->
                            <td class="px-6 py-5 font-medium text-gray-700">
                                #<?= $about['id_about'] ?>
                            </td>

                            <!-- Judul -->
                            <td class="px-6 py-5">

                                <div>
                                    <h3 class="font-semibold text-gray-800 text-lg">
                                        <?= $about['judul'] ?>
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1">
                                        Higgle Session Information
                                    </p>
                                </div>

                            </td>

                            <!-- About -->
                            <td class="px-6 py-5">

                                <p class="text-gray-600 leading-relaxed max-w-lg line-clamp-4">
                                    <?= $about['about'] ?>
                                </p>

                            </td>

                            <!-- Image -->
                            <td class="px-6 py-5">

                                <img src="/about/img_upload/<?= $about['gambar'] ?>"
                                    alt="<?= $about['judul'] ?>"
                                    class="w-36 h-24 object-cover rounded-xl shadow-md border">

                            </td>

                            <!-- Action -->
                            <td class="px-6 py-5">

                                <div class="flex flex-wrap gap-3">

                                    <a href="/admin/about/edit/<?= $about['id_about'] ?>"
                                        class="!bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium px-4 py-2 rounded-xl shadow transition duration-300 no-underline">

                                        <i class="fa-solid fa-pen mr-1"></i>
                                        Edit

                                    </a>

                                    <a href="/admin/about/delete/<?= $about['id_about'] ?>"
                                        class="!bg-red-500 hover:bg-red-600 text-white text-sm font-medium px-4 py-2 rounded-xl shadow transition duration-300 no-underline">

                                        <i class="fa-solid fa-trash mr-1"></i>
                                        Delete

                                    </a>

                                </div>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<!-- MODAL -->
<div id="modal"
    class="hidden fixed inset-0 z-50 bg-black/60 backdrop-blur-sm items-center justify-center p-4 overflow-y-auto">

    <div class="bg-white w-full max-w-2xl rounded-3xl shadow-2xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gray-900 text-white px-8 py-5 flex items-center justify-between">

            <div>
                <h2 class="text-2xl font-bold">
                    Tambah About Higgle
                </h2>

                <p class="text-sm text-gray-300 mt-1">
                    Create new about page information.
                </p>
            </div>

            <!-- Close -->
            <button id="btn-close"
                class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>

        <!-- Form -->
        <form action="/admin/about/save"
            method="POST"
            enctype="multipart/form-data"
            class="p-8 space-y-6">

            <!-- Judul -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Judul
                </label>

                <input type="text"
                    name="judul"
                    placeholder="Masukkan judul"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">

            </div>

            <!-- About -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    About
                </label>

                <textarea name="about"
                    rows="6"
                    placeholder="Masukkan deskripsi about..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"></textarea>

            </div>

            <!-- Image -->
            <div>

                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload Gambar
                </label>

                <input type="file"
                    name="gambar"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white">

            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-end gap-4 pt-4">

                <button type="button"
                    id="btn-close-2"
                    class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100 transition">

                    Cancel

                </button>

                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl shadow-lg transition">

                    <i class="fa-solid fa-floppy-disk mr-2"></i>
                    Simpan Data

                </button>

            </div>

        </form>

    </div>

</div>

<!-- SCRIPT -->
<script>
    const modal = document.getElementById('modal');
    const btnOpen = document.getElementById('btn-open');
    const btnClose = document.getElementById('btn-close');
    const btnClose2 = document.getElementById('btn-close-2');

    btnOpen.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    btnClose.addEventListener('click', closeModal);
    btnClose2.addEventListener('click', closeModal);

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
</script>

<?php $this->endSection(); ?>