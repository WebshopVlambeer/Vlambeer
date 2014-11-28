<?php

if(!isset($_GET['action'])){
?>
<table class="table table-striped">
    <a href="<?= ROOT .'/admin/add/'?>">Toevoegen</a>
        <tr>
            <th>Companyname</th>
            <th>Residence</th>
            <th>Firstname</th>
            <th>Insertion</th>
            <th>Lastname</th>
            <th>Zip code</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>House number</th>
            <th>Street</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php

        foreach($custQuery as $cust){

        echo "<tr>";
            echo "<td>" . $cust->companyname . "</td>";
            echo "<td>" . $cust->residence . "</td>";
            echo "<td>" . $cust->firstname . "</td>";
            echo "<td>" . $cust->insertion . "</td>";
            echo "<td>" . $cust->lastname . "</td>";
            echo "<td>" . $cust->zip_code . "</td>";
            echo "<td>" . $cust->telephone . "</td>";
            echo "<td>" . $cust->email . "</td>";
            echo "<td>" . $cust->house_number . "</td>";
            echo "<td>" . $cust->street . "</td>";
            echo '<td><a href="' . ROOT . '/admin/edit/'.$cust->customer_id.'/"><div class="btn btn-primary">Edit</div></a></td>';
            echo '<td><a href="' . ROOT . '/admin/delete/'.$cust->customer_id.'/"><div class="btn btn-primary">Delete</div></a></td>';
        echo "</tr>";
        }
} elseif(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['cid'])){    
    ?>
    <form action="<?=  ROOT . '/admin/edit/' . $_GET['cid'] . '/'?>" method="post">
        <h2>Edit customer</h2>
        <div>
            <label for="companyname">Company name</label>
            <input type="text" name="companyname" id="companyname" value="<?= $custQuery[0]->companyname?>" required/>
        </div>
        <div>
            <label for="residence">Residence</label>
            <input type="text" name="residence" id="residence" value="<?= $custQuery[0]->residence ?>" required/>
        </div>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="<?= $custQuery[0]->firstname ?>" required/>
        </div>
        <div>
            <label for="insertion">Insertion</label>
            <input type="text" name="insertion" id="insertion" value="<?= $custQuery[0]->insertion ?>" required/>
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" value="<?= $custQuery[0]->lastname ?>" required/>
        </div>
        <div>
            <label for="zip_code">Zip_code</label>
            <input type="text" name="zip_code" id="zip_code" value="<?= $custQuery[0]->zip_code ?>" required/>
        </div>
        <div>
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" id="telephone" value="<?= $custQuery[0]->telephone ?>" required/>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $custQuery[0]->email ?>" required/>
        </div>
        <div>
            <label for="house_number">House number</label>
            <input type="text" name="house_number" id="house_number" value="<?= $custQuery[0]->house_number ?>" required/>
        </div>
        <div>
            <label for="street">Street</label>
            <input type="text" name="street" id="street" value="<?= $custQuery[0]->street ?>" required/>
        </div>
        <input type="submit" name="editCustSubmit" value="Submit"/>
    </form>

    <?php
} elseif(isset($_GET['action']) && $_GET['action'] == 'add'){
    ?>
    <form action="<?=  ROOT . '/admin/add/'?>" method="post">
        <h2>Add customer</h2>
        <div>
            <label for="companyname">Company name</label>
            <input type="text" name="companyname" id="companyname" required/>
        </div>
        <div>
            <label for="residence">Residence</label>
            <input type="text" name="residence" id="residence" required/>
        </div>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" required/>
        </div>
        <div>
            <label for="insertion">Insertion</label>
            <input type="text" name="insertion" id="insertion" required/>
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" required/>
        </div>
        <div>
            <label for="zip_code">Zip_code</label>
            <input type="text" name="zip_code" id="zip_code" required/>
        </div>
        <div>
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" id="telephone" required/>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required/>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required/>
        </div>
        <div>
            <label for="house_number">House number</label>
            <input type="text" name="house_number" id="house_number" required/>
        </div>
        <div>
            <label for="street">Street</label>
            <input type="text" name="street" id="street" required/>
        </div>
        <input type="submit" name="addCustSubmit" value="Submit"/>
    </form>
    <?php
} else{
    echo "Deze pagina bestaat niet.";
}

