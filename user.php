

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
            <?php

            function Validate($data){

                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);

                return $data;

            }
            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $usernameVar = $_POST["username"];
                $passwordVar = $_POST["password"];
                $usernameVar = Validate($usernameVar);

                if(empty($usernameVar) ){

                    echo"Username empty";
                }
                if(empty($passwordVar) ){
                    echo "Password is empty";
                }else{
                    echo '<div class="wrapper">
                
                <h1>Welcome ' . $usernameVar . ' </h1>
                <h3> you are login successfully</h3>
                
                </div>';

                }
        
                
            }
            else 
            {
                echo '<div class="wrapper">
                
                <h1>Oops! Something Went wrong </h1>
             
                
                </div>';
            }
           
            ?>

        
    
</body>
</html>