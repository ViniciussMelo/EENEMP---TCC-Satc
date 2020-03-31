<?php

/* viewtopic_body.html */
class __TwigTemplate_7bbcd95d28c54309d80b2b8316bca70dcfa385831097c0e8a334d20d9b9ff9c6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"topic-title\">";
        // line 3
        if (isset($context["viewtopic_topic_title_prepend"])) { $_viewtopic_topic_title_prepend_ = $context["viewtopic_topic_title_prepend"]; } else { $_viewtopic_topic_title_prepend_ = null; }
        echo "<a href=\"";
        if (isset($context["U_VIEW_TOPIC"])) { $_U_VIEW_TOPIC_ = $context["U_VIEW_TOPIC"]; } else { $_U_VIEW_TOPIC_ = null; }
        echo $_U_VIEW_TOPIC_;
        echo "\">";
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "</a>";
        if (isset($context["viewtopic_topic_title_append"])) { $_viewtopic_topic_title_append_ = $context["viewtopic_topic_title_append"]; } else { $_viewtopic_topic_title_append_ = null; }
        echo "</h2>
";
        // line 4
        if (isset($context["viewtopic_topic_title_after"])) { $_viewtopic_topic_title_after_ = $context["viewtopic_topic_title_after"]; } else { $_viewtopic_topic_title_after_ = null; }
        // line 5
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 6
        if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
        if ($_FORUM_DESC_) {
            echo "<div style=\"display: none !important;\">";
            if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
            echo $_FORUM_DESC_;
            echo "<br /></div>";
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
        if ($_MODERATORS_) {
            // line 9
            echo "<p>
\t<strong>";
            // line 10
            if (isset($context["S_SINGLE_MODERATOR"])) { $_S_SINGLE_MODERATOR_ = $context["S_SINGLE_MODERATOR"]; } else { $_S_SINGLE_MODERATOR_ = null; }
            if ($_S_SINGLE_MODERATOR_) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
            echo $_MODERATORS_;
            echo "
</p>
";
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["S_FORUM_RULES"])) { $_S_FORUM_RULES_ = $context["S_FORUM_RULES"]; } else { $_S_FORUM_RULES_ = null; }
        if ($_S_FORUM_RULES_) {
            // line 15
            echo "\t<div class=\"rules";
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 18
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                // line 19
                echo "\t\t\t<a href=\"";
                if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
                echo $_U_FORUM_RULES_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 21
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 22
                if (isset($context["FORUM_RULES"])) { $_FORUM_RULES_ = $context["FORUM_RULES"]; } else { $_FORUM_RULES_ = null; }
                echo $_FORUM_RULES_;
                echo "
\t\t";
            }
            // line 24
            echo "
\t\t</div>
\t</div>
";
        }
        // line 28
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 32
        if (isset($context["viewtopic_buttons_top_before"])) { $_viewtopic_buttons_top_before_ = $context["viewtopic_buttons_top_before"]; } else { $_viewtopic_buttons_top_before_ = null; }
        // line 33
        echo "
\t";
        // line 34
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_REPLY_INFO"])) { $_S_DISPLAY_REPLY_INFO_ = $context["S_DISPLAY_REPLY_INFO"]; } else { $_S_DISPLAY_REPLY_INFO_ = null; }
        if (( !$_S_IS_BOT_ && $_S_DISPLAY_REPLY_INFO_)) {
            // line 35
            echo "\t\t<a href=\"";
            if (isset($context["U_POST_REPLY_TOPIC"])) { $_U_POST_REPLY_TOPIC_ = $context["U_POST_REPLY_TOPIC"]; } else { $_U_POST_REPLY_TOPIC_ = null; }
            echo $_U_POST_REPLY_TOPIC_;
            echo "\" class=\"button icon-button ";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 36
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 37
            echo "\t\t</a>
\t";
        }
        // line 39
        echo "
\t\t";
        // line 40
        if (isset($context["viewtopic_buttons_top_after"])) { $_viewtopic_buttons_top_after_ = $context["viewtopic_buttons_top_after"]; } else { $_viewtopic_buttons_top_after_ = null; }
        // line 41
        echo "\t</div>

\t";
        // line 43
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 44
        echo "\t";
        if (isset($context["viewtopic_dropdown_top_custom"])) { $_viewtopic_dropdown_top_custom_ = $context["viewtopic_dropdown_top_custom"]; } else { $_viewtopic_dropdown_top_custom_ = null; }
        // line 45
        echo "
\t";
        // line 46
        if (isset($context["S_DISPLAY_SEARCHBOX"])) { $_S_DISPLAY_SEARCHBOX_ = $context["S_DISPLAY_SEARCHBOX"]; } else { $_S_DISPLAY_SEARCHBOX_ = null; }
        if ($_S_DISPLAY_SEARCHBOX_) {
            // line 47
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 48
            if (isset($context["S_SEARCHBOX_ACTION"])) { $_S_SEARCHBOX_ACTION_ = $context["S_SEARCHBOX_ACTION"]; } else { $_S_SEARCHBOX_ACTION_ = null; }
            echo $_S_SEARCHBOX_ACTION_;
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t<a href=\"";
            // line 52
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t";
            // line 53
            if (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"])) { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]; } else { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = null; }
            echo $_S_SEARCH_LOCAL_HIDDEN_FIELDS_;
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 58
        echo "
\t";
        // line 59
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_TOTAL_POSTS_)) {
            // line 60
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 61
            if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($_U_VIEW_UNREAD_POST_ &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
                echo $_U_VIEW_UNREAD_POST_;
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo "
\t\t\t";
            // line 62
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 63
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 63)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 64
                echo "\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 67
            echo "\t\t</div>
\t";
        }
        // line 69
        echo "\t";
        if (isset($context["viewtopic_body_pagination_top_after"])) { $_viewtopic_body_pagination_top_after_ = $context["viewtopic_body_pagination_top_after"]; } else { $_viewtopic_body_pagination_top_after_ = null; }
        // line 70
        echo "</div>

";
        // line 72
        if (isset($context["viewtopic_body_poll_before"])) { $_viewtopic_body_poll_before_ = $context["viewtopic_body_poll_before"]; } else { $_viewtopic_body_poll_before_ = null; }
        // line 73
        echo "
