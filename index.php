 <?php

include 'db.php';
 if(isset($_POST['submit-btn'])){
  $email = $_POST['email'];

  $query = $conn->query("SELECT * from subscribers where email='$email'");

  $numrows = $query->num_rows;

  if($numrows == 0){
    $sql = $conn->query("INSERT INTO subscribers(email) VALUES ('$email')");
    if($sql){
      echo "<script type='text/javascript'>document.getElementById('one').style.display = 'flex'</script>";
    }else{ 
      echo '<script>
          let two = document.getElementById("two");

          two.style.display = "flex"

        </script>';
    }
  }else{
    echo '<script>
          let three = document.getElementById("three");

          three.style.display = "flex"

        </script>';
  }

 }
 ?>  

 
<div class="head my-0 p-5">
    <div class="container mt-5">
      <div class="col-md-12 on">
        <img src="./assets/img/News Cam.png" alt="">
      </div>
    </div>
    <div class="container my-1 mon">
      <div class="row">
        <div class="col-md-6 my-auto align-self-center wow fadeInDown">
          <div class="mb-3">
            <h1>Take article <span class="sweet">Creation</span><br>to the next level</h1>
          </div>
          <div class="my-1">
            <h3>The multichannel sales angagement platform, which automates email outreach, calls and tast. while focusing on what really matters</h3>
            <form action="" method="Post">
              <div class="input-wrap">
                <input type="text" placeholder="Email Us" name="email">
                <button class="btn btn-danger" name="submit-btn">Try it for free</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 wow fadeInDown">
          <div class="inner">
           <img src="./assets/img/Group 8.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="succ wow slideInDown slow " id="one">
    <div>
      <i class="fa fa-check-circle"></i>
    <p>Subscribed</p>
    </div>  
  </div>
  <div class="warn wow slideInDown slow " id="two">
    <div>
      <i class="fa fa-exclamation-triangle"></i>
    <p>Email already Exist</p>
    </div>  
  </div>
  <div class="dang wow slideInDown slow " id="three">
    <div>
      <i class="fa fa-close"></i>
    <p>An Error occured</p>
    </div>  
  </div>






  <section class="container sec o">
    <div class="row">
      <div class="col-md-5 wow fadeInDown">
        <div>
          <img src="./assets/img/Group 625.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInDown ">
        <h1>Get <span class="sweet">Started</span> </h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
         .</p>
      </div>
    </div>
  </section>



  <section class="container sec sid">
    <div class="row">
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>Begin your journey<br> of <span class="sweet">Self-Publishing</span></h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Yellow.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
      </div>
    </div>
  </section>


  <section class="container sec">
   <center>
    <h1>Publish your Article in <span class="sweet">3 easy steps</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis illum commodi neque repellat quod quae.</p>
   </center>
  </section>

  <section>
   <div class="cotainer art">
    <div class="row">
     <div class="col-sm-4 col-md-4">
      <h1>Place a <span class="sweet">video</span></h1>
      <img src="./assets/img/Yellow(4).png" alt="">
     </div>
     <div class="col-sm-4 col-md-4">
      <h1>Auto generate <span class="sweet">article</span></h1>
      <img src="./assets/img/Yellow(1).png" alt="">
     </div>
     <div class="col-sm-4 col-md-4">
      <h1><span class="sweet">Edit</span> and <span class="sweet">publish</span> article</h1>
      <img src="./assets/img/Yellow(6).png" alt="">
     </div>
    </div>
   </div>
  </section>


  <section class="container sec sid o">
    <div class="row">
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Yellow(4).png" onclick="openModal();currentSlide(3)">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1> Generate Facial<br> <span class="sweet">Recognition</span> Data</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsr.</p>
      </div>
    </div>
  </section>

  <section class="container sec sid">
   <div class="row">
     <div class="col-md-7 my-auto align-self-center wow fadeInUp">
       <h1> Join Community<br> for<span class="sweet">Projects</span> Collaboration, Crowd<span class="sweet"> Funding</span> Crowd<span class="sweet"> Sorting</span> </h1>
       <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsr.</p>
     </div>
     <div class="col-md-5 wow fadeInUp">
      <div>
        <img src="./assets/img/Yellow(6).png" onclick="openModal();currentSlide(3)">
      </div>

      <img src="./assets/img/Image (2).png" alt="" class="image1 animated swing infinite">
      <img src="./assets/img/Image.png" alt="" class="image2 animated pulse infinite">
    </div>
   </div>
 </section>



 <?php

if(isset($error)){
  echo $error;
}

