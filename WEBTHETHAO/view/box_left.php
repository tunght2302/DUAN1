<div class="col-lg-3 col-md-12">

    <!-- Color Start -->
    <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Top yêu thích</h5>
        <form>
            <div class="">
                <div>
                    <ul style="list-style-type: none;padding:0;font-family:Arial, Helvetica, sans-serif;">
                        <?php
                        foreach ($dstop5 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;
                            $img = $img_path . $hinh;
                            echo '
									<div style="display:flex;margin-top:10px">
										<div>
											<img src="' . $img . '" width="50px" height="50px"style="border-radius:10px">
										</div>
										<div style="margin-left:10px;margin-top:15px;">
											<li><span class="pull-right"></span><a style="text-decoration:none;" href="' . $linksp . '">' . $ten_sanpham . '</a></a></li>
										</div>
									</div>
									';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            
        </form>
    </div>
</div>