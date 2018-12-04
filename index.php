<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/css/uikit.min.css" />
        <!-- Call css dashboard -->
        <link rel="stylesheet" href="assets/css/dashboard.css"/>
        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.24/js/uikit-icons.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="uk-background-default" id="menu">
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#"><button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-reveal">Menu</button></a>
                            <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                                <div class="uk-offcanvas-bar">
                                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                                    <div class="uk-card uk-card-body">
                                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li class="uk-parent">
                                                <a href="#">Parent</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="#">Sub item</a></li>
                                                    <li><a href="#">Sub item</a></li>
                                                </ul>
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#">Parent</a>
                                                <ul class="uk-nav-sub">
                                                    <li><a href="#">Sub item</a></li>
                                                    <li><a href="#">Sub item</a></li>
                                                </ul>
                                            </li>
                                            <li class="uk-nav-header">Header</li>
                                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Menu item</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Menu item 2</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#">User <span uk-icon="icon:  triangle-down"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Config</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="uk-child-width-1-4 uk-grid-small uk-grid-match" uk-grid id="solving">
            <div class="uk-flex-center">
                <div class="uk-card uk-card-default uk-card-body">Item 1
                    <hr class="uk-nav-divider">
                    <a href="#">Some information</a>
                </div>
            </div>
            <div class="uk-flex-center">
                <div class="uk-card uk-card-default uk-card-body">Item 2
                    <hr class="uk-nav-divider">
                    <a href="#">Some information</a>
                </div>
            </div>
            <div class="uk-flex-center">
                <div class="uk-card uk-card-default uk-card-body">Item 3
                    <hr class="uk-nav-divider">
                    <a href="#">Some information</a>
                </div>
            </div>
            <div class="uk-flex-center">
                <div class="uk-card uk-card-default uk-card-body">Item 4
                    <hr class="uk-nav-divider">
                    <a href="#">Some information</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="uk-divider-icon">
    <div class="uk-child-width-expand uk-text-center" uk-grid id="bodyGrid">
        <div>
            <div class="uk-card uk-card-default uk-card-body">Auto</div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">Auto</div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">Auto</div>
        </div>
    </div>
    <hr class="uk-divider-icon">
    <div class="">
        <div class="uk-background-muted uk-padding">Copyright 2018 Lucas Aleixo</div>
    </div>
</body>
</html>
