<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Dashboard | AJAX APP</title>

    <link rel="stylesheet" href="assets/build/css/framework7.ios.css">
    <link rel="stylesheet" href="assets/build/css/framework7.ios.colors.css">
    <link rel="stylesheet" href="assets/css/framework7-icons.css">
    <link rel="stylesheet" href="assets/css/kitchen-sink.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="icon" href="assets/img/icon.png">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
  </head>
  <body>

    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-cover layout-dark">
      <div class="content-block-title">Left Panel</div>
      <div class="content-block">
        <p>This is a side panel. You can close it by clicking outsite or on this link: <a href="#" class="close-panel">close me</a></p>
      </div>
      <div class="content-block-title">MENU</div>
      <div class="list-block">
        <ul>
          <li><a href="list-view.html" class="item-link close-panel"> 
              <div class="item-content">
                <div class="item-inner"> 
                  <div class="item-title">List View</div>
                </div>
              </div></a></li>
        </ul>
      </div>
    </div>

    <div class="views">
      <div class="view view-main">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="right"></div>
            <div class="center sliding">Dashboard</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>

        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">

                          <div class="pages navbar-through">
                            <div data-page="tabbar" class="page no-toolbar toolbar-fixed">
                              <div class="toolbar tabbar">
                                <div class="toolbar-inner">

                                <a href="#tab-1" class="tab-link active">
                                  <i class="icon f7-icons inactive">home</i>
                                  <i class="icon f7-icons active">home_fill</i>
                                </a>

                                <a href="#tab-2" class="tab-link">
                                  <i class="icon f7-icons inactive">drawers<span class="badge bg-red">9</span></i>
                                  <i class="icon f7-icons active">drawers_fill<span class="badge bg-red">9</span></i>
                                </a>

                                <a href="#tab-3" class="tab-link">
                                    <i class="icon f7-icons inactive">cloud</i>
                                    <i class="icon f7-icons active">cloud_fill</i>
                                </a>

                                <a href="#tab-4" class="tab-link">
                                    <i class="icon f7-icons inactive">camera</i>
                                    <i class="icon f7-icons active">camera_fill</i>
                                </a>
                                </div>

                              </div>
                              <div class="page-content">
                                <div class="tabs">
                                  <div id="tab-1" class="tab active"> 
                                    <div class="content-block">
                                    
                                    <div class="content-block-title">Within card</div>
                                          <div class="card data-table">
                                            <table>
                                              <thead>
                                                <tr>
                                                  <th class="label-cell">Desert (100g serving)</th>
                                                  <th class="numeric-cell">Calories</th>
                                                  <th class="numeric-cell">Fat (g)</th>
                                                  <th class="numeric-cell">Carbs</th>
                                                  <th class="numeric-cell">Protein (g)</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td class="label-cell">Frozen yogurt</td>
                                                  <td class="numeric-cell">159</td>
                                                  <td class="numeric-cell">6.0</td>
                                                  <td class="numeric-cell">24</td>
                                                  <td class="numeric-cell">4.0</td>
                                                </tr>
                                                <tr>
                                                  <td class="label-cell">Ice cream sandwich</td>
                                                  <td class="numeric-cell">237</td>
                                                  <td class="numeric-cell">9.0</td>
                                                  <td class="numeric-cell">37</td>
                                                  <td class="numeric-cell">4.4</td>
                                                </tr>
                                                <tr>
                                                  <td class="label-cell">Eclair</td>
                                                  <td class="numeric-cell">262</td>
                                                  <td class="numeric-cell">16.0</td>
                                                  <td class="numeric-cell">24</td>
                                                  <td class="numeric-cell">6.0</td>
                                                </tr>
                                                <tr>
                                                  <td class="label-cell">Cupcake</td>
                                                  <td class="numeric-cell">305</td>
                                                  <td class="numeric-cell">3.7</td>
                                                  <td class="numeric-cell">67</td>
                                                  <td class="numeric-cell">4.3</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>

                                      <div class="content-block-title">Alternate header with actions</div>
                                      <div class="data-table data-table-init card">
                                        <div class="card-header">
                                          <div class="data-table-links"><a class="link">Add</a><a class="link">Remove</a></div>
                                          <div class="data-table-actions"><a class="link icon-only"><i class="icon f7-icons">sort</i></a><a class="link icon-only"><i class="icon f7-icons">more_vertical_round</i></a></div>
                                        </div>
                                        <div class="card-content">
                                          <table>
                                            <thead>
                                              <tr>
                                                <th class="checkbox-cell">
                                                  <label class="form-checkbox">
                                                    <input type="checkbox"/><i></i>
                                                  </label>
                                                </th>
                                                <th class="label-cell">Desert (100g serving)</th>
                                                <th class="numeric-cell">Calories</th>
                                                <th class="numeric-cell">Fat (g)</th>
                                                <th class="numeric-cell">Carbs</th>
                                                <th class="numeric-cell">Protein (g)</th>
                                                <th class="tablet-only"><i class="f7-icons">chat_fill</i> Comments</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="checkbox-cell">
                                                  <label class="form-checkbox">
                                                    <input type="checkbox"/><i></i>
                                                  </label>
                                                </td>
                                                <td class="label-cell">Frozen yogurt</td>
                                                <td class="numeric-cell">159</td>
                                                <td class="numeric-cell">6.0</td>
                                                <td class="numeric-cell">24</td>
                                                <td class="numeric-cell">4.0</td>
                                                <td class="tablet-only">I like frozen yogurt</td>
                                                <td class="actions-cell"><a class="link icon-only"><i class="icon f7-icons">compose</i></a><a class="link icon-only"><i class="icon f7-icons">trash</i></a></td>
                                              </tr>
                                              <tr>
                                                <td class="checkbox-cell">
                                                  <label class="form-checkbox">
                                                    <input type="checkbox"/><i></i>
                                                  </label>
                                                </td>
                                                <td class="label-cell">Ice cream sandwich</td>
                                                <td class="numeric-cell">237</td>
                                                <td class="numeric-cell">9.0</td>
                                                <td class="numeric-cell">37</td>
                                                <td class="numeric-cell">4.4</td>
                                                <td class="tablet-only">But like ice cream more</td>
                                                <td class="actions-cell"><a class="link icon-only"><i class="icon f7-icons">compose</i></a><a class="link icon-only"><i class="icon f7-icons">trash</i></a></td>
                                              </tr>
                                              <tr>
                                                <td class="checkbox-cell">
                                                  <label class="form-checkbox">
                                                    <input type="checkbox"/><i></i>
                                                  </label>
                                                </td>
                                                <td class="label-cell">Eclair</td>
                                                <td class="numeric-cell">262</td>
                                                <td class="numeric-cell">16.0</td>
                                                <td class="numeric-cell">24</td>
                                                <td class="numeric-cell">6.0</td>
                                                <td class="tablet-only">Super tasty</td>
                                                <td class="actions-cell"><a class="link icon-only"><i class="icon f7-icons">compose</i></a><a class="link icon-only"><i class="icon f7-icons">trash</i></a></td>
                                              </tr>
                                              <tr>
                                                <td class="checkbox-cell">
                                                  <label class="form-checkbox">
                                                    <input type="checkbox"/><i></i>
                                                  </label>
                                                </td>
                                                <td class="label-cell">Cupcake</td>
                                                <td class="numeric-cell">305</td>
                                                <td class="numeric-cell">3.7</td>
                                                <td class="numeric-cell">67</td>
                                                <td class="numeric-cell">4.3</td>
                                                <td class="tablet-only">Don't like it</td>
                                                <td class="actions-cell"><a class="link icon-only"><i class="icon f7-icons">compose</i></a><a class="link icon-only"><i class="icon f7-icons">trash</i></a></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="tab-2" class="tab">
                                    <div class="content-block">
                                            <div class="content-block-title">Labels and inputs</div>
                                                <form class="list-block">
                                                  <ul>
                                                    <li>
                                                      <div class="item-content">
                                                        <div class="item-inner"> 
                                                          <div class="item-title label">Name</div>
                                                          <div class="item-input">
                                                            <input type="text" placeholder="Your name"/>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="item-content">
                                                        <div class="item-inner"> 
                                                          <div class="item-title label">E-mail</div>
                                                          <div class="item-input">
                                                            <input type="email" placeholder="E-mail"/>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="item-content">
                                                        <div class="item-inner"> 
                                                          <div class="item-title label">Gender</div>
                                                          <div class="item-input">
                                                            <select>
                                                              <option>Male</option>
                                                              <option>Female</option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="item-content">
                                                        <div class="item-inner"> 
                                                          <div class="item-title label">Birth date</div>
                                                          <div class="item-input">
                                                            <input type="date" placeholder="Birth day" value="2014-04-30"/>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="item-content">
                                                        <div class="item-inner"> 
                                                          <div class="item-title label">Switch</div>
                                                          <div class="item-input">
                                                            <label class="label-switch">
                                                              <input type="checkbox">
                                                              <div class="checkbox"></div>
                                                            </label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                  </ul>
                                                </form>
                                    </div>
                                  </div>
                                  <div id="tab-3" class="tab"> 
                                    <div class="content-block">
                                      <p>This is tab 3 content</p>
                                      <p>Nulla gravida libero eget lobortis iaculis. In sed elit eu nibh adipiscing faucibus. Sed ac accumsan lacus. In ut diam quis turpis fringilla volutpat. In ultrices dignissim consequat. Cras pretium tortor et lorem condimentum posuere. Nulla facilisi. Suspendisse pretium egestas lacus ac laoreet. Mauris rhoncus quis ipsum quis tristique. Vivamus ultricies urna quis nunc egestas, in euismod turpis fringilla. Nam tellus massa, vehicula eu sapien non, dapibus tempor lorem. Fusce placerat orci arcu, eu dignissim enim porttitor vel. Nullam porttitor vel dolor sed feugiat. Suspendisse potenti. Maecenas ac mattis odio. Sed vel ultricies lacus, sed posuere libero.</p>
                                      <p>Nulla gravida libero eget lobortis iaculis. In sed elit eu nibh adipiscing faucibus. Sed ac accumsan lacus. In ut diam quis turpis fringilla volutpat. In ultrices dignissim consequat. Cras pretium tortor et lorem condimentum posuere. Nulla facilisi. Suspendisse pretium egestas lacus ac laoreet. Mauris rhoncus quis ipsum quis tristique. Vivamus ultricies urna quis nunc egestas, in euismod turpis fringilla. Nam tellus massa, vehicula eu sapien non, dapibus tempor lorem. Fusce placerat orci arcu, eu dignissim enim porttitor vel. Nullam porttitor vel dolor sed feugiat. Suspendisse potenti. Maecenas ac mattis odio. Sed vel ultricies lacus, sed posuere libero.</p>
                                      <p>Nulla gravida libero eget lobortis iaculis. In sed elit eu nibh adipiscing faucibus. Sed ac accumsan lacus. In ut diam quis turpis fringilla volutpat. In ultrices dignissim consequat. Cras pretium tortor et lorem condimentum posuere. Nulla facilisi. Suspendisse pretium egestas lacus ac laoreet. Mauris rhoncus quis ipsum quis tristique. Vivamus ultricies urna quis nunc egestas, in euismod turpis fringilla. Nam tellus massa, vehicula eu sapien non, dapibus tempor lorem. Fusce placerat orci arcu, eu dignissim enim porttitor vel. Nullam porttitor vel dolor sed feugiat. Suspendisse potenti. Maecenas ac mattis odio. Sed vel ultricies lacus, sed posuere libero.</p>
                                    </div>
                                  </div>
                                  <div id="tab-4" class="tab"> 
                                    <div class="content-block">
                                      <p>This is tab 4 content</p>
                                      <p>Fusce luctus turpis nunc, id porta orci blandit eget. Aenean sodales quam nec diam varius, in ornare ipsum condimentum. Aenean eleifend, nulla sit amet volutpat adipiscing, ligula nulla pharetra risus, vitae consequat leo tortor eu nunc. Vivamus at fringilla metus. Duis neque lectus, sagittis in volutpat a, pretium vel turpis. Nam accumsan auctor libero, quis sodales felis faucibus quis. Etiam vestibulum sed nisl vel aliquet. Aliquam pellentesque leo a lacus ultricies scelerisque. Vestibulum vestibulum fermentum tincidunt. Proin eleifend metus non quam pretium, eu vehicula ipsum egestas. Nam eget nibh enim. Etiam sem leo, pellentesque a elit vel, egestas rhoncus enim. Morbi ultricies adipiscing tortor, vitae condimentum lacus hendrerit nec. Phasellus laoreet leo quis purus elementum, ut fringilla justo eleifend. Nunc ultricies a sapien vitae auctor. Aliquam id erat elementum, laoreet est et, dapibus ligula.</p>
                                      <p>Fusce luctus turpis nunc, id porta orci blandit eget. Aenean sodales quam nec diam varius, in ornare ipsum condimentum. Aenean eleifend, nulla sit amet volutpat adipiscing, ligula nulla pharetra risus, vitae consequat leo tortor eu nunc. Vivamus at fringilla metus. Duis neque lectus, sagittis in volutpat a, pretium vel turpis. Nam accumsan auctor libero, quis sodales felis faucibus quis. Etiam vestibulum sed nisl vel aliquet. Aliquam pellentesque leo a lacus ultricies scelerisque. Vestibulum vestibulum fermentum tincidunt. Proin eleifend metus non quam pretium, eu vehicula ipsum egestas. Nam eget nibh enim. Etiam sem leo, pellentesque a elit vel, egestas rhoncus enim. Morbi ultricies adipiscing tortor, vitae condimentum lacus hendrerit nec. Phasellus laoreet leo quis purus elementum, ut fringilla justo eleifend. Nunc ultricies a sapien vitae auctor. Aliquam id erat elementum, laoreet est et, dapibus ligula.</p>
                                      <p>Fusce luctus turpis nunc, id porta orci blandit eget. Aenean sodales quam nec diam varius, in ornare ipsum condimentum. Aenean eleifend, nulla sit amet volutpat adipiscing, ligula nulla pharetra risus, vitae consequat leo tortor eu nunc. Vivamus at fringilla metus. Duis neque lectus, sagittis in volutpat a, pretium vel turpis. Nam accumsan auctor libero, quis sodales felis faucibus quis. Etiam vestibulum sed nisl vel aliquet. Aliquam pellentesque leo a lacus ultricies scelerisque. Vestibulum vestibulum fermentum tincidunt. Proin eleifend metus non quam pretium, eu vehicula ipsum egestas. Nam eget nibh enim. Etiam sem leo, pellentesque a elit vel, egestas rhoncus enim. Morbi ultricies adipiscing tortor, vitae condimentum lacus hendrerit nec. Phasellus laoreet leo quis purus elementum, ut fringilla justo eleifend. Nunc ultricies a sapien vitae auctor. Aliquam id erat elementum, laoreet est et, dapibus ligula.</p>
                                    </div>
                                  </div>
                                </div>
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