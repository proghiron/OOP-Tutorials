<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Class, Property, Object and Methods</title>
</head>
<body>
    <h1 style="color:blue; text-align:center;"><u>Class, Property, Object and Method</u> 
    <br>
    <a href="index.php"><button>Back to Index</button></a></h1>
    <p>Create class</p>
    <p>Access modifier (Public, Private, Protected)</p>
    <?php
    class person{
        //Property declayer
        public $name;
        public $age;
    
        //Function or method create
        public function personName(){
            echo "My name is: ".$this->name.'<br/>';
        }

        public function personAge($value){
            echo "My age is: ". $this->age=$value.'<br/>';
        }
    }

    class UserInfo{
        //Property
        public $name;
        public $email;
        public $address;

        public function personalInfo($name, $email, $address){
           return $info = "My name is ".$this->name=$name.'<br/>'.'My email address is '.$this->email=$email.'<br/>'.'My address is '.$this->address=$address;
        }
    }


    //Create Object
    //'->' this is a object operator
    $personeOne = new person;
    $personeOne->name='Md.Hiron Mollik (Sagor)';
    $personeOne->personName();
    $personeOne->personAge(27);

    $myInformation = new UserInfo;
    $name = 'Md.Hiron Mollik';
    $email = 'prog.hiron@gmail.com';
    $address = 'House#10, Road#04, Zillpar, Dhaka-1216.';
    echo $myInformation->personalInfo($name, $email, $address);


    
    
    ?>
</body>
</html>