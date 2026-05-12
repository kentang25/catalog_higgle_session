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
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Higgle Session</td>
                            <td class="px-4 py-2">Higgle Session adalah sebuah platform yang menyediakan berbagai macam koleksi musik dari berbagai genre. Kami berkomitmen untuk memberikan pengalaman mendengarkan musik yang menyenangkan dan berkualitas bagi para pengguna kami.</td>
                            <td class="px-4 py-2"><img src="/about/img_upload/higgle-session.jpg" alt="Gambar Higgle Session" class="w-32 h-auto"></td>
                            <td class="px-4 py-2">
                                <a href="#" class="!bg-yellow-500 text-white px-2 py-1 rounded-lg">Edit</a>
                                <a href="#" class="!bg-red-500 text-white px-2 py-1 rounded-lg ml-2">Delete</a>
                            </td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $this->endSection(); ?>