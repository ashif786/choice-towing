<!DOCTYPE html>
 <?php include'link-file.php'; ?>
<html lang="en">
    <head>        
   
    <?php include'main-header.php'; ?>
	 
    </head>
    <style>
        body{
            color: #524b4b;
    font-family: 'Montserrat', sans-serif;
}
      .nav>li>a:focus, .nav>li>a:hover { background-color: transparent;} 
      
      .nav .open>a, .nav .open>a:focus, .nav .open>a:hover { background-color: #eeeecc05; }
      
      /*hover color for menu elements*/
       .navbar-nav>li>a>span:hover {
   color:#0da9d5;
}
      
      /* drop-down on hover*/
      .dropdown:hover .dropdown-menu {
  display: block;
}
 
/*background color on hover for drop down menu*/
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover { background-color: #0da9d578 !important;background-image: none;}
/*when minimizing ther will be a button for the menu collapse. this code is for changing the width and height of the icon*/
.navbar-toggle .icon-bar { width: 28px; height: 4px;  }
    </style>
	
    <body>
	<a id="button"></a> 
  <nav class="navbar" style="margin-bottom: 0px;  border: 0px solid transparent;"> 
  <div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar" style="background:#FF5722;"></span>
        <span class="icon-bar" style="background:#FF5722;"></span>
        <span class="icon-bar" style="background:#FF5722;"></span>
      </button> 
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav"  >
      <li class="active"><a href="#" style="color: #000;" class=" "><span style="border-right: 1px solid #9E9E9E;">Home&nbsp;&nbsp;&nbsp;</span></a></li>
       
      <li class="dropdown">
        <a class="dropdown-toggle  " data-toggle="dropdown" href="#" style="color: #444;" class="hvr-underline-reveal"><span style="border-right: 1px solid #9E9E9E;">Services&nbsp;&nbsp;&nbsp;</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"   style="color: #000;">Towing</a></li>
          
          <li><a href="#" class=" " style="color: #000;">Flat Tyre</a></li>
          <li><a href="#" class=" " style="color: #000;">Dead Batteries</a></li>
          
        </ul>
      </li>      
      <li><a href="#" style="color: #000;" class=" "><span style="border-right: 1px solid #9E9E9E;">Gallery&nbsp;&nbsp;&nbsp;</span></a></li>
        
      
       <li><a href="#" style="color: #000;" class=" "><span style="border-right: 1px solid #9E9E9E;" >About Us&nbsp;&nbsp;&nbsp; </span></a></li>
        
        <li><a href="#" style="color: #000;" class=" "><span   >Contact Us </span></a></li>
         <a href="https://workwithglobal.com" target="_blank"> 
              <img class="img-responsive" style="margin: 0 auto; width: 18%;" src="img/logo/hiring.png" alt=""/>
              </a>
        
    </ul>
           </div>
  </div>
  </nav> 
    
    
   </body>      
    
 </html>