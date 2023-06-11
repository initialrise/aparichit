<?php include("includes/header.php"); ?>
    <?php 
    echo "<div class='video-container'>";
    include("includes/db.php"); 
    $sqlquery = "SELECT * from corruption";
    $result = mysqli_query($conn,$sqlquery);

    while($row=mysqli_fetch_assoc($result)){
      $url = $row["vidurl"];
      $description = $row["description"];
      $created = $row["created"];
      //echo "<video src='uploads/$url'></video>";
      //echo "<br>$description <br> Suggested by anonymous at $created<hr>";
    
                echo "<div class='video'>
                    <video src='uploads/$url' controls></video>
                    <div class='description'>
                        <!--<h3>Test Video</h3> -->
                        <p>$description</p>
                        <h5>Created by Anonymous</h5><h6>at $created</h6>
                    </div>
                </div>"; 
    }
          echo "</div>";
  
    ?>
                <!-- <div class="video">
                    <video src="video2.mp4" controls></video>
                    <div class="description">
                        <h3>Title for Video 2</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, repudiandae tenetur maiores esse aliquid dolores, nobis repellat numquam laboriosam recusandae et in distinctio iste harum similique natus nulla animi ratione!</p>
                        <h5>Created by Anonymous</h5><h6>at 00: 00</h6>
                    </div>
                </div>
                <div class="video">
                    <video src="video3.mp4" controls></video>
                    <div class="description">
                        <h3>Title for Video 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id reiciendis eius perspiciatis voluptas excepturi blanditiis est corporis quia error quod hic tempore totam ipsam necessitatibus reprehenderit, libero nisi inventore nam.</p>
                        <h5>Created by Anonymous</h5><h6>at 00: 00</h6>
                    </div>
                </div>
                <div class="video">
                    <video src="video4.mp4" controls></video>
                    <div class="description">
                        <h3>Title for Video 4</h3>
                        <p>Description for Video 4</p>
                        <h5>Created by Anonymous</h5><h6>at 00: 00</h6>
                    </div>
                </div>
                <div class="video">
                    <video src="video5.mp4" controls></video>
                    <div class="description">
                        <h3>Title for Video 5</h3>
                        <p>Description for Video 5</p>
                        <h5>Created by Anonymous</h5><h6>at 00: 00</h6>
                    </div>
                </div> 
            </div> -->
    
    
            <!-- <a href="Corruption_Upload.html" class="create-button btn btn-success">
                <span class="plus-icon ">create</span>
            </a> -->
            <!-- <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a> -->
    
            <div class="create-button">
                <a href="corruptionup.php" class="button">Create</a>
            </div>
    
    
    
    
    
    
    
    
    
    
        </div>
        <hr>
    <?php include("includes/footer.php"); ?>
    
</body>
</html>