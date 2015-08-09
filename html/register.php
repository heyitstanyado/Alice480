<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Welcome to the Registration Page</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(
	function(){
  
	$('#hideShip').click(function() {
		$('#admin2').toggle();
			
	});
});
  

</script>
<link rel="shortcut icon" type="image/x-icon" href="">
<!--<link rel="stylesheet" href="style/style.css">-->
<style type="text/css">
	@import url("http://fonts.googleapis.com/css?family=Open Sans|Droid+Sans|Fjalla+One");
* {
    margin: 0;
    padding: 0;
}
body {
    font-size: 100%;
}
/***********************
    STRUCTURE
***********************/
/*
::selection{
    background:#F36;
    color:#fff;
    text-shadow:none;
}
::-moz-selection{
    background:#F36;
    color:#fff;
    text-shadow:none;
}
**/
body {
    font: 14px/1.5 Open Sans,Verdana, Arial, Helvetica, sans-serif;
    background-color: #e45c06;
    color: #000;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    padding-right: 15px;
    padding-left: 15px; 
}
h1, h2, h3, h4, h5, h6{
    color:#000;
    padding-bottom:5px;
    padding-top:15px;
    font-family:Cambria,georgia,'times new roman',serif;
    text-transform:uppercase;
}
p{
    /*
	text-shadow:0 1px #fff;
	**/
}

a:link, a:visited {
    color: #000;
    text-decoration: none;
}
a:hover, a:active, a:focus {
    text-decoration: none;
}
ul,li{
    list-style:none;
}
.last{
    border-bottom:none !important;
}
.container {
    background: #e45c06;    
}
#header #logo-container{
    display:inline-block;
    padding-left:0; 
}
#header .top-bar{
    padding:10px 0;
}
#header .logo{
    width:140px;
    height:140px;   
}
#header .logo-name{
    display:inline-block;
    vertical-align:top;
    padding-top:33px;
    font-size:20px;
    font-weight:normal;
    text-transform:uppercase;
    text-shadow:0 1px #fff;
}

#header h1 {
	text-align: center;
}
#nav {
	
    position:relative;
    text-align:center;
    font:16px Cambria,georgia,'new times roman',times,serif;
}

#login {
	display: inline-block;
	
}
.nav{
	display: inline-block;
}
.nav li {
    display:inline-block;
    margin-left:8px;    
}
.nav a, .nav a:visited { 
    padding: 6px 20px;
    display: block; 
    text-decoration:none;
    color:#fff;
    text-transform:uppercase;
    
}
.nav a:hover, 
.nav a:active, 
.nav a:focus {
    background:#000;
    color: #fff;
    -webkit-transition:all 0.3s;
    transition:all 0.3s;
}

#buttonLogIn{
	display: inline-block;
    margin-left: 0px; 
    margin-top: 0px;
	margin-bottom: 2px;
    width: 80px; 
	
    height: 30px;   
 /*   background: transparent; */
/*	border: none; */ 
    color: 000;   
    font-size:16px;
    font-weight:700;
}



#main-content{
	text-align:center;
    clear: both;
	
	
    
}


#main-content .content{
    overflow:auto;
    padding:30px 0;
	background: #fff;
}
#main-content p{
    max-width:700px;
}

.content {
    padding: 10px 0;
    width: 960px;
    margin: 0 auto; 
}

#buttonSug {
	display: inline-block;
    margin-left: 0px; 
    margin-top: 0px;
    width: 150px; 
	
    height: 30px;   
 /*   background: transparent; */
 /*   border: none; */
    color: 000;   
    font-size:16px;
    font-weight:700;
}
#big-lettered{
    font:3.6em 'Fjalla One','Droid Sans', Arial, Helvetica, sans-serif;
    color:#fff;
    margin:20px;
    text-transform:uppercase;
}
#big-lettered p{
    text-shadow: 0 1px rgba(0, 0, 0, 0.5);
    max-width:350px;
}

.name{
    font-size:12px;
    text-transform:uppercase;
    font-weight:bold;
    padding:5px 0;
    border-bottom:1px solid #ccc;
}
.position{
    font-size:13px;
    text-transform:capitalize;
    color:#e45c06;
    padding:5px 0;
}

#footer {
	color: #000;
    padding: 25px 0;
    clear: both;
    background:#e45c06;
	text-align: center;
}


