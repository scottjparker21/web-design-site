<?php
    //grabs variables from form and enters them into local variables
    $userName = $_POST['name'];
    $givenEmail = $_POST['email'];
    $userMessage = $_POST['message'];
    $whoItIsFrom = 'From: CreamCityWebsite'; 
    $userEmail = 'scottjparker21@gmail.com'; 
    $subjectOfEmail = 'Cream City Creative Page'; 
    $isbroken = FALSE;
    $nameFieldOuter = FALSE;
    $emailFieldOuter = FALSE;
    $messageFieldOuter = FALSE;
    $validEmailOuter = FALSE;
    $messageSentOuter = FALSE;
    $tryAgainOuter = FALSE;
    console.log("http://162.243.27.11/contact-us");
    $body = "From: $userName\n E-Mail: $userEmail\n Message:\n $userMessage";
      //checks if submit was pressed 
      if ($_POST['submit']) 
      {
        //check if $userName is empty
        if(empty($userName))
        {
          $nameFieldOuter = TRUE;
          $isbroken = TRUE;
        }
        //check if $givenEMail is empty
        if(empty($givenEmail))
        {
          $emailFieldOuter = TRUE;
          $isbroken = TRUE;
        }
        //check if $userMessage is empty
        if(empty($userMessage))
        {
          $messageFieldOuter = TRUE;
          $isbroken = TRUE;
        }
        //check if $givenEmail is empty
        if(!filter_var($givenEmail, FILTER_VALIDATE_EMAIL))
        {
          $validEmailOuter = TRUE;
          $isbroken = TRUE;
        }
        if(!$isbroken)
        {
          //sends info to the email        
          if (mail ($givenEmail, $subjectOfEmail, $body, $whoItIsFrom))  
          { 
            $messageSentOuter = TRUE; 
            $content=file_get_contents("http://162.243.27.11/contact-us?messageSent=$messageSentOuter");
            console.log("http://162.243.27.11/contact-us");
            echo $content; 
          } else 
          { 
            $tryAgainOuter = TRUE; 
            $content=file_get_contents("http://162.243.27.11/contact-us?tryAgain=$tryAgainOuter");
            console.log("http://162.243.27.11/contact-us");
            echo $content;
          }
        }else
          $content=file_get_contents("http://162.243.27.11/contact-us?fieldName=$nameFieldOuter&emailField=$emailFieldOuter&messageField=$messageFieldOuter&validEmail=$validEmailOuter&messageSent=$messageSentOuter&tryAgain=$tryAgainOuter");
          console.log("//162.243.27.11/contact-us");
          echo $content;
        }
?>