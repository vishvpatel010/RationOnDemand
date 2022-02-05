<?php
session_start();
            if(isset($_POST['sub']))
            {
              include 'includes/db.php';
              $name = $_POST['name'];
              $email = $_POST['email'];
              $subject = $_POST['subject'];
              $msg = $_POST['msg'];
              $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `msg`) VALUES ('$name', '$email', '$subject', '$msg')";
              $result = mysqli_query($con,$sql);
              if($result)
              {
                  $_SESSION['status'] = "Thank you for getting in touch! We appreciate you contacting us";
                  header("Location: contact.php");
              }
              else
              {
                $_SESSION['status'] = mysqli_error();
                header("Location: contact.php");
              }

            }
          ?>