";
        // line 74
        if (isset($context["S_HAS_POLL"])) { $_S_HAS_POLL_ = $context["S_HAS_POLL"]; } else { $_S_HAS_POLL_ = null; }
        if ($_S_HAS_POLL_) {
            // line 75
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_POLL_ACTION"])) { $_S_POLL_ACTION_ = $context["S_POLL_ACTION"]; } else { $_S_POLL_ACTION_ = null; }
            echo $_S_POLL_ACTION_;
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 81
            if (isset($context["viewtopic_body_poll_question_prepend"])) { $_viewtopic_body_poll_question_prepend_ = $context["viewtopic_body_poll_question_prepend"]; } else { $_viewtopic_body_poll_question_prepend_ = null; }
            if (isset($context["POLL_QUESTION"])) { $_POLL_QUESTION_ = $context["POLL_QUESTION"]; } else { $_POLL_QUESTION_ = null; }
            echo $_POLL_QUESTION_;
            if (isset($context["viewtopic_body_poll_question_append"])) { $_viewtopic_body_poll_question_append_ = $context["viewtopic_body_poll_question_append"]; } else { $_viewtopic_body_poll_question_append_ = null; }
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if (isset($context["L_POLL_LENGTH"])) { $_L_POLL_LENGTH_ = $context["L_POLL_LENGTH"]; } else { $_L_POLL_LENGTH_ = null; }
            if (($_S_CAN_VOTE_ && $_L_POLL_LENGTH_)) {
                echo "<br />";
            }
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if ($_S_CAN_VOTE_) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 85
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 86
                echo "\t\t\t\t";
                if (isset($context["viewtopic_body_poll_option_before"])) { $_viewtopic_body_poll_option_before_ = $context["viewtopic_body_poll_option_before"]; } else { $_viewtopic_body_poll_option_before_ = null; }
                // line 87
                echo "\t\t\t\t<dl class=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 88
                if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
                if ($_S_CAN_VOTE_) {
                    echo "<label for=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\">";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 89
                if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
                if ($_S_CAN_VOTE_) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (isset($context["S_IS_MULTI_CHOICE"])) { $_S_IS_MULTI_CHOICE_ = $context["S_IS_MULTI_CHOICE"]; } else { $_S_IS_MULTI_CHOICE_ = null; }
                    if ($_S_IS_MULTI_CHOICE_) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 90
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
                if ( !$_S_DISPLAY_RESULTS_) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_RESULT", array());
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 91
                if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
                if ( !$_S_DISPLAY_RESULTS_) {
                    echo " hidden";
                }
                echo "\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if (($this->getAttribute($_poll_option_, "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 93
                if (isset($context["viewtopic_body_poll_option_after"])) { $_viewtopic_body_poll_option_after_ = $context["viewtopic_body_poll_option_after"]; } else { $_viewtopic_body_poll_option_after_ = null; }
                // line 94
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 96
            if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
            if ( !$_S_DISPLAY_RESULTS_) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            if (isset($context["TOTAL_VOTES"])) { $_TOTAL_VOTES_ = $context["TOTAL_VOTES"]; } else { $_TOTAL_VOTES_ = null; }
            echo $_TOTAL_VOTES_;
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 101
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if ($_S_CAN_VOTE_) {
                // line 102
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 107
            echo "
\t\t\t";
            // line 108
            if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
            if ( !$_S_DISPLAY_RESULTS_) {
                // line 109
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 111
                if (isset($context["U_VIEW_RESULTS"])) { $_U_VIEW_RESULTS_ = $context["U_VIEW_RESULTS"]; } else { $_U_VIEW_RESULTS_ = null; }
                echo $_U_VIEW_RESULTS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 114
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 119
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t";
            // line 120
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 126
        echo "
";
        // line 127
        if (isset($context["viewtopic_body_poll_after"])) { $_viewtopic_body_poll_after_ = $context["viewtopic_body_poll_after"]; } else { $_viewtopic_body_poll_after_ = null; }
        // line 128
        echo "
";
        // line 129
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 130
            echo "\t";
            if (isset($context["viewtopic_body_postrow_post_before"])) { $_viewtopic_body_postrow_post_before_ = $context["viewtopic_body_postrow_post_before"]; } else { $_viewtopic_body_postrow_post_before_ = null; }
            // line 131
            echo "\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_FIRST_UNREAD", array())) {
                // line 132
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (isset($context["S_UNREAD_VIEW"])) { $_S_UNREAD_VIEW_ = $context["S_UNREAD_VIEW"]; } else { $_S_UNREAD_VIEW_ = null; }
                if ($_S_UNREAD_VIEW_) {
                    echo " data-url=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 134
            echo "\t<div id=\"p";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "S_ONLINE", array()) &&  !$this->getAttribute($_postrow_, "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 137
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\"";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 138
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) || $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t";
            // line 139
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "S_ONLINE", array()) &&  !$this->getAttribute($_postrow_, "S_POST_HIDDEN", array()))) {
                // line 140
                echo "\t\t\t\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("ONLINE");
                echo "</div>
\t\t\t\t";
            }
            // line 142
            echo "
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 144
            if (isset($context["viewtopic_body_avatar_before"])) { $_viewtopic_body_avatar_before_ = $context["viewtopic_body_avatar_before"]; } else { $_viewtopic_body_avatar_before_ = null; }
            // line 145
            echo "\t\t\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_AVATAR", array())) {
                // line 146
                echo "\t\t\t\t\t\t";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 147
                echo "\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t";
            if (isset($context["viewtopic_body_avatar_after"])) { $_viewtopic_body_avatar_after_ = $context["viewtopic_body_avatar_after"]; } else { $_viewtopic_body_avatar_after_ = null; }
            // line 149
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 150
            if (isset($context["viewtopic_body_post_author_before"])) { $_viewtopic_body_post_author_before_ = $context["viewtopic_body_post_author_before"]; } else { $_viewtopic_body_post_author_before_ = null; }
            // line 151
            echo "\t\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ( !$this->getAttribute($_postrow_, "U_POST_AUTHOR", array())) {
                echo "<strong>";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
            }
            // line 152
            echo "\t\t\t\t";
            if (isset($context["viewtopic_body_post_author_after"])) { $_viewtopic_body_post_author_after_ = $context["viewtopic_body_post_author_after"]; } else { $_viewtopic_body_post_author_after_ = null; }
            // line 153
            echo "\t\t\t</dt>

\t\t\t";
            // line 155
            if (isset($context["viewtopic_body_postrow_rank_before"])) { $_viewtopic_body_postrow_rank_before_ = $context["viewtopic_body_postrow_rank_before"]; } else { $_viewtopic_body_postrow_rank_before_ = null; }
            // line 156
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) || $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                echo "<dd class=\"profile-rank\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "RANK_TITLE", array());
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) && $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                    echo "<br />";
                }
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "RANK_IMG", array());
                echo "</dd>";
            }
            // line 157
            echo "\t\t\t";
            if (isset($context["viewtopic_body_postrow_rank_after"])) { $_viewtopic_body_postrow_rank_after_ = $context["viewtopic_body_postrow_rank_after"]; } else { $_viewtopic_body_postrow_rank_after_ = null; }
            // line 158
            echo "
\t\t";
            // line 159
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_SEARCH", array());
                    echo "\">";
                }
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_POSTS", array());
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 160
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 161
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 162
            echo "
\t\t";
            // line 163
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_PROFILE_FIELD1", array())) {
                // line 164
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 165
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 167
            echo "
