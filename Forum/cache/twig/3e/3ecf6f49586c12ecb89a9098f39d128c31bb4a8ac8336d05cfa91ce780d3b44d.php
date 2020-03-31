<?php

/* profilefields/url.html */
class __TwigTemplate_224f692eb1bf9ea3b4cea958ecc6457962fbf4fea367896010d0187c1766bbeb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "url", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 2
            echo "<input type=\"url\" class=\"inputbox autowidth\" name=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo $this->getAttribute($_url_, "FIELD_IDENT", array());
            echo "\" id=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo $this->getAttribute($_url_, "FIELD_IDENT", array());
            echo "\" size=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo $this->getAttribute($_url_, "FIELD_LENGTH", array());
            echo "\" maxlength=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo $this->getAttribute($_url_, "FIELD_MAXLEN", array());
            echo "\" value=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo $this->getAttribute($_url_, "FIELD_VALUE", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/url.html";
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
/* <!-- BEGIN url -->*/
/* <input type="url" class="inputbox autowidth" name="{url.FIELD_IDENT}" id="{url.FIELD_IDENT}" size="{url.FIELD_LENGTH}" maxlength="{url.FIELD_MAXLEN}" value="{url.FIELD_VALUE}" />*/
/* <!-- END url -->*/
/* */
