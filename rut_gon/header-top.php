<div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo2.jpg" width="230" height="100"></a>
			</div>
			<div class="header_top_right">
				<div class="search_box">
					<form>
						<input type="text" name="tim_kiem">
						<input type="submit" value="SEARCH">
					</form>
				</div>

				<?php if (!isset($_SESSION['ma'])){ ?>

					<div class="login">
						<span>
							<a href="login/form_login.php"><img src="images/login.png" title="login"/></a>
						</span>
					</div>

				<?php }else{ ?>

					<div class="shopping_cart">
						<div class="cart">
							<a href="gio_hang.php" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Giỏ hàng</span>
							</a>
						</div>
					</div>
					<div class="login">
						<span>
							<a href="login/logout.php"><img src="images/logout.png" width="16" title="logout"></a>
						</span>
					</div>
					
				<?php } ?>

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>