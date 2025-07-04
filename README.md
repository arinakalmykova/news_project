## Тестовое задание Techart.Web "Создание веб-сайта Галактический вестник" (Разработчик: Калмыкова Арина Максимовна)

Небольшой новостной сайт, разработанный на чистом PHP, HTML, CSS на архитектуре MVC с ипользованием объекто-ориентрированного программирования и динамического вывода данных из базы данных MySQL. Проект реализует отображение списка новостей и детальной страницы новости с иллюстрацией, датой и текстом выбранной новости.

## Функциональность

- Главная страница со списком новостей
- Детальная страница каждой новости
- Поддержка изображений с сохранением пропорций
- Пагинация для удобного перелистывания страниц
- Динамический вывод информации из базы данных

## Структура проекта
```
news_project/
│
├── app/
│ ├── controller/ # Контроллер - для соединения запросов из БД с представлениями
|   └── NewsController.php
|
│ ├── model/ # Класс для получения информации из БД 
|   └── datanews.php
|
│ ├── view/ # Представления
|   └── news_list.php # общая страница
|   └── news_detail.php # детальная страница
|   └── layout.php # футер и хедер
| 
| ├── core/ # Класс для подключения к базе данных и создания экземпляра подключения
│    └── db.php 
|
├── public/
│ ├── images/ # Загруженные изображения
│ ├── css/ # Стили сайта
|    └── style.php  
│
├── config.php # Конфигурация подключения к базе данных
├── index.php # Главная точка входа 
└── README.md # Информация о проекте
```


##  Демонстрация

[Ссылка на работающий сайт](https://test-tack-web.free.nf/)

## Скриншоты готового сайта

![2 страница](<скриншот 2 страницы.png>)
![3 новость детальная страница](<скриншот 3 новости.png>)


##  Технологии

- PHP
- HTML, CSS
- MySQL
- XAMPP / Docker (для локальной разработки)

##  Установка

1. Склонируйте репозиторий:
   ```bash
   git clone https://github.com/arinakalmykova/news_project

