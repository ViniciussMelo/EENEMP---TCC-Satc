<?php

/* memberlist_email.html */
class __TwigTemplate_ab611c4151cb9a02e965b0d580f653e2619206216937fc80de99a05d2623f0bb extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["memberlist_email_before"])) { $_memberlist_email_before_ = $context["memberlist_email_before"]; } else { $_memberlist_email_before_ = null; }
        // line 4
        echo "
";
        // line 5
        if (isset($context["S_CONTACT_ADMIN"])) { $_S_CONTACT_ADMIN_ = $context["S_CONTACT_ADMIN"]; } else { $_S_CONTACT_ADMIN_ = null; }
        if (isset($context["S_SEND_USER"])) { $_S_SEND_USER_ = $context["S_SEND_USER"]; } else { $_S_SEND_USER_ = null; }
        if ($_S_CONTACT_ADMIN_) {
            // line 6
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_ADMIN");
            echo "</h2>
";
        } elseif ($_S_SEND_USER_) {
            // line 8
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</h2>
";
        } else {
            // line 10
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
            echo "</h2>
";
        }
        // line 12
        echo "
<form method=\"post\" action=\"";
        // line 13
        if (isset($context["S_POST_ACTION"])) { $_S_POST_ACTION_ = $context["S_POST_ACTION"]; } else { $_S_POST_ACTION_ = null; }
        echo $_S_POST_ACTION_;
        echo "\" id=\"post\">

\t";
        // line 15
        if (isset($context["CONTACT_INFO"])) { $_CONTACT_INFO_ = $context["CONTACT_INFO"]; } else { $_CONTACT_INFO_ = null; }
        if ($_CONTACT_INFO_) {
            // line 16
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 20
            if (isset($context["CONTACT_INFO"])) { $_CONTACT_INFO_ = $context["CONTACT_INFO"]; } else { $_CONTACT_INFO_ = null; }
            echo $_CONTACT_INFO_;
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<br class=\"clear\" />
\t";
        }
        // line 27
        echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t<div class=\"content\">

\t\t";
        // line 32
        if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
        if ($_ERROR_MESSAGE_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
            echo $_ERROR_MESSAGE_;
            echo "</p>";
        }
        // line 33
        echo "\t\t<fieldset class=\"fields2\">
