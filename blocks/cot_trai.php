<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php
            $tinxemnhieunhat = tinxemnhieunhat();
            while($data = mysqli_fetch_array($tinxemnhieunhat, MYSQLI_ASSOC))
            {
        ?>
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $data['urlHinh']; ?>"  />
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $data['idTin'];?>" ><?php echo $data['TieuDe']; ?> </a> <span class="hit"></span>
                          <div class="clear"><?php echo $data['SoLanXem'];?></div>  
                    </h3>
				</div>
            </div>  
            <?php
                }
            ?>         
        </div>
    </div>
</div>
<div class="clear"></div>

