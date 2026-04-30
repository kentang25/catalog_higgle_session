<?php $this->extend('layout_admin/template_admin') ?>
<?php $this->section('content') ?>

<div class="p-6">
    <div class="bg-gray-100 rounded-xl shadow-md p-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Admin</h2>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                + Tambah Data
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">Nama Band</th>
                        <th class="px-4 py-3 text-left">Gambar</th>
                        <th class="px-4 py-3 text-left">Kategori</th>
                    </tr>
                </thead>

                <tbody class="bg-white text-gray-700">
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3">JASON</td>
                        <td class="px-4 py-3">IMG.jpeg</td>
                        <td class="px-4 py-3">Baju Band</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>

<?php $this->endSection(); ?>