\t\t";
        // line 34
        if (isset($context["S_SEND_USER"])) { $_S_SEND_USER_ = $context["S_SEND_USER"]; } else { $_S_SEND_USER_ = null; }
        if (isset($context["S_CONTACT_ADMIN"])) { $_S_CONTACT_ADMIN_ = $context["S_CONTACT_ADMIN"]; } else { $_S_CONTACT_ADMIN_ = null; }
        if ($_S_SEND_USER_) {
            // line 35
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 37
            if (isset($context["USERNAME_FULL"])) { $_USERNAME_FULL_ = $context["USERNAME_FULL"]; } else { $_USERNAME_FULL_ = null; }
            echo $_USERNAME_FULL_;
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 41
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } elseif ($_S_CONTACT_ADMIN_) {
            // line 44
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 48
            if (isset($context["S_IS_REGISTERED"])) { $_S_IS_REGISTERED_ = $context["S_IS_REGISTERED"]; } else { $_S_IS_REGISTERED_ = null; }
            if ( !$_S_IS_REGISTERED_) {
                // line 49
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 51
                if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
                echo $_EMAIL_;
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 55
                if (isset($context["NAME"])) { $_NAME_ = $context["NAME"]; } else { $_NAME_ = null; }
                echo $_NAME_;
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 58
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 60
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } else {
            // line 63
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 65
            if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
            echo $_EMAIL_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 69
            if (isset($context["NAME"])) { $_NAME_ = $context["NAME"]; } else { $_NAME_ = null; }
            echo $_NAME_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"lang\">";
            // line 74
            if (isset($context["S_LANG_OPTIONS"])) { $_S_LANG_OPTIONS_ = $context["S_LANG_OPTIONS"]; } else { $_S_LANG_OPTIONS_ = null; }
            echo $_S_LANG_OPTIONS_;
            echo "</select></dd>
\t\t\t</dl>
\t\t";
        }
        // line 77
        echo "\t\t<dl>
\t\t\t<dt><label for=\"message\">";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 79
        echo $this->env->getExtension('phpbb')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea class=\"inputbox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 80
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 82
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 83
            echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("CC_SENDER");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 88
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
\t</div>
\t</div>
";
        // line 102
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</div>

</form>

";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 107,  290 => 102,  283 => 98,  271 => 88,  265 => 85,  261 => 83,  258 => 82,  252 => 80,  248 => 79,  243 => 78,  240 => 77,  233 => 74,  229 => 73,  224 => 72,  217 => 69,  212 => 68,  205 => 65,  200 => 64,  197 => 63,  190 => 60,  185 => 59,  182 => 58,  175 => 55,  170 => 54,  163 => 51,  158 => 50,  155 => 49,  152 => 48,  147 => 46,  142 => 45,  139 => 44,  132 => 41,  127 => 40,  120 => 37,  115 => 36,  112 => 35,  108 => 34,  105 => 33,  97 => 32,  90 => 27,  79 => 20,  73 => 16,  70 => 15,  64 => 13,  61 => 12,  55 => 10,  49 => 8,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT memberlist_email_before -->*/
/* */
/* <!-- IF S_CONTACT_ADMIN-->*/
/* <h2 class="titlespace">{L_CONTACT_ADMIN}</h2>*/
/* <!-- ELSEIF S_SEND_USER -->*/
/* <h2 class="titlespace">{L_SEND_EMAIL_USER}</h2>*/
/* <!-- ELSE -->*/
/* <h2 class="titlespace">{L_EMAIL_TOPIC}</h2>*/
/* <!-- ENDIF -->*/
/* */
/* <form method="post" action="{S_POST_ACTION}" id="post">*/
/* */
/* 	<!-- IF CONTACT_INFO -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			<div class="postbody">*/
/* 				<div class="content">*/
/* 					{CONTACT_INFO}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		<br class="clear" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 	<div class="content">*/
/* */
/* 		<!-- IF ERROR_MESSAGE --><p class="error">{ERROR_MESSAGE}</p><!-- ENDIF -->*/
/* 		<fieldset class="fields2">*/
/* 		<!-- IF S_SEND_USER -->*/
/* 			<dl>*/
/* 				<dt><label>{L_RECIPIENT}{L_COLON}</label></dt>*/
/* 				<dd><strong>{USERNAME_FULL}</strong></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="subject" id="subject" size="50" tabindex="1" value="{SUBJECT}" /></dd>*/
/* 			</dl>*/
/* 		<!-- ELSEIF S_CONTACT_ADMIN-->*/
/* 			<dl>*/
/* 				<dt><label>{L_RECIPIENT}{L_COLON}</label></dt>*/
/* 				<dd><strong>{L_ADMINISTRATOR}</strong></dd>*/
/* 			</dl>*/
/* 			<!-- IF not S_IS_REGISTERED -->*/
/* 			<dl>*/
/* 				<dt><label for="email">{L_SENDER_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="email" id="email" size="50" maxlength="100" tabindex="1" value="{EMAIL}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="name">{L_SENDER_NAME}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="name" id="name" size="50" tabindex="2" value="{NAME}" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<dl>*/
/* 				<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="subject" id="subject" size="50" tabindex="3" value="{SUBJECT}" /></dd>*/
/* 			</dl>*/
/* 		<!-- ELSE -->*/
/* 			<dl>*/
/* 				<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="email" name="email" id="email" size="50" maxlength="100" tabindex="2" value="{EMAIL}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="name">{L_REAL_NAME}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="name" id="name" size="50" tabindex="3" value="{NAME}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="lang">{L_DEST_LANG}{L_COLON}</label><br />*/
/* 					<span>{L_DEST_LANG_EXPLAIN}</span></dt>*/
/* 				<dd><select name="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="message">{L_MESSAGE_BODY}{L_COLON}</label><br />*/
/* 			<span>{L_EMAIL_BODY_EXPLAIN}</span></dt>*/
/* 			<dd><textarea class="inputbox" name="message" id="message" rows="15" cols="76" tabindex="4">{MESSAGE}</textarea></dd>*/
/* 		</dl>*/
/* 		<!-- IF S_REGISTERED_USER -->*/
/* 		<dl>*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd><label for="cc_sender"><input type="checkbox" name="cc_sender" id="cc_sender" value="1" checked="checked" tabindex="5" /> {L_CC_SENDER}</label></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<div class="content">*/
/* 		<fieldset class="submit-buttons">*/
/* 			<input type="submit" tabindex="6" name="submit" class="button1" value="{L_SEND_EMAIL}" />*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	</div>*/
/* {S_FORM_TOKEN}*/
/* </div>*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
