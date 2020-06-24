<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MisakaKuchiki</title>
    <style>
        /*.menu{*/
        /*    overflow: hidden;*/
        /*    display: inline-block;*/
        /*}*/
        /*.menu > ul > li > ul {*/
        /*    display: none;*/
        /*}*/
        /*.menu > ul > li:hover ul {*/
        /*    display: block;*/
        /*}*/
        .home:hover{
            opacity: 0.3;
        }
        .profile:hover{
            opacity: 0.3;
        }
        .blog:hover{
            opacity: 0.3;
        }
        .study_notes:hover{
            opacity: 0.3;
        }
        .travels:hover{
            opacity: 0.3;
        }
    </style>
</head>
<body>
<div class="BackGround" style="background-image: url(DesignMaterial/mizore-dark.png);
                               position: relative;
                               height: 1080px;
                               min-width: 1280px;
                               background-repeat: no-repeat;
                               background-size: cover;
                               -webkit-background-size: cover;
                               -o-background-size: cover;
                               background-position: center 0;">
    <div class="floating" style="height:100%; width:12.5%; background:rgba(275,275,275,0.60);">
        <div class="nozomi" style=" width: 100%">
            <a href="homepage.php">
                <img src="DesignMaterial/nozomi.gif" width="100%"  alt="profile">
            </a>
        </div>
        <div class="ID" align="center" style="width: 100%">
            <a href="homepage.php">
                <img src="DesignMaterial/ID.png" width="90%" alt="name">
            </a>
        </div>
        <div class="menu_wrapper" style="width: 100%">
            <ul class="menu" style="padding-left: 0;">
                <li class="home" style="line-height: 200%; list-style: none; background: rgba(0,191,255,0.3)">
                    <a href="homepage.php" style="text-decoration: none">
                        <img src="DesignMaterial/HOME.png" width="80%" style="opacity: 1" alt="home">
                        <img src="DesignMaterial/bluebird.png" width="15%" alt="bluebird">
                    </a>
                </li>
                <li class="profile" style="line-height: 200%; list-style: none">
                    <a href="homepage.php">
                        <img src="DesignMaterial/PROFILE.png" width="80%" style="opacity: 1" alt="profile">
                    </a>
                </li>
                <li class="blog" style="line-height: 200%; list-style: none">
                    <a href="homepage.php">
                        <img src="DesignMaterial/BLOG.png" width="80%" style="opacity: 1" alt="blog">
                    </a>
                </li>
                <li class="study_notes" style="line-height: 200%; list-style: none">
                    <a href="homepage.php">
                        <img src="DesignMaterial/STUDY%20NOTES.png" width="80%" style="opacity: 1" alt="study notes">
                    </a>
                </li>
                <li class="travels" style="line-height: 200%; list-style: none">
                    <a href="homepage.php">
                        <img src="DesignMaterial/TRAVELS.png" width="80%" style="opacity: 1" alt="travels">
                    </a>
                </li>
            </ul>
            <div class="QQ" align="center" style="width: 100%">
                <img src="DesignMaterial/QQ.png" width="60%" alt="QRCode">
            </div>
            <div class="sns" align="center" style="width: 100%">
                <div class="weibo" style="width: 25%;float: left">
                    <a target="_blank" href="https://weibo.com/3487631474/profile?topnav=1&wvr=6&is_all=1" style="text-decoration: none">
                        <img src="DesignMaterial/weibo.png" style="width: auto; height: auto;max-width: 100%; max-height: 100%" alt="weibo">
                    </a>
                </div>
                <div class="twitter" style="width: 25%;float: left">
                    <a target="_blank" href="https://twitter.com/misakakuchiki" style="text-decoration: none">
                        <img src="DesignMaterial/twitter.png" style="width: auto; height: auto;max-width: 100%; max-height: 100%" alt="twitter">
                    </a>
                </div>
                <div class="instagram" style="width: 25%;float: left">
                    <a target="_blank" href="https://www.instagram.com/misakakuchiki/" style="text-decoration: none">
                        <img src="DesignMaterial/instagram.png" style="width: auto; height: auto;max-width: 100%; max-height: 100%" alt="instagram">
                    </a>
                </div>
                <div class="bilibili" style="width: 25%;float: left">
                    <a target="_blank" href="https://space.bilibili.com/2392866" style="text-decoration: none">
                        <img src="DesignMaterial/bilibili.png" style="width: auto; height: auto;max-width: 100%; max-height: 100%" alt="bilibili">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="menu" style="position: absolute;left: 50px;top: 50px;list-style: none"> <img src="DesignMaterial/nozomi.gif" width="120" height="120" alt="nozomi">-->
<!--    <ul>-->
<!--        <li class="customer" style="position:absolute; left:27px; top:373px; list-style:none"> <img src="customer.png" width="127" height="27"  alt="Customer">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:127px; top:0px; list-style:none"> <a href="C_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="employee" style="position:absolute; left:27px; top:443px; list-style:none"> <img src="employee.png" width="127" height="27"  alt="Employee">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:127px; top:0px; list-style:none"> <a href="E_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="product" style="position:absolute; left:27px; top:513px; list-style:none"> <img src="product.png" width="127" height="27"  alt="Product">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:127px; top:0px; list-style:none"> <a href="Pro_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--                <li class="add" style="position:absolute; left:127px; top:50px; list-style:none"> <a href="Pro_Add.php"> <img src="add.png" width="127" height="27"  alt="Add"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="supplier" style="position:absolute; left:13px; top:597px; list-style:none"> <img src="supplier.png" width="165" height="55"  alt="Supplier">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:162px; top:0px; list-style:none"> <a href="S_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="purchase" style="position:absolute; left:10px; top:682px; list-style:none"> <img src="purchase.png" width="174" height="58"  alt="Purchase">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:170px; top:0px; list-style:none"> <a href="Pur_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--                <li class="add" style="position:absolute; left:170px; top:50px; list-style:none"> <a href="Pur_Add.php"> <img src="add.png" width="127" height="27"  alt="Add"> </a> </li>-->
<!--                <li class="search" style="position:absolute; left:170px; top:100px; list-style:none"> <a href="Pur_Search.php"> <img src="search.png" width="127" height="27"  alt="search"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="log" style="position:absolute; left:10px; top:772px; list-style:none"> <img src="log.png" width="174" height="58"  alt="Log">-->
<!--            <ul>-->
<!--                <li class="check" style="position:absolute; left:170px; top:0px; list-style:none"> <a href="L_Check.php"> <img src="check.png" width="127" height="27"  alt="Check"> </a> </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->
</body>
</html>
