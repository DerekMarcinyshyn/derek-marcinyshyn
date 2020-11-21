<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Derek Marcinyshyn</title>
    <meta name="description" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST'] ?>/app.css">
</head>
<body ng-app="derekApp" ng-controller="MainController" layout="column">
<header class="ribbon" layout="row" layout-align="center start">
    <div class="header" flex="66">
        <h1 class="md-display-3">Derek Marcinyshyn</h1>
        <p>Senior Software Engineer living in Revelstoke.</p>
    </div>
</header>
<div layout-align="center start" layout="row">
    <md-content layout-padding class="md-whiteframe-3dp" flex="66" flex-xs="100" flex-sm="90">
        <main class="main" layout="row" layout-xs="column" layout-sm="column" layout-fill>
            <section flex="50" flex-xs="100">
                <h2>I'm handy with...</h2>
                <article layout="row" layout-xs="column" layout-sm="column">
                    <ul flex="50" flex-xs="100">
                        <li>Java</li>
                        <li>Flutter / Dart</li>
                        <li>PHP</li>
                        <li>JavaScript / Node.js</li>
                        <li>GWT</li>
                        <li>Laravel</li>
                    </ul>
                    <ul flex="50" flex-xs="100">
                        <li>Linux / Mac</li>
                        <li>Raspberry Pi / Netduino / Arduino</li>
                        <li>Git / GitHub / GitLab</li>
                        <li>MySQL / Redis</li>
                        <li>nginx / Apache</li>
                        <li>Kali Linux / Web security</li>
                    </ul>
                </article>
            </section>
            <aside flex="50" flex-xs="100" flex-sm="100" layout-fill>
                <md-card class="md-whiteframe-5dp">
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Connect with me...</span>
                        </md-card-title-text>
                        <md-card-title-media>
                            <div class="md-media-sm">
                                <img src="https://2.gravatar.com/avatar/2ced28e0e0cdc8fcf40ef6ff724a0210?s=96&d=mm"
                                     alt="Derek" class="md-card-image"/>
                            </div>
                        </md-card-title-media>
                    </md-card-title>
                    <md-card-content layout="row">
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/derekmarcinyshyn" target="_blank">
                                    <i class="fa fa-linkedin-square"></i>LinkedIn
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/DerekMarcinyshyn" target="_blank">
                                    <i class="fa fa-github-square"></i>GitHub
                                </a>
                            </li>
                            <li>
                                <a href="mailto:&#100;&#101;&#114;&#101;&#107;&#064;&#109;&#097;&#114;&#099;&#105;&#110;&#121;&#115;&#104;&#121;&#110;&#046;&#099;&#111;&#109;"
                                   target="_blank">
                                    <i class="fa fa-envelope-square"></i>
                                    &#100;&#101;&#114;&#101;&#107;&#064;&#109;&#097;&#114;&#099;&#105;&#110;&#121;&#115;&#104;&#121;&#110;&#046;&#099;&#111;&#109;
                                </a>
                            </li>
                        </ul>
                    </md-card-content>
                </md-card>
            </aside>
        </main>

        <section layout="column" layout-fill>
            <article flex="100">
                <h2>Work Experience...</h2>
                <h3 class="no-margin-padding">
                    <a href="https://cronometer.com" target="_blank">Cronometer Software</a>
                </h3>
                <p class="job-years">2017 - present</p>
                <p class="job-description">Java - GWT - Flutter</p>

                <h3 class="no-margin-padding">
                    <a href="https://sourceboards.com" target="_blank">The Source Snowboards and Skateboards</a>
                </h3>
                <p class="job-years">2009 - 2017</p>
                <p class="job-description">Magento Enterprise - Laravel - DevOps</p>

                <h3 class="no-margin-padding">
                    <a href="https://cmhheli.com" target="_blank">Canadian Mountain Holidays</a>
                </h3>
                <p class="job-years">1999 - 2008</p>
                <p class="job-description">Heli Ski Guide</p>

                <h3 class="no-margin-padding">
                    <a href="https://www.selkirkexperience.com/" target="_blank">Selkirk Mountain Experience</a>
                </h3>
                <p class="job-years">1996 - 2000</p>
                <p class="job-description">Ski Mountaineering Guide</p>

                <h3 class="no-margin-padding">
                    <a href="https://umanitoba.ca/" target="_blank">University of Manitoba</a>
                </h3>
                <p class="job-years">1987 - 1990</p>
                <p class="job-description">Student</p>
            </article>
        </section>

        <section layout="column" layout-fill>
            <article flex="100">
                <h2>Background...</h2>
                <p>Life has been a great ride so far. I spent my youth appreciating hard work on my grandparents' tree
                    nursery in rural Manitoba. After studying Computer Science at University of Manitoba, I decided to
                    try out the ski bum lifestyle in Banff and Whistler.</p>
                <p>For a number of years, I skied in the winter and river raft guided in the summers.</p>
                <p>The ski bumming lead to becoming a certified ACMG ski guide and moving to Revelstoke. After
                    15 years of ski guiding and having children, I circled back to programming full-time.</p>
                <p>I have worked on many projects over the years, ranging from business websites to custom digital
                    signage to large ecommerce sites to custom application development.</p>
                <p>Our family enjoys skiing, sailing, hiking, and climbing in and around British Columbia.</p>
            </article>
        </section>
        <section layout="row" class="filler"></section>
    </md-content>
</div>
<script src="//<?php echo $_SERVER['HTTP_HOST'] ?>/app.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-74761685-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>