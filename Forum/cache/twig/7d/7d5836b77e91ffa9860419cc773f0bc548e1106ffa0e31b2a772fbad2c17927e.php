<?php

/* ucp_prefs_personal.html */
class __TwigTemplate_6edb95cfff7f67a24d2bada5476697386fe7fcaee826035f50175b37f762c7ee extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
        // line 11
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 12
        echo "\t";
        if (isset($context["ucp_prefs_personal_prepend"])) { $_ucp_prefs_personal_prepend_ = $context["ucp_prefs_personal_prepend"]; } else { $_ucp_prefs_personal_prepend_ = null; }
        // line 13
        echo "\t<dl>
\t\t<dt><label for=\"viewemail0\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SHOW_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"viewemail1\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
        // line 16
        if (isset($context["S_VIEW_EMAIL"])) { $_S_VIEW_EMAIL_ = $context["S_VIEW_EMAIL"]; } else { $_S_VIEW_EMAIL_ = null; }
        if ($_S_VIEW_EMAIL_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"viewemail0\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
        // line 17
        if (isset($context["S_VIEW_EMAIL"])) { $_S_VIEW_EMAIL_ = $context["S_VIEW_EMAIL"]; } else { $_S_VIEW_EMAIL_ = null; }
        if ( !$_S_VIEW_EMAIL_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"massemail1\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("ADMIN_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"massemail1\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 23
        if (isset($context["S_MASS_EMAIL"])) { $_S_MASS_EMAIL_ = $context["S_MASS_EMAIL"]; } else { $_S_MASS_EMAIL_ = null; }
        if ($_S_MASS_EMAIL_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"massemail0\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 24
        if (isset($context["S_MASS_EMAIL"])) { $_S_MASS_EMAIL_ = $context["S_MASS_EMAIL"]; } else { $_S_MASS_EMAIL_ = null; }
        if ( !$_S_MASS_EMAIL_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"allowpm1\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ALLOW_PM_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"allowpm1\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 30
        if (isset($context["S_ALLOW_PM"])) { $_S_ALLOW_PM_ = $context["S_ALLOW_PM"]; } else { $_S_ALLOW_PM_ = null; }
        if ($_S_ALLOW_PM_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"allowpm0\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 31
        if (isset($context["S_ALLOW_PM"])) { $_S_ALLOW_PM_ = $context["S_ALLOW_PM"]; } else { $_S_ALLOW_PM_ = null; }
        if ( !$_S_ALLOW_PM_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 34
        if (isset($context["S_CAN_HIDE_ONLINE"])) { $_S_CAN_HIDE_ONLINE_ = $context["S_CAN_HIDE_ONLINE"]; } else { $_S_CAN_HIDE_ONLINE_ = null; }
        if ($_S_CAN_HIDE_ONLINE_) {
            // line 35
            echo "\t\t<dl>
\t\t\t<dt><label for=\"hideonline0\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("HIDE_ONLINE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"hideonline1\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 38
            if (isset($context["S_HIDE_ONLINE"])) { $_S_HIDE_ONLINE_ = $context["S_HIDE_ONLINE"]; } else { $_S_HIDE_ONLINE_ = null; }
            if ($_S_HIDE_ONLINE_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label for=\"hideonline0\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 39
            if (isset($context["S_HIDE_ONLINE"])) { $_S_HIDE_ONLINE_ = $context["S_HIDE_ONLINE"]; } else { $_S_HIDE_ONLINE_ = null; }
            if ( !$_S_HIDE_ONLINE_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 43
        echo "\t";
        if (isset($context["S_SELECT_NOTIFY"])) { $_S_SELECT_NOTIFY_ = $context["S_SELECT_NOTIFY"]; } else { $_S_SELECT_NOTIFY_ = null; }
        if ($_S_SELECT_NOTIFY_) {
            // line 44
            echo "\t\t<dl>
\t\t\t<dt><label for=\"notifymethod0\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"notifymethod0\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 47
            if (isset($context["S_NOTIFY_EMAIL"])) { $_S_NOTIFY_EMAIL_ = $context["S_NOTIFY_EMAIL"]; } else { $_S_NOTIFY_EMAIL_ = null; }
            if ($_S_NOTIFY_EMAIL_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t<label for=\"notifymethod1\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 48
            if (isset($context["S_NOTIFY_IM"])) { $_S_NOTIFY_IM_ = $context["S_NOTIFY_IM"]; } else { $_S_NOTIFY_IM_ = null; }
            if ($_S_NOTIFY_IM_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t<label for=\"notifymethod2\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 49
            if (isset($context["S_NOTIFY_BOTH"])) { $_S_NOTIFY_BOTH_ = $context["S_NOTIFY_BOTH"]; } else { $_S_NOTIFY_BOTH_ = null; }
            if ($_S_NOTIFY_BOTH_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 53
        echo "\t";
        if (isset($context["S_MORE_LANGUAGES"])) { $_S_MORE_LANGUAGES_ = $context["S_MORE_LANGUAGES"]; } else { $_S_MORE_LANGUAGES_ = null; }
        if ($_S_MORE_LANGUAGES_) {
            // line 54
            echo "\t\t<dl>
\t\t\t<dt><label for=\"lang\">";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("BOARD_LANGUAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"lang\" id=\"lang\">";
            // line 56
            if (isset($context["S_LANG_OPTIONS"])) { $_S_LANG_OPTIONS_ = $context["S_LANG_OPTIONS"]; } else { $_S_LANG_OPTIONS_ = null; }
            echo $_S_LANG_OPTIONS_;
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 59
        echo "\t";
        if (isset($context["S_STYLE_OPTIONS"])) { $_S_STYLE_OPTIONS_ = $context["S_STYLE_OPTIONS"]; } else { $_S_STYLE_OPTIONS_ = null; }
        if (isset($context["S_MORE_STYLES"])) { $_S_MORE_STYLES_ = $context["S_MORE_STYLES"]; } else { $_S_MORE_STYLES_ = null; }
        if (($_S_STYLE_OPTIONS_ && $_S_MORE_STYLES_)) {
            // line 60
            echo "\t\t<dl>
\t\t\t<dt><label for=\"user_style\">";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("BOARD_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"user_style\" id=\"user_style\">";
            // line 62
            if (isset($context["S_STYLE_OPTIONS"])) { $_S_STYLE_OPTIONS_ = $context["S_STYLE_OPTIONS"]; } else { $_S_STYLE_OPTIONS_ = null; }
            echo $_S_STYLE_OPTIONS_;
            echo "</select></dd>
\t\t</dl>
\t";
        }
        // line 65
        echo "\t";
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_prefs_personal.html", 65)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 66
        echo "\t<dl>
\t\t<dt><label for=\"dateformat\">";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("BOARD_DATE_FORMAT_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<select name=\"dateoptions\" id=\"dateoptions\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">
\t\t\t\t";
        // line 70
        if (isset($context["S_DATEFORMAT_OPTIONS"])) { $_S_DATEFORMAT_OPTIONS_ = $context["S_DATEFORMAT_OPTIONS"]; } else { $_S_DATEFORMAT_OPTIONS_ = null; }
        echo $_S_DATEFORMAT_OPTIONS_;
        echo "
\t\t\t</select>
\t\t</dd>
\t\t<dd id=\"custom_date\" style=\"display:none;\"><input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
        // line 73
        if (isset($context["DATE_FORMAT"])) { $_DATE_FORMAT_ = $context["DATE_FORMAT"]; } else { $_DATE_FORMAT_ = null; }
        echo $_DATE_FORMAT_;
        echo "\" maxlength=\"64\" class=\"inputbox narrow\" style=\"margin-top: 3px;\" /></dd>
\t</dl>
\t";
        // line 75
        if (isset($context["ucp_prefs_personal_append"])) { $_ucp_prefs_personal_append_ = $context["ucp_prefs_personal_append"]; } else { $_ucp_prefs_personal_append_ = null; }
        // line 76
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 82
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 84
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

<script type=\"text/javascript\">
// <![CDATA[
\tvar date_format = '";
        // line 90
        if (isset($context["A_DATE_FORMAT"])) { $_A_DATE_FORMAT_ = $context["A_DATE_FORMAT"]; } else { $_A_DATE_FORMAT_ = null; }
        echo $_A_DATE_FORMAT_;
        echo "';
\tvar default_dateformat = '";
        // line 91
        if (isset($context["A_DEFAULT_DATEFORMAT"])) { $_A_DEFAULT_DATEFORMAT_ = $context["A_DEFAULT_DATEFORMAT"]; } else { $_A_DEFAULT_DATEFORMAT_ = null; }
        echo $_A_DEFAULT_DATEFORMAT_;
        echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
// ]]>
</script>

";
        // line 124
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 124,  339 => 91,  334 => 90,  324 => 84,  320 => 83,  313 => 82,  305 => 76,  303 => 75,  297 => 73,  290 => 70,  281 => 67,  278 => 66,  265 => 65,  258 => 62,  253 => 61,  250 => 60,  245 => 59,  238 => 56,  233 => 55,  230 => 54,  226 => 53,  214 => 49,  205 => 48,  196 => 47,  190 => 45,  187 => 44,  183 => 43,  171 => 39,  162 => 38,  154 => 36,  151 => 35,  148 => 34,  137 => 31,  128 => 30,  120 => 28,  108 => 24,  99 => 23,  93 => 21,  81 => 17,  72 => 16,  66 => 14,  63 => 13,  60 => 12,  52 => 11,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 	<!-- EVENT ucp_prefs_personal_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="viewemail0">{L_SHOW_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="viewemail1"><input type="radio" name="viewemail" id="viewemail1" value="1"<!-- IF S_VIEW_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="viewemail0"><input type="radio" name="viewemail" id="viewemail0" value="0"<!-- IF not S_VIEW_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="massemail1">{L_ADMIN_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="massemail1"><input type="radio" name="massemail" id="massemail1" value="1"<!-- IF S_MASS_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="massemail0"><input type="radio" name="massemail" id="massemail0" value="0"<!-- IF not S_MASS_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="allowpm1">{L_ALLOW_PM}{L_COLON}</label><br /><span>{L_ALLOW_PM_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label for="allowpm1"><input type="radio" name="allowpm" id="allowpm1" value="1"<!-- IF S_ALLOW_PM --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label for="allowpm0"><input type="radio" name="allowpm" id="allowpm0" value="0"<!-- IF not S_ALLOW_PM --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF S_CAN_HIDE_ONLINE -->*/
/* 		<dl>*/
/* 			<dt><label for="hideonline0">{L_HIDE_ONLINE}{L_COLON}</label><br /><span>{L_HIDE_ONLINE_EXPLAIN}</span></dt>*/
/* 			<dd>*/
/* 				<label for="hideonline1"><input type="radio" name="hideonline" id="hideonline1" value="1"<!-- IF S_HIDE_ONLINE --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label for="hideonline0"><input type="radio" name="hideonline" id="hideonline0" value="0"<!-- IF not S_HIDE_ONLINE --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_SELECT_NOTIFY -->*/
/* 		<dl>*/
/* 			<dt><label for="notifymethod0">{L_NOTIFY_METHOD}{L_COLON}</label></dt>*/
/* 			<dd>*/
/* 				<label for="notifymethod0"><input type="radio" name="notifymethod" id="notifymethod0" value="0"<!-- IF S_NOTIFY_EMAIL --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_EMAIL}</label>*/
/* 				<label for="notifymethod1"><input type="radio" name="notifymethod" id="notifymethod1" value="1"<!-- IF S_NOTIFY_IM --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_IM}</label>*/
/* 				<label for="notifymethod2"><input type="radio" name="notifymethod" id="notifymethod2" value="2"<!-- IF S_NOTIFY_BOTH --> checked="checked"<!-- ENDIF --> /> {L_NOTIFY_METHOD_BOTH}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_MORE_LANGUAGES -->*/
/* 		<dl>*/
/* 			<dt><label for="lang">{L_BOARD_LANGUAGE}{L_COLON}</label></dt>*/
/* 			<dd><select name="lang" id="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_STYLE_OPTIONS and S_MORE_STYLES -->*/
/* 		<dl>*/
/* 			<dt><label for="user_style">{L_BOARD_STYLE}{L_COLON}</label></dt>*/
/* 			<dd><select name="user_style" id="user_style">{S_STYLE_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- INCLUDE timezone_option.html -->*/
/* 	<dl>*/
/* 		<dt><label for="dateformat">{L_BOARD_DATE_FORMAT}{L_COLON}</label><br /><span>{L_BOARD_DATE_FORMAT_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<select name="dateoptions" id="dateoptions" onchange="if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }">*/
/* 				{S_DATEFORMAT_OPTIONS}*/
/* 			</select>*/
/* 		</dd>*/
/* 		<dd id="custom_date" style="display:none;"><input type="text" name="dateformat" id="dateformat" value="{DATE_FORMAT}" maxlength="64" class="inputbox narrow" style="margin-top: 3px;" /></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT ucp_prefs_personal_append -->*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var date_format = '{A_DATE_FORMAT}';*/
/* 	var default_dateformat = '{A_DEFAULT_DATEFORMAT}';*/
/* */
/* 	function customDates()*/
/* 	{*/
/* 		var e = document.getElementById('dateoptions');*/
/* */
/* 		e.selectedIndex = e.length - 1;*/
/* */
/* 		// Loop and match date_format in menu*/
/* 		for (var i = 0; i < e.length; i++)*/
/* 		{*/
/* 			if (e.options[i].value == date_format)*/
/* 			{*/
/* 				e.selectedIndex = i;*/
/* 				break;*/
/* 			}*/
/* 		}*/
/* */
/* 		// Show/hide custom field*/
/* 		if (e.selectedIndex == e.length - 1)*/
/* 		{*/
/* 			phpbb.toggleDisplay('custom_date',1);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			phpbb.toggleDisplay('custom_date',-1);*/
/* 		}*/
/* 	}*/
/* */
/* 	window.onload = customDates;*/
/* // ]]>*/
/* </script>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
