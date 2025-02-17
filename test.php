<?php
const NO_PER_CARD = 13;
const CARDS       = ['S', 'H', 'D', 'C'];

function getCard($noPlayer)
{
    if ($noPlayer < 1) {
        return [false, 'Input value does not exist or value is invalid'];
    }

    $deck = [];

    foreach (CARDS as $card) {
        for ($i = 1; $i <= NO_PER_CARD; $i++) {
            $deck[] = $card . "-" . str_replace([10, 11, 12, 13, 1], ['X', 'J', 'Q', 'K', 'A'], $i);
        }
    }
    shuffle($deck);

    $players = [];
    foreach ($deck as $i => $card) {
        $players[$i % $noPlayer][] = $card;
    }

    return [true, $players];
}

header('Content-Type: application/json; charset=utf-8');
[$success, $data] = getCard($_POST['input'] ?? $_GET['input'] ?? 0);

echo json_encode([
    'success' => $success,
    'data'    => $data,
]);