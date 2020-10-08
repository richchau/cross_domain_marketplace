<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    extract($_POST);

    if (!$username || !$password) {
        fieldsBlank();
        die();
    }


    if (!($file = fopen("../password.txt", "r"))) {
        echo ("<title>Error</title></head><body>
            Could not open passworld file</body></html>");
        die();
    } else {
        $userVerified = 0;
        while (!feof($file) && !$userVerified) {
            $line = fgets($file, 255);
            $line = chop($line);
            $field = explode(",", $line, 2);

            if ($username = $field[0]) {
                $userVerified = 1;

                if (checkPassword($password, $field) == true) {
                    accessGranted($username);
                } else {
                    wrongPassword();
                }
            }

            fclose($file);

            if (!$userVerified) {
                accessDenied();
            }
        }
    }

    function checkPassword($userpassword, $filedata)
    {
        if ($userpassword == $filedata[1]) {
            return true;
        } else {
            return false;
        }
    }

    function accessGranted($name)
    {
        print("<title>Ok, you are good to enter the club</title></head>
        <body>Hey $name, welcome back!");
        header("Location: ../usersPage.php");
    }

    function wrongPassword()
    {
        echo ("<title>Huhh?</title></head><body>Did you forget your 
        password or are you doing something naughty");
    }

    function accessDenied()
    {
        echo ("<title>Alarms are blaring!</title></head><body>FBI get this man");
    }

    function fieldsBlank()
    {
        echo ("<title>Whoops</title></head><body>Fill in those forms!");
    }

    ?>
    </body>

</html>