<?php
function createItemCard($item){
    echo '
        <div class="col-3">
            <div class="card">
                <img data-src="'.$item->photo.'" class="card-img-top lazy" alt="">
                <div class="card-body">
                    <h5 class="card-title">'.$item->item_name.'</h5>
                    <p class="card-text">'.$item->item_desc.'</p>
                    <a href="/item/'.$item->item_id.'" class="btn btn-primary">Go to Item Page</a>
                </div>
            </div>
       </div>';
};
?>
