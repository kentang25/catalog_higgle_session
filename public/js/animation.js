document.addEventListener('DOMContentLoaded', function () {

    console.log("JS loaded");

    const btnOpen = document.getElementById('btn-open');
    const btnClose = document.getElementById('btn-close');
    const modal = document.getElementById('modal');

    if (!btnOpen) console.error("btn-open tidak ditemukan");
    if (!btnClose) console.error("btn-close tidak ditemukan");
    if (!modal) console.error("modal tidak ditemukan");

    if (btnOpen && btnClose && modal) {

        btnOpen.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        btnClose.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

    }

});