//Задание 3
<?php
class Rectangle {
	// Первая сторона прямоугольника
	public $a;
	// Вторая сторона прямоугольника
	public $b;

	public function square() {
           return ($this->a)*($this->b); 
                  
	}

}

class Сircle {

	public $r; //радиус

	const P = 3.14;

	public function square() {
		   return (self::P)*($this->r)**2;
	}

}

class Triangle {
	        // высота треугольника
	public $h;
	        // основание треугольника
	public $b;

	public function square() {
           return (1/2)*($this->b)*($this->h);
	}
}


// Генерация случайных объектов и запись в файл class.txt


$filename = 'class.txt';

$i = 0;
while ($i < 10) {                   // будем создавать 10 случайных объектов
	$t = rand(1,3);
     if ($t == 1) {
              $classObject = new Rectangle();
              $classObject->a = rand(1,50);
              $classObject->b = rand(1,50);
              $text = serialize($classObject);
              file_put_contents($filename, $text . "\n" , FILE_APPEND);
              $classObject = unserialize($text);
              print "Rectangle: ";
              print "Первая сторона: " . $classObject->a . ", ";
              print "Вторая сторона: " . $classObject->b;
              print "</br>";
     } else if ($t == 2) {
              $classObject = new Сircle();
              $classObject->r = rand(1,50);
              $text = serialize($classObject);
              file_put_contents($filename, $text . "\n" , FILE_APPEND);
              $classObject = unserialize($text);
              print "Сircle: ";
              print "Радиус: " . $classObject->r;
              print "</br>";
     } else if ($t == 3) {
     	      $classObject = new Triangle();
     	      $classObject->h = rand(1,50);
     	      $classObject->b = rand(1,50);
     	      $text = serialize($classObject);
              file_put_contents($filename, $text . "\n", FILE_APPEND);
              $classObject = unserialize($text);
     	      print "Triangle: ";
     	      print "Высота: " . $classObject->h . ", ";
     	      print "Основание: " . $classObject->b;
     	      print "</br>";
     }
   $i++;
}
print "</br>";

// Получение объектов из файла


$file_name = fopen("class.txt", "r");
$u = 0;
while ( $u < 10 ) 
{  //читаем первые 10 строк 
   $line = fgets($file_name);
   $object = unserialize($line);

   print "Фигура: " . get_class($object);
   print "   Площадь фигуры: ";
   print $object->square();
   $arr[] = $object;
   print "   "; 
   /*print_r (${'classObject' . $u} $object);*/
   print "</br>";
   $u++;
}
print "</br>";
fclose($file_name);

function cmp($a, $b)      // функция сортировки
{
    if ($a->square() == $b->square()) 
    {
        return 0;
    }
    return ($a->square() > $b->square()) ? -1 : 1;
}

usort($arr, "cmp");

for($f = 0;$f < count($arr);$f++) {     
   print "Фигура: " . get_class($arr[$f]);
   print "  Площадь фигуры: " . $arr[$f]->square() . "</br>";
}

?>
