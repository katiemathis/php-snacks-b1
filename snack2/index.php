<?php 

    $name = $_GET['name'];
    $age = $_GET['age'];
    $email = $_GET['email'];

    if (empty($_GET['name']) || empty($_GET['age']) || empty($_GET['email'])) {
        echo 'Access denied - please complete all fields.';

    } elseif (strlen($_GET['name']) <= 3) {
        echo 'error - name must be at least 3 characters';

    } elseif (!is_numeric($_GET['age'])) {
        echo 'error - please enter a valid numeric age';

    } elseif (strpos($_GET['email'], '@') === false || strpos($_GET['email'], '.') === false) {
        echo 'error - please enter a valid email';
    } else {
        echo 'Access granted. Welcome.';
    }