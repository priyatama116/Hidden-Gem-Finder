<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "rafaelgratiusdeus@gmail.com"; 
    $subject = "Pesan dari Form Website";
    
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-type: text/plain; charset=UTF-8";

    $body = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Metode tidak valid.";
}
?>
