### __Object Oriented Programming (OOP)__

```php

<?php

    Class MyName{

        public $a, $b, $c;//propertise


        // construtor
        public function __construct($x, $y){
            $this->a = $x;
            $this->b = $y;
        }

        //Access modifier - public, private, protected 
        public function addsum(){//methods
            $this->c = $this->a + $this->b;
            return "Result: " . $this->c;
        }

    }

// object

    $math = new MyName(200, 500);
    echo $math->addsum();

    
    echo "<br/>";


    $math = new MyName(500, 400);
    echo $math->addsum();

?>


```


## __Simple Project (PHP)__


<h3>Main Program (html)</h2>

```html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="contact.php" method="POST">

        <label>User Name :</label><br>
        <input type="text" name="username"><br>
        <label>E-mail :</label><br>
        <input type="email" name="email"><br>
        <label>Password :</label><br>
        <input type="password" name="password"><br>

    <!-- button -->
        <br>
        <input type="submit" name="submit" value="Submit Data">

    </form>

</body>
</html>
```

<h2>Contact page details</h3>

```php
<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email  = $_POST['email'];
        $password = $_POST['password'];
    }


?>
 <!-- database -->
       <h2>Username : <?php if(isset($username)){
            echo $username;
        } ?></h2>
        <h2>E-amil : <?php if(isset($email)){
            echo $email;
        } ?></h2>
        <h2>Password : <?php if(isset($password)){
            echo $password;
        } ?></h2>



```