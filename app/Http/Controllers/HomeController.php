<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData["latest_products"] = Product::orderBy('created_at', 'desc')->take(4)->get();
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "Nusantara Brews refers to the online platform or website dedicated to selling and promoting Nusantara coffee products. Nusantara Brews, also known as Indonesian coffee, encompasses a wide variety of coffee beans grown across the Indonesian archipelago, including famous regions like Sumatra, Java, Bali, Sulawesi, and more.
        The e-commerce platform for Kopi Nusantara serves as a virtual marketplace where coffee enthusiasts and consumers can browse through a diverse selection of Nusantara Brews products, such as whole beans, ground coffee, single-origin varieties, blends, and specialty coffee offerings. The platform showcases the unique flavors, aromas, and characteristics of Indonesian coffee, highlighting its cultural significance and rich heritage.
        The e-commerce website provides detailed information about each coffee product, including its origin, processing methods, tasting notes, and brewing recommendations. It may also offer various package sizes or subscription options to cater to different customer preferences.
        Customers can conveniently explore and purchase their desired Nusantara coffee products online, adding them to their cart and proceeding with secure online transactions. The e-commerce platform ensures a user-friendly shopping experience, with features like search filters, customer reviews, and personalized recommendations to assist customers in finding their perfect cup of Nusantara coffee.
        Additionally, the e-commerce Kopi Nusantara platform may offer additional merchandise. With Nusantara Brews, coffee lovers from around the world can easily access and enjoy the distinct flavors of Indonesian coffee, supporting local coffee farmers and the coffee industry in Indonesia. It promotes the cultural appreciation of Nusantara coffee and provides a convenient avenue for coffee enthusiasts to discover and savor the unique sensations of Indonesian coffee from the comfort of their homes.";
        $viewData["author"] = "NusBrews (Nusantara Brews)";
        return view('home.about')->with("viewData", $viewData);
    }
}
