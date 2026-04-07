<?php
// ------------------------
// Contoh Proses Form POST
// ------------------------
$nama = '';
$email = '';
$pesan = '';
$postError = [];
$postSuccess = false;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    // Validasi Sederhana
    if ($nama === ''){
        $postError[] = 'Nama harus diisi';
    }
    if ($email === ''){
        $postError[] = 'Email harus diisi';
    }elseif(Ifilter_var($email, FILTER_VALIDATE_EMAIL)){
        $postError[] = 'Format Email Tidak Valid';
    }
    if ($pesan === ''){
        $postError[] = 'Pesan harus diisi';
    }
    if (empty($postError)){
        $postSuccess = true;
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi dasar PHP Form - POST</title>
</head>
<body>
    <h2>Contoh proses Form POST</h2>
    <?php if (!empty($postError)): ?>
    <div class="error">
        <strong>Validasi gagal:</strong>
        <ul>
            <?php foreach ($postError as $error)
        </ul>

    </div>
</body>
</html>