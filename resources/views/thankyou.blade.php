<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <h1>Thank You for Your Reservation!</h1>
        <p>We have received your reservation. Your payment is being processed.</p>
    </div>

    <script>
        function showThankYouAlert() {
            // Menggunakan SweetAlert2 untuk menampilkan pesan "Thank You!"
            Swal.fire({
                title: "Thank You!",
                icon: "success",
                text: "We have received your reservation. Your payment is being processed.",
            });
        }

        // Panggil fungsi showThankYouAlert() ketika halaman dimuat
        window.onload = showThankYouAlert;
    </script>
</x-guest-layout>
