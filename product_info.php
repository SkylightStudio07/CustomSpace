<?php include "./db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />

<title>상품 페이지</title>

<link rel="stylesheet" type="text/css" href="./css/common.css" />
<link rel="stylesheet" type="text/css" href="./css/product_info.css" />

</head>
<body>


	<header>
    	<?php 
		include "./header.php";?>
    </header>
	<section>
		<?php include "navbar.php";?>
	</section>

	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from slist where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();
	?>

	<table class = "custom_space">
		<tr>
			<td>custom.php(추후 구현)</td>
		</tr>
	</table>

    <table class = "info_table">
        <tr>
        	<th><img src="./info_page/shop/<?php echo $shopinfo['pro_pic'];?>_pro.jpg" style= "width:75%" alt="propic" title="propic"/></th>
        </tr>
        <tr>
        	<td><div class = "pro_name"><?php echo $shopinfo['product_name']; ?></div></td>
        </tr>
        <tr>
        	<td><?php echo $shopinfo['developer']; ?></td>
        </tr>
        <tr>
        	<td><?php echo $shopinfo['price']; ?>(KRW)</td>
        </tr>
    </table>
	
	<div id="shop_icon">
		<ul>
			<li><a href="#"><img src="./shop/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
			<li><a href="./page/basket_ok.php?idx=<?php echo $shopinfo['idx'];?>"><img src="/shop/basket.png" alt="" title="" /></a></li>
		</ul>
	</div>

	<div id="shop_p_info2">
		<img src="./shop/info/<?php echo $shopinfo['pro_pic'];?>_info.jpg" alt="propic" title="propic" />
	</div>

	<footer>
    	<?php include "./footer.php";?>
	</footer>
</body>
</html>