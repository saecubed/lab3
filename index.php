<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <?php require "title.php"; ?>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background: url(background1.png); 
            background-position: top;
        }
        
      </style>
</head>
<body>


<header>
        <nav class = "top_text">
        <a class="nav-item current_page" href="<?php 

            $name='Медовик'; 
            $link='index.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>

        <a class="nav-item" href="<?php 

            $name='Брауни'; 
            $link='brownie.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>
            
            <a class="nav-item" href="<?php 

            $name='Мороженое'; 
            $link='icecream.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>
        </nav>
    </header>


    <main>
       
        <center>
        <h1>Медовик</h1>
        <div>
        <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'medovik1.jpg';
            else
            $name = 'medovik2.jpg';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 270px>';
        ?>
    
        </center>
       
        
        <div class="spisok">
            <?php require "spisok1.php";?>
        </div>

       <h2>Приготовление</h2>
       <p> На плиту поставить сотейник с водой, дать хорошенько нагреться. Сверху установить плошку с 
        медом, подождать, пока он станет жидким, добавить кусочки масла. Размешать смесь венчиком до 
        растворения масла и оставить на плите на маленьком огне. Тем временем на большой скорости начать 
        взбивать сахар и яйца: на это уйдет примерно восемь минут, в результате должен получиться крепкий 
        белый крем. Муку смешать с содой и просеять через сито: так коржи получатся более легкими. Медовая 
        смесь к этому времени должна приобрести коричневый оттенок. Снять ее с огня, ввести яичную смесь и 
        перемешать венчиком, делая движения сверху вниз. Добавить муку и снова перемешать, но уже снизу 
        вверх. Для торта понадобятся шесть коржей диаметром 20 см, толщиной 2 мм каждый. На производстве 
        пользуются вот такими металлическими кольцами, но дома коржи можно отсадить на глаз. Часть теста 
        останется: его нужно испечь единым коржом — он пойдет на медовую крошку для украшения. В «Азбуке 
        вкуса» используют огромные конвектоматы, похожие на холодильники. Домашнюю же духовку нужно 
        разогреть до максимально возможной температуры и поставить коржи печься на три–четыре минуты: они 
        должны стать цвета гречишного меда и остаться мягкими. Когда они готовы, поставить их в 
        холодильник остывать. Сделать сметанный крем: сахарную пудру и сметану размешать венчиком до 
        однородной массы. Сложить торт: первый корж выложить запеченной стороной вверх, промазать кремом, 
        а следующие — запеченной стороной вниз. Верхушку тоже промазать кремом. Лишний корж размолоть в 
        блендере до состояния мелкой крошки. Обсыпать ею торт со всех сторон. Готовый торт можно украсить 
        пудрой и медом, затем убрать в холодильник на ночь, а лучше на сутки: за это время он опустится 
        примерно в полтора раза и пропитается кремом.
        </p>

        
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30       <?php require "time.php"; ?>
    </pre></footer>


  </body>
</body>
</html>