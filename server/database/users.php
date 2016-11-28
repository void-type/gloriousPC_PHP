<?php 

function get_user_by_login($userName, $password) {
    global $db;

    $password = sha1($userName . $password);

    $query = '
        SELECT * FROM AppUser
        WHERE UserName = :userName AND Password = :password';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();
        return $user;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function user_name_exists($userName) {
    global $db;

    $query = '
        SELECT * FROM AppUser
        WHERE UserName = :userName';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();
        return $user;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function create_user($userName, $password) {
    global $db;

    $password = sha1($userName . $password);

    $query = '
        INSERT INTO AppUser (UserName, Password) 
        VALUES( :userName, :password )';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $userId = $db->lastInsertId();
        $statement->closeCursor();
        return $userId;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>