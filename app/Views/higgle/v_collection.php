<?php $this->extend('layout_front/template_front') ?>
<?php $this->section('content') ?>

<section class="text-center px-6 py-20">
    <div class="justify-center text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Collection Of Higgle Session</h1>
        <p class="text-md font-semibold text-gray-400">Find the band t-shirt you want to fulfill your ego!</p>
    </div>
</section>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
    <?php foreach($higgle_collection as $collection) : ?>

    <?php if($collection === null) : ?>
        <p class="text-center text-extrabold text-4xl">No collections available.</p>
    <?php else : ?>
    <div class="bg-gray-900 p-20 rounded-2xl">
        <img src="img_upload/<?= $collection['gambar']; ?>" class="rounded-xl mb-4" alt="<?= $collection['nama_band'] ?>" />
        <h4 class="font-semibold"><?= $collection['nama_band'] ?></h4>
        <p class="text-gray-400 text-sm">Band Merch</p>
    </div>
    <?php endif; ?>

    <?php endforeach; ?>
</div>

<?php $this->endSection(); ?>