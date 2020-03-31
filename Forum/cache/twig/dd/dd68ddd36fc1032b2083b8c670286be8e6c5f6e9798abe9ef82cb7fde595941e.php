<?php

/* viewforum_body.html */
class __TwigTemplate_2e787a5f4d1c51bd90b7939673008011e09a5c4cec7dc25e439faed0eb377d47 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        if (isset($context["viewforum_forum_title_before"])) { $_viewforum_forum_title_before_ = $context["viewforum_forum_title_before"]; } else { $_viewforum_forum_title_before_ = null; }
        // line 3
        echo "<h2 class=\"forum-title\">";
        if (isset($context["viewforum_forum_name_prepend"])) { $_viewforum_forum_name_prepend_ = $context["viewforum_forum_name_prepend"]; } else { $_viewforum_forum_name_prepend_ = null; }
        echo "<a href=\"";
        if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
        echo $_U_VIEW_FORUM_;
        echo "\">";
        if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
        echo $_FORUM_NAME_;
        echo "</a>";
        if (isset($context["viewforum_forum_name_append"])) { $_viewforum_forum_name_append_ = $context["viewforum_forum_name_append"]; } else { $_viewforum_forum_name_append_ = null; }
        echo "</h2>
";
        // line 4
        if (isset($context["viewforum_forum_title_after"])) { $_viewforum_forum_title_after_ = $context["viewforum_forum_title_after"]; } else { $_viewforum_forum_title_after_ = null; }
        // line 5
        if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
        if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ((($_FORUM_DESC_ || $_MODERATORS_) || $_U_MCP_)) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
            if ($_FORUM_DESC_) {
                echo "<div style=\"display: none !important;\">";
                if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
                echo $_FORUM_DESC_;
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
            if ($_MODERATORS_) {
                echo "<p><strong>";
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
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (isset($context["S_FORUM_RULES"])) { $_S_FORUM_RULES_ = $context["S_FORUM_RULES"]; } else { $_S_FORUM_RULES_ = null; }
        if ($_S_FORUM_RULES_) {
            // line 14
            echo "\t<div class=\"rules";
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                // line 18
                echo "\t\t\t<a href=\"";
                if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
                echo $_U_FORUM_RULES_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                if (isset($context["FORUM_RULES"])) { $_FORUM_RULES_ = $context["FORUM_RULES"]; } else { $_FORUM_RULES_ = null; }
                echo $_FORUM_RULES_;
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (isset($context["S_HAS_SUBFORUM"])) { $_S_HAS_SUBFORUM_ = $context["S_HAS_SUBFORUM"]; } else { $_S_HAS_SUBFORUM_ = null; }
        if ($_S_HAS_SUBFORUM_) {
            // line 29
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            if (( !$_S_IS_BOT_ && $_U_MARK_FORUMS_)) {
                // line 30
                echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                // line 31
                if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
                echo $_U_MARK_FORUMS_;
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t</div>
";
            }
            // line 34
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
        if (((($_S_DISPLAY_POST_INFO_ || twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) || $_TOTAL_POSTS_) || $_TOTAL_TOPICS_)) {
            // line 38
            echo "\t<div class=\"action-bar top\">

\t";
            // line 40
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
            if (( !$_S_IS_BOT_ && $_S_DISPLAY_POST_INFO_)) {
                // line 41
                echo "\t\t<div class=\"buttons\">
\t\t\t";
                // line 42
                if (isset($context["viewforum_buttons_top_before"])) { $_viewforum_buttons_top_before_ = $context["viewforum_buttons_top_before"]; } else { $_viewforum_buttons_top_before_ = null; }
                // line 43
                echo "
\t\t\t<a href=\"";
                // line 44
                if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
                echo $_U_POST_NEW_TOPIC_;
                echo "\" class=\"button icon-button ";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t";
                // line 45
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                }
                // line 46
                echo "\t\t\t</a>

\t\t\t";
                // line 48
                if (isset($context["viewforum_buttons_top_after"])) { $_viewforum_buttons_top_after_ = $context["viewforum_buttons_top_after"]; } else { $_viewforum_buttons_top_after_ = null; }
                // line 49
                echo "\t\t</div>
\t";
            }
            // line 51
            echo "
\t";
            // line 52
            if (isset($context["S_DISPLAY_SEARCHBOX"])) { $_S_DISPLAY_SEARCHBOX_ = $context["S_DISPLAY_SEARCHBOX"]; } else { $_S_DISPLAY_SEARCHBOX_ = null; }
            if ($_S_DISPLAY_SEARCHBOX_) {
                // line 53
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 54
                if (isset($context["S_SEARCHBOX_ACTION"])) { $_S_SEARCHBOX_ACTION_ = $context["S_SEARCHBOX_ACTION"]; } else { $_S_SEARCHBOX_ACTION_ = null; }
                echo $_S_SEARCHBOX_ACTION_;
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 58
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t\t";
                // line 59
                if (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"])) { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]; } else { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = null; }
                echo $_S_SEARCH_LOCAL_HIDDEN_FIELDS_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 64
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 66
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_IS_BOT_ && $_U_MARK_TOPICS_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())))) {
                echo "<a href=\"";
                if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
                echo $_U_MARK_TOPICS_;
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 67
            echo "\t\t";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo "
\t\t";
            // line 68
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 69
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 69)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 70
                echo "\t\t";
            } else {
                // line 71
                echo "\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t";
            }
            // line 73
            echo "\t</div>

\t</div>
";
        }
        // line 77
        echo "
