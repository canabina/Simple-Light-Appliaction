# Simplelight
Fast,  small (1.3 mb), a  powerful - framework for developing any web application

#Установка чистого приложения через GIT и Composer
1.Склонировать в папку доступную через WEB исходный код c репозитория (git clone https://github.com/canabina/Simple-Light-Appliaction.git)
2.Выполнить команду в папке с исходным кодом приложения ( sudo composer update )
3.Установить права доступа 777 на папку web и runtime в приложении
4.Установить точку входа на папку web


#Установка разработаного приложения на продакшн
1.Установить точку входа на папку web
2.На папки web и runtime установить права 777


#Основные папки приложения
1.Конфиг находиться в папке config
2.Приложение находиться в папке app
3.Модели приложения нахотяться в папке app/models
4.Модули приложения app/modules
5.Контроллеры модуля приложения app/modules/YOUR_MODULE/controllers
6.Вьюшки модуля приложения в папке app/modules/YOUR_MODULE/views
6.Лейауты модуля приложения в папке app/modules/YOUR_MODULE/views/layouts
7.Папка с временными файлами и кешом runtime
8.Хранилище файлов, папка uploads
9.Папка с модулями ядра и зависимостями, vendor
10.Файлы доступные через принцип CDN находяться в папке web, там же находиться и единая точка входа

#Документация

#Выводим hello world
Что бы вывести фразу (Hello World) на экран, нам необходимо перейти в папку app/modules/frontend/controllers/ и открыть файл MainController.php. Следует заметить что есть 2 жизненоважных контроллера, это (IndexController.php и MainController.php) - они необходимы нам для того, что бы приложение выполнялу свою непосредственную роботу, отдавать ответы на запросы или же записывать данные в БД. IndexController.php - важен для того что бы выполнять постоянные какие либо куски кода, за это в нем отвечает метод ( always ) , так же он перехватывает ошибки методом (isError) в котором мы можем манипулировать ими, а так же устанавливает поведение приложения и многое другое. MainController - это базовый елемент роутинга при котором он вызываеться без либо каких параметров, то есть если наше приложение имеет адресс http://example.com/ и при заходе на него то вызовиться именно MainController, если же мы возовем http://example.com/news тогда вызоветься NewsController.php , именно по этому MainController всегда необходим в нашем приложении. И так, что бы вывести hello world на экран мы уже перешли в папку app/modules/frontend/controllers/ и открыли файл MainController.php , в нем есть метод (actionIndex) он же елемент маршрутизации, в нем же пишем (echo "hello world";) , переходим на сайт, и заветная строчка перед глазами.

#Маршрутизация
Маршруты в приложении Simplelight устроены в Yii-подобном стиле, знакомым с этим фреймворком будет очень легко в них разобраться. Приложение имеет возможность разделения на модули. Для того что бы не было конфликтов между контроллерами и модулями в конфиге сайта устанавливаеться параметр (forntend_module_folder) в нем мы указываем папку фротенда. К примеру мы установили значение ('forntend_module_folder' => 'FRONTEND',) - если мы попали на адресс http://example.com/news будет вызван именно файл NewsController.php b метод в нем  из папки app/modules/FRONTEND/controllers/ . Если же мы создали модуль ADMIN и создали для него папку в app/modules , у нас выходит так что при заходе на адресс http://example.com/ADMIN у нас будет вызываться MainController.php именно из папки app/modules/ADMIN/controller , если же мы вызовем http://example.com/ADMIN/news у нас подключиться именно NewsController.php из app/modules/ADMIN/controller - так что тут все предельно просто. Модулей может быть неограниченное количество. Так же знакомым с Yii , есть сущность как ( action ) в контроллере. Если мы запросим http://example.com/news/blog у нас будет подключен файл NewsController.php в папке app/modules/FRONTEND/controllers/ и в нем будет вызван метод ( actionBlog ), та же ситуация будет если мы запросим в другом модуле, вызываем адресс http://example.com/ADMIN/news/blog , подключаеться файл NewsController.php в папке app/modules/ADMIN/controllers/ и вызываеться метод ( actionBlog ). 



