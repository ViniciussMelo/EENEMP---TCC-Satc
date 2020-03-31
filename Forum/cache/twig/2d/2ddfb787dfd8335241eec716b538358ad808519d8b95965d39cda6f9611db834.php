<?php

/* profilefields/string.html */
class __TwigTemplate_fcd1816cec08d79772f767ddc71f98665de1cb2261c599cdb87d81216fb54d8a extends Twig_Template
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
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "string", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["string"]) {
            // line 2
            echo "<input type=\"text\" class=\"inputbox autowidth\" name=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_IDENT", array());
            echo "\" id=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_IDENT", array());
            echo "\" size=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_LENGTH", array());
            echo "\" maxlength=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_MAXLEN", array());
            echo "\" value=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_VALUE", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['string'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/string.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN string -->*/
/* <input type="text" class="inputbox autowidth" name="{string.FIELD_IDENT}" id="{string.FIELD_IDENT}" size="{string.FIELD_LENGTH}" maxlength="{string.FIELD_MAXLEN}" value="{string.FIELD_VALUE}" />*/
/* <!-- END string -->*/
/* */
