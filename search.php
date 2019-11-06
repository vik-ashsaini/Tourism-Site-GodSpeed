<!DOCTYPE html>
<html>
<head>
    <title>Search Bar using PHP</title>
</head>
<body>
 


</html>
 
<?php
 

 
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `searchtable` WHERE Name = '$str'");
 
    $sth->setFetchMode(PDO :: FETCH_OBJ);
    $sth -> execute();
 
    if($row = $sth->fetch())
    {
        ?>
        <a href="<?php echo $row->link;?>"><?php echo $row->link;?></a>
        <?php 
    }
    else
    {
        echo "Name Does not exist";
    }
}
 
?>