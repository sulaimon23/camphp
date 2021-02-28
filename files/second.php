<?php

 include '../db.php';
  if(isset($_POST['submit-btn'])){
   $email = $_POST['email'];
 
   $query = $conn->query("SELECT * from cam where email='$email'"); $numrows =
$query->num_rows; if($numrows == 0){ $sql = $conn->query("INSERT INTO cam(email)
VALUES ('$email')"); if($sql){ $error = "
<div class="succ wow slideInDown slow" id="one">
  <div>
    <h1 id="can">&times;</h1>
    <i class="fa fa-check-circle"></i>
    <p>Subscribed</p>
  </div>
</div>
"; }else{ $error = "
<div class="dang wow slideInDown slow" id="one">
  <div>
    <h1 id="can">&times;</h1>
    <i class="fa fa-close"></i>
    <p>An Error occured</p>
  </div>
</div>
"; } }else{ $error = "
<div class="warn wow slideInDown slow" id="one">
  <div>
    <h1 id="can">&times;</h1>
    <i class="fa fa-exclamation-triangle"></i>
    <p>Email already Exist</p>
  </div>
</div>
"; } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="wrapper">
        <div class="row w-100">
          <div class="col-xs-12 col-md-6 col-lg-6 nopadding">
            <div class="left_con">
              <div class="adj mx-auto">
                <div class="cac">
                  <img src="../img/Group 34.svg" alt="" />
                </div>
                <div class="info">
                  <p>Tell us about your business</p>
                  <img
                    src="../img/remark_m_mark_iceblue 1.svg"
                    style="width: 30px; height: 30px"
                  />
                </div>
<form action="" method="Post">
                <div class="info_text">
                  <?php

                  if(isset($error)){
                    echo $error;
                  }
              
                 ?>

                  <input type="text" placeholder="Name" style="width: 100%" />
                  <input
                    class="phon"
                    type="text"
                    placeholder="Phone number"
                    style="width: 37%; margin-right: 4%"
                  />
                  <input type="email" name="email" placeholder="Email" style="width: 58%" />

                  <select class="form-control form-control-sm">
                    <option
                      style="color: rgba(140, 164, 175, 0.5)"
                      value=""
                      disabled
                      selected
                      hidden
                    >
                      How can we help you?
                    </option>
                    <option>Social media management</option>
                    <option>Social media audit</option>
                    <option>Social content</option>
                    <option>Social media strategy</option>
                    <option>Search engine optimization</option>
                    <option>Social media ads</option>
                    <option>Social media page revamp</option>
                  </select>
                  <select class="form-control form-control-sm">
                    <option
                      style="color: rgba(140, 164, 175, 0.5)"
                      value=""
                      disabled
                      selected
                      hidden
                    >
                      What's your monthly budget?
                    </option>
                    <option>Small select</option>
                  </select>
                  <div
                    style="
                      display: flex;
                      align-items: flex-start;
                      justify-content: space-between;
                      margin: 10px auto;
                    "
                    class="do"
                  >
                    <h3>Do you have a website?</h3>
                    <div style="width: 50%" class="check-box">
                      <div class="check">
                        <label
                          class="form-check-label mr-2"
                          for="exampleRadios1"
                        >
                          Yes
                        </label>
                        <input
                          type="radio"
                          name="exampleRadios"
                          id="exampleRadios1"
                          value="option1"
                        />
                      </div>
                      <div class="check">
                        <label
                          class="form-check-label mr-2"
                          for="exampleRadios1"
                        >
                          No
                        </label>
                        <input
                          type="radio"
                          name="exampleRadios"
                          id="exampleRadios1"
                          value="option1"
                        />
                      </div>
                    </div>
                  </div>
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="Your message"
                  ></textarea>
                  <div class="but">
                    <a href="./third.html"
                      ><button class="btn bot w-100 " name="submit-btn">Submit</button>
                    </a>
                  </div>
                </div>
                </form>
                <h5 class="foot" id="w1" style="margin-top: 30px">
                  &copy;2021 Remark Social
                </h5>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-6 nopadding">
            <div class="right_con">
              <div style="display: block">
                <img src="../img/Ellipse 3.svg" alt="logo" />
                <p class="follow">Follow our story</p>

                <div class="icons">
                  <i class="fa fa-facebook-f"></i>
                  <i class="fa fa-play"></i>
                  <i class="fa fa-instagram"></i>
                  <i class="fa fa-linkedin"></i>
                </div>
                <h5 class="foot" id="w2" style="margin-top: 30px">
                  &copy;2021 Remark Social
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
