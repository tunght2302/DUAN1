<div class="col-lg-3 col-md-12">
    <!-- Price Start -->
    <!-- <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
        <form>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" checked id="price-all">
                <label class="custom-control-label" for="price-all">All Price</label>
                <span class="badge border font-weight-normal">1000</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="price-1">
                <label class="custom-control-label" for="price-1">$0 - $100</label>
                <span class="badge border font-weight-normal">150</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="price-2">
                <label class="custom-control-label" for="price-2">$100 - $200</label>
                <span class="badge border font-weight-normal">295</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="price-3">
                <label class="custom-control-label" for="price-3">$200 - $300</label>
                <span class="badge border font-weight-normal">246</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="price-4">
                <label class="custom-control-label" for="price-4">$300 - $400</label>
                <span class="badge border font-weight-normal">145</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                <input type="checkbox" class="custom-control-input" id="price-5">
                <label class="custom-control-label" for="price-5">$400 - $500</label>
                <span class="badge border font-weight-normal">168</span>
            </div>
        </form>
    </div> -->
    <!-- Price End -->

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
    <!-- Color End -->

    <!-- Size Start -->
    <!-- <div class="mb-5">
        <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
        <form>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" checked id="size-all">
                <label class="custom-control-label" for="size-all">All Size</label>
                <span class="badge border font-weight-normal">1000</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="size-1">
                <label class="custom-control-label" for="size-1">XS</label>
                <span class="badge border font-weight-normal">150</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="size-2">
                <label class="custom-control-label" for="size-2">S</label>
                <span class="badge border font-weight-normal">295</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="size-3">
                <label class="custom-control-label" for="size-3">M</label>
                <span class="badge border font-weight-normal">246</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input type="checkbox" class="custom-control-input" id="size-4">
                <label class="custom-control-label" for="size-4">L</label>
                <span class="badge border font-weight-normal">145</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                <input type="checkbox" class="custom-control-input" id="size-5">
                <label class="custom-control-label" for="size-5">XL</label>
                <span class="badge border font-weight-normal">168</span>
            </div>
        </form>
    </div> -->
    <!-- Size End -->
</div>