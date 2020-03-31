<?php

/* index_body.html */
class __TwigTemplate_70b8829a1f5720a38429742b0f0f4828955a10b3fe21b78dd0bcc07761093fef extends Twig_Template
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
<p class=\"";
        // line 3
        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
        echo $_S_CONTENT_FLOW_END_;
        echo " responsive-center time";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            echo " rightside";
        }
        echo "\">";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            if (isset($context["LAST_VISIT_DATE"])) { $_LAST_VISIT_DATE_ = $context["LAST_VISIT_DATE"]; } else { $_LAST_VISIT_DATE_ = null; }
            echo $_LAST_VISIT_DATE_;
        } else {
            if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
            echo $_CURRENT_TIME_;
        }
        echo "</p>
";
        // line 4
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            echo "<p class=\"responsive-center time\">";
            if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
            echo $_CURRENT_TIME_;
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        if (isset($context["index_body_markforums_before"])) { $_index_body_markforums_before_ = $context["index_body_markforums_before"]; } else { $_index_body_markforums_before_ = null; }
        // line 7
        if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
        if ($_U_MARK_FORUMS_) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            echo $_U_MARK_FORUMS_;
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        if (isset($context["index_body_markforums_after"])) { $_index_body_markforums_after_ = $context["index_body_markforums_after"]; } else { $_index_body_markforums_after_ = null; }
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        if (isset($context["index_body_forumlist_body_after"])) { $_index_body_forumlist_body_after_ = $context["index_body_forumlist_body_after"]; } else { $_index_body_forumlist_body_after_ = null; }
        // line 17
        echo "
";
        // line 18
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (( !$_S_USER_LOGGED_IN_ &&  !$_S_IS_BOT_)) {
            // line 19
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
            echo $_S_LOGIN_ACTION_;
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 20
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
            // line 22
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 24
            if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
            if ($_U_SEND_PASSWORD_) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
                echo $_U_SEND_PASSWORD_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
            if ($_S_AUTOLOGIN_ENABLED_) {
                // line 28
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 30
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 31
            if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
            echo $_S_LOGIN_REDIRECT_;
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 35
        echo "
";
        // line 36
        if (isset($context["index_body_stat_blocks_before"])) { $_index_body_stat_blocks_before_ = $context["index_body_stat_blocks_before"]; } else { $_index_body_stat_blocks_before_ = null; }
        // line 37
        echo "
";
        // line 38
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 39
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 40
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
            // line 41
            echo "\t\t<p>
\t\t\t";
            // line 42
            if (isset($context["index_body_block_online_prepend"])) { $_index_body_block_online_prepend_ = $context["index_body_block_online_prepend"]; } else { $_index_body_block_online_prepend_ = null; }
            // line 43
            echo "\t\t\t";
            if (isset($context["TOTAL_USERS_ONLINE"])) { $_TOTAL_USERS_ONLINE_ = $context["TOTAL_USERS_ONLINE"]; } else { $_TOTAL_USERS_ONLINE_ = null; }
            echo $_TOTAL_USERS_ONLINE_;
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            if (isset($context["RECORD_USERS"])) { $_RECORD_USERS_ = $context["RECORD_USERS"]; } else { $_RECORD_USERS_ = null; }
            echo $_RECORD_USERS_;
            echo "<br /> 
\t\t\t";
            // line 44
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                // line 45
                echo "\t\t\t\t<br />";
                if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
                echo $_LOGGED_IN_USER_LIST_;
                echo "
\t\t\t\t";
                // line 46
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
                // line 47
                echo "\t\t\t";
            }
            // line 48
            echo "\t\t\t";
            if (isset($context["index_body_block_online_append"])) { $_index_body_block_online_append_ = $context["index_body_block_online_append"]; } else { $_index_body_block_online_append_ = null; }
            // line 49
            echo "\t\t</p>
\t</div>
";
        }
        // line 52
        echo "
