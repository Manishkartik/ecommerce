</div>

<footer id="footer" class="footer" style="color:#000;">

     <div class="footer">
    
    <div class="col-container">
  <div class="col" style="background:rgba(245, 233, 83, 0.79)">
    <h2>Get to Know Us</h2>
    <p>About Us</p>
      <p>Careers</p>
      <p>Press Releases</p>
      <p>Online Shop Cares</p>
      <p>Gift a Smile</p>
  </div>
  <div class="col" style="background: rgba(245, 233, 83, 0.79)">
    <h2>Connect with Us</h2>
    <p>Facebook</p>
    <p>Twitter</p>
    <p>Instagram</p>
      </div>
  <div class="col" style="background:rgba(245, 233, 83, 0.79)">
    <h2>Make Money with Us</h2>
    <p>Sell on Online Shop</p>
    <p>Become an Affiliate</p>
      <p>Fulfilment by Online Shop</p>
    <p>Advertise Your Products</p>
      <p>Online Shop Pay on Merchants</p>
    
  </div>
    <div class="col" style="background:rgba(245, 233, 83, 0.79)">
    <h2>Let Us Help You</h2>
    <p>Your Account</p>
    <p>Returns Centre</p>
    <p>100% Purchase Protection</p>
    <p>Amazon Assistant</p>
    <p>Help</p>

  </div>
</div>

  <p align="center">Online Shop</p>
</div>


     <h5 align="center">Copyright &copy; 
     Reserved by:-Mithun, Manish, Manikant, Preeti, Arathi</h5>
</footer>
<script>
    
     $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1500)
    .next()
    .fadeIn(1500)
    .end()
    .appendTo('#slideshow');
},  3000);
    
    
</script>
<script>

    $(document).ready(function(){
        
        $( "#basket" ).hover(function(){
            $( '.basket' ).stop(true,true).fadeIn( "slow" );
        }, function() {
            $( '.basket' ).stop(true,true).slideUp( "slow" );
        }
     );
    });
    
    

</script>

</body>
</html>