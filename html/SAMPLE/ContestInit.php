
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Alice Contest</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap2.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/formsubmit.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
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
	
	
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Alice Contest</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="about.php">About Us</a></li>
			<li><a href="#">Contest Creation</a></li>

          </ul>
	 
	 
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">Login</a></li>
            <li><a href="ContestInit.php">Create Account</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>

	  
	  
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Creating a Contest</h1>
	   </div>
	   
	  <div class="bs-docs-section">

        <div class="row" ">
          <div class="col-lg-6">
            <div class="well">
              <form class="bs-example form-horizontal formcenter" >
                <fieldset>
                  <legend>Create Contest</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
  
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label><br>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="textArea"></textarea>
                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label><br>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button> 
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
		 

	  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
