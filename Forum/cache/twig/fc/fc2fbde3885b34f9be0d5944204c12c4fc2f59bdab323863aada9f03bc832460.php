<?php

/* acp_styles.html */
class __TwigTemplate_e7f81b91ec9fff2b22af8b8854f0e4c21315706f7acf143a2ee88e6db83d48cc extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_styles.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_STYLE_DETAILS"])) { $_S_STYLE_DETAILS_ = $context["S_STYLE_DETAILS"]; } else { $_S_STYLE_DETAILS_ = null; }
        if ($_S_STYLE_DETAILS_) {
            // line 6
            echo "\t<a href=\"";
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
        if ($_S_CONFIRM_ACTION_) {
            // line 10
            echo "<form id=\"confirm\" method=\"post\" action=\"";
            if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
            echo $_S_CONFIRM_ACTION_;
            echo "\">

<fieldset>
\t<h1>";
            // line 13
            if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
            echo $_MESSAGE_TITLE_;
            echo "</h1>
\t<p>";
            // line 14
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</p>
\t";
            // line 15
            if (isset($context["S_CONFIRM_DELETE"])) { $_S_CONFIRM_DELETE_ = $context["S_CONFIRM_DELETE"]; } else { $_S_CONFIRM_DELETE_ = null; }
            if ($_S_CONFIRM_DELETE_) {
                // line 16
                echo "\t<label><input type=\"checkbox\" class=\"checkbox\" name=\"confirm_delete_files\" /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_FROM_FS");
                echo "</label>
\t";
            }
            // line 18
            echo "
\t";
            // line 19
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</div>

</fieldset>

</form>
";
        } else {
            // line 30
            echo "
";
            // line 31
            if (isset($context["L_TITLE"])) { $_L_TITLE_ = $context["L_TITLE"]; } else { $_L_TITLE_ = null; }
            if ($_L_TITLE_) {
                echo "<h1>";
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</h1>";
            }
            // line 32
            echo "
";
            // line 33
            if (isset($context["L_EXPLAIN"])) { $_L_EXPLAIN_ = $context["L_EXPLAIN"]; } else { $_L_EXPLAIN_ = null; }
            if ($_L_EXPLAIN_) {
                echo "<p>";
                echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
                echo "</p>";
            }
            // line 34
            echo "
<fieldset class=\"quick\">
\t<span class=\"small\"><a href=\"https://www.phpbb.com/go/customise/styles/3.1\" target=\"_blank\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("BROWSE_STYLES_DATABASE");
            echo "</a></span>
</fieldset>

<form id=\"acp_styles\" method=\"post\" action=\"";
            // line 39
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
";
            // line 40
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
";
            // line 41
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "

";
            // line 43
            if (isset($context["S_STYLE_DETAILS"])) { $_S_STYLE_DETAILS_ = $context["S_STYLE_DETAILS"]; } else { $_S_STYLE_DETAILS_ = null; }
            if ($_S_STYLE_DETAILS_) {
                // line 44
                echo "\t<input type=\"hidden\" name=\"id\" value=\"";
                if (isset($context["STYLE_ID"])) { $_STYLE_ID_ = $context["STYLE_ID"]; } else { $_STYLE_ID_ = null; }
                echo $_STYLE_ID_;
                echo "\" />
\t<fieldset>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"name\" name=\"style_name\" value=\"";
                // line 48
                if (isset($context["STYLE_NAME"])) { $_STYLE_NAME_ = $context["STYLE_NAME"]; } else { $_STYLE_NAME_ = null; }
                echo $_STYLE_NAME_;
                echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 52
                if (isset($context["STYLE_PATH"])) { $_STYLE_PATH_ = $context["STYLE_PATH"]; } else { $_STYLE_PATH_ = null; }
                echo $_STYLE_PATH_;
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("STYLE_VERSION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 56
                if (isset($context["STYLE_VERSION"])) { $_STYLE_VERSION_ = $context["STYLE_VERSION"]; } else { $_STYLE_VERSION_ = null; }
                echo $_STYLE_VERSION_;
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("COPYRIGHT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 60
                if (isset($context["STYLE_COPYRIGHT"])) { $_STYLE_COPYRIGHT_ = $context["STYLE_COPYRIGHT"]; } else { $_STYLE_COPYRIGHT_ = null; }
                echo $_STYLE_COPYRIGHT_;
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_parent\">";
                // line 63
                echo $this->env->getExtension('phpbb')->lang("INHERITING_FROM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"style_parent\" name=\"style_parent\">
\t\t\t<option value=\"\"";
                // line 65
                if (isset($context["STYLE_PARENT"])) { $_STYLE_PARENT_ = $context["STYLE_PARENT"]; } else { $_STYLE_PARENT_ = null; }
                if (($_STYLE_PARENT_ == 0)) {
                    echo " selected=\"selected\"";
                }
                echo "> - </option>
\t\t\t";
                // line 66
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "parent_styles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_styles"]) {
                    // line 67
                    echo "\t\t\t\t<option value=\"";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "STYLE_ID", array());
                    echo "\"";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    if (isset($context["STYLE_PARENT"])) { $_STYLE_PARENT_ = $context["STYLE_PARENT"]; } else { $_STYLE_PARENT_ = null; }
                    if (($this->getAttribute($_parent_styles_, "STYLE_ID", array()) == $_STYLE_PARENT_)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "SPACER", array());
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "STYLE_NAME", array());
                    echo "</option>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_styles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_active\">";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("STYLE_ACTIVE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"1\"";
                // line 73
                if (isset($context["S_STYLE_ACTIVE"])) { $_S_STYLE_ACTIVE_ = $context["S_STYLE_ACTIVE"]; } else { $_S_STYLE_ACTIVE_ = null; }
                if ($_S_STYLE_ACTIVE_) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"0\"";
                // line 74
                if (isset($context["S_STYLE_ACTIVE"])) { $_S_STYLE_ACTIVE_ = $context["S_STYLE_ACTIVE"]; } else { $_S_STYLE_ACTIVE_ = null; }
                if ( !$_S_STYLE_ACTIVE_) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label></dd>
\t</dl>
\t";
                // line 76
                if (isset($context["S_STYLE_DEFAULT"])) { $_S_STYLE_DEFAULT_ = $context["S_STYLE_DEFAULT"]; } else { $_S_STYLE_DEFAULT_ = null; }
                if ( !$_S_STYLE_DEFAULT_) {
                    // line 77
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"style_default\">";
                    // line 78
                    echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_default\" value=\"1\" /> ";
                    // line 79
                    echo $this->env->getExtension('phpbb')->lang("YES");
                    echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"style_default\" name=\"style_default\" value=\"0\" checked=\"checked\" /> ";
                    // line 80
                    echo $this->env->getExtension('phpbb')->lang("NO");
                    echo "</label></dd>
\t\t</dl>
\t";
                }
                // line 83
                echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 87
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 88
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t";
                // line 89
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t</fieldset>
";
            }
            // line 92
            echo "
";
            // line 93
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "styles_list", array()))) {
                // line 94
                echo "\t";
                if (isset($context["acp_styles_list_before"])) { $_acp_styles_list_before_ = $context["acp_styles_list_before"]; } else { $_acp_styles_list_before_ = null; }
                // line 95
                echo "\t<table class=\"table1 styles\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 98
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo "</th>
\t\t";
                // line 99
                if (isset($context["STYLES_LIST_HIDE_COUNT"])) { $_STYLES_LIST_HIDE_COUNT_ = $context["STYLES_LIST_HIDE_COUNT"]; } else { $_STYLES_LIST_HIDE_COUNT_ = null; }
                if ( !$_STYLES_LIST_HIDE_COUNT_) {
                    echo "<th width=\"10%\" style=\"white-space: nowrap; text-align: center;\">";
                    echo $this->env->getExtension('phpbb')->lang("STYLE_USED_BY");
                    echo "</th>";
                }
                // line 100
                echo "\t\t<th width=\"25%\" style=\"white-space: nowrap; text-align: center;\">";
                echo $this->env->getExtension('phpbb')->lang("ACTIONS");
                echo "</th>
\t\t";
                // line 101
                if (isset($context["STYLES_LIST_EXTRA"])) { $_STYLES_LIST_EXTRA_ = $context["STYLES_LIST_EXTRA"]; } else { $_STYLES_LIST_EXTRA_ = null; }
                echo $_STYLES_LIST_EXTRA_;
                echo "
\t\t<th>&nbsp;</th>
\t</tr>
\t</thead>
\t";
                // line 105
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "styles_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["styles_list"]) {
                    // line 106
                    echo "\t<tbody id=\"styles-list-";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "S_ROW_COUNT", array());
                    echo "\">
