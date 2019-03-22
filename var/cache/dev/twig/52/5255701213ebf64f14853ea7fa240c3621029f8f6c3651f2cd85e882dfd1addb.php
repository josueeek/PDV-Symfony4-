<?php

/* assets/light/css/light-bootstrap-dashboard.css */
class __TwigTemplate_b18e380bdbb6e5cc997e1e90d3e74723594bdb9916dfc7003d30788a3ca74835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9147364bf264c731913f68a8b72ef7cbd549647d261374f8391279820c65dfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9147364bf264c731913f68a8b72ef7cbd549647d261374f8391279820c65dfe3->enter($__internal_9147364bf264c731913f68a8b72ef7cbd549647d261374f8391279820c65dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/light/css/light-bootstrap-dashboard.css"));

        // line 1
        echo "/*!

 =========================================================
 * Light Bootstrap Dashboard - v1.4.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/light-bootstrap-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
/*      light colors         */
@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

@-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes spin {
    from {
        -moz-transform: rotate(0deg);
    }
    to {
        -moz-transform: rotate(360deg);
    }
}

@-ms-keyframes spin {
    from {
        -ms-transform: rotate(0deg);
    }
    to {
        -ms-transform: rotate(360deg);
    }
}

/*           Font Smoothing      */
body,
h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6,
p,
.navbar,
.brand,
.btn-simple,
.alert,
a,
.td-name,
td,
button.close {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: \"Roboto\",\"Helvetica Neue\",Arial,sans-serif;
    font-weight: 400;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    font-weight: 300;
    margin: 30px 0 15px;
}

h1, .h1 {
    font-size: 52px;
}

h2, .h2 {
    font-size: 36px;
}

h3, .h3 {
    font-size: 28px;
    margin: 20px 0 10px;
}

h4, .h4 {
    font-size: 22px;
    line-height: 30px;
}

h5, .h5 {
    font-size: 16px;
    margin-bottom: 15px;
}

h6, .h6 {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}

p {
    font-size: 16px;
    line-height: 1.5;
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small {
    color: #9A9A9A;
    font-weight: 300;
    line-height: 1.5;
}

h1 small, h2 small, h3 small, h1 .small, h2 .small, h3 .small {
    font-size: 60%;
}

h1 .subtitle {
    display: block;
    margin: 0 0 30px;
}

.text-muted {
    color: #9A9A9A;
}

.text-primary, .text-primary:hover {
    color: #1D62F0 !important;
}

.text-info, .text-info:hover {
    color: #1DC7EA !important;
}

.text-success, .text-success:hover {
    color: #87CB16 !important;
}

.text-warning, .text-warning:hover {
    color: #FF9500 !important;
}

.text-danger, .text-danger:hover {
    color: #FF4A55 !important;
}

/*     General overwrite     */
body,
.wrapper {
    min-height: 100vh;
    position: relative;
}

body {
    background: rgba(203, 203, 210, 0.15);
}

a {
    color: #1DC7EA;
}

a:hover, a:focus {
    color: #42d0ed;
    text-decoration: none;
}

a:focus, a:active,
button::-moz-focus-inner,
input::-moz-focus-inner,
input[type=\"reset\"]::-moz-focus-inner,
input[type=\"button\"]::-moz-focus-inner,
input[type=\"submit\"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type=\"file\"] > input[type=\"button\"]::-moz-focus-inner {
    outline: 0;
}

.ui-slider-handle:focus,
.navbar-toggle,
input:focus {
    outline: 0 !important;
}

/*           Animations              */
.form-control,
.input-group-addon,
.tagsinput,
.navbar,
.navbar .alert {
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
}

.sidebar .nav a,
.table > tbody > tr .td-actions .btn {
    -webkit-transition: all 150ms ease-in;
    -moz-transition: all 150ms ease-in;
    -o-transition: all 150ms ease-in;
    -ms-transition: all 150ms ease-in;
    transition: all 150ms ease-in;
}

.btn {
    -webkit-transition: all 100ms ease-in;
    -moz-transition: all 100ms ease-in;
    -o-transition: all 100ms ease-in;
    -ms-transition: all 100ms ease-in;
    transition: all 100ms ease-in;
}

.fa {
    width: 18px;
    text-align: center;
}

.margin-top {
    margin-top: 50px;
}

.wrapper {
    position: relative;
    top: 0;
    height: 100vh;
}

.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    right: auto;
    left: 0;
    width: 260px;
    display: block;
    z-index: 1;
    color: #fff;
    font-weight: 200;
    background-size: cover;
    background-position: center center;
}

.sidebar .sidebar-wrapper {
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
    width: 260px;
    z-index: 4;
    padding-bottom: 100px;
}

.sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center center;
}

.sidebar .logo {
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .logo p {
    float: left;
    font-size: 20px;
    margin: 10px 10px;
    color: #FFFFFF;
    line-height: 20px;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 5px 0px;
    display: block;
    font-size: 18px;
    color: #FFFFFF;
    text-align: center;
    font-weight: 400;
    line-height: 30px;
}

.sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden;
}

.sidebar .logo-tim img {
    width: 60px;
    height: 60px;
}

.sidebar .nav {
    margin-top: 20px;
    float: none;
}

.sidebar .nav .open > a,
.sidebar .nav li.dropdown .dropdown-menu li:hover > a,
.sidebar .nav li:hover > a {
    background-color: rgba(255, 255, 255, 0.13);
    opacity: 1;
}

.sidebar .nav li > a {
    color: #FFFFFF;
    margin: 5px 15px;
    opacity: .86;
    border-radius: 4px;
    display: block;
}

.sidebar .nav li.active > a {
    color: #FFFFFF;
    opacity: 1;
    background: rgba(255, 255, 255, 0.23);
}

.sidebar .nav li.separator {
    margin: 15px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .nav li.separator + li {
    margin-top: 31px;
}

.sidebar .nav p {
    margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    margin-left: 45px;
}

.sidebar .nav i {
    font-size: 28px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 30px;
    text-align: center;
}

.sidebar .nav .caret {
    margin-top: 13px;
    position: absolute;
    right: 30px;
}

.sidebar .logo {
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .logo p {
    float: left;
    font-size: 20px;
    margin: 10px 10px;
    color: #FFFFFF;
    line-height: 20px;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 5px 0px;
    display: block;
    font-size: 18px;
    color: #FFFFFF;
    text-align: center;
    font-weight: 400;
    line-height: 30px;
}

.sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden;
}

.sidebar .logo-tim img {
    width: 60px;
    height: 60px;
}

.sidebar:after, .sidebar:before {
    display: block;
    content: \"\";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2;
}

.sidebar:before {
    opacity: .33;
    background: #000000;
}

.sidebar:after {
    background: #787878;
    background: -moz-linear-gradient(top, #787878 0%, #343434 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #787878), color-stop(100%, #343434));
    background: -webkit-linear-gradient(top, #787878 0%, #343434 100%);
    background: -o-linear-gradient(top, #787878 0%, #343434 100%);
    background: -ms-linear-gradient(top, #787878 0%, #343434 100%);
    background: linear-gradient(to bottom, #787878 0%, #343434 100%);
    background-size: 150% 150%;
    z-index: 3;
    opacity: 1;
}

.sidebar[data-image]:after, .sidebar.has-image:after {
    opacity: .77;
}

.sidebar[data-color=\"blue\"]:after {
    background: #1F77D0;
    background: -moz-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1F77D0), color-stop(100%, #533ce1));
    background: -webkit-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -o-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -ms-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: linear-gradient(to bottom, #1F77D0 0%, #533ce1 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"azure\"]:after {
    background: #1DC7EA;
    background: -moz-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1DC7EA), color-stop(100%, #4091ff));
    background: -webkit-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -o-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -ms-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: linear-gradient(to bottom, #1DC7EA 0%, #4091ff 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"green\"]:after {
    background: #87CB16;
    background: -moz-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #87CB16), color-stop(100%, #6dc030));
    background: -webkit-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -o-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -ms-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: linear-gradient(to bottom, #87CB16 0%, #6dc030 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"orange\"]:after {
    background: #FFA534;
    background: -moz-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FFA534), color-stop(100%, #ff5221));
    background: -webkit-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -o-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -ms-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: linear-gradient(to bottom, #FFA534 0%, #ff5221 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"red\"]:after {
    background: #FB404B;
    background: -moz-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FB404B), color-stop(100%, #bb0502));
    background: -webkit-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -o-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -ms-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: linear-gradient(to bottom, #FB404B 0%, #bb0502 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"purple\"]:after {
    background: #9368E9;
    background: -moz-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9368E9), color-stop(100%, #943bea));
    background: -webkit-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -o-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -ms-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: linear-gradient(to bottom, #9368E9 0%, #943bea 100%);
    background-size: 150% 150%;
}

.main-panel {
    position: relative;
    z-index: 2;
    float: right;
    width: calc(100% - 260px);
}

.main-panel > .content {
    padding: 30px 15px;
    min-height: calc(100% - 123px);
}

.main-panel > .footer {
    border-top: 1px solid #e7e7e7;
}

.main-panel .navbar {
    margin-bottom: 0;
}

.sidebar,
.main-panel {
    max-height: 100%;
    height: 100%;
    -webkit-transition-property: top,bottom;
    transition-property: top,bottom;
    -webkit-transition-duration: .2s,.2s;
    transition-duration: .2s,.2s;
    -webkit-transition-timing-function: linear,linear;
    transition-timing-function: linear,linear;
    -webkit-overflow-scrolling: touch;
}

.btn {
    border-width: 2px;
    background-color: transparent;
    font-weight: 400;
    opacity: 0.8;
    filter: alpha(opacity=80);
    padding: 8px 16px;
    border-color: #888888;
    color: #888888;
}

.btn:hover, .btn:focus, .btn:active, .btn.active,
.open > .btn.dropdown-toggle {
    background-color: transparent;
    color: #777777;
    border-color: #777777;
}

.btn.disabled, .btn.disabled:hover, .btn.disabled:focus, .btn.disabled.focus, .btn.disabled:active, .btn.disabled.active, .btn:disabled, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled.focus, .btn:disabled:active, .btn:disabled.active, .btn[disabled], .btn[disabled]:hover, .btn[disabled]:focus, .btn[disabled].focus, .btn[disabled]:active, .btn[disabled].active,
fieldset[disabled] .btn,
fieldset[disabled] .btn:hover,
fieldset[disabled] .btn:focus,
fieldset[disabled] .btn.focus,
fieldset[disabled] .btn:active,
fieldset[disabled] .btn.active {
    background-color: transparent;
    border-color: #888888;
}

.btn.btn-fill {
    color: #FFFFFF;
    background-color: #888888;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn.btn-fill:hover, .btn.btn-fill:focus, .btn.btn-fill:active, .btn.btn-fill.active,
.open > .btn.btn-fill.dropdown-toggle {
    background-color: #777777;
    color: #FFFFFF;
}

.btn.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn .caret {
    border-top-color: #888888;
}

.btn:hover, .btn:focus {
    opacity: 1;
    filter: alpha(opacity=100);
    outline: 0 !important;
}

.btn:active, .btn.active,
.open > .btn.dropdown-toggle {
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 !important;
}

.btn.btn-icon {
    padding: 8px;
}

.btn-primary {
    border-color: #3472F7;
    color: #3472F7;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active,
.open > .btn-primary.dropdown-toggle {
    background-color: transparent;
    color: #1D62F0;
    border-color: #1D62F0;
}

.btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary:disabled, .btn-primary:disabled:hover, .btn-primary:disabled:focus, .btn-primary:disabled.focus, .btn-primary:disabled:active, .btn-primary:disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled].active,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary.active {
    background-color: transparent;
    border-color: #3472F7;
}

.btn-primary.btn-fill {
    color: #FFFFFF;
    background-color: #3472F7;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-primary.btn-fill:hover, .btn-primary.btn-fill:focus, .btn-primary.btn-fill:active, .btn-primary.btn-fill.active,
.open > .btn-primary.btn-fill.dropdown-toggle {
    background-color: #1D62F0;
    color: #FFFFFF;
}

.btn-primary.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-primary .caret {
    border-top-color: #3472F7;
}

.btn-success {
    border-color: #87CB16;
    color: #87CB16;
}

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active,
.open > .btn-success.dropdown-toggle {
    background-color: transparent;
    color: #049F0C;
    border-color: #049F0C;
}

.btn-success.disabled, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled.active, .btn-success:disabled, .btn-success:disabled:hover, .btn-success:disabled:focus, .btn-success:disabled.focus, .btn-success:disabled:active, .btn-success:disabled.active, .btn-success[disabled], .btn-success[disabled]:hover, .btn-success[disabled]:focus, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled].active,
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success.focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
    background-color: transparent;
    border-color: #87CB16;
}

.btn-success.btn-fill {
    color: #FFFFFF;
    background-color: #87CB16;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-success.btn-fill:hover, .btn-success.btn-fill:focus, .btn-success.btn-fill:active, .btn-success.btn-fill.active,
.open > .btn-success.btn-fill.dropdown-toggle {
    background-color: #049F0C;
    color: #FFFFFF;
}

.btn-success.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-success .caret {
    border-top-color: #87CB16;
}

.btn-info {
    border-color: #1DC7EA;
    color: #1DC7EA;
}

.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active,
.open > .btn-info.dropdown-toggle {
    background-color: transparent;
    color: #42d0ed;
    border-color: #42d0ed;
}

.btn-info.disabled, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled.active, .btn-info:disabled, .btn-info:disabled:hover, .btn-info:disabled:focus, .btn-info:disabled.focus, .btn-info:disabled:active, .btn-info:disabled.active, .btn-info[disabled], .btn-info[disabled]:hover, .btn-info[disabled]:focus, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled].active,
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info.focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
    background-color: transparent;
    border-color: #1DC7EA;
}

.btn-info.btn-fill {
    color: #FFFFFF;
    background-color: #1DC7EA;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-info.btn-fill:hover, .btn-info.btn-fill:focus, .btn-info.btn-fill:active, .btn-info.btn-fill.active,
.open > .btn-info.btn-fill.dropdown-toggle {
    background-color: #42d0ed;
    color: #FFFFFF;
}

.btn-info.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-info .caret {
    border-top-color: #1DC7EA;
}

.btn-warning {
    border-color: #FF9500;
    color: #FF9500;
}

.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active,
.open > .btn-warning.dropdown-toggle {
    background-color: transparent;
    color: #ED8D00;
    border-color: #ED8D00;
}

.btn-warning.disabled, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled.active, .btn-warning:disabled, .btn-warning:disabled:hover, .btn-warning:disabled:focus, .btn-warning:disabled.focus, .btn-warning:disabled:active, .btn-warning:disabled.active, .btn-warning[disabled], .btn-warning[disabled]:hover, .btn-warning[disabled]:focus, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled].active,
fieldset[disabled] .btn-warning,
fieldset[disabled] .btn-warning:hover,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning.focus,
fieldset[disabled] .btn-warning:active,
fieldset[disabled] .btn-warning.active {
    background-color: transparent;
    border-color: #FF9500;
}

.btn-warning.btn-fill {
    color: #FFFFFF;
    background-color: #FF9500;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-warning.btn-fill:hover, .btn-warning.btn-fill:focus, .btn-warning.btn-fill:active, .btn-warning.btn-fill.active,
.open > .btn-warning.btn-fill.dropdown-toggle {
    background-color: #ED8D00;
    color: #FFFFFF;
}

.btn-warning.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-warning .caret {
    border-top-color: #FF9500;
}

.btn-danger {
    border-color: #FF4A55;
    color: #FF4A55;
}

.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active,
.open > .btn-danger.dropdown-toggle {
    background-color: transparent;
    color: #EE2D20;
    border-color: #EE2D20;
}

.btn-danger.disabled, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled.active, .btn-danger:disabled, .btn-danger:disabled:hover, .btn-danger:disabled:focus, .btn-danger:disabled.focus, .btn-danger:disabled:active, .btn-danger:disabled.active, .btn-danger[disabled], .btn-danger[disabled]:hover, .btn-danger[disabled]:focus, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled].active,
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger.focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
    background-color: transparent;
    border-color: #FF4A55;
}

.btn-danger.btn-fill {
    color: #FFFFFF;
    background-color: #FF4A55;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-danger.btn-fill:hover, .btn-danger.btn-fill:focus, .btn-danger.btn-fill:active, .btn-danger.btn-fill.active,
.open > .btn-danger.btn-fill.dropdown-toggle {
    background-color: #EE2D20;
    color: #FFFFFF;
}

.btn-danger.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-danger .caret {
    border-top-color: #FF4A55;
}

.btn-neutral {
    border-color: #FFFFFF;
    color: #FFFFFF;
}

.btn-neutral:hover, .btn-neutral:focus, .btn-neutral:active, .btn-neutral.active,
.open > .btn-neutral.dropdown-toggle {
    background-color: transparent;
    color: #FFFFFF;
    border-color: #FFFFFF;
}

.btn-neutral.disabled, .btn-neutral.disabled:hover, .btn-neutral.disabled:focus, .btn-neutral.disabled.focus, .btn-neutral.disabled:active, .btn-neutral.disabled.active, .btn-neutral:disabled, .btn-neutral:disabled:hover, .btn-neutral:disabled:focus, .btn-neutral:disabled.focus, .btn-neutral:disabled:active, .btn-neutral:disabled.active, .btn-neutral[disabled], .btn-neutral[disabled]:hover, .btn-neutral[disabled]:focus, .btn-neutral[disabled].focus, .btn-neutral[disabled]:active, .btn-neutral[disabled].active,
fieldset[disabled] .btn-neutral,
fieldset[disabled] .btn-neutral:hover,
fieldset[disabled] .btn-neutral:focus,
fieldset[disabled] .btn-neutral.focus,
fieldset[disabled] .btn-neutral:active,
fieldset[disabled] .btn-neutral.active {
    background-color: transparent;
    border-color: #FFFFFF;
}

.btn-neutral.btn-fill {
    color: #FFFFFF;
    background-color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-neutral.btn-fill:hover, .btn-neutral.btn-fill:focus, .btn-neutral.btn-fill:active, .btn-neutral.btn-fill.active,
.open > .btn-neutral.btn-fill.dropdown-toggle {
    background-color: #FFFFFF;
    color: #FFFFFF;
}

.btn-neutral.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-neutral .caret {
    border-top-color: #FFFFFF;
}

.btn-neutral:active, .btn-neutral.active,
.open > .btn-neutral.dropdown-toggle {
    background-color: #FFFFFF;
    color: #888888;
}

.btn-neutral.btn-fill, .btn-neutral.btn-fill:hover, .btn-neutral.btn-fill:focus {
    color: #888888;
}

.btn-neutral.btn-simple:active, .btn-neutral.btn-simple.active {
    background-color: transparent;
}

.btn:disabled, .btn[disabled], .btn.disabled {
    opacity: 0.5;
    filter: alpha(opacity=50);
}

.btn-round {
    border-width: 1px;
    border-radius: 30px !important;
    padding: 9px 18px;
}

.btn-round.btn-icon {
    padding: 9px;
}

.btn-simple {
    border: 0;
    font-size: 16px;
    padding: 8px 16px;
}

.btn-simple.btn-icon {
    padding: 8px;
}

.btn-lg {
    font-size: 18px;
    border-radius: 6px;
    padding: 14px 30px;
    font-weight: 400;
}

.btn-lg.btn-round {
    padding: 15px 30px;
}

.btn-lg.btn-simple {
    padding: 16px 30px;
}

.btn-sm {
    font-size: 12px;
    border-radius: 3px;
    padding: 5px 10px;
}

.btn-sm.btn-round {
    padding: 6px 10px;
}

.btn-sm.btn-simple {
    padding: 7px 10px;
}

.btn-xs {
    font-size: 12px;
    border-radius: 3px;
    padding: 1px 5px;
}

.btn-xs.btn-round {
    padding: 2px 5px;
}

.btn-xs.btn-simple {
    padding: 3px 5px;
}

.btn-wd {
    min-width: 140px;
}

.btn-group.select {
    width: 100%;
}

.btn-group.select .btn {
    text-align: left;
}

.btn-group.select .caret {
    position: absolute;
    top: 50%;
    margin-top: -1px;
    right: 8px;
}

.form-control::-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control:-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control::-webkit-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control:-ms-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
    border-radius: 4px;
    color: #565656;
    padding: 8px 12px;
    height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.form-control:focus {
    background-color: #FFFFFF;
    border: 1px solid #AAAAAA;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 !important;
    color: #333333;
}

.has-success .form-control,
.has-error .form-control,
.has-success .form-control:focus,
.has-error .form-control:focus {
    border-color: #E3E3E3;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.has-success .form-control {
    color: #87CB16;
}

.has-success .form-control:focus {
    border-color: #87CB16;
}

.has-error .form-control {
    color: #FF4A55;
}

.has-error .form-control:focus {
    border-color: #FF4A55;
}

.form-control + .form-control-feedback {
    border-radius: 6px;
    font-size: 14px;
    margin-top: -7px;
    position: absolute;
    right: 10px;
    top: 50%;
    vertical-align: middle;
}

.open .form-control {
    border-radius: 4px 4px 0 0;
    border-bottom-color: transparent;
}

.input-lg {
    height: 55px;
    padding: 14px 30px;
}

.has-error .form-control-feedback {
    color: #FF4A55;
}

.has-success .form-control-feedback {
    color: #87CB16;
}

.input-group-addon {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
    border-radius: 4px;
}

.has-success .input-group-addon,
.has-error .input-group-addon {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
}

.has-error .form-control:focus + .input-group-addon {
    border-color: #FF4A55;
    color: #FF4A55;
}

.has-success .form-control:focus + .input-group-addon {
    border-color: #87CB16;
    color: #87CB16;
}

.form-control:focus + .input-group-addon,
.form-control:focus ~ .input-group-addon {
    background-color: #FFFFFF;
    border-color: #9A9A9A;
}

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
    border-right: 0 none;
}

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
    border-left: 0 none;
}

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #F5F5F5;
    color: #888888;
    cursor: not-allowed;
}

.input-group-btn .btn {
    border-width: 1px;
    padding: 9px 16px;
}

.input-group-btn .btn-default:not(.btn-fill) {
    border-color: #DDDDDD;
}

.input-group-btn:last-child > .btn {
    margin-left: 0;
}

.input-group-focus .input-group-addon {
    border-color: #9A9A9A;
}

.alert {
    border: 0;
    border-radius: 0;
    color: #FFFFFF;
    padding: 10px 15px;
    font-size: 14px;
}

.container .alert {
    border-radius: 4px;
}

.navbar .alert {
    border-radius: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 85px;
    width: 100%;
    z-index: 3;
}

.navbar:not(.navbar-transparent) .alert {
    top: 70px;
}

.alert span[data-notify=\"icon\"] {
    font-size: 30px;
    display: block;
    left: 15px;
    position: absolute;
    top: 50%;
    margin-top: -15px;
}

.alert button.close {
    position: absolute;
    right: 10px;
    top: 50%;
    margin-top: -13px;
    z-index: 1033;
    background-color: #FFFFFF;
    display: block;
    border-radius: 50%;
    opacity: .4;
    line-height: 11px;
    width: 25px;
    height: 25px;
    outline: 0 !important;
    text-align: center;
    padding: 3px;
    padding-top: 1px;
    font-weight: 300;
}

.alert button.close:hover {
    opacity: .55;
}

.alert .close ~ span {
    display: block;
    max-width: 89%;
}

.alert[data-notify=\"container\"] {
    padding: 10px 10px 10px 20px;
    border-radius: 4px;
}

.alert.alert-with-icon {
    padding-left: 65px;
}

.alert-info {
    background-color: #63d8f1;
}

.alert-success {
    background-color: #a1e82c;
}

.alert-warning {
    background-color: #ffbc67;
}

.alert-danger {
    background-color: #fc727a;
}

.table .radio,
.table .checkbox {
    position: relative;
    height: 20px;
    display: block;
    width: 20px;
    padding: 0px 0px;
    margin: 0px 5px;
    text-align: center;
}

.table .radio .icons,
.table .checkbox .icons {
    left: 5px;
}

.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
    padding: 12px 8px;
    vertical-align: middle;
}

.table > thead > tr > th {
    border-bottom-width: 1px;
    font-size: 12px;
    text-transform: uppercase;
    color: #9A9A9A;
    font-weight: 400;
    padding-bottom: 5px;
}

.table .td-actions .btn {
    opacity: 0.36;
    filter: alpha(opacity=36);
}

.table .td-actions .btn.btn-xs {
    padding-left: 3px;
    padding-right: 3px;
}

.table .td-actions {
    min-width: 90px;
}

.table > tbody > tr {
    position: relative;
}

.table > tbody > tr:hover .td-actions .btn {
    opacity: 1;
    filter: alpha(opacity=100);
}

/*      Checkbox and radio         */
.checkbox,
.radio {
    margin-bottom: 12px;
}

.checkbox label,
.radio label {
    display: inline-block;
    position: relative;
    cursor: pointer;
    padding-left: 24px;
    margin-bottom: 0;
}

.checkbox label::before,
.checkbox label::after {
    font-family: 'FontAwesome';
    content: \"\\f096\";
    display: inline-block;
    position: absolute;
    width: 20px;
    height: 20px;
    left: -1px;
    cursor: pointer;
    line-height: 19px;
    font-size: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    top: 1px;
    color: #DDDDDD;
    transition: color 0.2s linear;
    padding: 1px;
}

.checkbox label::after {
    content: \"\";
    text-align: center;
    opacity: 1;
    left: 0;
    color: #DDDDDD;
}

.checkbox input[type=\"checkbox\"],
.radio input[type=\"radio\"] {
    opacity: 0;
    margin-left: 0;
}

.checkbox input[type=\"checkbox\"]:checked + label::after {
    font-family: 'FontAwesome';
    content: \"\\f046\";
}

.checkbox input[type=\"checkbox\"]:checked + label::after {
    color: #1DC7EA;
}

.checkbox input[type=\"checkbox\"]:checked + label::before {
    opacity: 0;
}

.checkbox input[type=\"checkbox\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label,
.checkbox input[type=\"checkbox\"]:disabled:checked + label::after {
    opacity: .7;
}

.checkbox input[type=\"checkbox\"]:disabled + label::before,
.checkbox input[type=\"checkbox\"]:disabled + label::after {
    cursor: not-allowed;
}

.checkbox input[type=\"checkbox\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label {
    cursor: not-allowed;
}

.checkbox.checkbox-circle label::before {
    border-radius: 50%;
}

.checkbox.checkbox-inline {
    padding-left: 0;
}

.checkbox-primary input[type=\"checkbox\"]:checked + label::before {
    background-color: #428bca;
    border-color: #428bca;
}

.checkbox-primary input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-danger input[type=\"checkbox\"]:checked + label::before {
    background-color: #d9534f;
    border-color: #d9534f;
}

.checkbox-danger input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-info input[type=\"checkbox\"]:checked + label::before {
    background-color: #5bc0de;
    border-color: #5bc0de;
}

.checkbox-info input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-warning input[type=\"checkbox\"]:checked + label::before {
    background-color: #f0ad4e;
    border-color: #f0ad4e;
}

.checkbox-warning input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-success input[type=\"checkbox\"]:checked + label::before {
    background-color: #5cb85c;
    border-color: #5cb85c;
}

.checkbox-success input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.radio label::before,
.radio label::after {
    font-family: 'FontAwesome';
    content: \"\\f10c\";
    font-size: 20px;
    height: 20px;
    width: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: inline-block;
    position: absolute;
    line-height: 19px;
    left: 0;
    top: 0;
    color: #DDDDDD;
    padding: 1px;
    transition: color 0.2s linear;
}

.radio input[type=\"radio\"]:checked + label::after {
    font-family: 'FontAwesome';
    content: \"\\f192\";
    color: #DDDDDD;
}

.radio input[type=\"radio\"]:checked + label::after {
    color: #1DC7EA;
}

.radio input[type=\"radio\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label::before,
.radio input[type=\"radio\"]:disabled + label::after {
    opacity: .5;
}

.radio.radio-inline {
    margin-top: 0;
}

/**
  * bootstrap-switch - Turn checkboxes and radio buttons into toggle switches.
  *
  * @version v3.3.4
  * @homepage https://bttstrp.github.io/bootstrap-switch
  * @author Mattia Larentis <mattia@larentis.eu> (http://larentis.eu)
  * @license Apache-2.0
  */
.bootstrap-switch {
    display: inline-block;
    direction: ltr;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid;
    border-color: #ccc;
    position: relative;
    text-align: left;
    overflow: hidden;
    line-height: 8px;
    z-index: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.bootstrap-switch .bootstrap-switch-container {
    display: inline-block;
    top: 0;
    border-radius: 4px;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-label {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    cursor: pointer;
    display: table-cell;
    vertical-align: middle;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 20px;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off {
    text-align: center;
    z-index: 1;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {
    color: #fff;
    background: #337ab7;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info {
    color: #fff;
    background: #5bc0de;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success {
    color: #fff;
    background: #5cb85c;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning {
    background: #f0ad4e;
    color: #fff;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger {
    color: #fff;
    background: #d9534f;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
    color: #000;
    background: #eeeeee;
}

.bootstrap-switch .bootstrap-switch-label {
    text-align: center;
    margin-top: -1px;
    margin-bottom: -1px;
    z-index: 100;
    color: #333;
    background: #fff;
}

.bootstrap-switch span::before {
    content: \"\\200b\";
}

.bootstrap-switch .bootstrap-switch-handle-on {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.bootstrap-switch .bootstrap-switch-handle-off {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch input[type='radio'],
.bootstrap-switch input[type='checkbox'] {
    position: absolute !important;
    top: 0;
    left: 0;
    margin: 0;
    z-index: -1;
    opacity: 0;
    filter: alpha(opacity=0);
    visibility: hidden;
}

.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
    padding: 6px 16px;
    font-size: 18px;
    line-height: 1.3333333;
}

.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-readonly,
.bootstrap-switch.bootstrap-switch-indeterminate {
    cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
    -webkit-transition: margin-left 0.5s;
    -o-transition: margin-left 0.5s;
    transition: margin-left 0.5s;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-focused {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-off .bootstrap-switch-label {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-on .bootstrap-switch-label {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.nav > li > a:hover,
.nav > li > a:focus {
    background-color: transparent;
}

.navbar {
    border: 0;
    font-size: 16px;
    border-radius: 0;
}

.navbar > .container .navbar-brand,
.navbar > .container-fluid .navbar-brand {
    margin-left: 0;
}

.navbar .navbar-brand {
    font-weight: 400;
    margin: 5px 0px;
    padding: 15px 15px;
    font-size: 20px;
}

.navbar .navbar-nav > li > a {
    padding: 10px 15px;
    margin: 10px 3px;
    position: relative;
}

.navbar .navbar-nav > li > a.btn {
    margin: 15px 3px;
    padding: 8px 16px;
}

.navbar .navbar-nav > li > a.btn-round {
    margin: 16px 3px;
}

.navbar .navbar-nav > li > a [class^=\"fa\"] {
    font-size: 19px;
    position: relative;
    line-height: 16px;
    top: 1px;
}

.navbar .navbar-nav .notification {
    position: absolute;
    background-color: #FB404B;
    text-align: center;
    border-radius: 10px;
    min-width: 18px;
    padding: 0 5px;
    height: 18px;
    font-size: 12px;
    color: #FFFFFF;
    font-weight: bold;
    line-height: 18px;
    top: 0px;
    left: 7px;
}

.navbar .btn {
    margin: 15px 3px;
    font-size: 14px;
}

.navbar .btn-simple {
    font-size: 16px;
}

.navbar.fixed {
    width: calc(100% - \$sidebar-width);
    right: 0;
    left: auto;
    border-radius: 0;
}

.navbar-nav > li > .dropdown-menu {
    border-radius: 10px;
    margin-top: -5px;
}

.navbar-transparent .navbar-brand, [class*=\"navbar-ct\"] .navbar-brand {
    color: #FFFFFF;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.navbar-transparent .navbar-brand:focus, .navbar-transparent .navbar-brand:hover, [class*=\"navbar-ct\"] .navbar-brand:focus, [class*=\"navbar-ct\"] .navbar-brand:hover {
    background-color: transparent;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .navbar-nav > li > a:not(.btn), [class*=\"navbar-ct\"] .navbar-nav > li > a:not(.btn) {
    color: #FFFFFF;
    border-color: #FFFFFF;
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.navbar-transparent .navbar-nav > .active > a:not(.btn),
.navbar-transparent .navbar-nav > .active > a:hover:not(.btn),
.navbar-transparent .navbar-nav > .active > a:focus:not(.btn),
.navbar-transparent .navbar-nav > li > a:hover:not(.btn),
.navbar-transparent .navbar-nav > li > a:focus:not(.btn), [class*=\"navbar-ct\"] .navbar-nav > .active > a:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > .active > a:hover:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > .active > a:focus:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > li > a:hover:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > li > a:focus:not(.btn) {
    background-color: transparent;
    border-radius: 3px;
    color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .navbar-nav .nav > li > a.btn:hover, [class*=\"navbar-ct\"] .navbar-nav .nav > li > a.btn:hover {
    background-color: transparent;
}

.navbar-transparent .navbar-nav > .dropdown > a .caret,
.navbar-transparent .navbar-nav > .dropdown > a:hover .caret,
.navbar-transparent .navbar-nav > .dropdown > a:focus .caret, [class*=\"navbar-ct\"] .navbar-nav > .dropdown > a .caret,
[class*=\"navbar-ct\"] .navbar-nav > .dropdown > a:hover .caret,
[class*=\"navbar-ct\"] .navbar-nav > .dropdown > a:focus .caret {
    border-bottom-color: #FFFFFF;
    border-top-color: #FFFFFF;
}

.navbar-transparent .navbar-nav > .open > a,
.navbar-transparent .navbar-nav > .open > a:hover,
.navbar-transparent .navbar-nav > .open > a:focus, [class*=\"navbar-ct\"] .navbar-nav > .open > a,
[class*=\"navbar-ct\"] .navbar-nav > .open > a:hover,
[class*=\"navbar-ct\"] .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .btn-default, [class*=\"navbar-ct\"] .btn-default {
    color: #FFFFFF;
    border-color: #FFFFFF;
}

.navbar-transparent .btn-default.btn-fill, [class*=\"navbar-ct\"] .btn-default.btn-fill {
    color: #9A9A9A;
    background-color: #FFFFFF;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.navbar-transparent .btn-default.btn-fill:hover,
.navbar-transparent .btn-default.btn-fill:focus,
.navbar-transparent .btn-default.btn-fill:active,
.navbar-transparent .btn-default.btn-fill.active,
.navbar-transparent .open .dropdown-toggle.btn-fill.btn-default, [class*=\"navbar-ct\"] .btn-default.btn-fill:hover,
[class*=\"navbar-ct\"] .btn-default.btn-fill:focus,
[class*=\"navbar-ct\"] .btn-default.btn-fill:active,
[class*=\"navbar-ct\"] .btn-default.btn-fill.active,
[class*=\"navbar-ct\"] .open .dropdown-toggle.btn-fill.btn-default {
    border-color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .dropdown-menu .divider {
    background-color: rgba(255, 255, 255, 0.2);
}

.nav-open .nav .caret {
    border-bottom-color: #FFFFFF;
    border-top-color: #FFFFFF;
}

.navbar-default {
    background-color: rgba(255, 255, 255, 0.96);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.navbar-default .navbar-nav > li > a:not(.btn) {
    color: #9A9A9A;
}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:not(.btn):hover,
.navbar-default .navbar-nav > .active > a:not(.btn):focus,
.navbar-default .navbar-nav > li > a:not(.btn):hover,
.navbar-default .navbar-nav > li > a:not(.btn):focus {
    background-color: transparent;
    border-radius: 3px;
    color: #1DC7EA;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-default .navbar-nav > .dropdown > a:hover .caret,
.navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-bottom-color: #1DC7EA;
    border-top-color: #1DC7EA;
}

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: #1DC7EA;
}

.navbar-default .navbar-nav .navbar-toggle:hover, .navbar-default .navbar-nav .navbar-toggle:focus {
    background-color: transparent;
}

.navbar-default:not(.navbar-transparent) .btn-default:hover {
    color: #1DC7EA;
    border-color: #1DC7EA;
}

.navbar-default:not(.navbar-transparent) .btn-neutral,
.navbar-default:not(.navbar-transparent) .btn-neutral:hover,
.navbar-default:not(.navbar-transparent) .btn-neutral:active {
    color: #9A9A9A;
}

/*      Navbar with icons            */
.navbar-icons.navbar .navbar-brand {
    margin-top: 12px;
    margin-bottom: 12px;
}

.navbar-icons .navbar-nav > li > a {
    text-align: center;
    padding: 6px 15px;
    margin: 6px 3px;
}

.navbar-icons .navbar-nav [class^=\"pe\"] {
    font-size: 30px;
    position: relative;
}

.navbar-icons .navbar-nav p {
    margin: 3px 0 0;
}

.navbar-form {
    -webkit-box-shadow: none;
    box-shadow: none;
}

.navbar-form .form-control {
    border-radius: 0;
    border: 0;
    padding: 0;
    background-color: transparent;
    height: 22px;
    font-size: 16px;
    line-height: 1.5;
    color: #E3E3E3;
}

.navbar-transparent .navbar-form .form-control,
[class*=\"navbar-ct\"] .navbar-form .form-control {
    color: #FFFFFF;
    border: 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.6);
}

.navbar-ct-blue {
    background-color: #4091e2;
}

.navbar-ct-azure {
    background-color: #63d8f1;
}

.navbar-ct-green {
    background-color: #a1e82c;
}

.navbar-ct-orange {
    background-color: #ffbc67;
}

.navbar-ct-red {
    background-color: #fc727a;
}

.navbar-transparent {
    padding-top: 15px;
    background-color: transparent;
    border-bottom: 1px solid transparent;
}

.navbar-toggle {
    margin-top: 19px;
    margin-bottom: 19px;
    border: 0;
}

.navbar-toggle .icon-bar {
    background-color: #FFFFFF;
}

.navbar-toggle .navbar-collapse,
.navbar-toggle .navbar-form {
    border-color: transparent;
}

.navbar-toggle.navbar-default .navbar-toggle:hover,
.navbar-toggle.navbar-default .navbar-toggle:focus {
    background-color: transparent;
}

.footer {
    background-color: #FFFFFF;
    line-height: 20px;
}

.footer nav > ul {
    list-style: none;
    margin: 0;
    padding: 0;
    font-weight: normal;
}

.footer nav > ul a:not(.btn) {
    color: #9A9A9A;
    display: block;
    margin-bottom: 3px;
}

.footer nav > ul a:not(.btn):hover, .footer nav > ul a:not(.btn):focus {
    color: #777777;
}

.footer .social-area {
    padding: 15px 0;
}

.footer .social-area h5 {
    padding-bottom: 15px;
}

.footer .social-area > a:not(.btn) {
    color: #9A9A9A;
    display: inline-block;
    vertical-align: top;
    padding: 10px 5px;
    font-size: 20px;
    font-weight: normal;
    line-height: 20px;
    text-align: center;
}

.footer .social-area > a:not(.btn):hover, .footer .social-area > a:not(.btn):focus {
    color: #777777;
}

.footer .copyright {
    color: #777777;
    padding: 10px 15px;
    margin: 10px 3px;
    line-height: 20px;
    font-size: 14px;
}

.footer hr {
    border-color: #DDDDDD;
}

.footer .title {
    color: #777777;
}

.footer-default {
    background-color: #F5F5F5;
}

.footer:not(.footer-big) nav > ul {
    font-size: 14px;
}

.footer:not(.footer-big) nav > ul li {
    margin-left: 20px;
    float: left;
}

.footer:not(.footer-big) nav > ul a {
    padding: 10px 0px;
    margin: 10px 10px 10px 0px;
}

.dropdown-menu {
    visibility: hidden;
    margin: 0;
    padding: 0;
    border-radius: 10px;
    display: block;
    z-index: 9000;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.125);
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.125);
}

.open .dropdown-menu {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
}

.select .dropdown-menu {
    border-radius: 0 0 10px 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transform-origin: 50% -40px;
    -moz-transform-origin: 50% -40px;
    -o-transform-origin: 50% -40px;
    -ms-transform-origin: 50% -40px;
    transform-origin: 50% -40px;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 150ms linear;
    -moz-transition: all 150ms linear;
    -o-transition: all 150ms linear;
    -ms-transition: all 150ms linear;
    transition: all 150ms linear;
    margin-top: -20px;
}

.select.open .dropdown-menu {
    margin-top: -1px;
}

.dropdown-menu > li > a {
    padding: 8px 16px;
    color: #333333;
}

.dropdown-menu > li > a img {
    margin-top: -3px;
}

.dropdown-menu > li > a:focus {
    outline: 0 !important;
}

.btn-group.select .dropdown-menu {
    min-width: 100%;
}

.dropdown-menu > li:first-child > a {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.dropdown-menu > li:last-child > a {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.select .dropdown-menu > li:first-child > a {
    border-radius: 0;
    border-bottom: 0 none;
}

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
    background-color: #F5F5F5;
    color: #333333;
    opacity: 1;
    text-decoration: none;
}

.dropdown-menu.dropdown-blue > li > a:hover,
.dropdown-menu.dropdown-blue > li > a:focus {
    background-color: rgba(52, 114, 247, 0.2);
}

.dropdown-menu.dropdown-azure > li > a:hover,
.dropdown-menu.dropdown-azure > li > a:focus {
    background-color: rgba(29, 199, 234, 0.2);
}

.dropdown-menu.ct-green > li > a:hover,
.dropdown-menu.ct-green > li > a:focus {
    background-color: rgba(135, 203, 22, 0.2);
}

.dropdown-menu.dropdown-orange > li > a:hover,
.dropdown-menu.dropdown-orange > li > a:focus {
    background-color: rgba(255, 149, 0, 0.2);
}

.dropdown-menu.dropdown-red > li > a:hover,
.dropdown-menu.dropdown-red > li > a:focus {
    background-color: rgba(255, 74, 85, 0.2);
}

.dropdown-with-icons > li > a {
    padding-left: 0px;
    line-height: 28px;
}

.dropdown-with-icons i {
    text-align: center;
    line-height: 28px;
    float: left;
}

.dropdown-with-icons i[class^=\"pe-\"] {
    font-size: 24px;
    width: 46px;
}

.dropdown-with-icons i[class^=\"fa\"] {
    font-size: 14px;
    width: 38px;
}

.btn-group.select {
    overflow: hidden;
}

.btn-group.select.open {
    overflow: visible;
}

.card {
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(63, 63, 68, 0.1);
    background-color: #FFFFFF;
    margin-bottom: 30px;
}

.card .image {
    width: 100%;
    overflow: hidden;
    height: 260px;
    border-radius: 4px 4px 0 0;
    position: relative;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.card .image img {
    width: 100%;
}

.card .filter {
    position: absolute;
    z-index: 2;
    background-color: rgba(0, 0, 0, 0.68);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    opacity: 0;
    filter: alpha(opacity=0);
}

.card .filter .btn {
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.card:hover .filter {
    opacity: 1;
    filter: alpha(opacity=100);
}

.card .btn-hover {
    opacity: 0;
    filter: alpha(opacity=0);
}

.card:hover .btn-hover {
    opacity: 1;
    filter: alpha(opacity=100);
}

.card .content {
    padding: 15px 15px 10px 15px;
}

.card .header {
    padding: 15px 15px 0;
}

.card .category,
.card label {
    font-size: 14px;
    font-weight: 400;
    color: #9A9A9A;
    margin-bottom: 0px;
}

.card .category i,
.card label i {
    font-size: 16px;
}

.card label {
    font-size: 12px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.card .title {
    margin: 0;
    color: #333333;
    font-weight: 300;
}

.card .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;
}

.card .description {
    font-size: 14px;
    color: #333;
}

.card .footer {
    padding: 0;
    background-color: transparent;
    line-height: 30px;
}

.card .footer .legend {
    padding: 5px 0;
}

.card .footer hr {
    margin-top: 5px;
    margin-bottom: 5px;
}

.card .stats {
    color: #a9a9a9;
}

.card .footer div {
    display: inline-block;
}

.card .author {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.card .author i {
    font-size: 14px;
}

.card h6 {
    font-size: 12px;
    margin: 0;
}

.card.card-separator:after {
    height: 100%;
    right: -15px;
    top: 0;
    width: 1px;
    background-color: #DDDDDD;
    content: \"\";
    position: absolute;
}

.card .ct-chart {
    margin: 30px 0 30px;
    height: 245px;
}

.card .table tbody td:first-child,
.card .table thead th:first-child {
    padding-left: 15px;
}

.card .table tbody td:last-child,
.card .table thead th:last-child {
    padding-right: 15px;
}

.card .alert {
    border-radius: 4px;
    position: relative;
}

.card .alert.alert-with-icon {
    padding-left: 65px;
}

.card-user .image {
    height: 110px;
}

.card-user .image-plain {
    height: 0;
    margin-top: 110px;
}

.card-user .author {
    text-align: center;
    text-transform: none;
    margin-top: -70px;
}

.card-user .avatar {
    width: 124px;
    height: 124px;
    border: 5px solid #FFFFFF;
    position: relative;
    margin-bottom: 15px;
}

.card-user .avatar.border-gray {
    border-color: #EEEEEE;
}

.card-user .title {
    line-height: 24px;
}

.card-user .content {
    min-height: 240px;
}

.card-user .footer,
.card-price .footer {
    padding: 5px 15px 10px;
}

.card-user hr,
.card-price hr {
    margin: 5px 15px;
}

.card-plain {
    background-color: transparent;
    box-shadow: none;
    border-radius: 0;
}

.card-plain .image {
    border-radius: 4px;
}

.ct-label {
    fill: rgba(0, 0, 0, 0.4);
    color: rgba(0, 0, 0, 0.4);
    font-size: 1.3rem;
    line-height: 1;
}

.ct-chart-line .ct-label,
.ct-chart-bar .ct-label {
    display: block;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}

.ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-label.ct-vertical.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: flex-end;
    justify-content: flex-end;
    text-align: right;
    text-anchor: end;
}

.ct-label.ct-vertical.ct-end {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar .ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    text-anchor: start;
}

.ct-chart-bar .ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-start {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: flex-end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: flex-end;
    justify-content: flex-end;
    text-align: right;
    text-anchor: end;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-end {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: end;
}

.ct-grid {
    stroke: rgba(0, 0, 0, 0.2);
    stroke-width: 1px;
    stroke-dasharray: 2px;
}

.ct-point {
    stroke-width: 8px;
    stroke-linecap: round;
}

.ct-line {
    fill: none;
    stroke-width: 3px;
}

.ct-area {
    stroke: none;
    fill-opacity: 0.8;
}

.ct-bar {
    fill: none;
    stroke-width: 10px;
}

.ct-slice-donut {
    fill: none;
    stroke-width: 60px;
}

.ct-series-a .ct-point, .ct-series-a .ct-line, .ct-series-a .ct-bar, .ct-series-a .ct-slice-donut {
    stroke: #1DC7EA;
}

.ct-series-a .ct-slice-pie, .ct-series-a .ct-area {
    fill: #1DC7EA;
}

.ct-series-b .ct-point, .ct-series-b .ct-line, .ct-series-b .ct-bar, .ct-series-b .ct-slice-donut {
    stroke: #FB404B;
}

.ct-series-b .ct-slice-pie, .ct-series-b .ct-area {
    fill: #FB404B;
}

.ct-series-c .ct-point, .ct-series-c .ct-line, .ct-series-c .ct-bar, .ct-series-c .ct-slice-donut {
    stroke: #FFA534;
}

.ct-series-c .ct-slice-pie, .ct-series-c .ct-area {
    fill: #FFA534;
}

.ct-series-d .ct-point, .ct-series-d .ct-line, .ct-series-d .ct-bar, .ct-series-d .ct-slice-donut {
    stroke: #9368E9;
}

.ct-series-d .ct-slice-pie, .ct-series-d .ct-area {
    fill: #9368E9;
}

.ct-series-e .ct-point, .ct-series-e .ct-line, .ct-series-e .ct-bar, .ct-series-e .ct-slice-donut {
    stroke: #87CB16;
}

.ct-series-e .ct-slice-pie, .ct-series-e .ct-area {
    fill: #87CB16;
}

.ct-series-f .ct-point, .ct-series-f .ct-line, .ct-series-f .ct-bar, .ct-series-f .ct-slice-donut {
    stroke: #1F77D0;
}

.ct-series-f .ct-slice-pie, .ct-series-f .ct-area {
    fill: #1F77D0;
}

.ct-series-g .ct-point, .ct-series-g .ct-line, .ct-series-g .ct-bar, .ct-series-g .ct-slice-donut {
    stroke: #5e5e5e;
}

.ct-series-g .ct-slice-pie, .ct-series-g .ct-area {
    fill: #5e5e5e;
}

.ct-series-h .ct-point, .ct-series-h .ct-line, .ct-series-h .ct-bar, .ct-series-h .ct-slice-donut {
    stroke: #dd4b39;
}

.ct-series-h .ct-slice-pie, .ct-series-h .ct-area {
    fill: #dd4b39;
}

.ct-series-i .ct-point, .ct-series-i .ct-line, .ct-series-i .ct-bar, .ct-series-i .ct-slice-donut {
    stroke: #35465c;
}

.ct-series-i .ct-slice-pie, .ct-series-i .ct-area {
    fill: #35465c;
}

.ct-series-j .ct-point, .ct-series-j .ct-line, .ct-series-j .ct-bar, .ct-series-j .ct-slice-donut {
    stroke: #e52d27;
}

.ct-series-j .ct-slice-pie, .ct-series-j .ct-area {
    fill: #e52d27;
}

.ct-series-k .ct-point, .ct-series-k .ct-line, .ct-series-k .ct-bar, .ct-series-k .ct-slice-donut {
    stroke: #55acee;
}

.ct-series-k .ct-slice-pie, .ct-series-k .ct-area {
    fill: #55acee;
}

.ct-series-l .ct-point, .ct-series-l .ct-line, .ct-series-l .ct-bar, .ct-series-l .ct-slice-donut {
    stroke: #cc2127;
}

.ct-series-l .ct-slice-pie, .ct-series-l .ct-area {
    fill: #cc2127;
}

.ct-series-m .ct-point, .ct-series-m .ct-line, .ct-series-m .ct-bar, .ct-series-m .ct-slice-donut {
    stroke: #1769ff;
}

.ct-series-m .ct-slice-pie, .ct-series-m .ct-area {
    fill: #1769ff;
}

.ct-series-n .ct-point, .ct-series-n .ct-line, .ct-series-n .ct-bar, .ct-series-n .ct-slice-donut {
    stroke: #6188e2;
}

.ct-series-n .ct-slice-pie, .ct-series-n .ct-area {
    fill: #6188e2;
}

.ct-series-o .ct-point, .ct-series-o .ct-line, .ct-series-o .ct-bar, .ct-series-o .ct-slice-donut {
    stroke: #a748ca;
}

.ct-series-o .ct-slice-pie, .ct-series-o .ct-area {
    fill: #a748ca;
}

.ct-square {
    display: block;
    position: relative;
    width: 100%;
}

.ct-square:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 100%;
}

.ct-square:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-square > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-second {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-second:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 93.75%;
}

.ct-minor-second:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-second {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-second:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 88.88889%;
}

.ct-major-second:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-third {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-third:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 83.33333%;
}

.ct-minor-third:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-third {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-third:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 80%;
}

.ct-major-third:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-perfect-fourth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-perfect-fourth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 75%;
}

.ct-perfect-fourth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-perfect-fourth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-perfect-fifth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-perfect-fifth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 66.66667%;
}

.ct-perfect-fifth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-perfect-fifth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-sixth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-sixth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 62.5%;
}

.ct-minor-sixth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-golden-section {
    display: block;
    position: relative;
    width: 100%;
}

.ct-golden-section:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 61.8047%;
}

.ct-golden-section:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-golden-section > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-sixth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-sixth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 60%;
}

.ct-major-sixth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-seventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-seventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 56.25%;
}

.ct-minor-seventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-seventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-seventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 53.33333%;
}

.ct-major-seventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-octave {
    display: block;
    position: relative;
    width: 100%;
}

.ct-octave:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 50%;
}

.ct-octave:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-tenth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-tenth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 40%;
}

.ct-major-tenth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-tenth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-eleventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-eleventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 37.5%;
}

.ct-major-eleventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-eleventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-twelfth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-twelfth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 33.33333%;
}

.ct-major-twelfth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-twelfth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-double-octave {
    display: block;
    position: relative;
    width: 100%;
}

.ct-double-octave:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 25%;
}

.ct-double-octave:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-double-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

@media (min-width: 992px) {
    .navbar-form {
        margin-top: 21px;
        margin-bottom: 21px;
        padding-left: 5px;
        padding-right: 5px;
    }
    .navbar-nav > li > .dropdown-menu, .dropdown .dropdown-menu {
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -o-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -moz-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -ms-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    }
    .navbar-nav > li.open > .dropdown-menu, .dropdown.open .dropdown-menu {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 29px -50px;
        -moz-transform-origin: 29px -50px;
        -o-transform-origin: 29px -50px;
        -ms-transform-origin: 29px -50px;
        transform-origin: 29px -50px;
    }
    .sidebar .nav-mobile-menu {
        display: none;
    }
    .footer nav {
        margin-left: 15px;
    }
    .navbar-nav > li > .dropdown-menu:before {
        border-bottom: 11px solid rgba(0, 0, 0, 0.2);
        border-left: 11px solid transparent;
        border-right: 11px solid transparent;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 12px;
        top: -11px;
    }
    .navbar-nav > li > .dropdown-menu:after {
        border-bottom: 11px solid #FFFFFF;
        border-left: 11px solid transparent;
        border-right: 11px solid transparent;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 12px;
        top: -10px;
    }
    .navbar-nav.navbar-right > li > .dropdown-menu:before {
        left: auto;
        right: 12px;
    }
    .navbar-nav.navbar-right > li > .dropdown-menu:after {
        left: auto;
        right: 12px;
    }
    .footer:not(.footer-big) nav > ul li:first-child {
        margin-left: 0;
    }
    body > .navbar-collapse.collapse {
        display: none !important;
    }
    .card form [class*=\"col-\"] {
        padding: 6px;
    }
    .card form [class*=\"col-\"]:first-child {
        padding-left: 15px;
    }
    .card form [class*=\"col-\"]:last-child {
        padding-right: 15px;
    }
}

/*          Changes for small display      */
@media (max-width: 991px) {
    .main-panel {
        width: 100%;
    }
    .navbar-transparent {
        padding-top: 15px;
        background-color: rgba(0, 0, 0, 0.45);
    }
    body {
        position: relative;
    }
    .main-panel {
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        left: 0;
    }
    .navbar .container {
        left: 0;
        width: 100%;
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        position: relative;
    }
    .navbar .navbar-collapse.collapse,
    .navbar .navbar-collapse.collapse.in,
    .navbar .navbar-collapse.collapsing {
        display: none !important;
    }
    .navbar-nav > li {
        float: none;
        position: relative;
        display: block;
    }
    .navbar-collapse,
    .sidebar {
        position: fixed;
        display: block;
        top: 0;
        height: 100%;
        right: 0;
        left: auto;
        z-index: 1032;
        visibility: visible;
        background-color: #999;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        padding: 0;
        -webkit-transform: translate3d(260px, 0, 0);
        -moz-transform: translate3d(260px, 0, 0);
        -o-transform: translate3d(260px, 0, 0);
        -ms-transform: translate3d(260px, 0, 0);
        transform: translate3d(260px, 0, 0);
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }
    .navbar-collapse > ul,
    .sidebar > ul {
        position: relative;
        z-index: 4;
        overflow-y: scroll;
        height: calc(100vh - 61px);
        width: 100%;
    }
    .navbar-collapse::before,
    .sidebar::before {
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background-color: #282828;
        display: block;
        content: \"\";
        z-index: 1;
    }
    .navbar-collapse .logo,
    .sidebar .logo {
        position: relative;
        z-index: 4;
    }
    .navbar-collapse .nav li > a,
    .sidebar .nav li > a {
        padding: 10px 15px;
    }
    .navbar-collapse .nav,
    .sidebar .nav {
        margin-top: 10px;
    }
    .nav-open .navbar-collapse,
    .nav-open .sidebar {
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
    }
    .nav-open .navbar .container {
        left: -250px;
    }
    .nav-open .main-panel {
        left: 0;
        -webkit-transform: translate3d(-260px, 0, 0);
        -moz-transform: translate3d(-260px, 0, 0);
        -o-transform: translate3d(-260px, 0, 0);
        -ms-transform: translate3d(-260px, 0, 0);
        transform: translate3d(-260px, 0, 0);
    }
    .nav-open .menu-on-left .sidebar {
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
    }
    .nav-open .menu-on-left .main-panel {
        left: 0;
        -webkit-transform: translate3d(260px, 0, 0);
        -moz-transform: translate3d(260px, 0, 0);
        -o-transform: translate3d(260px, 0, 0);
        -ms-transform: translate3d(260px, 0, 0);
        transform: translate3d(260px, 0, 0);
    }
    .menu-on-left .sidebar {
        left: 0;
        right: auto;
        -webkit-transform: translate3d(-260px, 0, 0);
        -moz-transform: translate3d(-260px, 0, 0);
        -o-transform: translate3d(-260px, 0, 0);
        -ms-transform: translate3d(-260px, 0, 0);
        transform: translate3d(-260px, 0, 0);
    }
    .menu-on-left #bodyClick {
        right: 0;
        left: auto;
    }
    .navbar-toggle .icon-bar {
        display: block;
        position: relative;
        background: #fff;
        width: 24px;
        height: 2px;
        border-radius: 1px;
        margin: 0 auto;
    }
    .navbar-header .navbar-toggle {
        margin: 10px 15px 10px 0;
        width: 40px;
        height: 40px;
    }
    .bar1,
    .bar2,
    .bar3 {
        outline: 1px solid transparent;
    }
    .bar1 {
        top: 0px;
        -webkit-animation: topbar-back 500ms linear 0s;
        -moz-animation: topbar-back 500ms linear 0s;
        animation: topbar-back 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .bar2 {
        opacity: 1;
    }
    .bar3 {
        bottom: 0px;
        -webkit-animation: bottombar-back 500ms linear 0s;
        -moz-animation: bottombar-back 500ms linear 0s;
        animation: bottombar-back 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .toggled .bar1 {
        top: 6px;
        -webkit-animation: topbar-x 500ms linear 0s;
        -moz-animation: topbar-x 500ms linear 0s;
        animation: topbar-x 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .toggled .bar2 {
        opacity: 0;
    }
    .toggled .bar3 {
        bottom: 6px;
        -webkit-animation: bottombar-x 500ms linear 0s;
        -moz-animation: bottombar-x 500ms linear 0s;
        animation: bottombar-x 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    @keyframes topbar-x {
        0% {
            top: 0px;
            transform: rotate(0deg);
        }
        45% {
            top: 6px;
            transform: rotate(145deg);
        }
        75% {
            transform: rotate(130deg);
        }
        100% {
            transform: rotate(135deg);
        }
    }
    @-webkit-keyframes topbar-x {
        0% {
            top: 0px;
            -webkit-transform: rotate(0deg);
        }
        45% {
            top: 6px;
            -webkit-transform: rotate(145deg);
        }
        75% {
            -webkit-transform: rotate(130deg);
        }
        100% {
            -webkit-transform: rotate(135deg);
        }
    }
    @-moz-keyframes topbar-x {
        0% {
            top: 0px;
            -moz-transform: rotate(0deg);
        }
        45% {
            top: 6px;
            -moz-transform: rotate(145deg);
        }
        75% {
            -moz-transform: rotate(130deg);
        }
        100% {
            -moz-transform: rotate(135deg);
        }
    }
    @keyframes topbar-back {
        0% {
            top: 6px;
            transform: rotate(135deg);
        }
        45% {
            transform: rotate(-10deg);
        }
        75% {
            transform: rotate(5deg);
        }
        100% {
            top: 0px;
            transform: rotate(0);
        }
    }
    @-webkit-keyframes topbar-back {
        0% {
            top: 6px;
            -webkit-transform: rotate(135deg);
        }
        45% {
            -webkit-transform: rotate(-10deg);
        }
        75% {
            -webkit-transform: rotate(5deg);
        }
        100% {
            top: 0px;
            -webkit-transform: rotate(0);
        }
    }
    @-moz-keyframes topbar-back {
        0% {
            top: 6px;
            -moz-transform: rotate(135deg);
        }
        45% {
            -moz-transform: rotate(-10deg);
        }
        75% {
            -moz-transform: rotate(5deg);
        }
        100% {
            top: 0px;
            -moz-transform: rotate(0);
        }
    }
    @keyframes bottombar-x {
        0% {
            bottom: 0px;
            transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            transform: rotate(-145deg);
        }
        75% {
            transform: rotate(-130deg);
        }
        100% {
            transform: rotate(-135deg);
        }
    }
    @-webkit-keyframes bottombar-x {
        0% {
            bottom: 0px;
            -webkit-transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            -webkit-transform: rotate(-145deg);
        }
        75% {
            -webkit-transform: rotate(-130deg);
        }
        100% {
            -webkit-transform: rotate(-135deg);
        }
    }
    @-moz-keyframes bottombar-x {
        0% {
            bottom: 0px;
            -moz-transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            -moz-transform: rotate(-145deg);
        }
        75% {
            -moz-transform: rotate(-130deg);
        }
        100% {
            -moz-transform: rotate(-135deg);
        }
    }
    @keyframes bottombar-back {
        0% {
            bottom: 6px;
            transform: rotate(-135deg);
        }
        45% {
            transform: rotate(10deg);
        }
        75% {
            transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            transform: rotate(0);
        }
    }
    @-webkit-keyframes bottombar-back {
        0% {
            bottom: 6px;
            -webkit-transform: rotate(-135deg);
        }
        45% {
            -webkit-transform: rotate(10deg);
        }
        75% {
            -webkit-transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            -webkit-transform: rotate(0);
        }
    }
    @-moz-keyframes bottombar-back {
        0% {
            bottom: 6px;
            -moz-transform: rotate(-135deg);
        }
        45% {
            -moz-transform: rotate(10deg);
        }
        75% {
            -moz-transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            -moz-transform: rotate(0);
        }
    }
    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @-moz-keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    .dropdown-menu .divider {
        background-color: rgba(229, 229, 229, 0.15);
    }
    .navbar-nav {
        margin: 1px 0;
        float: none !important;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        padding: 10px 15px 10px 60px;
        border-radius: 4px;
        color: inherit;
    }
    .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
        background-color: transparent;
    }
    [class*=\"navbar-\"] .navbar-nav > li > a,
    [class*=\"navbar-\"] .navbar-nav > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav > li > a:focus,
    [class*=\"navbar-\"] .navbar-nav .active > a,
    [class*=\"navbar-\"] .navbar-nav .active > a:hover,
    [class*=\"navbar-\"] .navbar-nav .active > a:focus,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:focus,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:active {
        color: white;
    }
    [class*=\"navbar-\"] .navbar-nav > li > a,
    [class*=\"navbar-\"] .navbar-nav > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav > li > a:focus {
        opacity: .7;
        background-color: transparent;
        outline: none;
    }
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:focus {
        background-color: rgba(255, 255, 255, 0.1);
    }
    [class*=\"navbar-\"] .navbar-nav.navbar-nav .open .dropdown-menu > li > a:active {
        opacity: 1;
    }
    [class*=\"navbar-\"] .navbar-nav .dropdown > a:hover .caret {
        border-bottom-color: #fff;
        border-top-color: #fff;
    }
    [class*=\"navbar-\"] .navbar-nav .dropdown > a:active .caret {
        border-bottom-color: white;
        border-top-color: white;
    }
    .dropdown-menu {
        display: none;
    }
    .navbar-fixed-top {
        -webkit-backface-visibility: hidden;
    }
    #bodyClick {
        height: 100%;
        width: calc(100% - 260px);
        position: fixed;
        opacity: 0;
        top: 0;
        left: 0;
        content: \"\";
        z-index: 9999;
        overflow-x: hidden;
    }
    .social-line .btn {
        margin: 0 0 10px 0;
    }
    .subscribe-line .form-control {
        margin: 0 0 10px 0;
    }
    .social-line.pull-right {
        float: none;
    }
    .footer nav.pull-left {
        float: none !important;
    }
    .footer:not(.footer-big) nav > ul li {
        float: none;
    }
    .social-area.pull-right {
        float: none !important;
    }
    .form-control + .form-control-feedback {
        margin-top: -8px;
    }
    .navbar-toggle:hover, .navbar-toggle:focus {
        background-color: transparent !important;
    }
    .btn.dropdown-toggle {
        margin-bottom: 0;
    }
    .media-post .author {
        width: 20%;
        float: none !important;
        display: block;
        margin: 0 auto 10px;
    }
    .media-post .media-body {
        width: 100%;
    }
    .navbar-collapse.collapse {
        height: 100% !important;
    }
    .navbar-collapse.collapse.in {
        display: block;
    }
    .navbar-header .collapse, .navbar-toggle {
        display: block !important;
    }
    .navbar-header {
        float: none;
    }
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-collapse .nav p {
        font-size: 14px;
        margin: 0;
    }
    .navbar-collapse [class^=\"pe-7s-\"] {
        float: left;
        font-size: 20px;
        margin-right: 10px;
    }
}

@media (min-width: 992px) {
    .table-full-width {
        margin-left: -15px;
        margin-right: -15px;
    }
    .table-responsive {
        overflow: visible;
    }
    .navbar-nav p {
        line-height: normal;
        margin: 0;
    }
}

@media (max-width: 991px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-x: scroll;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        -webkit-overflow-scrolling: touch;
    }
}
";
        
        $__internal_9147364bf264c731913f68a8b72ef7cbd549647d261374f8391279820c65dfe3->leave($__internal_9147364bf264c731913f68a8b72ef7cbd549647d261374f8391279820c65dfe3_prof);

    }

    public function getTemplateName()
    {
        return "assets/light/css/light-bootstrap-dashboard.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!

 =========================================================
 * Light Bootstrap Dashboard - v1.4.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/light-bootstrap-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
/*      light colors         */
@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

@-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes spin {
    from {
        -moz-transform: rotate(0deg);
    }
    to {
        -moz-transform: rotate(360deg);
    }
}

@-ms-keyframes spin {
    from {
        -ms-transform: rotate(0deg);
    }
    to {
        -ms-transform: rotate(360deg);
    }
}

/*           Font Smoothing      */
body,
h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6,
p,
.navbar,
.brand,
.btn-simple,
.alert,
a,
.td-name,
td,
button.close {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: \"Roboto\",\"Helvetica Neue\",Arial,sans-serif;
    font-weight: 400;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    font-weight: 300;
    margin: 30px 0 15px;
}

h1, .h1 {
    font-size: 52px;
}

h2, .h2 {
    font-size: 36px;
}

h3, .h3 {
    font-size: 28px;
    margin: 20px 0 10px;
}

h4, .h4 {
    font-size: 22px;
    line-height: 30px;
}

h5, .h5 {
    font-size: 16px;
    margin-bottom: 15px;
}

h6, .h6 {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}

p {
    font-size: 16px;
    line-height: 1.5;
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small, .h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small, h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small, .h5 .small, .h6 .small {
    color: #9A9A9A;
    font-weight: 300;
    line-height: 1.5;
}

h1 small, h2 small, h3 small, h1 .small, h2 .small, h3 .small {
    font-size: 60%;
}

h1 .subtitle {
    display: block;
    margin: 0 0 30px;
}

.text-muted {
    color: #9A9A9A;
}

.text-primary, .text-primary:hover {
    color: #1D62F0 !important;
}

.text-info, .text-info:hover {
    color: #1DC7EA !important;
}

.text-success, .text-success:hover {
    color: #87CB16 !important;
}

.text-warning, .text-warning:hover {
    color: #FF9500 !important;
}

.text-danger, .text-danger:hover {
    color: #FF4A55 !important;
}

/*     General overwrite     */
body,
.wrapper {
    min-height: 100vh;
    position: relative;
}

body {
    background: rgba(203, 203, 210, 0.15);
}

a {
    color: #1DC7EA;
}

a:hover, a:focus {
    color: #42d0ed;
    text-decoration: none;
}

a:focus, a:active,
button::-moz-focus-inner,
input::-moz-focus-inner,
input[type=\"reset\"]::-moz-focus-inner,
input[type=\"button\"]::-moz-focus-inner,
input[type=\"submit\"]::-moz-focus-inner,
select::-moz-focus-inner,
input[type=\"file\"] > input[type=\"button\"]::-moz-focus-inner {
    outline: 0;
}

.ui-slider-handle:focus,
.navbar-toggle,
input:focus {
    outline: 0 !important;
}

/*           Animations              */
.form-control,
.input-group-addon,
.tagsinput,
.navbar,
.navbar .alert {
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
}

.sidebar .nav a,
.table > tbody > tr .td-actions .btn {
    -webkit-transition: all 150ms ease-in;
    -moz-transition: all 150ms ease-in;
    -o-transition: all 150ms ease-in;
    -ms-transition: all 150ms ease-in;
    transition: all 150ms ease-in;
}

.btn {
    -webkit-transition: all 100ms ease-in;
    -moz-transition: all 100ms ease-in;
    -o-transition: all 100ms ease-in;
    -ms-transition: all 100ms ease-in;
    transition: all 100ms ease-in;
}

.fa {
    width: 18px;
    text-align: center;
}

.margin-top {
    margin-top: 50px;
}

.wrapper {
    position: relative;
    top: 0;
    height: 100vh;
}

.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    right: auto;
    left: 0;
    width: 260px;
    display: block;
    z-index: 1;
    color: #fff;
    font-weight: 200;
    background-size: cover;
    background-position: center center;
}

.sidebar .sidebar-wrapper {
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
    width: 260px;
    z-index: 4;
    padding-bottom: 100px;
}

.sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center center;
}

.sidebar .logo {
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .logo p {
    float: left;
    font-size: 20px;
    margin: 10px 10px;
    color: #FFFFFF;
    line-height: 20px;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 5px 0px;
    display: block;
    font-size: 18px;
    color: #FFFFFF;
    text-align: center;
    font-weight: 400;
    line-height: 30px;
}

.sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden;
}

.sidebar .logo-tim img {
    width: 60px;
    height: 60px;
}

.sidebar .nav {
    margin-top: 20px;
    float: none;
}

.sidebar .nav .open > a,
.sidebar .nav li.dropdown .dropdown-menu li:hover > a,
.sidebar .nav li:hover > a {
    background-color: rgba(255, 255, 255, 0.13);
    opacity: 1;
}

.sidebar .nav li > a {
    color: #FFFFFF;
    margin: 5px 15px;
    opacity: .86;
    border-radius: 4px;
    display: block;
}

.sidebar .nav li.active > a {
    color: #FFFFFF;
    opacity: 1;
    background: rgba(255, 255, 255, 0.23);
}

.sidebar .nav li.separator {
    margin: 15px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .nav li.separator + li {
    margin-top: 31px;
}

.sidebar .nav p {
    margin: 0;
    line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    margin-left: 45px;
}

.sidebar .nav i {
    font-size: 28px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 30px;
    text-align: center;
}

.sidebar .nav .caret {
    margin-top: 13px;
    position: absolute;
    right: 30px;
}

.sidebar .logo {
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar .logo p {
    float: left;
    font-size: 20px;
    margin: 10px 10px;
    color: #FFFFFF;
    line-height: 20px;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
}

.sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 5px 0px;
    display: block;
    font-size: 18px;
    color: #FFFFFF;
    text-align: center;
    font-weight: 400;
    line-height: 30px;
}

.sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden;
}

.sidebar .logo-tim img {
    width: 60px;
    height: 60px;
}

.sidebar:after, .sidebar:before {
    display: block;
    content: \"\";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2;
}

.sidebar:before {
    opacity: .33;
    background: #000000;
}

.sidebar:after {
    background: #787878;
    background: -moz-linear-gradient(top, #787878 0%, #343434 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #787878), color-stop(100%, #343434));
    background: -webkit-linear-gradient(top, #787878 0%, #343434 100%);
    background: -o-linear-gradient(top, #787878 0%, #343434 100%);
    background: -ms-linear-gradient(top, #787878 0%, #343434 100%);
    background: linear-gradient(to bottom, #787878 0%, #343434 100%);
    background-size: 150% 150%;
    z-index: 3;
    opacity: 1;
}

.sidebar[data-image]:after, .sidebar.has-image:after {
    opacity: .77;
}

.sidebar[data-color=\"blue\"]:after {
    background: #1F77D0;
    background: -moz-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1F77D0), color-stop(100%, #533ce1));
    background: -webkit-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -o-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: -ms-linear-gradient(top, #1F77D0 0%, #533ce1 100%);
    background: linear-gradient(to bottom, #1F77D0 0%, #533ce1 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"azure\"]:after {
    background: #1DC7EA;
    background: -moz-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1DC7EA), color-stop(100%, #4091ff));
    background: -webkit-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -o-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: -ms-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
    background: linear-gradient(to bottom, #1DC7EA 0%, #4091ff 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"green\"]:after {
    background: #87CB16;
    background: -moz-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #87CB16), color-stop(100%, #6dc030));
    background: -webkit-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -o-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: -ms-linear-gradient(top, #87CB16 0%, #6dc030 100%);
    background: linear-gradient(to bottom, #87CB16 0%, #6dc030 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"orange\"]:after {
    background: #FFA534;
    background: -moz-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FFA534), color-stop(100%, #ff5221));
    background: -webkit-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -o-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: -ms-linear-gradient(top, #FFA534 0%, #ff5221 100%);
    background: linear-gradient(to bottom, #FFA534 0%, #ff5221 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"red\"]:after {
    background: #FB404B;
    background: -moz-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FB404B), color-stop(100%, #bb0502));
    background: -webkit-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -o-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: -ms-linear-gradient(top, #FB404B 0%, #bb0502 100%);
    background: linear-gradient(to bottom, #FB404B 0%, #bb0502 100%);
    background-size: 150% 150%;
}

.sidebar[data-color=\"purple\"]:after {
    background: #9368E9;
    background: -moz-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9368E9), color-stop(100%, #943bea));
    background: -webkit-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -o-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: -ms-linear-gradient(top, #9368E9 0%, #943bea 100%);
    background: linear-gradient(to bottom, #9368E9 0%, #943bea 100%);
    background-size: 150% 150%;
}

.main-panel {
    position: relative;
    z-index: 2;
    float: right;
    width: calc(100% - 260px);
}

.main-panel > .content {
    padding: 30px 15px;
    min-height: calc(100% - 123px);
}

.main-panel > .footer {
    border-top: 1px solid #e7e7e7;
}

.main-panel .navbar {
    margin-bottom: 0;
}

.sidebar,
.main-panel {
    max-height: 100%;
    height: 100%;
    -webkit-transition-property: top,bottom;
    transition-property: top,bottom;
    -webkit-transition-duration: .2s,.2s;
    transition-duration: .2s,.2s;
    -webkit-transition-timing-function: linear,linear;
    transition-timing-function: linear,linear;
    -webkit-overflow-scrolling: touch;
}

.btn {
    border-width: 2px;
    background-color: transparent;
    font-weight: 400;
    opacity: 0.8;
    filter: alpha(opacity=80);
    padding: 8px 16px;
    border-color: #888888;
    color: #888888;
}

.btn:hover, .btn:focus, .btn:active, .btn.active,
.open > .btn.dropdown-toggle {
    background-color: transparent;
    color: #777777;
    border-color: #777777;
}

.btn.disabled, .btn.disabled:hover, .btn.disabled:focus, .btn.disabled.focus, .btn.disabled:active, .btn.disabled.active, .btn:disabled, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled.focus, .btn:disabled:active, .btn:disabled.active, .btn[disabled], .btn[disabled]:hover, .btn[disabled]:focus, .btn[disabled].focus, .btn[disabled]:active, .btn[disabled].active,
fieldset[disabled] .btn,
fieldset[disabled] .btn:hover,
fieldset[disabled] .btn:focus,
fieldset[disabled] .btn.focus,
fieldset[disabled] .btn:active,
fieldset[disabled] .btn.active {
    background-color: transparent;
    border-color: #888888;
}

.btn.btn-fill {
    color: #FFFFFF;
    background-color: #888888;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn.btn-fill:hover, .btn.btn-fill:focus, .btn.btn-fill:active, .btn.btn-fill.active,
.open > .btn.btn-fill.dropdown-toggle {
    background-color: #777777;
    color: #FFFFFF;
}

.btn.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn .caret {
    border-top-color: #888888;
}

.btn:hover, .btn:focus {
    opacity: 1;
    filter: alpha(opacity=100);
    outline: 0 !important;
}

.btn:active, .btn.active,
.open > .btn.dropdown-toggle {
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 !important;
}

.btn.btn-icon {
    padding: 8px;
}

.btn-primary {
    border-color: #3472F7;
    color: #3472F7;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active,
.open > .btn-primary.dropdown-toggle {
    background-color: transparent;
    color: #1D62F0;
    border-color: #1D62F0;
}

.btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary:disabled, .btn-primary:disabled:hover, .btn-primary:disabled:focus, .btn-primary:disabled.focus, .btn-primary:disabled:active, .btn-primary:disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled].active,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary.active {
    background-color: transparent;
    border-color: #3472F7;
}

.btn-primary.btn-fill {
    color: #FFFFFF;
    background-color: #3472F7;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-primary.btn-fill:hover, .btn-primary.btn-fill:focus, .btn-primary.btn-fill:active, .btn-primary.btn-fill.active,
.open > .btn-primary.btn-fill.dropdown-toggle {
    background-color: #1D62F0;
    color: #FFFFFF;
}

.btn-primary.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-primary .caret {
    border-top-color: #3472F7;
}

.btn-success {
    border-color: #87CB16;
    color: #87CB16;
}

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active,
.open > .btn-success.dropdown-toggle {
    background-color: transparent;
    color: #049F0C;
    border-color: #049F0C;
}

.btn-success.disabled, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled.active, .btn-success:disabled, .btn-success:disabled:hover, .btn-success:disabled:focus, .btn-success:disabled.focus, .btn-success:disabled:active, .btn-success:disabled.active, .btn-success[disabled], .btn-success[disabled]:hover, .btn-success[disabled]:focus, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled].active,
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success.focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
    background-color: transparent;
    border-color: #87CB16;
}

.btn-success.btn-fill {
    color: #FFFFFF;
    background-color: #87CB16;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-success.btn-fill:hover, .btn-success.btn-fill:focus, .btn-success.btn-fill:active, .btn-success.btn-fill.active,
.open > .btn-success.btn-fill.dropdown-toggle {
    background-color: #049F0C;
    color: #FFFFFF;
}

.btn-success.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-success .caret {
    border-top-color: #87CB16;
}

.btn-info {
    border-color: #1DC7EA;
    color: #1DC7EA;
}

.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active,
.open > .btn-info.dropdown-toggle {
    background-color: transparent;
    color: #42d0ed;
    border-color: #42d0ed;
}

.btn-info.disabled, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled.active, .btn-info:disabled, .btn-info:disabled:hover, .btn-info:disabled:focus, .btn-info:disabled.focus, .btn-info:disabled:active, .btn-info:disabled.active, .btn-info[disabled], .btn-info[disabled]:hover, .btn-info[disabled]:focus, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled].active,
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info.focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
    background-color: transparent;
    border-color: #1DC7EA;
}

.btn-info.btn-fill {
    color: #FFFFFF;
    background-color: #1DC7EA;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-info.btn-fill:hover, .btn-info.btn-fill:focus, .btn-info.btn-fill:active, .btn-info.btn-fill.active,
.open > .btn-info.btn-fill.dropdown-toggle {
    background-color: #42d0ed;
    color: #FFFFFF;
}

.btn-info.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-info .caret {
    border-top-color: #1DC7EA;
}

.btn-warning {
    border-color: #FF9500;
    color: #FF9500;
}

.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active,
.open > .btn-warning.dropdown-toggle {
    background-color: transparent;
    color: #ED8D00;
    border-color: #ED8D00;
}

.btn-warning.disabled, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled.active, .btn-warning:disabled, .btn-warning:disabled:hover, .btn-warning:disabled:focus, .btn-warning:disabled.focus, .btn-warning:disabled:active, .btn-warning:disabled.active, .btn-warning[disabled], .btn-warning[disabled]:hover, .btn-warning[disabled]:focus, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled].active,
fieldset[disabled] .btn-warning,
fieldset[disabled] .btn-warning:hover,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning.focus,
fieldset[disabled] .btn-warning:active,
fieldset[disabled] .btn-warning.active {
    background-color: transparent;
    border-color: #FF9500;
}

.btn-warning.btn-fill {
    color: #FFFFFF;
    background-color: #FF9500;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-warning.btn-fill:hover, .btn-warning.btn-fill:focus, .btn-warning.btn-fill:active, .btn-warning.btn-fill.active,
.open > .btn-warning.btn-fill.dropdown-toggle {
    background-color: #ED8D00;
    color: #FFFFFF;
}

.btn-warning.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-warning .caret {
    border-top-color: #FF9500;
}

.btn-danger {
    border-color: #FF4A55;
    color: #FF4A55;
}

.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active,
.open > .btn-danger.dropdown-toggle {
    background-color: transparent;
    color: #EE2D20;
    border-color: #EE2D20;
}

.btn-danger.disabled, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled.active, .btn-danger:disabled, .btn-danger:disabled:hover, .btn-danger:disabled:focus, .btn-danger:disabled.focus, .btn-danger:disabled:active, .btn-danger:disabled.active, .btn-danger[disabled], .btn-danger[disabled]:hover, .btn-danger[disabled]:focus, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled].active,
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger.focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
    background-color: transparent;
    border-color: #FF4A55;
}

.btn-danger.btn-fill {
    color: #FFFFFF;
    background-color: #FF4A55;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-danger.btn-fill:hover, .btn-danger.btn-fill:focus, .btn-danger.btn-fill:active, .btn-danger.btn-fill.active,
.open > .btn-danger.btn-fill.dropdown-toggle {
    background-color: #EE2D20;
    color: #FFFFFF;
}

.btn-danger.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-danger .caret {
    border-top-color: #FF4A55;
}

.btn-neutral {
    border-color: #FFFFFF;
    color: #FFFFFF;
}

.btn-neutral:hover, .btn-neutral:focus, .btn-neutral:active, .btn-neutral.active,
.open > .btn-neutral.dropdown-toggle {
    background-color: transparent;
    color: #FFFFFF;
    border-color: #FFFFFF;
}

.btn-neutral.disabled, .btn-neutral.disabled:hover, .btn-neutral.disabled:focus, .btn-neutral.disabled.focus, .btn-neutral.disabled:active, .btn-neutral.disabled.active, .btn-neutral:disabled, .btn-neutral:disabled:hover, .btn-neutral:disabled:focus, .btn-neutral:disabled.focus, .btn-neutral:disabled:active, .btn-neutral:disabled.active, .btn-neutral[disabled], .btn-neutral[disabled]:hover, .btn-neutral[disabled]:focus, .btn-neutral[disabled].focus, .btn-neutral[disabled]:active, .btn-neutral[disabled].active,
fieldset[disabled] .btn-neutral,
fieldset[disabled] .btn-neutral:hover,
fieldset[disabled] .btn-neutral:focus,
fieldset[disabled] .btn-neutral.focus,
fieldset[disabled] .btn-neutral:active,
fieldset[disabled] .btn-neutral.active {
    background-color: transparent;
    border-color: #FFFFFF;
}

.btn-neutral.btn-fill {
    color: #FFFFFF;
    background-color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.btn-neutral.btn-fill:hover, .btn-neutral.btn-fill:focus, .btn-neutral.btn-fill:active, .btn-neutral.btn-fill.active,
.open > .btn-neutral.btn-fill.dropdown-toggle {
    background-color: #FFFFFF;
    color: #FFFFFF;
}

.btn-neutral.btn-fill .caret {
    border-top-color: #FFFFFF;
}

.btn-neutral .caret {
    border-top-color: #FFFFFF;
}

.btn-neutral:active, .btn-neutral.active,
.open > .btn-neutral.dropdown-toggle {
    background-color: #FFFFFF;
    color: #888888;
}

.btn-neutral.btn-fill, .btn-neutral.btn-fill:hover, .btn-neutral.btn-fill:focus {
    color: #888888;
}

.btn-neutral.btn-simple:active, .btn-neutral.btn-simple.active {
    background-color: transparent;
}

.btn:disabled, .btn[disabled], .btn.disabled {
    opacity: 0.5;
    filter: alpha(opacity=50);
}

.btn-round {
    border-width: 1px;
    border-radius: 30px !important;
    padding: 9px 18px;
}

.btn-round.btn-icon {
    padding: 9px;
}

.btn-simple {
    border: 0;
    font-size: 16px;
    padding: 8px 16px;
}

.btn-simple.btn-icon {
    padding: 8px;
}

.btn-lg {
    font-size: 18px;
    border-radius: 6px;
    padding: 14px 30px;
    font-weight: 400;
}

.btn-lg.btn-round {
    padding: 15px 30px;
}

.btn-lg.btn-simple {
    padding: 16px 30px;
}

.btn-sm {
    font-size: 12px;
    border-radius: 3px;
    padding: 5px 10px;
}

.btn-sm.btn-round {
    padding: 6px 10px;
}

.btn-sm.btn-simple {
    padding: 7px 10px;
}

.btn-xs {
    font-size: 12px;
    border-radius: 3px;
    padding: 1px 5px;
}

.btn-xs.btn-round {
    padding: 2px 5px;
}

.btn-xs.btn-simple {
    padding: 3px 5px;
}

.btn-wd {
    min-width: 140px;
}

.btn-group.select {
    width: 100%;
}

.btn-group.select .btn {
    text-align: left;
}

.btn-group.select .caret {
    position: absolute;
    top: 50%;
    margin-top: -1px;
    right: 8px;
}

.form-control::-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control:-moz-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control::-webkit-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control:-ms-input-placeholder {
    color: #DDDDDD;
    opacity: 1;
    filter: alpha(opacity=100);
}

.form-control {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
    border-radius: 4px;
    color: #565656;
    padding: 8px 12px;
    height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.form-control:focus {
    background-color: #FFFFFF;
    border: 1px solid #AAAAAA;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 !important;
    color: #333333;
}

.has-success .form-control,
.has-error .form-control,
.has-success .form-control:focus,
.has-error .form-control:focus {
    border-color: #E3E3E3;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.has-success .form-control {
    color: #87CB16;
}

.has-success .form-control:focus {
    border-color: #87CB16;
}

.has-error .form-control {
    color: #FF4A55;
}

.has-error .form-control:focus {
    border-color: #FF4A55;
}

.form-control + .form-control-feedback {
    border-radius: 6px;
    font-size: 14px;
    margin-top: -7px;
    position: absolute;
    right: 10px;
    top: 50%;
    vertical-align: middle;
}

.open .form-control {
    border-radius: 4px 4px 0 0;
    border-bottom-color: transparent;
}

.input-lg {
    height: 55px;
    padding: 14px 30px;
}

.has-error .form-control-feedback {
    color: #FF4A55;
}

.has-success .form-control-feedback {
    color: #87CB16;
}

.input-group-addon {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
    border-radius: 4px;
}

.has-success .input-group-addon,
.has-error .input-group-addon {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
}

.has-error .form-control:focus + .input-group-addon {
    border-color: #FF4A55;
    color: #FF4A55;
}

.has-success .form-control:focus + .input-group-addon {
    border-color: #87CB16;
    color: #87CB16;
}

.form-control:focus + .input-group-addon,
.form-control:focus ~ .input-group-addon {
    background-color: #FFFFFF;
    border-color: #9A9A9A;
}

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
    border-right: 0 none;
}

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
    border-left: 0 none;
}

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #F5F5F5;
    color: #888888;
    cursor: not-allowed;
}

.input-group-btn .btn {
    border-width: 1px;
    padding: 9px 16px;
}

.input-group-btn .btn-default:not(.btn-fill) {
    border-color: #DDDDDD;
}

.input-group-btn:last-child > .btn {
    margin-left: 0;
}

.input-group-focus .input-group-addon {
    border-color: #9A9A9A;
}

.alert {
    border: 0;
    border-radius: 0;
    color: #FFFFFF;
    padding: 10px 15px;
    font-size: 14px;
}

.container .alert {
    border-radius: 4px;
}

.navbar .alert {
    border-radius: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 85px;
    width: 100%;
    z-index: 3;
}

.navbar:not(.navbar-transparent) .alert {
    top: 70px;
}

.alert span[data-notify=\"icon\"] {
    font-size: 30px;
    display: block;
    left: 15px;
    position: absolute;
    top: 50%;
    margin-top: -15px;
}

.alert button.close {
    position: absolute;
    right: 10px;
    top: 50%;
    margin-top: -13px;
    z-index: 1033;
    background-color: #FFFFFF;
    display: block;
    border-radius: 50%;
    opacity: .4;
    line-height: 11px;
    width: 25px;
    height: 25px;
    outline: 0 !important;
    text-align: center;
    padding: 3px;
    padding-top: 1px;
    font-weight: 300;
}

.alert button.close:hover {
    opacity: .55;
}

.alert .close ~ span {
    display: block;
    max-width: 89%;
}

.alert[data-notify=\"container\"] {
    padding: 10px 10px 10px 20px;
    border-radius: 4px;
}

.alert.alert-with-icon {
    padding-left: 65px;
}

.alert-info {
    background-color: #63d8f1;
}

.alert-success {
    background-color: #a1e82c;
}

.alert-warning {
    background-color: #ffbc67;
}

.alert-danger {
    background-color: #fc727a;
}

.table .radio,
.table .checkbox {
    position: relative;
    height: 20px;
    display: block;
    width: 20px;
    padding: 0px 0px;
    margin: 0px 5px;
    text-align: center;
}

.table .radio .icons,
.table .checkbox .icons {
    left: 5px;
}

.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
    padding: 12px 8px;
    vertical-align: middle;
}

.table > thead > tr > th {
    border-bottom-width: 1px;
    font-size: 12px;
    text-transform: uppercase;
    color: #9A9A9A;
    font-weight: 400;
    padding-bottom: 5px;
}

.table .td-actions .btn {
    opacity: 0.36;
    filter: alpha(opacity=36);
}

.table .td-actions .btn.btn-xs {
    padding-left: 3px;
    padding-right: 3px;
}

.table .td-actions {
    min-width: 90px;
}

.table > tbody > tr {
    position: relative;
}

.table > tbody > tr:hover .td-actions .btn {
    opacity: 1;
    filter: alpha(opacity=100);
}

/*      Checkbox and radio         */
.checkbox,
.radio {
    margin-bottom: 12px;
}

.checkbox label,
.radio label {
    display: inline-block;
    position: relative;
    cursor: pointer;
    padding-left: 24px;
    margin-bottom: 0;
}

.checkbox label::before,
.checkbox label::after {
    font-family: 'FontAwesome';
    content: \"\\f096\";
    display: inline-block;
    position: absolute;
    width: 20px;
    height: 20px;
    left: -1px;
    cursor: pointer;
    line-height: 19px;
    font-size: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    top: 1px;
    color: #DDDDDD;
    transition: color 0.2s linear;
    padding: 1px;
}

.checkbox label::after {
    content: \"\";
    text-align: center;
    opacity: 1;
    left: 0;
    color: #DDDDDD;
}

.checkbox input[type=\"checkbox\"],
.radio input[type=\"radio\"] {
    opacity: 0;
    margin-left: 0;
}

.checkbox input[type=\"checkbox\"]:checked + label::after {
    font-family: 'FontAwesome';
    content: \"\\f046\";
}

.checkbox input[type=\"checkbox\"]:checked + label::after {
    color: #1DC7EA;
}

.checkbox input[type=\"checkbox\"]:checked + label::before {
    opacity: 0;
}

.checkbox input[type=\"checkbox\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label,
.checkbox input[type=\"checkbox\"]:disabled:checked + label::after {
    opacity: .7;
}

.checkbox input[type=\"checkbox\"]:disabled + label::before,
.checkbox input[type=\"checkbox\"]:disabled + label::after {
    cursor: not-allowed;
}

.checkbox input[type=\"checkbox\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label {
    cursor: not-allowed;
}

.checkbox.checkbox-circle label::before {
    border-radius: 50%;
}

.checkbox.checkbox-inline {
    padding-left: 0;
}

.checkbox-primary input[type=\"checkbox\"]:checked + label::before {
    background-color: #428bca;
    border-color: #428bca;
}

.checkbox-primary input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-danger input[type=\"checkbox\"]:checked + label::before {
    background-color: #d9534f;
    border-color: #d9534f;
}

.checkbox-danger input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-info input[type=\"checkbox\"]:checked + label::before {
    background-color: #5bc0de;
    border-color: #5bc0de;
}

.checkbox-info input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-warning input[type=\"checkbox\"]:checked + label::before {
    background-color: #f0ad4e;
    border-color: #f0ad4e;
}

.checkbox-warning input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.checkbox-success input[type=\"checkbox\"]:checked + label::before {
    background-color: #5cb85c;
    border-color: #5cb85c;
}

.checkbox-success input[type=\"checkbox\"]:checked + label::after {
    color: #fff;
}

.radio label::before,
.radio label::after {
    font-family: 'FontAwesome';
    content: \"\\f10c\";
    font-size: 20px;
    height: 20px;
    width: 20px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: inline-block;
    position: absolute;
    line-height: 19px;
    left: 0;
    top: 0;
    color: #DDDDDD;
    padding: 1px;
    transition: color 0.2s linear;
}

.radio input[type=\"radio\"]:checked + label::after {
    font-family: 'FontAwesome';
    content: \"\\f192\";
    color: #DDDDDD;
}

.radio input[type=\"radio\"]:checked + label::after {
    color: #1DC7EA;
}

.radio input[type=\"radio\"]:disabled + label,
.radio input[type=\"radio\"]:disabled + label::before,
.radio input[type=\"radio\"]:disabled + label::after {
    opacity: .5;
}

.radio.radio-inline {
    margin-top: 0;
}

/**
  * bootstrap-switch - Turn checkboxes and radio buttons into toggle switches.
  *
  * @version v3.3.4
  * @homepage https://bttstrp.github.io/bootstrap-switch
  * @author Mattia Larentis <mattia@larentis.eu> (http://larentis.eu)
  * @license Apache-2.0
  */
.bootstrap-switch {
    display: inline-block;
    direction: ltr;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid;
    border-color: #ccc;
    position: relative;
    text-align: left;
    overflow: hidden;
    line-height: 8px;
    z-index: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.bootstrap-switch .bootstrap-switch-container {
    display: inline-block;
    top: 0;
    border-radius: 4px;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-label {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    cursor: pointer;
    display: table-cell;
    vertical-align: middle;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 20px;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off {
    text-align: center;
    z-index: 1;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {
    color: #fff;
    background: #337ab7;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info {
    color: #fff;
    background: #5bc0de;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success {
    color: #fff;
    background: #5cb85c;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning {
    background: #f0ad4e;
    color: #fff;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger {
    color: #fff;
    background: #d9534f;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
    color: #000;
    background: #eeeeee;
}

.bootstrap-switch .bootstrap-switch-label {
    text-align: center;
    margin-top: -1px;
    margin-bottom: -1px;
    z-index: 100;
    color: #333;
    background: #fff;
}

.bootstrap-switch span::before {
    content: \"\\200b\";
}

.bootstrap-switch .bootstrap-switch-handle-on {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.bootstrap-switch .bootstrap-switch-handle-off {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch input[type='radio'],
.bootstrap-switch input[type='checkbox'] {
    position: absolute !important;
    top: 0;
    left: 0;
    margin: 0;
    z-index: -1;
    opacity: 0;
    filter: alpha(opacity=0);
    visibility: hidden;
}

.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
    padding: 6px 16px;
    font-size: 18px;
    line-height: 1.3333333;
}

.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-readonly,
.bootstrap-switch.bootstrap-switch-indeterminate {
    cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
    -webkit-transition: margin-left 0.5s;
    -o-transition: margin-left 0.5s;
    transition: margin-left 0.5s;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-focused {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-off .bootstrap-switch-label {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-on .bootstrap-switch-label {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
}

.nav > li > a:hover,
.nav > li > a:focus {
    background-color: transparent;
}

.navbar {
    border: 0;
    font-size: 16px;
    border-radius: 0;
}

.navbar > .container .navbar-brand,
.navbar > .container-fluid .navbar-brand {
    margin-left: 0;
}

.navbar .navbar-brand {
    font-weight: 400;
    margin: 5px 0px;
    padding: 15px 15px;
    font-size: 20px;
}

.navbar .navbar-nav > li > a {
    padding: 10px 15px;
    margin: 10px 3px;
    position: relative;
}

.navbar .navbar-nav > li > a.btn {
    margin: 15px 3px;
    padding: 8px 16px;
}

.navbar .navbar-nav > li > a.btn-round {
    margin: 16px 3px;
}

.navbar .navbar-nav > li > a [class^=\"fa\"] {
    font-size: 19px;
    position: relative;
    line-height: 16px;
    top: 1px;
}

.navbar .navbar-nav .notification {
    position: absolute;
    background-color: #FB404B;
    text-align: center;
    border-radius: 10px;
    min-width: 18px;
    padding: 0 5px;
    height: 18px;
    font-size: 12px;
    color: #FFFFFF;
    font-weight: bold;
    line-height: 18px;
    top: 0px;
    left: 7px;
}

.navbar .btn {
    margin: 15px 3px;
    font-size: 14px;
}

.navbar .btn-simple {
    font-size: 16px;
}

.navbar.fixed {
    width: calc(100% - \$sidebar-width);
    right: 0;
    left: auto;
    border-radius: 0;
}

.navbar-nav > li > .dropdown-menu {
    border-radius: 10px;
    margin-top: -5px;
}

.navbar-transparent .navbar-brand, [class*=\"navbar-ct\"] .navbar-brand {
    color: #FFFFFF;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.navbar-transparent .navbar-brand:focus, .navbar-transparent .navbar-brand:hover, [class*=\"navbar-ct\"] .navbar-brand:focus, [class*=\"navbar-ct\"] .navbar-brand:hover {
    background-color: transparent;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .navbar-nav > li > a:not(.btn), [class*=\"navbar-ct\"] .navbar-nav > li > a:not(.btn) {
    color: #FFFFFF;
    border-color: #FFFFFF;
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.navbar-transparent .navbar-nav > .active > a:not(.btn),
.navbar-transparent .navbar-nav > .active > a:hover:not(.btn),
.navbar-transparent .navbar-nav > .active > a:focus:not(.btn),
.navbar-transparent .navbar-nav > li > a:hover:not(.btn),
.navbar-transparent .navbar-nav > li > a:focus:not(.btn), [class*=\"navbar-ct\"] .navbar-nav > .active > a:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > .active > a:hover:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > .active > a:focus:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > li > a:hover:not(.btn),
[class*=\"navbar-ct\"] .navbar-nav > li > a:focus:not(.btn) {
    background-color: transparent;
    border-radius: 3px;
    color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .navbar-nav .nav > li > a.btn:hover, [class*=\"navbar-ct\"] .navbar-nav .nav > li > a.btn:hover {
    background-color: transparent;
}

.navbar-transparent .navbar-nav > .dropdown > a .caret,
.navbar-transparent .navbar-nav > .dropdown > a:hover .caret,
.navbar-transparent .navbar-nav > .dropdown > a:focus .caret, [class*=\"navbar-ct\"] .navbar-nav > .dropdown > a .caret,
[class*=\"navbar-ct\"] .navbar-nav > .dropdown > a:hover .caret,
[class*=\"navbar-ct\"] .navbar-nav > .dropdown > a:focus .caret {
    border-bottom-color: #FFFFFF;
    border-top-color: #FFFFFF;
}

.navbar-transparent .navbar-nav > .open > a,
.navbar-transparent .navbar-nav > .open > a:hover,
.navbar-transparent .navbar-nav > .open > a:focus, [class*=\"navbar-ct\"] .navbar-nav > .open > a,
[class*=\"navbar-ct\"] .navbar-nav > .open > a:hover,
[class*=\"navbar-ct\"] .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .btn-default, [class*=\"navbar-ct\"] .btn-default {
    color: #FFFFFF;
    border-color: #FFFFFF;
}

.navbar-transparent .btn-default.btn-fill, [class*=\"navbar-ct\"] .btn-default.btn-fill {
    color: #9A9A9A;
    background-color: #FFFFFF;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.navbar-transparent .btn-default.btn-fill:hover,
.navbar-transparent .btn-default.btn-fill:focus,
.navbar-transparent .btn-default.btn-fill:active,
.navbar-transparent .btn-default.btn-fill.active,
.navbar-transparent .open .dropdown-toggle.btn-fill.btn-default, [class*=\"navbar-ct\"] .btn-default.btn-fill:hover,
[class*=\"navbar-ct\"] .btn-default.btn-fill:focus,
[class*=\"navbar-ct\"] .btn-default.btn-fill:active,
[class*=\"navbar-ct\"] .btn-default.btn-fill.active,
[class*=\"navbar-ct\"] .open .dropdown-toggle.btn-fill.btn-default {
    border-color: #FFFFFF;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-transparent .dropdown-menu .divider {
    background-color: rgba(255, 255, 255, 0.2);
}

.nav-open .nav .caret {
    border-bottom-color: #FFFFFF;
    border-top-color: #FFFFFF;
}

.navbar-default {
    background-color: rgba(255, 255, 255, 0.96);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.navbar-default .navbar-nav > li > a:not(.btn) {
    color: #9A9A9A;
}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:not(.btn):hover,
.navbar-default .navbar-nav > .active > a:not(.btn):focus,
.navbar-default .navbar-nav > li > a:not(.btn):hover,
.navbar-default .navbar-nav > li > a:not(.btn):focus {
    background-color: transparent;
    border-radius: 3px;
    color: #1DC7EA;
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-default .navbar-nav > .dropdown > a:hover .caret,
.navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-bottom-color: #1DC7EA;
    border-top-color: #1DC7EA;
}

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    background-color: transparent;
    color: #1DC7EA;
}

.navbar-default .navbar-nav .navbar-toggle:hover, .navbar-default .navbar-nav .navbar-toggle:focus {
    background-color: transparent;
}

.navbar-default:not(.navbar-transparent) .btn-default:hover {
    color: #1DC7EA;
    border-color: #1DC7EA;
}

.navbar-default:not(.navbar-transparent) .btn-neutral,
.navbar-default:not(.navbar-transparent) .btn-neutral:hover,
.navbar-default:not(.navbar-transparent) .btn-neutral:active {
    color: #9A9A9A;
}

/*      Navbar with icons            */
.navbar-icons.navbar .navbar-brand {
    margin-top: 12px;
    margin-bottom: 12px;
}

.navbar-icons .navbar-nav > li > a {
    text-align: center;
    padding: 6px 15px;
    margin: 6px 3px;
}

.navbar-icons .navbar-nav [class^=\"pe\"] {
    font-size: 30px;
    position: relative;
}

.navbar-icons .navbar-nav p {
    margin: 3px 0 0;
}

.navbar-form {
    -webkit-box-shadow: none;
    box-shadow: none;
}

.navbar-form .form-control {
    border-radius: 0;
    border: 0;
    padding: 0;
    background-color: transparent;
    height: 22px;
    font-size: 16px;
    line-height: 1.5;
    color: #E3E3E3;
}

.navbar-transparent .navbar-form .form-control,
[class*=\"navbar-ct\"] .navbar-form .form-control {
    color: #FFFFFF;
    border: 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.6);
}

.navbar-ct-blue {
    background-color: #4091e2;
}

.navbar-ct-azure {
    background-color: #63d8f1;
}

.navbar-ct-green {
    background-color: #a1e82c;
}

.navbar-ct-orange {
    background-color: #ffbc67;
}

.navbar-ct-red {
    background-color: #fc727a;
}

.navbar-transparent {
    padding-top: 15px;
    background-color: transparent;
    border-bottom: 1px solid transparent;
}

.navbar-toggle {
    margin-top: 19px;
    margin-bottom: 19px;
    border: 0;
}

.navbar-toggle .icon-bar {
    background-color: #FFFFFF;
}

.navbar-toggle .navbar-collapse,
.navbar-toggle .navbar-form {
    border-color: transparent;
}

.navbar-toggle.navbar-default .navbar-toggle:hover,
.navbar-toggle.navbar-default .navbar-toggle:focus {
    background-color: transparent;
}

.footer {
    background-color: #FFFFFF;
    line-height: 20px;
}

.footer nav > ul {
    list-style: none;
    margin: 0;
    padding: 0;
    font-weight: normal;
}

.footer nav > ul a:not(.btn) {
    color: #9A9A9A;
    display: block;
    margin-bottom: 3px;
}

.footer nav > ul a:not(.btn):hover, .footer nav > ul a:not(.btn):focus {
    color: #777777;
}

.footer .social-area {
    padding: 15px 0;
}

.footer .social-area h5 {
    padding-bottom: 15px;
}

.footer .social-area > a:not(.btn) {
    color: #9A9A9A;
    display: inline-block;
    vertical-align: top;
    padding: 10px 5px;
    font-size: 20px;
    font-weight: normal;
    line-height: 20px;
    text-align: center;
}

.footer .social-area > a:not(.btn):hover, .footer .social-area > a:not(.btn):focus {
    color: #777777;
}

.footer .copyright {
    color: #777777;
    padding: 10px 15px;
    margin: 10px 3px;
    line-height: 20px;
    font-size: 14px;
}

.footer hr {
    border-color: #DDDDDD;
}

.footer .title {
    color: #777777;
}

.footer-default {
    background-color: #F5F5F5;
}

.footer:not(.footer-big) nav > ul {
    font-size: 14px;
}

.footer:not(.footer-big) nav > ul li {
    margin-left: 20px;
    float: left;
}

.footer:not(.footer-big) nav > ul a {
    padding: 10px 0px;
    margin: 10px 10px 10px 0px;
}

.dropdown-menu {
    visibility: hidden;
    margin: 0;
    padding: 0;
    border-radius: 10px;
    display: block;
    z-index: 9000;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.125);
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.125);
}

.open .dropdown-menu {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
}

.select .dropdown-menu {
    border-radius: 0 0 10px 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transform-origin: 50% -40px;
    -moz-transform-origin: 50% -40px;
    -o-transform-origin: 50% -40px;
    -ms-transform-origin: 50% -40px;
    transform-origin: 50% -40px;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 150ms linear;
    -moz-transition: all 150ms linear;
    -o-transition: all 150ms linear;
    -ms-transition: all 150ms linear;
    transition: all 150ms linear;
    margin-top: -20px;
}

.select.open .dropdown-menu {
    margin-top: -1px;
}

.dropdown-menu > li > a {
    padding: 8px 16px;
    color: #333333;
}

.dropdown-menu > li > a img {
    margin-top: -3px;
}

.dropdown-menu > li > a:focus {
    outline: 0 !important;
}

.btn-group.select .dropdown-menu {
    min-width: 100%;
}

.dropdown-menu > li:first-child > a {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.dropdown-menu > li:last-child > a {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.select .dropdown-menu > li:first-child > a {
    border-radius: 0;
    border-bottom: 0 none;
}

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
    background-color: #F5F5F5;
    color: #333333;
    opacity: 1;
    text-decoration: none;
}

.dropdown-menu.dropdown-blue > li > a:hover,
.dropdown-menu.dropdown-blue > li > a:focus {
    background-color: rgba(52, 114, 247, 0.2);
}

.dropdown-menu.dropdown-azure > li > a:hover,
.dropdown-menu.dropdown-azure > li > a:focus {
    background-color: rgba(29, 199, 234, 0.2);
}

.dropdown-menu.ct-green > li > a:hover,
.dropdown-menu.ct-green > li > a:focus {
    background-color: rgba(135, 203, 22, 0.2);
}

.dropdown-menu.dropdown-orange > li > a:hover,
.dropdown-menu.dropdown-orange > li > a:focus {
    background-color: rgba(255, 149, 0, 0.2);
}

.dropdown-menu.dropdown-red > li > a:hover,
.dropdown-menu.dropdown-red > li > a:focus {
    background-color: rgba(255, 74, 85, 0.2);
}

.dropdown-with-icons > li > a {
    padding-left: 0px;
    line-height: 28px;
}

.dropdown-with-icons i {
    text-align: center;
    line-height: 28px;
    float: left;
}

.dropdown-with-icons i[class^=\"pe-\"] {
    font-size: 24px;
    width: 46px;
}

.dropdown-with-icons i[class^=\"fa\"] {
    font-size: 14px;
    width: 38px;
}

.btn-group.select {
    overflow: hidden;
}

.btn-group.select.open {
    overflow: visible;
}

.card {
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(63, 63, 68, 0.1);
    background-color: #FFFFFF;
    margin-bottom: 30px;
}

.card .image {
    width: 100%;
    overflow: hidden;
    height: 260px;
    border-radius: 4px 4px 0 0;
    position: relative;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.card .image img {
    width: 100%;
}

.card .filter {
    position: absolute;
    z-index: 2;
    background-color: rgba(0, 0, 0, 0.68);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    opacity: 0;
    filter: alpha(opacity=0);
}

.card .filter .btn {
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.card:hover .filter {
    opacity: 1;
    filter: alpha(opacity=100);
}

.card .btn-hover {
    opacity: 0;
    filter: alpha(opacity=0);
}

.card:hover .btn-hover {
    opacity: 1;
    filter: alpha(opacity=100);
}

.card .content {
    padding: 15px 15px 10px 15px;
}

.card .header {
    padding: 15px 15px 0;
}

.card .category,
.card label {
    font-size: 14px;
    font-weight: 400;
    color: #9A9A9A;
    margin-bottom: 0px;
}

.card .category i,
.card label i {
    font-size: 16px;
}

.card label {
    font-size: 12px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.card .title {
    margin: 0;
    color: #333333;
    font-weight: 300;
}

.card .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;
}

.card .description {
    font-size: 14px;
    color: #333;
}

.card .footer {
    padding: 0;
    background-color: transparent;
    line-height: 30px;
}

.card .footer .legend {
    padding: 5px 0;
}

.card .footer hr {
    margin-top: 5px;
    margin-bottom: 5px;
}

.card .stats {
    color: #a9a9a9;
}

.card .footer div {
    display: inline-block;
}

.card .author {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.card .author i {
    font-size: 14px;
}

.card h6 {
    font-size: 12px;
    margin: 0;
}

.card.card-separator:after {
    height: 100%;
    right: -15px;
    top: 0;
    width: 1px;
    background-color: #DDDDDD;
    content: \"\";
    position: absolute;
}

.card .ct-chart {
    margin: 30px 0 30px;
    height: 245px;
}

.card .table tbody td:first-child,
.card .table thead th:first-child {
    padding-left: 15px;
}

.card .table tbody td:last-child,
.card .table thead th:last-child {
    padding-right: 15px;
}

.card .alert {
    border-radius: 4px;
    position: relative;
}

.card .alert.alert-with-icon {
    padding-left: 65px;
}

.card-user .image {
    height: 110px;
}

.card-user .image-plain {
    height: 0;
    margin-top: 110px;
}

.card-user .author {
    text-align: center;
    text-transform: none;
    margin-top: -70px;
}

.card-user .avatar {
    width: 124px;
    height: 124px;
    border: 5px solid #FFFFFF;
    position: relative;
    margin-bottom: 15px;
}

.card-user .avatar.border-gray {
    border-color: #EEEEEE;
}

.card-user .title {
    line-height: 24px;
}

.card-user .content {
    min-height: 240px;
}

.card-user .footer,
.card-price .footer {
    padding: 5px 15px 10px;
}

.card-user hr,
.card-price hr {
    margin: 5px 15px;
}

.card-plain {
    background-color: transparent;
    box-shadow: none;
    border-radius: 0;
}

.card-plain .image {
    border-radius: 4px;
}

.ct-label {
    fill: rgba(0, 0, 0, 0.4);
    color: rgba(0, 0, 0, 0.4);
    font-size: 1.3rem;
    line-height: 1;
}

.ct-chart-line .ct-label,
.ct-chart-bar .ct-label {
    display: block;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}

.ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-label.ct-vertical.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: flex-end;
    justify-content: flex-end;
    text-align: right;
    text-anchor: end;
}

.ct-label.ct-vertical.ct-end {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar .ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    text-anchor: start;
}

.ct-chart-bar .ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-start {
    -webkit-box-align: flex-end;
    -webkit-align-items: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-horizontal.ct-end {
    -webkit-box-align: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: start;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-start {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: flex-end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: flex-end;
    justify-content: flex-end;
    text-align: right;
    text-anchor: end;
}

.ct-chart-bar.ct-horizontal-bars .ct-label.ct-vertical.ct-end {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: flex-start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: flex-start;
    justify-content: flex-start;
    text-align: left;
    text-anchor: end;
}

.ct-grid {
    stroke: rgba(0, 0, 0, 0.2);
    stroke-width: 1px;
    stroke-dasharray: 2px;
}

.ct-point {
    stroke-width: 8px;
    stroke-linecap: round;
}

.ct-line {
    fill: none;
    stroke-width: 3px;
}

.ct-area {
    stroke: none;
    fill-opacity: 0.8;
}

.ct-bar {
    fill: none;
    stroke-width: 10px;
}

.ct-slice-donut {
    fill: none;
    stroke-width: 60px;
}

.ct-series-a .ct-point, .ct-series-a .ct-line, .ct-series-a .ct-bar, .ct-series-a .ct-slice-donut {
    stroke: #1DC7EA;
}

.ct-series-a .ct-slice-pie, .ct-series-a .ct-area {
    fill: #1DC7EA;
}

.ct-series-b .ct-point, .ct-series-b .ct-line, .ct-series-b .ct-bar, .ct-series-b .ct-slice-donut {
    stroke: #FB404B;
}

.ct-series-b .ct-slice-pie, .ct-series-b .ct-area {
    fill: #FB404B;
}

.ct-series-c .ct-point, .ct-series-c .ct-line, .ct-series-c .ct-bar, .ct-series-c .ct-slice-donut {
    stroke: #FFA534;
}

.ct-series-c .ct-slice-pie, .ct-series-c .ct-area {
    fill: #FFA534;
}

.ct-series-d .ct-point, .ct-series-d .ct-line, .ct-series-d .ct-bar, .ct-series-d .ct-slice-donut {
    stroke: #9368E9;
}

.ct-series-d .ct-slice-pie, .ct-series-d .ct-area {
    fill: #9368E9;
}

.ct-series-e .ct-point, .ct-series-e .ct-line, .ct-series-e .ct-bar, .ct-series-e .ct-slice-donut {
    stroke: #87CB16;
}

.ct-series-e .ct-slice-pie, .ct-series-e .ct-area {
    fill: #87CB16;
}

.ct-series-f .ct-point, .ct-series-f .ct-line, .ct-series-f .ct-bar, .ct-series-f .ct-slice-donut {
    stroke: #1F77D0;
}

.ct-series-f .ct-slice-pie, .ct-series-f .ct-area {
    fill: #1F77D0;
}

.ct-series-g .ct-point, .ct-series-g .ct-line, .ct-series-g .ct-bar, .ct-series-g .ct-slice-donut {
    stroke: #5e5e5e;
}

.ct-series-g .ct-slice-pie, .ct-series-g .ct-area {
    fill: #5e5e5e;
}

.ct-series-h .ct-point, .ct-series-h .ct-line, .ct-series-h .ct-bar, .ct-series-h .ct-slice-donut {
    stroke: #dd4b39;
}

.ct-series-h .ct-slice-pie, .ct-series-h .ct-area {
    fill: #dd4b39;
}

.ct-series-i .ct-point, .ct-series-i .ct-line, .ct-series-i .ct-bar, .ct-series-i .ct-slice-donut {
    stroke: #35465c;
}

.ct-series-i .ct-slice-pie, .ct-series-i .ct-area {
    fill: #35465c;
}

.ct-series-j .ct-point, .ct-series-j .ct-line, .ct-series-j .ct-bar, .ct-series-j .ct-slice-donut {
    stroke: #e52d27;
}

.ct-series-j .ct-slice-pie, .ct-series-j .ct-area {
    fill: #e52d27;
}

.ct-series-k .ct-point, .ct-series-k .ct-line, .ct-series-k .ct-bar, .ct-series-k .ct-slice-donut {
    stroke: #55acee;
}

.ct-series-k .ct-slice-pie, .ct-series-k .ct-area {
    fill: #55acee;
}

.ct-series-l .ct-point, .ct-series-l .ct-line, .ct-series-l .ct-bar, .ct-series-l .ct-slice-donut {
    stroke: #cc2127;
}

.ct-series-l .ct-slice-pie, .ct-series-l .ct-area {
    fill: #cc2127;
}

.ct-series-m .ct-point, .ct-series-m .ct-line, .ct-series-m .ct-bar, .ct-series-m .ct-slice-donut {
    stroke: #1769ff;
}

.ct-series-m .ct-slice-pie, .ct-series-m .ct-area {
    fill: #1769ff;
}

.ct-series-n .ct-point, .ct-series-n .ct-line, .ct-series-n .ct-bar, .ct-series-n .ct-slice-donut {
    stroke: #6188e2;
}

.ct-series-n .ct-slice-pie, .ct-series-n .ct-area {
    fill: #6188e2;
}

.ct-series-o .ct-point, .ct-series-o .ct-line, .ct-series-o .ct-bar, .ct-series-o .ct-slice-donut {
    stroke: #a748ca;
}

.ct-series-o .ct-slice-pie, .ct-series-o .ct-area {
    fill: #a748ca;
}

.ct-square {
    display: block;
    position: relative;
    width: 100%;
}

.ct-square:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 100%;
}

.ct-square:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-square > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-second {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-second:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 93.75%;
}

.ct-minor-second:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-second {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-second:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 88.88889%;
}

.ct-major-second:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-second > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-third {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-third:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 83.33333%;
}

.ct-minor-third:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-third {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-third:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 80%;
}

.ct-major-third:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-third > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-perfect-fourth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-perfect-fourth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 75%;
}

.ct-perfect-fourth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-perfect-fourth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-perfect-fifth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-perfect-fifth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 66.66667%;
}

.ct-perfect-fifth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-perfect-fifth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-sixth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-sixth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 62.5%;
}

.ct-minor-sixth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-golden-section {
    display: block;
    position: relative;
    width: 100%;
}

.ct-golden-section:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 61.8047%;
}

.ct-golden-section:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-golden-section > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-sixth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-sixth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 60%;
}

.ct-major-sixth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-sixth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-minor-seventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-minor-seventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 56.25%;
}

.ct-minor-seventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-minor-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-seventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-seventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 53.33333%;
}

.ct-major-seventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-seventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-octave {
    display: block;
    position: relative;
    width: 100%;
}

.ct-octave:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 50%;
}

.ct-octave:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-tenth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-tenth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 40%;
}

.ct-major-tenth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-tenth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-eleventh {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-eleventh:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 37.5%;
}

.ct-major-eleventh:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-eleventh > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-major-twelfth {
    display: block;
    position: relative;
    width: 100%;
}

.ct-major-twelfth:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 33.33333%;
}

.ct-major-twelfth:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-major-twelfth > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.ct-double-octave {
    display: block;
    position: relative;
    width: 100%;
}

.ct-double-octave:before {
    display: block;
    float: left;
    content: \"\";
    width: 0;
    height: 0;
    padding-bottom: 25%;
}

.ct-double-octave:after {
    content: \"\";
    display: table;
    clear: both;
}

.ct-double-octave > svg {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

@media (min-width: 992px) {
    .navbar-form {
        margin-top: 21px;
        margin-bottom: 21px;
        padding-left: 5px;
        padding-right: 5px;
    }
    .navbar-nav > li > .dropdown-menu, .dropdown .dropdown-menu {
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -o-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -moz-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -o-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        -ms-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
        transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
    }
    .navbar-nav > li.open > .dropdown-menu, .dropdown.open .dropdown-menu {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 29px -50px;
        -moz-transform-origin: 29px -50px;
        -o-transform-origin: 29px -50px;
        -ms-transform-origin: 29px -50px;
        transform-origin: 29px -50px;
    }
    .sidebar .nav-mobile-menu {
        display: none;
    }
    .footer nav {
        margin-left: 15px;
    }
    .navbar-nav > li > .dropdown-menu:before {
        border-bottom: 11px solid rgba(0, 0, 0, 0.2);
        border-left: 11px solid transparent;
        border-right: 11px solid transparent;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 12px;
        top: -11px;
    }
    .navbar-nav > li > .dropdown-menu:after {
        border-bottom: 11px solid #FFFFFF;
        border-left: 11px solid transparent;
        border-right: 11px solid transparent;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 12px;
        top: -10px;
    }
    .navbar-nav.navbar-right > li > .dropdown-menu:before {
        left: auto;
        right: 12px;
    }
    .navbar-nav.navbar-right > li > .dropdown-menu:after {
        left: auto;
        right: 12px;
    }
    .footer:not(.footer-big) nav > ul li:first-child {
        margin-left: 0;
    }
    body > .navbar-collapse.collapse {
        display: none !important;
    }
    .card form [class*=\"col-\"] {
        padding: 6px;
    }
    .card form [class*=\"col-\"]:first-child {
        padding-left: 15px;
    }
    .card form [class*=\"col-\"]:last-child {
        padding-right: 15px;
    }
}

/*          Changes for small display      */
@media (max-width: 991px) {
    .main-panel {
        width: 100%;
    }
    .navbar-transparent {
        padding-top: 15px;
        background-color: rgba(0, 0, 0, 0.45);
    }
    body {
        position: relative;
    }
    .main-panel {
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        left: 0;
    }
    .navbar .container {
        left: 0;
        width: 100%;
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        position: relative;
    }
    .navbar .navbar-collapse.collapse,
    .navbar .navbar-collapse.collapse.in,
    .navbar .navbar-collapse.collapsing {
        display: none !important;
    }
    .navbar-nav > li {
        float: none;
        position: relative;
        display: block;
    }
    .navbar-collapse,
    .sidebar {
        position: fixed;
        display: block;
        top: 0;
        height: 100%;
        right: 0;
        left: auto;
        z-index: 1032;
        visibility: visible;
        background-color: #999;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        padding: 0;
        -webkit-transform: translate3d(260px, 0, 0);
        -moz-transform: translate3d(260px, 0, 0);
        -o-transform: translate3d(260px, 0, 0);
        -ms-transform: translate3d(260px, 0, 0);
        transform: translate3d(260px, 0, 0);
        -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }
    .navbar-collapse > ul,
    .sidebar > ul {
        position: relative;
        z-index: 4;
        overflow-y: scroll;
        height: calc(100vh - 61px);
        width: 100%;
    }
    .navbar-collapse::before,
    .sidebar::before {
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background-color: #282828;
        display: block;
        content: \"\";
        z-index: 1;
    }
    .navbar-collapse .logo,
    .sidebar .logo {
        position: relative;
        z-index: 4;
    }
    .navbar-collapse .nav li > a,
    .sidebar .nav li > a {
        padding: 10px 15px;
    }
    .navbar-collapse .nav,
    .sidebar .nav {
        margin-top: 10px;
    }
    .nav-open .navbar-collapse,
    .nav-open .sidebar {
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
    }
    .nav-open .navbar .container {
        left: -250px;
    }
    .nav-open .main-panel {
        left: 0;
        -webkit-transform: translate3d(-260px, 0, 0);
        -moz-transform: translate3d(-260px, 0, 0);
        -o-transform: translate3d(-260px, 0, 0);
        -ms-transform: translate3d(-260px, 0, 0);
        transform: translate3d(-260px, 0, 0);
    }
    .nav-open .menu-on-left .sidebar {
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
    }
    .nav-open .menu-on-left .main-panel {
        left: 0;
        -webkit-transform: translate3d(260px, 0, 0);
        -moz-transform: translate3d(260px, 0, 0);
        -o-transform: translate3d(260px, 0, 0);
        -ms-transform: translate3d(260px, 0, 0);
        transform: translate3d(260px, 0, 0);
    }
    .menu-on-left .sidebar {
        left: 0;
        right: auto;
        -webkit-transform: translate3d(-260px, 0, 0);
        -moz-transform: translate3d(-260px, 0, 0);
        -o-transform: translate3d(-260px, 0, 0);
        -ms-transform: translate3d(-260px, 0, 0);
        transform: translate3d(-260px, 0, 0);
    }
    .menu-on-left #bodyClick {
        right: 0;
        left: auto;
    }
    .navbar-toggle .icon-bar {
        display: block;
        position: relative;
        background: #fff;
        width: 24px;
        height: 2px;
        border-radius: 1px;
        margin: 0 auto;
    }
    .navbar-header .navbar-toggle {
        margin: 10px 15px 10px 0;
        width: 40px;
        height: 40px;
    }
    .bar1,
    .bar2,
    .bar3 {
        outline: 1px solid transparent;
    }
    .bar1 {
        top: 0px;
        -webkit-animation: topbar-back 500ms linear 0s;
        -moz-animation: topbar-back 500ms linear 0s;
        animation: topbar-back 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .bar2 {
        opacity: 1;
    }
    .bar3 {
        bottom: 0px;
        -webkit-animation: bottombar-back 500ms linear 0s;
        -moz-animation: bottombar-back 500ms linear 0s;
        animation: bottombar-back 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .toggled .bar1 {
        top: 6px;
        -webkit-animation: topbar-x 500ms linear 0s;
        -moz-animation: topbar-x 500ms linear 0s;
        animation: topbar-x 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    .toggled .bar2 {
        opacity: 0;
    }
    .toggled .bar3 {
        bottom: 6px;
        -webkit-animation: bottombar-x 500ms linear 0s;
        -moz-animation: bottombar-x 500ms linear 0s;
        animation: bottombar-x 500ms 0s;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    @keyframes topbar-x {
        0% {
            top: 0px;
            transform: rotate(0deg);
        }
        45% {
            top: 6px;
            transform: rotate(145deg);
        }
        75% {
            transform: rotate(130deg);
        }
        100% {
            transform: rotate(135deg);
        }
    }
    @-webkit-keyframes topbar-x {
        0% {
            top: 0px;
            -webkit-transform: rotate(0deg);
        }
        45% {
            top: 6px;
            -webkit-transform: rotate(145deg);
        }
        75% {
            -webkit-transform: rotate(130deg);
        }
        100% {
            -webkit-transform: rotate(135deg);
        }
    }
    @-moz-keyframes topbar-x {
        0% {
            top: 0px;
            -moz-transform: rotate(0deg);
        }
        45% {
            top: 6px;
            -moz-transform: rotate(145deg);
        }
        75% {
            -moz-transform: rotate(130deg);
        }
        100% {
            -moz-transform: rotate(135deg);
        }
    }
    @keyframes topbar-back {
        0% {
            top: 6px;
            transform: rotate(135deg);
        }
        45% {
            transform: rotate(-10deg);
        }
        75% {
            transform: rotate(5deg);
        }
        100% {
            top: 0px;
            transform: rotate(0);
        }
    }
    @-webkit-keyframes topbar-back {
        0% {
            top: 6px;
            -webkit-transform: rotate(135deg);
        }
        45% {
            -webkit-transform: rotate(-10deg);
        }
        75% {
            -webkit-transform: rotate(5deg);
        }
        100% {
            top: 0px;
            -webkit-transform: rotate(0);
        }
    }
    @-moz-keyframes topbar-back {
        0% {
            top: 6px;
            -moz-transform: rotate(135deg);
        }
        45% {
            -moz-transform: rotate(-10deg);
        }
        75% {
            -moz-transform: rotate(5deg);
        }
        100% {
            top: 0px;
            -moz-transform: rotate(0);
        }
    }
    @keyframes bottombar-x {
        0% {
            bottom: 0px;
            transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            transform: rotate(-145deg);
        }
        75% {
            transform: rotate(-130deg);
        }
        100% {
            transform: rotate(-135deg);
        }
    }
    @-webkit-keyframes bottombar-x {
        0% {
            bottom: 0px;
            -webkit-transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            -webkit-transform: rotate(-145deg);
        }
        75% {
            -webkit-transform: rotate(-130deg);
        }
        100% {
            -webkit-transform: rotate(-135deg);
        }
    }
    @-moz-keyframes bottombar-x {
        0% {
            bottom: 0px;
            -moz-transform: rotate(0deg);
        }
        45% {
            bottom: 6px;
            -moz-transform: rotate(-145deg);
        }
        75% {
            -moz-transform: rotate(-130deg);
        }
        100% {
            -moz-transform: rotate(-135deg);
        }
    }
    @keyframes bottombar-back {
        0% {
            bottom: 6px;
            transform: rotate(-135deg);
        }
        45% {
            transform: rotate(10deg);
        }
        75% {
            transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            transform: rotate(0);
        }
    }
    @-webkit-keyframes bottombar-back {
        0% {
            bottom: 6px;
            -webkit-transform: rotate(-135deg);
        }
        45% {
            -webkit-transform: rotate(10deg);
        }
        75% {
            -webkit-transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            -webkit-transform: rotate(0);
        }
    }
    @-moz-keyframes bottombar-back {
        0% {
            bottom: 6px;
            -moz-transform: rotate(-135deg);
        }
        45% {
            -moz-transform: rotate(10deg);
        }
        75% {
            -moz-transform: rotate(-5deg);
        }
        100% {
            bottom: 0px;
            -moz-transform: rotate(0);
        }
    }
    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @-moz-keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    .dropdown-menu .divider {
        background-color: rgba(229, 229, 229, 0.15);
    }
    .navbar-nav {
        margin: 1px 0;
        float: none !important;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        padding: 10px 15px 10px 60px;
        border-radius: 4px;
        color: inherit;
    }
    .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
        background-color: transparent;
    }
    [class*=\"navbar-\"] .navbar-nav > li > a,
    [class*=\"navbar-\"] .navbar-nav > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav > li > a:focus,
    [class*=\"navbar-\"] .navbar-nav .active > a,
    [class*=\"navbar-\"] .navbar-nav .active > a:hover,
    [class*=\"navbar-\"] .navbar-nav .active > a:focus,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:focus,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:active {
        color: white;
    }
    [class*=\"navbar-\"] .navbar-nav > li > a,
    [class*=\"navbar-\"] .navbar-nav > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav > li > a:focus {
        opacity: .7;
        background-color: transparent;
        outline: none;
    }
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:hover,
    [class*=\"navbar-\"] .navbar-nav .open .dropdown-menu > li > a:focus {
        background-color: rgba(255, 255, 255, 0.1);
    }
    [class*=\"navbar-\"] .navbar-nav.navbar-nav .open .dropdown-menu > li > a:active {
        opacity: 1;
    }
    [class*=\"navbar-\"] .navbar-nav .dropdown > a:hover .caret {
        border-bottom-color: #fff;
        border-top-color: #fff;
    }
    [class*=\"navbar-\"] .navbar-nav .dropdown > a:active .caret {
        border-bottom-color: white;
        border-top-color: white;
    }
    .dropdown-menu {
        display: none;
    }
    .navbar-fixed-top {
        -webkit-backface-visibility: hidden;
    }
    #bodyClick {
        height: 100%;
        width: calc(100% - 260px);
        position: fixed;
        opacity: 0;
        top: 0;
        left: 0;
        content: \"\";
        z-index: 9999;
        overflow-x: hidden;
    }
    .social-line .btn {
        margin: 0 0 10px 0;
    }
    .subscribe-line .form-control {
        margin: 0 0 10px 0;
    }
    .social-line.pull-right {
        float: none;
    }
    .footer nav.pull-left {
        float: none !important;
    }
    .footer:not(.footer-big) nav > ul li {
        float: none;
    }
    .social-area.pull-right {
        float: none !important;
    }
    .form-control + .form-control-feedback {
        margin-top: -8px;
    }
    .navbar-toggle:hover, .navbar-toggle:focus {
        background-color: transparent !important;
    }
    .btn.dropdown-toggle {
        margin-bottom: 0;
    }
    .media-post .author {
        width: 20%;
        float: none !important;
        display: block;
        margin: 0 auto 10px;
    }
    .media-post .media-body {
        width: 100%;
    }
    .navbar-collapse.collapse {
        height: 100% !important;
    }
    .navbar-collapse.collapse.in {
        display: block;
    }
    .navbar-header .collapse, .navbar-toggle {
        display: block !important;
    }
    .navbar-header {
        float: none;
    }
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-collapse .nav p {
        font-size: 14px;
        margin: 0;
    }
    .navbar-collapse [class^=\"pe-7s-\"] {
        float: left;
        font-size: 20px;
        margin-right: 10px;
    }
}

@media (min-width: 992px) {
    .table-full-width {
        margin-left: -15px;
        margin-right: -15px;
    }
    .table-responsive {
        overflow: visible;
    }
    .navbar-nav p {
        line-height: normal;
        margin: 0;
    }
}

@media (max-width: 991px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-x: scroll;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        -webkit-overflow-scrolling: touch;
    }
}
", "assets/light/css/light-bootstrap-dashboard.css", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/light/css/light-bootstrap-dashboard.css");
    }
}
