<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="aa_htmlTable">
  <h2 class="aa_h2">Monument Info Table</h2>
  <table>
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
        $sql2="Select count(M_id) from monuments_general";
        $result2=mysqli_query($sql2,$conn);
        $result=mysqli_query($conn,$sql);
        while($found=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
          ?>
          <tr>
            <td><?php echo $found['M_id']?></td>
            <td><?php echo $found['Name'] ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
    
  </table>
</div>

<div class="container">  
  <form id="contact" action="updated.php" method="post">
    <h3>Update Monument Info</h3>

    <fieldset>
      <input placeholder="Monument ID" type="text" name="M_id" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Monument Name" type="text" name="name" tabindex="1">
    </fieldset>
    <fieldset>
      <input placeholder="Monument Address" type="text" name="Address" tabindex="2">
    </fieldset>
    <fieldset>
      <input placeholder="Muncipality" type="text" name="Muncipality" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Country" type="text" name="Country" tabindex="4" >
    </fieldset>
    <fieldset>
      <input placeholder="Latitude" type="text" name="Latitude" tabindex="5" >
    </fieldset>
    <fieldset>
      <input placeholder="Longitude" type="text" name="Longitude" tabindex="6" >
    </fieldset>
    <fieldset>
      <input placeholder="Image url" type="url" name="Img_url" tabindex="7" >
    </fieldset>
    <fieldset>
      <input placeholder="Architectural Style" type="text" name="arch_style" tabindex="8" >
    </fieldset>
    <fieldset>
      <input placeholder="Architect" type="text" name="Architect" tabindex="9" >
    </fieldset>
    <fieldset>
      <input placeholder="Phone" type="tel" name="Phone" tabindex="10">
    </fieldset>
    <fieldset>
      <textarea placeholder="Description" name="Description" tabindex="11" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Updating">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>






