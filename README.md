
## Тестовое задание

### Задание

Создайте GET-эндпоинт /api/prices, который возвращает JSON-список товаров (id, title, price).
При передаче параметра currency (RUB, USD, EUR) — возвращайте цену с конвертацией (RUB = 1; USD = 90; EUR = 100) и форматированием ($1.50, €2.00, 1 200 ₽).

Используйте Laravel 8+ и Laravel Resource. Ответ — в формате JSON.

### Установка 

- Клонировать
- запустить миграции `php artisan migrate`
- поднять ларавель `php artisan serve`
- запустить сидер для продуктов `php artisan db:seed`
- выполнить `php artisan optimize`

### Запуск

- зайти на на http://127.0.0.1:8000/api/prices?currency=EUR

валюта RUB, USD, EUR
