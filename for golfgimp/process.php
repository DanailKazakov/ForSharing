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
        $n = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
        if (!empty($n) && $n > 0){
            echo "<form method='post' name='contact'>";
            $numEntries = $n;
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
            
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['role']) && 
               (count($_POST['name']) == count($_POST['email']) && count($_POST['email']) == count($_POST['role']))){
                   
                $names = $_POST['name'];
                //print_r($names);

                $emails = $_POST['email'];
                //print_r($emails);

                $roles = $_POST['role'];
                //print_r($roles);
                
                $counter = count($_POST['name']);
                
                $arr = array();
                
                for ($i = 0; $i < $counter; $i++){
                    try {
                        $person = new person($names[$i], $emails[$i], $roles[$i]);
                        array_push($arr, $person);
                    } catch (Exception $ex) {
                        echo $ex->getMessage() . "<br>";
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
                
//                if ($stmt = $mysqli->prepare("SELECT name, email, role FROM persons")){
//                    $stmt->execute();
//                    $n; $e; $r;
//                    $stmt->bind_result($n, $e, $r);
//                    while($stmt->fetch()){
//                        printf("%s | %s | %s<br>", $n, $e, $r);
//                    }
//                }
                
                $mysqli->close();
            }    
        ?>
    </body>
</html>
