<div id="slide-left">
        	<div id="slideleft-main">
                <?php
                    $tinmoinhat_mottin = tinmoinhat_mottin();
                    $data = mysqli_fetch_array($tinmoinhat_mottin, MYSQLI_ASSOC);
                ?>
                <img src="upload/tintuc/<?php echo $data['urlHinh']; ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $data['idTin']; ?>"><?php echo $data['TieuDe']; ?></a> </h2>
                <div class="des">
                    <?php echo $data['TomTat']; ?> 
                </div>
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php
                  $tinmoinhat_namtin = tinmoinhat_namtin();
                  while($data = mysqli_fetch_array($tinmoinhat_namtin, MYSQLI_ASSOC))
                  {
              ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo $data['idTin']; ?>" class="txt_link"> <?php echo $data['TieuDe']; ?> </a> 
                </div>
              </li>
              <?php } ?>  
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img src="images/web-design.jpeg" width="100%" alt="" />
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     