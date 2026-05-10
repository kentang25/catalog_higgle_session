<?php $this->extend('layout_admin/template_admin') ?>
<?php $this->section('content') ?>

<div class="p-6">
    <div class="bg-gray-100 rounded-xl shadow-md p-6">
        <div class="flex">
            <h2 class="text-black font-semibold text-xl">Edit Data Collection</h2>
        </div>

        <div class="overflow-x-auto mt-6">
            <form action="/admin/update/<?= $higgle_edit['id_collection'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Band</label>
                    <input type="text" name="nama_band" value="<?= $higgle_edit['nama_band'] ?>" placeholder="Nama Band" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                 </div>

                 <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Thumbnail</label>
                    <input type="file" name="thumbnail" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white">
                    <input type="hidden" name="gambarLama" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white" value="<?= $higgle_edit['thumbnail'] ?>">
                 </div>
                <div class="mt-4">
                    <lable class="block text-sm font-semibold text-gray-700 mb-1">Tag</lable>
                    <input type="text" name="tag" value="<?= $higgle_edit['tag'] ?>" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Size</label>
                    <select name="size" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">-- Pilih Size --</option>
                        <option value="S" <?= $higgle_edit['size'] == 'S' ? 'selected' : '' ?>>S</option>
                        <option value="M" <?= $higgle_edit['size'] == 'M' ? 'selected' : '' ?>>M</option>
                        <option value="L" <?= $higgle_edit['size'] == 'L' ? 'selected' : '' ?>>L</option>
                        <option value="XL" <?= $higgle_edit['size'] == 'XL' ? 'selected' : '' ?>>XL</option>
                    </select>
                </div>
                 <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Kategori</label>
                    <select name="kategori" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="baju_band" <?= $higgle_edit['kategori'] == 'baju_band' ? 'selected' : '' ?>>Baju Band</option>
                        <option value="merch" <?= $higgle_edit['kategori'] == 'merch' ? 'selected' : '' ?>>Merch</option>
                     </select>
                </div>

                <button type="submit" class="inline-block !bg-green-500 hover:bg-green-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                    Update
                </button>
                <a href="/admin" class="inline-block !bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                    Cancel </a>
            </form>
        </div>
    </div>

</div>

<?php $this->endSection() ?>