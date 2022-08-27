<!DOCTYPE html>
<html>
<body>

<?php
$str = "Penggunaan tanda(<>) pada kata <b>AKAKOM</b>.";
echo htmlspecialchars($str);
?>

<p>Mengubah tanda < dan > menggunakan htmlspecialchars
dengan cara berikut : &lt;b&gt;AKAKOM&lt;/b&gt;</p>
</body>
</html>