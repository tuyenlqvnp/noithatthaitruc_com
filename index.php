<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0030)http://localhost:8080/admin99/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Noi That Thai Truc</title>
		<meta name="description" content="Shop powered by PrestaShop">
		<meta name="keywords" content="shop, prestashop">
		
		<meta name="generator" content="PrestaShop">
		<meta name="robots" content="index,follow">
		<link rel="icon" type="image/vnd.microsoft.icon" href="http://localhost:8080/admin99/img/favicon.ico">
		<link rel="shortcut icon" type="image/x-icon" href="http://localhost:8080/admin99/img/favicon.ico">
		<link href="./noithatthaitruc_files/global.css" rel="stylesheet" type="text/css" media="all">
			<script type="text/javascript" src="./noithatthaitruc_files/tools.js.download"></script>
		<script type="text/javascript">
			var baseDir = 'http://localhost:8080/admin99/';
			var static_token = 'a33cc054bb7d824cd6068c0654c213c8';
			var token = '4dc5a266b9146357ab80997867203bb3';
			var priceDisplayPrecision = 2;
		</script>
		<script type="text/javascript" src="./noithatthaitruc_files/jquery-1.2.6.pack.js.download"></script>
		<script type="text/javascript" src="./noithatthaitruc_files/jquery.easing.1.3.js.download"></script>
		<script type="text/javascript" src="./noithatthaitruc_files/jquery.hotkeys-0.7.8-packed.js.download"></script>
		<!-- Block search module HEADER -->
<link rel="stylesheet" type="text/css" href="./noithatthaitruc_files/jquery.autocomplete.css">
<script type="text/javascript" src="./noithatthaitruc_files/jquery.autocomplete.js.download"></script>
<!-- Block search module HEADER -->
	</head>
	
	<body id="index">
			<noscript><ul><li></li></ul></noscript>		
		<table cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr>
				<td align="center">
					<div style="background-color:red;width:990px;height:20px;"></div>
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="990" height="165">
  <param name="movie" value="flash/banner.swf">
  <param name="quality" value="high">
  <param name="allowScriptAccess" value="always">
  <param name="wmode" value="transparent">
     <embed src="flash/banner.swf" quality="high" type="application/x-shockwave-flash" wmode="transparent" width="990" height="165" pluginspage="http://www.macromedia.com/go/getflashplayer" allowscriptaccess="always">
</object>
				</td><td>
			</td></tr>
		</tbody></table>
		<div id="page">
		
		
			<!-- Header -->
			<div>
				<h1 id="logo"><a href="http://localhost:8080/admin99/" title="Noi That Thai Truc"><img src="./noithatthaitruc_files/logo.jpg" alt="Noi That Thai Truc"></a></h1>
				<div id="header">
					<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://localhost:8080/admin99/search.php" id="searchbox">
	<p>
		<label for="search_query"><!-- image on background --></label>
		<input type="hidden" name="orderby" value="position">
		<input type="hidden" name="orderway" value="desc">
		<input type="text" id="search_query" name="search_query" value="" autocomplete="off" class="ac_input">
		<input type="submit" name="submit_search" value="Search" class="button">
	</p>
	</form>
</div>
	<script type="text/javascript">
		
		
		function formatSearch(row) {
			return row[2] + ' > ' + row[1];
		}

		function redirectSearch(event, data, formatted) {
			$('#search_query').val(data[1]);
			document.location.href = data[3];
		}
		
		$('document').ready( function() {
			$("#search_query").autocomplete(
				'http://localhost:8080/admin99/search.php', {
				minChars: 3,
				max:10,
				width:500,
				scroll: false,
				formatItem:formatSearch,
				extraParams:{ajaxSearch:1,id_lang:3}
			}).result(redirectSearch)
		});
		
	</script>
<!-- /Block search module TOP -->
				</div>
			</div>

			<!-- Left -->
			<div id="left_column" class="column">
				<script type="text/javascript" src="./noithatthaitruc_files/treeManagement.js.download"></script>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Sản phẩm</h4>
	<div class="block_content">
		<ul class="tree dynamized" style="display: block;">
											<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=5" title="">Sofa Nhựa Giả Mây</a>
	</li>
														<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=6" title="">Bàn Ghế Cafe</a>
	</li>
														<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=7" title="">Ghế Cafe</a>
	</li>
														<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=8" title="">Bàn Cafe</a>
	</li>
														<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=9" title="">Sản Phẩm Đặc Biệt</a>
	</li>
														<li>
	<a href="http://localhost:8080/admin99/category.php?id_category=10" title="">Ghế Nhà Hàng</a>
	</li>
														<li class="last">
	<a href="http://localhost:8080/admin99/category.php?id_category=11" title="">Sản Phẩm Mới</a>
	</li>
							</ul>
	</div>
</div>
<script type="text/javascript">
// <![CDATA[
	// we hide the tree only if JavaScript is activated
	$('div#categories_block_left ul.dhtml').hide();
