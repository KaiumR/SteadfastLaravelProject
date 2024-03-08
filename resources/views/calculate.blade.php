<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tax management system | Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/calculate.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<section id="nav-bar">
	
		<nav class="navbar bg-body-tertiary">
			<form>
				<div class="input-group">
					<a class="navbar-brand" href="#">Stead Fast</a>
					<input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
					<a href="/logout" class="btn">Log Out</a>
				</div>
				
			</form>
		</nav>
		<div class="side_bar">
			<div class="position-sticky pt-3 sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{url('/')}}/home">
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
	<section class="body-cont">
		<div class="cont1">
			<form method="get" action="{{url('/')}}/home">
				@csrf
				<h1>Calculated VAT Amount</h1>
				<input class="attributes" type="text" name="rate" value="{{$result}}" readonly><br>
				
				<input class="submit" type="submit" value="Calculate Again"><br/>
			</form>
		</div>
	</section>
	
</body>
</html>