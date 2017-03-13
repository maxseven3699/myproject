<?php
if ($_POST['username']=="sutthiporn" && $_POST['password']=="1234") {

    echo "ยินดีต้อนรับเข้าสู่ระบบ" . $_POST['username'];
    echo "<a href='http://www.huntra.bait.rmutsb.ac.th'>BIT Site </a>";
}
else {
  echo "คุณป้อน Username หรือ Password ไม่ถูกต้อง";
  echo "<a href='loginform.php'>กลับหน้า Loginform </a>";

}


?>