\t<tr class=\"row-highlight";
                    // line 107
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "STYLE_ID", array()) &&  !$this->getAttribute($_styles_list_, "STYLE_ACTIVE", array()))) {
                        echo " row-inactive";
                    }
                    echo "\">
\t\t";
                    // line 108
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "LEVEL", array()) % 2 == 1)) {
                        // line 109
                        echo "\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if (($this->getAttribute($_definition_, "ROW_CLASS", array()) == "row1a")) {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row1b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row1a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 110
                        echo "\t\t";
                    } else {
                        // line 111
                        echo "\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if (($this->getAttribute($_definition_, "ROW_CLASS", array()) == "row2a")) {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row2b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row2a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 112
                        echo "\t\t";
                    }
                    // line 113
                    echo "\t\t<td class=\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS", array());
                    echo "\" style=\"padding-";
                    if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                    echo $_S_CONTENT_FLOW_BEGIN_;
                    echo ": ";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "PADDING", array());
                    echo "px;\">
\t\t\t";
                    // line 114
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if ((($this->getAttribute($_styles_list_, "STYLE_ID", array()) && ($this->getAttribute($_styles_list_, "COMMENT", array()) == "")) && $this->getAttribute($_styles_list_, "STYLE_ACTIVE", array()))) {
                        // line 115
                        echo "\t\t\t\t<div class=\"default-style\" style=\"display: none; float: ";
                        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                        echo $_S_CONTENT_FLOW_END_;
                        echo ";\">
\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"default\" value=\"";
                        // line 116
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_ID", array());
                        echo "\"";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if ($this->getAttribute($_styles_list_, "DEFAULT", array())) {
                            echo " checked=\"checked\"";
                        } else {
                            if (isset($context["S_DEFAULT"])) { $_S_DEFAULT_ = $context["S_DEFAULT"]; } else { $_S_DEFAULT_ = null; }
                            $value = 1;
                            $context['definition']->set('S_DEFAULT', $value);
                        }
                        echo " title=\"";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                        echo "\" />
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "DEFAULT", array()) || $this->getAttribute($_styles_list_, "SHOW_COPYRIGHT", array()))) {
                        // line 120
                        echo "\t\t\t\t<strong>";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_NAME", array());
                        echo "</strong>
\t\t\t\t";
                        // line 121
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if (($this->getAttribute($_styles_list_, "SHOW_COPYRIGHT", array()) && ($this->getAttribute($_styles_list_, "COMMENT", array()) == ""))) {
                            echo "<span><br />";
                            if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                            echo $this->getAttribute($_styles_list_, "STYLE_COPYRIGHT", array());
                            echo "</span>";
                        }
                        // line 122
                        echo "\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t<span>";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_NAME", array());
                        echo "</span>
\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "COMMENT", array()) != "")) {
                        // line 126
                        echo "\t\t\t\t<span class=\"error\"><br />";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "COMMENT", array());
                        echo "</span>
