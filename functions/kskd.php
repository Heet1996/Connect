<?php session_start(); error_reporting(0); ?>
<!DOCTYPE html>

<html>
<head>
 
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
 
 
 
 
  <title>Events|Technovanza</title>
  <link rel="shortcut icon" href="favicon.ico">
  <style type="text/css" media="screen">

  body{
    font-family: 'Source Sans Pro', sans-serif;
  }
  a.white{
    color:black;
  }

  hr{
    width: 75%;
  }

    .row .col{
padding-left: 0px;
padding-right:0px;
 
}
.inner
{
  margin-top:25px;
}

.row
      {
      margin:0px;
 
      }
    .container-fluid
    {
      width: 100%;
    }
    .panel {
    position: relative;
    float: left;
    overflow: hidden;
    width: 100%;
    text-align: center;
    background-color: transparent;
    background-position: center;
    background-size: cover;
}
    
     .panel .image {
    position: relative;
    height: 100%;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
}
.panel .left {
    float: left;
}
.panel .chevron-up-right {
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
    display: block;
    width: 30px;
    height: 30px;
    background: transparent url('images/black-chevron-up-right.png') no-repeat center;
    background-size: contain;
    -webkit-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -moz-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -ms-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -o-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s
}
.panel .chevron-down-left {
    position: absolute;
    bottom: 0;
    left: 0;
    opacity: 0;
    display: block;
    width: 30px;
    height: 30px;
    background: transparent url('images/black-chevron-down-left.png') no-repeat center;
    background-size: contain;
    -webkit-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -moz-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -ms-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -o-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s

}
.panel:hover .chevron-up-right {
    top: 20px;
    right: 20px;
    opacity: 1
}
.panel:hover .chevron-down-left {
    bottom: 20px;
    left: 20px;
    opacity: 1
}
 
.panel .chevron-up-left {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    display: block;
    width: 30px;
    height: 30px;
    background: transparent url('images/white-chevron-up-left.png') no-repeat center;
    background-size: contain;
    -webkit-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -moz-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -ms-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -o-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s
}
.panel .chevron-down-right {
    position: absolute;
    bottom: 0;
    right: 0;
    opacity: 0;
    display: block;
    width: 30px;
    height: 30px;
    background: transparent url('images/white-chevron-down-right.png') no-repeat center;
    background-size: contain;
    -webkit-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -moz-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -ms-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    -o-transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s;
    transition: all 0.125s cubic-bezier(0.39, 0.58, 0.57, 1) 0s
}
.panel:hover .chevron-up-left {
    top: 20px;
    left: 20px;
    opacity: 1
}
.panel:hover .chevron-down-right {
    bottom: 20px;
    right: 20px;
    opacity: 1
}

.v-center-content img{
height: 60vh;
width: 100%;
margin: 0px;
padding: 0px;
 
}
.row1
{
background-color:#FFFFFF;
padding-bottom: 0px;
}
.row2
{
background-color:#141414;
}
.p1
{
text-align:center;

    line-height: 130%;
    padding-left: 4vw;
    padding-right: 4vw;
  
   margin:4vh;
}
.h1
{  
 text-align:center;

margin-top:7vh;

}
content {
    white-space: normal;
}

.p2
{
color:white;
text-align:center;

    line-height: 130%;
    padding-left: 4vw;
    padding-right: 4vw;
    
   margin:4vh;

}
.h2
{   text-align:center;
color:white;
margin-top:7vh;


}
 
      
p{
 
  /* These are technically the same, but use both */
  overflow-wrap: break-word;
  word-wrap: break-word;
 
  -ms-word-break: break-all;
  /* This is the dangerous one in WebKit, as it breaks things wherever */
  word-break: break-all;
  /* Instead use this non-standard one: */
  word-break: break-word;
 
  /* Adds a hyphen where the word breaks, if supported (No Blink) */
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  -webkit-hyphens: auto;
  hyphens: auto;
 
}
.navbar-collapse.collapse {
    display: none!important;
}

