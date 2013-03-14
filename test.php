
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <h2>Oef 1</h2>
        <?php
        $a=5;
        $i=7;
        
        switch ($i) {
            
            case $i<$a:
                echo "getal is kleiner dan 5";
            break;
            
            case $i>$a:
                echo "getal is groter dan 5";
            break;
                
            case $i==$a:
                echo "getal is gelijk aan 5";
            break;
            
        default :
            $i = "niet ingevuld";
            
        }
        ?>
        
        <h2>Oef 2</h2>
        
        
        <?php
       
        
        $i="suzy ";
        if ($i == "jan") {
        echo "naam is $i";
        } 
        elseif ($i == "pieter") {
           echo "naam is $i";

        }
        elseif ($i == "corneel") {
           echo "naam is $i";

        }
        
        elseif ($i == "suzy") {
           echo "naam is $i";

        }
        else {
            echo "Naam staat niet in de database";
        }
        ?>
        
        <h2>Oef 3</h2>
        <?php
       $color = array ("black","yellow","red");
       for ($i=0; $i<count($color); $i++) {
           
           echo "<br />". "<div style=background-color:$color[$i];>$color[$i]</div>";
       }

        
        
        
        ?>
        
         <h2>Oef 4</h2>
        <?php
       $color = array ("black","yellow","red","blue");
       for ($i=0; $i<3; $i++) {
           
           echo "<br />". "<div style=background-color:$color[$i];>$color[$i]</div>";
       }

        
        
        
        ?>
         
         <h2>Oef 5 methode 1</h2>
        <?php
       $color = array ("black","yellow","orange","red","blue");
       for ($i=0; $i<count($color); $i++) {
           
           echo "<br />". "<div style=background-color:$color[$i];>$color[$i]</div>"."<br />";
           
           if ($i==1){
             $i++;  
            }
       }
       ?>
         
        <h2>Oef 5 methode 2</h2> 
       <?php
       $color = array ("black","yellow","orange","red","blue");
       for ($i=0; $i<count($color); $i++) {
           
           
           
           if ($i==2){
             continue;  
            }
            echo "<br />". "<div style=background-color:$color[$i];>$color[$i]</div>"."<br />";
       }

        
        
        
        ?>
    </body>
</html>
