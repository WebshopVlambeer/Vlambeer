<table class="table table-striped">
			<thead>
				<tr>
					<th>Invoices</th>
				</tr>
			</thead>


<?php



 foreach($result as $invoic){

 		echo '<tr>';
	   echo '<td><a href="' . ROOT . '../invoices.php/'.$invoic->customer_id.'/"><div class="btn btn-primary">Edit</div></a></td>';
	   echo '</tr>';
}

?>