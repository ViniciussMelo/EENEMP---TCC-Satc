<?php

/* jumpbox.html */
class __TwigTemplate_4c205fa3bc42ab3f4848ba6f475591a89a041d34d2bbfd04052ebaeb9bf18100 extends Twig_Template
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
        echo "
<div class=\"action-bar actions-jump\">
\t";
        // line 3
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (isset($context["SEARCH_TOPIC"])) { $_SEARCH_TOPIC_ = $context["SEARCH_TOPIC"]; } else { $_SEARCH_TOPIC_ = null; }
        if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
        if ($_S_VIEWTOPIC_) {
            // line 4
            echo "\t\t<p class=\"jumpbox-return\"><a href=\"";
            if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
            echo $_U_VIEW_FORUM_;
            echo "\" class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
\t";
        } elseif ($_S_VIEWFORUM_) {
            // line 6
            echo "\t\t<p class=\"jumpbox-return\"><a href=\"";
            if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
            echo $_U_INDEX_;
            echo "\" class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
\t";
        } elseif ($_SEARCH_TOPIC_) {
            // line 8
            echo "\t\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH_TOPIC"])) { $_U_SEARCH_TOPIC_ = $context["U_SEARCH_TOPIC"]; } else { $_U_SEARCH_TOPIC_ = null; }
            echo $_U_SEARCH_TOPIC_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
\t";
        } elseif ($_S_SEARCH_ACTION_) {
            // line 10
            echo "\t\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
\t";
        }
        // line 12
        echo "
\t";
        // line 13
        if (isset($context["S_DISPLAY_JUMPBOX"])) { $_S_DISPLAY_JUMPBOX_ = $context["S_DISPLAY_JUMPBOX"]; } else { $_S_DISPLAY_JUMPBOX_ = null; }
        if ($_S_DISPLAY_JUMPBOX_) {
            // line 14
            echo "
\t\t<div class=\"dropdown-container dropdown-container-";
            // line 15
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if ( !$_S_IN_MCP_) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t\t<span title=\"";
            // line 16
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if (($_S_IN_MCP_ && $_S_MERGE_SELECT_)) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ($_S_IN_MCP_) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t\t";
            // line 17
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if (($_S_IN_MCP_ && $_S_MERGE_SELECT_)) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ($_S_IN_MCP_) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 18
            echo "\t\t\t</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 22
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 23
                echo "\t\t\t\t\t";
                if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                if (($this->getAttribute($_jumpbox_forums_, "FORUM_ID", array()) !=  -1)) {
                    // line 24
                    echo "\t\t\t\t\t\t<li>";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_jumpbox_forums_, "level", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    echo $this->getAttribute($_jumpbox_forums_, "LINK", array());
                    echo "\">";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    echo $this->getAttribute($_jumpbox_forums_, "FORUM_NAME", array());
                    echo "</a></li>
\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 32
            echo "\t</br></br>
\t";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 34,  170 => 32,  163 => 27,  157 => 26,  137 => 24,  133 => 23,  128 => 22,  122 => 18,  112 => 17,  100 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  65 => 10,  53 => 8,  41 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <div class="action-bar actions-jump">*/
/* 	<!-- IF S_VIEWTOPIC -->*/
/* 		<p class="jumpbox-return"><a href="{U_VIEW_FORUM}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" accesskey="r">{L_RETURN_TO_FORUM}</a></p>*/
/* 	<!-- ELSEIF S_VIEWFORUM -->*/
/* 		<p class="jumpbox-return"><a href="{U_INDEX}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" accesskey="r">{L_RETURN_TO_INDEX}</a></p>*/
/* 	<!-- ELSEIF SEARCH_TOPIC -->*/
/* 		<p class="jumpbox-return"><a class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH_TOPIC}" accesskey="r">{L_RETURN_TO_TOPIC}</a></p>*/
/* 	<!-- ELSEIF S_SEARCH_ACTION -->*/
/* 		<p class="jumpbox-return"><a class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH}" title="{L_SEARCH_ADV}" accesskey="r">{L_GO_TO_SEARCH_ADV}</a></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_DISPLAY_JUMPBOX -->*/
/* */
/* 		<div class="dropdown-container dropdown-container-{S_CONTENT_FLOW_END}<!-- IF not S_IN_MCP --> dropdown-up<!-- ENDIF --> dropdown-{S_CONTENT_FLOW_BEGIN} dropdown-button-control" id="jumpbox">*/
/* 			<span title="<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->" class="dropdown-trigger button dropdown-select">*/
/* 				<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->*/
/* 			</span>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 				<!-- BEGIN jumpbox_forums -->*/
/* 					<!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 						<li><!-- BEGIN level -->&nbsp; &nbsp;<!-- END level --><a href="{jumpbox_forums.LINK}">{jumpbox_forums.FORUM_NAME}</a></li>*/
/* 					<!-- ENDIF -->*/
/* 				<!-- END jumpbox_forums -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	<!-- ELSE -->*/
/* 	</br></br>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