#bg img {
   
  background-position: center center;
    background-repeat: no-repeat;

    background-size: cover; 
  max-width: 100%;
  
}
@media only screen and (min-width: 720px)
{
 #bg img {
   
  background-position: center center;
    background-repeat: no-repeat;
    background-size: cover; 
  max-width: 100%;
height:120vh;
} 
}
.brand-logo img
{
  padding: 9px 15px;
  height:65px;
}
/*
#menu {
  position:fixed;
  top:0px;
  width:100%; 
   
  background-color:#DDDDDD;
  color: #FFFFFF;
  z-index:9999;
  display: none;
}
*/
.hide-on-med-and-down a:hover
{
color:#02A8F3;
}
center
{
  margin:47px;
}
body::-webkit-scrollbar {
    width: 0.8em;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}
img
{
 vertical-align: middle;
  }
  </style>
   </head>





<body>
<?php  include("navbar.php"); ?>


<div id="bg">
  <img src="images/eventcover/Events Cover.jpg" alt="">
  
</div> 
 </div>
  <div id="content">
               <div id="content-main" role="main">
                  <div class="panels">
                                       
                     <div class="row row1"> <div class="col l12"> <div class="panel panel-home-panel-motion short dark
home-panel- motion">                               <div class="copy col l7 right v-center-wrapper" >
<div class="arrow left dark"></div>                                  <div class="v -center-content">
<div class="inner">                                        <h4 class="h1" >AutoBots</h4>
<hr /> <p class="p1">&#34 Imagination is more important than knowledge. For knowledge is limited whereas imagination
embraces the entire world &#34- Albert Einstein Intense matches, Fierce competition, Destruction and Glory! An excellent
opportunity for robotic enthusiasts to display and improve their skills. Ideate, Innovate, participate and struggle to
achieve it. </p>                                     <center><a style ="font-color:black;" class="waves-effect waves-
light btn black" href="autobots.php">Read More</a></center> </div>                                  </div>
                                 
                              </div>
                              <div class="image col l5 left .v-center-wrapper">
                                 <div class="chevron-up-right"></div>
                                 <div class="chevron-down-left"></div>
                                 <div class="v-center-content">       
                                   <img class="responsive-img" src="images/web/autobots.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                           </div>
                           <div class="row row2">
                           <div class="col l12 ">
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                            
                              <div class="copy col l7 left  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h2">I Code</h4>
                                       <hr />
                                       <p class="p2">Algorithms and flowcharts everywhere around you?
Puzzles and challenges your cup of tea?
If so, carve your way through 0&#39s and 1&#39s and code your way to glory.

</p>
                                    <center><a class="waves-effect waves-light btn white" href="icode.php">Read More</a></center>
                                    </div>
                                 </div>
                              </div>
                              <div class="image col l5 right">
                                <div class="chevron-up-left"></div>
                                 <div class="chevron-down-right"></div>
                                 <div class="v-center-content">                                 
                                   <img class="responsive-img" src="images/web/Coding .jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                    <div class="row row1">                      
                        <div class="col l12">                           
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                              <div class="copy col l7 right  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h1" >I Mech</h4>
                                       <hr />
                                       <p class="p1">&#34The mechanics of industry is easy. The real engine is the people- their motivation and direction.&#34 - Ken Gilbert
Pick the signs and master the art of designing. Confront the challenges as Newton guides your way to become the undisputed champion. 
</p>
                                       <center><a href="imech.php" class="waves-effect waves-light btn black">Read More</a></center>
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="image col l5 left .v-center-wrapper">
                                 <div class="chevron-up-right"></div>
                                 <div class="chevron-down-left"></div>
                                 <div class="v-center-content">       
                                   <img class="responsive-img" src="images/cover/imech_icon.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                           </div>
                     <div class="row row2">
                           <div class="col l12">
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                            
                              <div class="copy col l7 left  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h2">Eureka</h4>
                                       <hr />
                                       <p class="p2">&#34Eureka! I&#39ve found it! &#34