\t\t";
            // line 168
            if (isset($context["viewtopic_body_postrow_custom_fields_before"])) { $_viewtopic_body_postrow_custom_fields_before_ = $context["viewtopic_body_postrow_custom_fields_before"]; } else { $_viewtopic_body_postrow_custom_fields_before_ = null; }
            // line 169
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 170
                echo "\t\t\t";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ( !$this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                    // line 171
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 173
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t";
            if (isset($context["viewtopic_body_postrow_custom_fields_after"])) { $_viewtopic_body_postrow_custom_fields_after_ = $context["viewtopic_body_postrow_custom_fields_after"]; } else { $_viewtopic_body_postrow_custom_fields_after_ = null; }
            // line 175
            echo "
\t\t";
            // line 176
            if (isset($context["viewtopic_body_contact_fields_before"])) { $_viewtopic_body_contact_fields_before_ = $context["viewtopic_body_contact_fields_before"]; } else { $_viewtopic_body_contact_fields_before_ = null; }
            // line 177
            echo "\t\t";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (( !$_S_IS_BOT_ && twig_length_filter($this->env, $this->getAttribute($_postrow_, "contact", array())))) {
                // line 178
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 181
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "CONTACT_USER", array());
                echo "\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "CONTACT_USER", array());
                echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 185
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    $context["REMAINDER"] = ($this->getAttribute($_contact_, "S_ROW_COUNT", array()) % 4);
                    // line 187
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["S_LAST_CELL"])) { $_S_LAST_CELL_ = $context["S_LAST_CELL"]; } else { $_S_LAST_CELL_ = null; }
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    $value = (($_REMAINDER_ == 3) || ($this->getAttribute($_contact_, "S_LAST_ROW", array()) && ($this->getAttribute($_contact_, "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 188
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (($_REMAINDER_ == 0)) {
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if ($this->getAttribute($_contact_, "U_CONTACT", array())) {
                        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                        echo $this->getAttribute($_contact_, "U_CONTACT", array());
                    } else {
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "NAME", array());
                    echo "\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    if ($this->getAttribute($_definition_, "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if (($this->getAttribute($_contact_, "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 192
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "ID", array());
                    echo "-icon\">";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 194
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if ((($_REMAINDER_ == 3) || $this->getAttribute($_contact_, "S_LAST_ROW", array()))) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 197
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 203
            echo "\t\t";
            if (isset($context["viewtopic_body_contact_fields_after"])) { $_viewtopic_body_contact_fields_after_ = $context["viewtopic_body_contact_fields_after"]; } else { $_viewtopic_body_contact_fields_after_ = null; }
            // line 204
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 208
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                // line 209
                echo "\t\t\t\t";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                    // line 210
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 211
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 212
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute($_postrow_, "S_IGNORE_POST", array())) {
                    // line 215
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 216
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 217
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 220
                echo "\t\t\t";
            }
            // line 221
            echo "\t\t\t<div id=\"post_content";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\"";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 223
            if (isset($context["viewtopic_body_post_subject_before"])) { $_viewtopic_body_post_subject_before_ = $context["viewtopic_body_post_subject_before"]; } else { $_viewtopic_body_post_subject_before_ = null; }
            // line 224
            echo "\t\t\t<h3 ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                echo $_T_ICONS_PATH_;
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG", array());
                echo "\" width=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\">";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 226
            if (isset($context["SHOW_POST_BUTTONS"])) { $_SHOW_POST_BUTTONS_ = $context["SHOW_POST_BUTTONS"]; } else { $_SHOW_POST_BUTTONS_ = null; }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            $value = ((((($this->getAttribute($_postrow_, "U_EDIT", array()) || $this->getAttribute($_postrow_, "U_DELETE", array())) || $this->getAttribute($_postrow_, "U_REPORT", array())) || $this->getAttribute($_postrow_, "U_WARN", array())) || $this->getAttribute($_postrow_, "U_INFO", array())) || $this->getAttribute($_postrow_, "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 227
            echo "\t\t";
            if (isset($context["viewtopic_body_post_buttons_list_before"])) { $_viewtopic_body_post_buttons_list_before_ = $context["viewtopic_body_post_buttons_list_before"]; } else { $_viewtopic_body_post_buttons_list_before_ = null; }
            // line 228
            echo "\t\t";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 229
                echo "\t\t\t";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ($this->getAttribute($_definition_, "SHOW_POST_BUTTONS", array())) {
                    // line 230
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 231
                    if (isset($context["viewtopic_body_post_buttons_before"])) { $_viewtopic_body_post_buttons_before_ = $context["viewtopic_body_post_buttons_before"]; } else { $_viewtopic_body_post_buttons_before_ = null; }
                    // line 232
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_EDIT", array())) {
                        // line 233
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 234
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_DELETE", array())) {
                        // line 238
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 239
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 242
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_REPORT", array())) {
                        // line 243
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 244
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 247
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_WARN", array())) {
                        // line 248
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 249
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 252
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_INFO", array())) {
                        // line 253
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 254
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 257
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_QUOTE", array())) {
                        // line 258
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 259
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button icon-button quote-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 262
                    echo "\t\t\t\t\t";
                    if (isset($context["viewtopic_body_post_buttons_after"])) { $_viewtopic_body_post_buttons_after_ = $context["viewtopic_body_post_buttons_after"]; } else { $_viewtopic_body_post_buttons_after_ = null; }
                    // line 263
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 265
                echo "\t\t";
            }
            // line 266
            echo "\t\t";
            if (isset($context["viewtopic_body_post_buttons_list_after"])) { $_viewtopic_body_post_buttons_list_after_ = $context["viewtopic_body_post_buttons_list_after"]; } else { $_viewtopic_body_post_buttons_list_after_ = null; }
            // line 267
            echo "
\t\t\t";
            // line 268
            if (isset($context["viewtopic_body_postrow_post_details_before"])) { $_viewtopic_body_postrow_post_details_before_ = $context["viewtopic_body_postrow_post_details_before"]; } else { $_viewtopic_body_postrow_post_details_before_ = null; }
            // line 269
            echo "\t\t\t<p class=\"author\">";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ($_S_IS_BOT_) {
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_MINI_POST", array());
                echo "\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; </span>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_DATE", array());
            echo " </p>
\t\t\t";
            // line 270
            if (isset($context["viewtopic_body_postrow_post_details_after"])) { $_viewtopic_body_postrow_post_details_after_ = $context["viewtopic_body_postrow_post_details_after"]; } else { $_viewtopic_body_postrow_post_details_after_ = null; }
            // line 271
            echo "
\t\t\t";
            // line 272
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_UNAPPROVED", array())) {
                // line 273
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 275
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 276
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 277
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 278
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 279
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                // line 283
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 285
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 286
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_DELETE_PERMANENT", array())) {
                    // line 287
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 290
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 291
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 295
            echo "
\t\t\t";
            // line 296
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_REPORTED", array())) {
                // line 297
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 298
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 301
            echo "
\t\t\t<div class=\"content\">";
            // line 302
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 304
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_HAS_ATTACHMENTS", array())) {
                // line 305
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 307
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 309
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 310
                    echo "\t\t\t\t\t\t<dd>";
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 314
            echo "
\t\t\t";
            // line 315
            if (isset($context["viewtopic_body_postrow_post_notices_before"])) { $_viewtopic_body_postrow_post_notices_before_ = $context["viewtopic_body_postrow_post_notices_before"]; } else { $_viewtopic_body_postrow_post_notices_before_ = null; }
            // line 316
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 317
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "DELETED_MESSAGE", array()) || $this->getAttribute($_postrow_, "DELETE_REASON", array()))) {
                // line 318
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 319
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 320
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 321
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute($_postrow_, "EDITED_MESSAGE", array()) || $this->getAttribute($_postrow_, "EDIT_REASON", array()))) {
                // line 323
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 324
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 325
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 326
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 328
            echo "
\t\t\t";
            // line 329
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 330
            echo "\t\t\t";
            if (isset($context["viewtopic_body_postrow_post_notices_after"])) { $_viewtopic_body_postrow_post_notices_after_ = $context["viewtopic_body_postrow_post_notices_after"]; } else { $_viewtopic_body_postrow_post_notices_after_ = null; }
            // line 331
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "SIGNATURE", array())) {
                echo "<div id=\"sig";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" class=\"signature\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "SIGNATURE", array());
                echo "</div>";
            }
            // line 332
            echo "
\t\t\t";
            // line 333
            if (isset($context["viewtopic_body_postrow_post_content_footer"])) { $_viewtopic_body_postrow_post_content_footer_ = $context["viewtopic_body_postrow_post_content_footer"]; } else { $_viewtopic_body_postrow_post_content_footer_ = null; }
            // line 334
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 338
            if (isset($context["viewtopic_body_postrow_back2top_before"])) { $_viewtopic_body_postrow_back2top_before_ = $context["viewtopic_body_postrow_back2top_before"]; } else { $_viewtopic_body_postrow_back2top_before_ = null; }
            // line 339
            echo "\t\t<div class=\"back2top\">";
            if (isset($context["viewtopic_body_postrow_back2top_prepend"])) { $_viewtopic_body_postrow_back2top_prepend_ = $context["viewtopic_body_postrow_back2top_prepend"]; } else { $_viewtopic_body_postrow_back2top_prepend_ = null; }
            echo "<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\"><i class=\"fa fa-rotate-270 fa-play-circle\"></i></a>";
            if (isset($context["viewtopic_body_postrow_back2top_append"])) { $_viewtopic_body_postrow_back2top_append_ = $context["viewtopic_body_postrow_back2top_append"]; } else { $_viewtopic_body_postrow_back2top_append_ = null; }
            echo "</div>
\t\t";
            // line 340
            if (isset($context["viewtopic_body_postrow_back2top_after"])) { $_viewtopic_body_postrow_back2top_after_ = $context["viewtopic_body_postrow_back2top_after"]; } else { $_viewtopic_body_postrow_back2top_after_ = null; }
            // line 341
            echo "
\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 346
            if (isset($context["viewtopic_body_postrow_post_after"])) { $_viewtopic_body_postrow_post_after_ = $context["viewtopic_body_postrow_post_after"]; } else { $_viewtopic_body_postrow_post_after_ = null; }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "
";
        // line 349
        if (isset($context["S_QUICK_REPLY"])) { $_S_QUICK_REPLY_ = $context["S_QUICK_REPLY"]; } else { $_S_QUICK_REPLY_ = null; }
        if ($_S_QUICK_REPLY_) {
            // line 350
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 350)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 352
        echo "
";
        // line 353
        if (isset($context["S_NUM_POSTS"])) { $_S_NUM_POSTS_ = $context["S_NUM_POSTS"]; } else { $_S_NUM_POSTS_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((($_S_NUM_POSTS_ > 1) || twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())))) {
            // line 354
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            if (isset($context["S_TOPIC_ACTION"])) { $_S_TOPIC_ACTION_ = $context["S_TOPIC_ACTION"]; } else { $_S_TOPIC_ACTION_ = null; }
            echo $_S_TOPIC_ACTION_;
            echo "\">
\t<fieldset class=\"display-options\">
\t\t";
            // line 356
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 357
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                echo "</label>
\t\t<label>";
                // line 358
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                echo $_S_SELECT_SORT_KEY_;
                echo "</label> <label>";
                if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                echo $_S_SELECT_SORT_DIR_;
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 359
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 361
            echo "\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 365
        echo "
";
        // line 366
        if (isset($context["viewtopic_body_topic_actions_before"])) { $_viewtopic_body_topic_actions_before_ = $context["viewtopic_body_topic_actions_before"]; } else { $_viewtopic_body_topic_actions_before_ = null; }
        // line 367
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 369
        if (isset($context["viewtopic_buttons_bottom_before"])) { $_viewtopic_buttons_bottom_before_ = $context["viewtopic_buttons_bottom_before"]; } else { $_viewtopic_buttons_bottom_before_ = null; }
        // line 370
        echo "
\t";
        // line 371
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_REPLY_INFO"])) { $_S_DISPLAY_REPLY_INFO_ = $context["S_DISPLAY_REPLY_INFO"]; } else { $_S_DISPLAY_REPLY_INFO_ = null; }
        if (( !$_S_IS_BOT_ && $_S_DISPLAY_REPLY_INFO_)) {
            // line 372
            echo "\t\t<a href=\"";
            if (isset($context["U_POST_REPLY_TOPIC"])) { $_U_POST_REPLY_TOPIC_ = $context["U_POST_REPLY_TOPIC"]; } else { $_U_POST_REPLY_TOPIC_ = null; }
            echo $_U_POST_REPLY_TOPIC_;
            echo "\" class=\"button icon-button ";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 373
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 374
            echo "\t\t</a>
\t";
        }
        // line 376
        echo "
\t\t";
        // line 377
        if (isset($context["viewtopic_buttons_bottom_after"])) { $_viewtopic_buttons_bottom_after_ = $context["viewtopic_buttons_bottom_after"]; } else { $_viewtopic_buttons_bottom_after_ = null; }
        // line 378
        echo "\t</div>

\t";
        // line 380
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 380)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 381
        echo "
\t";
        // line 382
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "quickmod", array()))) {
            // line 383
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo " dropdown-up dropdown-";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 384
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 388
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 389
                echo "\t\t\t\t\t";
                if (isset($context["QUICKMOD_AJAX"])) { $_QUICKMOD_AJAX_ = $context["QUICKMOD_AJAX"]; } else { $_QUICKMOD_AJAX_ = null; }
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                $value = twig_in_filter($this->getAttribute($_quickmod_, "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 390
                echo "\t\t\t\t\t<li><a href=\"";
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                echo $this->getAttribute($_quickmod_, "LINK", array());
                echo "\"";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ($this->getAttribute($_definition_, "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                echo $this->getAttribute($_quickmod_, "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 396
        echo "
\t";
        // line 397
        if (isset($context["viewtopic_dropdown_bottom_custom"])) { $_viewtopic_dropdown_bottom_custom_ = $context["viewtopic_dropdown_bottom_custom"]; } else { $_viewtopic_dropdown_bottom_custom_ = null; }
        // line 398
        echo "
\t";
        // line 399
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_TOTAL_POSTS_)) {
            // line 400
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 401
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo "
\t\t\t";
            // line 402
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 403
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 403)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 404
                echo "\t\t\t";
            } else {
                // line 405
                echo "\t\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 407
            echo "\t\t</div>
\t";
        }
        // line 409
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 412
        if (isset($context["viewtopic_body_footer_before"])) { $_viewtopic_body_footer_before_ = $context["viewtopic_body_footer_before"]; } else { $_viewtopic_body_footer_before_ = null; }
        // line 413
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 413)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 414
        echo "
";
        // line 415
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 416
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 417
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                echo "<a href=\"";
                if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
                echo $_U_VIEWONLINE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 418
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "</p>
\t</div>
";
        }
        // line 421
        echo "
