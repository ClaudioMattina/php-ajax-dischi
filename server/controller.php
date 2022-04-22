<?php 
/* importo data */
include __DIR__ . '/data.php';

/* trasformo l'array $albums in un pacchetto json */
header('Content-type: application/json');
        echo json_encode(
            [
                'result' => $albums,
            ]
        );
?>
