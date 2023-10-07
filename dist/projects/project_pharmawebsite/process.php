<?php
  if (isset($_POST['email'])) {

    //Email information
    $admin_email = "ytmahi707@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
  

  //send email
    mail($admin_email, "New Form Submission", $name . ' - ' . $phone, "From:" . $email);

    header('Location: http://panaceapharma.netlify.app/success');
  }
