<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo 1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav>
        <div class="logo">
                <h1>Clothi<span>nG</span></h1>
            </div>

            <ul>
                <li><a href="index.php #Home">Home</a></li>
                <li><a href="index.php #Products">Products</a></li>
                <li><a href="index.php #About">About</a></li>
                <li><a href="index.php #Review">Review</a></li>
                <li><a href="admin/index.html">admin</a></li>
            </ul>

            <div class="icons">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-user"></i>
            </div>

        </ul>
    </nav>

    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="img/dress 1.png">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="img/dress 1.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/dress 2.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/dress 3.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/dress 4.png" onclick="showImg(this.src)">
                </div>
            </div>
        </div>

        <div class="right">
            <div class="url">Home > Product > T-Shirt</div>
            <div class="pname">Dres Women </div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">$40</div>
            <div class="size">
                <p>Size :</p>
                <div class="psize active">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div>
            <div class="quantity">
                <p>Quantity :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn">Add to Cart</button>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </div>


    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>
    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>123/Bogor/Kayangan</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+64 857 9766 9876</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>alisdoyoung@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Get Help</h1>
                <a href="#" class="center">FAQ</a>
                <a href="#" class="center">Shipping</a>
                <a href="#" class="center">Returns</a>
                <a href="#" class="center">Payment Options</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="#" class="center">Indonesia</a>
                <a href="#" class="center">Jabodetabek</a>
                <a href="#" class="center">West Java</a>
            </div>

            <div class="tag">
                <h1>Follw Us</h1>
                <div class="social_link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/YhhZaqq?t=JUH6uvrzL_FrkG87HihsOQ&s=08" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://instagram.com/hi.yourz?igshid=ZmRlMzRkMDU=" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/zaqiyah-lailatul-03b409258/" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>                    
                </div>
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>
            </div>

        </div>
    </footer>
</body>
</html>