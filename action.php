<?php
$CheckoutRequestID = $_POST['$CheckoutRequestID'];
$Resultcode= $_POST['$Resultcode'];
$Amount = $_POST['$Amount'];
$MpesaReceiptNumber = $_POST['$MpesaReceiptNumber'];
$PhoneNumber = $_POST["$PhoneNumber"];
$insert = $conn->query("INSERT INTO tinypesa(CheckoutRequestID, ResultCode, amount, MpesaReceiptNumber, PhoneNumber) VALUES ('$CheckoutRequestID','$Resultcode','$Amount','$MpesaReceiptNumber','$PhoneNumber')");
$conn = null;
echo "
<script>alert('Item has been successfully added')</script>
<script>window.location = 'admin.php'</script>
";
