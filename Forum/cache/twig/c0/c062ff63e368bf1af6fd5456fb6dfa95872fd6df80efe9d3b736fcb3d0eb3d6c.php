<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_01b769616710a5e7db17d9b30edc3b1dd81ddaff584b266457c22e0faac0cbcd extends Twig_Template
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
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
        if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
        if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
        if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
        if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
        if (isset($context["S_DISPLAY_TOPIC_TOOLS"])) { $_S_DISPLAY_TOPIC_TOOLS_ = $context["S_DISPLAY_TOPIC_TOOLS"]; } else { $_S_DISPLAY_TOPIC_TOOLS_ = null; }
        if (( !$_S_IS_BOT_ && ((((($_U_WATCH_TOPIC_ || $_U_BOOKMARK_TOPIC_) || $_U_BUMP_TOPIC_) || $_U_EMAIL_TOPIC_) || $_U_PRINT_TOPIC_) || $_S_DISPLAY_TOPIC_TOOLS_))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            if (isset($context["viewtopic_topic_tools_before"])) { $_viewtopic_topic_tools_before_ = $context["viewtopic_topic_tools_before"]; } else { $_viewtopic_topic_tools_before_ = null; }
            // line 8
            echo "\t\t\t\t";
            if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
            if ($_U_WATCH_TOPIC_) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ($_S_WATCHING_TOPIC_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
                echo $_U_WATCH_TOPIC_;
                echo "\" class=\"watch-topic-link\" title=\"";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ( !$_S_WATCHING_TOPIC_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                if (isset($context["S_WATCH_TOPIC_TOGGLE"])) { $_S_WATCH_TOPIC_TOGGLE_ = $context["S_WATCH_TOPIC_TOGGLE"]; } else { $_S_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_S_WATCH_TOPIC_TOGGLE_;
                echo "\" data-toggle-url=\"";
                if (isset($context["U_WATCH_TOPIC_TOGGLE"])) { $_U_WATCH_TOPIC_TOGGLE_ = $context["U_WATCH_TOPIC_TOGGLE"]; } else { $_U_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_U_WATCH_TOPIC_TOGGLE_;
                echo "\" data-update-all=\".watch-topic-link\">";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
            if ($_U_BOOKMARK_TOPIC_) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
                echo $_U_BOOKMARK_TOPIC_;
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                if (isset($context["S_BOOKMARK_TOGGLE"])) { $_S_BOOKMARK_TOGGLE_ = $context["S_BOOKMARK_TOGGLE"]; } else { $_S_BOOKMARK_TOGGLE_ = null; }
                echo $_S_BOOKMARK_TOGGLE_;
                echo "\" data-update-all=\".bookmark-link\">";
                if (isset($context["S_BOOKMARK_TOPIC"])) { $_S_BOOKMARK_TOPIC_ = $context["S_BOOKMARK_TOPIC"]; } else { $_S_BOOKMARK_TOPIC_ = null; }
                echo $_S_BOOKMARK_TOPIC_;
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
            if ($_U_BUMP_TOPIC_) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
                echo $_U_BUMP_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
            if ($_U_EMAIL_TOPIC_) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
                echo $_U_EMAIL_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
            if ($_U_PRINT_TOPIC_) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
                echo $_U_PRINT_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            if (isset($context["viewtopic_topic_tools_after"])) { $_viewtopic_topic_tools_after_ = $context["viewtopic_topic_tools_after"]; } else { $_viewtopic_topic_tools_after_ = null; }
            // line 22
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 22,  141 => 21,  128 => 20,  115 => 19,  102 => 18,  87 => 15,  84 => 14,  80 => 13,  54 => 10,  44 => 9,  40 => 8,  38 => 7,  31 => 3,  28 => 2,  19 => 1,);
    }
}
/* <!-- IF not S_IS_BOT and (U_WATCH_TOPIC or U_BOOKMARK_TOPIC or U_BUMP_TOPIC or U_EMAIL_TOPIC or U_PRINT_TOPIC or S_DISPLAY_TOPIC_TOOLS) -->*/
/* 	<div class="dropdown-container dropdown-button-control topic-tools">*/
/* 		<span title="{L_TOPIC_TOOLS}" class="button icon-button tools-icon dropdown-trigger dropdown-select"></span>*/
/* 		<div class="dropdown hidden">*/
/* 			<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 			<ul class="dropdown-contents">*/
/* 				<!-- EVENT viewtopic_topic_tools_before -->*/
/* 				<!-- IF U_WATCH_TOPIC -->*/
/* 					<li class="small-icon icon-<!-- IF S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->">*/
/* 						<a href="{U_WATCH_TOPIC}" class="watch-topic-link" title="{S_WATCH_TOPIC_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_TOPIC_TOGGLE}" data-toggle-url="{U_WATCH_TOPIC_TOGGLE}" data-update-all=".watch-topic-link">{S_WATCH_TOPIC_TITLE}</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_BOOKMARK_TOPIC -->*/
/* 					<li class="small-icon icon-bookmark">*/
/* 						<a href="{U_BOOKMARK_TOPIC}" class="bookmark-link" title="{L_BOOKMARK_TOPIC}" data-ajax="alt_text" data-alt-text="{S_BOOKMARK_TOGGLE}" data-update-all=".bookmark-link">{S_BOOKMARK_TOPIC}</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_BUMP_TOPIC --><li class="small-icon icon-bump"><a href="{U_BUMP_TOPIC}" title="{L_BUMP_TOPIC}" data-ajax="true">{L_BUMP_TOPIC}</a></li><!-- ENDIF -->*/
/* 				<!-- IF U_EMAIL_TOPIC --><li class="small-icon icon-sendemail"><a href="{U_EMAIL_TOPIC}" title="{L_EMAIL_TOPIC}">{L_EMAIL_TOPIC}</a></li><!-- ENDIF -->*/
/* 				<!-- IF U_PRINT_TOPIC --><li class="small-icon icon-print"><a href="{U_PRINT_TOPIC}" title="{L_PRINT_TOPIC}" accesskey="p">{L_PRINT_TOPIC}</a></li><!-- ENDIF -->*/
/* 				<!-- EVENT viewtopic_topic_tools_after -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
