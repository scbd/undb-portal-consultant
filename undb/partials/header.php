<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="/">

    <title>UN - CBD</title>

    <link rel="stylesheet" type="text/css" href="/undb/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/undb/css/original.css" />
    <link rel="stylesheet" type="text/css" href="/undb/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/undb/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/undb/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="/undb/css/style.css" />

    <script type="text/javascript" src="/undb/js/jquery.min.js"></script>
    <script type="text/javascript" src="/undb/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/undb/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/undb/slick/slick.min.js"></script>
    <script type="text/javascript" src="/undb/js/script.js"></script>


</head>
<body>

<div id="t-optionMenu">
    <div id="t-langSwitch" class="floatNear">
        <div id="ctl03_CContainer" class="languageBar" style="display:none;">
            <table cellspacing="0" cellpadding="0">
                <tbody><tr>
                    
                    <td>
                        <a href="javascript:__doPostBack('ctl03$BLocale', 'ar');" id="ctl03_DLocaleLink" class="locale">ar</a>
                    </td>
                    <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                    <td>
                        <b id="ctl03_DCurrentLocale" class="locale">en</b>
                    </td>
                    <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                    <td>
                        <a href="javascript:__doPostBack('ctl03$BLocale', 'es');" id="ctl03_DLocaleLink" class="locale">es</a>
                    </td>
                    <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                    <td>
                        <a href="javascript:__doPostBack('ctl03$BLocale', 'fr');" id="ctl03_DLocaleLink" class="locale">fr</a>
                    </td>
                    <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                    <td>
                        <a href="javascript:__doPostBack('ctl03$BLocale', 'ru');" id="ctl03_DLocaleLink" class="locale">ru</a>
                    </td>
                    <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                    <td>
                        <a href="javascript:__doPostBack('ctl03$BLocale', 'zh');" id="ctl03_DLocaleLink" class="locale">zh</a>
                    </td>
                    
                </tr>
            </tbody></table>
        </div><div id="ctl03_CContainer" class="languageBarFull" style="display:;">
        <table cellspacing="0" cellpadding="0">
            <tbody><tr>
                
                <td>
                    <a href="javascript:__doPostBack('ctl03$BLocale', 'ar');" id="ctl03_DLocaleLink" class="locale">العربية</a>
                </td>
                <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                <td>
                    <b id="ctl03_DCurrentLocale" class="locale">English</b>
                </td>
                <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                <td>
                    <a href="javascript:__doPostBack('ctl03$BLocale', 'es');" id="ctl03_DLocaleLink" class="locale">Español</a>
                </td>
                <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                <td>
                    <a href="javascript:__doPostBack('ctl03$BLocale', 'fr');" id="ctl03_DLocaleLink" class="locale">Français</a>
                </td>
                <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                <td>
                    <a href="javascript:__doPostBack('ctl03$BLocale', 'ru');" id="ctl03_DLocaleLink" class="locale">Русский</a>
                </td>
                <td id="ctl03_DSpacer">&nbsp;|&nbsp;</td>

                <td>
                    <a href="javascript:__doPostBack('ctl03$BLocale', 'zh');" id="ctl03_DLocaleLink" class="locale">中文</a>
                </td>
                
            </tr>
        </tbody></table>
    </div>


</div>

<div id="t-searchSignin" class="floatFar"><!-- Start: Search & Signin -->
    <div id="t-search" class="floatNear">
        <input name="CSearch" type="text" id="CSearch" class="t-headerSearch" placeholder="Search" onkeypress="if(event.keyCode==13||event.which==13) { __doPostBack('BSearch'); event.returnValue = false; return false; }">
        
        <a id="BSearch" href="javascript:__doPostBack('BSearch','')"></a>
    </div>
    <div id="t-signin" class="floatFar">
        

        <table cellspacing="0" cellpadding="0">
            <tbody><tr>
                
                <td><a id="ctl04_BSignUp" href="javascript:__doPostBack('ctl04$BSignUp','')">Sign up for an account</a></td>
                <td>&nbsp;|&nbsp;</td>
                <td><a id="ctl04_BSignIn" href="javascript:__doPostBack('ctl04$BSignIn','')">Sign In</a></td>
                

                
            </tr>
        </tbody></table>



    </div>
    <div class="t-clear"></div>
</div>
<div class="t-clear"></div>
</div>



