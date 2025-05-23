// Ambil elemen tombol
const scrollTopBtn = document.getElementById('scrollTopBtn');

// Tampilkan tombol jika scroll > 500px
window.addEventListener('scroll', () => {
    if (document.documentElement.scrollTop > 500) {
    scrollTopBtn.style.display = 'block';
    } else {
    scrollTopBtn.style.display = 'none';
    }
});

// Fungsi untuk scroll ke atas saat tombol diklik
scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
    top: 0,
    behavior: 'smooth'
    });
});