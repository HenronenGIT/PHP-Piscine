<?php
function auth($login, $passwd)
{
    //echo $login;
    //echo $passwd;
    // curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8080/d04/ex01/create.php'
    $saved_pw = user_exist();
    //echo $saved_pw;
    if ($saved_pw)
    {
        return (TRUE);
    }
    else
    {
        return (FALSE);
    }
}

function user_exist()
{
    $input_login = $_GET["login"];
    $unseril_arr = get_unserialized_arr();
    $encrypted_input_pw = encrypt_password($_GET["passwd"]);
    
    foreach ($unseril_arr as $i)
    {
        // echo $i["login"]."\n";
        // echo $i["passwd"]. "\n";

        if ($i["login"] == $input_login && $i["passwd"] == $encrypted_input_pw)
        {
            $saved_pw = $i["passwd"];
            return ($saved_pw);
        }
    }
    return (NULL);
}

function    get_unserialized_arr()
{
    $unserialized_arr = unserialize(file_get_contents("../private/passwd"). "\n");
    return ($unserialized_arr);
}

function    encrypt_password($plain_pw)
{
    $crypted_pw = hash('whirlpool', $plain_pw);
    return ($crypted_pw);
}
?>