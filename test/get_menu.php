<?php
header('Content-Type: application/json'); // Mengatur header sebagai JSON

include 'db.php'; // Mengimpor file koneksi database

try {
    // Query untuk mengambil data dari tabel `menu`
    $query = $pdo->prepare("SELECT * FROM menu");
    $query->execute();
    
    // Mengambil semua data dari tabel dan menyimpannya dalam bentuk array asosiatif
    $menu_items = $query->fetchAll(PDO::FETCH_ASSOC);
    
    // Mengembalikan data dalam format JSON
    echo json_encode($menu_items);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
