<?php

/* message_body.html */
class __TwigTemplate_01ace4a3f8effa858ffbac6a3ce6e4ae522203dc72bb1d8b7b0c30f54af771b9 extends Twig_Template
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
        if (isset($context["S_SIMPLE_MESSAGE"])) { $_S_SIMPLE_MESSAGE_ = $context["S_SIMPLE_MESSAGE"]; } else { $_S_SIMPLE_MESSAGE_ = null; }
        if ($_S_SIMPLE_MESSAGE_) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "message_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 4
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "message_body.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
<div class=\"panel\" id=\"message\">
\t<div class=\"inner\">
\t<h2 class=\"message-title\">";
        // line 9
        if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
        echo $_MESSAGE_TITLE_;
        echo "</h2>
\t<p>";
        // line 10
        if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
        echo $_MESSAGE_TEXT_;
        echo "</p>
\t";
        // line 11
        if (isset($context["SCRIPT_NAME"])) { $_SCRIPT_NAME_ = $context["SCRIPT_NAME"]; } else { $_SCRIPT_NAME_ = null; }
        if (isset($context["S_BOARD_DISABLED"])) { $_S_BOARD_DISABLED_ = $context["S_BOARD_DISABLED"]; } else { $_S_BOARD_DISABLED_ = null; }
        if (isset($context["S_NO_SEARCH"])) { $_S_NO_SEARCH_ = $context["S_NO_SEARCH"]; } else { $_S_NO_SEARCH_ = null; }
        if (isset($context["L_RETURN_TO_SEARCH_ADV"])) { $_L_RETURN_TO_SEARCH_ADV_ = $context["L_RETURN_TO_SEARCH_ADV"]; } else { $_L_RETURN_TO_SEARCH_ADV_ = null; }
        if ((((($_SCRIPT_NAME_ == "search") &&  !$_S_BOARD_DISABLED_) &&  !$_S_NO_SEARCH_) && $_L_RETURN_TO_SEARCH_ADV_)) {
            echo "<p><a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" class=\"arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>";
        }
        // line 12
        echo "\t</div>
</div>

";
        // line 15
        if (isset($context["S_SIMPLE_MESSAGE"])) { $_S_SIMPLE_MESSAGE_ = $context["S_SIMPLE_MESSAGE"]; } else { $_S_SIMPLE_MESSAGE_ = null; }
        if ($_S_SIMPLE_MESSAGE_) {
            // line 16
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "message_body.html", 16)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 18
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "message_body.html", 18)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "message_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  89 => 16,  86 => 15,  81 => 12,  65 => 11,  60 => 10,  55 => 9,  50 => 6,  36 => 4,  22 => 2,  19 => 1,);
    }
}
/* <!-- IF S_SIMPLE_MESSAGE -->*/
/* 	<!-- INCLUDE simple_header.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_header.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel" id="message">*/
/* 	<div class="inner">*/
/* 	<h2 class="message-title">{MESSAGE_TITLE}</h2>*/
/* 	<p>{MESSAGE_TEXT}</p>*/
/* 	<!-- IF SCRIPT_NAME == "search" and not S_BOARD_DISABLED and not S_NO_SEARCH and L_RETURN_TO_SEARCH_ADV --><p><a href="{U_SEARCH}" class="arrow-{S_CONTENT_FLOW_BEGIN}">{L_GO_TO_SEARCH_ADV}</a></p><!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_SIMPLE_MESSAGE -->*/
/* 	<!-- INCLUDE simple_footer.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
