<?php
?>
 <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--
            <a class="navbar-brand" href="#"></a>
            -->
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="Welkomm.php">W&euml;llkomm</a></li>
					<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orchester <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="Orchester.php">Orchester</a></li>
                  <li><a href="Dirigent.php">Dirigent</a></li>
                  <li><a href="Verwaltung.php">Verwaltung</a></li>
                </ul>
              </li>              
              <li><a href="Kalenner.php">Agenda</a></li>
              <li><a href="Fotoen.php">Fotoen</a></li>
              <li><a href="Sponsoren.php">Sponsoren</a></li>
              <li><a href="Kontakt.php">Kontakt</a></li>
              <li><a href="downloads/Downloads.php">WM Live</a></li>
		<!--<li><a href="Shop.php">Shop</a></li>-->
              <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-lock"></span>Login</a></li>
<li><a href="https://www.facebook.com/wormermusek" target="_blank"><img src="images/facebook.jpg" style="width:1.5em" alt="facebook"></a></li>
              <!--
              <li><a href="guestbook/index.php">Guestbook</a></li>
              -->
              <!--
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      
      <!-- Modal Memberen -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Memberen - Login</h4>
		  </div>
		  <form name="login_form" method="post" action="memberen/memberen_login.php">
			  <div class="modal-body">
					<label class="control-label col-md-4" for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username"/><br>
					<label class="control-label col-md-4" for="passwd">Password</label>
					<input type="password" class="form-control" id="passwd" name="passwd" placeholder="Password"/>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Login</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>
