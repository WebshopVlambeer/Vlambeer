<div class="container">
    <div class="page-header">
        <h1>Admin Panel</h1>
    </div>
    <form action="?id=<?php echo $; ?>" method="POST">
        <div class="form-group col-md-4">
            <label for="Project name">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Maintenance contract">password</label>
            <input type="text" class="form-control" name="password" id="password" value="<?php echo $password; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Naam">firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $firstname; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Naam">lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $lastname; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Datum">residence</label>
            <input type="date" class="form-control" name="" id="residence" value="<?php echo $residence; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Datum">zip-code</label>
            <input type="date" class="form-control" name="zip_code" id="zip_code" value="<?php echo $zip_code; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Customer number">Street</label>
            <input type="text" class="form-control" name="street" id="street" value="<?php echo $street; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Customer number">telephone</label>
            <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $telephone; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Appointments">House Number</label>
            <input type="text" class="form-control" name="house_number" id="house_number" value="<?php echo $house_number; ?>"/>
        </div>
        <div class="form-group col-md-4">
            <label for="Status project">Company Name</label>
            <input type="text" class="form-control" name="companyname" id="companyname" value="<?php echo $companyname; ?>"/>
        </div>
        <input type="hidden" name="customer_id_id" value="<?php echo $customer_id; ?>"/>
        <div class="form-group col-md-2">
            <input class="btn btn-primary" type="submit" value="Update" name="submit"/>
        </div>
    </form>