<div id="mobileMenu">
    <input name="CSearch" type="text" class="t-headerSearch" placeholder="Search" onkeypress="if(event.keyCode==13||event.which==13) { __doPostBack('BSearch'); event.returnValue = false; return false; }">

    <div class="dropdown" id="siteMenu">
        <button type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/undb/img/icon/menu.svg" alt=""></button>
          <ul class="dropdown-menu">
            <li><a href="/undb/">Home</a></li>
            <li>
                <a role="button" href="/undb/about-unbd.php">About</a>
                <ul class="sub-menu">
                    <li><a href="/undb/about-unbd.php">UNDB</a></li>
                    <li><a href="/undb/about-goals.php">Goals</a></li>
                    <li><a href="/undb/about-biodiversity.php">Biodiversity</a></li>
                    <li><a href="/undb/about-iyb2010.php">IYB2010</a></li>
                    <li><a href="/undb/about-sdgs.php">SDGs</a></li>
                </ul>                
            </li>
            <li>
                <a role="button" href="/undb/actions-worldwide.php">Actions</a>
                <ul class="sub-menu">
                    <li><a href="/undb/actions-worldwide.php">Worldwide</a></li>
                    <li><a href="/undb/actions-by-countries.php">By countries</a></li>
                    <li><a href="/undb/actions-by-un-organizations.php">By UN organizations</a></li>
                    <li><a href="/undb/actions-calendar.php">Calendar</a></li>
                    <li><a href="/undb/actions-participate.php">Participate</a></li>
                </ul>
            </li>
            <li>
                <a role="button" href="/undb/actors.php">Actors</a>
                <ul class="sub-menu">
                    <li><a href="/undb/actors-abttf.php">ABTTF</a></li>
                    <li><a href="/undb/actors-biodiversity-champions.php">Biodiversity Champions</a></li>
                    <li><a href="/undb/actors-blg.php">BLG</a></li>
                    <li><a href="/undb/actors-jlg.php">JLG</a></li>
                    <li><a href="/undb/actors-undb-partners.php">UNDB Partners</a></li>
                </ul>    
            </li>
            <li>
                <a role="button" href="/undb/resources.php">Resources</a>
                <ul class="sub-menu">
                    <li><a href="/undb/resources-logo.php">Logo</a></li>
                    <li><a href="/undb/resources-printed-materials.php">Printed  materials</a></li>
                    <li><a href="/undb/resources-multimedia.php">Multimedia</a></li>
                </ul>
            </li>
            <li class="li-social">
                <ul class="social">
                    <li><a href=""><img src="/undb/img/icon/facebook.svg" alt=""></a></li>
                    <li><a href=""><img src="/undb/img/icon/twitter.svg" alt=""></a></li>
                    <li><a href=""><img src="/undb/img/icon/instagram.svg" alt=""></a></li>
                    <li><a href=""><img src="/undb/img/icon/youtube.svg" alt=""></a></li>
                    <li><a href=""><img src="/undb/img/icon/flickr.svg" alt=""></a></li>
                </ul>                
            </li>
          </ul> 

    </div>
    

    <div class="dropdown" id="languageMenu">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/undb/img/icon/language.svg" alt=""></button>
        <ul class="dropdown-menu">
            <li><a href="">العربية</a></li>
            <li><a href="">English</a></li>
            <li><a href="">Español</a></li>
            <li><a href="">Français</a></li>
            <li><a href="">Русский</a></li>
            <li><a href="">中文</a></li>
        </ul>
    </div>
    <div class="darkbox"></div>  
</div>
<header>
    <div id="logo">
        <a href="//un.org"><img src="/undb/img/logo/un.svg" alt=""></a>
        <a href="/undb/"><img src="/undb/img/logo/undb.svg" alt=""></a>
    </div>

    <div id="slogan">
        <p>Living in harmony with nature</p>
    </div>
</header>


    <div id="main" class="menu">
        <div class="center">
            <ul class="menu_arrow">
                <li><a href="/undb/">Home</a></li>
                <li><a href="/undb/about-unbd.php">About</a></li>
                <li><a href="/undb/actions-worldwide.php">Actions</a></li>
                <li><a href="/undb/actors.php">Actors</a></li>
                <li><a href="/undb/resources.php">Resources</a></li>
            </ul>
            <div class="arrow_slider_wrapper">
                <div class="arrow_slider"></div>
            </div>
            <ul class="social">
                <li><a href=""><img src="/undb/img/icon/facebook.svg" alt=""></a></li>
                <li><a href=""><img src="/undb/img/icon/twitter.svg" alt=""></a></li>
                <li><a href=""><img src="/undb/img/icon/instagram.svg" alt=""></a></li>
                <li><a href=""><img src="/undb/img/icon/youtube.svg" alt=""></a></li>
                <li><a href=""><img src="/undb/img/icon/flickr.svg" alt=""></a></li>
            </ul>
        </div>
    </div>

    <div id="secondary" class="menu">
        <div class="center">
            <!-- About sub pages -->
            <ul class="about-menu hide menu_arrow">
                <li><a href="/undb/about-unbd.php">UNDB</a></li>
                <li><a href="/undb/about-goals.php">Goals</a></li>
                <li><a href="/undb/about-biodiversity.php">Biodiversity</a></li>
                <li><a href="/undb/about-iyb2010.php">IYB2010</a></li>
                <li><a href="/undb/about-sdgs.php">SDGs</a></li>
            </ul>

            <!-- Actions sub pages -->
            <ul class="actions-menu hide menu_arrow">
                <li><a href="/undb/actions-worldwide.php">Worldwide</a></li>
                <li><a href="/undb/actions-by-countries.php">By countries</a></li>
                <li><a href="/undb/actions-by-un-organizations.php">By UN organizations</a></li>
                <li><a href="/undb/actions-calendar.php">Calendar</a></li>
                <li><a href="/undb/actions-participate.php">Participate</a></li>
            </ul>
            
            <!-- Actors sub pages -->
            <ul class="actors-menu hide menu_arrow">
                <li><a href="/undb/actors-abttf.php">ABTTF</a></li>
                <li><a href="/undb/actors-biodiversity-champions.php">Biodiversity Champions</a></li>
                <li><a href="/undb/actors-blg.php">BLG</a></li>
                <li><a href="/undb/actors-jlg.php">JLG</a></li>
                <li><a href="/undb/actors-undb-partners.php">UNDB Partners</a></li>
            </ul>         
            
            <!-- Resources sub pages -->
            <ul class="resources-menu hide menu_arrow">
                <li><a href="/undb/resources-logo.php">Logo</a></li>
                <li><a href="/undb/resources-printed-materials.php">Printed  materials</a></li>
                <li><a href="/undb/resources-multimedia.php">Multimedia</a></li>
            </ul>                           
            <div class="arrow_slider_wrapper">
                <div class="arrow_slider white"></div>
            </div>         
        </div>
    </div>
