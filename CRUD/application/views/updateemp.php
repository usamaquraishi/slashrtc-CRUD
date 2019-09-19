<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
    <body>
      <div class="container">
        <div style="background-color:lightblue"><center><h2>Edit Employee</h2></center></div>
          <form method="post" action="<?php echo base_url('index.php/Employee/update')."/".$empdata->id;?>">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $empdata->name; ?>">
            </div>
            <div class="form-group">
              <label for="phonenumber">PhoneNumber:</label>
              <input type="text" class="form-control" placeholder="Enter PhoneNumber" name="phonenumber" value="<?php echo $empdata->phonenumber; ?>">
            </div>
            <div class="form-group">
              <label>Department</label>
              <div class="form-group">
                <select name="department" value="<?php echo $empdata->department; ?>">
                  <option value="Software">Software</option>
                  <option value="Hardware">Hardware</option>
                </select>
              </div>
            </div>
              <div class="form-group">
               <label for="gender">Gender</label>
              <div class="radio" value="<?php echo $empdata->gender; ?>">
                <label> <input type="radio" name="gender" value="Male" checked>Male</label>
                <label> <input type="radio" name="gender" value="Female">Female</label>
              </div>
            </div>
              <div class="form-group">
                <label for="hobbies">Hobbies</label>
                <div class="checkbox" value="<?php echo $empdata->hobbies; ?>">
                  <label> <input type="checkbox" name="hobbies[]" value="FootBall">FootBall</label>
                  <label> <input type="checkbox" name="hobbies[]" value="Cricket">Cricket</label>
                 <label> <input type="checkbox" name="hobbies[]" value="Dance">Dance </label>
                </div>
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control"name="address" rows="5">
                  <?php echo $empdata->address; ?> 
                </textarea>
              </div>
              <button type="submit" name="save" class="btn btn-default">Submit</button>
          </form>
      </div>
    </body>
</html>
