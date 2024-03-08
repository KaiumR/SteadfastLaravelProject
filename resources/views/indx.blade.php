<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tax management system | Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<section id="nav-bar">
	
		<nav class="navbar bg-body-tertiary">
			<form method="get" action="{{url('/')}}/logout">
				@csrf
				<div class="input-group">
					<a class="navbar-brand" href="#">Stead Fast</a>
					<input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
					<a href="{{url('/')}}/logout" class="btn">Log Out</a>
				</div>
			</form>
		</nav>
		<div class="side_bar">
			<div class="position-sticky pt-3 sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">
							<span class="material-symbols-outlined attr">home</span>
							Dashboard
							
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								draft
							</span>
							Orders
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								garden_cart
							</span>
							Products
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								contacts_product
							</span>
						  Customers
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								bar_chart
							</span>
						  Reports
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
								stacks
							</span>
							Integrations
						</a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
					<span>Saved reports</span>
					<a class="link-secondary" href="#" aria-label="Add a new report">
						<span data-feather="plus-circle" class="align-text-bottom"></span>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Current month
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Last quarter
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Social engagement
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="material-symbols-outlined">
							description
							</span>
							Year-end sale
						</a>
					 </li>
				</ul>
			</div>
		</div>
	</section>
	<section class="upper-body">
	
		<div class="top-bar">
		
			<h1 class="top_header">Welcome {{session('user_name')}}</h1>
			<h6>Welcome to the VAT Management System of Steadfast Couriar service limited. Here, you will be able to find the vat for your product. Feel free to contact if you face any kind of trouble. Thank you.</h6>
		
		
		
		</div>
	
	</section>
	<section class="body-cont">
		<div class="cont1">
			<form method="POST" action="{{url('/')}}/calculate">
				@csrf
				<h1>Calculate VAT</h1>
				<input class="attributes" type="text" name="rate" value="Vat rate 15%" readonly><br>
				<input class="attributes" type="number" name="amount" placeholder="Enter Amount" required><br/>
				<div class="rd-bh">
					<label class="rd-b" for="html">Enter calculation type</label><br/>
					<input class="rd-b" type="radio" id="html" name="c_type" value="1" required>
		  			<label class="rd-b" for="html">Include</label>
					<input class="rd-b" type="radio" id="css" name="c_type" value="0" required>
		  			<label class="rd-b" for="css">Exclude</label><br>
				</div>
				<input class="submit" type="submit" value="Calculate"><br/>
			</form>
		</div>
	</section>
	
</body>
</html>