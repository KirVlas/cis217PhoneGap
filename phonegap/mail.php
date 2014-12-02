<?php

$to = $_POST["email"];
$crust = $_POST["selectedCrust"];
$topping = $_POST["selectedTopping"];
$drink = $_POST["selectedDrink"];
$grandTotal = $_POST["grandTotal"];
$subject = "Thanks for your order." . strftime("%T", time());
$message .= "Hello,  \n\r";
$message .= "You've ordered:\n\r";
$message .= "Crust: $crust\n\r";
$message .= "Topping: $topping\n\r";
$message .= "Drink: $drink\n\r";
$message .= "$grandTotal\n\r";
$message .= "Thanks again for your order!";
mail($to, $subject, $message, $headers);

$to = "kirilv1984@gmail.com";
$message = "";
$crust = $_POST["selectedCrust"];
$topping = $_POST["selectedTopping"];
$drink = $_POST["selectedDrink"];
$grandTotal = $_POST["grandTotal"];
$subject = "New Order " . strftime("%T", time());
$message .= "Crust: $crust\n\r";
$message .= "Topping: $topping\n\r";
$message .= "Drink: $drink\n\r";
$message .= "$grandTotal\n\r";
mail($to, $subject, $message, $headers);
?>