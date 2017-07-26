<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>AJAX APP</title>

    <link rel="stylesheet" href="assets/build/css/framework7.ios.css">
    <link rel="stylesheet" href="assets/build/css/framework7.ios.colors.css">
    <link rel="stylesheet" href="assets/css/framework7-icons.css">
    <link rel="stylesheet" href="assets/css/kitchen-sink.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="icon" href="assets/img/icon.png">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
  </head>
  <body>

    <div class="views">
      <div class="view view-main">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">LOGIN</div>
          </div>
        </div>

        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">

                    <div class="pages navbar-through">
                      <div data-page="login-screen-embedded" class="page no-toolbar no-navbar no-swipeback">
                        <div class="page-content login-screen-content">
                          <div class="login-screen-title">AJAX APP</div>
                          <form method="post" action="check_login.php">
                            <div class="list-block">
                              <ul>
                                  <li class="item-content">
                                    <div class="item-inner"> 
                                      <div class="item-title label">Username</div>
                                      <div class="item-input">
                                        <input type="text" name="username" placeholder="Your username"/>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="item-content">
                                    <div class="item-inner"> 
                                      <div class="item-title label">Password</div>
                                      <div class="item-input">
                                        <input type="password" name="password" placeholder="Your password"/>
                                      </div>
                                    </div>
                                  </li>
                              </ul>
                            </div>
                            <div class="list-block">
                              <ul>
                                <li class="item-content">
                                    <div class="item-inner">
                                          <input type="submit" value="Sign In" name="submit" class="button button-big button-fill color-green">
                                    </div>
                                </li>
                              </ul>
                              <div class="list-block-label">&copy;2017-2018 itgenius.co.th</div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assets//build/js/framework7.js"></script>
    <script type="text/javascript" src="assets/js/kitchen-sink.js"></script>
  </body>
</html>