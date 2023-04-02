<?php
ini_set('display_errors', 1);
ini_set('log_errors', 'on');
ini_set('error_log', 'php.error.log');
// so san pham da add vao cart
$prd = 0;
if (!empty($_SESSION['cart'])) $prd = count($_SESSION['cart']);
?>
<head>
    <title>Website chuyên bán</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="<?php echo $base; ?>/images/favicon.png" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>/css/fontawesome-all.min.css" media='all'/>
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;subset=vietnamese">
    <link rel="stylesheet" href="<?php echo $base; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/css/owl.theme.default.min.css">
</head>
<div id="header">
    <div class="topbar">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="https://firebasestorage.googleapis.com/v0/b/dev-manament.appspot.com/o/logo.png?alt=media&token=b4cd8081-569a-4a9e-96d3-57684f50ec4"
                         width="50" height="40">
                </a>
            </div><!--end logo-->
            <div class="search">
                <form class="searchform" action="<?php echo $base ?>/search.php" method="get">
                    <input class="s" placeholder="Tìm kiếm …" type="text" name="s" width="300px"/>
                    <button class="searchsubmit" type="submit">
                </form>
            </div><!-----end search---->

            <div class="hotline">
                <div class="ptittle">Hotline:</div><!--ptille-->
                <div class="pdetail">0964876096</div><!--pdetail-->
            </div>
            <!-- Đăng nhập -->
        </div><!--end container-->
    </div><!--End topbar--->

    <div class="menu">
        <div class="container">
            <div class="nav">
                <div class='menu_leve_1'><a href='<?php echo $base ?>' class='parent'>Trang chủ</a></div>
                <?php
                $menu_result = mysqli_query($conn, "SELECT * FROM menu") or die ('Cannot connect table!' . mysqli_error($conn));
                while ($menu_items = mysqli_fetch_array($menu_result, MYSQLI_ASSOC)) {
                    $submenu_query = "SELECT *
                                      FROM sub_menu
                                      WHERE id_catalog =" . $menu_items['id_catalog'];
                    $submenu_res = mysqli_query($conn, $submenu_query) or die ('Cannot select menu' . mysqli_error($conn));
                    /*--------------------------------SHOW MENU-------------------------------------------*/
                    echo "<div class='menu_leve_1'><a href = '" . $base . "/sanpham.php?id_menu=" . $menu_items['id_catalog'] . "' class='parent'>" . $menu_items['name_menu'] . "</a>
                <ul class='menuHiden' style='display: none;margin-bottom: 0px;margin-top: 0px;padding-left: 0px;padding-H:10px;'>";
                    /*                        echo "<li class='active'><a href='".$submenu_items['link_sub']."'><br/>".$menu_items['name_sub']."</a>
                                                    <ul style='padding-left:0px;padding-bottom:10px;'>";*/
                    while ($submenu_items = mysqli_fetch_array($submenu_res, MYSQLI_ASSOC)) {
                        echo "<li><a href='" . $base . "/sanpham.php?id_menu=" . $submenu_items['id_sub'] . "'>" . $submenu_items['name_sub'] . " </a></li>";
                    }
                    echo "
                                </ul>
                                </li>";

                    echo "</ul></div>";
                }
                ?>
                <?php
                if (isset($_SESSION['username'])) {
                    $sql_query = mysqli_query($conn, "select * from user where username='" . $_SESSION['username'] . "'");
                    $sql_result = mysqli_fetch_array($sql_query);
                    $level = $sql_result['level'];
                    if ($level == '3') {
                        echo "<div class='user1'>
                        <div class='header_login'>
                        <a href=''>Xin chào: " . $_SESSION['username'] . "</a>
                        </div>
                        <ul class='header_logout'>
                            <li><a href='" . $base . "/logout.php'>Đăng xuất</a></li>
                        </ul>
                        </div>";
                    } else if ($level == '1') {
                        echo "<div class='user1'>
                        <div class='header_login'>
                        <a href=''>Xin chào: " . $_SESSION['username'] . "</a>
                        </div>
                        <ul class='header_logout'>
                            <li><a href='" . $base . "/admin/index.php'>Quản lý</a></li>
                            <li><a href='" . $base . "/logout.php'>Đăng xuất</a></li>
                        </ul>
                        </div>";
                    } else {
                        echo '<div class="user1">
                    <div class="header_login">
                        <a href="#" title="" class="fa fa-user"></a>
                    </div>
                    <ul class="header_login_reg">
                        <li><a href="' . $base . '/login.php">Đăng nhập</a></li>
                        <li><a href="' . $base . '/register.php">Đăng Kí</a></li>
                    </ul>
                </div>';
                    }

                } else {
                    echo '  <div class="user1">
                    <div class="header_login">
                        <a href="#" title="" class="fa fa-user"></a>
                    </div>
                    <ul class="header_login_reg">
                        <li><a href="' . $base . '/login.php">Đăng nhập</a></li>
                        <li><a href="' . $base . '/register.php">Đăng Kí</a></li>
                    </ul>
                </div>';
                }
                ?>
            </div><!--end nav-->
        </div><!--end container-->
    </div><!---menu-->
</div><!--End Header--->