<?php

function connect_to_db()
{

    $server_info = $_SERVER;
	
    $db_name = "";
    $db_id = "";
    $db_pw = "";
    $db_host = "";

    // ローカルの場合
    

    // PDOで接続
    try {
        // テンプレートリテラルでの書き方の場合
        $pdo = new PDO("mysql:dbname={$db_name};charset=utf8;host={$db_host}", $db_id, $db_pw);
        
        // $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

// functions.php

function check_session_id()
{
    if (!isset($_SESSION["session_id"]) ||$_SESSION["session_id"] !== session_id()) {
        header('Location:invoice_login.php');
        exit();
    } else {
        session_regenerate_id(true);
        $_SESSION["session_id"] = session_id();
    }
}


?>