<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    $name = "PHP Store";
    $credit = 1000;

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have £".$credit." in your pocket.</h2>";

    $products['computer'] = 750;
    $products['car'] = 15000;
    $products['iPhone'] = 1000;
    $products['Toaster'] = 75;

    $taxRate=0.0825;

    function tax_calc($amount,$tax){
      $calculate_tax = $amount*$tax;
      $amount=round($amount+$calculate_tax,2);
      return $amount;
    }

    foreach($products as $key => $value){
      $costWithTax = tax_calc($value,$taxRate);
      echo "<p>A ".$key." costs £".$costWithTax." with tax.</p>";
    }

    echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
      $costWithTax = tax_calc($value,$taxRate);
      if($costWithTax <= $credit){
        echo "<p>".$key."</p>";
      }
    }


    ?>
  </body>
</html>
