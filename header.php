<div class="header">
            <div class="back-to "><img src="./assets/img/back-arrow.png"/><span>Back</span></div>
             <div class="cart-bg">
            <div class="cart">
                <div class="cart-inner">
                    <img id="cart-image" src="./assets/img/cart.png">
                    <span class="cart-amount"><?php echo $countid; ?></span>
                </div>
            </div>
            </div>
</div>
 <script>
        $(document).ready(function(){
        $(".back-to").on('click', function(){
            window.location = "http://www.arfeenkhan.com/deals1/index.php";    
        });
        });
        </script>