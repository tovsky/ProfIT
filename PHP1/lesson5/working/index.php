<html>
<head>
    <title> Урок 5 Классы в PHP </title>
</head>
<body>
<?php
//Класс это описание свойств и методов, которые будут принадлежать будущим объектам этого класса
// (Класс это "чертеж" по которум мы будем строить будущие объекты)
//ИНКАПСУЛЯЦИЯ  - когда мы разные данные и способы работы с этими данными заключаем внутрь класса
//Мы инкапсулируем (мы собираем все едино в одном месте)
//Класс это тип, объект это экземпляр этого типа

class Table {
    //Свойства это переменные принадлежащие конкретному объекту
    //Public - свойство будет публично (писать обязательно)
    public $color;
    public $legs;
    //Методы - внутренние функции объекта. Мы ее пишем в классе и она связана с объектами этого класса
    //Методы вначале задаются в классе, потом создается объект класса, только потом уже можно использовать метод объекта
    public function show()
    {
        echo 'Привет, я стол! ';                //Не выводить echo внутри функции (учебный пример)
        echo 'У меня ' . $this->legs . ' ног'; // У метода есть "волшебная псевдопеременная" $this
                                                // $this - это этот объект (указатель на текущий объект)
                                                //$this->legs (обращаемся к свойству legs этого объекта)
                                                //$legs это сво-во спрятанное в объект (не переменная) доступ к ней чарез $this
    }
}

//В переменную $table1 мы создадим новый объект класса Table
//Объект это экземпляр класса.
//Объект это обычная переменная, ее можно передать в функцию, вернуть из функции..
$table1 = new Table;
$table1->color = 'red';  //Свойство - переменная, принадлежащая данному конкретному объекту
$table1->legs = 4;      //Свойство вложены в объект, немного похоже на массив и его элементы с ключами
$table1->show();        //Вызываем метод show объекта $table

//Создадим еще один объект класса Table
$table2 = new Table;
$table2->color = 'white';
$table2->legs = 3;
$table2->show();

/*var_dump($table1);
echo $table1->color;*/


?>

</body>
</html>