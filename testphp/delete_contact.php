<?php
if (isset($_GET['id'])) {
    $contacts = json_decode(file_get_contents('contacts.json'), true);
    $id = $_GET['id'];
    if (isset($contacts[$id])) {
        unset($contacts[$id]);
        file_put_contents('contacts.json', json_encode(array_values($contacts)));
    }
    header('Location: index.php');
}
?>