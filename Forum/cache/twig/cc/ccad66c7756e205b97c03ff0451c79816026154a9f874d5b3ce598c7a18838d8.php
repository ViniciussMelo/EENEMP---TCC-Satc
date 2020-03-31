<?php

/* quickreply_editor.html */
class __TwigTemplate_5660832ccf0f75eb4c9f3b1e86d080d0e03ab65ec2870d2d001cb7102aa4e26d extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        if (isset($context["U_QR_ACTION"])) { $_U_QR_ACTION_ = $context["U_QR_ACTION"]; } else { $_U_QR_ACTION_ = null; }
        echo $_U_QR_ACTION_;
        echo "\" id=\"qr_postform\">
";
        // line 2
        if (isset($context["quickreply_editor_panel_before"])) { $_quickreply_editor_panel_before_ = $context["quickreply_editor_panel_before"]; } else { $_quickreply_editor_panel_before_ = null; }
        // line 3
        echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t\t<h2 class=\"quickreply-title\">";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("QUICKREPLY");
        echo "</h2>
\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t";
        // line 7
        if (isset($context["quickreply_editor_subject_before"])) { $_quickreply_editor_subject_before_ = $context["quickreply_editor_subject_before"]; } else { $_quickreply_editor_subject_before_ = null; }
        // line 8
        echo "\t\t\t\t\t<dl style=\"clear: left;\">
\t\t\t\t\t\t<dt><label for=\"subject\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
        // line 10
        if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
        echo $_SUBJECT_;
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        // line 12
        if (isset($context["quickreply_editor_message_before"])) { $_quickreply_editor_message_before_ = $context["quickreply_editor_message_before"]; } else { $_quickreply_editor_message_before_ = null; }
        // line 13
        echo "\t\t\t\t<div id=\"message-box\">
\t\t\t\t\t<textarea style=\"height: 9em;\" name=\"message\" rows=\"7\" cols=\"76\" tabindex=\"3\" class=\"inputbox\"></textarea>
\t\t\t\t</div>
\t\t\t\t";
        // line 16
        if (isset($context["quickreply_editor_message_after"])) { $_quickreply_editor_message_after_ = $context["quickreply_editor_message_after"]; } else { $_quickreply_editor_message_after_ = null; }
        // line 17
        echo "\t\t\t\t</fieldset>
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
        // line 19
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t\t\t\t\t";
        // line 20
        if (isset($context["QR_HIDDEN_FIELDS"])) { $_QR_HIDDEN_FIELDS_ = $context["QR_HIDDEN_FIELDS"]; } else { $_QR_HIDDEN_FIELDS_ = null; }
        echo $_QR_HIDDEN_FIELDS_;
        echo "
\t\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "\" class=\"button2\" id=\"qr_full_editor\" />&nbsp;
\t\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"7\" name=\"post\" value=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />&nbsp;
\t\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        // line 26
        if (isset($context["quickreply_editor_panel_after"])) { $_quickreply_editor_panel_after_ = $context["quickreply_editor_panel_after"]; } else { $_quickreply_editor_panel_after_ = null; }
        // line 27
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  86 => 26,  79 => 22,  75 => 21,  70 => 20,  65 => 19,  61 => 17,  59 => 16,  54 => 13,  52 => 12,  46 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 5,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* <form method="post" action="{U_QR_ACTION}" id="qr_postform">*/
/* <!-- EVENT quickreply_editor_panel_before -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 				<h2 class="quickreply-title">{L_QUICKREPLY}</h2>*/
/* 				<fieldset class="fields1">*/
/* 				<!-- EVENT quickreply_editor_subject_before -->*/
/* 					<dl style="clear: left;">*/
/* 						<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 						<dd><input type="text" name="subject" id="subject" size="45" maxlength="124" tabindex="2" value="{SUBJECT}" class="inputbox autowidth" /></dd>*/
/* 					</dl>*/
/* 				<!-- EVENT quickreply_editor_message_before -->*/
/* 				<div id="message-box">*/
/* 					<textarea style="height: 9em;" name="message" rows="7" cols="76" tabindex="3" class="inputbox"></textarea>*/
/* 				</div>*/
/* 				<!-- EVENT quickreply_editor_message_after -->*/
/* 				</fieldset>*/
/* 				<fieldset class="submit-buttons">*/
/* 					{S_FORM_TOKEN}*/
/* 					{QR_HIDDEN_FIELDS}*/
/* 					<input type="submit" accesskey="f" tabindex="6" name="preview" value="{L_FULL_EDITOR}" class="button2" id="qr_full_editor" />&nbsp;*/
/* 					<input type="submit" accesskey="s" tabindex="7" name="post" value="{L_SUBMIT}" class="button1" />&nbsp;*/
/* 				</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- EVENT quickreply_editor_panel_after -->*/
/* </form>*/
/* */
