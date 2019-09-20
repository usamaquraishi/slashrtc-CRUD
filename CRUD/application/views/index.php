<html>
  <head>
    <title>List Of Employee</title>
    <div style="background-color:lightblue"><center><h1>Search Employees </h1></center></div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">s</script>
  </head>
    <body>
      <form method="post"   action="<?php echo base_url('index.php/Employee/index');?>" >
        <div class="container">
          <div>
            <label for="name">Name:</label>&nbsp;
            <input type="text"  placeholder="Enter Name" id="name" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
          </div>
          <div>
            <label for="phonenumber">Phone:</label>
            <input type="text"  placeholder="Enter PhoneNumber" id="phonenumber" name="phonenumber" value="<?php if(isset($_POST['phonenumber'])){echo $_POST['phonenumber'];}?>">
          </div>
          <div>
            <label for="department">Department:</label>
            <input type="text"  placeholder="Enter Department" id="department" name="department" value="<?php if(isset($_POST['department'])){echo $_POST['department'];}?>">
          </div>
          <div>
            <label>Gender:</label>
            <select name="gender" id="gender">
              <option value="">choose option</option>
              <option <?php if( isset($_POST['gender']) && $_POST['gender'] == "Male" ){echo "selected";}?> value="Male">Male</option>
              <option <?php if( isset($_POST['gender']) && $_POST['gender'] == "Female" ){ echo "selected";}?> value="Female">Female</option>
            </select>
          </div>
          <div> <input type="submit" name="submit"></div>
          <div><input type="submit" name="Reset" value="Reset"></div>
        </div>
      </form>
      <form>
        <div style="background-color:lightblue"><center><h1>List Of Employees </h1></center></div>
          <div class="container">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Employee</button>
            <!-- Create Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                   <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <div style="background-color:lightblue"><center><h2>Add New Employee</h2></center></div>
                  </div>
                  <div class="modal-body">
                  <!-- <form method="post" onsubmit="return validate()"  action="<?php echo base_url('index.php/Employee/insert');?>" -->
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" placeholder="Enter Name" id="username" name="username">
                      <span id="namecheck"></span>
                    </div>
                    <div class="form-group">
                      <label for="phonenumber">PhoneNumber:</label>
                       <input type="text" class="form-control" placeholder="Enter PhoneNumber" id="userphonenumber" name="userphonenumber">
                       <span id="phonecheck"></span>
                    </div>
                    <div class="form-group">
                      <label>Department</label>
                      <select name="userdepartment" id="userdepartment">
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <div class="radio">
                        <label> <input type="radio" class="usergender"  name="usergender" value="Male" checked>Male</label>
                        <label> <input type="radio"  class="usergender"  name="usergender" value="Female">Female</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hobbies">Hobbies</label>
                      <div class="checkbox" >
                        <label> <input type="checkbox" class="hobbies" name="hobbies"  value="FootBall">FootBall</label>
                        <label> <input type="checkbox" class="hobbies" name="hobbies"  value="Cricket">Cricket</label>
                        <label> <input type="checkbox" class="hobbies" name="hobbies"  value="Dance">Dance </label>
                        <span id="checkboxcheck"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address">Address:</label>
                      <textarea class="form-control" name="address" id="address" rows="5"></textarea>
                      <span id="addresscheck"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" id="btn_save" name="submit">
                    <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                            <!-- </form><-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
        <form>
          <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="                  exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center><h1 class="modal-title" id="exampleModalLabel" style="background-color:lightblue">                                     Edit Product</h1>
                    </center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
                      <label for="name">id:</label>
                      <input type="text" class="form-control" id="editid" name="editid">
                      <span id="namecheck"></span>
                    </div>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" placeholder="Enter Name" id="editname" name="editname">
                      <span id="namecheck"></span>
                    </div>
                    <div class="form-group">
                      <label for="phonenumber">PhoneNumber:</label>
                       <input type="text" class="form-control" placeholder="Enter PhoneNumber" id="editphonenumber" name="editphonenumber">
                       <span id="phonecheck"></span>
                    </div>
                    <div class="form-group">
                      <label>Department</label>
                      <select name="editdepartment" id="editdepartment">
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <div class="radio">
                        <label> <input type="radio" class="editgender"  name="editgender" id="editgender" value="Male">Male</label>
                        <label> <input type="radio"  class="editgender"  name="editgender2" id="editgender" value="Female">Female</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hobbies">Hobbies</label>
                      <div class="checkbox" >
                        <label> <input type="checkbox" class="edithobbies" name="edithobbies"  value="FootBall">FootBall</label>
                        <label> <input type="checkbox" class="edithobbies" name="edithobbies2"  value="Cricket">Cricket</label>
                        <label> <input type="checkbox" class="edithobbies" name="edithobbies3"  value="Dance">Dance </label>
                        <span id="checkboxcheck"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address">Address:</label>
                      <textarea class="form-control" name="editaddress" id="editaddress" rows="5"></textarea>
                      <span id="addresscheck"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <script>
              $(document).ready(function()
              {
                      // show_product(); //call function show all product
                      // $('#mydata').dataTable();
                function show_product()
                {
                  $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url('Employee/emp_data')?>',
                    async : true,
                    dataType : 'json',
                    success : function(data)
                    {
                      //console.log(data);
                      var html = '';
                      var i;
                      console.log(data);
                      for(i=0; i<data.length; i++)
                      {
                        html += '<tr>'+
                        '<td>'+data[i].id+'</td>'+
                        '<td>'+data[i].namedb+'</td>'+
                        '<td>'+data[i].phonenumber+'</td>'+
                        '<td>'+data[i].department+'</td>'+
                        '<td>'+data[i].gender+'</td>'+
                        '<td>'+data[i].hobbies+'</td>'+
                        '<td>'+data[i].address+'</td>'+
                        '<td>'+

                          '<a  class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" >Edit</a>'+' '+
                            '<a  class = "btn btn-danger btn-xs" href="<?php echo site_url('Employee/delete');?>'+"/"+data[i].id +'">Delete</a>'+
                        '</td>'+
                        '</tr>';
                      }
                      $('#show_data').html(html);
                    }
                  });
                }
                $(document).ready(function()
                {
                  show_product();
                  $('#mydata').DataTable();
                });

                $('#btn_save').on('click',function()
                {
                  console.log("btn is click");
                  var nname = $('#username').val();
                  var phonenumber = $('#userphonenumber').val();
                  var department = $('#userdepartment').val();
                  var gender = $(".usergender:checked").val();
                  var hobbies = [];
                  $.each($(".hobbies:checked"), function()
                  {            
                    hobbies.push($(this).val());
                  });
                  var address = $('#address').val();
                  $.ajax({
                            type : "POST",
                            url  : "<?php echo base_url('index.php/Employee/save');?>",
                            dataType : "JSON",
                            data : {sname:nname,phonenumber:phonenumber,department:department,gender:gender,hobbies:hobbies,address:address},
                            success : function(msg)
                            {
                              console.log("higvhjvjhbhbhjbjhbhb",msg);
                              $('[name = "name"]').val("");
                              $('[name = "phonenumber"]').val("");
                              $('[name = "department"]').val("");
                              $('#myModal').modal('hide');
                              show_product();
                            }
                          });
                });
                 //get data for update record
                $('#show_data').on('click','.item_edit',function()
                {
                  var id = $(this).data('id');
                  console.log(id);
                  $.ajax({
                            type : "POST",
                            url  : "<?php echo base_url('index.php/Employee/edit');?>",
                            dataType : "JSON",
                            data : { id : id },
                            success : function(msg)
                            {
                              console.log("hi",msg);
                              $('[name = "editid"]').val(msg.id);
                              $('[name = "editname"]').val(msg.namedb);
                              $('[name = "editphonenumber"]').val(msg.phonenumber);
                              $('[name = "editdepartment"]').val(msg.department);
                              //$('[name = "editgender"]').val(msg.gender);

                                if(msg.gender == "Male")
                                {
                                  $('[name = "editgender"]').prop("checked",true); 
                                  $('[name = "editgender2"]').prop("checked",false);
                                }
                                else
                                {
                                  $('[name = "editgender"]').prop("checked",false);
                                  $('[name = "editgender2"]').prop("checked",true);  
                                }


                              
                                if(msg.hobbies == "FootBall")
                                {
                                  $('[name = "edithobbies"]').prop("checked",true);
                                  
                                }
                                else{ 
                                  $('[name = "edithobbies"]').prop("checked",false);
                                    }
                                    if(msg.hobbies == "Cricket")
                                {
                                  $('[name = "edithobbies2"]').prop("checked",true);
                                  
                                }
                                else{ 
                                  $('[name = "edithobbies2"]').prop("checked",false);
                                    }

                                    if(msg.hobbies == "Dance")
                                {
                                  $('[name = "edithobbies3"]').prop("checked",true);
                                  
                                }
                                else{ 
                                  $('[name = "edithobbies3"]').prop("checked",false);
                                    }




          


                              $('[name = "editaddress"]').val(msg.address);
                              $('#Modal_Edit').modal('show');
                            }
                          });
                  //$('#Modal_Edit').modal('show');
                  //$('[name="editname"]').val(username);
                  //$('[name="editphonenumber"]').val(userphonenumber);
                  //$('[name="editdepartment"]').val(userdepartment);
                  //$('[name="editgender"]').val(usergender);     
                  //$('[name="edithobbies"]').val(hobbies);
                  //$('[name="editaddress"]').val(address);
                });
                              //UPDATE RECORD TO DATABASE
                  $('#btn_update').on('click',function()
                  {
                    console.log("update is click");
                    var userid = $('#editid').val();
                    var username = $('#editname').val();
                    var userphonenumber = $('#editphonenumber').val();
                    var userdepartment = $('#editdepartment').val();
                    var usergender = $(".editgender:checked").val();
                    var hobbies = [];
                    $.each($(".edithobbies:checked"), function()
                    {            
                      hobbies.push($(this).val());
                    });
                    var address = $('#editaddress').val();
                    $.ajax
                    ({
                      type : "POST",
                      url  : "<?php echo site_url('Employee/update')?>",
                      dataType : "JSON",
                      data : {userid :userid, username:username , userphonenumber:userphonenumber,                    userdepartment:userdepartment, usergender:usergender, hobbies:hobbies , address:address},
                      success: function(data)
                      {
                        $('[name="editname"]').val("");
                        $('[name="editphonenumber"]').val("");
                        $('[name="editdepartment"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_product()
                      }
                    });
                  });
              });
            </script>


                    <!--<div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo site_url('Employee/add') ?>"> Add New Employee</a>
                    </div>-->
       <div class ="container">
          <table class="table" id="mydata" >
            <thead>
              <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="show_data">
         <!--     <?php foreach ($data as $d) { ?>  
                <tr>
                  <td><?php echo $d->name; ?></td>
                  <td><?php echo $d->phonenumber; ?></td>
                  <td><?php echo $d->department; ?></td>
                  <td><?php echo $d->gender; ?></td>
                  <td><?php echo $d->hobbies; ?></td>
                  <td><?php echo $d->address; ?></td>
                  <td>
                    <a class="btn btn-info btn-xs" href="<?php echo base_url('index.php/Employee/edit/'.$d->id) ?>">    <i class="glyphicon glyphicon-pencil"></i></a>
                    <a class="btn btn-info btn-xs" href="<?php echo base_url('index.php/Employee/delete/'.$d->id);?>">    <i class="glyphicon glyphicon-remove"></i></a>
                  </td>                  
                </tr>
              <?php } ?>-->
            </tbody>
          </table>
        </div>
    </body>
</html>

