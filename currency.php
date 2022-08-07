<?php

$content=file_get_contents('https://tw.rter.info/capi.php');
$currency=json_decode($content);

// echo "<pre>";
// print_r($currency) ;
// echo "</pre>";

foreach($currency as $key=>$value){
    $str = $key;
    $country = explode("USD",$str);


    switch ($key) {
        case 'USDAUD':
            // echo     $key."<br>"  ; //幣別
            // echo     $value->Exrate."<br>"; //匯率
            // echo     $value->UTC."<br>";      //時間
            // echo     $country[1]."<br>";      //國名


            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDCAD':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDEUR':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDGBP':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDHKD':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDINR':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDJPY':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDKRW':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDNZD':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDRUB':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDSGD':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDTHB':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDTWD':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;


        case 'USDZAR':
            echo '<div class="card col-12 col-sm-6 col-md-3" >';
            echo '<img class="card-img-top" src=./img/'.$country[1].'.png alt="Card image" style="width:100%">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">USD=>'.$country[1].'</h4>';
            echo '<p class="card-text">'.$value->Exrate.'</p>';
            echo '<p class="card-text" style="color:rgb(255, 59, 160);">Update at UTC</p>';
            echo '<p class="card-text">'.$value->UTC.'</p>';
            echo '</div>';
            echo '</div>';
            break;







        

    }





}

// echo "<pre>";
// print_r($currency) ;
// echo "</pre>";
    $key;   //幣別
    $value->Exrate; //匯率
    $value->UTC;      //時間
    $country[1];       //國名



?>
