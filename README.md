**Сбор, анализ и публикация геоданных**

*НИУ ВШЭ ФКН БПМИ 154*

*Мугтасимов Данил*

**Актуальность решаемой задачи, обзор существующий решений**

Ни для кого не секрет, что IT-рынок развивается экспоненциально, что влечет за собой потребовательность к новым изобретениям, в том числе и приложениям/web сайтам. Широкое распространение среди них являются GIS приложения, созданием которых и является данный проект.

**Обзор технологических решений и обоснование их выбора**

Для реализации проекта предлагается работа с Google Maps API для расширения возможностей работы с Google картами.  

**Цель проекта**

Суть проекта заключается в создании Android приложения, основанного на работе с картографическими данными. 
_Gis application_ предоставляет пользователю карту Москвы и возможность отображения его текущего местоположения. Основываясь на этом, пользователь получает местонахождения ближайших камер городского видеонаблюдения, отображенных в виде маркеров на карте. Эта информация поможет узнать о возможности предоставления видео доказательств происшествия на улице. Для этого необходимо обратиться через адвоката к сайту https://data.mos.ru/ .

Местоположения пользователя выделяется отдельным маркером и определяется с помощью Network и(или) GPS провайдеров. Network предоставляет координаты через сотовую связь или сеть WiFi, однако если же такой возможности нет, то данные поступят с GPS-спутников. Если же это окажется невозможным, _Gis application_ запросит данные об последнем определённым местоположении, сделанным любым сторонним приложением на смартфоне. 

База данных включает в себя порядка 25.000 координат камер Москвы и подмосковья, что сильно загромождает карту и делает невозможным работой с приложением. В связи с этим реализован [алгоритм кластеризации данных](https://habrahabr.ru/post/145832/).

![Состояние 1](http://upload.akusherstvo.ru/image1309241.png)

![Состояние 2](http://upload.akusherstvo.ru/image1309247.png)
 
![Состояние 3](http://upload.akusherstvo.ru/image1309250.png)

**Используемые технологии**

JavaScript, CSS, HTML, PHP использовались для реализации [картографического сайта](md.hse7.ru), отображающий список достопримечательностей в округе выбранной точки. Регистрация на сайте через социальную сеть "Вконтакте" работает через Open API платформы. 

Проект выполнялся на языке Java в среде разработке Android Studio.
Google Maps Android API, Google Maps Distance Matrix API, Google Maps Android API utility library использовались для настройки отображения карты, вычисления расстояния между маркерами и их кластеризации соответственно. 

**Как запустить?**

*Через среду разработки Android Studio:

1.Установить [JDK](http://www.oracle.com/technetwork/java/javase/downloads/index.html) (Java Development Kit).

1.Установить [Android Studio](https://developer.android.com/studio/index.html?hl=ru) и следовать дальнейшим советам по установке программы. 

**Возможное продолжение проекта**

*Реализация клиент-серверной технологии*

1.Обновление базы данных не требует переустановки приложения

2.Возможность реализации скриптов для обработки слушателей

*Публикация в Play Market*
