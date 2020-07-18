<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helix_Creations
 */
?>
	</div> <!-- content -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer_icons">
				<div class="footer_icon">
					<a href="#">
						<img class="footer_icon--item" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADVklEQVR4Xu2ayWsUQRSHv7iiUQ/u4oKCCnFBogge9KgiqCeXo+hB1IOCC+agoIIgGhEvLrecxVsu/gcBiQu4gUJQxOhBvWgEceXXVEExTGebfulKqguKnpmeesvXVV1Vr14TiZemxP2nAlD1gMQJVEMg8Q5QvQSrIVDAEBDEZmA6MM1VfZ8ITHA1/Ox/81eZ8Dun/gp+1+c+4DvwzV31/V8jPvTXA3RvBbAWWAUsBOa7OjNwWM6W1ZPkfAjlK/DJ1Q/AS+AZ8CYPVD3DJwNHXV3ZCN2I2r4Gbrv6M7SrFsBS4D6wISLjizTlEbAHeOuFhgBmA0+ARUVqjFDWe2A98Fm2hQAeANsjNNjCJPm6IwSwEXhooSlimfK52/eAu8DhiI21ME0+H/EAngLrLLRELFM+twqAFiRaXGj6S6loOmwWgBa3YEjJee9riwDsBe6l6L18F4CzwJVEAbQJQDtwyhiAFlhzIlxktQtAB3DAGICmnJOut50BphjrG6z4DgHoBHYOtsUw/5fNua7tEuAqsH+Ysops1ikAXcCmIqXWkRUC8Lc3AzfdutxYfa74LgHQnllToWWpB0D6xgEHgcvAPEsDcmS/EoAeYJmx8jwAXu0M4BxwAphkbEsovkcAeoEFxkoHAuDVLweuA7uN7fHiewXgC6AQl2UZLABvw1bgBrDa0ij5LgCKqU01VjRUADJHexTNHBcNH1CfACgiOz5CAN4k9U5BEAxBKbL8GS0ALjkART+oDEDMQ0DR6QvWQyDGl+A29xLUeYRlyV6CMU2DOojRNLjL0utAdjYNxrIQOg8cL2MhVPZS+JBbCs8doaceqsmWwmVthra4zVBrCY57ldlmqIzt8DVgX4mOe9XZdngkAyJtwOnYAiLJh8SSD4omHxZP/mAk+aMxTQlJH44KQPLH48knSKgXJJ0iIwBKknoMLI5giWppQm6SlJSO9TS5bpcm984TzkuUVADyGDCWEiVvAXeAfhMlw67nU2XXuPi8UmV1gKI6K8gLtg6pDzQcfrgUH6X5KLz30VWlyr4Ang81VXYghbX3db6nfGGfKK2roFgkS4fOymEFdP8O1eDap9xI+1Hftqws72jAVQCieRQlGVL1gJLAR6O26gHRPIqSDEm+B/wH28exWSnLrTUAAAAASUVORK5CYII=" >
					</a>
				</div>	
				<div class="footer_icon">
					<a href="#">
						<img class="footer_icon--item" src="data:image/png;base64,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" >
					</a>
				</div>	
				<div class="footer_icon">
					<a href="#">
						<img class="footer_icon--item" src="data:image/png;base64,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" >
					</a>
				</div>	
				<div class="footer_icon">
					<a href="#">
						<img class="footer_icon--item" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFiUlEQVR4Xu2bZahtRRTHf8/uZ3fgBwtB8YOFYneCohiYiIrYjYkodotgBwiK7QdBRcECMRHrCRYmBqLYgcFP5sB2u8+ZmR337uO9Czbvw501a63/mZmVbwZTnGZMcfuZBmD6BExxBKavQM8PwKLATuFbDVgWWBD4HPgUeBF4AHgW+KOOLX09AUsAZwOHAnMmGCYYZwG3AX9G1q8LHAMcDvxQBcBmwJMJQrtasg9wXfilc2W8CuwJvFPBuAlwBrA1cA1wtGvKAIj8R8CZwKW50ltYfx5wesN9vgZ2Ad4AtgK2D99yYd/vgDWBT6oA8BidA/wF7A/c0VCZHHYNF4A26Lfw41Zdn8OAGwZCyifgeWC98MffgX2Be9rQKLLHruEx6/pNuhU4uKhLUeD8wLfAHIUFPijHAVd3CMJ8wLvAMh3KcOu7wg+qTXMFzzKzCMA6wCtDlLgEOCVcjbb19GE6t+1NC/t5kn3THgG0cSNgd+ArT3sRAF/Jp0Yo8ihwAPBFi8rOFny6j29X5KPnLz5PQcD3wPrArCIA2wAaOYo0XhBi61KN2XQSXK5XYDfgobIX0DXoOmKkh7gp+NQvY4sjf78IOLnhHjnsPwHGGf8YXwZgXuDHithgmACP1vnAlcCvOVoU1t4N7FGTN5fN02tY/VKRsex2XgAMFXPIwOmqcCoEJYeM4X2Uuqa3gB2AD8uCygCcBFxcUxuNvzkEGW8n7lGMOxJZai3Tg1XaVQbAbEuf7HVoQiJ+X/heG+E+7w0uqYmsFN7TgAuqFlZFXi48NWXXxDUGVy8DXi//9Rh+Ftyf+YaBVtd0PHBFKgALAWZVK3eslfm7j6eRYNdkWn1jKgCu0yU+VzMl7dqYOvvvHULh//AWr8CWwGIhKTF83By4H1i4jsSe8VjjqIxyiwDsBdwZQl0Th9fD4+WbsGTPDMpVZ4VB/l9mLAIwGWFpriF11v8S3hkj2JFXYAHgm1I6XEdg33h80M0CK6nsBp8BNu6bBQ31uRY4MhWAg4BbGgrsG7vJj29b0gkwb34fGBQQ+2ZMHX2WDz2EJABcZLXEEPX/QDZOBjXOZABceHuoCo87CIb01hyG0rAqrFfhwVBPH2cQVgnJXTYAMlhD80E0jBxHsrtlNDuSUurwegarwobJ40S+ZYbyjQFwA4Oko4ADgVVjm/bg7x+HbDbaMY6dADs2Gm+/zRL26sCOwBY9MHKUCgY+BkBRigFgseLy6C79WvAesAZgRhulGACLhMBonFLiobl/FRoxAOQ5IvU4ReHufsHTgLl/ZeZXFwDv/sPAdt3r30jCz8BaMb9flpByAuSxTmimqIC+0onAZbnKpQLgvr4D+tVocJGrRAvr7fzqnWLzQf8RlQOAzE5c2Dyx3VzstrZgQ+0t7GPYzbL8nk25AAwErBSGjJy2mEwPYZt7Q+DNbMsDQ10ABvKcJhF9+3vm3fsBzvZNBNnpdQDKl782NQWgeCJsPDiCNhFkoXNn4PGmwpoCIL9xwoUhZG6qTwq/x96WeitDGnUBsF5gxGWovHaK1i2tsa/oL2/PohXKBcBJrkPCr750Kxqkb+IsgSlu06mUf0kcBYB/WyqUyc3+9P9mgxNNDj06N2xNIpre5iqnkU6HnRAaoQYSGu3U1uLA7LkbtrzesT2HslJml2qJHpwAByKODbOAM2vt1C7TByHYsp6fHd3lqFK+Apa9nKawDGYqPNFkLu/Q1fWp+XxTBYe9AXOHiWuP37Yd9wstXFiBdoD5iZxUtqnx8qd4Ad8EXZ7d4w2ANl5/J8seC5/BjE3ZSaEUAMqKmQc4Zuq3Yrgqhr9eGT9HXgxWnBrzM0nxPzDMApwec4DKO94LqgNALxRvS4lpANpCclz3mT4B4/rLtaX3lD8BfwPOqt6xII8/rgAAAABJRU5ErkJggg==" >
					</a>
				</div>	
			</div>
			<div class="footer_links">
				<span class="footer_link--item"><a href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy </a></span> <!-- WORK HERE -->
				<span class="footer_link--item">| </span>
				<span class="footer_link--item"><a href="">Sitemap </a></span> <!-- WORK HERE -->
				<span class="footer_link--item">| </span>
				<span class="footer_link--item"><a href="<?php echo site_url('/contact') ?>">Contact </a></span> <!-- WORK HERE -->
				<!-- <span class="footer_link--item">| </span>
				<span class="footer_link--item"><a href="">Signup/Login </a></span> WORK HERE -->
				<!-- <span class="footer_link--item">| </span>
				<span class="footer_link--item" onclick="updateId('mobile-nav1','mobile-nav2')" >Search</span> WORK HERE -->
			</div>
			<div class="trademark">© <?php echo current_time('Y');?> Helix Creations</div>
		</div><!-- .site-info -->
		</div><!-- .page -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
