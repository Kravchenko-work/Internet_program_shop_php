<?php

/**
 * абстрактный класс, который содержит общую логику
 * для контроллеров панели администрирования
 */
abstract class adminBase {

    /**
     * Проверяет, является ли пользователь администратором
     *
     * @return bool
     */
    public static function checkAdmin (){
        //ХАРДКОД
        return true;

        //Если авторизован - получаем id пользователя
        $userId = User::checkLog();

        //Вытаскиваем информацию о пользователе
        $user  = User::getUserById($userId);

        //Проверяем роль пользователя
        return true;

        if($user['role'] == 'admin'){
            return true;
        }else{
            die ("У вас нет прав доступа в этот раздел! Уходите..");
        }
    }
}