\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (( !$this->getAttribute($_styles_list_, "STYLE_ID", array()) && ($this->getAttribute($_styles_list_, "COMMENT", array()) == ""))) {
                        // line 129
                        echo "\t\t\t\t<span class=\"style-path\"><br />";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_PATH_FULL", array());
                        echo "</span>
\t\t\t";
                    }
                    // line 131
                    echo "\t\t</td>
\t\t";
                    // line 132
                    if (isset($context["STYLES_LIST_HIDE_COUNT"])) { $_STYLES_LIST_HIDE_COUNT_ = $context["STYLES_LIST_HIDE_COUNT"]; } else { $_STYLES_LIST_HIDE_COUNT_ = null; }
                    if ( !$_STYLES_LIST_HIDE_COUNT_) {
                        // line 133
                        echo "\t\t\t<td class=\"";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        echo $this->getAttribute($_definition_, "ROW_CLASS", array());
                        echo " users\">";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "USERS", array());
                        echo "</td>
\t\t";
                    }
                    // line 135
                    echo "\t\t<td class=\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS", array());
                    echo " actions\">
\t\t\t";
                    // line 136
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_styles_list_, "actions", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                        // line 137
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        if (($this->getAttribute($_actions_, "S_ROW_COUNT", array()) > 0)) {
                            echo " | ";
                        }
                        // line 138
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        if ($this->getAttribute($_actions_, "U_ACTION", array())) {
                            // line 139
                            echo "\t\t\t\t\t<a href=\"";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "U_ACTION", array());
                            echo "\"";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "U_ACTION_ATTR", array());
                            echo ">";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "L_ACTION", array());
                            echo "</a>
