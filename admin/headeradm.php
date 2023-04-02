     <?php
     require_once ("../apps/config.php");
     ?>
     <?php

    if (isset($_SESSION['username'])) {
		     $sql_query = mysqli_query($conn,"SELECT * from user where username='".$_SESSION['username']."'");
    $result = mysqli_fetch_array($sql_query);
    $level = $result['level'];	
        if ($level == '1') {
            ?>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào <?php echo $_SESSION['username'] ?><b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user"></i> Chỉnh sửa tài khoản</a></li>
                                <li><a href="../logout.php"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <?php
        } else {
            die("Bạn không đủ quyền");
        }
    }
    else{
        header("location: ../login.php");
    }
        ?>
