<?php $title = 'Banana Chocolate Shookies!'; ?>
<?php $body = 'products_all'; ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
	
	<section>
		<article id="product_page">
            <img src="http://shookies.net/images/bananabar_large.png" alt="Shortbread Shookies">
        
            <h3>Banana Chocolate Shookies</h3>
            <p>Scrumptious, all natural banana-loaded cakes with a touch of cocoa bliss. Gluten-free goodness!</p>
            <cite class="ingredients " title="&lt;strong&gt;Ingredients&lt;/strong&gt; bananas, garbanzo bean flour, potato starch, tapioca flour, white sorghum flour, fava bean flour, unsalted butter, sugar, eggs, vanilla, baking powder, baking soda, salt, xanthan gum, cocoa powder.">View Ingredients</cite>
            <h4><span class="currency_sign">$</span>14.99 <em>for 12 Bars</em></h4>

            <h3 id="more_title">More Shookies</h3>
            <ul id="more_shookies">
               <li><a href="http://shookies.net/product/shortbread-shookies"><img src="http://shookies.net/images/sh_shortbread_large.jpeg" alt="Shortbread Shookies" width="100"></a></li>
               <li><a href="http://shookies.net/product/apricot-linzer-shookies"><img src="http://shookies.net/images/sh_linz_large.jpg" alt="Apricot Linzer Shookies" width="100"></a></li>
               <li><a href="http://shookies.net/product/banana-chocolate-shookies"><img src="http://shookies.net/images/bananabar_large.png" alt="Banana Chocolate Shookies" width="100"></a></li>
               <li><a href="http://shookies.net/product/dragee-shookies"><img src="http://shookies.net/images/sh_drag_large.jpg" alt="Dragée Shookies" width="100"></a></li>
            </ul>
        </article>
	</section>
	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>