<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>

  <title>AnimotionsZ</title>
  <meta charset="utf-8" name="google" content="notranslate">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
  <script type="text/javascript" src="css/lightbox/lightbox-plus-jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/lightbox/lightbox.min.css">

  <!-- less -->
  <link rel="stylesheet/less" type="text/css" href="css/main.less" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>

</head>
<body>     

<nav class="navbar navbar-expand-lg justify-content-center fixed-top navbar-light ">
<div class="container justify-content-center p-0">
  <a class="navbar-brand" href="#home"><img src="images/logo.png" alt=""></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#about-us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#amenities">Amenities</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#specification">Specifications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Showcase</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#location">Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
    </ul> -->
    <div class="head_callbackcss ml-auto  d-none d-sm-block ">
      <!-- <h6><b>Call Us : 73047 79955</b></h6> -->
      <form action="callback.php" method="POST">
        <li class=''><input type="text" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" title="Please enter 10 digit number." name="phno" class="callback_input1" required></li>
        <li class=''><button type="submit" name="callbackForm" class="callback_btn1">Request Call Back</button></li>
      </form>
    </div>
  </div>
  <div class="head_callbackcss d-sm-none">
  <form action="callback.php" method="POST">
    <li><input type="text" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" title="Please enter 10 digit number." name="phno" class="callback_input1" required></li>
    <li><button type="submit" name="callbackForm" class="callback_btn1">Request Call Back</button></li>
  </form>
</div>
</div>
</nav>


<div class="fixed-footer d-block d-sm-none">
    <div class="row">
        <div class="col-4 p-0">
             <center>
                <a href="tel:+91" onclick="ga('send', 'event', { eventCategory: 'Mobile Call', eventAction: 'click to call', eventLabel: 'Call sales'});" class='call'>
                    <p class="p-0 mb-0"> Call </p>  
                </a>
            </center>
        </div>
        <div class="col-4 p-0" style="border-left: 1px solid #fff">
            <center>
              <a href="https://wa.me/+91?text=Hi I want to enquire about Abroad studies" target="_blank" class="call whatupno" title="whatsapp Us"><p class="p-0 mb-0"> WhatsApp</p>
              </a>
            </center>
        </div>
        <div class="col-4 p-0" style="border-left: 1px solid #fff">
            <center>
                <div class="fixed_contact2">
                    <p class="p-0 mb-0" onclick="openRightMenu()">Enquiry</p>
                </div>
            </center>
        </div>
    </div>
</div>






<div class="fixed_contact d-none d-sm-block">
    <button class="w3-button  w3-right" onclick="openRightMenu()">
    <!-- <p class="open blink"><img src="images/chat.png" alt="">Enquiry</p></button> -->
    <p class="open blink">Enquiry</p></button>
</div>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" id="close"><i class="fa fa-times"></i></button>
  <form enctype="multipart/form-data" method="post" action="side-form-mail.php">
        <div class="whiteOpaqueBox open" style="opacity:1;">
            <h5 class="itc my-3 pl-1"><b>Enquiry</b></h5>

            <div class="form-group">
              <input type="text" required="required" name="name"  class="form-control side_form name" placeholder="Name" required>
            </div>

            <div class="clr"></div>
            <div class="form-group">
              <input type="email" required="required" name="email"  class="form-control side_form email"  placeholder="Email ID" required>
            </div>

            <div class="clr"></div>
            <div class="form-group">
              <input type="tel" required="required" name="mobile"  class="form-control number side_form phone" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" title="Please enter 10 digit number." required>
            </div>

            <div class="clr"></div>
            <div class="form-group">
              <textarea  name="message" required="required" rows="5" class="form-control side_form comment" placeholder="Comments" ></textarea>
            </div>
            
            <div class="clearfix"></div></br>
            <center>
            <input type="submit" name="saveForm" id="submit" value="SUBMIT"  class="redButton side_form_btn submit-form">
            <div class="clearfix"></div> <br />
            </center> 
        </div>
    </form>
</div>
<!-- <div class="fixed_contact_scroll">
    <a href="javascript:void(0)" ><i class="fa fa-times"></i></a>
</div> -->



<script>
  function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
  }

  function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
  }

  function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
  }

  function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
  }
</script>

<script>

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 120 //Add this
    }, 300);
});
</script>