";
        // line 53
        if (isset($context["index_body_birthday_block_before"])) { $_index_body_birthday_block_before_ = $context["index_body_birthday_block_before"]; } else { $_index_body_birthday_block_before_ = null; }
        // line 54
        echo "
";
        // line 55
        if (isset($context["S_DISPLAY_BIRTHDAY_LIST"])) { $_S_DISPLAY_BIRTHDAY_LIST_ = $context["S_DISPLAY_BIRTHDAY_LIST"]; } else { $_S_DISPLAY_BIRTHDAY_LIST_ = null; }
        if ($_S_DISPLAY_BIRTHDAY_LIST_) {
            // line 56
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 59
            if (isset($context["index_body_block_birthday_prepend"])) { $_index_body_block_birthday_prepend_ = $context["index_body_block_birthday_prepend"]; } else { $_index_body_block_birthday_prepend_ = null; }
            // line 60
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
            // line 61
            echo "\t\t\t";
            if (isset($context["index_body_block_birthday_append"])) { $_index_body_block_birthday_append_ = $context["index_body_block_birthday_append"]; } else { $_index_body_block_birthday_append_ = null; }
            // line 62
            echo "\t\t</p>
\t</div>
";
        }
        // line 65
        echo "
";
        // line 66
        if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
        if ($_NEWEST_USER_) {
            // line 67
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 70
            if (isset($context["index_body_block_stats_prepend"])) { $_index_body_block_stats_prepend_ = $context["index_body_block_stats_prepend"]; } else { $_index_body_block_stats_prepend_ = null; }
            // line 71
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
            // line 72
            if (isset($context["index_body_block_stats_append"])) { $_index_body_block_stats_append_ = $context["index_body_block_stats_append"]; } else { $_index_body_block_stats_append_ = null; }
            // line 73
            echo "\t\t</p>
\t</div>
";
        }
        // line 76
        echo "
";
        // line 77
        if (isset($context["index_body_stat_blocks_after"])) { $_index_body_stat_blocks_after_ = $context["index_body_stat_blocks_after"]; } else { $_index_body_stat_blocks_after_ = null; }
        // line 78
        echo "
";
        // line 79
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 79)->display($context);
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
        return array (  365 => 79,  362 => 78,  360 => 77,  357 => 76,  352 => 73,  350 => 72,  335 => 71,  333 => 70,  328 => 68,  325 => 67,  322 => 66,  319 => 65,  314 => 62,  311 => 61,  279 => 60,  277 => 59,  272 => 57,  269 => 56,  266 => 55,  263 => 54,  261 => 53,  258 => 52,  253 => 49,  250 => 48,  247 => 47,  236 => 46,  230 => 45,  227 => 44,  216 => 43,  214 => 42,  211 => 41,  197 => 40,  194 => 39,  191 => 38,  188 => 37,  186 => 36,  183 => 35,  175 => 31,  170 => 30,  164 => 28,  160 => 27,  151 => 25,  148 => 24,  141 => 23,  134 => 22,  116 => 20,  110 => 19,  106 => 18,  103 => 17,  101 => 16,  98 => 15,  86 => 14,  83 => 13,  81 => 12,  72 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  53 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <p class="{S_CONTENT_FLOW_END} responsive-center time<!-- IF S_USER_LOGGED_IN --> rightside<!-- ENDIF -->"><!-- IF S_USER_LOGGED_IN -->{LAST_VISIT_DATE}<!-- ELSE -->{CURRENT_TIME}<!-- ENDIF --></p>*/
/* <!-- IF S_USER_LOGGED_IN --><p class="responsive-center time">{CURRENT_TIME}</p><!-- ENDIF -->*/
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
/* 			{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /> */
/* 			<!-- IF U_VIEWONLINE -->*/
/* 				<br />{LOGGED_IN_USER_LIST}*/
/* 				<!-- IF LEGEND --><br /><em>{L_LEGEND}{L_COLON} {LEGEND}</em><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_online_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_birthday_block_before -->*/
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