";
        // line 78
        if (isset($context["S_NO_READ_ACCESS"])) { $_S_NO_READ_ACCESS_ = $context["S_NO_READ_ACCESS"]; } else { $_S_NO_READ_ACCESS_ = null; }
        if ($_S_NO_READ_ACCESS_) {
            // line 79
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 86
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (( !$_S_USER_LOGGED_IN_ &&  !$_S_IS_BOT_)) {
                // line 87
                echo "
\t\t<form action=\"";
                // line 88
                if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
                echo $_S_LOGIN_ACTION_;
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 94
                if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
                echo $_U_LOGIN_LOGOUT_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
                if ($_S_REGISTER_ENABLED_) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                    echo $_U_REGISTER_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 98
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 99
                if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
                echo $_USERNAME_;
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 104
                if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
                if ($_S_AUTOLOGIN_ENABLED_) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 105
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 109
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 111
                if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
                echo $_S_LOGIN_REDIRECT_;
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 121
            echo "
";
        }
        // line 123
        echo "
";
        // line 124
        if (isset($context["viewforum_body_topic_row_before"])) { $_viewforum_body_topic_row_before_ = $context["viewforum_body_topic_row_before"]; } else { $_viewforum_body_topic_row_before_ = null; }
        // line 125
        echo "
";
        // line 126
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 127
            echo "
\t";
            // line 128
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (( !$this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($_topicrow_, "S_FIRST_ROW", array()))) {
                // line 129
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 133
            echo "
\t";
            // line 134
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_FIRST_ROW", array()) ||  !$this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 135
                echo "\t\t<div class=\"forumbg";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (($this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array()) || $this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt";
                // line 140
                if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
                if ($_S_DISPLAY_ACTIVE_) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($_S_DISPLAY_ACTIVE_) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array()) || $this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 141
                echo $this->env->getExtension('phpbb')->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 142
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 148
            echo "
\t\t";
            // line 149
            if (isset($context["viewforum_body_topicrow_row_before"])) { $_viewforum_body_topicrow_row_before_ = $context["viewforum_body_topicrow_row_before"]; } else { $_viewforum_body_topicrow_row_before_ = null; }
            // line 150
            echo "\t\t<li class=\"row";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 151
            if (isset($context["viewforum_body_topic_row_prepend"])) { $_viewforum_body_topic_row_prepend_ = $context["viewforum_body_topic_row_prepend"]; } else { $_viewforum_body_topic_row_prepend_ = null; }
            // line 152
            echo "\t\t\t<dl title=\"";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t<dt class=\"icon ";
            // line 153
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_IMG_STYLE", array());
            echo "\">";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_TOPIC_ICONS"])) { $_S_TOPIC_ICONS_ = $context["S_TOPIC_ICONS"]; } else { $_S_TOPIC_ICONS_ = null; }
            if (($this->getAttribute($_topicrow_, "TOPIC_ICON_IMG", array()) && $_S_TOPIC_ICONS_)) {
                echo "<img src=\"";
                if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                echo $_T_ICONS_PATH_;
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "TOPIC_ICON_IMG", array());
                echo "\" alt=\"\" title=\"\" />";
            }
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
            // line 155
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_NEWEST_POST", array());
                echo "\" class=\"icon-link\"></a>";
            }
            // line 156
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 157
            if (isset($context["topiclist_row_prepend"])) { $_topiclist_row_prepend_ = $context["topiclist_row_prepend"]; } else { $_topiclist_row_prepend_ = null; }
            // line 158
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_NEWEST_POST", array());
                echo "\">";
                if (isset($context["NEWEST_POST_IMG"])) { $_NEWEST_POST_IMG_ = $context["NEWEST_POST_IMG"]; } else { $_NEWEST_POST_IMG_ = null; }
                echo $_NEWEST_POST_IMG_;
                echo "</a> ";
            }
            echo "<a href=\"";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t\t\t";
            // line 159
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($_topicrow_, "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE", array());
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "UNAPPROVED_IMG", array());
                echo "</a> ";
            }
            // line 160
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE", array());
                echo "\">";
                if (isset($context["DELETED_IMG"])) { $_DELETED_IMG_ = $context["DELETED_IMG"]; } else { $_DELETED_IMG_ = null; }
                echo $_DELETED_IMG_;
                echo "</a> ";
            }
            // line 161
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_REPORT", array());
                echo "\">";
                if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                echo $_REPORTED_IMG_;
                echo "</a>";
            }
            echo "<br />

