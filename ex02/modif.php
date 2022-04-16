<?php
// curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8080/d04/ex01/create.php'
// curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/d04/ex02/modif.php'
// more /goinfre/hmaronen/mamp/apache2/htdocs/d04/private/passwd
if ($_POST["submit"] == "OK")
{
    if ($_POST["newpw"] == "")
        panic();
    if (user_exist())
    {
        if (check_passwords($saved_pw))
            modify_password();
        else
            panic();
    }
    else
        panic();

    echo "OK\n";
}
else
    panic();

function user_exist()
{
    global $saved_pw;
    $input_login = $_POST["login"];
    $unseril_arr = get_unserialized_arr();

    foreach ($unseril_arr as $i)
    {
        if ($i["login"] == $input_login)
        {
            $saved_pw = $i["passwd"];
            return (1);
        }
    }
    return (0);
}

function    modify_password()
{
    $unseril_arr = get_unserialized_arr();
    $i = 0;
    while ($unseril_arr[$i]["login"] != $POST["login"])
        $i++;
    $i--;
    $unseril_arr[$i]["passwd"] = encrypt_password($_POST["newpw"]);
    file_put_contents("../private/passwd", serialize($unseril_arr));
    return ;
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

function    check_passwords($saved_pw)
{
    $old_pw = $_POST["oldpw"];
    $encrypted_old_pw = encrypt_password($old_pw);
    
    if ($encrypted_old_pw == $saved_pw)
    return (1);
    else
    return (0);
}

function panic()
{
    echo "ERROR\n";
    exit;
}
?>
