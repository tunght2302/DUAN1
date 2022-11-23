<section>
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<?php include('box_left.php'); ?>
			</div>



			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Sản Phẩm </h2>
					<!-- <div class="product-details"> -->
					<!--product-details-->

					<!-- <div class="col-sm-5"> -->
					<?php
					$i = 0;
					foreach ($dssp as $sp) {
						extract($sp);

						$linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;

						$img = $img_path . $hinh;
						// if (($i == 2) || ($i == 5) || ($i == 8)) {
						// 	$mr = "";
						// } else {
						// 	$mr = "mr";
						// }
						echo ' <div class="col-sm-4">
													<div class="product-image-wrapper">
														<div class="single-products">
															<div class="productinfo text-center">
																<img src="' . $img . '" alt="">
																<h2>$' . $don_gia . '</h2>
																<a href="' . $linksp . '" ><p>' . $ten_sanpham . '</p></a>
																<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào Giỏ Hàng</a>
															</div>
															<div class="product-overlay">
																<div class="overlay-content">
																	<h2>$' . $don_gia . '</h2>
																	<a href="' . $linksp . '"><p>' . $ten_sanpham . '</p></a>
																	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào Giỏ Hàng</a>
																</div>
															</div>
														</div>
														<div class="choose">
															<ul class="nav nav-pills nav-justified">
																<li><a href="' . $linksp . '"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
																
															</ul>
														</div>
													</div>
												</div>';
						$i += 1;
					}
					?>
				</div>


			</div>
			<!--/product-details-->






		</div>

	</div>
	</div>
</section>