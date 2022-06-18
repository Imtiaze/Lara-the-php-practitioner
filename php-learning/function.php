<?php


function connectToDB()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=php_practitioner', 'root', '');
    } catch (PDOException $e) {
        die(var_dump($e->getMessage()));
    }
}

function fetchAllTasks($pdo)
{    
    $statement = $pdo->prepare('select * from task');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}