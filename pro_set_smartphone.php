<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/pro_set.css" />
</head>
<body>
    <header>
    	<?php include "header.php";?>
    </header>
	<section>
		<?php include "navbar.php";?>
	</section>
	<div id="bg1"></div>
		<div id="main_in">
			<div id="menu">
				<h3 id="tit1">제품 리스트</h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist where category = '스마트폰' order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./product_info.php?idx=<?php echo $shoplist['idx'];?>"><img src="./info_page/shop/<?php echo $shoplist['pro_pic'];?>_pro.jpg" style="width: 100%;" alt="propic" title="propic"/></a></div>
							<div class="pro_nt"><a href="./product_info.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['product_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
				</div><!---shop_list end--->
			</div><!---main_in end--->
		<footer></footer>
</body>
</html>