#footer .logo{
    position:relative;
    top:18px;
    width:70px;
}
#copyright{

    display:inline-block;
}
#copyright a{
    color:rgb(0,0,0);
}
/**********************************/

/*HTML 5 support - Sets new HTML 5 tags to display:block so browsers know how to render the tags properly. */
header, section, footer, aside, article, figure {
    display: block;
}

/***************************/
#link
{
    color:rgb(0,0,0);
}

#homeh{
    text-decoration: underline;
}

.fieldswrapper1{
	text-align:start;
	max-width:400px;
	margin-left: auto;
	margin-right: auto;
}

.regcontent
{
	text-align: start;
	margin-left: auto;
	margin-right: auto;
	max-width:400px;
	
}

.regfields
{
	padding-bottom: 5px
	
}
.reginput{
	min-height:36px;
	width:100%;
}

.regbuttons
{
height: 40px;
font-weight: bold;
font-size: 15px;
width: 80px;
padding-bottom:5px
}

.checkboxes
{

height: 20px;
width: 20px;
}
</style>

</head>

<body>
<div class="container">
  <header id="header">
        <div class="content">
            <div class="top-bar">
				<h1> Alice Programming Contests</h1>
<!--                <h1 id="logo-container">
                    <a href="" title="Homepage">
                        <img class="logo" src="" alt="logo">
                        <span class="logo-name">
                            Alice Programming Contest<br>
                        </span>
                    </a>
                </h1><!--end logo-container-->
                   
                </div>
            
            <!--end top-bar-->
    
            <nav id="nav">
              <ul class="nav">
                    <li><a id="homeh" href="" style="text-decoration: underline;">home</a></li>
                    <li><a class="drop" href="">About</a>
                    <li><a id="gallery" href="">Rules</a></li>
                    <li><a id="contact" href="">Contact Us</a></li>
               </ul>
			   <div id = "login"><button id="buttonLogIn"type="button" onclick="alert('GO TO LOG IN PAGE')" style = "right: 20px;">Log In</button>
					<p><a href="">create account</a><p></li>
			    </div>
			</nav><!--end navigation-->
		</div>
<!--end header content-->
  </header>
    <!-----end header----->
  <div id="main-content">
    <div class="content" >
		<div class="welcome" >
		<h1>New Users</h1>
	<div class= "regcontent">

<form method="post" action="insert.php">

	
	<div class = "regfields">
	Username (email address)<br>
	<input class= "reginput"  type="text" name="user">
	<br>
	</div>
	<div class = "regfields">
	Password<br>
	<input class= "reginput" type="password" name="password"><br>
	</div>
	<div class = "regfields">
	Re-Enter Password<br>
	<input class= "reginput" type="password" name="password2"><br>
	</div>
	<div class = "regfields">
	First name<br>
	<input class= "reginput" type="text" name="firstname"><br>
	</div>
	<div class = "regfields">
	Last name<br>
	<input class= "reginput" type="text" name="lastname"><br>
	</div>
	<div class = "regfields">
	Sponsor Code<br>
	<input class= "reginput" type="text" name="sponsor"><br>
	</div>
	
	<input  type="checkbox" name="hideShip" id="hideShip" value="Yes">
	<text> I would like to be a Sponsor<text><br> <br>

	<div id="admin2" style="display:none">
	
	<div class = "regfields">
		Affiliation<br>
	<input class= "reginput"id="affiliation" type="text" name="affiliation"><br />
	</div>
	<div class = "regfields">
	City<br>
	<input class= "reginput"id="city" type="text" name="city"><br />
	</div>
	<div class = "regfields">
		State<br>
	<input class= "reginput"id="state" type="text" name="state"><br />
	</div>
	</div>

	
<!--<p>If you click on the "Hide" button, I will disappear.</p>-->
<input class="regbuttons" type="submit" value="Register">

</div>



</div>
</div>
</form>		
</div>
</div>
  <!----end main-content--->
</div>
<!-- end .container -->
<footer id="footer">
        <div class="content">
<!--           <img class="logo" src="" alt="logo">
-->
           <div id="copyright">
           <p>©2013 Mercer Computer Science Department. All Rights Reserved.</p>
           <p>Website Design by  students</p>
           </div>
        </div>
</footer>

<script type="text/javascript" src="ASA%20Mercer%20_%20African%20Student%20Association_files/jquery.js"></script>
<script type="text/javascript" src="ASA%20Mercer%20_%20African%20Student%20Association_files/jquery_002.js"></script>

</body></html>