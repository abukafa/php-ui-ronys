<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/logo.png" />
	<title>RFC | Login</title>
	<link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
	<div class="bg-image d-flex justify-content-center align-items-center" style="
		background-image: url('assets/img/bg-yelow.jpg');
		background-repeat: repeat;
		height: 100vh;
	">
		<main class="d-flex w-100">
			<div class="container d-flex flex-column">
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="display-6"><strong>Ronys Fried Chicken</strong></h1>
								<h2>Login to continue</h2>
							</div>

							<div class="card mt-3">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="assets/img/logo.png" class="img-fluid rounded-circle" width="150" height="150" />
										</div>
										<form>
											<div class="mb-3">
												<label class="form-label">Username</label>
												<input class="form-control form-control-lg" type="text" name="uname" placeholder="Masukan nama pengguna" />
											</div>
											<div class="mb-3">
												<label class="form-label">Password</label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukan password" />
												<small>
													<!-- <a href="index.html">Forgot password?</a> -->
												</small>
											</div>
											<div>
												<label class="form-check">
													<!-- <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span> -->
												</label>
											</div>
											<div class="text-center mt-2">
												<a href="app/office/index" class="btn btn-lg btn-primary">Login</a>
												<!-- <button type="submit" class="btn btn-lg btn-primary">Login</button> -->
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script src="assets/js/app.js"></script>

</body>

</html>