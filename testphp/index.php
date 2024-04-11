<!DOCTYPE html>
<html>
<head>
    <title>Телефонный справочник</title>
</head>
<body>
    <h1>Телефонный справочник</h1>
    <form action="add_contact.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <label for="phone">Телефонный номер:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Добавить</button>
    </form>

    <h2>Список контактов:</h2>
    <?php
    $contacts = json_decode(file_get_contents('contacts.json'), true);
    foreach ($contacts as $key => $contact) {
        echo "<p>{$contact['name']} - {$contact['phone']} <a href='delete_contact.php?id={$key}'>Удалить</a></p>";
    }
    ?>
</body>
</html>