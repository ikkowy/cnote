<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $data['title']; ?></title>
<link rel="shortcut icon" href="img/favicon.png">
<?php foreach ($data['style'] as $style): ?>
<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
<?php endforeach; ?>
</head>
<body>
<?php echo $data['body']; ?>
</body>
</html>
