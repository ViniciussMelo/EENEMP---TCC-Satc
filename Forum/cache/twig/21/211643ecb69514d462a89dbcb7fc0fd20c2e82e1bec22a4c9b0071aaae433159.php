<?php

/* posting_editor.html */
class __TwigTemplate_85a35e96b1afb7b92fe27f385ef1695e05507e970fab457a4fac1231232d1efa extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if (isset($context["S_SHOW_TOPIC_ICONS"])) { $_S_SHOW_TOPIC_ICONS_ = $context["S_SHOW_TOPIC_ICONS"]; } else { $_S_SHOW_TOPIC_ICONS_ = null; }
        if (isset($context["S_SHOW_PM_ICONS"])) { $_S_SHOW_PM_ICONS_ = $context["S_SHOW_PM_ICONS"]; } else { $_S_SHOW_PM_ICONS_ = null; }
        if (($_S_SHOW_TOPIC_ICONS_ || $_S_SHOW_PM_ICONS_)) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if (isset($context["S_SHOW_TOPIC_ICONS"])) { $_S_SHOW_TOPIC_ICONS_ = $context["S_SHOW_TOPIC_ICONS"]; } else { $_S_SHOW_TOPIC_ICONS_ = null; }
            if ($_S_SHOW_TOPIC_ICONS_) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID", array());
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID", array());
                echo "\" value=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID", array());
                echo "\" ";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "S_ICON_CHECKED", array());
                echo " tabindex=\"1\" /><img src=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_IMG", array());
                echo "\" width=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_WIDTH", array());
                echo "\" height=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_HEIGHT", array());
                echo "\" alt=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_NAME", array());
                echo "\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_DISPLAY_USERNAME"])) { $_S_DISPLAY_USERNAME_ = $context["S_DISPLAY_USERNAME"]; } else { $_S_DISPLAY_USERNAME_ = null; }
        if (( !$_S_PRIVMSGS_ && $_S_DISPLAY_USERNAME_)) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
            echo $_USERNAME_;
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        if (isset($context["posting_editor_subject_before"])) { $_posting_editor_subject_before_ = $context["posting_editor_subject_before"]; } else { $_posting_editor_subject_before_ = null; }
        // line 22
        echo "
\t";
        // line 23
        if (isset($context["S_POST_ACTION"])) { $_S_POST_ACTION_ = $context["S_POST_ACTION"]; } else { $_S_POST_ACTION_ = null; }
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if ((($_S_POST_ACTION_ || $_S_PRIVMSGS_) || $_S_EDIT_DRAFT_)) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 27
            if (isset($context["posting_editor_subject_prepend"])) { $_posting_editor_subject_prepend_ = $context["posting_editor_subject_prepend"]; } else { $_posting_editor_subject_prepend_ = null; }
            // line 28
            echo "\t\t\t<input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            if (isset($context["S_NEW_MESSAGE"])) { $_S_NEW_MESSAGE_ = $context["S_NEW_MESSAGE"]; } else { $_S_NEW_MESSAGE_ = null; }
            if ($_S_NEW_MESSAGE_) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            if (isset($context["DRAFT_SUBJECT"])) { $_DRAFT_SUBJECT_ = $context["DRAFT_SUBJECT"]; } else { $_DRAFT_SUBJECT_ = null; }
            echo $_DRAFT_SUBJECT_;
            echo "\" class=\"inputbox autowidth\" />
\t\t\t";
            // line 29
            if (isset($context["posting_editor_subject_append"])) { $_posting_editor_subject_append_ = $context["posting_editor_subject_append"]; } else { $_posting_editor_subject_append_ = null; }
            // line 30
            echo "\t\t</dd>
\t</dl>
\t";
            // line 32
            if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
            if (isset($context["S_CONFIRM_CODE"])) { $_S_CONFIRM_CODE_ = $context["S_CONFIRM_CODE"]; } else { $_S_CONFIRM_CODE_ = null; }
            if (($_CAPTCHA_TEMPLATE_ && $_S_CONFIRM_CODE_)) {
                // line 33
                echo "\t\t";
                if (isset($context["CAPTCHA_TAB_INDEX"])) { $_CAPTCHA_TAB_INDEX_ = $context["CAPTCHA_TAB_INDEX"]; } else { $_CAPTCHA_TAB_INDEX_ = null; }
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 34
                echo "\t\t";
                if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
                $location = (("" . $_CAPTCHA_TEMPLATE_) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $_CAPTCHA_TEMPLATE_) . ""), "posting_editor.html", 34)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 35
                echo "\t";
            }
            // line 36
            echo "\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if (isset($context["posting_editor_subject_after"])) { $_posting_editor_subject_after_ = $context["posting_editor_subject_after"]; } else { $_posting_editor_subject_after_ = null; }
        // line 39
        echo "
