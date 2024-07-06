<?php
      $conn = mysqli_connect("localhost", "aligarhunanicollege", "Acngroup@112233#", "aligarhunanicollege.com");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $lname = $_REQUEST['lname'];
    $fname = $_REQUEST['fname'];
    $occupation = $_REQUEST['occupation'];
    $email = $_REQUEST['email'];
   $mobile = $_REQUEST['mobile'];
    $pmobile = $_REQUEST['pmobile'];
    $year = $_REQUEST['year'];
    $board = $_REQUEST['board'];
    $percent = $_REQUEST['percent'];
    $category = $_REQUEST['category'];
    $marks = $_REQUEST['marks'];
    $paddress = $_REQUEST['paddress'];
    $caddress = $_REQUEST['caddress'];
 

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO contact_us1 VALUES ( id,'$name','$lname','$fname','$occupation','$email','$mobile','$pmobile','$year','$board','$percent','$category','$marks','$paddress','$caddress')";

    if(mysqli_query($conn, $sql)){
        $msg = $msg."First Name :" . $_POST['name'] ."\n";
        $msg = $msg."Last Name :" . $_POST['lname'] ."\n";
        $msg = $msg."Father Name :" . $_POST['fname'] ."\n";
        $msg = $msg."Father Occupation :" . $_POST['occupation'] ."\n";
        $msg = $msg."Email Id :" . $_POST['email'] ."\n";
        $msg = $msg." Personal Mobile :" . $_POST['mobile'] ."\n";
        $msg = $msg."Parents Mobile :" . $_POST['pmobile'] ."\n";
        $msg = $msg."Year Of Passing :" . $_POST['year'] ."\n";
        $msg = $msg."XII Board:" . $_POST['board'] ."\n";
        $msg = $msg."Parcentage in XII :" . $_POST['percent'] ."\n";
        $msg = $msg."Category  :" . $_POST['category'] ."\n";
        $msg = $msg."Neet Marks :" . $_POST['marks'] ."\n";
        $msg = $msg."Permanent Address :" . $_POST['paddress'] ."\n";
        $msg = $msg."Correspondence Address :" . $_POST['caddress'] ."\n";
        $subject = "Registration From Admission in Bams ";
        $to_1="admission@aligarhunanicollege.com";
        mail($to_1, $subject, $msg);
        $header = "Reply-To: ".$_POST["email"];
        header("location: thanks.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

?>

