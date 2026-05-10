<?php $this->extend('layout_front/template_front') ?>
<?php $this->section('content') ?>

<section class="text-center px-6 py-20">
    <h2 class="text-4xl md:text-6xl font-extrabold mb-6">Sell Anything To Feed Your Ego!</h2>
    <p class="text-gray-600 mx-w-xl mx-auto mb-8">Collection of metal, punk, and underground band merch. Discover rare
        and iconic designs.</p>
    <button class="bg-white font-semibold text-black py-2 px-4 rounded-md cursor-pointer">View Collection</button>
</section>
<!-- end hero -->

<!-- Collection -->
<section class="py-8 px-4">
    <h3 class="text-center text-2xl font-bold mb-8">Collection Higgle Session</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach($higgle_session as $higgle) : ?>
        <!-- Card -->
        <div class="bg-gray-900 p-4 rounded-2xl">
            <img src="img_upload/<?= $higgle['thumbnail']; ?>" class="rounded-xl mb-4" alt="<?= $higgle['nama_band'] ?>" />
            <h4 class="font-semibold"><?= $higgle['nama_band'] ?></h4>
            <p class="text-gray-400 text-sm">Band Merch</p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- end collection -->

<!-- Banner -->
<section class="py-16 bg-gray-800 mt-20 text-center">
    <h4 class="text-3xl font-bold mb-4">Limited & Rare</h4>
    <p class="text-xm text-gray-600 mb-4">Some designs are hard to find. Grab them before they disappear.</p>
    <button class="bg-white text-black rounded-md py-2 px-4 cursor-pointer">Explore more</button>
</section>
<!-- end banner -->

<?php $this->endSection(); ?>