<?php
    $conn = mysqli_connect("localhost", "aligarhunanicollege", "Acngroup@112233#", "aligarhunanicollege.com");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 6 values from the form data(input)
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $course = $_REQUEST['course'];
    $marks = $_REQUEST['marks'];
    $comment = $_REQUEST['comment'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO contact_us VALUES ( id,'$name', '$mobile', 
        '$email','$course','$marks','$comment')";

    if(mysqli_query($conn, $sql)){
        $msg = $msg."Name :" . $_POST['name'] ."\n";
        $msg = $msg."Phone :" . $_POST['mobile'] ."\n";
        $msg = $msg."Email :" . $_POST['email'] ."\n";
        $msg = $msg."Course :" . $_POST['course'] ."\n";
        $msg = $msg."marks :" . $_POST['marks'] ."\n";
        $msg = $msg."comment :" . $_POST['comment'] ."\n";
        $subject = "Enquiry From Admission in Bums ";
        $to_1="admission@aligarhunanicollege.com";
        $to_2="learndigitalhome@gmail.com";
        mail($to_1, $subject, $msg);
         mail($to_2, $subject, $msg);
        $header = "Reply-To: ".$_POST["email"];
        header("location: index.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

?>

