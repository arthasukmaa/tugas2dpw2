<style type="text/css">
    
* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #E0E0E0;
    color: #000000
}

ul {
    list-style: none;
    margin-bottom: 0px
}

.button {
    display: inline-block;
    background: #0e8ce4;
    border-radius: 5px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.button a {
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px
}

.button:hover {
    opacity: 0.8
}

.cart_section {
    width: 100%;
    padding-top: 93px;
    padding-bottom: 111px
}

.cart_title {
    font-size: 30px;
    font-weight: 500
}

.cart_items {
    margin-top: 8px
}

.cart_list {
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff
}

.cart_item {
    width: 100%;
    padding: 15px;
    padding-right: 46px
}

.cart_item_image {
    width: 133px;
    height: 133px;
    float: left
}

.cart_item_image img {
    max-width: 100%
}

.cart_item_info {
    width: calc(100% - 133px);
    float: left;
    padding-top: 18px
}

.cart_item_name {
    margin-left: 7.53%
}

.cart_item_title {
    font-size: 14px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.5)
}

.cart_item_text {
    font-size: 18px;
    margin-top: 35px
}

.cart_item_text span {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin-right: 11px;
    -webkit-transform: translateY(4px);
    -moz-transform: translateY(4px);
    -ms-transform: translateY(4px);
    -o-transform: translateY(4px);
    transform: translateY(4px)
}

.cart_item_price {
    text-align: right
}

.cart_item_total {
    text-align: right
}

.order_total {
    width: 100%;
    height: 60px;
    margin-top: 30px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-right: 46px;
    padding-left: 15px;
    background-color: #fff
}

.order_total_title {
    display: inline-block;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    line-height: 60px
}

.order_total_amount {
    display: inline-block;
    font-size: 18px;
    font-weight: 500;
    margin-left: 26px;
    line-height: 60px
}

.cart_buttons {
    margin-top: 60px;
    text-align: right
}

.cart_button_clear {
    display: inline-block;
    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: rgba(0, 0, 0, 0.5);
    background: #FFFFFF;
    border: solid 1px #b2b2b2;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    margin-right: 26px
}

.cart_button_clear:hover {
    border-color: #0e8ce4;
    color: #0e8ce4
}

.cart_button_checkout {
    display: inline-block;
    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    vertical-align: top
}

</style>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Shopping Cart<small> (1 item in your cart) </small></div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                                <table class="table">
                                    <tr width="100px">
                                        <td>Gambar</td>
                                        <td>Nama Produk</td>
                                        <td>Warna</td>
                                        <td>Price</td>
                                        <td>Total</td>
                                        <td>Aksi</td>
                                    </tr>
                                    <tr>
                                    <td><img src="images/product1.png" alt="/keranjang"/ width="30%"></td>
                                    <td>Keyboard</td>
                                    <td>Hitam</td>
                                    <td>57.000</td>
                                    <td><button class="btn btn-light"><i class="fa fa-minus" aria-hidden="true"></i></button>2 Unit <button class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></td>
                                        <td><button class="btn btn-danger"> <i class="fa fa-trash-o"></i> </button></td>
                                    </tr>


                                    <tr>
                                    <td><img src="images/product6.png" alt="#"/ width="30%"></td>
                                    <td>Harddisk 250GB</td>
                                    <td>Putih</td>
                                    <td>500.000</td>
                                    <td><button class="btn btn-light"><i class="fa fa-minus" aria-hidden="true"></i></button>2 Unit <button class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></td>
                                        <td><button class="btn btn-danger"> <i class="fa fa-trash-o"></i> </button></td>
                                    </tr>

                                    <tr>
                                    <td><img src="images/product7.png" alt="/keranjang"/ width="30%"></td>
                                    <td>RAM Laptop</td>
                                    <td>Hitam</td>
                                    <td>300.000</td>
                                    <td><button class="btn btn-light"><i class="fa fa-minus" aria-hidden="true"></i></button>2 Unit <button class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></td>
                                        <td><button class="btn btn-danger"> <i class="fa fa-trash-o"></i> </button></td>
                                    </tr>

                                    <tr>
                                    <td><img src="images/product8.png" alt="/keranjang"/ width="30%"></td>
                                    <td>Batry Laptop</td>
                                    <td>Hitam</td>
                                    <td>200.000</td>
                                    <td><button class="btn btn-light"><i class="fa fa-minus" aria-hidden="true"></i></button>2 Unit <button class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></td>
                                        <td><button class="btn btn-danger"> <i class="fa fa-trash-o"></i> </button></td>
                                    </tr>

                                



                                </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount">Rp.42.000</div>
                        </div>
                    </div>
                    <div class="cart_buttons"> <button type="button" class="button cart_button_clear">Continue Shopping</button> <button type="button" class="button cart_button_checkout">Add to Cart</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                        <div class="cart_item_text">keyboard</div>
                                    </div>
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Color</div>
                                        <div class="cart_item_text"><span style="background-color:#999999;"></span>hitam</div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <div class="cart_item_text">1</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                        <div class="cart_item_text">Rp.42.000</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
