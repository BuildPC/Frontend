<?php
function createItemCard($item){
    //TODO see line 6 and remove hardcoded linking!
    echo '
            <div class="card">
                <img data-src="https://test.buildpc.software/photos/'.$item->photo.'" class="card-img-top lazy" alt=""> 
                <div class="card-body">
                    <h5 class="card-title">'.$item->item_name.'</h5>
                    <p class="card-text">'.$item->item_desc.'</p>
                    <a href="/item/'.$item->item_id.'" class="btn btn-primary">Go to Item Page</a>
                </div>
       </div>';
};

