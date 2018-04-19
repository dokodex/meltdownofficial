<?php
	include '../php/businessLogic/businessLogic.php';

	function tableComingShows(){

		$bl = new businessLogic();

		$result = $bl->getcomingshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       

		// output data of each row
		while($row = $result->fetch_assoc()) {
			$row = array_map("utf8_encode", $row);
		    echo "<tr>";
		    echo "<td>" . $row['fecha'] . "</td>";
		    $place=$row['lugar'];
		    $sepplace=explode(' / ', $place);
		    echo "<td>" . $sepplace[0] . "</td>";
		    echo "<td>" . $sepplace[1] . "</td>";
		    echo "<td>" . $sepplace[2] . "</td>";
		    echo "<td>" . $row['con'] . "</td>";

		    if (empty($row['evento'])){

		    	if(strpos($url, '/eng/')){
			    	echo "<td><i> Not disponible </i></td>";
			        echo "</tr>";

		    	}
		    	elseif(strpos($url, '/es/')){
			    	echo "<td><i> No disponible </i></td>";
			        echo "</tr>";

		    	}
		    	else{
			    	echo "<td><i> Ez eskuragarri </i></td>";
			        echo "</tr>";
		    	}


		    }                
		    else{
		    $evento=$row['evento'];
		    	if(strpos($url, '/eng/')){
				    echo "<td><a href='$evento' target='_blank' class='txttb'> Go to event</a></td>";
				    echo "</tr>";   

		    	}
		    	elseif(strpos($url, '/es/')){
				    echo "<td><a href='$evento' target='_blank' class='txttb'> Ir al evento</a></td>";
				    echo "</tr>";   

		    	}
		    	else{
				    echo "<td><a href='$evento' target='_blank' class='txttb'> Ekitaldira joan</a></td>";
				    echo "</tr>";   
		    	}
               
		    }


		}
	}


	function tablePastShows(){

		$bl = new businessLogic();

		$result = $bl->getpastshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        while($row = $result->fetch_assoc()) {
        	$row = array_map("utf8_encode", $row);
            echo "<tr>";
            echo "<td>" . $row['fecha'] . "</td>";
            $place=$row['lugar'];
            $sepplace=explode(' / ', $place);
            echo "<td>" . $sepplace[0] . "</td>";
            echo "<td>" . $sepplace[1] . "</td>";
            echo "<td>" . $sepplace[2] . "</td>";
            echo "<td>" . $row['con'] . "</td>";

        }
    } 

?>