
<?php
    $danhsachtheloai = danhsachtheloai();
    while($row_danhsachtheloai = mysqli_fetch_array($danhsachtheloai, MYSQLI_ASSOC))
    {
        $idTL = $row_danhsachtheloai['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_danhsachtheloai['TenTL']; ?></a>
        </div>
        <div class="child-cat">
            <?php 
                $danhsachloaitin = danhsachloaitin_theo_theloai($idTL);
                while($row_danhsachloaitin = mysqli_fetch_array($danhsachloaitin, MYSQLI_ASSOC))
                {
            ?>
        	<a href="#"><?php echo $row_danhsachloaitin['Ten']; ?></a>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <?php
                        $tinmoinhat_cottrai = tinmoinhat_cottrai($idTL);
                        $row_tinmoinhat_cottrai = mysqli_fetch_array($tinmoinhat_cottrai, MYSQLI_ASSOC);
                    ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_cottrai['idTin']; ?> "><?php echo $row_tinmoinhat_cottrai['TieuDe']; ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_cottrai['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_cottrai['TomTat']; ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
                $tinmoinhat_cotphai = tinmoinhat_cotphai($idTL);
                while($row_tinmoinhat_cotphai = mysqli_fetch_array($tinmoinhat_cotphai, MYSQLI_ASSOC))
                {
            ?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_cotphai['idTin']; ?>"><?php echo $row_tinmoinhat_cotphai['TieuDe']; ?></a></p>
            <?php } ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>

<?php } ?>
<!-- box cat-->