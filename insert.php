<html>
    <head>
        <title>
            student
        </title>
    </head>
    <body>
        <form  method="POST">
            ROLL NUMBER:<input type="text" name="rno"><br><br>
            NAME:<input type="text" name="name"><br><br>
            COURSE:<input type="text" name="course"><br><br>
            <input type="submit" name="btn">
        </form>
        <?php
            if(isset($_POST["btn"]))
            {
                $s="localhost";
                $u="root";
                $p="";
                $d="student";
                $conn=mysqli_connect($s,$u,$p,$d);

                if(!$conn){
                    die("DB connection error");
                }
                $r=$_POST["rno"];
                $n=$_POST["name"];
                $c=$_POST["course"];
                $sql="INSERT INTO details(s_roll_no,s_name,s_course) VALUES ('$r','$n','$c')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully !";
                 } else {
                    echo "Error";
                 }
                 mysqli_close($conn);
            }
        ?>
        </body>
</html>

    
    

