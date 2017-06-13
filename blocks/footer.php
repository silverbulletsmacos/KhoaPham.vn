<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">
                <?php
                  $theloai = danhsachtheloai();
                  while($row_theloai = mysqli_fetch_array($theloai, MYSQLI_ASSOC))
                  {
                  $idTL = $row_theloai['idTL'];
                ?>
	            <ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href=""><?php echo $row_theloai['TenTL']; ?></a>
                   </h2>
                </li>
                  <?php
                    $loaitin_theo_theloai = danhsachloaitin_theo_theloai($idTL);
                    while($row_loaitin_theo_theloai = mysqli_fetch_array($loaitin_theo_theloai, MYSQLI_ASSOC))
                    {
                  ?>
                <li class="liFollow">
                   <h2>
                      <a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin_theo_theloai['idLT']; ?>"><?php echo $row_loaitin_theo_theloai['Ten']; ?></a>
                   </h2>
                </li>
                <?php } ?>
             </ul>
             <?php } ?>
</div>




