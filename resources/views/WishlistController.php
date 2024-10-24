public function getWishlistedProducts()
{
    $items = Cart::instance("wishlist")->content();
    return view('wishlist',['items'=>$items]);
}
