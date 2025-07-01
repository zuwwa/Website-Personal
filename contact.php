<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // GANTI EMAIL TUJUAN KE EMAIL KAMU
    $to      = "nazwaakmalia569@gmail.com";
    $subject = "Pesan dari Website Portofolio";

    $body    = "Pesan dari website portofolio:\n\n";
    $body   .= "Nama   : $name\n";
    $body   .= "Email  : $email\n";
    $body   .= "Pesan  :\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan. Coba lagi.'); window.location.href='index.html';</script>";
    }
}
?>
