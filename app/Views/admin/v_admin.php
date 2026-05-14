<?php $this->extend('layout_admin/template_admin') ?>
<?php $this->section('content') ?>

<div class="min-h-screen bg-gray-100 p-4 md:p-8">

    <!-- Container -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="border-b border-gray-200 px-6 py-5">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        Collections Dashboard
                    </h1>
                    <p class="text-sm text-gray-500 mt-1">
                        Manage your band merchandise collections.
                    </p>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-3">

                    <!-- Search -->
                    <div class="relative">
                        <input type="text"
                            placeholder="Search collection..."
                            class="w-full sm:w-72 pl-10 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>

                    <!-- Button -->
                    <button id="btn-open"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow-md transition duration-300">

                        <i class="fa-solid fa-plus mr-2"></i>
                        Tambah Data

                    </button>

                </div>

            </div>

        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-6 bg-gray-50">

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-200">
                <p class="text-sm text-gray-500">Total Collections</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    <?= count($higgle_session) ?>
                </h2>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-200">
                <p class="text-sm text-gray-500">Band Merch</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    120
                </h2>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-200">
                <p class="text-sm text-gray-500">New Upload</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    15
                </h2>
            </div>

            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-200">
                <p class="text-sm text-gray-500">Categories</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    2
                </h2>
            </div>

        </div>

        <!-- Table -->
        <div class="p-6">

            <div class="overflow-x-auto rounded-2xl border border-gray-200">

                <table class="min-w-full">

                    <thead class="bg-gray-900 text-white">

                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Band</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Thumbnail</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Category</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Action</th>
                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-200 bg-white">

                        <?php foreach($higgle_session as $higgle) : ?>

                        <tr class="hover:bg-gray-50 transition">

                            <td class="px-6 py-4 font-medium text-gray-700">
                                #<?= $higgle['id_collection'] ?>
                            </td>

                            <td class="px-6 py-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800">
                                        <?= $higgle['nama_band'] ?>
                                    </h3>

                                    <p class="text-sm text-gray-500">
                                        Underground Collection
                                    </p>
                                </div>
                            </td>

                            <td class="px-6 py-4">

                                <img src="/img_upload/<?= $higgle['thumbnail'] ?>"
                                    alt="<?= $higgle['nama_band'] ?>"
                                    class="w-20 h-20 rounded-xl object-cover shadow">

                            </td>

                            <td class="px-6 py-4">

                                <span class="inline-block bg-gray-900 text-white text-xs px-3 py-1 rounded-full">
                                    <?= $higgle['kategori'] ?>
                                </span>

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex flex-wrap gap-3">

                                    <a href="/admin/edit/<?= $higgle['id_collection'] ?>"
                                        class="!bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm shadow transition no-underline">

                                        <i class="fa-solid fa-pen mr-1"></i>
                                        Edit

                                    </a>

                                    <a href="/admin/delete/<?= $higgle['id_collection'] ?>"
                                        class="!bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm shadow transition no-underline">

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

    <div class="bg-white w-full max-w-3xl rounded-3xl shadow-2xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gray-900 text-white px-8 py-5 flex items-center justify-between">

            <div>
                <h2 class="text-2xl font-bold">
                    Tambah Collection
                </h2>

                <p class="text-sm text-gray-300 mt-1">
                    Upload your newest band merchandise collection.
                </p>
            </div>

            <button id="btn-close"
                class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 transition">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>

        <!-- Form -->
        <form method="POST" action="/admin/save" enctype="multipart/form-data"
            class="p-8 space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Nama Band -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Band
                    </label>

                    <input type="text"
                        name="nama_band"
                        placeholder="Masukkan nama band"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Tag -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Tag
                    </label>

                    <input type="text"
                        name="tag"
                        placeholder="metal, punk, hardcore"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Thumbnail -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Thumbnail
                    </label>

                    <input type="file"
                        name="thumbnail"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white">
                </div>

                <!-- Gallery -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Gallery Images
                    </label>

                    <input type="file"
                        name="gambar[]"
                        multiple
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white">
                </div>

                <!-- Size -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Size
                    </label>

                    <select name="size"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        <option value="">-- Pilih Size --</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>

                    </select>
                </div>

                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Kategori
                    </label>

                    <select name="kategori"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        <option value="">-- Pilih Kategori --</option>
                        <option value="baju_band">Baju Band</option>
                        <option value="merch">Merch</option>

                    </select>
                </div>

            </div>

            <!-- Button -->
            <div class="flex flex-col sm:flex-row justify-end gap-4 pt-4">

                <button type="button"
                    id="btn-close-2"
                    class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100 transition">

                    Cancel

                </button>

                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl shadow-lg transition">

                    <i class="fa-solid fa-floppy-disk mr-2"></i>
                    Submit Collection

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