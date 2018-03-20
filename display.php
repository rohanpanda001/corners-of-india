<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

  <h2 class="aa_h2">Monuments Info Table</h2>
  <br />
  <table style="width:100%">
    <thead>
      <tr>
        <th>Monument_Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Muncipality</th>
        <th>Country</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Architecture Style</th>
        <th>Architect</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connect.php";
        $sql="Select * from monuments_general";
        $result=mysqli_query($conn,$sql);
        while($found=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
          ?>
          <tr>
            <td><?php echo $found['M_id']; ?></td>
            <td><?php echo $found['Name']; ?></td>     
            <td><?php echo $found['Address']; ?></td>
            <td><?php echo $found['Muncipality']; ?></td>
            <td><?php echo $found['Country']; ?></td>
            <td><?php echo $found['Latitude']; ?></td>
            <td><?php echo $found['Longitude']; ?></td>
            <td><?php echo $found['arch_style']; ?></td>
            <td><?php echo $found['Architect']; ?></td>
            <td><?php echo $found['Phone']; ?></td>      
          </tr>
          <?php
        }
      ?>
    </tbody>


</body>
</html>