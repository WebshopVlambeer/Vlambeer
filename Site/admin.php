<?php
	session_start();
	$title = "Admin Panel";

	require_once "inc/header.php";

	# Handling invalid pagevisits.

      $sql = "SELECT * FROM tbl_customers";
        if (! $query = DB::query($sql)){
            echo "Kan gegevens niet uit database halen";
        }
        if (DB::num_rows($query) > 0){
            while ($row = DB::fetch($query)){
                echo "<tr>";
                echo "<td>" . $row->klant_nr . "</td>";
                echo "<td>" . $row->bedrijfs_naam . "</td>";
                echo "<td>" . $row->voorletters . "</td>";
                echo "<td>" . $row->voornaam . "</td>";
                echo "<td>" . $row->achternaam . "</td>";
                echo '<td><a href="project.php?id='.$row->klant_nr.'"><div class="btn btn-primary">View Project</div></a></td>';
                echo '<td><a href="klant.php?id='.$row->klant_nr.'"><div class="btn btn-primary">Customer Data</div></a></td>';
                echo "</tr>";
            }
        }


   
     
   

	//gebruiker toevoegen//
	$sql = "SELECT * FROM tbl_customers ";
        if (! $query = DB::query($sql)){
            echo "Kan gegevens niet uit database halen";
        }
        if (DB::num_rows($query) > 0 ){
            while ($row = DB::fetch($query)){
                echo "<tr>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->password . "</td>";
				echo "<td>" . $row->role . "</td>";
            //    echo "<td><a href='edit.php?id=". $row->projectnr_id . "'> Bewerk </a></td>";
                echo "<td><a href='delete.php?id=" . $row->customer_id . "'> X </a></td>";
                echo "</tr>";
            }
        }


     //gebruiker deleten//

     	if (! isset($_GET['customer_id'])){
    		header ('location: admim.view.php');
		}else{
   			$id = intval($_GET['customer_id']);
    		$sql = "DELETE FROM  WHERE customer_id = '$customer_id'";

    		if(! $query = DB::query($sql)){
        	echo 'Fout bij verwijderen van item';
    		}else{
       		header('location: index.php');
    }
}

	# Logic for shop.php
	
	require_once "views/admin.view.php";
	require_once "inc/footer.php";
?>