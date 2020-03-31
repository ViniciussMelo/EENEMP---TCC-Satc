<?php

/* navbar_responsive_header.html */
class __TwigTemplate_6aea28b63f6d78ff1bba5f06c222f2f43205aa7da2ceb6940c926f3ff530d9cd extends Twig_Template
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
        echo "<div class=\"dropdown-container hidden inventea-mobile-dropdown-menu\">
    <a href=\"#\" class=\"dropdown-trigger inventea-toggle\"><i class=\"fa fa-bars\"></i></a>
    <div class=\"dropdown hidden\">
        <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
        <ul class=\"dropdown-contents\" role=\"menubar\">
            ";
        // line 6
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<li><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-home\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 7
        echo "            <li><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" role=\"menuitem\"><i class=\"fa fa-fw ";
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "fa-globe";
        } else {
            echo "fa-home";
        }
        echo "\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></li>

            ";
        // line 9
        if (isset($context["overall_header_navigation_prepend"])) { $_overall_header_navigation_prepend_ = $context["overall_header_navigation_prepend"]; } else { $_overall_header_navigation_prepend_ = null; }
        // line 10
        echo "
            <li><a href=\"";
        // line 11
        if (isset($context["U_FAQ"])) { $_U_FAQ_ = $context["U_FAQ"]; } else { $_U_FAQ_ = null; }
        echo $_U_FAQ_;
        echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-info-circle\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>

            ";
        // line 13
        if (isset($context["navbar_header_quick_links_before"])) { $_navbar_header_quick_links_before_ = $context["navbar_header_quick_links_before"]; } else { $_navbar_header_quick_links_before_ = null; }
        // line 14
        echo "
            ";
        // line 15
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            // line 16
            echo "                <li><a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-search\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
                ";
            // line 17
            if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
            if ($_S_REGISTERED_USER_) {
                echo "<li><a href=\"";
                if (isset($context["U_SEARCH_SELF"])) { $_U_SEARCH_SELF_ = $context["U_SEARCH_SELF"]; } else { $_U_SEARCH_SELF_ = null; }
                echo $_U_SEARCH_SELF_;
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comments-o\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 18
            echo "                ";
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if ($_S_USER_LOGGED_IN_) {
                echo "<li><a href=\"";
                if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                echo $_U_SEARCH_NEW_;
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comment\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 19
            echo "                ";
            if (isset($context["S_LOAD_UNREADS"])) { $_S_LOAD_UNREADS_ = $context["S_LOAD_UNREADS"]; } else { $_S_LOAD_UNREADS_ = null; }
            if ($_S_LOAD_UNREADS_) {
                echo "<li><a href=\"";
                if (isset($context["U_SEARCH_UNREAD"])) { $_U_SEARCH_UNREAD_ = $context["U_SEARCH_UNREAD"]; } else { $_U_SEARCH_UNREAD_ = null; }
                echo $_U_SEARCH_UNREAD_;
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comments\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 20
            echo "                <li><a href=\"";
            if (isset($context["U_SEARCH_UNANSWERED"])) { $_U_SEARCH_UNANSWERED_ = $context["U_SEARCH_UNANSWERED"]; } else { $_U_SEARCH_UNANSWERED_ = null; }
            echo $_U_SEARCH_UNANSWERED_;
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comment-o\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
                <li><a href=\"";
            // line 21
            if (isset($context["U_SEARCH_ACTIVE_TOPICS"])) { $_U_SEARCH_ACTIVE_TOPICS_ = $context["U_SEARCH_ACTIVE_TOPICS"]; } else { $_U_SEARCH_ACTIVE_TOPICS_ = null; }
            echo $_U_SEARCH_ACTIVE_TOPICS_;
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-check-circle-o\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (isset($context["navbar_header_quick_links_after"])) { $_navbar_header_quick_links_after_ = $context["navbar_header_quick_links_after"]; } else { $_navbar_header_quick_links_after_ = null; }
        // line 25
        echo "
            ";
        // line 26
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ( !$_S_IS_BOT_) {
            // line 27
            echo "                ";
            if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
            if ($_S_DISPLAY_MEMBERLIST_) {
                echo "<li><a href=\"";
                if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
                echo $_U_MEMBERLIST_;
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-users\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 28
            echo "                ";
            if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
            if ($_U_TEAM_) {
                echo "<li><a href=\"";
                if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
                echo $_U_TEAM_;
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-shield\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 29
            echo "            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            echo "<li><a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-tachometer\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a></li>";
        }
        // line 32
        echo "            ";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<li><a href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-cog\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></li>";
        }
        // line 33
        echo "
            ";
        // line 34
        if (isset($context["overall_header_navigation_append"])) { $_overall_header_navigation_append_ = $context["overall_header_navigation_append"]; } else { $_overall_header_navigation_append_ = null; }
        // line 35
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_responsive_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 35,  196 => 34,  193 => 33,  180 => 32,  168 => 31,  165 => 30,  162 => 29,  151 => 28,  140 => 27,  137 => 26,  134 => 25,  132 => 24,  129 => 23,  121 => 21,  113 => 20,  102 => 19,  91 => 18,  81 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  57 => 11,  54 => 10,  52 => 9,  36 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="dropdown-container hidden inventea-mobile-dropdown-menu">*/
/*     <a href="#" class="dropdown-trigger inventea-toggle"><i class="fa fa-bars"></i></a>*/
/*     <div class="dropdown hidden">*/
/*         <div class="pointer"><div class="pointer-inner"></div></div>*/
/*         <ul class="dropdown-contents" role="menubar">*/
/*             <!-- IF U_SITE_HOME --><li><a href="{U_SITE_HOME}" role="menuitem"><i class="fa fa-fw fa-home"></i> {L_SITE_HOME}</a></li><!-- ENDIF -->*/
/*             <li><a href="{U_INDEX}" role="menuitem"><i class="fa fa-fw <!-- IF U_SITE_HOME -->fa-globe<!-- ELSE -->fa-home<!-- ENDIF -->"></i> {L_INDEX}</a></li>*/
/* */
/*             <!-- EVENT overall_header_navigation_prepend -->*/
/* */
/*             <li><a href="{U_FAQ}" role="menuitem"><i class="fa fa-fw fa-info-circle"></i> {L_FAQ}</a></li>*/
/* */
/*             <!-- EVENT navbar_header_quick_links_before -->*/
/* */
/*             <!-- IF S_DISPLAY_SEARCH -->*/
/*                 <li><a href="{U_SEARCH}" role="menuitem"><i class="fa fa-fw fa-search"></i> {L_SEARCH}</a></li>*/
/*                 <!-- IF S_REGISTERED_USER --><li><a href="{U_SEARCH_SELF}" role="menuitem"><i class="fa fa-fw fa-comments-o"></i> {L_SEARCH_SELF}</a></li><!-- ENDIF -->*/
/*                 <!-- IF S_USER_LOGGED_IN --><li><a href="{U_SEARCH_NEW}" role="menuitem"><i class="fa fa-fw fa-comment"></i> {L_SEARCH_NEW}</a></li><!-- ENDIF -->*/
/*                 <!-- IF S_LOAD_UNREADS --><li><a href="{U_SEARCH_UNREAD}" role="menuitem"><i class="fa fa-fw fa-comments"></i> {L_SEARCH_UNREAD}</a></li><!-- ENDIF -->*/
/*                 <li><a href="{U_SEARCH_UNANSWERED}" role="menuitem"><i class="fa fa-fw fa-comment-o"></i> {L_SEARCH_UNANSWERED}</a></li>*/
/*                 <li><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem"><i class="fa fa-fw fa-check-circle-o"></i> {L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/*             <!-- ENDIF -->*/
/* */
/*             <!-- EVENT navbar_header_quick_links_after -->*/
/* */
/*             <!-- IF not S_IS_BOT -->*/
/*                 <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem"><i class="fa fa-fw fa-users"></i> {L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/*                 <!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem"><i class="fa fa-fw fa-shield"></i> {L_THE_TEAM}</a></li><!-- ENDIF -->*/
/*             <!-- ENDIF -->*/
/* */
/*             <!-- IF U_MCP --><li><a href="{U_MCP}" title="{L_MCP_SHORT}" role="menuitem"><i class="fa fa-fw fa-tachometer"></i> {L_MCP}</a></li><!-- ENDIF -->*/
/*             <!-- IF U_ACP --><li><a href="{U_ACP}" title="{L_ACP_SHORT}" role="menuitem"><i class="fa fa-fw fa-cog"></i> {L_ACP}</a></li><!-- ENDIF -->*/
/* */
/*             <!-- EVENT overall_header_navigation_append -->*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
