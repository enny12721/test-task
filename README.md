<p align="center"><img src="https://i.ibb.co/bgsGrFb/logo-tnmk.png" width="120"></p>
<h1 align="center">Тестовое задание</h1>

## Дано

- Модель **Category** - Категории с неограниченной вложенностью
- Модель **Prod** - Товары с отношением к категории один к одному и столбцом fields(тип json), для хранения характеристик

## Задачи

- На странице **Категории** вывести полный список категорий с дочерними категориями
- На странице **Настройки** вывести полный список категорий с дочерними категориями, возможность изменения порядка категорий в рамках одного уровня★ + сохранение порядка, индивидуально для каждого пользователя
- дополнительно. Сделать поиск по характеристике ГОСТ. На странице **Категории** добавляем поле для ввода. При вводе происходит поиск по характеристике ГОСТ у всех товаров, за тем происходит выделение(выделяем название категории любым удобным способом) категорий, в которых были найдены товары

★
<img src="https://i.ibb.co/WfwKggL/451.png">

- Красная стрелочка: как **не** должно работать
- Синяя стрелочка: как должно работать

## Пожелания

Для реализации задачи сортировки товара, желательно не использовать данную реализацию:
В таблицу users добавляем новый столбик(category), в данный столбик записываем id категорий в отсортированном порядке

## Данные

Используйте сидр для вставки тестовых данных

**Желаемая нагрузка:**
- `>1000 категорий`
- `>500 пользователей`
- `>1 мл товаров`

**Шаблон для вывода категорий на странице Настроек**

```html
<div class="user-menu-sort-categories">
    <!--foreach-->
        <div class="user-menu-sort-category" data-id="id категории">
            <p class="user-menu-sort-category__border"> Название категории </p>
            <!--Вложенность-->
            <div class="user-menu-sort-categories">
                <!--foreach-->
	                <div class="user-menu-sort-category" data-id="id категории">
	                    <p class="user-menu-sort-category__border"> Название категории </p>
	                    ...
	                </div>
                <!--endforeach-->
        	</div>
        	<!--END Вложенность-->
        </div>
    <!--endforeach-->
</div>
```
