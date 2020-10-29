?php
include_once 'from1.php';
if(isset($_POST['save']))
{        
         $regno = $_POST['regno'];
         $int301 = $_POST['int301'];
         $cse515 = $_POST['cse515'];
         $cse506 = $_POST['cse506'];
         $cse501 = $_POST['cse501'];
         $cse407 = $_POST['cse407'];
         $percentage = (($int301+$cse515+$cse506+$cse501+$cse407)/500)*100;
         $sql = "INSERT INTO students (regno,int301,cse515,cse506,cse501,
cse407,percentage) VALUES ('$regno','$int301','$cse515','$cse506'
,'$cse501','$cse407','$percentage')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . "
" . mysqli_error($conn);
         }
}
         mysqli_close($conn);
}
?>