\t";
        // line 40
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 41
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 43
        if (isset($context["posting_editor_smilies_before"])) { $_posting_editor_smilies_before_ = $context["posting_editor_smilies_before"]; } else { $_posting_editor_smilies_before_ = null; }
        echo "\t
\t\t";
        // line 44
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (($_S_SMILIES_ALLOWED_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "smiley", array())))) {
            // line 45
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 46
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 47
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_IMG", array());
                echo "\" width=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_WIDTH", array());
                echo "\" height=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_CODE", array());
                echo "\" title=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t";
        }
        // line 50
        echo "\t\t";
        if (isset($context["S_SHOW_SMILEY_LINK"])) { $_S_SHOW_SMILEY_LINK_ = $context["S_SHOW_SMILEY_LINK"]; } else { $_S_SHOW_SMILEY_LINK_ = null; }
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if (($_S_SHOW_SMILEY_LINK_ && $_S_SMILIES_ALLOWED_)) {
            // line 51
            echo "\t\t\t<br /><a href=\"";
            if (isset($context["U_MORE_SMILIES"])) { $_U_MORE_SMILIES_ = $context["U_MORE_SMILIES"]; } else { $_U_MORE_SMILIES_ = null; }
            echo $_U_MORE_SMILIES_;
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 53
        echo "\t\t";
        if (isset($context["posting_editor_smilies_after"])) { $_posting_editor_smilies_after_ = $context["posting_editor_smilies_after"]; } else { $_posting_editor_smilies_after_ = null; }
        // line 54
        echo "\t\t";
        if (isset($context["BBCODE_STATUS"])) { $_BBCODE_STATUS_ = $context["BBCODE_STATUS"]; } else { $_BBCODE_STATUS_ = null; }
        if ($_BBCODE_STATUS_) {
            // line 55
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 56
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "smiley", array()))) {
                echo "<hr />";
            }
            // line 57
            echo "\t\t\t";
            if (isset($context["BBCODE_STATUS"])) { $_BBCODE_STATUS_ = $context["BBCODE_STATUS"]; } else { $_BBCODE_STATUS_ = null; }
            echo $_BBCODE_STATUS_;
            echo "<br />
\t\t\t";
            // line 58
            if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
            if ($_S_BBCODE_ALLOWED_) {
                // line 59
                echo "\t\t\t\t";
                if (isset($context["IMG_STATUS"])) { $_IMG_STATUS_ = $context["IMG_STATUS"]; } else { $_IMG_STATUS_ = null; }
                echo $_IMG_STATUS_;
                echo "<br />
\t\t\t\t";
                // line 60
                if (isset($context["FLASH_STATUS"])) { $_FLASH_STATUS_ = $context["FLASH_STATUS"]; } else { $_FLASH_STATUS_ = null; }
                echo $_FLASH_STATUS_;
                echo "<br />
\t\t\t\t";
                // line 61
                if (isset($context["URL_STATUS"])) { $_URL_STATUS_ = $context["URL_STATUS"]; } else { $_URL_STATUS_ = null; }
                echo $_URL_STATUS_;
                echo "<br />
\t\t\t";
            }
            // line 63
            echo "\t\t\t";
            if (isset($context["SMILIES_STATUS"])) { $_SMILIES_STATUS_ = $context["SMILIES_STATUS"]; } else { $_SMILIES_STATUS_ = null; }
            echo $_SMILIES_STATUS_;
            echo "
