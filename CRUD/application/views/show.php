 </!DOCTYPE html>
<html>
<head>
    <title>PAGINATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    
</head>
<body>
 <table class="table" id="mydata" >
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Address</th>
                
              </tr>
            </thead>
            <tbody>
             <?php foreach ($authors as $d) { ?>  
                <tr>
                  <td><?php echo $d->name; ?></td>
                  <td><?php echo $d->phonenumber; ?></td>
                  <td><?php echo $d->department; ?></td>
                  <td><?php echo $d->gender; ?></td>
                  <td><?php echo $d->hobbies; ?></td>
                  <td><?php echo $d->address; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p><?php echo $links; ?></p>

</body>
</html>
