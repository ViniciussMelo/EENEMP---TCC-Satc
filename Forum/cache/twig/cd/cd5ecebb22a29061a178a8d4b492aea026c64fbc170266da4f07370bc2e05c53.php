<?php

/* index_body.html */
class __TwigTemplate_5d69b8aa6c5e005a9249e350704c4c106a4e29b23ccfd306acf54949954162d4 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["index_body_markforums_before"])) { $_index_body_markforums_before_ = $context["index_body_markforums_before"]; } else { $_index_body_markforums_before_ = null; }
        // line 4
        if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
        if ($_U_MARK_FORUMS_) {
            // line 5
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 6
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            echo $_U_MARK_FORUMS_;
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 9
        if (isset($context["index_body_markforums_after"])) { $_index_body_markforums_after_ = $context["index_body_markforums_after"]; } else { $_index_body_markforums_after_ = null; }
        // line 10
        echo "
";
        // line 11
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "
";
        // line 13
        if (isset($context["index_body_forumlist_body_after"])) { $_index_body_forumlist_body_after_ = $context["index_body_forumlist_body_after"]; } else { $_index_body_forumlist_body_after_ = null; }
        // line 14
        echo "
";
        // line 15
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (( !$_S_USER_LOGGED_IN_ &&  !$_S_IS_BOT_)) {
            // line 16
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
            echo $_S_LOGIN_ACTION_;
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 17
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
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 21
            if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
            if ($_U_SEND_PASSWORD_) {
                // line 22
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
                echo $_U_SEND_PASSWORD_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 24
            echo "\t\t\t";
            if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
            if ($_S_AUTOLOGIN_ENABLED_) {
                // line 25
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 27
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 28
            if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
            echo $_S_LOGIN_REDIRECT_;
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 32
        echo "
";
        // line 33
        if (isset($context["index_body_stat_blocks_before"])) { $_index_body_stat_blocks_before_ = $context["index_body_stat_blocks_before"]; } else { $_index_body_stat_blocks_before_ = null; }
        // line 34
        echo "
";
        // line 35
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 36
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 37
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                echo "<h3><a href=\"";
                if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
                echo $_U_VIEWONLINE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 38
            echo "\t\t<p>
\t\t\t";
            // line 39
            if (isset($context["index_body_block_online_prepend"])) { $_index_body_block_online_prepend_ = $context["index_body_block_online_prepend"]; } else { $_index_body_block_online_prepend_ = null; }
            // line 40
            echo "\t\t\t";
            if (isset($context["TOTAL_USERS_ONLINE"])) { $_TOTAL_USERS_ONLINE_ = $context["TOTAL_USERS_ONLINE"]; } else { $_TOTAL_USERS_ONLINE_ = null; }
            echo $_TOTAL_USERS_ONLINE_;
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            if (isset($context["RECORD_USERS"])) { $_RECORD_USERS_ = $context["RECORD_USERS"]; } else { $_RECORD_USERS_ = null; }
            echo $_RECORD_USERS_;
            echo "<br /> <br />";
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "
\t\t\t";
            // line 41
            if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
            if ($_LEGEND_) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
                echo $_LEGEND_;
                echo "</em>";
            }
            // line 42
            echo "\t\t\t";
            if (isset($context["index_body_block_online_append"])) { $_index_body_block_online_append_ = $context["index_body_block_online_append"]; } else { $_index_body_block_online_append_ = null; }
            // line 43
            echo "\t\t</p>
\t</div>
";
        }
        // line 46
        echo "
";
        // line 47
        if (isset($context["S_DISPLAY_BIRTHDAY_LIST"])) { $_S_DISPLAY_BIRTHDAY_LIST_ = $context["S_DISPLAY_BIRTHDAY_LIST"]; } else { $_S_DISPLAY_BIRTHDAY_LIST_ = null; }
        if ($_S_DISPLAY_BIRTHDAY_LIST_) {
            // line 48
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 51
            if (isset($context["index_body_block_birthday_prepend"])) { $_index_body_block_birthday_prepend_ = $context["index_body_block_birthday_prepend"]; } else { $_index_body_block_birthday_prepend_ = null; }
            // line 52
            echo "\t\t\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    echo $this->getAttribute($_birthdays_, "USERNAME", array());
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if (($this->getAttribute($_birthdays_, "AGE", array()) !== "")) {
                        echo " (";
                        if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                        echo $this->getAttribute($_birthdays_, "AGE", array());
                        echo ")";
                    }
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if ( !$this->getAttribute($_birthdays_, "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 53
            echo "\t\t\t";
            if (isset($context["index_body_block_birthday_append"])) { $_index_body_block_birthday_append_ = $context["index_body_block_birthday_append"]; } else { $_index_body_block_birthday_append_ = null; }
            // line 54
            echo "\t\t</p>
\t</div>
";
        }
        // line 57
        echo "
";
        // line 58
        if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
        if ($_NEWEST_USER_) {
            // line 59
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 62
            if (isset($context["index_body_block_stats_prepend"])) { $_index_body_block_stats_prepend_ = $context["index_body_block_stats_prepend"]; } else { $_index_body_block_stats_prepend_ = null; }
            // line 63
            echo "\t\t\t";
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo " &bull; ";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo " &bull; ";
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo " &bull; ";
            if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
            echo $_NEWEST_USER_;
            echo "
\t\t\t";
            // line 64
            if (isset($context["index_body_block_stats_append"])) { $_index_body_block_stats_append_ = $context["index_body_block_stats_append"]; } else { $_index_body_block_stats_append_ = null; }
            // line 65
            echo "\t\t</p>
\t</div>
";
        }
        // line 68
        echo "
";
        // line 69
        if (isset($context["index_body_stat_blocks_after"])) { $_index_body_stat_blocks_after_ = $context["index_body_stat_blocks_after"]; } else { $_index_body_stat_blocks_after_ = null; }
        // line 70
        echo "
";
        // line 71
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 71)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 71,  318 => 70,  316 => 69,  313 => 68,  308 => 65,  306 => 64,  291 => 63,  289 => 62,  284 => 60,  281 => 59,  278 => 58,  275 => 57,  270 => 54,  267 => 53,  235 => 52,  233 => 51,  228 => 49,  225 => 48,  222 => 47,  219 => 46,  214 => 43,  211 => 42,  200 => 41,  186 => 40,  184 => 39,  181 => 38,  167 => 37,  164 => 36,  161 => 35,  158 => 34,  156 => 33,  153 => 32,  145 => 28,  140 => 27,  134 => 25,  130 => 24,  121 => 22,  118 => 21,  111 => 20,  104 => 19,  86 => 17,  80 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  56 => 11,  53 => 10,  51 => 9,  42 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT index_body_markforums_before -->*/
/* <!-- IF U_MARK_FORUMS -->*/
/* 	<div class="action-bar compact">*/
/* 		<a href="{U_MARK_FORUMS}" class="mark-read rightside" accesskey="m" data-ajax="mark_forums_read">{L_MARK_FORUMS_READ}</a>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT index_body_markforums_after -->*/
/* */
/* <!-- INCLUDE forumlist_body.html -->*/
/* */
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 	<form method="post" action="{S_LOGIN_ACTION}" class="headerspace">*/
/* 	<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* 		<fieldset class="quick-login">*/
/* 			<label for="username"><span>{L_USERNAME}{L_COLON}</span> <input type="text" tabindex="1" name="username" id="username" size="10" class="inputbox" title="{L_USERNAME}" /></label>*/
/* 			<label for="password"><span>{L_PASSWORD}{L_COLON}</span> <input type="password" tabindex="2" name="password" id="password" size="10" class="inputbox" title="{L_PASSWORD}" autocomplete="off" /></label>*/
/* 			<!-- IF U_SEND_PASSWORD -->*/
/* 				<a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 				<span class="responsive-hide">|</span> <label for="autologin">{L_LOG_ME_IN} <input type="checkbox" tabindex="4" name="autologin" id="autologin" /></label>*/
/* 			<!-- ENDIF -->*/
/* 			<input type="submit" tabindex="5" name="login" value="{L_LOGIN}" class="button2" />*/
/* 			{S_LOGIN_REDIRECT}*/
/* 		</fieldset>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_before -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="stat-block online-list">*/
/* 		<!-- IF U_VIEWONLINE --><h3><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></h3><!-- ELSE --><h3>{L_WHO_IS_ONLINE}</h3><!-- ENDIF -->*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_online_prepend -->*/
/* 			{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /> <br />{LOGGED_IN_USER_LIST}*/
/* 			<!-- IF LEGEND --><br /><em>{L_LEGEND}{L_COLON} {LEGEND}</em><!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_online_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_BIRTHDAY_LIST -->*/
/* 	<div class="stat-block birthday-list">*/
/* 		<h3>{L_BIRTHDAYS}</h3>*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_birthday_prepend -->*/
/* 			<!-- IF .birthdays -->{L_CONGRATULATIONS}{L_COLON} <strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' --> ({birthdays.AGE})<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->, <!-- ENDIF --><!-- END birthdays --></strong><!-- ELSE -->{L_NO_BIRTHDAYS}<!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_birthday_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF NEWEST_USER -->*/
/* 	<div class="stat-block statistics">*/
/* 		<h3>{L_STATISTICS}</h3>*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_stats_prepend -->*/
/* 			{TOTAL_POSTS} &bull; {TOTAL_TOPICS} &bull; {TOTAL_USERS} &bull; {NEWEST_USER}*/
/* 			<!-- EVENT index_body_block_stats_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
