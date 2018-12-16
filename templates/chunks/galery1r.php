<div class="container vcaf">
    <div class="row">
       <?php
         $galleryType='gal_top';
         $images = getPicturesAssoc($mysqlConnect, $galleryType);
         foreach ($images as $image) { ?>
        <div class="col">
          <div class="row-sm">
            <div class="image_plus">
              <a data-fancybox="gallery" href="<?= $image['path'] ?>" target="_blank">
              <img class="card-img-top" src="<?= $image['path'] ?>" alt="Card image cap">
            </a>
            <span><?= $image['name'] ?></span>
              
                <button type="button" class="btn5">
                  <span class="h2_text">
                    <img src="./img/index/cartb.png" alt="cartb">
                    Add to Cart
                  </span>
                
                </button>
          </div>
          </div>
          <div class="row-sm mt-2 mb-2">
            <span class="Mango">Mango People T-shirt</span>
          </div>
          <div class="row-sm">
            <div class="col flexP  pl-0 pr-3">
              <div>
                <span class="prod_price">52.00$</span>
              </div>
            
          
              <div class="hide_zvevda">
                <span class="zvezda3">&#9733;</span>
              <span class="zvezda3">&#9733;</span>
              <span class="zvezda3">&#9733;</span>
              <span class="zvezda3">&#9733;</span>
              <span class="zvezda3">&#9733;</span>
              </div>
            </div>
        </div>
      </div>
          <?php } ?>  
    </div>    

  </div>