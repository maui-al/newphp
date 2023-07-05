<?php

function emptyInputSignup($email,$pwd){
    $result;
    if(empty($email)|| empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}




function createUser($conn,$email,$pwd){
    $sql = "INSERT INTO users (usersEmail,usersPwd) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }



    mysqli_stmt_bind_param($stmt, "ss",$email,$pwd);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function emptyInputLogin($email, $pwd){
    $result;
    if(empty($email) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

