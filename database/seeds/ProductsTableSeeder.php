<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product -> name = "Final Fantasy XIV - Shadowbringers";
        $product -> format = "steam";
        $product -> genre = "RPG";
        $product -> stock = 10;
        $product -> sellingprice = "39.99";
        $product -> buyingprice = "24.50";
        $product -> picture = "https://cdn-prod.scalefast.com/public/assets/img/resized/squareenix-store-v2/8b3f02abed969c7a91dc3c54c06bb1b6_310_KR.jpg";
        $product -> picture_2 = "https://d3tg06jbotvai2.cloudfront.net/slider/img/final-fantasy-xiv-a-realm-reborn-screenshot-1.jpg";
        $product -> rating = "3.5";
        $product -> save();

        $product = new Product;
        $product -> name = "Horizon Zero Dawn";
        $product -> format = "ps4";
        $product -> genre = "Action";
        $product -> genre_2 = "RPG";
        $product -> stock = 3;
        $product -> sellingprice = "19.99";
        $product -> buyingprice = "10";
        $product -> picture = "http://image.jeuxvideo.com/medias-sm/146918/1469175971-5626-jaquette-avant.jpg";
        $product -> picture_2 = "https://c1-ebgames.eb-cdn.com.au/merchandising/images/screenshots/208745_screenshot_21_l.jpg";
        $product -> rating = "4";
        $product -> save();
    }
}
