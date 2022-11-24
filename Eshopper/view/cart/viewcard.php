<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    
                </thead>
                <tbody>
                    <tr>
                        <?php  viewcart(); ?>
                    </tr>
                </tbody>
            </table>
            <div style="padding:10px;text-align:center;">
                <a class="btn btn-default update" href="index.php?act=bill">ĐỒNG Ý ĐẶT HÀNG</a> <a href="index.php?act=delcart">
                <a class="btn btn-default update" href="index.php">TIẾP TỤC MUA HÀNG</a>
                <a class="btn btn-default update" href="#">XOÁ GIỎ HÀNG</a>
            </div>
        </div>
    </div>
</section>
<!--/#cart_items-->