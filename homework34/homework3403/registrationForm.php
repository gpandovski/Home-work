<?php 

$browsers = ['firefox', 'chrome', 'internet explorer', 'safari', 'edge', 'opera', 'other'];

require 'Connection.php';
require 'Select.php';
require 'Insert.php';

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>

<form method="post" action="">
    <p>Name:<br>
        <input type="text" name="name" size="60" />
    </p>
    <p>Username:<br>
        <input type="text" name="username" size="60" />
    </p>
    <p>Email:<br>
    <input type="text" name="email" size="60" /></p>
    <p>Browser:<br>
        <?php
        $browser = new Select;
        $browser->setName('browsers');
        $browser->setValue($browsers);
        $browser->makeSelect();
        ?>
    </p>
    <input type="submit" name="submit" value="Submit" />
</form>

<?php
if(isset($_POST["submit"])) {
    if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['browsers'])) {
        $insert = new Insert;
        $insert->name       = trim($_POST['name']);
        $insert->username   = trim($_POST['username']);
        $insert->email      = trim($_POST['email']);
        $insert->browser    = trim($_POST['browsers']);
        $insert->created    = date("Y-m-d H:m:s");
        $insert->insertIntoDB();

        $feedback = "<br>Name : " . $_POST['name'] . "<br> Username : " . $_POST['username'] . "<br> E-mail : " . $_POST['email'] . "<br> Browser : " . $_POST['browsers'];
        echo $feedback;

    } else {
        echo "<script> alert('All fields are required!')</script>";
    }
}
?>
 </body>
 </html>