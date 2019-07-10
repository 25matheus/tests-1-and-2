<?php
header("Content-type:application/json");
$people = array(
    array('id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'),
    array('id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'),
    array('id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'),
    array('id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'),
    array('id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com')
);

if (!isset($_GET['id'])) {
    $result = $people;
} else {
    $key_id = $_GET['id'];
    foreach ($people as $person) {
        if ($person['id'] == $key_id)
            $result = $person;
    }
}

echo json_encode($result);
