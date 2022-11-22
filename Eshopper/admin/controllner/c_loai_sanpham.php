<?php
include ("../models/m_loai_sanpham.php");
class C_loai_sanpham
{
    function Hien_thi_loai_sanpham()
    {
//Models
        $m_loai_sanpham = new M_loai_sanpham();
        $loai_sanphams = $m_loai_sanpham->Doc_loai_sanpham();
        $count=count($loai_sanphams);
        //Phân trang
        include("../lib/Pager.php");
        $p=new Pager ();
        $limit = 12 ;
        $count=count($loai_sanphams);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $loai_sanphams = $m_loai_sanpham->Doc_loai_sanpham($vt,$limit);
        $view = '../view/loai_sanpham/v_loai_sanpham.php';
        $title = "Quản lí E shopper";
        $tieude = "Loại sản phẩm";
        include('./templates/layout.php');
//View
    }
    function Them_loai_sanpham()
    {
        //Models
        $m_loai_sanpham = new M_loai_sanpham();
        $loai_sanphams = $m_loai_sanpham->Doc_loai_sanpham();
        // ma_loai,ten_loai,mo_ta
        if(isset($_POST['btnCapnhat']))
        {
            $ma_loai=$_POST['ma_loai'];
            $ten_loai=$_POST['ten_loai'];
            $mo_ta=$_POST['mo_ta'];


            print_r($loai_sanphams);
            foreach($loai_sanphams as $sp)
            {
                if($ma_loai == $sp->ma_loai){
                    echo "<script>alert('Mã loại bị trùng thêm không thành công');window.location='them_loai_sanpham.php'</script>";
                    return;
                }
            }
            $kq=$m_loai_sanpham->Them_loai_sanpham($ma_loai,$ten_loai,$mo_ta);
            if($kq)
            {

                echo "<script>alert('Thêm thành công');window.location='loai_sanpham.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        // View
        $view = '../view/loai_sanpham/v_them_loai_sanpham.php';
        $title = "Quản trị E shopper";
        $tieude = "Thêm loại sản phẩm";
        include('./templates/layout.php');
    }
}
?>