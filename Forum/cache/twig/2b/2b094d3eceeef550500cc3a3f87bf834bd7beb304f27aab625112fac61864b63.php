<?php

/* navbar_header.html */
class __TwigTemplate_848fce379fecb02c5794f02454bd9ad094efd6d8d52b3c870f43a3f7a470ab20 extends Twig_Template
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
        echo "<nav role=\"navigation\">
\t<ul class=\"linklist bulletin inventea-forum-menu\" role=\"menubar\">
\t\t";
        // line 3
        if (isset($context["overall_header_navigation_prepend"])) { $_overall_header_navigation_prepend_ = $context["overall_header_navigation_prepend"]; } else { $_overall_header_navigation_prepend_ = null; }
        // line 4
        echo "
\t\t";
        // line 5
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 6
        echo "\t\t<li data-skip-responsive=\"true\"><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></li>
\t\t<li><a href=\"";
        // line 7
        if (isset($context["U_FAQ"])) { $_U_FAQ_ = $context["U_FAQ"]; } else { $_U_FAQ_ = null; }
        echo $_U_FAQ_;
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 8
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>";
        }
        // line 9
        echo "
\t\t";
        // line 10
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ( !$_S_IS_BOT_) {
            // line 11
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
            if ($_S_DISPLAY_MEMBERLIST_) {
                echo "<li><a href=\"";
                if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
                echo $_U_MEMBERLIST_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t\t";
            if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
            if ($_U_TEAM_) {
                echo "<li><a href=\"";
                if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
                echo $_U_TEAM_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "
\t\t";
        // line 15
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            // line 16
            echo "\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            if (isset($context["U_SEARCH_UNANSWERED"])) { $_U_SEARCH_UNANSWERED_ = $context["U_SEARCH_UNANSWERED"]; } else { $_U_SEARCH_UNANSWERED_ = null; }
            echo $_U_SEARCH_UNANSWERED_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            // line 17
            if (isset($context["U_SEARCH_ACTIVE_TOPICS"])) { $_U_SEARCH_ACTIVE_TOPICS_ = $context["U_SEARCH_ACTIVE_TOPICS"]; } else { $_U_SEARCH_ACTIVE_TOPICS_ = null; }
            echo $_U_SEARCH_ACTIVE_TOPICS_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t";
        }
        // line 19
        echo "
\t\t";
        // line 20
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            echo "<li><a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 21
        echo "\t\t";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<li><a href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 22
        echo "
\t\t";
        // line 23
        if (isset($context["overall_header_navigation_append"])) { $_overall_header_navigation_append_ = $context["overall_header_navigation_append"]; } else { $_overall_header_navigation_append_ = null; }
        // line 24
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 24,  153 => 23,  150 => 22,  137 => 21,  125 => 20,  122 => 19,  114 => 17,  106 => 16,  103 => 15,  100 => 14,  97 => 13,  86 => 12,  75 => 11,  72 => 10,  69 => 9,  59 => 8,  50 => 7,  40 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav role="navigation">*/
/* 	<ul class="linklist bulletin inventea-forum-menu" role="menubar">*/
/* 		<!-- EVENT overall_header_navigation_prepend -->*/
/* */
/* 		<!-- IF U_SITE_HOME --><li data-skip-responsive="true"><a href="{U_SITE_HOME}" title="{L_SITE_HOME}" role="menuitem">{L_SITE_HOME}</a></li><!-- ENDIF -->*/
/* 		<li data-skip-responsive="true"><a href="{U_INDEX}" title="{L_INDEX}" role="menuitem">{L_INDEX}</a></li>*/
/* 		<li><a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem">{L_FAQ}</a></li>*/
/* 		<!-- IF S_DISPLAY_SEARCH --><li data-skip-responsive="true"><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_DISPLAY_SEARCH -->*/
/* 			<li data-skip-responsive="true"><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 			<li data-skip-responsive="true"><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF U_MCP --><li><a href="{U_MCP}" title="{L_MCP}" role="menuitem">{L_MCP_SHORT}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_ACP --><li><a href="{U_ACP}" title="{L_ACP}" role="menuitem">{L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_navigation_append -->*/
/* 	</ul>*/
/* </nav>*/
/* */
