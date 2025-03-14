# Тестовое задание

По следующему [техническому заданию](https://drive.google.com/file/d/1vr8fnsEqPCmgAAltMvuCKvt0neTF9b2f/view?usp=sharing)

## Быстрый старт
```docker-compose up --build -d```


##  Установка

```bash
docker-compose up --build -d
```

## Использование

Перейдите в панель управления по ссылки [ToDo Admin Demo](http://127.0.0.1:8080/admin)
Документация API http://127.0.0.1:8080/api/doc


## Порядок разработки
_13.03.2025_
* Создал сборку docker (symfony 6 + php 8)
* Создал шаблон проекта symfony
* Установил необходимые первоначальные пакеты symfony
* Настроил подключение БД
* Создал сущность ToDo + Enum + Controller
* Подключил и настроил бандл EasyAdmin для админки
* Сгенерировал CRUD для ToDo

_14.03.2025_
* Создал контроллер API ToDo, подключил Serializer
* Подключил и настроил бандл NelmioApiDocBundle
* Создал Postman коллекцию CRUD ToDo

_... продолжение следует_
