<?php

/**
 * derek.marcinyshyn.com
 *
 * @author  Derek Marcinyshyn
 * @date    2016-03-04
 */
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Derek Marcinyshyn</title>
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="app.css">
    </head>
    <body ng-app="derekApp" ng-controller="MainController" layout="column">
        <div class="ribbon" layout="row" layout-align="center start">
            <div class="header" flex="66">
                <h1 class="md-display-3">Derek Marcinyshyn</h1>
                <p>I live in Revelstoke, BC, Canada and am primarily focused on web development and system admin.</p>
            </div>
        </div>
        <div layout-align="center start" layout="row">
            <md-content layout-padding class="md-whiteframe-3dp" flex="66" flex-xs="100" flex-sm="90">
                <div class="main" layout="row" layout-xs="column" layout-sm="column">
                    <div flex="50" flex-xs="100">
                        <h2>I'm handy with...</h2>
                        <div layout="row" layout-xs="column" layout-sm="column">
                            <div flex="50" flex-xs="100">
                                <ul>
                                    <li>PHP</li>
                                    <li>HTML5</li>
                                    <li>CSS3 / Sass / Less</li>
                                    <li>Magento Enterprise</li>
                                    <li>Laravel</li>
                                    <li>JavaScript / Node.js</li>
                                    <li>AngularJS</li>
                                </ul>
                            </div>
                            <div flex="50" flex-xs="100">
                                <ul>
                                    <li>Linux / Windows / Mac</li>
                                    <li>Raspberry Pi / Netduino</li>
                                    <li>Git / GitHub / GitLab</li>
                                    <li>MySQL / Redis</li>
                                    <li>nginx / Apache</li>
                                    <li>Piwik Analytics</li>
                                    <li>WordPress</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div flex="50" flex-xs="100" flex-sm="100">
                        <md-card class="md-whiteframe-5dp">
                            <md-card-title>
                                <md-card-title-text>
                                    <span class="md-headline">Connect with me...</span>
                                </md-card-title-text>
                                <md-card-title-media>
                                    <div class="md-media-sm">
                                        <img src="https://2.gravatar.com/avatar/2ced28e0e0cdc8fcf40ef6ff724a0210?s=96&d=mm" />
                                    </div>
                                </md-card-title-media>
                            </md-card-title>
                            <md-card-content layout="row">
                                <ul>
                                    <li>
                                        <a href="https://github.com/DerekMarcinyshyn" target="_blank">
                                            <i class="fa fa-github-square"></i>GitHub
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/DMarcinyshyn" target="_blank">
                                            <i class="fa fa-twitter-square"></i>Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/u/0/+DerekMarcinyshyn" target="_blank">
                                            <i class="fa fa-google-plus-square"></i>Google+
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/derekmarcinyshyn" target="_blank">
                                            <i class="fa fa-linkedin-square"></i>LinkedIn
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:&#100;&#101;&#114;&#101;&#107;&#064;&#109;&#097;&#114;&#099;&#105;&#110;&#121;&#115;&#104;&#121;&#110;&#046;&#099;&#111;&#109;" target="_blank">
                                            <i class="fa fa-envelope-square"></i>
                                            &#100;&#101;&#114;&#101;&#107;&#064;&#109;&#097;&#114;&#099;&#105;&#110;&#121;&#115;&#104;&#121;&#110;&#046;&#099;&#111;&#109;
                                        </a>
                                    </li>
                                </ul>
                            </md-card-content>
                        </md-card>
                    </div>
                </div>
                <div layout="row" layout-xs="column" layout-sm="column">
                    <div flex="50" flex-xs="100">
                        <h2>Tools of the trade...</h2>
                        <div layout="row" layout-xs="column" layout-sm="column">
                            <div flex="50" flex-xs="100">
                                <ul>
                                    <li><a href="https://www.jetbrains.com/phpstorm/" target="_blank">PhpStorm</a></li>
                                    <li><a href="https://www.sublimetext.com/" target="_blank">Sublime</a></li>
                                    <li><a href="http://gulpjs.com/" target="_blank">gulp</a></li>
                                    <li><a href="https://laravel.com/docs/master/envoy" target="_blank">Envoy Task Runner</a></li>
                                    <li><a href="https://filezilla-project.org/" target="_blank">Filezilla</a></li>
                                    <li><a href="https://www.mysql.com/products/workbench/" target="_blank">MySql Workbench</a></li>
                                </ul>
                            </div>
                            <div flex="50" flex-xs="100">
                                <ul>
                                    <li><a href="http://www.adobe.com/ca/creativecloud.html" target="_blank">Adobe Creative Suite</a></li>
                                    <li><a href="http://cpanel.com/" target="_blank">WHM / cPanel</a></li>
                                    <li><a href="http://plesk.com/" target="_blank">Plesk</a></li>
                                    <li><a href="http://bower.io/" target="_blank">bower</a></li>
                                    <li><a href="https://www.npmjs.com/" target="_blank">npm</a></li>
                                    <li><a href="https://getcomposer.org/" target="_blank">Composer</a></li>
                                    <li><a href="https://packagist.org/" target="_blank">Packagist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div layout="row" class="filler"></div>
            </md-content>
        </div>
        <script src="app.js"></script>
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>