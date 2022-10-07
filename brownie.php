<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">    
    <?php require "title.php"; ?>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style21.css">
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

        <a class="nav-item current_page" href="<?php 

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
        <h1>Брауни</h1>
        <div>
        <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'brownie1.jpg';
            else
            $name = 'brownie2.jpg';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 270px>';
        ?>
    
        </center>
       
            <div class="spisok">
            <?php require "spisok2.php";?>
            </div>
    
           <h2>Приготовление</h2>
           <p> Шоколад разломать на кусочки и вместе со сливочным маслом растопить на водяной бане, не 
            переставая все время помешивать лопаткой или деревянной ложкой. Получившийся густой шоколадный 
            соус снять с водяной бани и оставить остывать. Тем временем смешать яйца со ста граммами 
            коричневого сахара: яйца разбить в отдельную миску и взбить, постепенно добавляя сахар. 
            Взбивать можно при помощи миксера или вручную — как больше нравится, — но не меньше двух с 
            половиной-трех минут. Острым ножом на разделочной доске порубить грецкие орехи. 
            Предварительно их можно поджарить на сухой сковороде до появления аромата, но это 
            необязательная опция. В остывший растопленный со сливочным маслом шоколад аккуратно добавить 
            оставшийся сахар, затем муку и измельченные орехи и все хорошо перемешать венчиком. Затем 
            влить сахарно-яичную смесь и тщательно смешать с шоколадной массой. Цвет у теста должен 
            получиться равномерным, без разводов. Разогреть духовку до 200 градусов. Дно небольшой 
            глубокой огнеупорной формы выстелить листом бумаги для выпечки или калькой. Перелить тесто в 
            форму. Поставить в духовку и выпекать двадцать пять — тридцать минут до появления сахарной 
            корочки. Готовый пирог вытащить из духовки, дать остыть и нарезать на квадратики острым ножом 
            или ножом для пиццы — так кусочки получатся особенно ровными. Подавать брауни можно просто 
            так, а можно посыпать сверху сахарной пудрой или разложить квадратики по тарелкам и украсить 
            каждую порцию шариком ванильного мороженого.
            </p>
    
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30       <?php require "time.php"; ?>
    </pre></footer>


  </body>
</body>
</html>