// ]]>
</script>
<!-- /Block categories module --><!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
	<h4>Sản phẩm đã xem</h4>
	<div class="block_content">
		<ul class="products">
					<li class="first_item">
				<a href="http://localhost:8080/admin99/product.php?id_product=101" title="Chi tiết TT-602"><img src="./noithatthaitruc_files/101-141-medium.jpg" height="80" width="80" alt="TT-602"></a>
				<h5><a href="http://localhost:8080/admin99/product.php?id_product=101" title="Chi tiết TT-602">TT-602</a></h5>
				<p><a href="http://localhost:8080/admin99/product.php?id_product=101" title="Chi tiết TT-602"><img src="./noithatthaitruc_files/bullet.gif" alt="&gt;&gt;"></a></p>
			</li>
					<li class="last_item">
				<a href="http://localhost:8080/admin99/product.php?id_product=117" title="Chi tiết TT-619"><img src="./noithatthaitruc_files/117-157-medium.jpg" height="80" width="80" alt="TT-619"></a>
				<h5><a href="http://localhost:8080/admin99/product.php?id_product=117" title="Chi tiết TT-619">TT-619</a></h5>
				<p><a href="http://localhost:8080/admin99/product.php?id_product=117" title="Chi tiết TT-619"><img src="./noithatthaitruc_files/bullet.gif" alt="&gt;&gt;"></a></p>
			</li>
				</ul>
	</div>
</div><!-- Block informations module -->
<div id="informations_block_left" class="block">
	<h4>Thông tin</h4>
	<ul class="block_content">
					<li><a href="http://localhost:8080/admin99/cms.php?id_cms=6" title="Giới thiệu">Giới thiệu</a></li>
					<li><a href="http://localhost:8080/admin99/cms.php?id_cms=7" title="Liên hệ">Liên hệ</a></li>
			</ul>
</div>
<!-- /Block informations module -->
			</div>

			<!-- Center -->
			<div id="center_column">
	<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block" style="text-align:center;width:100%">
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="480" height="400" id="tech" align="middle">
    <param name="allowScriptAccess" value="sameDomain">
    <param name="movie" value="flash/sliceshow.swf?xml_path=flash/slides.xml">
    <param name="quality" value="high">
    <embed src="flash/sliceshow.swf?xml_path=flash/slides.xml" quality="high" width="480" height="400" name="tech" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
  </object>
</div>
<!-- /Module Editorial --><!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block">
	<h4>Các sản phẩm đặc biệt</h4>
			<div class="block_content">
																		<ul style="height:490px;">
							<li class="ajax_block_product first_item first_item_of_line ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=101" title="TT-602">TT-602</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=101" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=101" title="TT-602" class="product_image"><img src="./noithatthaitruc_files/101-141-home.jpg" height="129" width="129" alt="TT-602"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=101" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_101" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=101&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item  ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=102" title="TT-603">TT-603</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=102" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=102" title="TT-603" class="product_image"><img src="./noithatthaitruc_files/102-142-home.jpg" height="129" width="129" alt="TT-603"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=102" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_102" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=102&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item  ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=106" title="TT-607">TT-607</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=106" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=106" title="TT-607" class="product_image"><img src="./noithatthaitruc_files/106-146-home.jpg" height="129" width="129" alt="TT-607"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=106" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_106" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=106&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item last_item_of_line ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=108" title="TT-609">TT-609</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=108" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=108" title="TT-609" class="product_image"><img src="./noithatthaitruc_files/108-148-home.jpg" height="129" width="129" alt="TT-609"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=108" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_108" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=108&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item first_item_of_line ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=110" title="TT-611">TT-611</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=110" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=110" title="TT-611" class="product_image"><img src="./noithatthaitruc_files/110-150-home.jpg" height="129" width="129" alt="TT-611"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=110" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_110" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=110&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item  ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=111" title="TT-612">TT-612</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=111" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=111" title="TT-612" class="product_image"><img src="./noithatthaitruc_files/111-151-home.jpg" height="129" width="129" alt="TT-612"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=111" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_111" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=111&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product item  ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=104" title="TT-605">TT-605</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=104" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=104" title="TT-605" class="product_image"><img src="./noithatthaitruc_files/104-144-home.jpg" height="129" width="129" alt="TT-605"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=104" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_104" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=104&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
							<li class="ajax_block_product last_item last_item_of_line ">
					<h5><a href="http://localhost:8080/admin99/product.php?id_product=107" title="TT-608">TT-608</a></h5>
					<!--<p class="product_desc" style="visibility:hidden;"><a href="http://localhost:8080/admin99/product.php?id_product=107" title="More"></a></p>-->
					<a href="http://localhost:8080/admin99/product.php?id_product=107" title="TT-608" class="product_image"><img src="./noithatthaitruc_files/107-147-home.jpg" height="129" width="129" alt="TT-608"></a>
					<div>
						<p class="price_container"><span class="price">0,00 €</span></p>												<a class="button" href="http://localhost:8080/admin99/product.php?id_product=107" title="Xem">Xem</a>
												<!--<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_107" href="http://localhost:8080/admin99/cart.php?qty=1&amp;id_product=107&amp;token=a33cc054bb7d824cd6068c0654c213c8&amp;add" title="Th&ecirc;m v&agrave;o giỏ h&agrave;ng">Th&ecirc;m v&agrave;o giỏ h&agrave;ng</a>-->
											</div>
				</li>
						</ul>
		</div>
	</div>
