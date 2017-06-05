<?php  session_start(); error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HACKATHON|Technovanza</title>
  <link rel="shortcut icon" href="img2/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
 
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

</head>
<style type="text/css" media="screen">

a:hover, a:focus{
  text-decoration: none;
}

.img-responsive{
  width:100%;
  height:auto;
}

#event_title{
  font-family: 'Muli', cursive;
}

body{
 font-family: 'Roboto', sans-serif;
}

blockquote{
  border-left: 0.4vw solid #428bc2;
}

.container{
  width: 100%
}/*
#menu {
  position:fixed;
  top:0px;
  width:100%; 
  z-index:9999;
  display: none;
}*/

.parallax-container{
  width: 100%;
  height: 55vh;
}
.brand-logo img
{
  padding: 9px 15px;
  height:65px;
}

  </style>
  </head>
<body>
<?php  include("navbar.php"); ?>
<div class="container">


    <div class="row">
<div id="event_title"><h2>Open Source Hackathon</h2><hr></div>
        <div style="overflow:auto;-webkit-overflow-scrolling:touch">
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tagline">Tagline</a></li>
              <li><a data-toggle="tab" href="#register">Registration</a></li>

               
              <li><a data-toggle="tab" href="#contact">Contact us</a></li>

          </ul>
         </div>


   
 

     <div class="tab-content">
      <div id="tagline" class="tab-pane fade in active">
            
We are pleased to announce the kick start of Open Source Hackathon for 2016 in Association with Life Ray and Technovanza 2016, VJTI. 
<br>
Attractive prizes, Internship opportunities plus Goodies await the winners of the contest. 
The participants also have the opportunity to compete with the best in India and be a part of the annual technical fest @VJTI. 
<br>
We invite student registration for the same on TCS campus commune portal (nextstep.tcs.com) . Hurry as the last date for registration is 23-Nov-2016 
<br>
<b>There would be 2 rounds- </b>
1)Round 1 begins 24 Nov-2016 to 28-Nov-2016. 
2)Round 2 would be the grand finale @VJTI Mumbai campus. 

<br>The students can log in to Campus Commune portal and click on the Open Source Hackathon Banner on their Home page for registering. 

If you are not an alien and your skill is not coconut climbing we invite you to test waters and challenge yourself at
TCS Open Source Hackathon - Decrypt the Real World!
<br>
<b>Student X- Oooo….What is it?</b>
A platform to use open source technologies to solve real world challenges in
1) Swatch Bharat<br>
2)  Education<br>
3) Environment & Health Safety themes<br>
<b>Student X - Who can be in it?</b>
The contest is open to students from batches of 2017, 2018, 2019 from all the relevant institutes in India. Students will need to Register on TCS Campus Commune Portal for taking part in the contest. Each team should have 3 members.<br>
<b>Student X- Till when can I register?</b>
Last date for team registration on Campus Commune is 23 Nov 2016.Select a theme and submit the details on features, novelty and how the application affects the stakeholders. Top 10 teams will be short-listed based on this round, across all zones, which will move to the Final Round.<br>
<b>Student X- How does it help me and what do I win?</b>
Top 2 teams will be selected for the Winner Awards(Winner :INR 20K, Runner :INR. 10K)
All members of the winning teams at the Grand Finale will have an opportunity of an internship with the TCS Open Source Group and/or Environmental Sustainability, Health & Safety (ESHS) team. There would also be a special awards from Liferay including goodie bag and Kindles.<br>
<b>Student X- Wow!! Goodies plus Internship plus prize money!!! Now that’s what I call a #jackpot!!!</b>
<br>Still reading!! Hurry and register on the below link and remember early birds always catch the fish!!!
<a href="https://nextstep.tcs.com/">https://nextstep.tcs.com/</a>


      

      
     
      </div>

       
      <div id="register" class="tab-pane fade in active">

     <center>
<br><br><br><br><br><br>
           
         <a href="https://nextstep.tcs.com"><input type="submit" name="submit" class="waves-light btn" value="register"></a>

      </center>      
     
      
      </div>
      
      <div id="contact" class="tab-pane fade">

    
     <b><blockquote>Contact us</blockquote></b>
                    <i class="material-icons">call</i>&nbsp Vishwa karia +91-9773408681

<br>


      
      
    
      </div>
 <br>
<br>
       
      
 </div>
 <br><br><br>
 </div>
 <br><br><br><br><br>
 </div>
 <br><br><br>
<?php include("footer.php");  ?>
<script src="https://fastcdn.org/FlowType.JS/1.1/flowtype.js"></script>


<script type="text/javascript">
  $('body').flowtype({
 minimum :500 ,
 minFont :4,
 maxFont :16,
 maximum : 1200
});       
 
   $('blockquote').flowtype({
 minimum :500 ,
 minFont :4,
 maxFont :20,
 maximum : 1200
});     
   /*(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#menu').fadeIn(500);
            } else {
                $('#menu').fadeOut(500);
            }
        });
    });
})(jQuery);*/
</script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/sidenav.js"></script>
      <script type="text/javascript" src="js/parallax.js"></script>
</body>

</html>

