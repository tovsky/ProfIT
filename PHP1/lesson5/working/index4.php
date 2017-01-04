<html>
<head>
    <title>Конструктор</title>
</head>
<body>

<?php

//Конструктор - "магический" метод, который выполняется АВТОМАТИЧЕСКИ при создании объекта класса
//метод __construct() автоматически вызыввается при создании объекта и в него можно записать
//некотрые действия, которые вы хотите чтобы выпонялись при созданни нового объекта.
//Поскольку это метод (т.е. функция) у него могут быть аргументы, которые мы передаем КОНСТРУКТОРУ при создании объекта
//В РНР у функций должно быть уникальное имя. Это относится и к методам в классе.
//Поэтому КОНСТРУКТОР может быть только один.
//У наследника может быть свой конструктор и может перекрыть родительский

class Table {
    protected  $color;   //можем сделать защищеное свойство, т.к. обращаемся только внутри
                        //Записывваем данные в конструктуре, а выводим через метод
                        //прямого обращения через объект нет. мы его полностью ИНКАПСУЛИРОВАЛИ
    public  $legs;

    public function __construct($color)     //При задании объекта сразу будет срабатывать
    {
        $this->color = $color;          //записываем полученный $color В свойства объекта
    }

    public function show()
    {
        echo 'Я - стол!';
        echo $this->color;

    }
}

//ИНТЕРФЕЙСОМ класса в этом случае является конструктор и метод show  и свойство $legs

$table1 = new Table('red');
$table1->show();



?>

</body>
</html>