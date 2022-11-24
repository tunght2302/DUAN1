	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php include('box_left.php'); ?>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản Phẩm Mới</h2>
						<?php
            	$i = 0;
            	foreach ($spnew as $sp) {
                	extract($sp);
				$linksp= "index.php?act=chi_tiet_sanpham&id=" .$id_sanpham;
                
                $img=$img_path.$hinh;
                
                echo ' <div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
						<img src="'.$img.'" alt="">
                        <a href="'.$linksp.'"><h2>$'.$don_gia.'</h2></a>
						<a href="'.$linksp.'" ><p>'.$ten_sanpham.'</p></a>
                            
						</div>
                        <div class="product-overlay">
							<div class="overlay-content">
                                <a href="'.$linksp.'"><h2>$'.$don_gia.'</h2></a>
								<a href="'.$linksp.'"><p>'.$ten_sanpham.'</p></a>
                                <form action="index.php?act=addtocart" method="POST">
                                    <input type="hidden" name="id_sanpham" value="' . $id_sanpham . '">
                                    <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
                                    <input type="hidden" name="hinh" value="' . $hinh . '">
                                    <input type="hidden" name="don_gia" value="' . $don_gia . '">
                                    <input type="submit" name="addtocart" class="btn btn-default add-to-cart" value="Thêm vào giỏ hàng" >
                                </form>
							</div>
						</div>
						
					</div>
					<div class="choose">
						<ul class="nav nav-pills nav-justified">
							<li><a href="'.$linksp.'"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
						</ul>
					</div>
                    
				</div>
			</div>';
                $i += 1;
            }

            ?>
				
			</div>
		</div>
	</section>

	