<?php
  if(isset($_POST['subtotal'], $_POST['gratuity'])){
  if(is_numeric($_POST['subtotal']) && is_numeric($_POST['gratuity'])){
          echo "Subtotal: ".$_POST['subtotal'];
          if($_POST['gratuity']<0) 
              $_POST['gratuity'] = 0; 
          echo "<br/>Gratuity %: ".$_POST['gratuity'];
          echo "<br/>Gratuity Amount: ".$gratuity = number_format($_POST['subtotal'] * $_POST['gratuity'] / 100, 2);
          echo "<br/>Total Amount: ".$total = $gratuity+$_POST['subtotal'];
      }else echo "Please Check Input: Enter Only Numbers!";
  }else echo "Input value was missing!";
  ?>