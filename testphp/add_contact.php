<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contacts = json_decode(file_get_contents('contacts.json'), true);
    $newContact = array(
        'name' => $_POST['name'],
        'phone' => $_POST['phone']
    );
    $contacts[] = $newContact;
    file_put_contents('contacts.json', json_encode($contacts, JSON_UNESCAPED_UNICODE));
    header('Location: index.php');
}
?>