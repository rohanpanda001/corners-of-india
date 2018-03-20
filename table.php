<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="aa_htmlTable" >
  <h2 class="aa_h2">Monuments Info Table</h2>
  <br />
  <div style="width:100%;height:500px;overflow-y: scroll;">
  <table style="width:100%">
    <thead>
      <tr>
        <th>Monument_Id</th>
        <th>Name</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        include "connect.php";
        $sql="Select M_id,Name from monuments_general";
        $result=mysqli_query($conn,$sql);
        while($found=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
          ?>
          <tr>
            <td><?php echo $found['M_id']; ?></td>
            <td><?php echo $found['Name']; ?></td>            
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
</div>
<div class="container">  
  <form id="contact" action="add_mon.php" method="post">
    <h3>New Monument Entry</h3>
    <fieldset>
      <input placeholder="Monument Name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Monument Address" type="text" name="Address" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Muncipality" type="text" name="Muncipality" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Country" type="text" name="Country" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Latitude" type="text" name="Latitude" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Longitude" type="text" name="Longitude" tabindex="6" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image url" type="url" name="Image_url" tabindex="7" required>
    </fieldset>
    <fieldset>
      <input placeholder="Architectural Style" type="text" name="arch_style" tabindex="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Architect" type="text" name="Architect" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Phone" type="tel" name="Phone" tabindex="10" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Description" name="Description" tabindex="11" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>ss
</body>
</html>