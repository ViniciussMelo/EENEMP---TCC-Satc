<?php

/* overall_footer.html */
class __TwigTemplate_68661d0462d8f00bb16da352775e1f15561b0ec899ccf64e49d0e17b864cf99b extends Twig_Template
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
        echo "\t\t";
        if (isset($context["overall_footer_content_after"])) { $_overall_footer_content_after_ = $context["overall_footer_content_after"]; } else { $_overall_footer_content_after_ = null; }
        // line 2
        echo "\t\t";
        if (isset($context["overall_footer_page_body_after"])) { $_overall_footer_page_body_after_ = $context["overall_footer_page_body_after"]; } else { $_overall_footer_page_body_after_ = null; }
        // line 3
        echo "\t</div>
</div>

";
        // line 6
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ( !$_S_IS_BOT_) {
            if (isset($context["RUN_CRON_TASK"])) { $_RUN_CRON_TASK_ = $context["RUN_CRON_TASK"]; } else { $_RUN_CRON_TASK_ = null; }
            echo $_RUN_CRON_TASK_;
        }
        // line 7
        echo "
<div class=\"inventea-footer-wrapper\">
\t<div id=\"page-footer\" class=\"inventea-footer\" role=\"contentinfo\">
\t\t<div class=\"inventea-widgets-wrapper\">
\t\t\t";
        // line 11
        if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
        if ($_S_ENABLE_FEEDS_) {
            // line 12
            echo "\t\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t\t<h4 class=\"inventea-widget-title\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("FEED");
            echo "</h4>

\t\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t\t";
            // line 16
            if (isset($context["S_ENABLE_FEEDS_OVERALL"])) { $_S_ENABLE_FEEDS_OVERALL_ = $context["S_ENABLE_FEEDS_OVERALL"]; } else { $_S_ENABLE_FEEDS_OVERALL_ = null; }
            if ($_S_ENABLE_FEEDS_OVERALL_) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
                echo $_SITENAME_;
                echo "\">";
                if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
                echo $_SITENAME_;
                echo "</a></li>";
            }
            // line 17
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_NEWS"])) { $_S_ENABLE_FEEDS_NEWS_ = $context["S_ENABLE_FEEDS_NEWS"]; } else { $_S_ENABLE_FEEDS_NEWS_ = null; }
            if ($_S_ENABLE_FEEDS_NEWS_) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=news\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "</a></li>";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_FORUMS"])) { $_S_ENABLE_FEEDS_FORUMS_ = $context["S_ENABLE_FEEDS_FORUMS"]; } else { $_S_ENABLE_FEEDS_FORUMS_ = null; }
            if ($_S_ENABLE_FEEDS_FORUMS_) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=forums\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS"])) { $_S_ENABLE_FEEDS_TOPICS_ = $context["S_ENABLE_FEEDS_TOPICS"]; } else { $_S_ENABLE_FEEDS_TOPICS_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"])) { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]; } else { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_ACTIVE_) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics_active\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_FORUM"])) { $_S_ENABLE_FEEDS_FORUM_ = $context["S_ENABLE_FEEDS_FORUM"]; } else { $_S_ENABLE_FEEDS_FORUM_ = null; }
            if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
            if (($_S_ENABLE_FEEDS_FORUM_ && $_S_FORUM_ID_)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
                echo $_FORUM_NAME_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
                echo $_FORUM_NAME_;
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t\t\t";
            if (isset($context["S_ENABLE_FEEDS_TOPIC"])) { $_S_ENABLE_FEEDS_TOPIC_ = $context["S_ENABLE_FEEDS_TOPIC"]; } else { $_S_ENABLE_FEEDS_TOPIC_ = null; }
            if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
            if (($_S_ENABLE_FEEDS_TOPIC_ && $_S_TOPIC_ID_)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "&amp;t=";
                if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
                echo $_S_TOPIC_ID_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
                echo $_TOPIC_TITLE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
                echo $_TOPIC_TITLE_;
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "
\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("GOTO_PAGE");
        echo "</h4>

\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t";
        // line 31
        if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (($_U_WATCH_FORUM_LINK_ &&  !$_S_IS_BOT_)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-star fa-fw\"></i> <a href=\"";
            if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
            echo $_U_WATCH_FORUM_LINK_;
            echo "\" title=\"";
            if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
            echo $_S_WATCH_FORUM_TITLE_;
            echo "\" data-ajax=\"toggle_link\" data-toggle-text=\"";
            if (isset($context["S_WATCH_FORUM_TOGGLE"])) { $_S_WATCH_FORUM_TOGGLE_ = $context["S_WATCH_FORUM_TOGGLE"]; } else { $_S_WATCH_FORUM_TOGGLE_ = null; }
            echo $_S_WATCH_FORUM_TOGGLE_;
            echo "\" data-toggle-url=\"";
            if (isset($context["U_WATCH_FORUM_TOGGLE"])) { $_U_WATCH_FORUM_TOGGLE_ = $context["U_WATCH_FORUM_TOGGLE"]; } else { $_U_WATCH_FORUM_TOGGLE_ = null; }
            echo $_U_WATCH_FORUM_TOGGLE_;
            echo "\">";
            if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
            echo $_S_WATCH_FORUM_TITLE_;
            echo "</a></li>";
        }
        // line 32
        echo "\t\t\t\t\t";
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-search fa-fw\"></i> <a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a></li>";
        }
        // line 33
        echo "\t\t\t\t\t";
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-user fa-fw\"></i> <a href=\"";
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>";
        }
        // line 34
        echo "\t\t\t\t\t";
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-tachometer fa-fw\"></i> <a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a></li>";
        }
        // line 35
        echo "\t\t\t\t\t";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-cog fa-fw\"></i> <a href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></li>";
        }
        // line 36
        echo "\t\t\t\t\t";
        if (isset($context["U_CONTACT_US"])) { $_U_CONTACT_US_ = $context["U_CONTACT_US"]; } else { $_U_CONTACT_US_ = null; }
        if ($_U_CONTACT_US_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-envelope fa-fw\"></i> <a href=\"";
            if (isset($context["U_CONTACT_US"])) { $_U_CONTACT_US_ = $context["U_CONTACT_US"]; } else { $_U_CONTACT_US_ = null; }
            echo $_U_CONTACT_US_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 37
        echo "\t\t\t\t\t";
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ( !$_S_IS_BOT_) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-trash fa-fw\"></i> <a href=\"";
            if (isset($context["U_DELETE_COOKIES"])) { $_U_DELETE_COOKIES_ = $context["U_DELETE_COOKIES"]; } else { $_U_DELETE_COOKIES_ = null; }
            echo $_U_DELETE_COOKIES_;
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 38
        echo "\t\t\t\t\t<li class=\"inventea-widget-links-item\"><i class=\"fa fa-clock-o fa-fw\"></i> ";
        if (isset($context["S_TIMEZONE"])) { $_S_TIMEZONE_ = $context["S_TIMEZONE"]; } else { $_S_TIMEZONE_ = null; }
        echo $_S_TIMEZONE_;
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!--
\t\t\tShort description about your website or project. If you don't like to display
\t\t\tthis widget, just remove the whole <div> (lines 46-63) or comment it.
\t\t\tFeel free to modify the social buttons below. For more icons visit:
\t\t\thttp://fortawesome.github.io/Font-Awesome/icons/#brand
\t\t\t-->
\t\t\t<div class=\"inventea-widget inventea-text-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">About us</h4>

\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor lectus quis mattis aliquet.
\t\t\t\tCras in nibh et eros porttitor facilisis. Nunc egestas eget leo vel dapibus. Cum sociis natoque
\t\t\t\tpenatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti.
\t\t\t\tCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
\t\t\t\tNunc rutrum dui ipsum, ac tincidunt felis pharetra sed. Aenean viverra sagittis interdum.</p>

\t\t\t\t<ul class=\"inventea-social-icons\">
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://www.facebook.com/inventea\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://plus.google.com/+INVENTEA\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://twitter.com/inventea\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"inventea-breadcrumbs-container\">
\t\t\t<ul class=\"linklist inventea-breadcrumbs\">
\t\t\t\t";
        // line 70
        if (isset($context["MICRODATA"])) { $_MICRODATA_ = $context["MICRODATA"]; } else { $_MICRODATA_ = null; }
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 71
        echo "\t\t\t\t";
        if (isset($context["overall_header_breadcrumbs_before"])) { $_overall_header_breadcrumbs_before_ = $context["overall_header_breadcrumbs_before"]; } else { $_overall_header_breadcrumbs_before_ = null; }
        // line 72
        echo "\t\t\t\t<li class=\"small-icon icon-home inventea-breadcrumbs\" data-skip-responsive=\"true\">
\t\t\t\t\t";
        // line 73
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
        // line 74
        echo "\t\t\t\t\t";
        if (isset($context["overall_header_breadcrumb_prepend"])) { $_overall_header_breadcrumb_prepend_ = $context["overall_header_breadcrumb_prepend"]; } else { $_overall_header_breadcrumb_prepend_ = null; }
        // line 75
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
        // line 76
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 77
            echo "\t\t\t\t\t\t";
            if (isset($context["overall_header_navlink_prepend"])) { $_overall_header_navlink_prepend_ = $context["overall_header_navlink_prepend"]; } else { $_overall_header_navlink_prepend_ = null; }
            // line 78
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
            // line 79
            if (isset($context["overall_header_navlink_append"])) { $_overall_header_navlink_append_ = $context["overall_header_navlink_append"]; } else { $_overall_header_navlink_append_ = null; }
            // line 80
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t";
        if (isset($context["overall_header_breadcrumb_append"])) { $_overall_header_breadcrumb_append_ = $context["overall_header_breadcrumb_append"]; } else { $_overall_header_breadcrumb_append_ = null; }
        // line 82
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 83
        if (isset($context["overall_header_breadcrumbs_after"])) { $_overall_header_breadcrumbs_after_ = $context["overall_header_breadcrumbs_after"]; } else { $_overall_header_breadcrumbs_after_ = null; }
        // line 84
        echo "\t\t\t</ul>
\t\t</div>

\t\t<footer class=\"inventea-credits\" role=\"contentinfo\">
\t\t\t";
        // line 88
        if (isset($context["overall_footer_copyright_prepend"])) { $_overall_footer_copyright_prepend_ = $context["overall_footer_copyright_prepend"]; } else { $_overall_footer_copyright_prepend_ = null; }
        // line 89
        echo "\t\t\t";
        if (isset($context["CREDIT_LINE"])) { $_CREDIT_LINE_ = $context["CREDIT_LINE"]; } else { $_CREDIT_LINE_ = null; }
        echo $_CREDIT_LINE_;
        echo "<br />
\t\t\tStyle we_clearblue created by <a href=\"https://inventea.com\" title=\"phpBB styles, HTML5 &amp; CSS3 templates\">INVENTEA</a>
\t\t\t";
        // line 91
        if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
        if ($_TRANSLATION_INFO_) {
            echo "<br />";
            if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
            echo $_TRANSLATION_INFO_;
        }
        // line 92
        echo "\t\t\t";
        if (isset($context["overall_footer_copyright_append"])) { $_overall_footer_copyright_append_ = $context["overall_footer_copyright_append"]; } else { $_overall_footer_copyright_append_ = null; }
        // line 93
        echo "\t\t\t";
        if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
        if ($_DEBUG_OUTPUT_) {
            echo "<br />";
            if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
            echo $_DEBUG_OUTPUT_;
        }
        // line 94
        echo "\t\t</footer>
\t</div>
</div>

<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t<div id=\"darken\">&nbsp;</div>
</div>

<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
</div>
<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<div class=\"alert_text\"></div>
</div>

</div>

<script type=\"text/javascript\" src=\"";
        // line 113
        if (isset($context["T_JQUERY_LINK"])) { $_T_JQUERY_LINK_ = $context["T_JQUERY_LINK"]; } else { $_T_JQUERY_LINK_ = null; }
        echo $_T_JQUERY_LINK_;
        echo "\"></script>
";
        // line 114
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
            echo $_T_ASSETS_PATH_;
            echo "/javascript/jquery.min.js?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\">\\x3C/script>');</script>";
        }
        // line 115
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        echo $_T_ASSETS_PATH_;
        echo "/javascript/core.js?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\"></script>
