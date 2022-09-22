<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid ">
    	<div class="row header-area bg-dark" >
    		<div class="col-md-12 px-0" >
    			<div class="d-flex justify-content-between text-white ">
  					<div class="name-area text-center py-2">
  							<a href="#" class="pt-1 fw-bold">Diagnostic</a>
  					</div>
  					<div class="py-2">
  						<div class="menu-toggle">
  							<i class="fa fa-bars" onclick="menuToggle()"></i>
  						</div>
  						<!-- menu area -->
  						<div class="dropdown d-inline-block">
					  		<div class="btn-group me-2 text-white">
								  <button type="button" class="btn border dropdown-toggle p-1 text-white" data-bs-toggle="dropdown" aria-expanded="false">
								    <i class="fa fa-user text-white" ></i>
								  </button>
								  <ul class="dropdown-menu dropdown-menu-end">
								    <li><button class="dropdown-item" type="button">Profile</button></li>
								    <li><button class="dropdown-item" type="button">Logout</button></li>
								  </ul>
								</div>
							</div>
  					</div>
    			</div>
    		</div>
    	</div>

    	<!-- sidebar menu -->
    	<aside class="sidebar-area bg-dark ">
    		<nav class="sidebar py-2 mb-4">
					<ul class="nav flex-column" id="nav_accordion">
						<li class="nav-item">
							<a class="nav-link" href=""> Dashboard </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"> Submenu links <i class="bi small bi-caret-down-fill"></i> </a>
							<ul id="menu_item1" class="submenu collapse list-unstyled" data-bs-parent="#nav_accordion">
								<li><a class="nav-link" href="#">Submenu item 1 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 2 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
							</ul>

						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#"> 
								More menus <i class="bi small bi-caret-down-fill"></i> 
								<i class="fa fa-angle-right float-end" ></i>
							</a>
							<ul id="menu_item2" class="submenu collapse list-unstyled" data-bs-parent="#nav_accordion">
								<li><a class="nav-link" href="#">Submenu item 4 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 6 </a></li>
							    <li><a class="nav-link" href="#">Submenu item 6 </a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Another page </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Demo link </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Menu item </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Something </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Other link </a>
						</li>
					</ul>
				</nav>
    	</aside>
    	<div class="mian-content left-margin" >
    		<div class="row">
    			<div class="col-md-12">
    				<h5>Hello bangladesh</h5>
    			</div>
    		</div>
    	</div>
    </div>	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>    
    <script>
    	function menuToggle() {
    		$('.sidebar-area').toggleClass('d-none');
    		$('.mian-content').toggleClass('left-margin');
    	}
    </script>
  </body>
</html>