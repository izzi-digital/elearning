$(document).ready(function() {
    // Array berisi kalimat yang akan ditampilkan
    const sentences = [
        "MA Al Anwar",
        "Gondanrojo",
        "Kalipang",
        "Sarang ✨"
    ];

    let sentenceIndex = 0; // Indeks kalimat saat ini
    let charIndex = 0; // Indeks karakter saat ini
    let isDeleting = false; // Status apakah sedang menghapus atau mengetik
    const typingSpeed = 150; // Kecepatan mengetik (ms)
    const erasingSpeed = 75; // Kecepatan menghapus (ms)
    const delayBetweenSentences = 1000; // Jeda sebelum mulai mengetik kalimat baru

    function typeWriter() {
        const currentSentence = sentences[sentenceIndex];
        const h1 = $('#typewriter');

        // Jika sedang mengetik
        if (!isDeleting) {
            h1.text(currentSentence.substring(0, charIndex + 1));
            charIndex++;

            // Jika kalimat selesai diketik
            if (charIndex === currentSentence.length) {
                isDeleting = true;
                setTimeout(typeWriter, delayBetweenSentences); // Tunggu sejenak lalu hapus
            } else {
                setTimeout(typeWriter, typingSpeed);
            }
        }
        // Jika sedang menghapus
        else {
            h1.text(currentSentence.substring(0, charIndex - 1));
            charIndex--;

            // Jika kalimat sudah terhapus
            if (charIndex === 0) {
                isDeleting = false;
                sentenceIndex = (sentenceIndex + 1) % sentences.length; // Pindah ke kalimat berikutnya
                setTimeout(typeWriter, typingSpeed);
            } else {
                setTimeout(typeWriter, erasingSpeed);
            }
        }
    }

    // Mulai animasi
    setTimeout(typeWriter, typingSpeed);

    const quotes = [
            "Informatika adalah seni mengubah kerumitan menjadi kesederhanaan melalui logika dan kode.",
            "Mempelajari informatika bukan hanya belajar tentang masa kini, tetapi membangun fondasi untuk masa depan yang belum terbayangkan.",
            "Di dunia yang digerakkan oleh data, mereka yang mengerti informatika adalah para navigatornya.",
            "Satu baris data adalah bisikan, jutaan baris adalah pengetahuan. Informatika mengajarkan kita cara mendengarkannya.",
            "Jangan hanya menggunakan teknologi, pahamilah cara kerjanya. Itulah inti dari semangat informatika.",
            "Inti dari informatika bukanlah tentang komputer, tetapi tentang cara berpikir untuk memecahkan masalah secara sistematis.",
            "Setiap bug adalah teka-teki, dan setiap programmer adalah detektif. Informatika melatih kita untuk tidak pernah menyerah pada misteri.",
            "Algoritma yang elegan adalah bukti bahwa solusi paling efisien seringkali adalah yang paling indah.",
            "Kode adalah puisi. Setiap algoritma adalah sajak, dan setiap program adalah sebuah cerita yang dieksekusi oleh mesin.",
            "Informatika adalah jembatan yang menghubungkan imajinasi manusia dengan kekuatan eksekusi mesin."
        ];

        // Dapatkan elemen <p> dari HTML
        const quoteElement = document.getElementById('quote-display');
        
        let currentIndex = 0;

        function changeQuote() {
            // 1. Buat teks menghilang (fade out)
            quoteElement.style.opacity = 0;

            // 2. Tunggu transisi selesai (500ms), lalu ganti teks dan tampilkan kembali
            setTimeout(() => {
                // Ganti teks dengan kutipan berikutnya
                currentIndex = (currentIndex + 1) % quotes.length; // Modulo untuk looping
                quoteElement.textContent = quotes[currentIndex];
                
                // 3. Buat teks muncul kembali (fade in)
                quoteElement.style.opacity = 1;
            }, 500); // Waktu ini harus sama dengan durasi transisi di CSS
        }

        // Tampilkan kutipan pertama segera saat halaman dimuat
        quoteElement.textContent = quotes[currentIndex];

        // Atur interval untuk mengganti kutipan setiap 5 detik (5000 milidetik)
        setInterval(changeQuote, 10000);
});

