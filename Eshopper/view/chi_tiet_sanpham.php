	<section>
		<div class="container">
			<div class="row">
			<style>
					
				</style>
			<div class="banner sli">
                <!--image slider start-->
                <div class="slider">
                    <div class="slides">
                        <!--radio buttons start-->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--radio buttons end-->

                        <!--slide images start-->
                        <div class="slide first">
                            <img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617848/Under_Armour_NFL_Combine_mgxt3p.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668615929/qui-trinh_wsup0h.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617849/NIKE_WOMAN_KNITWEAR_reajpp.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617849/t%E1%BA%A3i_xu%E1%BB%91ng_1_rltnsw.jpg" alt="">
                        </div>
                        <!--slide images end-->


                        <!--automatic navigation end-->
                    </div>

                    <!--manual navigation start-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual navigation end-->
                </div>
                <!--image slider end-->
            </div>
				<div class="col-sm-3">
				<?php include('box_left.php'); ?>
				</div>
				
				<section>
		<div class="container">
			<div class="row">
				<?php
					extract($onesp);
				?>
				<div class="col-sm-9 padding-right">
                    <h2><?$ten_sanpham?></h2>
					<div class="product-details"><!--product-details-->
					
						<div class="col-sm-5">
							<div class="view-product">
								<?php
									$img=$img_path.$hinh;
									echo '<img src="'.$img.'" width=250px height=250px;>';
								?>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$ten_sanpham?></h2>
								<span>
									
									<span>$<?=$don_gia?></span>
									<form action="index.php?act=addtocart" method="POST">
									<button type="submit" name="addtocart" class="btn btn-default add-to-cart" >
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
									</form>
								</span>
								<h4>Mô tả</h4>
								<p><?=$mo_ta?></p>
								<p>Điều kiện: Mới</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						
						<div class="tab-content">
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<h2>Bình luận</h2>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                    
                                    <div class="row" id="binhluan" name="id_sanpham">
                                    <script>
                                        $(document).ready(function() {
                                        
                                                $("#binhluan").load("view/binhluan/binhluanform.php", {
                                                    id_sanpham: <?=$id?>
                                                });
                                        });
                                    </script>
                                    </div>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm cùng loại</h2>
						<?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
					$linksp= "index.php?act=chi_tiet_sanpham&id=" .$id_sanpham;
                    echo '
                        <li><a href="' . $linksp . '">' . $ten_sanpham . '</a></li>
                        ';
                }
                ?>
					</div><!--/recommended_items-->
					

				</div>
				
			</div>
		</div>
	</section>
	