<?php

/* overall_header.html */
class __TwigTemplate_fcec11218b8b601ac9bb560bc96aa14ac2ad583681087268692fad663a25a100 extends Twig_Template
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
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
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
\tphpBB style name: we_clearblue
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      nextgen ( http://xeronix.org/ )
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
        echo "
<link href=\"";
        // line 49
        if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
        echo $_ROOT_PATH_;
        echo "styles/prosilver/theme/stylesheet.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        if (isset($context["T_STYLESHEET_LINK"])) { $_T_STYLESHEET_LINK_ = $context["T_STYLESHEET_LINK"]; } else { $_T_STYLESHEET_LINK_ = null; }
        echo $_T_STYLESHEET_LINK_;
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
        echo $_ROOT_PATH_;
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">
<link href=\"";
        // line 52
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/responsive.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">

";
        // line 54
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        if (($_S_CONTENT_DIRECTION_ == "rtl")) {
            // line 55
            echo "\t<link href=\"";
            if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
            echo $_ROOT_PATH_;
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 57
        echo "
";
        // line 58
        if (isset($context["S_PLUPLOAD"])) { $_S_PLUPLOAD_ = $context["S_PLUPLOAD"]; } else { $_S_PLUPLOAD_ = null; }
        if ($_S_PLUPLOAD_) {
            // line 59
            echo "\t<link href=\"";
            if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
            echo $_ROOT_PATH_;
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 61
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 63
        if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
        echo $_ROOT_PATH_;
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 66
        if (isset($context["overall_header_head_append"])) { $_overall_header_head_append_ = $context["overall_header_head_append"]; } else { $_overall_header_head_append_ = null; }
        // line 67
        echo "
";
        // line 68
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "

";
        // line 70
        if (isset($context["overall_header_stylesheets_after"])) { $_overall_header_stylesheets_after_ = $context["overall_header_stylesheets_after"]; } else { $_overall_header_stylesheets_after_ = null; }
        // line 71
        echo "
<!--[if lt IE 9]>
\t<script type=\"text/javascript\" src=\"";
        // line 73
        if (isset($context["T_TEMPLATE_PATH"])) { $_T_TEMPLATE_PATH_ = $context["T_TEMPLATE_PATH"]; } else { $_T_TEMPLATE_PATH_ = null; }
        echo $_T_TEMPLATE_PATH_;
        echo "/html5shiv.min.js\"></script>
<![endif]-->

</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 77
        if (isset($context["SCRIPT_NAME"])) { $_SCRIPT_NAME_ = $context["SCRIPT_NAME"]; } else { $_SCRIPT_NAME_ = null; }
        echo $_SCRIPT_NAME_;
        echo " ";
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            echo " logged-in";
        } else {
            echo " logged-out";
        }
        echo "\">

";
        // line 79
        if (isset($context["overall_header_body_before"])) { $_overall_header_body_before_ = $context["overall_header_body_before"]; } else { $_overall_header_body_before_ = null; }
        // line 80
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>

\t<div class=\"inventea-wrapper\">
\t\t<nav class=\"inventea-user-bar\">
\t\t\t";
        // line 86
        $location = "navbar_responsive_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_responsive_header.html", "overall_header.html", 86)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 87
        echo "
\t\t\t";
        // line 88
        if (isset($context["overall_header_searchbox_before"])) { $_overall_header_searchbox_before_ = $context["overall_header_searchbox_before"]; } else { $_overall_header_searchbox_before_ = null; }
        // line 89
        echo "
\t\t\t<ul class=\"linklist bulletin inventea-user-menu\" role=\"menubar\">
\t\t\t\t";
        // line 91
        if (isset($context["navbar_header_quick_links_before"])) { $_navbar_header_quick_links_before_ = $context["navbar_header_quick_links_before"]; } else { $_navbar_header_quick_links_before_ = null; }
        // line 92
        echo "
\t\t\t\t";
        // line 93
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 94
            echo "\t\t\t\t\t";
            if (isset($context["navbar_header_user_profile_prepend"])) { $_navbar_header_user_profile_prepend_ = $context["navbar_header_user_profile_prepend"]; } else { $_navbar_header_user_profile_prepend_ = null; }
            // line 95
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
            if ($_CURRENT_USER_AVATAR_) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 96
            if (isset($context["navbar_header_username_prepend"])) { $_navbar_header_username_prepend_ = $context["navbar_header_username_prepend"]; } else { $_navbar_header_username_prepend_ = null; }
            // line 97
            echo "\t\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 98
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
            if ($_CURRENT_USER_AVATAR_) {
                if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
                echo $_CURRENT_USER_AVATAR_;
            } else {
                echo "<img src=\"";
                if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
                echo $_T_THEME_PATH_;
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            echo " ";
            if (isset($context["CURRENT_USERNAME_SIMPLE"])) { $_CURRENT_USERNAME_SIMPLE_ = $context["CURRENT_USERNAME_SIMPLE"]; } else { $_CURRENT_USERNAME_SIMPLE_ = null; }
            echo $_CURRENT_USERNAME_SIMPLE_;
            echo "</a>
\t\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t\t";
            // line 102
            if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
            if ($_U_RESTORE_PERMISSIONS_) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
                echo $_U_RESTORE_PERMISSIONS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 103
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 104
            if (isset($context["navbar_header_profile_list_before"])) { $_navbar_header_profile_list_before_ = $context["navbar_header_profile_list_before"]; } else { $_navbar_header_profile_list_before_ = null; }
            // line 105
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 106
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 107
            if (isset($context["U_USER_PROFILE"])) { $_U_USER_PROFILE_ = $context["U_USER_PROFILE"]; } else { $_U_USER_PROFILE_ = null; }
            echo $_U_USER_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t\t\t\t";
            // line 109
            if (isset($context["navbar_header_profile_list_after"])) { $_navbar_header_profile_list_after_ = $context["navbar_header_profile_list_after"]; } else { $_navbar_header_profile_list_after_ = null; }
            // line 110
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 112
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 116
            if (isset($context["navbar_header_username_append"])) { $_navbar_header_username_append_ = $context["navbar_header_username_append"]; } else { $_navbar_header_username_append_ = null; }
            // line 117
            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 118
            if (isset($context["S_DISPLAY_PM"])) { $_S_DISPLAY_PM_ = $context["S_DISPLAY_PM"]; } else { $_S_DISPLAY_PM_ = null; }
            if ($_S_DISPLAY_PM_) {
                // line 119
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 120
                if (isset($context["U_PRIVATEMSGS"])) { $_U_PRIVATEMSGS_ = $context["U_PRIVATEMSGS"]; } else { $_U_PRIVATEMSGS_ = null; }
                echo $_U_PRIVATEMSGS_;
                echo "\" role=\"menuitem\"><span class=\"responsive-hide\">";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "</span><span class=\"hidden responsive-show-inline\">";
                echo $this->env->getExtension('phpbb')->lang("PM");
                echo "</span> ";
                if (isset($context["PRIVATE_MESSAGE_COUNT"])) { $_PRIVATE_MESSAGE_COUNT_ = $context["PRIVATE_MESSAGE_COUNT"]; } else { $_PRIVATE_MESSAGE_COUNT_ = null; }
                if (($_PRIVATE_MESSAGE_COUNT_ > 0)) {
                    echo " (<strong>";
                    if (isset($context["PRIVATE_MESSAGE_COUNT"])) { $_PRIVATE_MESSAGE_COUNT_ = $context["PRIVATE_MESSAGE_COUNT"]; } else { $_PRIVATE_MESSAGE_COUNT_ = null; }
                    echo $_PRIVATE_MESSAGE_COUNT_;
                    echo "</strong>)";
                }
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t";
            if (isset($context["S_NOTIFICATIONS_DISPLAY"])) { $_S_NOTIFICATIONS_DISPLAY_ = $context["S_NOTIFICATIONS_DISPLAY"]; } else { $_S_NOTIFICATIONS_DISPLAY_ = null; }
            if ($_S_NOTIFICATIONS_DISPLAY_) {
                // line 124
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 125
                if (isset($context["U_VIEW_ALL_NOTIFICATIONS"])) { $_U_VIEW_ALL_NOTIFICATIONS_ = $context["U_VIEW_ALL_NOTIFICATIONS"]; } else { $_U_VIEW_ALL_NOTIFICATIONS_ = null; }
                echo $_U_VIEW_ALL_NOTIFICATIONS_;
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                if (isset($context["NOTIFICATIONS_COUNT"])) { $_NOTIFICATIONS_COUNT_ = $context["NOTIFICATIONS_COUNT"]; } else { $_NOTIFICATIONS_COUNT_ = null; }
                if (($_NOTIFICATIONS_COUNT_ > 0)) {
                    echo " (<strong>";
                    if (isset($context["NOTIFICATIONS_COUNT"])) { $_NOTIFICATIONS_COUNT_ = $context["NOTIFICATIONS_COUNT"]; } else { $_NOTIFICATIONS_COUNT_ = null; }
                    echo $_NOTIFICATIONS_COUNT_;
                    echo "</strong>)";
                }
                echo "</a>
\t\t\t\t\t\t\t";
                // line 126
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 126)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 127
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t";
            if (isset($context["navbar_header_user_profile_append"])) { $_navbar_header_user_profile_append_ = $context["navbar_header_user_profile_append"]; } else { $_navbar_header_user_profile_append_ = null; }
            // line 130
            echo "\t\t\t\t";
        } else {
            // line 131
            echo "\t\t\t\t\t<li class=\"small-icon icon-logout rightside\" data-skip-responsive=\"true\"><a href=\"";
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 132
            if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
            if (isset($context["S_SHOW_COPPA"])) { $_S_SHOW_COPPA_ = $context["S_SHOW_COPPA"]; } else { $_S_SHOW_COPPA_ = null; }
            if (isset($context["S_REGISTRATION"])) { $_S_REGISTRATION_ = $context["S_REGISTRATION"]; } else { $_S_REGISTRATION_ = null; }
            if (($_S_REGISTER_ENABLED_ &&  !($_S_SHOW_COPPA_ || $_S_REGISTRATION_))) {
                // line 133
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                echo $_U_REGISTER_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t";
            if (isset($context["navbar_header_logged_out_content"])) { $_navbar_header_logged_out_content_ = $context["navbar_header_logged_out_content"]; } else { $_navbar_header_logged_out_content_ = null; }
            // line 136
            echo "\t\t\t\t";
        }
        // line 137
        echo "
\t\t\t\t";
        // line 138
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            // line 139
            echo "\t\t\t\t\t";
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if ($_S_USER_LOGGED_IN_) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                echo $_U_SEARCH_NEW_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 140
            echo "\t\t\t\t\t";
            if (isset($context["S_LOAD_UNREADS"])) { $_S_LOAD_UNREADS_ = $context["S_LOAD_UNREADS"]; } else { $_S_LOAD_UNREADS_ = null; }
            if ($_S_LOAD_UNREADS_) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                if (isset($context["U_SEARCH_UNREAD"])) { $_U_SEARCH_UNREAD_ = $context["U_SEARCH_UNREAD"]; } else { $_U_SEARCH_UNREAD_ = null; }
                echo $_U_SEARCH_UNREAD_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 141
            echo "\t\t\t\t\t";
            if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
            if ($_S_REGISTERED_USER_) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                if (isset($context["U_SEARCH_SELF"])) { $_U_SEARCH_SELF_ = $context["U_SEARCH_SELF"]; } else { $_U_SEARCH_SELF_ = null; }
                echo $_U_SEARCH_SELF_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 142
            echo "\t\t\t\t";
        }
        // line 143
        echo "
\t\t\t\t";
        // line 144
        if (isset($context["navbar_header_quick_links_after"])) { $_navbar_header_quick_links_after_ = $context["navbar_header_quick_links_after"]; } else { $_navbar_header_quick_links_after_ = null; }
        // line 145
        echo "
\t\t\t\t<li class=\"small-icon leftside\">";
        // line 146
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            if (isset($context["LAST_VISIT_DATE"])) { $_LAST_VISIT_DATE_ = $context["LAST_VISIT_DATE"]; } else { $_LAST_VISIT_DATE_ = null; }
            echo $_LAST_VISIT_DATE_;
        } else {
            if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
            echo $_CURRENT_TIME_;
        }
        echo "</li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<header class=\"inventea-header\">
\t\t<div class=\"inventea-dashboard\" role=\"banner\">
\t\t";
        // line 153
        if (isset($context["overall_header_headerbar_before"])) { $_overall_header_headerbar_before_ = $context["overall_header_headerbar_before"]; } else { $_overall_header_headerbar_before_ = null; }
        echo "\t\t
\t\t\t<div class=\"inventea-sitename\">
\t\t\t\t<h1><a href=\"";
        // line 155
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
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "</a></h1>
\t\t\t\t<span>";
        // line 156
        if (isset($context["SITE_DESCRIPTION"])) { $_SITE_DESCRIPTION_ = $context["SITE_DESCRIPTION"]; } else { $_SITE_DESCRIPTION_ = null; }
        echo $_SITE_DESCRIPTION_;
        echo "</span>
\t\t\t</div>
\t\t";
        // line 158
        if (isset($context["overall_header_headerbar_after"])) { $_overall_header_headerbar_after_ = $context["overall_header_headerbar_after"]; } else { $_overall_header_headerbar_after_ = null; }
        // line 159
        echo "\t\t</div>
\t</header>

\t<div class=\"inventea-wrapper\">
\t\t<div class=\"inventea-forum-bar\">
\t\t\t";
        // line 164
        if (isset($context["overall_header_navbar_before"])) { $_overall_header_navbar_before_ = $context["overall_header_navbar_before"]; } else { $_overall_header_navbar_before_ = null; }
        // line 165
        echo "\t\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 165)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 166
        echo "\t\t</div>

\t\t<div class=\"inventea-content\" role=\"main\">
\t\t\t";
        // line 169
        if (isset($context["overall_header_page_body_before"])) { $_overall_header_page_body_before_ = $context["overall_header_page_body_before"]; } else { $_overall_header_page_body_before_ = null; }
        // line 170
        echo "
\t\t\t<ul id=\"nav-breadcrumbs\" class=\"linklist\" role=\"menubar\">
\t\t\t\t";
        // line 172
        if (isset($context["MICRODATA"])) { $_MICRODATA_ = $context["MICRODATA"]; } else { $_MICRODATA_ = null; }
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 173
        echo "\t\t\t\t";
        if (isset($context["overall_header_breadcrumbs_before"])) { $_overall_header_breadcrumbs_before_ = $context["overall_header_breadcrumbs_before"]; } else { $_overall_header_breadcrumbs_before_ = null; }
        // line 174
        echo "\t\t\t\t<li class=\"small-icon icon-home inventea-breadcrumbs\" data-skip-responsive=\"true\">
\t\t\t\t\t";
        // line 175
        echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
        echo ": ";
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<span class=\"crumb\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA", array());
            echo "><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 176
        echo "\t\t\t\t\t";
        if (isset($context["overall_header_breadcrumb_prepend"])) { $_overall_header_breadcrumb_prepend_ = $context["overall_header_breadcrumb_prepend"]; } else { $_overall_header_breadcrumb_prepend_ = null; }
        // line 177
        echo "\t\t\t\t\t<span class=\"crumb\"";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "MICRODATA", array());
        echo "><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t\t\t";
        // line 178
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 179
            echo "\t\t\t\t\t\t";
            if (isset($context["overall_header_navlink_prepend"])) { $_overall_header_navlink_prepend_ = $context["overall_header_navlink_prepend"]; } else { $_overall_header_navlink_prepend_ = null; }
            // line 180
            echo "\t\t\t\t\t\t<span class=\"crumb\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA", array());
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            if ($this->getAttribute($_navlinks_, "MICRODATA", array())) {
                echo " ";
                if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
                echo $this->getAttribute($_navlinks_, "MICRODATA", array());
            }
            echo "><a href=\"";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t\t\t";
            // line 181
            if (isset($context["overall_header_navlink_append"])) { $_overall_header_navlink_append_ = $context["overall_header_navlink_append"]; } else { $_overall_header_navlink_append_ = null; }
            // line 182
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t\t\t\t\t";
        if (isset($context["overall_header_breadcrumb_append"])) { $_overall_header_breadcrumb_append_ = $context["overall_header_breadcrumb_append"]; } else { $_overall_header_breadcrumb_append_ = null; }
        // line 184
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 185
        if (isset($context["overall_header_breadcrumbs_after"])) { $_overall_header_breadcrumbs_after_ = $context["overall_header_breadcrumbs_after"]; } else { $_overall_header_breadcrumbs_after_ = null; }
        // line 186
        echo "\t\t\t</ul>