";
        // line 422
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 422)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1782 => 422,  1779 => 421,  1772 => 418,  1758 => 417,  1755 => 416,  1752 => 415,  1749 => 414,  1737 => 413,  1735 => 412,  1730 => 409,  1726 => 407,  1719 => 405,  1716 => 404,  1703 => 403,  1700 => 402,  1695 => 401,  1692 => 400,  1688 => 399,  1685 => 398,  1683 => 397,  1680 => 396,  1674 => 392,  1656 => 390,  1650 => 389,  1645 => 388,  1636 => 384,  1627 => 383,  1624 => 382,  1621 => 381,  1609 => 380,  1605 => 378,  1603 => 377,  1600 => 376,  1596 => 374,  1589 => 373,  1569 => 372,  1565 => 371,  1562 => 370,  1560 => 369,  1556 => 367,  1554 => 366,  1551 => 365,  1545 => 361,  1540 => 359,  1530 => 358,  1521 => 357,  1518 => 356,  1511 => 354,  1507 => 353,  1504 => 352,  1490 => 350,  1487 => 349,  1484 => 348,  1478 => 346,  1471 => 341,  1469 => 340,  1460 => 339,  1458 => 338,  1452 => 334,  1450 => 333,  1447 => 332,  1435 => 331,  1432 => 330,  1424 => 329,  1421 => 328,  1417 => 326,  1406 => 325,  1401 => 324,  1398 => 323,  1394 => 321,  1383 => 320,  1378 => 319,  1375 => 318,  1371 => 317,  1363 => 316,  1361 => 315,  1358 => 314,  1354 => 312,  1344 => 310,  1339 => 309,  1334 => 307,  1330 => 305,  1327 => 304,  1321 => 302,  1318 => 301,  1309 => 298,  1306 => 297,  1303 => 296,  1300 => 295,  1292 => 291,  1287 => 290,  1282 => 289,  1276 => 287,  1273 => 286,  1269 => 285,  1262 => 283,  1254 => 279,  1249 => 278,  1245 => 277,  1241 => 276,  1237 => 275,  1230 => 273,  1227 => 272,  1224 => 271,  1222 => 270,  1197 => 269,  1195 => 268,  1192 => 267,  1189 => 266,  1186 => 265,  1182 => 263,  1179 => 262,  1168 => 259,  1165 => 258,  1161 => 257,  1150 => 254,  1147 => 253,  1143 => 252,  1132 => 249,  1129 => 248,  1125 => 247,  1114 => 244,  1111 => 243,  1107 => 242,  1096 => 239,  1093 => 238,  1089 => 237,  1078 => 234,  1075 => 233,  1071 => 232,  1069 => 231,  1066 => 230,  1062 => 229,  1058 => 228,  1055 => 227,  1050 => 226,  1019 => 224,  1017 => 223,  1005 => 221,  1002 => 220,  995 => 217,  990 => 216,  984 => 215,  977 => 212,  972 => 211,  966 => 210,  962 => 209,  959 => 208,  953 => 204,  950 => 203,  943 => 198,  937 => 197,  933 => 195,  929 => 194,  920 => 192,  896 => 191,  892 => 189,  888 => 188,  881 => 187,  877 => 186,  872 => 185,  861 => 181,  855 => 179,  852 => 178,  847 => 177,  845 => 176,  842 => 175,  839 => 174,  833 => 173,  819 => 171,  815 => 170,  809 => 169,  807 => 168,  804 => 167,  794 => 165,  791 => 164,  788 => 163,  785 => 162,  773 => 161,  761 => 160,  739 => 159,  736 => 158,  733 => 157,  718 => 156,  716 => 155,  712 => 153,  709 => 152,  697 => 151,  695 => 150,  692 => 149,  689 => 148,  686 => 147,  669 => 146,  665 => 145,  663 => 144,  659 => 142,  653 => 140,  650 => 139,  634 => 138,  624 => 137,  589 => 134,  577 => 132,  573 => 131,  570 => 130,  565 => 129,  562 => 128,  560 => 127,  557 => 126,  547 => 120,  542 => 119,  535 => 115,  532 => 114,  523 => 111,  519 => 109,  516 => 108,  513 => 107,  507 => 104,  503 => 102,  500 => 101,  490 => 98,  482 => 96,  479 => 95,  473 => 94,  471 => 93,  455 => 91,  428 => 90,  394 => 89,  378 => 88,  354 => 87,  351 => 86,  346 => 85,  329 => 82,  322 => 81,  311 => 75,  308 => 74,  305 => 73,  303 => 72,  299 => 70,  296 => 69,  292 => 67,  285 => 65,  282 => 64,  269 => 63,  266 => 62,  251 => 61,  248 => 60,  244 => 59,  241 => 58,  232 => 53,  223 => 52,  217 => 51,  213 => 50,  207 => 48,  204 => 47,  201 => 46,  198 => 45,  195 => 44,  183 => 43,  179 => 41,  177 => 40,  174 => 39,  170 => 37,  163 => 36,  143 => 35,  139 => 34,  136 => 33,  134 => 32,  128 => 28,  122 => 24,  116 => 22,  111 => 21,  102 => 19,  99 => 18,  89 => 15,  86 => 14,  83 => 13,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  51 => 6,  48 => 5,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="topic-title"><!-- EVENT viewtopic_topic_title_prepend --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><!-- EVENT viewtopic_topic_title_append --></h2>*/
/* <!-- EVENT viewtopic_topic_title_after -->*/
/* <!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body -->*/
/* <!-- IF FORUM_DESC --><div style="display: none !important;">{FORUM_DESC}<br /></div><!-- ENDIF -->*/
/* */
/* <!-- IF MODERATORS -->*/
/* <p>*/
/* 	<strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong> {MODERATORS}*/
/* </p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_FORUM_RULES -->*/
/* 	<div class="rules<!-- IF U_FORUM_RULES --> rules-link<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* */
/* 		<!-- IF U_FORUM_RULES -->*/
/* 			<a href="{U_FORUM_RULES}">{L_FORUM_RULES}</a>*/
/* 		<!-- ELSE -->*/
/* 			<strong>{L_FORUM_RULES}</strong><br />*/
/* 			{FORUM_RULES}*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="action-bar top">*/
/* */
/* 	<div class="buttons">*/
/* 		<!-- EVENT viewtopic_buttons_top_before -->*/
/* */
/* 	<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 		<a href="{U_POST_REPLY_TOPIC}" class="button icon-button <!-- IF S_IS_LOCKED -->locked-icon<!-- ELSE -->reply-icon<!-- ENDIF -->" title="<!-- IF S_IS_LOCKED -->{L_TOPIC_LOCKED}<!-- ELSE -->{L_POST_REPLY}<!-- ENDIF -->">*/
/* 			<!-- IF S_IS_LOCKED -->{L_BUTTON_TOPIC_LOCKED}<!-- ELSE -->{L_BUTTON_POST_REPLY}<!-- ENDIF -->*/
/* 		</a>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT viewtopic_buttons_top_after -->*/
/* 	</div>*/
/* */
/* 	<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* 	<!-- EVENT viewtopic_dropdown_top_custom -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="search-box" role="search">*/
/* 			<form method="get" id="topic-search" action="{S_SEARCHBOX_ACTION}">*/
/* 			<fieldset>*/
/* 				<input class="inputbox search tiny"  type="search" name="keywords" id="search_keywords" size="20" placeholder="{L_SEARCH_TOPIC}" />*/
/* 				<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 				<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 				{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .pagination or TOTAL_POSTS -->*/
/* 		<div class="pagination">*/
/* 			<!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --><a href="{U_VIEW_UNREAD_POST}" class="mark">{L_VIEW_UNREAD_POST}</a> &bull; <!-- ENDIF -->{TOTAL_POSTS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				&bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT viewtopic_body_pagination_top_after -->*/
/* </div>*/
/* */
/* <!-- EVENT viewtopic_body_poll_before -->*/
/* */
/* <!-- IF S_HAS_POLL -->*/
/* 	<form method="post" action="{S_POLL_ACTION}" data-ajax="vote_poll" class="topic_poll">*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<div class="content">*/
/* 			<h2 class="poll-title"><!-- EVENT viewtopic_body_poll_question_prepend -->{POLL_QUESTION}<!-- EVENT viewtopic_body_poll_question_append --></h2>*/
/* 			<p class="author">{L_POLL_LENGTH}<!-- IF S_CAN_VOTE and L_POLL_LENGTH --><br /><!-- ENDIF --><!-- IF S_CAN_VOTE --><span class="poll_max_votes">{L_MAX_VOTES}</span><!-- ENDIF --></p>*/
/* */
/* 			<fieldset class="polls">*/
/* 			<!-- BEGIN poll_option -->*/
/* 				<!-- EVENT viewtopic_body_poll_option_before -->*/
/* 				<dl class="<!-- IF poll_option.POLL_OPTION_VOTED -->voted<!-- ENDIF --><!-- IF poll_option.POLL_OPTION_MOST_VOTES --> most-votes<!-- ENDIF -->"<!-- IF poll_option.POLL_OPTION_VOTED --> title="{L_POLL_VOTED_OPTION}"<!-- ENDIF --> data-alt-text="{L_POLL_VOTED_OPTION}" data-poll-option-id="{poll_option.POLL_OPTION_ID}">*/
/* 					<dt><!-- IF S_CAN_VOTE --><label for="vote_{poll_option.POLL_OPTION_ID}">{poll_option.POLL_OPTION_CAPTION}</label><!-- ELSE -->{poll_option.POLL_OPTION_CAPTION}<!-- ENDIF --></dt>*/
/* 					<!-- IF S_CAN_VOTE --><dd style="width: auto;" class="poll_option_select"><!-- IF S_IS_MULTI_CHOICE --><input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ELSE --><input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ENDIF --></dd><!-- ENDIF -->*/
/* 					<dd class="resultbar<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->"><div class="<!-- IF poll_option.POLL_OPTION_PCT < 20 -->pollbar1<!-- ELSEIF poll_option.POLL_OPTION_PCT < 40 -->pollbar2<!-- ELSEIF poll_option.POLL_OPTION_PCT < 60 -->pollbar3<!-- ELSEIF poll_option.POLL_OPTION_PCT < 80 -->pollbar4<!-- ELSE -->pollbar5<!-- ENDIF -->" style="width:{poll_option.POLL_OPTION_PERCENT_REL};">{poll_option.POLL_OPTION_RESULT}</div></dd>*/
/* 					<dd class="poll_option_percent<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->"><!-- IF poll_option.POLL_OPTION_RESULT == 0 -->{L_NO_VOTES}<!-- ELSE -->{poll_option.POLL_OPTION_PERCENT}<!-- ENDIF --></dd>*/
/* 				</dl>*/
/* 				<!-- EVENT viewtopic_body_poll_option_after -->*/
/* 			<!-- END poll_option -->*/
/* */
/* 				<dl class="poll_total_votes<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->">*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd class="resultbar">{L_TOTAL_VOTES}{L_COLON} <span class="poll_total_vote_cnt">{TOTAL_VOTES}</span></dd>*/
/* 				</dl>*/
/* */
/* 			<!-- IF S_CAN_VOTE -->*/
/* 				<dl style="border-top: none;" class="poll_vote">*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd class="resultbar"><input type="submit" name="update" value="{L_SUBMIT_VOTE}" class="button1" /></dd>*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_DISPLAY_RESULTS -->*/
/* 				<dl style="border-top: none;" class="poll_view_results">*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd class="resultbar"><a href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></dd>*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* 			</fieldset>*/
/* 			<div class="vote-submitted hidden">{L_VOTE_SUBMITTED}</div>*/
/* 		</div>*/
/* */
/* 		</div>*/
/* 		{S_FORM_TOKEN}*/
/* 		{S_HIDDEN_FIELDS}*/
/* 	</div>*/
/* */
/* 	</form>*/
/* 	<hr />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_poll_after -->*/
/* */
/* <!-- BEGIN postrow -->*/
/* 	<!-- EVENT viewtopic_body_postrow_post_before -->*/
/* 	<!-- IF postrow.S_FIRST_UNREAD -->*/
/* 		<a id="unread" class="anchor"<!-- IF S_UNREAD_VIEW --> data-url="{postrow.U_MINI_POST}"<!-- ENDIF -->></a>*/
/* 	<!-- ENDIF -->*/
/* 	<div id="p{postrow.POST_ID}" class="post has-profile <!-- IF postrow.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF postrow.S_UNREAD_POST --> unreadpost<!-- ENDIF --><!-- IF postrow.S_POST_REPORTED --> reported<!-- ENDIF --><!-- IF postrow.S_POST_DELETED --> deleted<!-- ENDIF --><!-- IF postrow.S_ONLINE and not postrow.S_POST_HIDDEN --> online<!-- ENDIF --><!-- IF postrow.POSTER_WARNINGS --> warned<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* */
/* 		<dl class="postprofile" id="profile{postrow.POST_ID}"<!-- IF postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* 			<dt class="<!-- IF postrow.RANK_TITLE or postrow.RANK_IMG -->has-profile-rank<!-- ELSE -->no-profile-rank<!-- ENDIF --> <!-- IF postrow.POSTER_AVATAR -->has-avatar<!-- ELSE -->no-avatar<!-- ENDIF -->">*/
/* 				<!-- IF postrow.S_ONLINE and not postrow.S_POST_HIDDEN -->*/
/* 					<div class="inventea-online"><i class="fa fa-power-off"></i> {L_ONLINE}</div>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<div class="avatar-container">*/
/* 					<!-- EVENT viewtopic_body_avatar_before -->*/
/* 					<!-- IF postrow.POSTER_AVATAR -->*/
/* 						<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}" class="avatar">{postrow.POSTER_AVATAR}</a><!-- ELSE --><span class="avatar">{postrow.POSTER_AVATAR}</span><!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT viewtopic_body_avatar_after -->*/
/* 				</div>*/
/* 				<!-- EVENT viewtopic_body_post_author_before -->*/
/* 				<!-- IF not postrow.U_POST_AUTHOR --><strong>{postrow.POST_AUTHOR_FULL}</strong><!-- ELSE -->{postrow.POST_AUTHOR_FULL}<!-- ENDIF -->*/
/* 				<!-- EVENT viewtopic_body_post_author_after -->*/
/* 			</dt>*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_rank_before -->*/
/* 			<!-- IF postrow.RANK_TITLE or postrow.RANK_IMG --><dd class="profile-rank">{postrow.RANK_TITLE}<!-- IF postrow.RANK_TITLE and postrow.RANK_IMG --><br /><!-- ENDIF -->{postrow.RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_body_postrow_rank_after -->*/
/* */
/* 		<!-- IF postrow.POSTER_POSTS != '' --><dd class="profile-posts"><strong>{L_POSTS}{L_COLON}</strong> <!-- IF postrow.U_SEARCH !== '' --><a href="{postrow.U_SEARCH}"><!-- ENDIF -->{postrow.POSTER_POSTS}<!-- IF postrow.U_SEARCH !== '' --></a><!-- ENDIF --></dd><!-- ENDIF -->*/
/* 		<!-- IF postrow.POSTER_JOINED --><dd class="profile-joined"><strong>{L_JOINED}{L_COLON}</strong> {postrow.POSTER_JOINED}</dd><!-- ENDIF -->*/
/* 		<!-- IF postrow.POSTER_WARNINGS --><dd class="profile-warnings"><strong>{L_WARNINGS}{L_COLON}</strong> {postrow.POSTER_WARNINGS}</dd><!-- ENDIF -->*/
/* */
/* 		<!-- IF postrow.S_PROFILE_FIELD1 -->*/
/* 			<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dd><strong>{postrow.PROFILE_FIELD1_NAME}{L_COLON}</strong> {postrow.PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT viewtopic_body_postrow_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF not postrow.custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dd class="profile-custom-field profile-{postrow.custom_fields.PROFILE_FIELD_IDENT}"><strong>{postrow.custom_fields.PROFILE_FIELD_NAME}{L_COLON}</strong> {postrow.custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT viewtopic_body_postrow_custom_fields_after -->*/
/* */
/* 		<!-- EVENT viewtopic_body_contact_fields_before -->*/
/* 		<!-- IF not S_IS_BOT and .postrow.contact -->*/
/* 			<dd class="profile-contact">*/
/* 				<strong>{L_CONTACT}{L_COLON}</strong>*/
/* 				<div class="dropdown-container dropdown-left">*/
/* 					<a href="#" class="dropdown-trigger"><span class="imageset icon_contact" title="{postrow.CONTACT_USER}">{postrow.CONTACT_USER}</span></a>*/
/* 					<div class="dropdown hidden">*/
/* 						<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 						<div class="dropdown-contents contact-icons">*/
/* 							<!-- BEGIN contact -->*/
/* 								{% set REMAINDER = postrow.contact.S_ROW_COUNT % 4 %}*/
/* 								<!-- DEFINE $S_LAST_CELL = ((REMAINDER eq 3) or (postrow.contact.S_LAST_ROW and postrow.contact.S_NUM_ROWS < 4)) -->*/
/* 								<!-- IF REMAINDER eq 0 -->*/
/* 									<div>*/
/* 								<!-- ENDIF -->*/
/* 									<a href="<!-- IF postrow.contact.U_CONTACT -->{postrow.contact.U_CONTACT}<!-- ELSE -->{postrow.U_POST_AUTHOR}<!-- ENDIF -->" title="{postrow.contact.NAME}"<!-- IF $S_LAST_CELL --> class="last-cell"<!-- ENDIF --><!-- IF postrow.contact.ID eq 'jabber' --> onclick="popup(this.href, 750, 320); return false;"<!-- ENDIF -->>*/
/* 										<span class="contact-icon {postrow.contact.ID}-icon">{postrow.contact.NAME}</span>*/
/* 									</a>*/
/* 								<!-- IF REMAINDER eq 3 or postrow.contact.S_LAST_ROW -->*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END contact -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</dd>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT viewtopic_body_contact_fields_after -->*/
/* */
/* 		</dl>*/
/* */
/* 		<div class="postbody">*/
/* 			<!-- IF postrow.S_POST_HIDDEN -->*/
/* 				<!-- IF postrow.S_POST_DELETED -->*/
/* 					<div class="ignore" id="post_hidden{postrow.POST_ID}">*/
/* 						{postrow.L_POST_DELETED_MESSAGE}<br />*/
/* 						{postrow.L_POST_DISPLAY}*/
/* 					</div>*/
/* 				<!-- ELSEIF postrow.S_IGNORE_POST -->*/
/* 					<div class="ignore" id="post_hidden{postrow.POST_ID}">*/
/* 						{postrow.L_IGNORE_POST}<br />*/
/* 						{postrow.L_POST_DISPLAY}*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<div id="post_content{postrow.POST_ID}"<!-- IF postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* */
/* 			<!-- EVENT viewtopic_body_post_subject_before -->*/
/* 			<h3 <!-- IF postrow.S_FIRST_ROW -->class="first"<!-- ENDIF -->><!-- IF postrow.POST_ICON_IMG --><img src="{T_ICONS_PATH}{postrow.POST_ICON_IMG}" width="{postrow.POST_ICON_IMG_WIDTH}" height="{postrow.POST_ICON_IMG_HEIGHT}" alt="" /> <!-- ENDIF --><a href="#p{postrow.POST_ID}">{postrow.POST_SUBJECT}</a></h3>*/
/* */
/* 		<!-- DEFINE $SHOW_POST_BUTTONS = (postrow.U_EDIT or postrow.U_DELETE or postrow.U_REPORT or postrow.U_WARN or postrow.U_INFO or postrow.U_QUOTE) -->*/
/* 		<!-- EVENT viewtopic_body_post_buttons_list_before -->*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<!-- IF $SHOW_POST_BUTTONS -->*/
/* 				<ul class="post-buttons">*/
/* 					<!-- EVENT viewtopic_body_post_buttons_before -->*/
/* 					<!-- IF postrow.U_EDIT -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_EDIT}" title="{L_EDIT_POST}" class="button icon-button edit-icon"><span>{L_BUTTON_EDIT}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF postrow.U_DELETE -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_DELETE}" title="{L_DELETE_POST}" class="button icon-button delete-icon"><span>{L_DELETE_POST}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF postrow.U_REPORT -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_REPORT}" title="{L_REPORT_POST}" class="button icon-button report-icon"><span>{L_REPORT_POST}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF postrow.U_WARN -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_WARN}" title="{L_WARN_USER}" class="button icon-button warn-icon"><span>{L_WARN_USER}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF postrow.U_INFO -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_INFO}" title="{L_INFORMATION}" class="button icon-button info-icon"><span>{L_INFORMATION}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF postrow.U_QUOTE -->*/
/* 						<li>*/
/* 							<a href="{postrow.U_QUOTE}" title="{L_REPLY_WITH_QUOTE}" class="button icon-button quote-icon"><span>{L_QUOTE}</span></a>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT viewtopic_body_post_buttons_after -->*/
/* 				</ul>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT viewtopic_body_post_buttons_list_after -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_details_before -->*/
/* 			<p class="author"><!-- IF S_IS_BOT -->{postrow.MINI_POST_IMG}<!-- ELSE --><a href="{postrow.U_MINI_POST}">{postrow.MINI_POST_IMG}</a><!-- ENDIF --><span class="responsive-hide">{L_POST_BY_AUTHOR} <strong>{postrow.POST_AUTHOR_FULL}</strong> &raquo; </span>{postrow.POST_DATE} </p>*/
/* 			<!-- EVENT viewtopic_body_postrow_post_details_after -->*/
/* */
/* 			<!-- IF postrow.S_POST_UNAPPROVED -->*/
/* 			<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 				<p class="post-notice unapproved">*/
/* 					<strong>{L_POST_UNAPPROVED_ACTION}</strong>*/
/* 					<input class="button2" type="submit" value="{L_DISAPPROVE}" name="action[disapprove]" />*/
/* 					<input class="button1" type="submit" value="{L_APPROVE}" name="action[approve]" />*/
/* 					<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</p>*/
/* 			</form>*/
/* 			<!-- ELSEIF postrow.S_POST_DELETED -->*/
/* 			<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 				<p class="post-notice deleted">*/
/* 					<strong>{L_POST_DELETED_ACTION}</strong>*/
/* 					<!-- IF postrow.S_DELETE_PERMANENT -->*/
/* 						<input class="button2" type="submit" value="{L_DELETE}" name="action[delete]" />*/
/* 					<!-- ENDIF -->*/
/* 					<input class="button1" type="submit" value="{L_RESTORE}" name="action[restore]" />*/
/* 					<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</p>*/
/* 			</form>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF postrow.S_POST_REPORTED -->*/
/* 			<p class="post-notice reported">*/
/* 				<a href="{postrow.U_MCP_REPORT}"><strong>{L_POST_REPORTED}</strong></a>*/
/* 			</p>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<div class="content">{postrow.MESSAGE}</div>*/
/* */
/* 			<!-- IF postrow.S_HAS_ATTACHMENTS -->*/
/* 				<dl class="attachbox">*/
/* 					<dt>*/
/* 						{L_ATTACHMENTS}*/
/* 					</dt>*/
/* 					<!-- BEGIN attachment -->*/
/* 						<dd>{postrow.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 					<!-- END attachment -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_notices_before -->*/
/* 			<!-- IF postrow.S_DISPLAY_NOTICE --><div class="rules">{L_DOWNLOAD_NOTICE}</div><!-- ENDIF -->*/
/* 			<!-- IF postrow.DELETED_MESSAGE or postrow.DELETE_REASON -->*/
/* 				<div class="notice post_deleted_msg">*/
/* 					{postrow.DELETED_MESSAGE}*/
/* 					<!-- IF postrow.DELETE_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.DELETE_REASON}</em><!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ELSEIF postrow.EDITED_MESSAGE or postrow.EDIT_REASON -->*/
/* 				<div class="notice">*/
/* 					{postrow.EDITED_MESSAGE}*/
/* 					<!-- IF postrow.EDIT_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.EDIT_REASON}</em><!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF postrow.BUMPED_MESSAGE --><div class="notice"><br /><br />{postrow.BUMPED_MESSAGE}</div><!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_body_postrow_post_notices_after -->*/
/* 			<!-- IF postrow.SIGNATURE --><div id="sig{postrow.POST_ID}" class="signature">{postrow.SIGNATURE}</div><!-- ENDIF -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_content_footer -->*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<!-- EVENT viewtopic_body_postrow_back2top_before -->*/
/* 		<div class="back2top"><!-- EVENT viewtopic_body_postrow_back2top_prepend --><a href="#top" class="top" title="{L_BACK_TO_TOP}"><i class="fa fa-rotate-270 fa-play-circle"></i></a><!-- EVENT viewtopic_body_postrow_back2top_append --></div>*/
/* 		<!-- EVENT viewtopic_body_postrow_back2top_after -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<hr class="divider" />*/
/* 	<!-- EVENT viewtopic_body_postrow_post_after -->*/
/* <!-- END postrow -->*/
/* */
/* <!-- IF S_QUICK_REPLY -->*/
/* 	<!-- INCLUDE quickreply_editor.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NUM_POSTS > 1 or .pagination -->*/
/* 	<form id="viewtopic" method="post" action="{S_TOPIC_ACTION}">*/
/* 	<fieldset class="display-options">*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 		<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label> <label>{S_SELECT_SORT_DIR}</label>*/
/* 		<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* 	</form>*/
/* 	<hr />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_topic_actions_before -->*/
/* <div class="action-bar bottom">*/
/* 	<div class="buttons">*/
/* 		<!-- EVENT viewtopic_buttons_bottom_before -->*/
/* */
/* 	<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 		<a href="{U_POST_REPLY_TOPIC}" class="button icon-button <!-- IF S_IS_LOCKED -->locked-icon<!-- ELSE -->reply-icon<!-- ENDIF -->" title="<!-- IF S_IS_LOCKED -->{L_TOPIC_LOCKED}<!-- ELSE -->{L_POST_REPLY}<!-- ENDIF -->">*/
/* 			<!-- IF S_IS_LOCKED -->{L_BUTTON_TOPIC_LOCKED}<!-- ELSE -->{L_BUTTON_POST_REPLY}<!-- ENDIF -->*/
/* 		</a>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT viewtopic_buttons_bottom_after -->*/
/* 	</div>*/
/* */
/* 	<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* */
/* 	<!-- IF .quickmod -->*/
/* 		<div class="dropdown-container dropdown-container-{S_CONTENT_FLOW_BEGIN} dropdown-up dropdown-{S_CONTENT_FLOW_END} dropdown-button-control" id="quickmod">*/
/* 			<span title="{L_QUICK_MOD}" class="dropdown-trigger button icon-button modtools-icon dropdown-select">{L_QUICK_MOD}</span>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 				<!-- BEGIN quickmod -->*/
/* 					<!-- DEFINE $QUICKMOD_AJAX = (quickmod.VALUE in ['lock', 'unlock', 'delete_topic', 'restore_topic', 'make_normal', 'make_sticky', 'make_announce', 'make_global']) -->*/
/* 					<li><a href="{quickmod.LINK}"<!-- IF $QUICKMOD_AJAX --> data-ajax="true" data-refresh="true"<!-- ENDIF -->>{quickmod.TITLE}</a></li>*/
/* 				<!-- END quickmod -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT viewtopic_dropdown_bottom_custom -->*/
/* */
/* 	<!-- IF .pagination or TOTAL_POSTS -->*/
/* 		<div class="pagination">*/
/* 			{TOTAL_POSTS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				&bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<div class="clear"></div>*/
/* </div>*/
/* */
/* <!-- EVENT viewtopic_body_footer_before -->*/
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="stat-block online-list">*/
/* 		<h3><!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></h3>*/
/* 		<p>{LOGGED_IN_USER_LIST}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
