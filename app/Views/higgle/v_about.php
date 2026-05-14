<?php $this->extend('layout_front/template_front'); ?>
<?php $this->section('content'); ?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center"><?= $title ?></h1>
    <div class="bg-gray-700 rounded-lg shadow-md p-6">
        <?php foreach($about_higgle as $about) : ?>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <img src="/about/img_upload/<?= $about['gambar'] ?>" alt="About Higgle" class="w-full h-auto rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="text-xl font-semibold mb-4"><?= $about['judul'] ?></h2>
                <p class="text-white"><?= $about['about'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection() ?>