<style>
	.logo h4{
    margin: auto;
    font-size: 25px;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #fff;
}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-2 float-left" style="display: flex;">
  			<div class="logo">
  				<!--<img src="images.png" alt="..." style="width: 100%;">-->
  				<h4>e-Voting</h4>
  			</div>
  		</div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>