?>

  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News || cam</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="./assets/css/animate.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <div class="head my-0 p-5">
    <div class="container mt-5">
      <div class="col-md-12 on">
        <img src="./assets/img/News Cam.png" alt="">
      </div>
    </div>
    <div class="container my-1 mon">
      <div class="row">
        <div class="col-md-6 my-auto align-self-center wow fadeInDown">
          <div class="mb-3">
            <h1>Take article <span class="sweet">Creation</span><br>to the next level</h1>
          </div>
          <div class="my-1">
            <h3>The multichannel sales angagement platform, which automates email outreach, calls and tast. while focusing on what really matters</h3>
            <form action="" method="Post">
              <div class="input-wrap">
                <input type="text" placeholder="Email Us" name="email">
                <button class="btn btn-danger" name="submit-btn">Try it for free</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 wow fadeInDown">
          <div class="inner">
           <img src="./assets/img/Group 8.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="succ wow slideInDown slow " id="one">
    <div>
      <i class="fa fa-check-circle"></i>
    <p>Subscribed</p>
    </div>  
  </div>
  <div class="warn wow slideInDown slow " id="two">
    <div>
      <i class="fa fa-exclamation-triangle"></i>
    <p>Email already Exist</p>
    </div>  
  </div>
  <div class="dang wow slideInDown slow " id="three">
    <div>
      <i class="fa fa-close"></i>
    <p>An Error occured</p>
    </div>  
  </div>






  <section class="container sec o">
    <div class="row">
      <div class="col-md-5 wow fadeInDown">
        <div>
          <img src="./assets/img/Group 625.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInDown ">
        <h1>Get <span class="sweet">Started</span> </h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
         .</p>
      </div>
    </div>
  </section>



  <section class="container sec sid">
    <div class="row">
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1>Begin your journey<br> of <span class="sweet">Self-Publishing</span></h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsum is simply free text dolore
          eu fugiat nulla pariatur. </p>
      </div>
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Yellow.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
      </div>
    </div>
  </section>


  <section class="container sec">
   <center>
    <h1>Publish your Article in <span class="sweet">3 easy steps</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis illum commodi neque repellat quod quae.</p>
   </center>
  </section>

  <section>
   <div class="cotainer art">
    <div class="row">
     <div class="col-sm-4 col-md-4">
      <h1>Place a <span class="sweet">video</span></h1>
      <img src="./assets/img/Yellow(4).png" alt="">
     </div>
     <div class="col-sm-4 col-md-4">
      <h1>Auto generate <span class="sweet">article</span></h1>
      <img src="./assets/img/Yellow(1).png" alt="">
     </div>
     <div class="col-sm-4 col-md-4">
      <h1><span class="sweet">Edit</span> and <span class="sweet">publish</span> article</h1>
      <img src="./assets/img/Yellow(6).png" alt="">
     </div>
    </div>
   </div>
  </section>


  <section class="container sec sid o">
    <div class="row">
      <div class="col-md-5 wow fadeInUp">
        <div>
          <img src="./assets/img/Yellow(4).png" onclick="openModal();currentSlide(3)">
        </div>
      </div>
      <div class="col-md-7 my-auto align-self-center wow fadeInUp">
        <h1> Generate Facial<br> <span class="sweet">Recognition</span> Data</h1>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsr.</p>
      </div>
    </div>
  </section>

  <section class="container sec sid">
   <div class="row">
     <div class="col-md-7 my-auto align-self-center wow fadeInUp">
       <h1> Join Community<br> for<span class="sweet">Projects</span> Collaboration, Crowd<span class="sweet"> Funding</span> Crowd<span class="sweet"> Sorting</span> </h1>
       <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsr.</p>
     </div>
     <div class="col-md-5 wow fadeInUp">
      <div>
        <img src="./assets/img/Yellow(6).png" onclick="openModal();currentSlide(3)">
      </div>

      <img src="./assets/img/Image (2).png" alt="" class="image1 animated swing infinite">
      <img src="./assets/img/Image.png" alt="" class="image2 animated pulse infinite">
    </div>
   </div>
 </section>


 <section class="container sec sid o">
  <div class="row">
    <div class="col-md-5 wow fadeInUp">
      <div>
        <img src="./assets/img/Yellow(5).png" onclick="openModal();currentSlide(3)">
      </div>
    </div>
    <div class="col-md-7 my-auto align-self-center wow fadeInUp">
      <h1>Share your Unique<br> <span class="sweet">Identity</span> to the world</h1>
      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum lorem ipsr.</p>
    </div>
  </div>
</section>

  <!-- The Modal/Lightbox -->

  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 5</div>
        <img src="./assets/img/Group 33.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 5</div>
        <img src="./assets/img/Group 34.png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 5</div>
        <img src="./assets/img/Group 35 (1).png" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 5</div>
        <img src="./assets/img/Group 39.png" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 5</div>
        <img src="./assets/img/Group 48.png" style="width:100%">
      </div>

      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>




  <div class="container-fluid lind">
    <div class="container">
      <div class="link-wrap">
        <i class="fa fa-windows"></i>
        <i class="fa fa-amazon"></i>
        <i class="fa fa-apple"></i>
        <i class="fa fa-android"></i>
      </div>
    </div>
  </div>
 
   
    
  </div>
  <div class="container-fluid copy wow fadeInDown">
   Copyright &copy; 2020
 </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https ://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="./assets/js/wow.js"></script>
  <script src="./assets/js/script.js"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>