<?php
$titolo_brano = 'Nessun Pericolo Per Te';
$song = '<br> Non voglio più sentirmi dire mai
My problem!! is fucking my life!!
Incontro chi in ogni mia situazione
mi dice "cosa"! e come dovrei fare
Se mi piace "con lei". Beh!
subito qualcuno dice, costa troppo!
Time
datemi il Time
Last Time
again.
So quel che faccio e perché
vuoi saperlo
voglio Sesso da te!
Quando non ho soldi
li cerco sai
li voglio ad ogni costo.
Eccome Sì
facciamo un prezzo
dimmi quello che vuoi
vuoi comprare my car!
Ho una puttana fuori che mi aspetta
per portarla a casa
ebbene sí, lei mi ama oramai.
Time
datemi il Time
Last Time
again.
So quel che faccio e perché
vuoi saperlo.
I wanna sex
I wanna drugs.
Stai calmo!
stai calmo!
Nessun pericolo per te!!.
So quel che faccio e sento di far questo
e tu non c\'entri un cazzo amico
vai affanculo te! e chi non te l\'ha mai detto!!
Time
Vivo di Time
Last Time
again.
So che ti piace anche a te!
I wanna sex
I wanna.
Stai calmo!
stai calmo!
Nessun pericolo per te!!.
So quel che faccio e sento di far questo
e tu non c\'entri un cazzo amico
vai affanculo te! e chi non te l\'ha mai detto!!';
$conta_parole = count(explode(' ', $song));

$_GET['id'];
$badwords = explode(',', $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords-Bonus</title>
</head>
<body>

<h1><?php echo $titolo_brano;?></h1>
<p> <strong style="text-transform: uppercase; color: blue" >Testo originale:</strong> <?php echo str_replace('.', '.<br>', $song);?></p>
<p>Parole totali: <strong><?php echo $conta_parole;?></strong>, Caratteri Totali: <strong><?php echo strlen($song);?></strong></p>

<p>
<?php echo count($badwords) . 'parole censurate';?>
</p>

<h1><?php echo $titolo_brano;?></h1>
<p> 
<strong style="text-transform: uppercase; color: blue" >Testo modificato:</strong> 
<?php echo str_replace($badwords, '<strong style="color: red">***</strong>', $song);?>
</p>
</body>
</html>