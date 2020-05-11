
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title><?php echo $titre; ?></title>
<link rel="icon" href="<?=img_url('fav.png')?>" type="image/png" sizes="16x16"> 

<?php foreach($css as $url): ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
<?php endforeach; ?>


</head>
<body>


            <?php echo $output; ?>





			<?php foreach($js as $url): ?>
					<script src="<?php echo $url; ?>"></script> 
			<?php endforeach; ?>

</body>	
</html>