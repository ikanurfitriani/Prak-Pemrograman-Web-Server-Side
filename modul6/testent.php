<?php
$str = "<p>AKAKOM -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>