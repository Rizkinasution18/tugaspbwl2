<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Eid Mubarak Blog | PBWL Project10</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/delitekno.png" class="brand">
			<div class="user"><?php echo $_SESSION['user_name']; ?></div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard"><i class="fas fa-home"></i>  Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/categories"><i class="fas fa-list"></i>  Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/posts"><i class="fas fa-users"></i>  Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users"><i class="fas fa-user"></i>  User
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout"><i class="fas fa-sign-out-alt"></i>  Log out
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mr. Sue
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>