<?php

/* overall_header.html */
class __TwigTemplate_1d816c1b7c7de9f8192bedfb7145253950249c605177e8c8d68e286a17822307 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        echo $_META_;
        echo "
<title>";
        // line 8
        if (isset($context["UNREAD_NOTIFICATIONS_COUNT"])) { $_UNREAD_NOTIFICATIONS_COUNT_ = $context["UNREAD_NOTIFICATIONS_COUNT"]; } else { $_UNREAD_NOTIFICATIONS_COUNT_ = null; }
        if ($_UNREAD_NOTIFICATIONS_COUNT_) {
            echo "(";
            if (isset($context["UNREAD_NOTIFICATIONS_COUNT"])) { $_UNREAD_NOTIFICATIONS_COUNT_ = $context["UNREAD_NOTIFICATIONS_COUNT"]; } else { $_UNREAD_NOTIFICATIONS_COUNT_ = null; }
            echo $_UNREAD_NOTIFICATIONS_COUNT_;
            echo ") ";
        }
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (( !$_S_VIEWTOPIC_ &&  !$_S_VIEWFORUM_)) {
            if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
            echo $_SITENAME_;
            echo " - ";
        }
        if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
        if (isset($context["S_IN_UCP"])) { $_S_IN_UCP_ = $context["S_IN_UCP"]; } else { $_S_IN_UCP_ = null; }
        if ($_S_IN_MCP_) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ($_S_IN_UCP_) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (($_S_VIEWTOPIC_ || $_S_VIEWFORUM_)) {
            echo " - ";
            if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
            echo $_SITENAME_;
        }
        echo "</title>

";
        // line 10
        if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
        if ($_S_ENABLE_FEEDS_) {
            // line 11
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_OVERALL"])) { $_S_ENABLE_FEEDS_OVERALL_ = $context["S_ENABLE_FEEDS_OVERALL"]; } else { $_S_ENABLE_FEEDS_OVERALL_ = null; }
            if ($_S_ENABLE_FEEDS_OVERALL_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
                echo $_SITENAME_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "\">";
            }
            // line 12
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_NEWS"])) { $_S_ENABLE_FEEDS_NEWS_ = $context["S_ENABLE_FEEDS_NEWS"]; } else { $_S_ENABLE_FEEDS_NEWS_ = null; }
            if ($_S_ENABLE_FEEDS_NEWS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=news\">";
            }
            // line 13
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_FORUMS"])) { $_S_ENABLE_FEEDS_FORUMS_ = $context["S_ENABLE_FEEDS_FORUMS"]; } else { $_S_ENABLE_FEEDS_FORUMS_ = null; }
            if ($_S_ENABLE_FEEDS_FORUMS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=forums\">";
            }
            // line 14
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS"])) { $_S_ENABLE_FEEDS_TOPICS_ = $context["S_ENABLE_FEEDS_TOPICS"]; } else { $_S_ENABLE_FEEDS_TOPICS_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics\">";
            }
            // line 15
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"])) { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]; } else { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_ACTIVE_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics_active\">";
            }
            // line 16
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_FORUM"])) { $_S_ENABLE_FEEDS_FORUM_ = $context["S_ENABLE_FEEDS_FORUM"]; } else { $_S_ENABLE_FEEDS_FORUM_ = null; }
            if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
            if (($_S_ENABLE_FEEDS_FORUM_ && $_S_FORUM_ID_)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
                echo $_FORUM_NAME_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "\">";
            }
            // line 17
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPIC"])) { $_S_ENABLE_FEEDS_TOPIC_ = $context["S_ENABLE_FEEDS_TOPIC"]; } else { $_S_ENABLE_FEEDS_TOPIC_ = null; }
            if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
            if (($_S_ENABLE_FEEDS_TOPIC_ && $_S_TOPIC_ID_)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
                echo $_TOPIC_TITLE_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "&amp;t=";
                if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
                echo $_S_TOPIC_ID_;
                echo "\">";
            }
            // line 18
            echo "\t";
            if (isset($context["overall_header_feeds"])) { $_overall_header_feeds_ = $context["overall_header_feeds"]; } else { $_overall_header_feeds_ = null; }
        }
        // line 20
        echo "
";
        // line 21
        if (isset($context["U_CANONICAL"])) { $_U_CANONICAL_ = $context["U_CANONICAL"]; } else { $_U_CANONICAL_ = null; }
        if ($_U_CANONICAL_) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            if (isset($context["U_CANONICAL"])) { $_U_CANONICAL_ = $context["U_CANONICAL"]; } else { $_U_CANONICAL_ = null; }
            echo $_U_CANONICAL_;
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

";
        // line 32
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "<link href=\"";
        if (isset($context["T_STYLESHEET_LINK"])) { $_T_STYLESHEET_LINK_ = $context["T_STYLESHEET_LINK"]; } else { $_T_STYLESHEET_LINK_ = null; }
        echo $_T_STYLESHEET_LINK_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 49
        if (isset($context["T_STYLESHEET_LANG_LINK"])) { $_T_STYLESHEET_LANG_LINK_ = $context["T_STYLESHEET_LANG_LINK"]; } else { $_T_STYLESHEET_LANG_LINK_ = null; }
        echo $_T_STYLESHEET_LANG_LINK_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/responsive.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">

