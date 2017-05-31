<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
        <form action="index.php" method="post">
            <input type="submit" value="Return">
        </form>
        <br>
        <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
        if (!empty($num) && $num > 0){
            echo "<form method='post'>";
            $numEntries = $num;
            for ($i = 0; $i<$numEntries; $i++){
                echo    "<div>";
                echo        "Name: <input type='text' name='name[]'  value='' >"; 
                echo        "Email: <input type='text' name='email[]'   >";
                echo        "<select name='role[]' value=''>";
                echo            "<option value=''></option>";
                echo            "<option value='Teacher'>Teacher</option>";
                echo            "<option value='Student'>Student</option>";
                echo        "</select>";
                echo    "</div>";
            }
            echo    "<br>";
            echo    "<input type='submit' value='Send'>";
            echo "</form>";
        }        
            include 'common.php';
            include 'classes.php';
            

            
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['role'])){
                
                $names = $_POST['name'];
                $emails = $_POST['email'];
                $roles = $_POST['role'];
                
                $counter = count($_POST['name']);
                
                $arr = array();
                
                for ($i = 0; $i < $counter; $i++){
                    try {
                        $person = new person($names[$i], $emails[$i], $roles[$i]);
                        array_push($arr, $person);
                    } catch (Exception $ex) {
                        echo $ex->getMessage() . "in entry $i.<br>";
                    }
                }
                
                $mysqli = new mysqli($localhost, $user, $password, $db);
                
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }
                
                foreach($arr as $person){
                    if ($stmt = $mysqli->prepare("INSERT INTO persons (name, email, role) VALUES(?, ?, ?)")){
                        $n = $person->getName();
                        $e = $person->getEmail();
                        $r = $person->getRole();
                        $stmt->bind_param('sss', $n, $e, $r);
                        $stmt->execute();
                        $stmt->close();
                    }
                }

                $mysqli->close();
            }    
        ?>
    </body>
</html>