\t\t\t\t";
                        }
                        // line 141
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        echo $this->getAttribute($_actions_, "HTML", array());
                        echo "
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "\t\t</td>
\t\t";
                    // line 144
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "EXTRA", array());
                    echo "
\t\t<td class=\"";
                    // line 145
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS", array());
                    echo " mark\" width=\"20\">
\t\t\t";
                    // line 146
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if ($this->getAttribute($_styles_list_, "STYLE_ID", array())) {
                        // line 147
                        echo "\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"ids[]\" value=\"";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_ID", array());
                        echo "\" />
\t\t\t";
                    } else {
                        // line 149
                        echo "\t\t\t\t";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if (($this->getAttribute($_styles_list_, "COMMENT", array()) != "")) {
                            // line 150
                            echo "\t\t\t\t\t&nbsp;
\t\t\t\t";
                        } else {
                            // line 152
                            echo "\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"dirs[]\" value=\"";
                            if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                            echo $this->getAttribute($_styles_list_, "STYLE_PATH", array());
                            echo "\" />
\t\t\t\t";
                        }
                        // line 154
                        echo "\t\t\t";
                    }
                    // line 155
                    echo "\t\t</td>
\t</tr>
\t</tbody>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t</table>
";
            }
            // line 161
            echo "
";
            // line 162
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "extra_actions", array()))) {
                // line 163
                echo "\t<fieldset class=\"quick\">
\t\t";
                // line 164
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "extra_actions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["extra_actions"]) {
                    // line 165
                    echo "\t\t\t<input type=\"submit\" name=\"";
                    if (isset($context["extra_actions"])) { $_extra_actions_ = $context["extra_actions"]; } else { $_extra_actions_ = null; }
                    echo $this->getAttribute($_extra_actions_, "ACTION_NAME", array());
                    echo "\" class=\"button2\" value=\"";
                    if (isset($context["extra_actions"])) { $_extra_actions_ = $context["extra_actions"]; } else { $_extra_actions_ = null; }
                    echo $this->getAttribute($_extra_actions_, "L_ACTION", array());
                    echo "\" />
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "\t</fieldset>
";
            }
            // line 169
            echo "
</form>

";
        }
        // line 173
        echo "
