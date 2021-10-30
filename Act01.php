<?php
$array = array(
    "luke Skywalker" => array("Fisica"=> 90, "Mate"=> 20,"Prog"=> 80,"Vis"=> 100,"Redes"=> 90,"BD"=> 87),
    "Leia Organa" => array("Fisica"=> 70, "Mate"=> 100,"Prog"=> 80,"Vis"=> 47,"Redes"=> 91,"BD"=> 86),
    "Han Solo" =>array("Fisica"=> 50, "Mate"=> 90,"Prog"=> 80,"Vis"=> 80,"Redes"=> 80,"BD"=> 80),
    "Obi Wan Kenobi" => array("Fisica"=> 90, "Mate"=> 87,"Prog"=> 90,"Vis"=> 80,"Redes"=> 80,"BD"=> 80),
    "Padmé Amidala" => array("Fisica"=> 75, "Mate"=> 78,"Prog"=> 95,"Vis"=> 80,"Redes"=> 79,"BD"=> 80),
    "Palpatine" => array("Fisica"=> 45, "Mate"=> 90,"Prog"=> 75,"Vis"=> 80,"Redes"=> 90,"BD"=> 80),
    "Boba Fett" => array("Fisica"=> 87, "Mate"=> 87,"Prog"=> 80,"Vis"=> 74,"Redes"=> 78,"BD"=> 75),
    "R2-T2" =>array("Fisica"=> 99, "Mate"=> 90,"Prog"=> 47,"Vis"=> 47,"Redes"=> 85,"BD"=> 99),
    "Chewbacca" => array("Fisica"=> 100,"Mate"=> 80,"Prog"=> 90,"Vis"=> 84,"Redes"=> 88,"BD"=> 92),
    "C3PO" => array("Fisica"=> 80, "Mate"=> 80,"Prog"=> 80,"Vis"=> 80,"Redes"=> 80,"BD"=> 80),
);
//var_dump($prom);

    foreach ($array as $nombre => $calificacion) {
        echo $nombre;
        foreach($calificacion as $calif){
            echo " | " . $calif . " | ";
        }
        echo "<br>";
    }



function promediog($vector){

    $res = 0;
    $pro = 0;
    $cont = 0;
    $cont2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $cont = $cont + 1;

        foreach($calificacion as $calif){
            $res = $res + $calif;
            $cont2 +=1;

        }
        $res = $res/$cont2;
        $cont2 = 0;
        $pro = $pro + $res;
        $res = 0;
}
    $pro = $pro / $cont;
    return $pro;
}

function promedioAl($vector){

    $res = 0;
    $promedio = 0;
    $cont = 0;
    $cont2 = 0;
    echo "<br>" . "<br>". "Promedio Por alumno:" . "<br>";
    foreach ($vector as $nombre => $calificacion) {
        $cont = $cont + 1;
        echo '<br>' . $nombre . ': ';
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $cont2 +=1;
           
        }
        $res = $res/$cont2;
        echo $res;
        $cont2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
        
}
}


function mejorProm($vector){

    $res = 0;
    $promedio = 0;
    $cont = 0;
    $cont2 = 0;
    $nomb;
    foreach ($vector as $nombre => $calificacion) {
        $cont = $cont + 1;
        foreach($calificacion as $calif){
            $res = $res + $calif;
            $cont2 +=1;
        }
        $res = $res/$cont2;
       
        $cont2 = 0;
        if ($promedio <= $res) {
            $promedio = $res;
            $nomb = $nombre;
        }
        
        $res = 0;
        
}
    
    
    return $nomb . ' : ' . $promedio;
}


function mejoresProm($vector){

    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    echo "<br>" . "Mejores Promedios: " . "<br>";
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;

        foreach($calificacion as $calif){
            $res = $res + $calif;
            $contador2 +=1;
        }
        $res = $res/$contador2;

        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;

}
    $promedio = $promedio / $contador;

     $promedioTotal = $promedio;

     $res = 0;
     $promedio = 0;
     $contador = 0;
     $contador2 = 0;
     foreach ($vector as $nombre => $calificacion) {
         $contador = $contador + 1;
         foreach($calificacion as $calif){
             $res = $res + $calif;
             $contador2 +=1;
         }
         $res = $res/$contador2;

         if ($promedioTotal <= $res) {
            echo "<br>";
            echo $nombre;
        }
         $contador2 = 0;
         $promedio = $promedio + $res;
         $res = 0;

 }


}

echo "<br>" . "Promedio general: " . promediog($array);

echo "<br>" . promedioAl($array) . "<br>";

echo "<br>" . "<br>".  "Mejor promedio:" . mejorProm($array);

echo "<br>" . mejoresProm($array);



?>