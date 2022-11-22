
<div class="left-sidebar">
						
						<h2>Danh Mục</h2>
						<div class="panel-group category-products" name="ma_loai" id="accordian"><!--category-productsr-->

							<?php
								foreach($dsdm as $dm){
									extract($dm);
									$linkcat = "index.php?act=sanpham&ma_loai=" . $id;
									echo'<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title"><a href="'.$linkcat.'">'.$ten_loai.'</a></h4>
											</div>
										</div>';
								}
								?>


						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Top Yêu Thích</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<div>
										<?php
											foreach ($dstop5 as $sp) {
												extract($sp);
												$link = "index.php?act=sanpham&ma_loai=" . $id;
												$img=$img_path.$hinh;
												echo '<img src="'.$img.'" width=50px height=50px;><li><span class="pull-right"></span><a href="'.$link.'">'.$ten_sanpham.'</a></a></li>';
											}
										?>
									</div>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						
						
					</div>