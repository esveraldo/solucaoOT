<?php require_once './commom/header.php'; ?>
<?php
use App\DI\Container;
$logout = Container::getLogout();
$logout->endSes();
?>
<?php require_once './common/footer.php'; ?>

