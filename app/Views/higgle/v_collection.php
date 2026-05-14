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
    <div class="bg-gradient-to-b from-gray-900 to-black rounded-3xl overflow-hidden shadow-2xl border border-gray-800 hover:scale-[1.02] transition-all duration-300 group">

        <!-- Image -->
        <div class="overflow-hidden">
            <img src="/img_upload/<?= $collection['thumbnail']; ?>" alt="<?= $collection['nama_band'] ?>"
                class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
        </div>

        <!-- Content -->
        <div class="p-6">

            <!-- Category Badge -->
            <div class="flex items-center justify-between mb-4">
                <span
                    class="bg-red-600 text-white text-xs px-3 py-1 rounded-full uppercase tracking-wider font-semibold shadow-lg">
                    <?= $collection['kategori'] ?>
                </span>

                <span class="text-gray-500 text-sm italic">
                    Band Merch
                </span>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-bold text-white tracking-wide mb-2">
                <?= $collection['nama_band'] ?>
            </h2>

            <!-- Tagline -->
            <p class="text-gray-400 italic text-sm mb-5 leading-relaxed">
                <?= $collection['tag'] ?>
            </p>

            <!-- Divider -->
            <div class="border-t border-gray-800 my-4"></div>

            <!-- Info -->
            <div class="flex items-center justify-between text-sm">

                <div>
                    <p class="text-gray-500 uppercase tracking-wide text-xs">
                        Available Size
                    </p>

                    <p class="text-white font-semibold mt-1">
                        <?= $collection['size'] ?>
                    </p>
                </div>

                <!-- Button -->
                <a href="#"
                    class="bg-white text-black px-5 py-2 rounded-xl font-semibold hover:bg-red-600 hover:text-white transition duration-300 shadow-lg">
                    View Detail
                </a>

            </div>

        </div>

    </div>
    <?php endif; ?>

    <?php endforeach; ?>
</div>

<?php $this->endSection(); ?>