<?php 

class FlasMessage{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }
    /**
     * Description: Добавить флеш сообщение
     * @param string $name
     * @param string $message
     * @return null 
     */
    public  function setMessage(string $name, string $message): void
    {
        $_SESSION[$name] = $message;
    }
    /**
     * Description: Вывести и убрать флеш сообщение
     * @param string $name
     * @return null 
     */
    public function  getMessage(string $name): void
    {
        if ($_SESSION[$name]) {
            echo $_SESSION[$name];
            unset($_SESSION[$name]);
        }
    }
    /**
     * Description: Проверить на существование сообщение
     * @param string $name
     * @return bool 
     */
    public function  issetMessage(string $name): bool
    {
        if (isset($_SESSION[$name])) {
            return true;
        }
        return false;
    }
    


}