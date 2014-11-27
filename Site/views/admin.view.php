<table class="table table-striped">
        <tr>
            <th>companyname</th>
            <th>residence</th>
            <th>firstname</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        <?php

        foreach($custQuery as $cust){

        echo "<tr>";
            echo "<td>" . $cust->companyname . "</td>";
            echo "<td>" . $cust->residence . "</td>";
            echo "<td>" . $cust->firstname . "</td>";
            echo "<td>" . $cust->lastname . "</td>";
            echo "<td>" . $cust->zip_code . "</td>";
            echo '<td><a href="project.php?id='.$cust->customer_id.'"><div class="btn btn-primary">View Project</div></a></td>';
            echo '<td><a href="klant.php?id='.$cust->customer_id.'"><div class="btn btn-primary">Customer Data</div></a></td>';
        echo "</tr>";
        }
        ?>