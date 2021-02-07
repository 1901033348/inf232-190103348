<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML- Date Example</title>
</head>
<body>
<div>This is pure HTML message.</div>
<div>Next, we’ll display today’s date and day by PHP!</div>
<div>
<p>This is a <strong>test</strong>!</p>
<?php
function destroy_var()  
    {  
        static $var;  
        $var++;  
        echo "Value before unset: $var, ";  
        unset($var);  
        $var = 25;  
        echo "Value after unset: $var </br>";  
    }  
  
    destroy_var();  
    destroy_var();  
    destroy_var();  
echo 'Today’s date is <b>' . date('Y/m/d') . '</b> and it’s a <b>'.date('l').'</b> today!';
?>
</div>
<div>Again, this is static HTML content.</div>
</body>
</html>
