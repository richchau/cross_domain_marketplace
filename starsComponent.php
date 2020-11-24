
<?php

function displayStars($productRating)
{
    if ($productRating == NULL) {
        $starNumber = 0;
    } else {
        $starNumber = $productRating;
    }

    for ($x = 0; $x < 5; $x++) {
        if (floor($starNumber) - $x >= 1) {
            echo '<span style="color: orange;">
                    <i class="fa fa-star"></i>
                    </span>';
        } elseif ($starNumber - $x > 0) {
            echo '<span style="color: orange;">
                <i class="fas fa-star-half"></i>
                </span>';
        } else {
            // echo '<span style="color: orange;">
            // <i class="far fa-star"></i>
            // </span>';
            echo " ";
        }
    }
}
