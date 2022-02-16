<?php
    // Question 3 :
    require_once('ClasseGuerrier.php');
    session_start();

    if (!isset($_POST['lvlUp'])){
        $_SESSION['lvl'] = 1;
    }

    $class = new Guerrier (1,"Pierre","20",100,"hache");
    echo $class->getInfo();

    function lvlUp(){
        
    }

    function AttaqueCoupDeHache(){
        $class = new Guerrier (1,"Pierre","20",100,"hache");
        $dmg = $class ->getForce()*1.5;
        $rate = rand(1,2);
        if ($rate===1){
            echo 'attaque raté';
        }
        else{
            echo 'attaque réussi : '.$dmg;
        }
    }

    
?>

<button onclick=<?php AttaqueCoupDeHache() ?>>Attaque</button>
<form method='post'>
    <input name='lvlUp' type='submit' value='LvlUp'>
    <h1><?php echo $_SESSION['lvl']++ ?></h1>
</form>
