<?php
function createItemCard($item){
    //TODO see line 6 and remove hardcoded linking!
    echo '
            <div class="card">
                <img data-src="https://test.buildpc.software/photos/'.$item->photo.'" class="card-img-top lazy" alt=""> 
                <div class="card-body">
                    <h5 class="card-title">'.$item->item_name.'</h5>
                    <h5 class="card-subtitle py-2 font-weight-bolder" style="background: linear-gradient(to right, blueviolet , orange, orangered, red, darkred, indianred);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">&#x20BA '.$item->price.'</h5>
                    <p class="card-text">'.$item->item_desc.'</p>
                    <a href="/item/'.$item->item_id.'" class="btn btn-primary">Go to Item Page</a>
                </div>
       </div>';
};
function createBasketItemCard($item){
    // item özel düzenle
    echo '
    <tr>
        <th scope="row" class="border-0">
            <div class="p-2">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                 <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                 </div>
            </div>
        </th>
        <td class="border-0 align-middle"><strong>$79.00</strong></td>
        <td class="border-0 align-middle"><strong>3</strong></td>
        <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
     </tr>';





}

