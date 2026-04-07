<?php
// ----------------------
//  contoh GET
// ----------------------
$keyword = trim($_GET['keyword']??'');
$kategori = trim($_GET['kategori']??'semua');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi dasar PHP Form</title>
</head>
<body>
    <h2>1) Contoh Form GET</h2>
    <form method="GET" action="">
        <label for="keyword">keyword pencarian</label>
        <imput id="keyword" name="keyword" type="text"
        value="<?=htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8')?>"
        placeholder="Contoh Laptop">

        <label for="kategori">kategori</label>
        <select id="kategori" name="kategori">
            <option value="semua"<?=$kategori === 'semua' ? 'selected' : ''?>>semua</option>
            <option value="Elektronik"<?=$kategori === 'Elektronik' ? 'selected' : ''?>>Elektronik</option>
            <option value="Pakaian"<?=$kategori === 'Pakaian' ? 'selected' : ''?>>Pakaian</option>
            <option value="Makanan"<?=$kategori === 'Makanan' ? 'selected' : ''?>>Makanan</option>
    </select>
    <button type="submit">Cari</button>
</form>

<?php if (isset($_GET['keyword']) || isset ($_GET['kategori'])): ?>
    <div class="result">
        <strong>hasil GET:</strong><br>
        Keyword: <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8')?><br>
        kategori: <?= htmlspecialchars($kategori, ENT_QUOTES, 'UTF-8')?>
        <hr/>
        Keyword: <?php echo $keyword; ?><br>
    </div>
    <?php endif; ?>
    <h2>2) <a href="index2,php">Contoh form POST</a></h2>
</body>
</html>