<!-- /MODULE Home Featured Products -->				</div>

<!-- Right -->
			<div id="right_column" class="column">
				
<script type="text/javascript" src="./noithatthaitruc_files/iutil.prestashop-modifications.js.download"></script>
<script type="text/javascript" src="./noithatthaitruc_files/ifxtransfer.js.download"></script>
<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var customizationIdMessage = 'Tùy biến';
var removingLinkText = 'bỏ sản phẩm này từ giỏ hàng';
</script>
<script type="text/javascript" src="./noithatthaitruc_files/ajax-cart.js.download"></script>

<!-- MODULE Block cart -->
<div id="cart_block" class="block exclusive">
	<h4>
		<a href="http://localhost:8080/admin99/order.php">Giỏ hàng</a>
				<span id="block_cart_expand" class="hidden">&nbsp;</span>
		<span id="block_cart_collapse">&nbsp;</span>
			</h4>
	<div class="block_content">
	<!-- block summary -->
	<div id="cart_block_summary" class="collapsed">
		<span class="ajax_cart_quantity" style="display: none;"></span>
		<span class="ajax_cart_product_txt_s hidden">sản phẩm</span>
		<span class="ajax_cart_product_txt hidden">sản phẩm</span>
		<span class="ajax_cart_total" style="display: none;">0,00 €</span>
		<span class="ajax_cart_no_product">(trống)</span>
	</div>
	<!-- block list of products -->
	<div id="cart_block_list" class="expanded">
			<p id="cart_block_no_products">Không có sản phẩm</p>
		
				
		<p id="cart-prices">
			<span>Vận chuyển</span>
			<span id="cart_block_shipping_cost" class="price ajax_cart_shipping_cost">0,00 €</span>
			<br>
						<span>Tổng</span>
			<span id="cart_block_total" class="price ajax_block_cart_total">0,00 €</span>
		</p>
						<p id="cart-buttons">
			<a href="http://localhost:8080/admin99/order.php" class="button_small" title="Giỏ hàng">Giỏ hàng</a>
			<a href="http://localhost:8080/admin99/order.php?step=1" id="button_order_cart" class="exclusive" title="Thanh toán">Thanh toán</a>
		</p>
	</div>
	</div>
</div>
<!-- /MODULE Block cart --><!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4><a href="http://localhost:8080/admin99/new-products.php" title="Sản phẩm mới">Sản phẩm mới</a></h4>
	<div class="block_content">
			<p>Hiện tại không có sản phẩm mới </p>
		</div>
</div>
<!-- /MODULE Block new products -->
			</div>

<!-- Footer -->
			<div id="footer"><!-- MODULE Block various links -->
<div style="width:100%;text-align:center">
<ul class="block_various_links" id="block_various_links_footer">
	<!--<li class="first_item"><a href="http://localhost:8080/admin99/prices-drop.php" title="">Khuyến mại</a></li>-->
  <li class="first_item"><a href="http://noithatthaitruc.com/">Trang chủ</a></li>
	<!--<li class="item"><a href="http://localhost:8080/admin99/new-products.php" title="">Sản phẩm mới</a></li>-->
	<!--<li class="item"><a href="http://localhost:8080/admin99/best-sales.php" title="">Top sellers</a></li>-->
	<!--<li class="item"><a href="http://localhost:8080/admin99/contact-form.php" title="">Li&ecirc;n hệ</a></li>-->
			<li class="item"><a href="http://localhost:8080/admin99/cms.php?id_cms=6" title="Giới thiệu">Giới thiệu</a></li>
			<li class="item"><a href="http://localhost:8080/admin99/cms.php?id_cms=7" title="Liên hệ">Liên hệ</a></li>
		<li class="last_item"><a href="http://localhost:8080/admin99/#">Nội Thất Thái Trúc</a></li>
</ul>
</div>
<!-- /MODULE Block various links -->
		<script type="text/javascript">
			var time_start;
			$(window).load(
				function() {
					time_start = new Date();
				}
			);
			$(window).unload(
				function() {
					var time_end = new Date();
					var pagetime = new Object;
					pagetime.type = "pagetime";
					pagetime.token = "vzlsM1xUYb4=SbQMBclxEMc=vNYqoWhs6DA=mfKqE9o6iXs=";
					pagetime.time = time_end-time_start;
					$.post("http://localhost:8080/admin99/statistics.php", pagetime);
				}
			);
		</script></div>
		</div>
		
</body></html>