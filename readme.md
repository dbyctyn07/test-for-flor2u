## Тестовое задание


## Настройка проекта
- `composer install`
- настроить `.env` файл
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`

Либо: 
- использовать дамп БД `dump.sql`

## Дополнительная информация
Статусты заказа:
- 0 новый
- 10 подтвержден
- 20 завершен
- 30 отменен

## Техническое задание

#### Обязательно
- Создать страницу на которой выводится текущая температура указанного города (Работа с api какого-либо сервиса например: https://tech.yandex.ru/weather/)

- Создать страницу со списоком заказов в табличном виде
    - поля 
        - ид_заказа 
        - название_партнера 
        - стоимость_заказа 
        - наименование_состав_заказа 
        - статус_заказа
    - ид_заказа - ссылка на редактирование заказа в новой вкладке
- Создать страницу редактирования заказа
    - поля для редактирования:
        - email_клиента(редактирование, обязательное)
        - партнер(редактирование, обязательное)
        - продукты(добавление, удаление продукта; количество единиц продукта)
        - статус заказа(редактирование, обязательное)
        - стоимость заказ(вывод)
        - сохранение изменений в заказе
- Создать задачу в кроне - в 01:00 отменить все неподтвержденные заказы за прошедший день.
    - отправить email партнеру
        - список отмененных заказов патнера
        - текст состав заказа (список), стоимость заказа (значение)
- Дополнительный функционал для редактирования заказа
    - при установке статуса заказа "завершен", требуется отправить email - партнеру и всем поставщикам продуктов из заказа
        - заказ №(номер) завершен
        - текст состав заказа (список), стоимость заказа (значение)


#### Не обязательно (если желаете лучше продемонстрировать свои умения)
- Создать страницу со списком продуктов в табличном виде:
    - поля 
        - ид_продукта 
        - наименование_продукта 
        - наименование_поставщика 
        - цена
    - сортировка по алфавиту по возрастанию
    - пагинация по 25 элементов    
- Дополнительный функционал для страницы списка заказов
    - список заказов разбить на вкладки(bootstrap)
        - владка просроченные
            - дата доставки раньше текущего момента
            - статус заказа 10
            - сортировка по дате доставки по убыванию
            - ограничение 50 штук
        - текущие
            - дата доставки 24 часа с текущего момента
            - статус заказа 10
            - сортировка по дате доставки по возрастанию
        - новые
            - дата доставки после текущего момента
            - статус заказа 0
            - сортировка по дате доставки по возрастанию
            - ограничение 50
        - выполненные
            - дата доставки в текущие сутки
            - статус заказа 20
            - сортировка по дате доставки по убыванию
            - ограничение 50
