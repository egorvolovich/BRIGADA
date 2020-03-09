## Афиша мероприятий
Данный сайт предоставляет возможность просмотра, выбора и приобретения билетов на доступные мероприятия с реализацией фильтрации по месту  и дате проведения. 
## Используемые технологии  
-PHP 7.2  
-Laravel  
-MySQL 8.0  
-Apache 2.4  
## Информация по установке  
-переходим в папку, в которой будет создан проект  
`git clone` [https://github.com/egorvolovich/BRIGADA](https://github.com/egorvolovich/BRIGADA)  
-переходим в папку проекта 
-создаем базу данных с именем concertsBy 
-Импортируем dump базы данных с папки корень проекта /dump
    mysql -u USER -pPASSWORD concertsBy < dump.sql
-composer install  
## Создать свой файл .env на основе файла .env.example  
     
## Запустить приложение  
    php artisan serve  
