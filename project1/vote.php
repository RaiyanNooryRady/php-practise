<?php 
if(isset($_POST['age']) && $_POST['age']<18){
    echo "You are not eligible to vote. <br>";
    echo $_POST['age'];
}
else if(isset($_POST['age']) && $_POST['age']>=18) {
    echo "You are eligible to vote <br>";
    echo $_POST['age'];
}