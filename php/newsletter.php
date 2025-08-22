<?php

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=newsletter', 'root', '');

}catch (PDOException $e) {
    echo '<h2>Oops, something went wrong!</h2>';
    echo '<br>';
    echo '<a href="http://localhost/fuelmykitchen/">Back to homepage?</a>';
exit();
}

$user = [
    'name' => isset($_POST['name']) ? $_POST['name'] : NULL,
    'email' => isset($_POST['email']) ? $_POST['email'] : NULL,
    'sign_up_date' => date("Y-m-d"),
];

$db->prepare("
INSERT INTO newsletter (name, email, sign_up_date) VALUES (:name, :email, :sign_up_date)
")->execute($user);

header("Location: https://localhost/fuelmykitchen/pages/subscribe_thankyou.html");
exit();

?>
