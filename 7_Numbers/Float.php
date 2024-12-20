
<!-- 
 
*️⃣ A float is a number with a decimal point
*️⃣ 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.


🆚 PHP has the following predefined constants for floats

*️⃣ PHP_FLOAT_MAX - The largest representable floating point number
*️⃣ PHP_FLOAT_MIN - The smallest representable positive floating point number
*️⃣ PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
*️⃣ PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

✅  is_float()
✅  is_double() - alias of is_float()


-->

<?php 

    $x = 10.365;
    var_dump(is_float($x));

?>