\t\t\t\t\t\t";
            // line 163
            if (isset($context["topiclist_row_topic_title_after"])) { $_topiclist_row_topic_title_after_ = $context["topiclist_row_topic_title_after"]; } else { $_topiclist_row_topic_title_after_ = null; }
            // line 164
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 165
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 166
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 167
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 168
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (isset($context["FORUM_ID"])) { $_FORUM_ID_ = $context["FORUM_ID"]; } else { $_FORUM_ID_ = null; }
                if (($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array()) && ($_FORUM_ID_ != $this->getAttribute($_topicrow_, "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_VIEW_FORUM", array());
                    echo "\">";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 169
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 170
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "REPLIES", array())) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "REPLIES", array());
                    echo "</strong></span>";
                }
                // line 171
                echo "\t\t\t\t\t\t";
            }
            // line 172
            echo "
\t\t\t\t\t\t";
            // line 173
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_topicrow_, "pagination", array()))) {
                // line 174
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 176
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_topicrow_, "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                    if ($this->getAttribute($_pagination_, "S_IS_PREV", array())) {
                        // line 178
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS", array())) {
                        // line 179
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT", array())) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                        echo "\">";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 183
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 187
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 189
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_HAS_POLL", array())) {
                if (isset($context["POLL_IMG"])) { $_POLL_IMG_ = $context["POLL_IMG"]; } else { $_POLL_IMG_ = null; }
                echo $_POLL_IMG_;
                echo " ";
            }
            // line 190
            echo "\t\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG", array())) {
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG", array());
                echo " ";
            }
            // line 191
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 192
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["FORUM_ID"])) { $_FORUM_ID_ = $context["FORUM_ID"]; } else { $_FORUM_ID_ = null; }
            if (($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array()) && ($_FORUM_ID_ != $this->getAttribute($_topicrow_, "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_VIEW_FORUM", array());
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "FORUM_NAME", array());
                echo "</a>";
            }
            // line 193
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 195
            if (isset($context["topiclist_row_append"])) { $_topiclist_row_append_ = $context["topiclist_row_append"]; } else { $_topiclist_row_append_ = null; }
            // line 196
            echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"posts\">
\t\t\t\t\t";
            // line 199
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo ": <strong>";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "REPLIES", array());
            echo "</strong><br />
\t\t\t\t\t";
            // line 200
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo ": <strong>";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "VIEWS", array());
            echo "</strong>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"lastpost\"><span><i class=\"fa fa-fw fa-user\"></i> <dfn>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t";
            // line 203
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                echo $_LAST_POST_IMG_;
                echo "</a> ";
            }
            echo "<br /><i class=\"fa fa-fw fa-clock-o\"></i> ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 206
            if (isset($context["viewforum_body_topic_row_append"])) { $_viewforum_body_topic_row_append_ = $context["viewforum_body_topic_row_append"]; } else { $_viewforum_body_topic_row_append_ = null; }
            // line 207
            echo "\t\t</li>