";
        // line 52
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        if (($_S_CONTENT_DIRECTION_ == "rtl")) {
            // line 53
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/bidi.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 55
        echo "
";
        // line 56
        if (isset($context["S_PLUPLOAD"])) { $_S_PLUPLOAD_ = $context["S_PLUPLOAD"]; } else { $_S_PLUPLOAD_ = null; }
        if ($_S_PLUPLOAD_) {
            // line 57
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/plupload.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 59
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 61
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/tweaks.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 64
        if (isset($context["overall_header_head_append"])) { $_overall_header_head_append_ = $context["overall_header_head_append"]; } else { $_overall_header_head_append_ = null; }
        // line 65
        echo "
";
        // line 66
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "

";
        // line 68
        if (isset($context["overall_header_stylesheets_after"])) { $_overall_header_stylesheets_after_ = $context["overall_header_stylesheets_after"]; } else { $_overall_header_stylesheets_after_ = null; }
        // line 69
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 71
        if (isset($context["SCRIPT_NAME"])) { $_SCRIPT_NAME_ = $context["SCRIPT_NAME"]; } else { $_SCRIPT_NAME_ = null; }
        echo $_SCRIPT_NAME_;
        echo " ";
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo "\">

";
        // line 73
        if (isset($context["overall_header_body_before"])) { $_overall_header_body_before_ = $context["overall_header_body_before"]; } else { $_overall_header_body_before_ = null; }
        // line 74
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t";
        // line 79
        if (isset($context["overall_header_headerbar_before"])) { $_overall_header_headerbar_before_ = $context["overall_header_headerbar_before"]; } else { $_overall_header_headerbar_before_ = null; }
        // line 80
        echo "\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 83
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
        } else {
            if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
            echo $_U_INDEX_;
        }
        echo "\" title=\"";
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\">";
        if (isset($context["SITE_LOGO_IMG"])) { $_SITE_LOGO_IMG_ = $context["SITE_LOGO_IMG"]; } else { $_SITE_LOGO_IMG_ = null; }
        echo $_SITE_LOGO_IMG_;
        echo "</a>
\t\t\t\t<h1>";
        // line 84
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "</h1>
\t\t\t\t<p>";
        // line 85
        if (isset($context["SITE_DESCRIPTION"])) { $_SITE_DESCRIPTION_ = $context["SITE_DESCRIPTION"]; } else { $_SITE_DESCRIPTION_ = null; }
        echo $_SITE_DESCRIPTION_;
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 89
        if (isset($context["overall_header_searchbox_before"])) { $_overall_header_searchbox_before_ = $context["overall_header_searchbox_before"]; } else { $_overall_header_searchbox_before_ = null; }
        // line 90
        echo "\t\t\t";
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if (isset($context["S_IN_SEARCH"])) { $_S_IN_SEARCH_ = $context["S_IN_SEARCH"]; } else { $_S_IN_SEARCH_ = null; }
        if (($_S_DISPLAY_SEARCH_ &&  !$_S_IN_SEARCH_)) {
            // line 91
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 92
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
            echo $_SEARCH_WORDS_;
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 96
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 97
            if (isset($context["S_SEARCH_HIDDEN_FIELDS"])) { $_S_SEARCH_HIDDEN_FIELDS_ = $context["S_SEARCH_HIDDEN_FIELDS"]; } else { $_S_SEARCH_HIDDEN_FIELDS_ = null; }
            echo $_S_SEARCH_HIDDEN_FIELDS_;
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 102
        echo "\t\t\t";
        if (isset($context["overall_header_searchbox_after"])) { $_overall_header_searchbox_after_ = $context["overall_header_searchbox_after"]; } else { $_overall_header_searchbox_after_ = null; }
        // line 103
        echo "
\t\t\t</div>
\t\t\t";
        // line 105
        if (isset($context["overall_header_headerbar_after"])) { $_overall_header_headerbar_after_ = $context["overall_header_headerbar_after"]; } else { $_overall_header_headerbar_after_ = null; }
        // line 106
        echo "\t\t</div>
\t\t";
        // line 107
        if (isset($context["overall_header_navbar_before"])) { $_overall_header_navbar_before_ = $context["overall_header_navbar_before"]; } else { $_overall_header_navbar_before_ = null; }
        // line 108
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 108)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 109
        echo "\t</div>

\t";
        // line 111
        if (isset($context["overall_header_page_body_before"])) { $_overall_header_page_body_before_ = $context["overall_header_page_body_before"]; } else { $_overall_header_page_body_before_ = null; }
        // line 112
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 115
        if (isset($context["S_BOARD_DISABLED"])) { $_S_BOARD_DISABLED_ = $context["S_BOARD_DISABLED"]; } else { $_S_BOARD_DISABLED_ = null; }
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ((($_S_BOARD_DISABLED_ && $_S_USER_LOGGED_IN_) && ($_U_MCP_ || $_U_ACP_))) {
            // line 116
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 122
        echo "
\t\t";
        // line 123
        if (isset($context["overall_header_content_before"])) { $_overall_header_content_before_ = $context["overall_header_content_before"]; } else { $_overall_header_content_before_ = null; }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 123,  486 => 122,  476 => 118,  472 => 116,  466 => 115,  461 => 112,  459 => 111,  455 => 109,  442 => 108,  440 => 107,  437 => 106,  435 => 105,  431 => 103,  428 => 102,  419 => 97,  410 => 96,  404 => 95,  395 => 94,  389 => 92,  386 => 91,  381 => 90,  379 => 89,  373 => 86,  368 => 85,  363 => 84,  342 => 83,  337 => 80,  335 => 79,  328 => 74,  326 => 73,  314 => 71,  310 => 69,  308 => 68,  302 => 66,  299 => 65,  297 => 64,  287 => 61,  283 => 59,  273 => 57,  270 => 56,  267 => 55,  257 => 53,  254 => 52,  245 => 50,  240 => 49,  234 => 48,  217 => 33,  214 => 32,  204 => 24,  197 => 22,  194 => 21,  191 => 20,  187 => 18,  164 => 17,  144 => 16,  131 => 15,  118 => 14,  105 => 13,  92 => 12,  78 => 11,  75 => 10,  39 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* {META}*/
/* <title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF --></title>*/
/* */
/* <!-- IF S_ENABLE_FEEDS -->*/
/* 	<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{U_FEED}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{U_FEED}?mode=news"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{U_FEED}?mode=forums"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{U_FEED}?mode=topics"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{U_FEED}?mode=topics_active"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{U_FEED}?f={S_FORUM_ID}"><!-- ENDIF -->*/
/* 	<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}"><!-- ENDIF -->*/
/* 	<!-- EVENT overall_header_feeds -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF U_CANONICAL -->*/
/* 	<link rel="canonical" href="{U_CANONICAL}">*/
/* <!-- ENDIF -->*/
/* */
/* <!--*/
/* 	phpBB style name: prosilver*/
/* 	Based on style:   prosilver (this is the default phpBB3 style)*/
/* 	Original author:  Tom Beddard ( http://www.subBlue.com/ )*/
/* 	Modified by:*/
/* -->*/
/* */
/* <!-- IF S_ALLOW_CDN -->*/
/* <script>*/
/* 	WebFontConfig = {*/
/* 		google: {*/
/* 			families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 		}*/
/* 	};*/
/* */
/* 	(function(d) {*/
/* 		var wf = d.createElement('script'), s = d.scripts[0];*/
/* 		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 		wf.async = true;*/
/* 		s.parentNode.insertBefore(wf, s);*/
/* 	})(document);*/
/* </script>*/
/* <!-- ENDIF -->*/
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* <link href="{T_STYLESHEET_LANG_LINK}" rel="stylesheet">*/
/* <link href="{T_THEME_PATH}/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* */
/* <!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{T_THEME_PATH}/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_PLUPLOAD -->*/
/* 	<link href="{T_THEME_PATH}/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!--[if lte IE 9]>*/
/* 	<link href="{T_THEME_PATH}/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <![endif]-->*/
/* */
/* <!-- EVENT overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* </head>*/
/* <body id="phpbb" class="nojs notouch section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* <!-- EVENT overall_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* 	<div id="page-header">*/
/* 		<div class="headerbar" role="banner">*/
/* 		<!-- EVENT overall_header_headerbar_before -->*/
/* 			<div class="inner">*/
/* */
/* 			<div id="site-description">*/
/* 				<a id="logo" class="logo" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->">{SITE_LOGO_IMG}</a>*/
/* 				<h1>{SITENAME}</h1>*/
/* 				<p>{SITE_DESCRIPTION}</p>*/
/* 				<p class="skiplink"><a href="#start_here">{L_SKIP}</a></p>*/
/* 			</div>*/
/* */
/* 			<!-- EVENT overall_header_searchbox_before -->*/
/* 			<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<div id="search-box" class="search-box search-header" role="search">*/
/* 				<form action="{U_SEARCH}" method="get" id="search">*/
/* 				<fieldset>*/
/* 					<input name="keywords" id="keywords" type="search" maxlength="128" title="{L_SEARCH_KEYWORDS}" class="inputbox search tiny" size="20" value="{SEARCH_WORDS}" placeholder="{L_SEARCH_MINI}" />*/
/* 					<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 					<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 					{S_SEARCH_HIDDEN_FIELDS}*/
/* 				</fieldset>*/
/* 				</form>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT overall_header_searchbox_after -->*/
/* */
/* 			</div>*/
/* 			<!-- EVENT overall_header_headerbar_after -->*/
/* 		</div>*/
/* 		<!-- EVENT overall_header_navbar_before -->*/
/* 		<!-- INCLUDE navbar_header.html -->*/
/* 	</div>*/
/* */
/* 	<!-- EVENT overall_header_page_body_before -->*/
/* */
/* 	<a id="start_here" class="anchor"></a>*/
/* 	<div id="page-body" role="main">*/
/* 		<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 		<div id="information" class="rules">*/
/* 			<div class="inner">*/
/* 				<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_content_before -->*/
/* */