";
        // line 174
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_styles.html", 174)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_styles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 174,  658 => 173,  652 => 169,  648 => 167,  635 => 165,  630 => 164,  627 => 163,  624 => 162,  621 => 161,  617 => 159,  608 => 155,  605 => 154,  598 => 152,  594 => 150,  590 => 149,  583 => 147,  580 => 146,  575 => 145,  570 => 144,  567 => 143,  557 => 141,  544 => 139,  540 => 138,  534 => 137,  529 => 136,  523 => 135,  513 => 133,  510 => 132,  507 => 131,  497 => 129,  493 => 128,  486 => 126,  482 => 125,  475 => 123,  472 => 122,  464 => 121,  458 => 120,  454 => 119,  436 => 116,  430 => 115,  427 => 114,  415 => 113,  412 => 112,  400 => 111,  397 => 110,  385 => 109,  382 => 108,  375 => 107,  369 => 106,  364 => 105,  356 => 101,  351 => 100,  344 => 99,  340 => 98,  335 => 95,  332 => 94,  329 => 93,  326 => 92,  319 => 89,  315 => 88,  311 => 87,  307 => 86,  302 => 83,  296 => 80,  292 => 79,  287 => 78,  284 => 77,  281 => 76,  271 => 74,  262 => 73,  257 => 72,  252 => 69,  231 => 67,  226 => 66,  219 => 65,  213 => 63,  206 => 60,  201 => 59,  194 => 56,  189 => 55,  182 => 52,  177 => 51,  170 => 48,  165 => 47,  157 => 44,  154 => 43,  148 => 41,  143 => 40,  138 => 39,  132 => 36,  128 => 34,  121 => 33,  118 => 32,  111 => 31,  108 => 30,  98 => 23,  94 => 22,  87 => 19,  84 => 18,  78 => 16,  75 => 15,  70 => 14,  65 => 13,  57 => 10,  54 => 9,  51 => 8,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_STYLE_DETAILS -->*/
/* 	<a href="{U_ACTION}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_CONFIRM_ACTION -->*/
/* <form id="confirm" method="post" action="{S_CONFIRM_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<h1>{MESSAGE_TITLE}</h1>*/
/* 	<p>{MESSAGE_TEXT}</p>*/
/* 	<!-- IF S_CONFIRM_DELETE -->*/
/* 	<label><input type="checkbox" class="checkbox" name="confirm_delete_files" /> {L_DELETE_FROM_FS}</label>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	{S_HIDDEN_FIELDS}*/
/* */
/* 	<div style="text-align: center;">*/
/* 		<input type="submit" name="confirm" value="{L_YES}" class="button2" />&nbsp;*/
/* 		<input type="submit" name="cancel" value="{L_NO}" class="button2" />*/
/* 	</div>*/
/* */
/* </fieldset>*/
/* */
/* </form>*/
/* <!-- ELSE -->*/
/* */
/* <!-- IF L_TITLE --><h1>{L_TITLE}</h1><!-- ENDIF -->*/
/* */
/* <!-- IF L_EXPLAIN --><p>{L_EXPLAIN}</p><!-- ENDIF -->*/
/* */
/* <fieldset class="quick">*/
/* 	<span class="small"><a href="https://www.phpbb.com/go/customise/styles/3.1" target="_blank">{L_BROWSE_STYLES_DATABASE}</a></span>*/
/* </fieldset>*/
/* */
/* <form id="acp_styles" method="post" action="{U_ACTION}">*/
/* {S_HIDDEN_FIELDS}*/
/* {S_FORM_TOKEN}*/
/* */
/* <!-- IF S_STYLE_DETAILS -->*/
/* 	<input type="hidden" name="id" value="{STYLE_ID}" />*/
/* 	<fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="name">{L_STYLE_NAME}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" id="name" name="style_name" value="{STYLE_NAME}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_STYLE_PATH}{L_COLON}</label></dt>*/
/* 		<dd><strong>{STYLE_PATH}</strong></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_STYLE_VERSION}{L_COLON}</label></dt>*/
/* 		<dd><strong>{STYLE_VERSION}</strong></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="name">{L_COPYRIGHT}{L_COLON}</label></dt>*/
/* 		<dd><strong>{STYLE_COPYRIGHT}</strong></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="style_parent">{L_INHERITING_FROM}{L_COLON}</label></dt>*/
/* 		<dd><select id="style_parent" name="style_parent">*/
/* 			<option value=""<!-- IF STYLE_PARENT == 0 --> selected="selected"<!-- ENDIF -->> - </option>*/
/* 			<!-- BEGIN parent_styles -->*/
/* 				<option value="{parent_styles.STYLE_ID}"<!-- IF parent_styles.STYLE_ID == STYLE_PARENT --> selected="selected"<!-- ENDIF -->>{parent_styles.SPACER}{parent_styles.STYLE_NAME}</option>*/
/* 			<!-- END parent_styles -->*/
/* 		</select></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="style_active">{L_STYLE_ACTIVE}{L_COLON}</label></dt>*/
/* 		<dd><label><input type="radio" class="radio" name="style_active" value="1"<!-- IF S_STYLE_ACTIVE --> id="style_active" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" name="style_active" value="0"<!-- IF not S_STYLE_ACTIVE --> id="style_active" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* 	<!-- IF not S_STYLE_DEFAULT -->*/
/* 		<dl>*/
/* 			<dt><label for="style_default">{L_STYLE_DEFAULT}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="style_default" value="1" /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" id="style_default" name="style_default" value="0" checked="checked" /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<legend>{L_SUBMIT}</legend>*/
/* 		<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .styles_list -->*/
/* 	<!-- EVENT acp_styles_list_before -->*/
/* 	<table class="table1 styles">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_STYLE_NAME}</th>*/
/* 		<!-- IF not STYLES_LIST_HIDE_COUNT --><th width="10%" style="white-space: nowrap; text-align: center;">{L_STYLE_USED_BY}</th><!-- ENDIF -->*/
/* 		<th width="25%" style="white-space: nowrap; text-align: center;">{L_ACTIONS}</th>*/
/* 		{STYLES_LIST_EXTRA}*/
/* 		<th>&nbsp;</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<!-- BEGIN styles_list -->*/
/* 	<tbody id="styles-list-{styles_list.S_ROW_COUNT}">*/
/* 	<tr class="row-highlight<!-- IF styles_list.STYLE_ID and not styles_list.STYLE_ACTIVE --> row-inactive<!-- ENDIF -->">*/
/* 		<!-- IF styles_list.LEVEL is odd -->*/
/* 			<!-- IF $ROW_CLASS == 'row1a' --><!-- DEFINE $ROW_CLASS = 'row1b' --><!-- ELSE --><!-- DEFINE $ROW_CLASS = 'row1a' --><!-- ENDIF -->*/
/* 		<!-- ELSE -->*/
/* 			<!-- IF $ROW_CLASS == 'row2a' --><!-- DEFINE $ROW_CLASS = 'row2b' --><!-- ELSE --><!-- DEFINE $ROW_CLASS = 'row2a' --><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<td class="{$ROW_CLASS}" style="padding-{S_CONTENT_FLOW_BEGIN}: {styles_list.PADDING}px;">*/
/* 			<!-- IF styles_list.STYLE_ID and styles_list.COMMENT == '' and styles_list.STYLE_ACTIVE -->*/
/* 				<div class="default-style" style="display: none; float: {S_CONTENT_FLOW_END};">*/
/* 					<input class="radio" type="radio" name="default" value="{styles_list.STYLE_ID}"<!-- IF styles_list.DEFAULT --> checked="checked"<!-- ELSE --><!-- DEFINE $S_DEFAULT = 1 --><!-- ENDIF --> title="{L_STYLE_DEFAULT}" />*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF styles_list.DEFAULT or styles_list.SHOW_COPYRIGHT -->*/
/* 				<strong>{styles_list.STYLE_NAME}</strong>*/
/* 				<!-- IF styles_list.SHOW_COPYRIGHT and styles_list.COMMENT == '' --><span><br />{styles_list.STYLE_COPYRIGHT}</span><!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				<span>{styles_list.STYLE_NAME}</span>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF styles_list.COMMENT != '' -->*/
/* 				<span class="error"><br />{styles_list.COMMENT}</span>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF not styles_list.STYLE_ID and styles_list.COMMENT == '' -->*/
/* 				<span class="style-path"><br />{L_STYLE_PATH}{L_COLON} {styles_list.STYLE_PATH_FULL}</span>*/
/* 			<!-- ENDIF -->*/
/* 		</td>*/
/* 		<!-- IF not STYLES_LIST_HIDE_COUNT -->*/
/* 			<td class="{$ROW_CLASS} users">{styles_list.USERS}</td>*/
/* 		<!-- ENDIF -->*/
/* 		<td class="{$ROW_CLASS} actions">*/
/* 			<!-- BEGIN actions -->*/
/* 				<!-- IF styles_list.actions.S_ROW_COUNT > 0 --> | <!-- ENDIF -->*/
/* 				<!-- IF styles_list.actions.U_ACTION -->*/
/* 					<a href="{styles_list.actions.U_ACTION}"{styles_list.actions.U_ACTION_ATTR}>{styles_list.actions.L_ACTION}</a>*/
/* 				<!-- ENDIF -->*/
/* 				{styles_list.actions.HTML}*/
/* 			<!-- END actions -->*/
/* 		</td>*/
/* 		{styles_list.EXTRA}*/
/* 		<td class="{$ROW_CLASS} mark" width="20">*/
/* 			<!-- IF styles_list.STYLE_ID -->*/
/* 				<input class="checkbox" type="checkbox" name="ids[]" value="{styles_list.STYLE_ID}" />*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF styles_list.COMMENT != '' -->*/
/* 					&nbsp;*/
/* 				<!-- ELSE -->*/
/* 					<input class="checkbox" type="checkbox" name="dirs[]" value="{styles_list.STYLE_PATH}" />*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	<!-- END styles_list -->*/
/* 	</table>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .extra_actions -->*/
/* 	<fieldset class="quick">*/
/* 		<!-- BEGIN extra_actions -->*/
/* 			<input type="submit" name="{extra_actions.ACTION_NAME}" class="button2" value="{extra_actions.L_ACTION}" />*/
/* 		<!-- END extra_actions -->*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