\t\t";
            // line 208
            if (isset($context["viewforum_body_topic_row_after"])) { $_viewforum_body_topic_row_after_ = $context["viewforum_body_topic_row_after"]; } else { $_viewforum_body_topic_row_after_ = null; }
            // line 209
            echo "
\t";
            // line 210
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_LAST_ROW", array())) {
                // line 211
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 215
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 217
            echo "\t";
            if (isset($context["S_IS_POSTABLE"])) { $_S_IS_POSTABLE_ = $context["S_IS_POSTABLE"]; } else { $_S_IS_POSTABLE_ = null; }
            if ($_S_IS_POSTABLE_) {
                // line 218
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 220
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
";
        // line 226
        if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
        if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
        if (($_S_SELECT_SORT_DAYS_ &&  !$_S_DISPLAY_ACTIVE_)) {
            // line 227
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_FORUM_ACTION"])) { $_S_FORUM_ACTION_ = $context["S_FORUM_ACTION"]; } else { $_S_FORUM_ACTION_ = null; }
            echo $_S_FORUM_ACTION_;
            echo "\">
\t\t<fieldset class=\"display-options\">
\t";
            // line 229
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 230
                echo "\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                echo "</label>
\t\t\t<label>";
                // line 231
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                echo $_S_SELECT_SORT_KEY_;
                echo "</label>
\t\t\t<label>";
                // line 232
                if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                echo $_S_SELECT_SORT_DIR_;
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t";
            }
            // line 235
            echo "\t\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 239
        echo "
";
        // line 240
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())) &&  !$_S_DISPLAY_ACTIVE_)) {
            // line 241
            echo "\t<div class=\"action-bar bottom\">
\t\t";
            // line 242
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
            if (( !$_S_IS_BOT_ && $_S_DISPLAY_POST_INFO_)) {
                // line 243
                echo "\t\t\t<div class=\"buttons\">
\t\t\t\t";
                // line 244
                if (isset($context["viewforum_buttons_bottom_before"])) { $_viewforum_buttons_bottom_before_ = $context["viewforum_buttons_bottom_before"]; } else { $_viewforum_buttons_bottom_before_ = null; }
                // line 245
                echo "
\t\t\t\t<a href=\"";
                // line 246
                if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
                echo $_U_POST_NEW_TOPIC_;
                echo "\" class=\"button icon-button ";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t";
                // line 247
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                }
                // line 248
                echo "\t\t\t\t</a>

\t\t\t\t";
                // line 250
                if (isset($context["viewforum_buttons_bottom_after"])) { $_viewforum_buttons_bottom_after_ = $context["viewforum_buttons_bottom_after"]; } else { $_viewforum_buttons_bottom_after_ = null; }
                // line 251
                echo "\t\t\t</div>
\t\t";
            }
            // line 253
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 255
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_IS_BOT_ && $_U_MARK_TOPICS_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())))) {
                echo "<a href=\"";
                if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
                echo $_U_MARK_TOPICS_;
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 256
            echo "\t\t\t";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo "
\t\t\t";
            // line 257
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 258
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 258)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 259
                echo "\t\t\t";
            } else {
                // line 260
                echo "\t\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 262
            echo "\t\t</div>
\t</div>
";
        }
        // line 265
        echo "
";
        // line 266
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 266)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 267
        echo "
";
        // line 268
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 269
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 270
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
            // line 271
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "</p>
\t</div>
";
        }
        // line 274
        echo "
