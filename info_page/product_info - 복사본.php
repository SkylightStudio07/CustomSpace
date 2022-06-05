<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />

<title>상품 페이지</title>

<link rel="stylesheet" type="text/css" href="../css/common.css" />
</head>
<body>
	<header>
    	<?php include "../header.php";?>
    </header>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from slist where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();
	?>
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
			<div id="logo"><a href="/"><img src="../shop.png" alt="shop_icon" title="shop_icon"/></a></div>
			</div>	
				<div id="content">
					<div id="shopname">
						<div id="shop_nt">
							SWR쇼핑
						</div>
					</div>
					<div id="shop_p_img">
						<img src="../info_page/shop/<?php echo $shopinfo['pro_pic'];?>_pro.jpg" style= "width:10%" alt="propic" title="propic"/>
					</div>
					<div id="shop_p_info">
						<ul>
							<li>상품명 : <?php echo $shopinfo['product_name']; ?></li>
							<li>제조사 : <?php echo $shopinfo['developer']; ?></li>
							<li>가격 : <?php echo $shopinfo['price']; ?></li>
						</ul>
						<div id="shop_icon">
							<ul>
								<li><a href="#"><img src="../shop/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
								<li><a href="../page/basket_ok.php?idx=<?php echo $shopinfo['idx'];?>"><img src="/shop/basket.png" alt="" title="" /></a></li>
							</ul>
						</div>
					</div>
					<div id="shop_p_info2">
						<img src="../shop/info/<?php echo $shopinfo['pro_pic'];?>_info.jpg" alt="propic" title="propic" />
					</div>
				</div>
			</div>
		</div>
	<footer>
    	<?php include "../footer.php";?>
	</footer>
</body>
</html>