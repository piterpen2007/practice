
//Задание 1 - два варианта решения(с циклом и без)
$num1 = 0;
$num2 = 1;
print $num1 . ',' . $num2;
for ($i = 0; $i < 62; $i++) {

    $num3 = $num1 + $num2;
    print ',' . $num3;
    $num1 = $num2;
    $num2 = $num3;
}


print $arr[0] . ',' . $arr[1];
for ($i = 2; $i < 64; $i++) {
       $e++;
      $arr[$i] = $arr[$i-1] + $arr[$i-2];
      print ',' . $arr[$i];
      
}  


