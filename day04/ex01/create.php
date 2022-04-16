<?php
if ($_POST["submit"] == "OK")
{
    $file = "../private/passwd";
    $dir = "../private";
    if (!file_exists($file) || !file_exists($dir))
        create_structure();
    if (user_exist())
        panic();
    echo "OK\n";
}
else
    panic();
function panic()
{
    echo "ERROR\n";
    exit;
}
function user_exist()
{
    $db_login = $_POST["login"];
    $unseril_arr = unserialize(file_get_contents("../private/passwd"). "\n");
    foreach ($unseril_arr as $i)
    {
        if ($i["login"] == $db_login)
            return (1);
    }
    create_user($unseril_arr);
    return (0);

}
function create_user($arr)
{
    $input_pw = $_POST["passwd"];
    $input_login = $_POST["login"];

    if ($input_pw == "")
        panic();
    $hashed_pw = hash("whirlpool", $input_pw);
    $user["login"] = $input_login;
    $user["passwd"] = $hashed_pw;
    $arr[] = $user;
    $serialized_arr = serialize($arr);
    file_put_contents("../private/passwd", $serialized_arr);
}
function create_structure()
{
    $dir = "../private";
    mkdir($dir, 0700, true);
    file_put_contents("../private/passwd", "");
}
?>
