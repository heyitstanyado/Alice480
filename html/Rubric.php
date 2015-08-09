<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Welcome | Alice</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
$(function() {
    // Get all textareas that have a "maxlength" property.
    $("textarea[maxlength]").each(function() {

        // Store the jQuery object to be more efficient...
        var $textarea = $(this);

        // Store the maxlength and value of the field
        var maxlength = $textarea.attr("maxlength");

        // Add a DIV to display remaining characters to user
        $textarea.after($("<div>").addClass("charsRemaining"));

        // Bind the trimming behavior to the "keyup" & "blur" events (to handle mouse-based paste)
        $textarea.on("keyup blur", function(event) {
            // Fix OS-specific line-returns to do an accurate count
            var val = $textarea.val().replace(/\r\n|\r|\n/g, "\r\n").slice(0, maxlength);
            $textarea.val(val);
            // Display updated count to user
            $textarea.next(".charsRemaining").html(maxlength - val.length + " characters remaining");
        }).trigger("blur");

    });
});
</script>

<script type="text/javascript">
	function BuildFormFields($amount)
	{
		var	$container = document.getElementById('FormFields'),
			$item, $field, $i;
		    $container.innerHTML = '';
		for ($i = 0; $i < $amount; $i++) {
			$item = document.createElement('div');
			$item.style.marginLeft = "auto";
			$item.style.marginRight="auto";					
			$item.style.width="400px";	
			$item.style.position="relative";
			$item.style.textAlign="left";		
			$br = document.createElement("br");
						
		
			$field = document.createElement('label');
			$field.innerHTML = 'Criteria Max Points:';

			$item.appendChild($field);

			$field = document.createElement('input');
			$field.name = 'CritPoint[' + $i + ']';
			$field.type = 'text';
			$field.style.verticalAlign = "middle";
			$field.style.width="50px";
			$item.appendChild($field);
			$item.appendChild($br);
			
			$field = document.createElement('label');
			$field.innerHTML = 'Criteria Description:';
			$field.style.marginRight = '76px';
			$item.appendChild($field);
			$item.appendChild($br);
			
			$field = document.createElement('textarea');
			$field.name = 'ProbDesc[' + $i + ']';
			$field.style.width="400px";
			$field.style.height="70px";
			$item.appendChild($field);
			$item.appendChild($br);
		
			$container.appendChild($item);
		}
	}

</script>







<HEAD>






<link rel="shortcut icon" type="image/x-icon" href="">
<!--<link rel="stylesheet" href="style/style.css">-->
<style type="text/css">
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
    color: #fff;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    padding-right: 15px;
    padding-left: 15px; 
}
h1, h2, h3, h4, h5, h6{
	color: #000;
	padding-bottom: 5px;
	padding-top: 15px;
	font-family: Cambria,georgia,'times new roman',serif;
	text-transform: uppercase;
	text-align: center;
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



label{
    display: inline-block;
    float: left;
    clear: left;
    width: 175px;
    text-align: left;
}
input {
  display: inline-block;
  float: right;
}

form{
	line-height:25px;
	position:relative;
	margin-left:auto;
	margin-right: auto;
	width: 400px;
	text-align: center;
}

#main-content .content .RubricForm form label {
	color: #000;
}
</style>

</head>

<body onload="BuildFormFields(parseInt(1, 10));">
<div class="container">
  <header id="header">
        <div class="content">
            <div class="top-bar">
				<h1> Alice Programming Contests
<!--                <h1 id="logo-container">
                    <a href="" title="Homepage">
                        <img class="logo" src="" alt="logo">
                        <span class="logo-name">
                            Alice Programming Contest<br>
                        </span>
                    </a>
                </h1><!--end logo-container-->
                   
                </div>
            </div>
            <!--end top-bar-->
    
            <nav id="nav">
              <ul class="nav">
                    <li><a id="homeh" href="http://alice480.cs.mercer.edu/" style="text-decoration: underline;">home</a></li>
                    <li><a class="drop" href="">About</a>
                    <li><a id="gallery" href="">Rules</a></li>
                    <li><a id="contact" href="">Contact Us</a></li>
               </ul>
			   <div id = "login"><button id="buttonLogIn"type="button" onclick="alert('GO TO LOG IN PAGE')" style = "right: 20px;">Log In</button>
					<p><a href="alice480.cs.mercer.edu\">create account</a><p></li>
			   
            </nav><!--end navigation-->
        </div><!--end header content-->
    </header>
    <!-----end header----->
  <div id="main-content">
    <div class="content" >
	  <div class="title" >
			<h2>Rubric Creation</h2>
	  </div>
	  <form action="ContestCP3.php" method="post">
		<div class="RubricForm" >
			<h4>
			How Many Criteria? <select name="noOfCrit" onchange="BuildFormFields(parseInt(this.value, 10));" ><br>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							<option value=6>6</option>
							<option value=7>7</option>
							<option value=8>8</option>
							<option value=9>9</option>
							<option value=10>10</option>
							<option value=11>11</option>
							<option value=12>12</option>
							<option value=13>13</option>
							<option value=14>14</option>
							<option value=15>15</option>
							<option value=16>16</option>
							<option value=17>17</option>
							<option value=18>18</option>
							<option value=19>19</option>
							<option value=20>20</option>								
						</select>
			<div id="FormFields" ></div>
			<p></p>
			<input type="submit" />   
			</h4>
        </form>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </tr>
</table>
</form>
</center>
  
	  
	  
	  
		
    </div>
  </div>
  <!----end main-content--->

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

<script type="text/javascript" src="../../../../../Documents/Alice/Templates/ASA Mercer _ African Student Association_files/jquery.js"></script>
<script type="text/javascript" src="../../../../../Documents/Alice/Templates/ASA Mercer _ African Student Association_files/jquery_002.js"></script>





</body></html>