";
        // line 116
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 117
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 118
        echo "
";
        // line 119
        if (isset($context["overall_footer_after"])) { $_overall_footer_after_ = $context["overall_footer_after"]; } else { $_overall_footer_after_ = null; }
        // line 120
        echo "
";
        // line 121
        if (isset($context["S_PLUPLOAD"])) { $_S_PLUPLOAD_ = $context["S_PLUPLOAD"]; } else { $_S_PLUPLOAD_ = null; }
        if ($_S_PLUPLOAD_) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 121)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 122
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "SCRIPTS", array());
        echo "

";
        // line 124
        if (isset($context["overall_footer_body_after"])) { $_overall_footer_body_after_ = $context["overall_footer_body_after"]; } else { $_overall_footer_body_after_ = null; }
        // line 125
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 125,  565 => 124,  559 => 122,  544 => 121,  541 => 120,  539 => 119,  536 => 118,  521 => 117,  506 => 116,  497 => 115,  486 => 114,  481 => 113,  465 => 102,  450 => 98,  444 => 94,  436 => 93,  433 => 92,  426 => 91,  419 => 89,  417 => 88,  411 => 84,  409 => 83,  406 => 82,  403 => 81,  397 => 80,  395 => 79,  377 => 78,  374 => 77,  369 => 76,  358 => 75,  355 => 74,  340 => 73,  337 => 72,  334 => 71,  330 => 70,  293 => 38,  282 => 37,  271 => 36,  258 => 35,  245 => 34,  232 => 33,  219 => 32,  198 => 31,  192 => 28,  188 => 26,  183 => 23,  155 => 22,  130 => 21,  115 => 20,  100 => 19,  85 => 18,  70 => 17,  54 => 16,  48 => 13,  45 => 12,  42 => 11,  36 => 7,  30 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* 		<!-- EVENT overall_footer_content_after -->*/
/* 		<!-- EVENT overall_footer_page_body_after -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* */
/* <div class="inventea-footer-wrapper">*/
/* 	<div id="page-footer" class="inventea-footer" role="contentinfo">*/
/* 		<div class="inventea-widgets-wrapper">*/
/* 			<!-- IF S_ENABLE_FEEDS -->*/
/* 				<div class="inventea-widget inventea-list-widget">*/
/* 					<h4 class="inventea-widget-title">{L_FEED}</h4>*/
/* */
/* 					<ul class="inventea-widget-links">*/
/* 						<!-- IF S_ENABLE_FEEDS_OVERALL --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}" title="{L_FEED} - {SITENAME}">{SITENAME}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_NEWS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=news" title="{L_FEED} - {L_FEED_NEWS}">{L_FEED_NEWS}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_FORUMS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=forums" title="{L_FEED} - {L_ALL_FORUMS}">{L_ALL_FORUMS}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPICS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=topics" title="{L_FEED} - {L_FEED_TOPICS_NEW}">{L_FEED_TOPICS_NEW}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=topics_active" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}">{L_FEED_TOPICS_ACTIVE}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?f={S_FORUM_ID}" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}">{L_FORUM} - {FORUM_NAME}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}">{L_TOPIC} - {TOPIC_TITLE}</a></li><!-- ENDIF -->*/
/* 					</ul>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<div class="inventea-widget inventea-list-widget">*/
/* 				<h4 class="inventea-widget-title">{L_GOTO_PAGE}</h4>*/
/* */
/* 				<ul class="inventea-widget-links">*/
/* 					<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT --><li class="inventea-widget-links-item"><i class="fa fa-star fa-fw"></i> <a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_DISPLAY_SEARCH --><li class="inventea-widget-links-item"><i class="fa fa-search fa-fw"></i> <a href="{U_SEARCH}" title="{L_SEARCH}">{L_SEARCH_ADV}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_REGISTERED_USER --><li class="inventea-widget-links-item"><i class="fa fa-user fa-fw"></i> <a href="{U_PROFILE}" title="{L_PROFILE}">{L_PROFILE}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_MCP --><li class="inventea-widget-links-item"><i class="fa fa-tachometer fa-fw"></i> <a href="{U_MCP}" title="{L_MCP}">{L_MCP}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_ACP --><li class="inventea-widget-links-item"><i class="fa fa-cog fa-fw"></i> <a href="{U_ACP}" title="{L_ACP}">{L_ACP}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_CONTACT_US --><li class="inventea-widget-links-item"><i class="fa fa-envelope fa-fw"></i> <a href="{U_CONTACT_US}">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* 					<!-- IF not S_IS_BOT --><li class="inventea-widget-links-item"><i class="fa fa-trash fa-fw"></i> <a href="{U_DELETE_COOKIES}" data-ajax="true" data-refresh="true">{L_DELETE_COOKIES}</a></li><!-- ENDIF -->*/
/* 					<li class="inventea-widget-links-item"><i class="fa fa-clock-o fa-fw"></i> {S_TIMEZONE}</li>*/
/* 				</ul>*/
/* 			</div>*/
/* */
/* 			<!--*/
/* 			Short description about your website or project. If you don't like to display*/
/* 			this widget, just remove the whole <div> (lines 46-63) or comment it.*/
/* 			Feel free to modify the social buttons below. For more icons visit:*/
/* 			http://fortawesome.github.io/Font-Awesome/icons/#brand*/
/* 			-->*/
/* 			<div class="inventea-widget inventea-text-widget">*/
/* 				<h4 class="inventea-widget-title">About us</h4>*/
/* */
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor lectus quis mattis aliquet.*/
/* 				Cras in nibh et eros porttitor facilisis. Nunc egestas eget leo vel dapibus. Cum sociis natoque*/
/* 				penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti.*/
/* 				Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.*/
/* 				Nunc rutrum dui ipsum, ac tincidunt felis pharetra sed. Aenean viverra sagittis interdum.</p>*/
/* */
/* 				<ul class="inventea-social-icons">*/
/* 					<li class="inventea-social-icons-item"><a href="https://www.facebook.com/inventea"><i class="fa fa-facebook"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="https://plus.google.com/+INVENTEA"><i class="fa fa-google-plus"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="https://twitter.com/inventea"><i class="fa fa-twitter"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="inventea-breadcrumbs-container">*/
/* 			<ul class="linklist inventea-breadcrumbs">*/
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
/* 		</div>*/
/* */
/* 		<footer class="inventea-credits" role="contentinfo">*/
/* 			<!-- EVENT overall_footer_copyright_prepend -->*/
/* 			{CREDIT_LINE}<br />*/
/* 			Style we_clearblue created by <a href="https://inventea.com" title="phpBB styles, HTML5 &amp; CSS3 templates">INVENTEA</a>*/
/* 			<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 			<!-- EVENT overall_footer_copyright_append -->*/
/* 			<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 		</footer>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 	<div id="darken">&nbsp;</div>*/
/* </div>*/
/* */
/* <div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 	<a href="#" class="alert_close"></a>*/
/* 	<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>*/
/* </div>*/
/* <div id="phpbb_confirm" class="phpbb_alert">*/
/* 	<a href="#" class="alert_close"></a>*/
/* 	<div class="alert_text"></div>*/
/* </div>*/
/* */
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* */
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* {$SCRIPTS}*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* </body>*/
/* </html>*/
/* */
