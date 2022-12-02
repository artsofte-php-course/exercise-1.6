# Практическое задание 6. Калькулятор калорийности пищи
Реализовать программу для слежения за потребяемыми калориями, жирами, углеводами и белками для соблюдения диеты.

## Реализовать справочник (репозиторий) с известными продуктами.


```php
$productRepository = new ProductRepository();


// калории в 100г продукта
$calories = 100;
// белки в 100г продукта
$squirrels = 15
// жиры в 100г продукта
$fats = 15;
// углеводы в 100г продукта
$carbohydrates = 15;

// Вес порции (например, одного куриного яйца)
$defaultWeight = 75;

// Добавляем продукт в репозиторий
$productRepository->add(new Product("egg", $calories, $squirrels, $fats, $carbohydrates, $defaultWeight));

// Создаем класс отвечающий за расчет
$calorieCounter = new CalorieCounter($productRepository);

// Указываем продукт который был употреблен и количество порций (либо вес) и дату
$calorieCounter->eaten("egg", 1);

// Запрашиваем количество калорий в употребленной пище 
$calorieCounter->getCalories();
```

