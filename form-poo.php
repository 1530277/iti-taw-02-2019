<html>
<head>
    <title>Formulario en PHP7</title>
</head>

<body>


<?php
// En ambos métodos constructores se hace la inicialización de un valor por defecto para evitar posibles problemas al utilizarlas
class datos{
    #Declaració de variables
    public $name;
    public $email;
    public $gender;
    public $coment;
    public $website;

    public function datos(){#Constructor
        $this->name = $this->email = $this->gender = $this->comment = $this->website = "";
    }
    #Función para mostrar datos
    public function getDatos(){
        echo "<h2>Your Input:</h2>";
        echo $this->name;
        echo "<br>";
        echo $this->email;
        echo "<br>";
        echo $this->website;
        echo "<br>";
        echo $this->comment;
        echo "<br>";
        echo $this->gender;
    }
}
class errors{
    #Declaració de variables
    public  $nameErr;
    public  $emailErr;
    public  $genderErr;
    public  $websiteErr;
    
    public function errors(){#Constructor
        $this->nameErr = $this->emailErr = $this->genderErr = $this->commentErr = $this->websiteErr = "";
    }
}
#Declaración de variables tipo objeto que se definieron anteriormente
$datos = new datos();
$errors = new errors();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $errors->nameErr = "Name is required";
    } else {
        $datos->name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$datos->name)) {
            $errors->nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $errors->emailErr = "Email is required";
    } else {
        $datos->email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($datos->email, FILTER_VALIDATE_EMAIL)) {
            $errors->emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])) {
        $datos->website = "";
    } else {
        $datos->website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $errors->websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["comment"])) {
        $datos->comment = "";
    } else {
        $datos->comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $errors->genderErr = "Gender is required";
    } else {
        $datos->gender = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $datos->name;?>">
    <span class="error">* <?php echo $errors->nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $datos->email;?>">
    <span class="error">* <?php echo $errors->emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $datos->website;?>">
    <span class="error"><?php echo $errors->websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $datos->comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($datos->gender) && $datos->gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($datos->gender) && $datos->gender=="male") echo "checked";?> value="male">Male
    <span class="error">* <?php echo $errors->genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    #Muestra datos del objeto
    $datos->getDatos();
?>

<ul>
    <li><a href="#">Volver al Inicio</a></li>
</ul>
</body>
</html>