";
        // line 275
        if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
        if ($_S_DISPLAY_POST_INFO_) {
            // line 276
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 277
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 278
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                if (isset($context["rules"])) { $_rules_ = $context["rules"]; } else { $_rules_ = null; }
                echo $this->getAttribute($_rules_, "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 281
        echo "
";
        // line 282
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 282)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 282,  1134 => 281,  1118 => 278,  1114 => 277,  1111 => 276,  1108 => 275,  1105 => 274,  1098 => 271,  1084 => 270,  1081 => 269,  1078 => 268,  1075 => 267,  1063 => 266,  1060 => 265,  1055 => 262,  1048 => 260,  1045 => 259,  1032 => 258,  1029 => 257,  1023 => 256,  1011 => 255,  1007 => 253,  1003 => 251,  1001 => 250,  997 => 248,  990 => 247,  971 => 246,  968 => 245,  966 => 244,  963 => 243,  959 => 242,  956 => 241,  952 => 240,  949 => 239,  943 => 235,  938 => 233,  933 => 232,  926 => 231,  917 => 230,  914 => 229,  907 => 227,  903 => 226,  900 => 225,  889 => 220,  885 => 218,  881 => 217,  875 => 215,  869 => 211,  866 => 210,  863 => 209,  861 => 208,  858 => 207,  856 => 206,  836 => 203,  827 => 202,  819 => 200,  812 => 199,  807 => 196,  805 => 195,  801 => 193,  787 => 192,  776 => 191,  768 => 190,  761 => 189,  757 => 187,  752 => 184,  746 => 183,  734 => 181,  728 => 179,  719 => 178,  715 => 177,  710 => 176,  706 => 174,  703 => 173,  700 => 172,  697 => 171,  686 => 170,  683 => 169,  667 => 168,  650 => 167,  647 => 166,  644 => 165,  641 => 164,  639 => 163,  624 => 161,  612 => 160,  601 => 159,  580 => 158,  578 => 157,  575 => 156,  566 => 155,  549 => 153,  543 => 152,  541 => 151,  515 => 150,  513 => 149,  510 => 148,  501 => 142,  497 => 141,  480 => 140,  468 => 135,  465 => 134,  462 => 133,  456 => 129,  453 => 128,  450 => 127,  444 => 126,  441 => 125,  439 => 124,  436 => 123,  432 => 121,  418 => 111,  413 => 109,  405 => 105,  398 => 104,  392 => 102,  385 => 99,  380 => 98,  360 => 94,  350 => 88,  347 => 87,  343 => 86,  336 => 82,  331 => 79,  328 => 78,  325 => 77,  319 => 73,  312 => 71,  309 => 70,  296 => 69,  293 => 68,  287 => 67,  275 => 66,  271 => 64,  262 => 59,  253 => 58,  247 => 57,  243 => 56,  237 => 54,  234 => 53,  231 => 52,  228 => 51,  224 => 49,  222 => 48,  218 => 46,  211 => 45,  192 => 44,  189 => 43,  187 => 42,  184 => 41,  180 => 40,  176 => 38,  170 => 37,  167 => 36,  153 => 34,  144 => 31,  141 => 30,  137 => 29,  134 => 28,  131 => 27,  125 => 23,  119 => 21,  114 => 20,  105 => 18,  102 => 17,  92 => 14,  89 => 13,  86 => 12,  82 => 10,  65 => 9,  57 => 8,  53 => 6,  48 => 5,  46 => 4,  33 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- EVENT viewforum_forum_title_before -->*/
/* <h2 class="forum-title"><!-- EVENT viewforum_forum_name_prepend --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- EVENT viewforum_forum_name_append --></h2>*/
/* <!-- EVENT viewforum_forum_title_after -->*/
/* <!-- IF FORUM_DESC or MODERATORS or U_MCP -->*/
/* <div>*/
/* 	<!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body -->*/
/* 	<!-- IF FORUM_DESC --><div style="display: none !important;">{FORUM_DESC}<br /></div><!-- ENDIF -->*/
/* 	<!-- IF MODERATORS --><p><strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong> {MODERATORS}</p><!-- ENDIF -->*/
/* </div>*/
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
/* <!-- IF S_HAS_SUBFORUM -->*/
/* <!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* 	<div class="action-bar compact">*/
/* 		<a href="{U_MARK_FORUMS}" class="mark-read rightside" data-ajax="mark_forums_read">{L_MARK_SUBFORUMS_READ}</a>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* 	<!-- INCLUDE forumlist_body.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO or .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* 	<div class="action-bar top">*/
/* */
/* 	<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 		<div class="buttons">*/
/* 			<!-- EVENT viewforum_buttons_top_before -->*/
/* */
/* 			<a href="{U_POST_NEW_TOPIC}" class="button icon-button <!-- IF S_IS_LOCKED -->locked-icon<!-- ELSE -->post-icon<!-- ENDIF -->" title="<!-- IF S_IS_LOCKED -->{L_FORUM_LOCKED}<!-- ELSE -->{L_POST_TOPIC}<!-- ENDIF -->">*/
/* 				<!-- IF S_IS_LOCKED -->{L_BUTTON_FORUM_LOCKED}<!-- ELSE -->{L_BUTTON_NEW_TOPIC}<!-- ENDIF -->*/
/* 			</a>*/
/* */
/* 			<!-- EVENT viewforum_buttons_top_after -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="search-box" role="search">*/
/* 			<form method="get" id="forum-search" action="{S_SEARCHBOX_ACTION}">*/
/* 			<fieldset>*/
/* 				<input class="inputbox search tiny" type="search" name="keywords" id="search_keywords" size="20" placeholder="{L_SEARCH_FORUM}" />*/
/* 				<button class="button icon-button search-icon" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 				<a href="{U_SEARCH}" class="button icon-button search-adv-icon" title="{L_SEARCH_ADV}">{L_SEARCH_ADV}</a>*/
/* 				{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div class="pagination">*/
/* 		<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" class="mark" accesskey="m" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a> &bull; <!-- ENDIF -->*/
/* 		{TOTAL_TOPICS}*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			&bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NO_READ_ACCESS -->*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_READ_ACCESS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* */
/* 		<form action="{S_LOGIN_ACTION}" method="post">*/
/* */
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* */
/* 			<div class="content">*/
/* 				<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* */
/* 				<fieldset class="fields1">*/
/* 				<dl>*/
/* 					<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 					<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt><label for="password">{L_PASSWORD}{L_COLON}</label></dt>*/
/* 					<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox autowidth" autocomplete="off" /></dd>*/
/* 					<!-- IF S_AUTOLOGIN_ENABLED --><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> {L_LOG_ME_IN}</label></dd><!-- ENDIF -->*/
/* 					<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> {L_HIDE_ME}</label></dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd><input type="submit" name="login" tabindex="5" value="{L_LOGIN}" class="button1" /></dd>*/
/* 				</dl>*/
/* 				{S_LOGIN_REDIRECT}*/
/* 				</fieldset>*/
/* 			</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		</form>*/
/* */
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewforum_body_topic_row_before -->*/
/* */
/* <!-- BEGIN topicrow -->*/
/* */
/* 	<!-- IF not topicrow.S_TOPIC_TYPE_SWITCH and not topicrow.S_FIRST_ROW -->*/
/* 		</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF topicrow.S_FIRST_ROW or not topicrow.S_TOPIC_TYPE_SWITCH -->*/
/* 		<div class="forumbg<!-- IF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) --> announcement<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* 		<ul class="topiclist">*/
/* 			<li class="header">*/
/* 				<dl class="icon">*/
/* 					<dt<!-- IF S_DISPLAY_ACTIVE --> id="active_topics"<!-- ENDIF -->><div class="list-inner"><!-- IF S_DISPLAY_ACTIVE -->{L_ACTIVE_TOPICS}<!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) -->{L_ANNOUNCEMENTS}<!-- ELSE -->{L_TOPICS}<!-- ENDIF --></div></dt>*/
/* 					<dd class="posts">{L_STATISTICS}</dd>*/
/* 					<dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<ul class="topiclist topics">*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT viewforum_body_topicrow_row_before -->*/
/* 		<li class="row<!-- IF topicrow.S_ROW_COUNT is even --> bg1<!-- ELSE --> bg2<!-- ENDIF --><!-- IF topicrow.S_POST_GLOBAL --> global-announce<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> announce<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> sticky<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<!-- EVENT viewforum_body_topic_row_prepend -->*/
/* 			<dl title="{topicrow.TOPIC_FOLDER_IMG_ALT}">*/
/* 				<dt class="icon {topicrow.TOPIC_IMG_STYLE}"><!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS --><img src="{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}" alt="" title="" /><!-- ENDIF --></dt>*/
/* 				<dd>*/
/* 					<!-- IF topicrow.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{topicrow.U_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<!-- EVENT topiclist_row_prepend -->*/
/* 						<!-- IF topicrow.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{topicrow.U_NEWEST_POST}">{NEWEST_POST_IMG}</a> <!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a>*/
/* 						<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED --><a href="{topicrow.U_MCP_QUEUE}">{topicrow.UNAPPROVED_IMG}</a> <!-- ENDIF -->*/
/* 						<!-- IF topicrow.S_TOPIC_DELETED --><a href="{topicrow.U_MCP_QUEUE}">{DELETED_IMG}</a> <!-- ENDIF -->*/
/* 						<!-- IF topicrow.S_TOPIC_REPORTED --><a href="{topicrow.U_MCP_REPORT}">{REPORTED_IMG}</a><!-- ENDIF --><br />*/
/* */
/* 						<!-- EVENT topiclist_row_topic_title_after -->*/
/* 						*/
/* 						<!-- IF not S_IS_BOT -->*/
/* 						<div class="responsive-show" style="display: none;">*/
/* 							{L_LAST_POST} {L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL} &laquo; <a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{topicrow.LAST_POST_TIME}</a>*/
/* 							<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --><br />{L_POSTED} {L_IN} <a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a><!-- ENDIF -->*/
/* 						</div>*/
/* 						<!-- IF topicrow.REPLIES --><span class="responsive-show left-box" style="display: none;">{L_REPLIES}{L_COLON} <strong>{topicrow.REPLIES}</strong></span><!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF .topicrow.pagination -->*/
/* 						<div class="pagination">*/
/* 							<ul>*/
/* 							<!-- BEGIN pagination -->*/
/* 								<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 								<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END pagination -->*/
/* 							</ul>*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<div class="responsive-hide">*/
/* 							<!-- IF topicrow.S_HAS_POLL -->{POLL_IMG} <!-- ENDIF -->*/
/* 							<!-- IF topicrow.ATTACH_ICON_IMG -->{topicrow.ATTACH_ICON_IMG} <!-- ENDIF -->*/
/* 							{L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL} &raquo; {topicrow.FIRST_POST_TIME}*/
/* 							<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --> &raquo; {L_IN} <a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a><!-- ENDIF -->*/
/* 						</div>*/
/* */
/* 						<!-- EVENT topiclist_row_append -->*/
/* 					</div>*/
/* 				</dd>*/
/* 				<dd class="posts">*/
/* 					{L_REPLIES}: <strong>{topicrow.REPLIES}</strong><br />*/
/* 					{L_VIEWS}: <strong>{topicrow.VIEWS}</strong>*/
/* 				</dd>*/
/* 				<dd class="lastpost"><span><i class="fa fa-fw fa-user"></i> <dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 					<!-- IF not S_IS_BOT --><a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{LAST_POST_IMG}</a> <!-- ENDIF --><br /><i class="fa fa-fw fa-clock-o"></i> {topicrow.LAST_POST_TIME}</span>*/
/* 				</dd>*/
/* 			</dl>*/
/* 			<!-- EVENT viewforum_body_topic_row_append -->*/
/* 		</li>*/
/* 		<!-- EVENT viewforum_body_topic_row_after -->*/
/* */
/* 	<!-- IF topicrow.S_LAST_ROW -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<!-- IF S_IS_POSTABLE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_TOPICS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- END topicrow -->*/
/* */
/* <!-- IF S_SELECT_SORT_DAYS and not S_DISPLAY_ACTIVE -->*/
/* 	<form method="post" action="{S_FORUM_ACTION}">*/
/* 		<fieldset class="display-options">*/
/* 	<!-- IF not S_IS_BOT -->*/
/* 			<label>{L_DISPLAY_TOPICS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 			<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 			<label>{S_SELECT_SORT_DIR}</label>*/
/* 			<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 	<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 	</form>*/
/* 	<hr />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .topicrow and not S_DISPLAY_ACTIVE -->*/
/* 	<div class="action-bar bottom">*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 			<div class="buttons">*/
/* 				<!-- EVENT viewforum_buttons_bottom_before -->*/
/* */
/* 				<a href="{U_POST_NEW_TOPIC}" class="button icon-button <!-- IF S_IS_LOCKED -->locked-icon<!-- ELSE -->post-icon<!-- ENDIF -->" title="<!-- IF S_IS_LOCKED -->{L_FORUM_LOCKED}<!-- ELSE -->{L_POST_TOPIC}<!-- ENDIF -->">*/
/* 					<!-- IF S_IS_LOCKED -->{L_BUTTON_FORUM_LOCKED}<!-- ELSE -->{L_BUTTON_NEW_TOPIC}<!-- ENDIF -->*/
/* 				</a>*/
/* */
/* 				<!-- EVENT viewforum_buttons_bottom_after -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<div class="pagination">*/
/* 			<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a> &bull; <!-- ENDIF -->*/
/* 			{TOTAL_TOPICS}*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="stat-block online-list">*/
/* 		<h3><!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></h3>*/
/* 		<p>{LOGGED_IN_USER_LIST}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO -->*/
/* 	<div class="stat-block permissions">*/
/* 		<h3>{L_FORUM_PERMISSIONS}</h3>*/
/* 		<p><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
