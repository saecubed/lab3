<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <?php require "title.php"; ?>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style22.css">
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
        <a class="nav-item" href="<?php 

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
            
            <a class="nav-item current_page" href="<?php 

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
        <h1>Мороженое</h1>
        <div>
        <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'icecream1.jpg';
            else
            $name = 'icecream2.jpg';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 270px>';
        ?>
    
        </center>

            <div class="spisok">
            <?php require "spisok3.php";?>
            </div>

           <h2>Приготовление</h2>
           <p> Для начала нам необходимо ароматизировать молоко. Для этого в сотейнике смешать молоко, 
            цветы лаванды и подогреть, но не кипятить. Горячее молоко с лавандой снять с огня и оставить 
            примерно на 30 минут. Пока молоко ароматизируется, приготовим ягодное пюре. Для этого ягоды 
            голубики слегка раздавить и, проварив минутки три, пюрировать. Пюре можно протереть через 
            сито для однородности, но можно оставить и в таком виде. Для данного мороженного очень хорошо 
            подходят ягоды голубики и черники. Потому что они имеют почти нейтральный вкус и очень хорошо 
            окрашивают в необходимый оттенок. Молоко вместе с цветами лаванды опять поставить на плиту и 
            желтки растереть с сахаром до однородности. Горячее молоко влить тонкой струйкой к желткам и 
            размешать до однородности. Молочно-яичную смесь перелить обратно в сотейник и на среднем огне 
            при непрерывном помешивании довести смесь до легкого загустения. Если проведя пальчиком по 
            лопатке, остается четкий след, значит, заварной крем готов. Крем процедить и дать ему остыть 
            до комнатной температуры. В крем влить мед и размешать. И добавить пюре из голубики. 
            Насыщенность цвета можно регулировать количеством добавленного ягодного пюре. Все содержимое 
            миски пробить блендером до однородности. Сливки Parmalat CHEF взбить до мягких пиков. Смешать 
            взбитые сливки с молочно-ягодной массой и все перемешать до однородности. Готовое мороженое 
            охладить в морозильной камере, не забывать каждые полчаса перемешивать массу. Очень вкусное и 
            ароматное мороженное готово. Порадуйте себя и близких таким нежным десертом!
            </p>
    
        
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30       <?php require "time.php"; ?>
    </pre></footer>


  </body>
</body>
</html>