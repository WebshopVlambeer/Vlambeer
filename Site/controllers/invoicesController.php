<?php



 foreach($result as $invoic){

	   echo '<td><a href="' . ROOT . '../invoices.php/'.$invoic->customer_id.'/"><div class="btn btn-primary">Edit</div></a></td>';

}

?>