\t\t</div>
\t\t";
        }
        // line 66
        echo "\t\t";
        if (isset($context["posting_editor_bbcode_status_after"])) { $_posting_editor_bbcode_status_after_ = $context["posting_editor_bbcode_status_after"]; } else { $_posting_editor_bbcode_status_after_ = null; }
        // line 67
        echo "\t\t";
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
        if (($_S_EDIT_DRAFT_ || $_S_DISPLAY_REVIEW_)) {
            // line 68
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
            if ($_S_DISPLAY_REVIEW_) {
                echo "<hr />";
            }
            // line 69
            echo "\t\t\t";
            if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
            if ($_S_EDIT_DRAFT_) {
                echo "<strong><a href=\"";
                if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
                echo $_S_UCP_ACTION_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 70
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
            if ($_S_DISPLAY_REVIEW_) {
                echo "<strong><a href=\"#review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 71
            echo "\t\t";
        }
        // line 72
        echo "\t</div>

\t";
        // line 74
        if (isset($context["posting_editor_message_before"])) { $_posting_editor_message_before_ = $context["posting_editor_message_before"]; } else { $_posting_editor_message_before_ = null; }
        // line 75
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 77
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if ((($_S_UCP_ACTION_ &&  !$_S_PRIVMSGS_) &&  !$_S_EDIT_DRAFT_)) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        if (isset($context["DRAFT_MESSAGE"])) { $_DRAFT_MESSAGE_ = $context["DRAFT_MESSAGE"]; } else { $_DRAFT_MESSAGE_ = null; }
        echo $_DRAFT_MESSAGE_;
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        echo $_SIGNATURE_;
        echo "</textarea>
\t</div>

\t";
        // line 80
        if (isset($context["posting_editor_message_after"])) { $_posting_editor_message_after_ = $context["posting_editor_message_after"]; } else { $_posting_editor_message_after_ = null; }
        // line 81
        echo "\t</fieldset>

";
        // line 83
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 84
            echo "
\t";
            // line 85
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if ( !$_S_SHOW_DRAFTS_) {
                // line 86
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 89
            echo "
\t";
            // line 90
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (( !$_S_SHOW_DRAFTS_ && ( !$this->getAttribute($_definition_, "SIG_EDIT", array()) == 1))) {
                // line 91
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 94
                if (isset($context["S_HIDDEN_ADDRESS_FIELD"])) { $_S_HIDDEN_ADDRESS_FIELD_ = $context["S_HIDDEN_ADDRESS_FIELD"]; } else { $_S_HIDDEN_ADDRESS_FIELD_ = null; }
                echo $_S_HIDDEN_ADDRESS_FIELD_;
                echo "
\t\t\t";
                // line 95
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 96
                if (isset($context["posting_editor_submit_buttons"])) { $_posting_editor_submit_buttons_ = $context["posting_editor_submit_buttons"]; } else { $_posting_editor_submit_buttons_ = null; }
                // line 97
                echo "\t\t\t";
                if (isset($context["S_HAS_DRAFTS"])) { $_S_HAS_DRAFTS_ = $context["S_HAS_DRAFTS"]; } else { $_S_HAS_DRAFTS_ = null; }
                if ($_S_HAS_DRAFTS_) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 98
                echo "\t\t\t";
                if (isset($context["S_SAVE_ALLOWED"])) { $_S_SAVE_ALLOWED_ = $context["S_SAVE_ALLOWED"]; } else { $_S_SAVE_ALLOWED_ = null; }
                if ($_S_SAVE_ALLOWED_) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 99
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
                if ( !$_S_PRIVMSGS_) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 107
            echo "
\t";
            // line 108
            if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if ((( !$_S_PRIVMSGS_ &&  !$_S_SHOW_DRAFTS_) && ( !$this->getAttribute($_definition_, "SIG_EDIT", array()) == 1))) {
                // line 109
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if (isset($context["SHOW_PANEL"])) { $_SHOW_PANEL_ = $context["SHOW_PANEL"]; } else { $_SHOW_PANEL_ = null; }
                if ($_SHOW_PANEL_) {
                    if (isset($context["SHOW_PANEL"])) { $_SHOW_PANEL_ = $context["SHOW_PANEL"]; } else { $_SHOW_PANEL_ = null; }
                    echo $_SHOW_PANEL_;
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 111
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 112
                if (isset($context["S_SHOW_ATTACH_BOX"])) { $_S_SHOW_ATTACH_BOX_ = $context["S_SHOW_ATTACH_BOX"]; } else { $_S_SHOW_ATTACH_BOX_ = null; }
                if ($_S_SHOW_ATTACH_BOX_) {
                    // line 113
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t";
                if (isset($context["S_SHOW_POLL_BOX"])) { $_S_SHOW_POLL_BOX_ = $context["S_SHOW_POLL_BOX"]; } else { $_S_SHOW_POLL_BOX_ = null; }
                if (isset($context["S_POLL_DELETE"])) { $_S_POLL_DELETE_ = $context["S_POLL_DELETE"]; } else { $_S_POLL_DELETE_ = null; }
                if (($_S_SHOW_POLL_BOX_ || $_S_POLL_DELETE_)) {
                    // line 120
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 121
                    echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t";
                if (isset($context["posting_editor_add_panel_tab"])) { $_posting_editor_add_panel_tab_ = $context["posting_editor_add_panel_tab"]; } else { $_posting_editor_add_panel_tab_ = null; }
                // line 125
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 128
            echo "
\t";
            // line 129
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (( !$_S_SHOW_DRAFTS_ && ( !$this->getAttribute($_definition_, "SIG_EDIT", array()) == 1))) {
                // line 130
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 134
                if (isset($context["posting_editor_options_prepend"])) { $_posting_editor_options_prepend_ = $context["posting_editor_options_prepend"]; } else { $_posting_editor_options_prepend_ = null; }
                // line 135
                echo "\t\t\t";
                if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
                if ($_S_BBCODE_ALLOWED_) {
                    // line 136
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    if (isset($context["S_BBCODE_CHECKED"])) { $_S_BBCODE_CHECKED_ = $context["S_BBCODE_CHECKED"]; } else { $_S_BBCODE_CHECKED_ = null; }
                    echo $_S_BBCODE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 138
                echo "\t\t\t";
                if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
                if ($_S_SMILIES_ALLOWED_) {
                    // line 139
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    if (isset($context["S_SMILIES_CHECKED"])) { $_S_SMILIES_CHECKED_ = $context["S_SMILIES_CHECKED"]; } else { $_S_SMILIES_CHECKED_ = null; }
                    echo $_S_SMILIES_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 141
                echo "\t\t\t";
                if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
                if ($_S_LINKS_ALLOWED_) {
                    // line 142
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    if (isset($context["S_MAGIC_URL_CHECKED"])) { $_S_MAGIC_URL_CHECKED_ = $context["S_MAGIC_URL_CHECKED"]; } else { $_S_MAGIC_URL_CHECKED_ = null; }
                    echo $_S_MAGIC_URL_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 144
                echo "\t\t\t";
                if (isset($context["S_SIG_ALLOWED"])) { $_S_SIG_ALLOWED_ = $context["S_SIG_ALLOWED"]; } else { $_S_SIG_ALLOWED_ = null; }
                if ($_S_SIG_ALLOWED_) {
                    // line 145
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    if (isset($context["S_SIGNATURE_CHECKED"])) { $_S_SIGNATURE_CHECKED_ = $context["S_SIGNATURE_CHECKED"]; } else { $_S_SIGNATURE_CHECKED_ = null; }
                    echo $_S_SIGNATURE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 147
                echo "\t\t\t";
                if (isset($context["S_NOTIFY_ALLOWED"])) { $_S_NOTIFY_ALLOWED_ = $context["S_NOTIFY_ALLOWED"]; } else { $_S_NOTIFY_ALLOWED_ = null; }
                if ($_S_NOTIFY_ALLOWED_) {
                    // line 148
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    if (isset($context["S_NOTIFY_CHECKED"])) { $_S_NOTIFY_CHECKED_ = $context["S_NOTIFY_CHECKED"]; } else { $_S_NOTIFY_CHECKED_ = null; }
                    echo $_S_NOTIFY_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 150
                echo "\t\t\t";
                if (isset($context["S_LOCK_TOPIC_ALLOWED"])) { $_S_LOCK_TOPIC_ALLOWED_ = $context["S_LOCK_TOPIC_ALLOWED"]; } else { $_S_LOCK_TOPIC_ALLOWED_ = null; }
                if ($_S_LOCK_TOPIC_ALLOWED_) {
                    // line 151
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    if (isset($context["S_LOCK_TOPIC_CHECKED"])) { $_S_LOCK_TOPIC_CHECKED_ = $context["S_LOCK_TOPIC_CHECKED"]; } else { $_S_LOCK_TOPIC_CHECKED_ = null; }
                    echo $_S_LOCK_TOPIC_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t";
                if (isset($context["S_LOCK_POST_ALLOWED"])) { $_S_LOCK_POST_ALLOWED_ = $context["S_LOCK_POST_ALLOWED"]; } else { $_S_LOCK_POST_ALLOWED_ = null; }
                if ($_S_LOCK_POST_ALLOWED_) {
                    // line 154
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    if (isset($context["S_LOCK_POST_CHECKED"])) { $_S_LOCK_POST_CHECKED_ = $context["S_LOCK_POST_CHECKED"]; } else { $_S_LOCK_POST_CHECKED_ = null; }
                    echo $_S_LOCK_POST_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo " [";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 156
                echo "
\t\t\t";
                // line 157
                if (isset($context["S_TYPE_TOGGLE"])) { $_S_TYPE_TOGGLE_ = $context["S_TYPE_TOGGLE"]; } else { $_S_TYPE_TOGGLE_ = null; }
                if (isset($context["S_TOPIC_TYPE_ANNOUNCE"])) { $_S_TOPIC_TYPE_ANNOUNCE_ = $context["S_TOPIC_TYPE_ANNOUNCE"]; } else { $_S_TOPIC_TYPE_ANNOUNCE_ = null; }
                if (isset($context["S_TOPIC_TYPE_STICKY"])) { $_S_TOPIC_TYPE_STICKY_ = $context["S_TOPIC_TYPE_STICKY"]; } else { $_S_TOPIC_TYPE_STICKY_ = null; }
                if ((($_S_TYPE_TOGGLE_ || $_S_TOPIC_TYPE_ANNOUNCE_) || $_S_TOPIC_TYPE_STICKY_)) {
                    // line 158
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 160
                echo "
\t\t\t";
                // line 161
                if (isset($context["S_TYPE_TOGGLE"])) { $_S_TYPE_TOGGLE_ = $context["S_TYPE_TOGGLE"]; } else { $_S_TYPE_TOGGLE_ = null; }
                if ($_S_TYPE_TOGGLE_) {
                    // line 162
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 163
                    if (isset($context["S_EDIT_POST"])) { $_S_EDIT_POST_ = $context["S_EDIT_POST"]; } else { $_S_EDIT_POST_ = null; }
                    if ($_S_EDIT_POST_) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 164
                    if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE", array());
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE", array());
                        echo "\" value=\"";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE", array());
                        echo "\"";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "S_CHECKED", array());
                        echo " />";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "L_TOPIC_TYPE", array());
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 167
                echo "
\t\t\t";
                // line 168
                if (isset($context["S_TOPIC_TYPE_ANNOUNCE"])) { $_S_TOPIC_TYPE_ANNOUNCE_ = $context["S_TOPIC_TYPE_ANNOUNCE"]; } else { $_S_TOPIC_TYPE_ANNOUNCE_ = null; }
                if (isset($context["S_TOPIC_TYPE_STICKY"])) { $_S_TOPIC_TYPE_STICKY_ = $context["S_TOPIC_TYPE_STICKY"]; } else { $_S_TOPIC_TYPE_STICKY_ = null; }
                if (($_S_TOPIC_TYPE_ANNOUNCE_ || $_S_TOPIC_TYPE_STICKY_)) {
                    // line 169
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 170
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 171
                    if (isset($context["TOPIC_TIME_LIMIT"])) { $_TOPIC_TIME_LIMIT_ = $context["TOPIC_TIME_LIMIT"]; } else { $_TOPIC_TIME_LIMIT_ = null; }
                    echo $_TOPIC_TIME_LIMIT_;
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 172
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 175
                echo "
\t\t\t";
                // line 176
                if (isset($context["S_SOFTDELETE_ALLOWED"])) { $_S_SOFTDELETE_ALLOWED_ = $context["S_SOFTDELETE_ALLOWED"]; } else { $_S_SOFTDELETE_ALLOWED_ = null; }
                if (isset($context["S_DELETE_ALLOWED"])) { $_S_DELETE_ALLOWED_ = $context["S_DELETE_ALLOWED"]; } else { $_S_DELETE_ALLOWED_ = null; }
                if (($_S_SOFTDELETE_ALLOWED_ || $_S_DELETE_ALLOWED_)) {
                    // line 177
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 179
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 180
                    if (isset($context["S_SOFTDELETE_CHECKED"])) { $_S_SOFTDELETE_CHECKED_ = $context["S_SOFTDELETE_CHECKED"]; } else { $_S_SOFTDELETE_CHECKED_ = null; }
                    echo $_S_SOFTDELETE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 181
                    if (isset($context["S_DELETE_ALLOWED"])) { $_S_DELETE_ALLOWED_ = $context["S_DELETE_ALLOWED"]; } else { $_S_DELETE_ALLOWED_ = null; }
                    if (isset($context["S_SOFTDELETE_ALLOWED"])) { $_S_SOFTDELETE_ALLOWED_ = $context["S_SOFTDELETE_ALLOWED"]; } else { $_S_SOFTDELETE_ALLOWED_ = null; }
                    if (($_S_DELETE_ALLOWED_ && $_S_SOFTDELETE_ALLOWED_)) {
                        // line 182
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 186
                echo "
\t\t\t";
                // line 187
                if (isset($context["S_EDIT_REASON"])) { $_S_EDIT_REASON_ = $context["S_EDIT_REASON"]; } else { $_S_EDIT_REASON_ = null; }
                if ($_S_EDIT_REASON_) {
                    // line 188
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 189
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 190
                    if (isset($context["EDIT_REASON"])) { $_EDIT_REASON_ = $context["EDIT_REASON"]; } else { $_EDIT_REASON_ = null; }
                    echo $_EDIT_REASON_;
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 193
                echo "\t\t</fieldset>
\t\t";
            }
            // line 195
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 195,  783 => 193,  776 => 190,  771 => 189,  768 => 188,  765 => 187,  762 => 186,  758 => 184,  752 => 182,  748 => 181,  741 => 180,  736 => 179,  732 => 177,  728 => 176,  725 => 175,  719 => 172,  712 => 171,  707 => 170,  704 => 169,  700 => 168,  697 => 167,  668 => 164,  658 => 163,  655 => 162,  652 => 161,  649 => 160,  645 => 158,  640 => 157,  637 => 156,  626 => 154,  622 => 153,  613 => 151,  609 => 150,  600 => 148,  596 => 147,  587 => 145,  583 => 144,  574 => 142,  570 => 141,  561 => 139,  557 => 138,  548 => 136,  544 => 135,  542 => 134,  536 => 130,  532 => 129,  529 => 128,  524 => 125,  521 => 124,  515 => 121,  512 => 120,  507 => 119,  500 => 115,  496 => 113,  493 => 112,  489 => 111,  477 => 109,  472 => 108,  469 => 107,  459 => 100,  449 => 99,  441 => 98,  433 => 97,  431 => 96,  426 => 95,  421 => 94,  416 => 91,  412 => 90,  409 => 89,  404 => 86,  401 => 85,  398 => 84,  395 => 83,  391 => 81,  389 => 80,  369 => 77,  365 => 75,  363 => 74,  359 => 72,  356 => 71,  348 => 70,  337 => 69,  331 => 68,  326 => 67,  323 => 66,  315 => 63,  309 => 61,  304 => 60,  298 => 59,  295 => 58,  289 => 57,  284 => 56,  281 => 55,  277 => 54,  274 => 53,  265 => 51,  260 => 50,  257 => 49,  232 => 47,  227 => 46,  222 => 45,  218 => 44,  214 => 43,  210 => 41,  198 => 40,  195 => 39,  193 => 38,  190 => 37,  187 => 36,  184 => 35,  170 => 34,  165 => 33,  161 => 32,  157 => 30,  155 => 29,  140 => 28,  138 => 27,  132 => 25,  129 => 24,  124 => 23,  121 => 22,  119 => 21,  116 => 20,  109 => 17,  104 => 16,  101 => 15,  97 => 14,  94 => 13,  89 => 10,  55 => 9,  46 => 8,  40 => 6,  37 => 5,  33 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset class="fields1">*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_TOPIC_ICONS or S_SHOW_PM_ICONS -->*/
/* 	<dl>*/
/* 		<dt><label for="icon">{L_ICON}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="icon"><input type="radio" name="icon" id="icon" value="0" checked="checked" tabindex="1" /> <!-- IF S_SHOW_TOPIC_ICONS -->{L_NO_TOPIC_ICON}<!-- ELSE -->{L_NO_PM_ICON}<!-- ENDIF --></label>*/
/* 			<!-- BEGIN topic_icon --><label for="icon-{topic_icon.ICON_ID}"><input type="radio" name="icon" id="icon-{topic_icon.ICON_ID}" value="{topic_icon.ICON_ID}" {topic_icon.S_ICON_CHECKED} tabindex="1" /><img src="{topic_icon.ICON_IMG}" width="{topic_icon.ICON_WIDTH}" height="{topic_icon.ICON_HEIGHT}" alt="{topic_icon.ICON_NAME}" title="" /></label> <!-- END topic_icon -->*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_PRIVMSGS and S_DISPLAY_USERNAME -->*/
/* 	<dl style="clear: left;">*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT posting_editor_subject_before -->*/
/* */
/* 	<!-- IF S_POST_ACTION or S_PRIVMSGS or S_EDIT_DRAFT -->*/
/* 	<dl style="clear: left;">*/
/* 		<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<!-- EVENT posting_editor_subject_prepend -->*/
/* 			<input type="text" name="subject" id="subject" size="45" maxlength="<!-- IF S_NEW_MESSAGE -->120<!-- ELSE -->124<!-- ENDIF -->" tabindex="2" value="{SUBJECT}{DRAFT_SUBJECT}" class="inputbox autowidth" />*/
/* 			<!-- EVENT posting_editor_subject_append -->*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 		<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 		<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT posting_editor_subject_after -->*/
/* */
/* 	<!-- INCLUDE posting_buttons.html -->*/
/* */
/* 	<div id="smiley-box">*/
/* 		<!-- EVENT posting_editor_smilies_before -->	*/
/* 		<!-- IF S_SMILIES_ALLOWED and .smiley -->*/
/* 			<strong>{L_SMILIES}</strong><br />*/
/* 			<!-- BEGIN smiley -->*/
/* 				<a href="#" onclick="insert_text('{smiley.A_SMILEY_CODE}', true); return false;"><img src="{smiley.SMILEY_IMG}" width="{smiley.SMILEY_WIDTH}" height="{smiley.SMILEY_HEIGHT}" alt="{smiley.SMILEY_CODE}" title="{smiley.SMILEY_DESC}" /></a>*/
/* 			<!-- END smiley -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SHOW_SMILEY_LINK and S_SMILIES_ALLOWED -->*/
/* 			<br /><a href="{U_MORE_SMILIES}" onclick="popup(this.href, 750, 350, '_phpbbsmilies'); return false;">{L_MORE_SMILIES}</a>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_smilies_after -->*/
/* 		<!-- IF BBCODE_STATUS -->*/
/* 		<div class="bbcode-status">*/
/* 			<!-- IF .smiley --><hr /><!-- ENDIF -->*/
/* 			{BBCODE_STATUS}<br />*/
/* 			<!-- IF S_BBCODE_ALLOWED -->*/
/* 				{IMG_STATUS}<br />*/
/* 				{FLASH_STATUS}<br />*/
/* 				{URL_STATUS}<br />*/
/* 			<!-- ENDIF -->*/
/* 			{SMILIES_STATUS}*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_bbcode_status_after -->*/
/* 		<!-- IF S_EDIT_DRAFT || S_DISPLAY_REVIEW -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><hr /><!-- ENDIF -->*/
/* 			<!-- IF S_EDIT_DRAFT --><strong><a href="{S_UCP_ACTION}">{L_BACK_TO_DRAFTS}</a></strong><!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><strong><a href="#review">{L_TOPIC_REVIEW}</a></strong><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<!-- EVENT posting_editor_message_before -->*/
/* */
/* 	<div id="message-box">*/
/* 		<textarea <!-- IF S_UCP_ACTION and not S_PRIVMSGS and not S_EDIT_DRAFT -->name="signature" id="signature" style="height: 9em;"<!-- ELSE -->name="message" id="message"<!-- ENDIF --> rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" class="inputbox">{MESSAGE}{DRAFT_MESSAGE}{SIGNATURE}</textarea>*/
/* 	</div>*/
/* */
/* 	<!-- EVENT posting_editor_message_after -->*/
/* 	</fieldset>*/
/* */
/* <!-- IF $EXTRA_POSTING_OPTIONS eq 1 -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 	<div class="panel bg2">*/
/* 		<div class="inner">*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_ADDRESS_FIELD}*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<!-- EVENT posting_editor_submit_buttons -->*/
/* 			<!-- IF S_HAS_DRAFTS --><input type="submit" accesskey="d" tabindex="8" name="load" value="{L_LOAD_DRAFT}" class="button2" onclick="load_draft = true;" />&nbsp; <!-- ENDIF -->*/
/* 			<!-- IF S_SAVE_ALLOWED --><input type="submit" accesskey="k" tabindex="7" name="save" value="{L_SAVE_DRAFT}" class="button2" />&nbsp; <!-- ENDIF -->*/
/* 			<input type="submit" tabindex="5" name="preview" value="{L_PREVIEW}" class="button1"<!-- IF not S_PRIVMSGS --> onclick="document.getElementById('postform').action += '#preview';"<!-- ENDIF --> />&nbsp;*/
/* 			<input type="submit" accesskey="s" tabindex="6" name="post" value="{L_SUBMIT}" class="button1 default-submit-action" />&nbsp;*/
/* */
/* 		</fieldset>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_PRIVMSGS and not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 		<div id="tabs" class="sub-panels" data-show-panel="<!-- IF SHOW_PANEL -->{SHOW_PANEL}<!-- ELSE -->options-panel<!-- ENDIF -->" role="tablist">*/
/* 			<ul>*/
/* 				<li id="options-panel-tab" class="tab activetab"><a href="#tabs" data-subpanel="options-panel" role="tab" aria-controls="options-panel"><span>{L_OPTIONS}</span></a></li>*/
/* 				<!-- IF S_SHOW_ATTACH_BOX -->*/
/* 					<li id="attach-panel-tab" class="tab">*/
/* 						<a href="#tabs" data-subpanel="attach-panel" role="tab" aria-controls="attach-panel">*/
/* 							{L_ATTACHMENTS} <strong id="file-total-progress"><strong id="file-total-progress-bar"></strong></strong>*/
/* 						</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_SHOW_POLL_BOX || S_POLL_DELETE -->*/
/* 					<li id="poll-panel-tab" class="tab">*/
/* 						<a href="#tabs" data-subpanel="poll-panel" role="tab" aria-controls="poll-panel">{L_ADD_POLL}</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT posting_editor_add_panel_tab -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 	<div class="panel bg3" id="options-panel">*/
/* 		<div class="inner">*/
/* */
/* 		<fieldset class="fields1">*/
/* 			<!-- EVENT posting_editor_options_prepend -->*/
/* 			<!-- IF S_BBCODE_ALLOWED -->*/
/* 				<div><label for="disable_bbcode"><input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED} /> {L_DISABLE_BBCODE}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SMILIES_ALLOWED -->*/
/* 				<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED} /> {L_DISABLE_SMILIES}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LINKS_ALLOWED -->*/
/* 				<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED} /> {L_DISABLE_MAGIC_URL}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SIG_ALLOWED -->*/
/* 				<div><label for="attach_sig"><input type="checkbox" name="attach_sig" id="attach_sig"{S_SIGNATURE_CHECKED} /> {L_ATTACH_SIG}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_NOTIFY_ALLOWED -->*/
/* 				<div><label for="notify"><input type="checkbox" name="notify" id="notify"{S_NOTIFY_CHECKED} /> {L_NOTIFY_REPLY}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_TOPIC_ALLOWED -->*/
/* 				<div><label for="lock_topic"><input type="checkbox" name="lock_topic" id="lock_topic"{S_LOCK_TOPIC_CHECKED} /> {L_LOCK_TOPIC}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_POST_ALLOWED -->*/
/* 				<div><label for="lock_post"><input type="checkbox" name="lock_post" id="lock_post"{S_LOCK_POST_CHECKED} /> {L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]</label></div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TYPE_TOGGLE or S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<hr class="dashed" />*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TYPE_TOGGLE -->*/
/* 			<dl>*/
/* 				<dt><label for="topic_type-0"><!-- IF S_EDIT_POST -->{L_CHANGE_TOPIC_TO}<!-- ELSE -->{L_POST_TOPIC_AS}<!-- ENDIF -->{L_COLON}</label></dt>*/
/* 				<dd><!-- BEGIN topic_type --><label for="topic_type-{topic_type.VALUE}"><input type="radio" name="topic_type" id="topic_type-{topic_type.VALUE}" value="{topic_type.VALUE}"{topic_type.S_CHECKED} />{topic_type.L_TOPIC_TYPE}</label> <!-- END topic_type --></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<dl>*/
/* 				<dt><label for="topic_time_limit">{L_STICK_TOPIC_FOR}{L_COLON}</label></dt>*/
/* 				<dd><label for="topic_time_limit"><input type="number" min="0" max="999" name="topic_time_limit" id="topic_time_limit" value="{TOPIC_TIME_LIMIT}" class="inputbox autowidth" /> {L_DAYS}</label></dd>*/
/* 				<dd>{L_STICK_TOPIC_FOR_EXPLAIN}</dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_SOFTDELETE_ALLOWED or S_DELETE_ALLOWED -->*/
/* 				<hr class="dashed" />*/
/* 				<dl>*/
/* 					<dt><label for="delete">{L_DELETE_POST}{L_COLON}</label></dt>*/
/* 					<dd><label for="delete"><input type="checkbox" name="delete" id="delete" {S_SOFTDELETE_CHECKED} /> {L_DELETE_POST_WARN}</label></dd>*/
/* 					<!-- IF S_DELETE_ALLOWED and S_SOFTDELETE_ALLOWED -->*/
/* 						<dd><label for="delete_permanent"><input type="checkbox" name="delete_permanent" id="delete_permanent" /> {L_DELETE_POST_PERMANENTLY}</label></dd>*/
/* 					<!-- ENDIF -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_EDIT_REASON -->*/
/* 			<dl>*/
/* 				<dt><label for="edit_reason">{L_EDIT_REASON}{L_COLON}</label></dt>*/
/* 				<dd><input type="text" name="edit_reason" id="edit_reason" value="{EDIT_REASON}" class="inputbox" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 		<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
