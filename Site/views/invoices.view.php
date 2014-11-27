<table class="table table-striped">
			<thead>
				<tr>
					<th>Description</th>
					<th>InvoicesDate</th>
					<th>End-date</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>TotalPrice</th>
					<th>Btw</th>
				</tr>
			</thead>

 <?php

        foreach($result as $invoic){

        echo "<tr>";
            echo "<td>" . $invoic->description . "</td>";
            echo "<td>" . $invoic->invoicesDate . "</td>";
            echo "<td>" . $invoic->endDate . "</td>";
            echo "<td>" . $invoic->quantity . "</td>";
            echo "<td>" . $invoic->price . "</td>";
            echo "<td>" . $invoic->totalPrice . "</td>";
            echo "<td>" . $invoic->btw . "</td>";
        echo "</tr>";
    }