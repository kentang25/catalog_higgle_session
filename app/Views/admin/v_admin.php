<?php $this->extend('layout_admin/template_admin') ?>
<?php $this->section('content') ?>

<div class="p-6">
    <div class="bg-gray-100 rounded-xl shadow-md p-6">

        <!-- Header -->
        <!-- Modal Background -->
        <!-- BUTTON -->
         <div class="flex justify-between">
            <h2 class="text-xl font-semibold text-black">Collections Data</h2>
             <button id="btn-open" class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-3">
                 + Tambah Data
             </button>
         </div>

        <!-- MODAL -->
        <div id="modal" class="hidden fixed inset-0 bg-gray-900/10 z-50 items-center justify-center">

            <div class="bg-white w-full max-w-md p-6 rounded-xl shadow-lg">

                <h3 class="text-xl font-semibold mb-4">Tambah Data Band</h3>
                <div class="space-y-4">

                    <!-- Nama Band -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Nama Band
                        </label>
                        <input type="text" name="nama_band" placeholder="Masukkan nama band"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <!-- Gambar -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Gambar
                        </label>
                        <input type="file" name="gambar"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-white">
                    </div>

                    <!-- Kategori -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Kategori
                        </label>
                        <select name="kategori"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="baju_band">Baju Band</option>
                            <option value="merch">Merch</option>
                        </select>
                    </div>

                </div>

                <a href="#" class="inline-block !bg-green-500 hover:bg-green-600 text-white px-4 py-2 mt-5 rounded-lg shadow !no-underline transition">
                    Submit
                </a>
                <button id="btn-close" class="py-2 px-2 bg-red-400 mt-5 rounded-lg shadow-sm text-white">Close</button>

            </div>
        </div>
        <!-- Modal -->

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