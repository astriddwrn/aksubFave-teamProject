<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fave</title>

    <meta name="items" content="{{ $items->toJson() }}">
    <link rel="stylesheet" href="{{ asset('css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cart.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="Assets/logo-website.png" alt="">
                </a>
            </div>
            <ul class="nav-list category">
                <li class="nav-item"><a href="/all">All</a></li>
                <li class="nav-item"><a href="/category/women">Women</a></li>
                <li class="nav-item"><a href="/category/men">Men</a></li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" id="search-bar">
                        <img src="Assets/category-search.png" alt="">
                        <span><input type="text" name="search" id="search"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <img src="Assets/home-shopping-cart.png" alt="">
                    </a>
                </li>
                <li class="nav-item"><a href="login.html" id="login-btn">LOGIN</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid nopadding">
        <div class="row nopadding mt-3 justify-content-center">
        <div class="col-xl-1 col-0 "></div>
        <div class="col-xl-7 col-lg-8 col-md-9 col-11">
            <div class="">
                <div class="text-center mb-3 cart mt-4">CART</div>
            <div class="line"></div>

            @foreach($carts as $cart)
            <div class="item bg-light mt-4 d-flex flex-direction-column align-items-center  position-relative p-3 rounded">
                <form action="{{route('cart.delete', $cart->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="close position-absolute top-0" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </form>
                <div class="img-cont overflow-hidden">
                    @foreach($cart->item->pictures as $picture)
                        @if($loop->first)
                        <img src="{{asset('Assets/' . $picture->location)}}" alt="">
                        @endif
                    @endforeach
                </div>
                
                
                <div class="p-4">
                    <div class="title">{{$cart->item_id}}</div>
                    <div class="price">Rp {{$cart->item->price}}</div>
                    <div class="size my-2">Size: {{$cart->size}}</div>
                    <input type="hidden" class="price-input" id="price" value="{{$cart->item->price}}">
                    <div class="d-flex flex-direction-row">
                        <div class="qty">Quantity: </div>
                        <select name="qty" id="qty" class="qty-input">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                
            </div>
            @endforeach
            </div>
        </div>


        <div class="h-100 nopadding col-xl-3 col-lg-4 col-md-9 col-11">
            <div class="p-3 pt-4">
                <div class="bg-light p-3 rounded">
                    <div class="ship">Shipping</div>
                    <div class="line my-1"></div>
                    <div class="desc">Standard shipping (free shipping for orders over IDR 599,000) will take 2-3 days. For areas outside Java, the delivery process may take up to 8-10 days. Shipments are made every weekday, and not on Sundays or national holidays.</div>
                    <div class="ship mt-3">Total Sum</div>
                    <div class="line my-1"></div>
                    <div class="d-flex justify-content-between flex-direction-row">
                        <div>
                            <div class="subtotal mt-2">Subtotal</div>
                            <div class="subtotal mt-2">Tax</div>
                            <div class="subtotal mt-2"><b>Grand Total</b></div>
                        </div>
                        <div>
                            <div class="subtotal mt-2">Rp <span class="input-sum"></span></div>
                            <div class="subtotal mt-2">Rp <span class="input-tax"></span></div>
                            <div class="subtotal mt-2"><b>Rp <span class="input-total"></span></b></div>
                        </div>
                        
                    </div>

                    <div class="d-flex flex-direction-row justify-content-center">
                        <form action="{{route('cart.deleteAll', $user_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn checkout w-100 my-4">CHECKOUT</button>

                        </form>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="col-xl-1 col-0"></div>
    </div>
    </div>
    
    <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
    <script>
         $(document).ready(function(){
            const json = JSON.parse($("meta[name=items]").attr("content"));
            console.log(json);
            let $sum = 0;
            let $tax = 0;
            let $total = 0;
            for (const [key, val] of Object.entries(json)) {
                $sum += parseInt(val.price);
            }
            $tax = Math.floor($sum/10/100);
            $total = $sum+$tax;

            $('.qty-input').change(function(){
                let $sum = 0;
                let $tax = 0;
                let $total = 0;
                $('.qty-input').each(function(){
                    $price = $(this).parent().parent().find('.price-input').val();
                    $qty = $(this).val();
                    $sum += Math.floor($price*$qty);
                    console.log($qty);
                });
                $tax = Math.floor($sum/10/100);
                $total += $sum+$tax;
                $('.input-sum').text($sum);
                $('.input-tax').text($tax);
                $('.input-total').text($total);
            });
            $('.input-sum').text($sum);
            $('.input-tax').text($tax);
            $('.input-total').text($total);
         });
    </script>
    


    
</body>
</html>