<?php $this->extend('layout_admin/template_admin'); ?>
<?php $this->section('content'); ?>

<div class="p-6">
    <div class="bg-gray-100 rounded-xl shadow-md p-6">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold text-black">About Higgle</h2>
            <button id="btn-open" class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                + Tambah Data
            </button>
        </div>

        <!-- Modal -->

        <div id="modal" class="fixed inset-0 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                <h3 class="text-lg font-semibold mb-4">Tambah Data About Higgle</h3>
                <form action="/admin/about/save" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Judul</label>
                        <input type="text" name="judul" placeholder="Judul" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">About</label>
                        <textarea name="about" placeholder="About" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Gambar</label>
                        <input type="file" name="gambar" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white">
                    </div>

                    <button type="submit" class="inline-block !bg-green-500 hover:bg-green-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                        Simpan
                    </button>
                    <button type="button" id="btn-close" class="inline-block !bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                        Batal
                    </button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Judul</th>
                        <th class="px-4 py-2 border">About</th>
                        <th class="px-4 py-2 border">Gambar</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach($about_higgle as $about) : ?>
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-4 py-4 text-center font-medium text-gray-700">
                            <?= $about['id_about'] ?>
                        </td>

                        <td class="px-4 py-4 font-semibold text-gray-800 whitespace-nowrap">
                            <?= $about['judul'] ?>
                        </td>

                        <td class="px-4 py-4 text-gray-600 leading-relaxed max-w-md">
                            <?= $about['about'] ?>
                        </td>

                        <td class="px-4 py-4">
                            <img src="/about/img_upload/<?= $about['gambar'] ?>" alt="Gambar Higgle Session"
                                class="w-32 h-24 object-cover rounded-lg shadow-md border">
                        </td>

                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3">
                                <a href="/admin/about/edit/<?= $about['id_about'] ?>" class="inline-block !bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow transition duration-200 no-underline">
                                    Edit
                                </a>

                                <a href="/admin/about/delete/<?= $about['id_about'] ?>" class="inline-block !bg-red-500 hover:bg-red-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow transition duration-200 no-underline">
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

<?php $this->endSection(); ?>