<?php
function createItemCard($item){
    //TODO see line 6 and remove hardcoded linking!
    echo '
            <div class="card">
                <img data-src="https://static.buildpc.software/photos/' . $item->photo . '" class="card-img-top lazy" alt="">
                <div class="card-body">
                    <h5 class="card-title">' . $item->item_name . '</h5>
                    <h5 class="card-subtitle py-2 font-weight-bolder" style="background: linear-gradient(to right, blueviolet , orange, orangered, red, darkred, indianred);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">&#x20BA ' . $item->price . '</h5>
                    <p class="card-text ellipsis">' . $item->item_desc . '</p>
                    <a href="/item/'.$item->item_id.'" class="btn btn-primary">Go to Item Page</a>
                </div>
       </div>';
};
function createBasketItemCard($item,$amount,$sum){
    echo '
    <tr>
        <th scope="row" class="border-0">
            <div class="p-2">
                 <img data-src="https://static.buildpc.software/photos/' . $item->photo . '" style="display:inline;width:10vw;height:100%"  class="card-img-top lazy" alt="">
                 <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0"> <a href="/item/'.$item->item_id.'" class="text-dark d-inline-block align-middle">'.$item->item_name.'</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: '.$item->category.'</span>
                 </div>
            </div>
        </th>
        <td class="border-0 align-middle"><strong>'.$item->price.'₺</strong></td>
        <td class="border-0 align-middle"><strong>'.$item->price*$amount.'₺</strong></td>
        <td class="border-0 align-middle"><strong>'.$amount.'</strong></td>
        <td class="border-0 align-middle"><button class="sc_buttons" type="button" name="button" onclick="trashBtnAction('.$item->item_id.')"><i class="fas fa-trash"></i></button></td>
     </tr>';
    return $sum + $item->price*$amount;




}