Technovanza provides you with an opportunity to present novel contraptions that you believe can cause a breakthrough in the life of mankind.  We invite you to bring forth such ideas and present it in a genuine and comprehensive way. 
</p>
                                       <center><a href="eureka.php" class="waves-effect waves-light btn white">Read More</a></center>
                                    </div>
                                 </div>
                              </div>
                              <div class="image col l5 right">
                                <div class="chevron-up-left"></div>
                                 <div class="chevron-down-right"></div>
                                 <div class="v-center-content">                                 
                                   <img class="responsive-img" src="images/cover/Eureka.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                        <div class="row row1">                      
                        <div class="col l12">                           
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                              <div class="copy col l7 right  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h1" >Online Events</h4>
                                       <hr />
                                       <p class="p1">If speed comes naturally to you and if you seek thrill in do-or-die situations, we invite you to take part in the ultimate tech battles through exciting problems as Technovanza goes online for these events</p>
                                       <center><a href="onlineevents.php" class="waves-effect waves-light btn black">Read More</a></center>
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="image col l5 left .v-center-wrapper">
                                 <div class="chevron-up-right"></div>
                                 <div class="chevron-down-left"></div>
                                 <div class="v-center-content">       
                                   <img class="responsive-img" src="images/web/Coding 1.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                           </div>

                        <div class="row row2">
                             <div class="col l12">
                                 <div class="panel panel-home-panel-motion short dark home-panel-motion">
                            
                              <div class="copy col l7 left  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h2">I Build</h4>
                                       <hr />
                                       <p class="p2">&#34 If a structure becomes architecture, then it&#39s art.&#34
Technovanza urges you to apply your creativity and engineer brains and innovate structures which can sustain the given challenges. Design your own structures and give it life by making it a real model!
</p>
                                       <center><a href="ibuild.php" class="waves-effect waves-light btn white">Read More</a></center>
                                    </div>
                                 </div>
                              </div>
                              <div class="image col l5 right">
                                <div class="chevron-up-left"></div>
                                 <div class="chevron-down-right"></div>
                                 <div class="v-center-content">                                 
                                   <img class="responsive-img" src="images/web/ibuild.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                        <div class="row row1">                      
                        <div class="col l12">                           
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                              <div class="copy col l7 right  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h1" >Open Source Hackathon</h4>
                                       <hr />
                                       <p class="p1">We are pleased to announce the kick start of Open Source Hackathon for 2016 in Association with Life Ray and Technovanza 2016, VJTI. 

Attractive prizes, Internship opportunities plus Goodies await the winners of the contest. 
The participants also have the opportunity to compete with the best in India and be a part of the annual technical fest at VJTI. 
</p>
                                       <center><a href="tcs.php" class="waves-effect waves-light btn black">About</a></center>
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="image col l5 left .v-center-wrapper">
                                 <div class="chevron-up-right"></div>
                                 <div class="chevron-down-left"></div>
                                 <div class="v-center-content">       
                                   <img class="responsive-img" src="images/web/Coding 1.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           </div>
                           </div>

                     </div>
                <!--<div class="row row1">                      
                        <div class="col l12">                           
                           <div class="panel panel-home-panel-motion short dark home-panel-motion">
                              <div class="copy col l7 right  v-center-wrapper" >
                                 <div class="arrow left dark"></div>
                                 <div class="v-center-content">
                                    <div class="inner">
                                       <h4 class="h1" >Eureka</h4>
                                       <hr />
                                       <p class="p1">Our talented in-house team use their wealth of knowledge and ingenuity to service produce for some of the biggest and brightest clients across the globe. Whether we&rsquo;re working with global brands, international directors or national agencies; making huge TV campaigns or branded online content, our Scottish hospitality and expertise shines through.</p>
                                       <center><a href="eureka.php" class="waves-effect waves-light btn black">Read More</a></center>
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="image col l5 left .v-center-wrapper">
                                 <div class="chevron-up-right"></div>
                                 <div class="chevron-down-left"></div>
                                 <div class="v-center-content">       
                                   <img class="responsive-img" src="images/cover/Eureka.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                    
                           </div>
                           </div>
-->
                        
                  </div>                  
                </div>  
              <?php include('footer.php'); ?>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/sidenav.js"></script>
      <script type="text/javascript" src="js/flowtype.js"></script>
     
      

 
 <!-- 
         <script type="text/javascript">

(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#menu').fadeIn(500);
            } else {
                $('#menu').fadeOut(500);
            }
        });
    });
})(jQuery);
-->
<script  type="text/javascript" >
 $('p').flowtype({
 minimum :500 ,
 minFont :4,
 maxFont :18,
 maximum : 1200
}); 

 $('h').flowtype({
 minimum :500 ,
 minFont :8,
 maxFont :18,
 maximum : 1200
});   
 </script>     
 </body>
</html>
