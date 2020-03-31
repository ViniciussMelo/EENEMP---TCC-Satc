<?php

/* ucp_pm_message_header.html */
class __TwigTemplate_87e1a3dff110eba06062290de715bedebea942e0f9570568e195ec0795ce1271 extends Twig_Template
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
        echo "<h2>";
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        if (isset($context["CUR_FOLDER_NAME"])) { $_CUR_FOLDER_NAME_ = $context["CUR_FOLDER_NAME"]; } else { $_CUR_FOLDER_NAME_ = null; }
        if ($_CUR_FOLDER_NAME_) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["CUR_FOLDER_NAME"])) { $_CUR_FOLDER_NAME_ = $context["CUR_FOLDER_NAME"]; } else { $_CUR_FOLDER_NAME_ = null; }
            echo $_CUR_FOLDER_NAME_;
        }
        echo "</h2>

<form id=\"viewfolder\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_PM_ACTION"])) { $_S_PM_ACTION_ = $context["S_PM_ACTION"]; } else { $_S_PM_ACTION_ = null; }
        echo $_S_PM_ACTION_;
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 7
        if (isset($context["FOLDER_STATUS"])) { $_FOLDER_STATUS_ = $context["FOLDER_STATUS"]; } else { $_FOLDER_STATUS_ = null; }
        if (isset($context["FOLDER_MAX_MESSAGES"])) { $_FOLDER_MAX_MESSAGES_ = $context["FOLDER_MAX_MESSAGES"]; } else { $_FOLDER_MAX_MESSAGES_ = null; }
        if (($_FOLDER_STATUS_ && ($_FOLDER_MAX_MESSAGES_ != 0))) {
            echo "<p>";
            if (isset($context["FOLDER_STATUS"])) { $_FOLDER_STATUS_ = $context["FOLDER_STATUS"]; } else { $_FOLDER_STATUS_ = null; }
            echo $_FOLDER_STATUS_;
            echo "</p>";
        }
        // line 8
        echo "
