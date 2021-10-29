<?php
include 'connect.php';
$fname=$lname=$uname=$password="";
if(isset($_POST['submit'])){
     $fname = $_POST['firstName'];
     $lname = $_POST['lastName'];
     $uname = $_POST['userName'];
     $password = $_POST['passwd'];
}
$sql ="INSERT INTO `sign` (firstName, lastName, userName, passwd) VALUES ('$fname', '$lname', '$uname', '$password')";
$result = mysqli_query($conn, $sql);
if(!$result){
  echo 'sorry something went wrong please try again';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my hardware store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:cyan">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">StoreBrand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">content</a>
            <ul class="dropdown-menu">
              
              <li><a class="dropdown-item" href="#">Best ironsheets</a></li>
                    <li><a class="dropdown-item" href="#">Bambur cement</a></li>
                    <li><a class="dropdown-item" href="#">Tiles</a></li>
                    <li><a class="dropdown-item" href="#">Roofing nails</a></li>
                    <li><a class="dropdown-item" href="#">Wires</a></li>
                    <li><a class="dropdown-item" href="#">Wheelbarrows</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
<section>
  <div class="container ">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#myCarousel"  data-bs-slide-to="1"></li>
          <li data-bs-target="#myCarousel"  data-bs-slide-to="2"></li>
          <li data-bs-target="#myCarousel"  data-bs-slide-to="3"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image1.jpg" class="d-block" >
          </div>
      
          <div class="carousel-item">
            <img src="image2.jpg" class="d-block">
          </div>
      
          <div class="carousel-item">
            <img src="image3.jpg" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="image4.jpg" class="d-block" >
          </div>
          <!-- Left and right controls -->
          <button class="carousel-control-prev "  type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " ></span>
          </button>
          <button class="carousel-control-next" type="button"  data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" ></span>
          </button>
        </div>
      
        
      </div>
</div>
  
</section>
<section class="forms mt-5">
    <div class="container bg-info ">
        <div class="row">
        <div class="page-header bg-seconadary">
            <h1 style="margin-top: 20px;">Registration Form With mazila's hardware store</h1>
        </div>
        <form class="form-horizontal" role="form" method="post">
          
        <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label">First Name:</label>
        <div class="col-sm-6">
        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
        </div>
        </div>
          
        <div class="form-group">
        <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
        <div class="col-sm-6">
        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        </div>
          
        <div class="form-group">
        <label for="" class="col-sm-2 control-label">Gender:</label>
        <div class="col-sm-6">
        <label class="radio-inline">
        <input type="radio" name="gender" id="gender1" value="male">Male
        </label>
        <label class="radio-inline">
        <input type="radio" name="gender" id="gender2" value="female">Female
        </label>
          
        </div>
        </div>
          
        <div class="form-group">
        <label for="userName" class="col-sm-2 control-label">User Name:</label>
        <div class="col-sm-6">
        <input type="email" name="userName" class="form-control" id="userName" placeholder="User Name">
        </div>
        </div>
          
        <div class="form-group">
        <label for="passwd" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-6">
        <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Password">
        </div>
        </div>
          
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit" id="register">Register</button>
        </div>
        </div>
          
        </form>
          
        </div>
        </div>
    
  </section>
  <section>
    <div class="container mt-5 "  background-color: lavender;>
    <h2 style="margin-top: 20px; text-align: center;font-size: 30px;"> My Stores Image Gallery</h2>
      <p style="text-align: center; color: crimson; font-size: 40px;">These are the images of my stores taken.</p>
      
      
          <h2>Our best products we sell.</h2>
      
        <div class="row">
            <div class="col-md-4">
          <div class="thumbnail"  style="height:40rem">
            <a href="image5.jpg">
              <img src="image5.jpg" alt="Nature" style="width:100%">
              <div class="caption">
              <h3>all types of hinges</h3>
              <p>These are the best hinges imported from india, basically we have thos that are dynamic and statics hinges.</p>
              <p<small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </a>
          </div>
        </div>
         <div class="col-md-4">
          <div class="thumbnail"  style="height:40rem">
            <a href="image6.jpg">
              <img src="image6.jpg" alt="Nature" style="width:100%">
              <div class="caption">
              <h3>piping connectors</h3>
              <p >This types of piping connectors was imported from china the one of the biggest suppliers of these products, the are the best due to there materials.</p>
              <p><small class="text-muted">Last updated 3 mins ago</small></p>
                
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="thumbnail"  style="height:40rem">
            <a href="image7.jpg" target="_blank">
              <img src="image7.jpg" alt="Nature" style="width:100%">
              <div class="caption">
              <h3>All types of screwdivers and wrenches</h3>
              <p >Our hardware is one of the best store in East Africa suppliers of this products, we have all types of screwdrivers and wrenches imported from Japan.</p>
              <p><small class="text-muted">Last updated 3 mins ago</small></p>
                
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4"  style="height: 40rem">
          <div class="thumbnail">
            <a href="image8.jpg" >
              <img src="image8.jpg" alt="Nature" style="width:100%">
              <div class="caption">
              <h3 >All types of screws</h3>
              <p >We have not left behind to bring for our customers, the best screws that makes work easier, they are very strong made and they can also be operated by machine.</p>
                <p><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
      
  </section>
  <section>
    <div class="container mt-5" >
      <div class="accordion" id="accordionExample">
        <h1 class="mt-5">Most questions Asked by people about how i started this store.</h1>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              when did you start this store?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Definitely the store started long time ago in my mind while i was a young lad as an idea and i started putting my ideas into implementation and established it in 2017.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How did you begin setting up the business?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              This store began as a small hardware in Nairobi, where i was selling small things like ironsheets, nails cements and others many, as it gained momentum.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              When did the business started shooting up?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              To be sincere, after getting good connection and understanding my customers well my business started getting better since i was buying Things in some bigger store, the competition was pretty high but i did not lose hope, i got a good friend of mine from Canada who suggested that i import products from abroad at a cheap price, and i saw that the idea was good, which prompted me to try, when i tried once everything fell into place that was the beginning of my success.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Do you have branches of your store?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Ofcourse yes, i have three branches in kenya that's Mombasa, Kisumu and Eldoret, i have two of them in Uganda and one in Tanzania.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             What are some of your reasons for starting up this stores?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
             The main reason was, it was ny passion to indulge into this business to be an enterprenuer, working and providing jobs to my fellow people, and this keeps me alive.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What level of education have you reached?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              I started software development at Institute of Software Technologies, i went to study Computer Science and Networking at Kenyatta University?
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Where do you see yourself in 10years coming?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              My goals is that i will have been integrated by so many people not only in Africa but also outside Africa and setting up businesses in other continents
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What are some of your hobbies?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              I do love reading, developing funny Apps and Websites travelling and spending to with my friends and families.
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <section>
    <div class="container mt-5" style="background-color: cadetblue;">
      <h2 style="margin-top: 20px; text-align: center;font-size: 30px;"> My Stores Image Gallery</h2>
      <p style="text-align: center; color: crimson; font-size: 40px;">These are the images of my stores taken.</p>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="image10.jpg" target="_blank">
              <img src="image10.jpg" alt="Lights" style="width:100%;height:252px; ">
              <div class="caption">
                <p>This one is an electronic store hardware which is still growing.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="image9.jpg" target="_blank">
              <img src="image9.jpg" alt="Nature" style="width:100%">
              <div class="caption">
                <p>The first store to be set up, that have 100 employees.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="image11.jpg" target="_blank">
              <img src="image11.jpg" alt="Fjords" style="width:100%">
              <div class="caption">
                <p>This one is situated in Nairobi CBD, and its doing well.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="image12.jpg" target="_blank">
              <img src="image12.jpg"  style="width:100%">
              <div class="caption">
                <p>This one is situated in Kisumu county, with extreme bags of cements and other many building construction materials.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="image13.jpg" target="_blank">
              <img src="image13.jpg"  style="width:100%; height: 325px;">
              <div class="caption">
                <p>This one is situated in Kampala, which is also growing rapidly .</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <section>
    <div class="container" style="background-color: black; height: auto;">
      <h1 style="margin-top: 20px;">contact me on this site i will be available always</h1>
      <div class="row" style="text-align: center;">
        <div class="col-md-4" style="color: white; padding: 30px;">
          <div class="caption">
            <h4 style="font-size: 20px;">contacts</h4>
            <p>+254702618364</p>
            <p>+255738618364</p>
            <p>+256702456784</p>
          </div>
        </div>
        <div class="col-md-4" style="color: white; padding: 30px;">
          <div class="caption">
            <h4 style="font-size: 20px;">Social Media</h4>
            <a href="whatapp.com"><i class="fa fa-whatsapp" ></i></a>
            <a href="twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="instagram.com"><i class="fa fa-instagram"></i></a>
            <a href="facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="linkedin.com"><i class="fa fa-linkedin"></i></a>
            
          </div>
        </div>

      </div>

    
    </div>
  </section>
</body>
</html>