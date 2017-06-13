<!-- box cat -->
<?php
    $idLT = 17;
    $tinmoinhat_theoloai_mottin = tinmoinhat_theoloai_mottin($idLT);
    $row_tinmoinhat_theoloai_mottin = mysqli_fetch_array($tinmoinhat_theoloai_mottin, MYSQLI_ASSOC);

?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_tinmoinhat_theoloai_mottin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_mottin['idTin']; ?>"> <?php echo $row_tinmoinhat_theoloai_mottin['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloai_mottin['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloai_mottin['TomTat']; ?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php
                $tinmoinhat_theoloai_namtin = tinmoinhat_theoloai_namtin($idLT);
                while($row_tinmoinhat_theoloai_namtin = mysqli_fetch_array($tinmoinhat_theoloai_namtin, MYSQLI_ASSOC))
                {
            ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_namtin['idTin']; ?>"><?php echo $row_tinmoinhat_theoloai_namtin['TieuDe']; ?></a></h3>  
           <?php } ?>         
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->



<!-- box cat -->
<?php
    $idLT = 24;
    $tinmoinhat_theoloai_mottin = tinmoinhat_theoloai_mottin($idLT);
    $row_tinmoinhat_theoloai_mottin = mysqli_fetch_array($tinmoinhat_theoloai_mottin, MYSQLI_ASSOC);

?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $row_tinmoinhat_theoloai_mottin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_mottin['idTin']; ?>"> <?php echo $row_tinmoinhat_theoloai_mottin['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloai_mottin['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloai_mottin['TomTat']; ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoinhat_theoloai_namtin = tinmoinhat_theoloai_namtin($idLT);
                while($row_tinmoinhat_theoloai_namtin = mysqli_fetch_array($tinmoinhat_theoloai_namtin, MYSQLI_ASSOC))
                {
            ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_namtin['idTin']; ?>"><?php echo $row_tinmoinhat_theoloai_namtin['TieuDe']; ?></a></h3>  
           <?php } ?>         
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->




<!-- box cat -->
<?php
    $idLT = 25;
    $tinmoinhat_theoloai_mottin = tinmoinhat_theoloai_mottin($idLT);
    $row_tinmoinhat_theoloai_mottin = mysqli_fetch_array($tinmoinhat_theoloai_mottin, MYSQLI_ASSOC);

?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $row_tinmoinhat_theoloai_mottin['Ten']; ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_mottin['idTin']; ?>"> <?php echo $row_tinmoinhat_theoloai_mottin['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloai_mottin['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloai_mottin['TomTat']; ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoinhat_theoloai_namtin = tinmoinhat_theoloai_namtin($idLT);
                while($row_tinmoinhat_theoloai_namtin = mysqli_fetch_array($tinmoinhat_theoloai_namtin, MYSQLI_ASSOC))
                {
            ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_theoloai_namtin['idTin']; ?>"><?php echo $row_tinmoinhat_theoloai_namtin['TieuDe']; ?></a></h3>  
           <?php } ?>         
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->