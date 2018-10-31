<?php

//в модуле представлен базовый класс для всех объектов использующих соединение с БД
//его функцией является установка и закрытие соединения

class WDBConn {

    protected $link, $login, $password;

    //-------------функция создает соединение---------------------------------------
    protected function createConnect($login, $password, &$report) {
        $this->link = mysqli_connect('localhost', $login, $password);
        if (!$this->link) {
            $report = "Ошибка соединения ($login, $password) ";
            $this->login = '';
            $this->password = '';
            return false;
        }
        $this->login = $login;
        $this->password = $password;
        return true;
    }

//-------------функция создает соединение и цепляется к базе данных---------------------------------------
    protected function createConnectBase($login, $password, &$report, $base = 'dbNews') {
        if ($this->createConnect($login, $password, $report) === false) {
            return false;
        }
        if (mysqli_select_db($this->link, $base)) {
            
        } else {
            $report = "Ошибка выбора БД: " . mysqli_error($this->link) . "\n";
            return false;
        }
        return true;
    }

//---------------------------------закрывает соединение---------------------------------------   
    protected function closeConnect() {
        if (!$this->link) {
            
        } else {
            mysqli_close($this->link);
        }
    }

//-------------проверяет наличие созданного соединения---------------------------- 
    public function is_connected() {
        if (!$this->link) {
            $report = "Ошибка соединения";
            return false;
        } else {
            return true;
        }
    }

//-------------конструктор создает соединение---------------------------------------
    public function __construct($login, $password, &$report, $base = false) {
        $this->login = '';
        $this->password = '';
        if ($base === false) {
            $this->createConnect($login, $password, $report);
        } else {
            $this->createConnectBase($login, $password, $report, $base);
        }
    }

    //-------------деструктор уничтожает соединение---------------------------------------   
    public function __destruct() {
        $this->closeConnect();
    }

//-------------функция используется в наследниках для упрощения записи запросов в базу данных, а также логов получаемых в результате обращения-------------------------------------------------    
    public function commands($query, $good, $bad, &$report) {
        if (mysqli_query($this->link, $query)) {
            $report = $report . "<p>" . $good . "</p>";
            return true;
        } else {
            $report = $report . "<p>" . $bad . mysqli_error($this->link) . "</p>";
            return false;
        }
    }

}
