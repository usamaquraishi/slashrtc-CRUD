<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function()
      {
        $('#submit').click(function()
        {
          var naam = $('#name').val();
          var mobile = $('#phonenumber').val();
          var adr = $('#address').val();
          if(naam == "")
          {
            $('#namecheck').html('Please Enter Name');
            $('#namecheck').css('color','red');
            return false;
          }
          if(!isNaN(naam))
          {
            $('#namecheck').html('Please Enter Character');
            $('#namecheck').css('color','red');
            return false;
          }
          if(mobile == "")
          {
            $('#phonecheck').html('Please Enter Phone Number');
            $('#phonecheck').css('color','red');
            return false;
          }
          if(isNaN(mobile))
          {
            $('#phonecheck').html('Please Enter Digit');
            $('#phonecheck').css('color','red');
            return false;
          }
          if((mobile.length < 10) || (mobile.length > 12))
          {
            $('#phonecheck').html('Please Enter 10 Digit');
            $('#phonecheck').css('color','red');
            return false;
          }
          if($('input[type="checkbox"]'). prop("checked") == false)
          {
            $('#checkboxcheck').html('Please Select Any One Checkbox');
            $('#checkboxcheck').css('color','red');
            return false;
          }
          else if($('input[type="checkbox"]').prop("checked") == true)
          {
            return true;
          }
          if(adr == "")
          {
            $('#addresscheck').html('Please Enter Address');
            $('#addresscheck').css('color','red');
            return false;
          }
          if(!isNaN(adr))
          {
            $('#addresscheck').html('Please Enter  Address');
            $('#addresscheck').css('color','red');
            return false;
          }
        });
      });
    </script>
  </head>
    <body>
      <div class="container">
        <div style="background-color:lightblue"><center><h2>Add New Employee</h2></center></div>
          <form method="post" onsubmit="return validate()"  action="<?php echo base_url('index.php/Employee/insert');?>" >
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
              <span id="namecheck"></span>
            </div>
            <div class="form-group">
              <label for="phonenumber">PhoneNumber:</label>
              <input type="text" class="form-control" placeholder="Enter PhoneNumber" id="phonenumber" name="phonenumber">
              <span id="phonecheck"></span>
            </div>
            <div class="form-group">
              <label>Department</label>
              <select name="department" id="department">
                <option value="Software">Software</option>
                <option value="Hardware">Hardware</option>
              </select>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <div class="radio">
                <label> <input type="radio"  name="gender" value="Male" checked>Male</label>
                <label> <input type="radio"  name="gender" value="Female">Female</label>
              </div>
            </div>
            <div class="form-group">
              <label for="hobbies">Hobbies</label>
              <div class="checkbox" >
                <label> <input type="checkbox" name="hobbies[]" id="hobbies[]" value="FootBall">FootBall</label>
                <label> <input type="checkbox" name="hobbies[]" id="hobbies[]" value="Cricket">Cricket</label>
                <label> <input type="checkbox" name="hobbies[]" id="hobbies[]" value="Dance">Dance </label>
                <span id="checkboxcheck"></span>
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" name="address" id="address" rows="5"></textarea>
              <span id="addresscheck"></span>
            </div>
            <input type="submit" id="submit" name="submit">
          </form>
        </div>
      </div>
    </body>
</html>

