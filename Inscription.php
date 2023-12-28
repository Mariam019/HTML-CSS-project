
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <link href="photos/inscription.png" rel="icon"/>

        <style>
              @font-face {
   font-family:Dancing_Script ;
   src: url(fonts/Dancing_Script/DancingScript-VariableFont_wght.ttf);
}

h1 {
   font-family: 'Dancing_Script';
   font-size: 30px;
}
body{
    background-color:  #D9C4EC;
}
.email{
    font-family: 'Dancing_Script';
   font-size: 20px;
   height: 45px;
    border-radius: 5px;
}
.pass{
    font-family: 'Dancing_Script';
   font-size: 20px;
   height: 45px;
    border-radius: 5px;
}
.cancelbtn{
    font-family: 'Dancing_Script';
   font-size: 20px;
   background-color: #FB7B8E;
   font-weight: 500;
    font-size: 16px;
    width: 10%;
    height: 45px;
    border-radius: 5px;
    cursor: pointer;
}
.signupbtn{
    font-family: 'Dancing_Script';
   font-size: 20px; 
   background-color: #FB7B8E;
   font-weight: 500;
    font-size: 16px;
    width: 10%;
    height: 45px;
    border-radius: 5px;
    cursor: pointer;
}

        </style>
    </head>
    <body>
        
        <form id="Inscription" action="Inscription.php" method="post">
            <h1>Sign up for more</h1>


            <label class="email" for="email">Email :</label>
            <input class="email" type="email" placeholder="Enter email" name="email"  required/>
            <br></br>

            <label class="pass" for="password">Password :</label>
            <input class="pass" type="password" placeholder="******" name="password"  required/>
            <br></br>

            <label class="pass" for="confirm-password">Confirm password :</label>
            <input class="pass" type="password" placeholder="******" name="confirm-password"  required/>
            <br></br>

            <label class="pass">
                <input  type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
              <br></br>
              <button type="button" onclick="" class="cancelbtn">Cancel</button>
              <button type="button" onclick="signup()" class="signupbtn">Sign Up</button>
        </form>
        <p id="message"></p>

        <script language="javascript"> 
        function signup()
        { var form = document.getElementById("Inscription"); 
        var formData = new FormData(form); 
        var xhr = new XMLHttpRequest(); 
        xhr.open("POST", "Inscription.php", true); 
        xhr.onreadystatechange = function()
        { if(xhr.readyState == 4 && xhr.status == 200)
            { var result = JSON.parse(xhr.responseText); 
                if(result.success)
                { alert("User has been signed up successfully!"); 
                window.location.href = "Fluffy's_To_Do_List.php"; //redirect to home page
             }
             else{ 
                document.getElementById("message").textContent = result.message; } } };
              xhr.send(formData); } 
        </script>
        <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$confirmPassword = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : null;

if ($password !== $confirmPassword) {
    echo "Error: Passwords do not match";
    exit;
}


$sql = "INSERT INTO form (email, password) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);

if ($stmt->execute()) {
    // Insertion successful
} else {
    // Handle errors
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
    </body>
</html>