\t\t\t";
        // line 188
        if (isset($context["S_BOARD_DISABLED"])) { $_S_BOARD_DISABLED_ = $context["S_BOARD_DISABLED"]; } else { $_S_BOARD_DISABLED_ = null; }
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ((($_S_BOARD_DISABLED_ && $_S_USER_LOGGED_IN_) && ($_U_MCP_ || $_U_ACP_))) {
            // line 189
            echo "\t\t\t\t<div id=\"information\" class=\"rules\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<strong>";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 195
        echo "
\t\t\t";
        // line 196
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
        return array (  833 => 196,  830 => 195,  820 => 191,  816 => 189,  810 => 188,  806 => 186,  804 => 185,  801 => 184,  798 => 183,  792 => 182,  790 => 181,  772 => 180,  769 => 179,  764 => 178,  753 => 177,  750 => 176,  735 => 175,  732 => 174,  729 => 173,  725 => 172,  721 => 170,  719 => 169,  714 => 166,  701 => 165,  699 => 164,  692 => 159,  690 => 158,  684 => 156,  663 => 155,  658 => 153,  641 => 146,  638 => 145,  636 => 144,  633 => 143,  630 => 142,  619 => 141,  608 => 140,  597 => 139,  594 => 138,  591 => 137,  588 => 136,  585 => 135,  576 => 133,  571 => 132,  561 => 131,  558 => 130,  555 => 129,  551 => 127,  539 => 126,  525 => 125,  519 => 124,  515 => 123,  496 => 120,  493 => 119,  490 => 118,  487 => 117,  485 => 116,  473 => 112,  469 => 110,  467 => 109,  457 => 107,  448 => 106,  445 => 105,  443 => 104,  440 => 103,  430 => 102,  408 => 98,  405 => 97,  403 => 96,  395 => 95,  392 => 94,  389 => 93,  386 => 92,  384 => 91,  380 => 89,  378 => 88,  375 => 87,  363 => 86,  355 => 80,  353 => 79,  335 => 77,  327 => 73,  323 => 71,  321 => 70,  315 => 68,  312 => 67,  310 => 66,  300 => 63,  296 => 61,  286 => 59,  283 => 58,  280 => 57,  270 => 55,  267 => 54,  258 => 52,  250 => 51,  245 => 50,  237 => 49,  234 => 48,  217 => 33,  214 => 32,  204 => 24,  197 => 22,  194 => 21,  191 => 20,  187 => 18,  164 => 17,  144 => 16,  131 => 15,  118 => 14,  105 => 13,  92 => 12,  78 => 11,  75 => 10,  39 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
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
/* 	phpBB style name: we_clearblue*/
/* 	Based on style:   prosilver (this is the default phpBB3 style)*/
/* 	Original author:  Tom Beddard ( http://www.subBlue.com/ )*/
/* 	Modified by:      nextgen ( http://xeronix.org/ )*/
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
/* */
/* <link href="{ROOT_PATH}styles/prosilver/theme/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* <link href="{T_THEME_PATH}/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* */
/* <!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_PLUPLOAD -->*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!--[if lte IE 9]>*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <![endif]-->*/
/* */
/* <!-- EVENT overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* <!--[if lt IE 9]>*/
/* 	<script type="text/javascript" src="{T_TEMPLATE_PATH}/html5shiv.min.js"></script>*/
/* <![endif]-->*/
/* */
/* </head>*/
/* <body id="phpbb" class="nojs notouch section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}<!-- IF S_USER_LOGGED_IN --> logged-in<!-- ELSE --> logged-out<!-- ENDIF -->">*/
/* */
/* <!-- EVENT overall_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* */
/* 	<div class="inventea-wrapper">*/
/* 		<nav class="inventea-user-bar">*/
/* 			<!-- INCLUDE navbar_responsive_header.html -->*/
/* */
/* 			<!-- EVENT overall_header_searchbox_before -->*/
/* */
/* 			<ul class="linklist bulletin inventea-user-menu" role="menubar">*/
/* 				<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 				<!-- IF S_REGISTERED_USER -->*/
/* 					<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 					<li id="username_logged_in" class="rightside <!-- IF CURRENT_USER_AVATAR --> no-bulletin<!-- ENDIF -->" data-skip-responsive="true">*/
/* 						<!-- EVENT navbar_header_username_prepend -->*/
/* 						<div class="header-profile dropdown-container">*/
/* 							<a href="{U_PROFILE}" class="header-avatar dropdown-trigger"><!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" /><!-- ENDIF --> {CURRENT_USERNAME_SIMPLE}</a>*/
/* 							<div class="dropdown hidden">*/
/* 								<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 								<ul class="dropdown-contents" role="menu">*/
/* 									<!-- IF U_RESTORE_PERMISSIONS --><li class="small-icon icon-restore-permissions"><a href="{U_RESTORE_PERMISSIONS}">{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* */
/* 									<!-- EVENT navbar_header_profile_list_before -->*/
/* */
/* 									<li class="small-icon icon-ucp"><a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem">{L_PROFILE}</a></li>*/
/* 									<li class="small-icon icon-profile"><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem">{L_READ_PROFILE}</a></li>*/
/* */
/* 									<!-- EVENT navbar_header_profile_list_after -->*/
/* */
/* 									<li class="separator"></li>*/
/* 									<li class="small-icon icon-logout"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- EVENT navbar_header_username_append -->*/
/* 					</li>*/
/* 					<!-- IF S_DISPLAY_PM -->*/
/* 						<li class="small-icon icon-pm rightside" data-skip-responsive="true">*/
/* 							<a href="{U_PRIVATEMSGS}" role="menuitem"><span class="responsive-hide">{L_PRIVATE_MESSAGES}</span><span class="hidden responsive-show-inline">{L_PM}</span> <!-- IF PRIVATE_MESSAGE_COUNT > 0 --> (<strong>{PRIVATE_MESSAGE_COUNT}</strong>)<!-- ENDIF --></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 						<li class="small-icon icon-notification dropdown-container dropdown-{S_CONTENT_FLOW_END} rightside" data-skip-responsive="true">*/
/* 							<a href="{U_VIEW_ALL_NOTIFICATIONS}" id="notification_list_button" class="dropdown-trigger">{L_NOTIFICATIONS}<!-- IF NOTIFICATIONS_COUNT > 0 --> (<strong>{NOTIFICATIONS_COUNT}</strong>)<!-- ENDIF --></a>*/
/* 							<!-- INCLUDE notification_dropdown.html -->*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT navbar_header_user_profile_append -->*/
/* 				<!-- ELSE -->*/
/* 					<li class="small-icon icon-logout rightside" data-skip-responsive="true"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a></li>*/
/* 					<!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 						<li class="small-icon icon-register rightside" data-skip-responsive="true"><a href="{U_REGISTER}" role="menuitem">{L_REGISTER}</a></li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT navbar_header_logged_out_content -->*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- IF S_DISPLAY_SEARCH -->*/
/* 					<!-- IF S_USER_LOGGED_IN --><li class="small-icon rightside responsive-hide" data-skip-responsive="true"><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_LOAD_UNREADS --><li class="small-icon rightside responsive-hide" data-skip-responsive="true"><a href="{U_SEARCH_UNREAD}" role="menuitem">{L_SEARCH_UNREAD}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_REGISTERED_USER --><li class="small-icon rightside responsive-hide" data-skip-responsive="true"><a href="{U_SEARCH_SELF}" role="menuitem">{L_SEARCH_SELF}</a></li><!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- EVENT navbar_header_quick_links_after -->*/
/* */
/* 				<li class="small-icon leftside"><!-- IF S_USER_LOGGED_IN -->{LAST_VISIT_DATE}<!-- ELSE -->{CURRENT_TIME}<!-- ENDIF --></li>*/
/* 			</ul>*/
/* 		</nav>*/
/* 	</div>*/
/* */
/* 	<header class="inventea-header">*/
/* 		<div class="inventea-dashboard" role="banner">*/
/* 		<!-- EVENT overall_header_headerbar_before -->		*/
/* 			<div class="inventea-sitename">*/
/* 				<h1><a href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->">{SITENAME}</a></h1>*/
/* 				<span>{SITE_DESCRIPTION}</span>*/
/* 			</div>*/
/* 		<!-- EVENT overall_header_headerbar_after -->*/
/* 		</div>*/
/* 	</header>*/
/* */
/* 	<div class="inventea-wrapper">*/
/* 		<div class="inventea-forum-bar">*/
/* 			<!-- EVENT overall_header_navbar_before -->*/
/* 			<!-- INCLUDE navbar_header.html -->*/
/* 		</div>*/
/* */
/* 		<div class="inventea-content" role="main">*/
/* 			<!-- EVENT overall_header_page_body_before -->*/
/* */
/* 			<ul id="nav-breadcrumbs" class="linklist" role="menubar">*/
/* 				<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 				<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 				<li class="small-icon icon-home inventea-breadcrumbs" data-skip-responsive="true">*/
/* 					{L_JUMP_TO}: <!-- IF U_SITE_HOME --><span class="crumb"{$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></span><!-- ENDIF -->*/
/* 					<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 					<span class="crumb"{$MICRODATA}><a href="{U_INDEX}" accesskey="h" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span>*/
/* 					<!-- BEGIN navlinks -->*/
/* 						<!-- EVENT overall_header_navlink_prepend -->*/
/* 						<span class="crumb"{$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/* 						<!-- EVENT overall_header_navlink_append -->*/
/* 					<!-- END navlinks -->*/
/* 					<!-- EVENT overall_header_breadcrumb_append -->*/
/* 				</li>*/
/* 				<!-- EVENT overall_header_breadcrumbs_after -->*/
/* 			</ul>*/
/* */
/* 			<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 				<div id="information" class="rules">*/
/* 					<div class="inner">*/
/* 						<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- EVENT overall_header_content_before -->*/
/* */
