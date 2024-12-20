

<!-- 

*️⃣ 2, 256, -256, 10358, -179567 are all integers.
 
*️⃣ An integer is a number without any decimal part. (means without  .  dot)  782.332 ❌ not int 

*️⃣ even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

🆚  "Rules" for integers

*️⃣  integer must have at least one digit
*️⃣  integer must NOT have a decimal point
*️⃣  Integer can be either positive or negative

🆚 PHP_INT_MAX - The largest integer supported
🆚 PHP_INT_MIN - The smallest integer supported
🆚 PHP_INT_SIZE -  The size of an integer in bytes


🆚 following functions to check if the type of a variable is integer:

✅  is_int() 
✅  is_integer() - alias of is_int()
✅  is_long() - alias of is_int()


-->



<?php 

    $x = 5985;
    var_dump(is_int($x));
    
    $x = 59.85;
    var_dump(is_int($x));

?>





















