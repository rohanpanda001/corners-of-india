<?php

        if(isset($_SESSION['use']))
    {
        $user_id=$_SESSION['user_id'];
        ?>
        <div class="row">
        <div class="col-md-2"><h3>Your rating</h3></div>
        <form id="review" action="" method="post">
            <div class="col-md-4">
            <div class="rate">
        
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        
            </div>
            </div>
            </div>
            <br>

        <div class="row">
        <h2>Write a review</h2>
            
                <fieldset>
                    <textarea placeholder="Tell us about your experience visiting this place.." tabindex="11" name="review"></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="review-submit" data-submit="...Sending">Submit</button>
                </fieldset>
        </form>
        </div>
        <div class="row">
        <?php
        
            if(isset($_POST["submit"]))
            {
                $rate=$_POST['rate'];
                $review=$_POST['review'];
                $ch="Select user_id from votes_monuments where M_id=$m_id";
                $check=mysqli_query($ch,$conn);
                $f=mysqli_num_row($check,$conn);
                if($f==0)
                {
                    $sql="Insert into votes_monuments(M_id,user_id,rating,date) Values ('$m_id','$user_id', '$rate', curdate())";
                }
                else {
                    $sql="UPDATE votes_monuments SET M_id='$m_id', rating='$rate', date=curdate()";
                }
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error";
                }
           }
        

    }
        


        $sql2="Select a.First_Name,a.img_url,b.rating,b.review from user a,votes_guides b where a.user_id=b.user_id and b.M_id=$m_id";
        $result2=mysqli_query($sql2,$conn);
        while($user=mysqli_fetch_array($result2,MYSQLI_ASSOC))
        {


        ?>
        <h2>Reviews for this Guide</h2>
        </div>
        <div class="row">
          <div id="mainbox">
            <div class="card">
              <img src="<?php echo $user['img_url']; ?>" />
              <h1><?php echo $user['First_Name']; ?></h1>
              <p><b>Rating: </b><?php echo $user['rating']; ?></p><br>
              <p><b>Review: </b><?php echo $user['review']; ?></p>
            </div>
            
           </div>
        </div>
        <?php

        }

        ?>