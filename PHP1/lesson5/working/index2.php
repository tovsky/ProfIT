<html>
<head>
    <title>Видимость</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 027 27.12.16
 * Time: 12:49
 */

//Модификатор доступа пишется перед каждым свойством и методом
//Ключевое слово определяющее где и как будет доступно свойство или метод
//Публичные свойства и методы (которые "видят" внешиние пользователи) принято наз-ть ИНТЕРФЕЙС
class Table {
    public $color;      //Свойства и методы public доступны отовсюду, любому пользователю нашего объекта
    protected $legs;    //Свойство становится недоступным из вне
                        //
    public function show()
    {
        $this->legs = 4;    //Изнутри обращаемся к защищенному свойству
        echo 'Я стол, у меня ' . $this->legs . ' ноги';
    }
}

$table1 = new Table;
$table1->color = 'black';
//$table1->legs = 4;      //Фатальная ошибка, т.к. свойство protected
$table1->show();


?>
</body>
</html>