\t<div class=\"action-bar top\">
\t";
        // line 10
        if (isset($context["U_POST_REPLY_PM"])) { $_U_POST_REPLY_PM_ = $context["U_POST_REPLY_PM"]; } else { $_U_POST_REPLY_PM_ = null; }
        if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
        if (isset($context["U_FORWARD_PM"])) { $_U_FORWARD_PM_ = $context["U_FORWARD_PM"]; } else { $_U_FORWARD_PM_ = null; }
        if ((($_U_POST_REPLY_PM_ || $_U_POST_NEW_TOPIC_) || $_U_FORWARD_PM_)) {
            // line 11
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 12
            if (isset($context["U_POST_REPLY_PM"])) { $_U_POST_REPLY_PM_ = $context["U_POST_REPLY_PM"]; } else { $_U_POST_REPLY_PM_ = null; }
            if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
            if ($_U_POST_REPLY_PM_) {
                // line 13
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY_PM");
                echo "\" href=\"";
                if (isset($context["U_POST_REPLY_PM"])) { $_U_POST_REPLY_PM_ = $context["U_POST_REPLY_PM"]; } else { $_U_POST_REPLY_PM_ = null; }
                echo $_U_POST_REPLY_PM_;
                echo "\" class=\"button icon-button pmreply-icon\">
\t\t\t\t\t";
                // line 14
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY");
                echo "
\t\t\t\t</a>
\t\t\t";
            } elseif ($_U_POST_NEW_TOPIC_) {
                // line 17
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
                echo $_U_POST_NEW_TOPIC_;
                echo "\" accesskey=\"n\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_COMPOSE");
                echo "\" class=\"button icon-button newpm-icon\">
\t\t\t\t\t";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_NEW");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if (isset($context["U_FORWARD_PM"])) { $_U_FORWARD_PM_ = $context["U_FORWARD_PM"]; } else { $_U_FORWARD_PM_ = null; }
            if ($_U_FORWARD_PM_) {
                // line 22
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_FORWARD_PM");
                echo "\" href=\"";
                if (isset($context["U_FORWARD_PM"])) { $_U_FORWARD_PM_ = $context["U_FORWARD_PM"]; } else { $_U_FORWARD_PM_ = null; }
                echo $_U_FORWARD_PM_;
                echo "\" class=\"button icon-button forwardpm-icon\">
\t\t\t\t\t";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_FORWARD");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if (isset($context["U_POST_REPLY_PM"])) { $_U_POST_REPLY_PM_ = $context["U_POST_REPLY_PM"]; } else { $_U_POST_REPLY_PM_ = null; }
            if (isset($context["S_PM_RECIPIENTS"])) { $_S_PM_RECIPIENTS_ = $context["S_PM_RECIPIENTS"]; } else { $_S_PM_RECIPIENTS_ = null; }
            if (($_U_POST_REPLY_PM_ && ($_S_PM_RECIPIENTS_ > 1))) {
                // line 27
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPLY_TO_ALL");
                echo "\" href=\"";
                if (isset($context["U_POST_REPLY_ALL"])) { $_U_POST_REPLY_ALL_ = $context["U_POST_REPLY_ALL"]; } else { $_U_POST_REPLY_ALL_ = null; }
                echo $_U_POST_REPLY_ALL_;
                echo "\" class=\"button icon-button reply-all\">
\t\t\t\t\t";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY_ALL");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["U_PRINT_PM"])) { $_U_PRINT_PM_ = $context["U_PRINT_PM"]; } else { $_U_PRINT_PM_ = null; }
        if (( !$_S_IS_BOT_ && $_U_PRINT_PM_)) {
            // line 35
            echo "\t\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t\t<span title=\"";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("PM_TOOLS");
            echo "\" class=\"dropdown-trigger dropdown-select button icon-button tools-icon\"></span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t";
            // line 40
            if (isset($context["U_PRINT_PM"])) { $_U_PRINT_PM_ = $context["U_PRINT_PM"]; } else { $_U_PRINT_PM_ = null; }
            if ($_U_PRINT_PM_) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                if (isset($context["U_PRINT_PM"])) { $_U_PRINT_PM_ = $context["U_PRINT_PM"]; } else { $_U_PRINT_PM_ = null; }
                echo $_U_PRINT_PM_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "</a></li>";
            }
            // line 41
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        if (isset($context["TOTAL_MESSAGES"])) { $_TOTAL_MESSAGES_ = $context["TOTAL_MESSAGES"]; } else { $_TOTAL_MESSAGES_ = null; }
        if (isset($context["S_VIEW_MESSAGE"])) { $_S_VIEW_MESSAGE_ = $context["S_VIEW_MESSAGE"]; } else { $_S_VIEW_MESSAGE_ = null; }
        if (($_TOTAL_MESSAGES_ || $_S_VIEW_MESSAGE_)) {
            // line 47
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (isset($context["S_VIEW_MESSAGE"])) { $_S_VIEW_MESSAGE_ = $context["S_VIEW_MESSAGE"]; } else { $_S_VIEW_MESSAGE_ = null; }
            if (isset($context["FOLDER_CUR_MESSAGES"])) { $_FOLDER_CUR_MESSAGES_ = $context["FOLDER_CUR_MESSAGES"]; } else { $_FOLDER_CUR_MESSAGES_ = null; }
            if ($_S_VIEW_MESSAGE_) {
                // line 49
                echo "\t\t\t\t<a class=\"arrow-";
                if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                echo $_S_CONTENT_FLOW_BEGIN_;
                echo "\" href=\"";
                if (isset($context["U_CURRENT_FOLDER"])) { $_U_CURRENT_FOLDER_ = $context["U_CURRENT_FOLDER"]; } else { $_U_CURRENT_FOLDER_ = null; }
                echo $_U_CURRENT_FOLDER_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FOLDER");
                echo "</a>
\t\t\t";
            } elseif (($_FOLDER_CUR_MESSAGES_ != 0)) {
                // line 51
                echo "\t\t\t\t";
                if (isset($context["U_MARK_ALL"])) { $_U_MARK_ALL_ = $context["U_MARK_ALL"]; } else { $_U_MARK_ALL_ = null; }
                if ($_U_MARK_ALL_) {
                    echo "<a href=\"";
                    if (isset($context["U_MARK_ALL"])) { $_U_MARK_ALL_ = $context["U_MARK_ALL"]; } else { $_U_MARK_ALL_ = null; }
                    echo $_U_MARK_ALL_;
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb')->lang("PM_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 52
                echo "\t\t\t\t";
                if (isset($context["TOTAL_MESSAGES"])) { $_TOTAL_MESSAGES_ = $context["TOTAL_MESSAGES"]; } else { $_TOTAL_MESSAGES_ = null; }
                echo $_TOTAL_MESSAGES_;
                echo "
\t\t\t\t";
                // line 53
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                    // line 54
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 54)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 55
                    echo "\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t &bull; ";
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t</div>
\t";
        }
        // line 61
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  241 => 59,  238 => 58,  231 => 56,  228 => 55,  215 => 54,  212 => 53,  206 => 52,  195 => 51,  183 => 49,  179 => 48,  176 => 47,  172 => 46,  169 => 45,  163 => 41,  151 => 40,  144 => 36,  141 => 35,  137 => 34,  134 => 33,  130 => 31,  124 => 28,  116 => 27,  111 => 26,  105 => 23,  97 => 22,  93 => 21,  87 => 18,  79 => 17,  73 => 14,  65 => 13,  61 => 12,  58 => 11,  53 => 10,  49 => 8,  40 => 7,  32 => 3,  19 => 1,);
    }
}
/* <h2>{L_TITLE}<!-- IF CUR_FOLDER_NAME -->{L_COLON} {CUR_FOLDER_NAME}<!-- ENDIF --></h2>*/
/* */
/* <form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<!-- IF FOLDER_STATUS and FOLDER_MAX_MESSAGES neq 0 --><p>{FOLDER_STATUS}</p><!-- ENDIF -->*/
/* */
/* 	<div class="action-bar top">*/
/* 	<!-- IF U_POST_REPLY_PM or U_POST_NEW_TOPIC or U_FORWARD_PM -->*/
/* 		<div class="buttons">*/
/* 			<!-- IF U_POST_REPLY_PM -->*/
/* 				<a title="{L_POST_REPLY_PM}" href="{U_POST_REPLY_PM}" class="button icon-button pmreply-icon">*/
/* 					{L_BUTTON_PM_REPLY}*/
/* 				</a>*/
/* 			<!-- ELSEIF U_POST_NEW_TOPIC -->*/
/* 				<a href="{U_POST_NEW_TOPIC}" accesskey="n" title="{L_UCP_PM_COMPOSE}" class="button icon-button newpm-icon">*/
/* 					{L_BUTTON_PM_NEW}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_FORWARD_PM -->*/
/* 				<a title="{L_POST_FORWARD_PM}" href="{U_FORWARD_PM}" class="button icon-button forwardpm-icon">*/
/* 					{L_BUTTON_PM_FORWARD}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_POST_REPLY_PM and S_PM_RECIPIENTS gt 1 -->*/
/* 				<a title="{L_REPLY_TO_ALL}" href="{U_POST_REPLY_ALL}" class="button icon-button reply-all">*/
/* 					{L_BUTTON_PM_REPLY_ALL}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_IS_BOT and U_PRINT_PM -->*/
/* 		<div class="dropdown-container dropdown-button-control topic-tools">*/
/* 			<span title="{L_PM_TOOLS}" class="dropdown-trigger dropdown-select button icon-button tools-icon"></span>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 					<!-- IF U_PRINT_PM --><li class="small-icon icon-print"><a href="{U_PRINT_PM}" title="{L_PRINT_PM}" accesskey="p">{L_PRINT_PM}</a></li><!-- ENDIF -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF TOTAL_MESSAGES or S_VIEW_MESSAGE -->*/
/* 		<div class="pagination">*/
/* 			<!-- IF S_VIEW_MESSAGE -->*/
/* 				<a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_CURRENT_FOLDER}">{L_RETURN_TO_FOLDER}</a>*/
/* 			<!-- ELSEIF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 				<!-- IF U_MARK_ALL --><a href="{U_MARK_ALL}" class="mark">{L_PM_MARK_ALL_READ}</a> &bull; <!-- ENDIF -->*/
/* 				{TOTAL_MESSAGES}*/
/* 				<!-- IF .pagination -->*/
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE -->*/
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* */
