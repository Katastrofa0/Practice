<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP PRACTICE</title>
<style>
    .block {
        margin-top: 20px;
        margin-bottom: -25px;


    }
    body {background: #100d0d}
    p1 {color: aliceblue}
    }
    header h1{
        color: #04c9dc;

    }
    .glow span{
        transition: all 0.3s;
        font-size: 50px;
        color: #262626;
    }
    .glow span:hover{
        text-shadow: 0 0 10px #314547,
        0 0 30px #314547,
        0 0 80px #314547;
        color: #c5c5c5;
    }
    .gloww span{
        text-shadow: 0 0 10px #314547,
        0 0 10px #314547,
        0 0 80px #314547;
        color: #c5c5c5;
    }
    hr{
        height: 1px;
        border: 0;
        background-color: #adadad;
    }
    .knowledge {
        font-size: 17px;
        color: whitesmoke;
    }
  
</style>
</head>
<body>

<h1 align="center"; style="color: whitesmoke;margin-bottom: 0px; font-size: 200%"><?php  echo $p  ?></h1>

<div class="block">
    <?php include 'menu.inc.php' ?>
</div>
<hr style="margin-top: 50px">
<div align="center">
<header>
    <h1 id="su" class="glow"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span> <span>M</span><span>E</span></h1>
</header>
</div>
<div align="center">
    <p1 style="font-size:20px;">
       Меня зовут <?php echo $name, ' ', $surname . ' ';
       echo 'Родился в городе ' . $city . ' ' ;
       echo 'Cейчас мне ' . $age . '<br>';
       echo 'Хотел научится чему-то новому и так как за компьютером провожу б<em>о</em>льшую часть свое времени, решил найти то, чем смогу заниматься постоянно. <br>';
       echo 'И через некоторое время случайно наткнулся на тему ' . $q . ', меня затянуло и я решил, что хочу развить навыки именно в сфере ' . $pentest . '. <br>';    
    ?>
    <?php include 'logo.inc.php'?>
       

    </p1>
</div>
<div align="center">
<header>
    <h1 id="bu" class="glow"><span>M</span><span>Y</span><span> </span><span>S</span><span>K</span><span>I</span><span>L</span><span>L</span><span>S</span></h1>
</header>
</div>
<div class="knowledge" align="center">
    <?php include 'knowledge.inc.php';?>
    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
    <?php echo $d ?> <br>
    <?php
        $x = 'Переменная не сменилась';
        $c = &$x;
        $c = 'новое значение из-за символа "&"';
        echo 'Переменная х обрела ' . $x;    
    ?>
</div>
<div align="center">
<header>
    <h1 id="gu" class="glow"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span> </span><span>M</span><span>E</span></h1>
</div>
<div align="center">
    <a href="https://www.instagram.com/jesseonetwo"><img src="img/inst.png" width="30px" height="30px"></a>
    <a href="https://vk.com/jesseonetwo"><img src="img/vk.png" width="30px" height="30px"></a>
</div>
<div>
    <hr style="margin-top: 15px;" width="300px">
    <?php include 'footer.inc.php' ?>
</div>   

</body>
</html>