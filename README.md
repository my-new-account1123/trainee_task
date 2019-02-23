# trainee_task
Мною разработан скрипт эмуляция небольшого API используется методика CRUD находится по адресу http://test.invision.kz/test.php
если ссылка не доступна используйте 


Вам необходимо разработать скрипт который

1. запросит через API всех пользователей и покажет в таблице
2. позволит отредактировать пользователя с id>3 и отправит запрос на API c измененными данными
3. позволит создать пользователя через API
4. позволит удалить выбранного пользователя с id>3 через API

Важно чтобы запросы формировались на стороне php. 
Подсказка: curl, fsockopen 

можно использовать ajax при желании, но важно чтобы запросы шли к вашему php обработчику, а не напрямую к test.invision.kz



Теперь подробнее

id = порядковая позиция в json массиве
id c 0 по 2 являются системными, их перезаписать не получится
id 3 и > являются редактируемыми, перезаписываемыми 

Чтение всех пользователей происходит с помощью GET запроса

GET /test.php HTTP/1.1
Host: test.invision.kz
User-Agent: Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5
Accept: text/html
Connection: close

редактирование с помощью POST запроса

POST /test.php HTTP/1.1
Host: test.invision.kz
User-Agent: Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5
Content-Type: application/x-www-form-urlencoded
Content-Length: 40

id=3&name=Test&age=22&occupation=Student

создание с помощью PUT запроса

PUT /test.php?name=Test&age=22&occupation=Student HTTP/1.1
Host: test.invision.kz
User-Agent: Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5
Accept: text/html
Connection: close

Удаление с помощью DELETE запроса

DELETE /test.php?id=4 HTTP/1.1
Host: test.invision.kz
User-Agent: Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9b5) Gecko/2008050509 Firefox/3.0b5
Accept: text/html
Connection: close
