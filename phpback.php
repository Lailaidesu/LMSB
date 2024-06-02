<?php
if(isset($_GET['download_cover_letter'])) {
    $file = 'filepdf/BALAGTAS, Lara Mae_S._CV.pdf';
    if(file_exists($file)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="BALAGTAS, Lara Mae_S._CV.pdf"');
        readfile($file);
        exit;
    } else {
        echo 'File not found.';
    }
}
?>