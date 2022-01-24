<?php

session_start();
if(
    isset($_SESSION['myemail']) &&
    !empty($_SESSION['myemail'])
){
    if(
        isset($_GET['id']) && 
        //!empty($_GET['id']) &&

        isset($_GET['table']) &&
        !empty($_GET['table'])
    ){
        
        $id=$_GET['id'];
        $tablename = $_GET['table'];        
        
        try{
            //PDO = PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=sigmacodepro_db;","root","");
            
            //setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //mysql query string
            $mysqlquerystring="UPDATE $tablename SET is_active = 0 WHERE id=$id";
            
            $conn->exec($mysqlquerystring);
            
            ?>
                <script>
                    var url = "<?php echo $_SESSION['current_page'] ;?>";
                    location.assign(url);
                </script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>
                    var url = "<?php echo $_SESSION['current_page'] ;?>";
                    location.assign(url);
                    alert("Database error!");
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                var url = "<?php echo $_SESSION['current_page'] ;?>";
                location.assign(url);
                alert("Data not set properly!");
            </script>
        <?php 
    }
   
}
else{
    ?>
        <script>location.assign("login.php");</script>
    <?php 
}

?>