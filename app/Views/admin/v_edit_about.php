<?php $this->extend('layout_admin/template_admin'); ?>
<?php $this->section('content'); ?>

<div class="p-6">
    <div class="bg-gray-100 rounded-xl shadow-md p-6">
        <div class="flex">
            <h2 class="text-xl font-semibold text-black">Edit About Higgle</h2>
        </div>

        <div class="overflow-x-auto mt-6">
            <form action="/admin/about/update/<?= $edit_about['id_about'] ?> " method="POST" enctype="multipart/form-data">
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Judul</label>
                    <input type="text" name="judul" value="<?= $edit_about['judul'] ?>" placeholder="Judul" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                
                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">About</label>
                    <textarea name="about" placeholder="About" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"><?= $edit_about['about'] ?></textarea>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Gambar</label>
                    <input type="file" name="gambar" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white">
                    <input type="hidden" name="gambarLama" value="<?= $edit_about['gambar'] ?>">
                </div>

                <button type="submit" class="inline-block !bg-green-500 hover:bg-green-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                    Update </button>
                <a href="/admin/about" class="inline-block !bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">Back</a>
            </form>
        </div>
    </div>

</div>

<?php $this->endSection() ?>