<table class="table table-striped">
			<thead>
				<tr>
					<th>Description</th>
					<th>InvoicesDate</th>
					<th>End-date</th>
					<th>Price</th>
					<th>TotalPrice</th>
					<th>Btw</th>
				</tr>
			</thead>

 <?php

        foreach($custQuery as $invoic){

        echo "<tr>";
            echo "<td>" . $invoic->companyname . "</td>";
            echo "<td>" . $invoic->residence . "</td>";
            echo "<td>" . $invoic->firstname . "</td>";
            echo "<td>" . $invoic->lastname . "</td>";
            echo "<td>" . $invoic->zip_code . "</td>";
            echo '<td><a hr