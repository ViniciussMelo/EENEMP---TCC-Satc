<?php

/* forumlist_body.html */
class __TwigTemplate_827fbc0f243a83beb685d0caeee92e2404b37f70c00b33e5fd2510f888317472 extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT", array()) &&  !$this->getAttribute($_forumrow_, "S_FIRST_ROW", array())) || $this->getAttribute($_forumrow_, "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if (isset($context["forumlist_body_category_header_before"])) { $_forumlist_body_category_header_before_ = $context["forumlist_body_category_header_before"]; } else { $_forumlist_body_category_header_before_ = null; }
            // line 11
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT", array()) || $this->getAttribute($_forumrow_, "S_FIRST_ROW", array())) || $this->getAttribute($_forumrow_, "S_NO_CAT", array()))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                if (isset($context["forumlist_body_category_header_row_prepend"])) { $_forumlist_body_category_header_row_prepend_ = $context["forumlist_body_category_header_row_prepend"]; } else { $_forumlist_body_category_header_row_prepend_ = null; }
                // line 17
                echo "\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                    echo "\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 22
                if (isset($context["forumlist_body_category_header_row_append"])) { $_forumlist_body_category_header_row_append_ = $context["forumlist_body_category_header_row_append"]; } else { $_forumlist_body_category_header_row_append_ = null; }
                // line 23
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 27
            echo "\t";
            if (isset($context["forumlist_body_category_header_after"])) { $_forumlist_body_category_header_after_ = $context["forumlist_body_category_header_after"]; } else { $_forumlist_body_category_header_after_ = null; }
            // line 28
            echo "
\t";
            // line 29
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ( !$this->getAttribute($_forumrow_, "S_IS_CAT", array())) {
                // line 30
                echo "\t\t";
                if (isset($context["forumlist_body_forum_row_before"])) { $_forumlist_body_forum_row_before_ = $context["forumlist_body_forum_row_before"]; } else { $_forumlist_body_forum_row_before_ = null; }
                // line 31
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 32
                if (isset($context["forumlist_body_forum_row_prepend"])) { $_forumlist_body_forum_row_prepend_ = $context["forumlist_body_forum_row_prepend"]; } else { $_forumlist_body_forum_row_prepend_ = null; }
                // line 33
                echo "\t\t\t<dl title=\"";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t<dt class=\"icon ";
                // line 34
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_IMG_STYLE", array());
                echo "\"></dt>
\t\t\t\t<dd>
\t\t\t\t\t";
                // line 36
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if (($_S_ENABLE_FEEDS_ && $this->getAttribute($_forumrow_, "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                    echo "\" href=\"";
                    if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                    echo $_U_FEED_;
                    echo "?f=";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                    echo "\"><img src=\"";
                    if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
                    echo $_T_THEME_PATH_;
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                    echo "\" /></a> -->";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 41
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 42
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_DESC", array())) {
                    echo "<br />";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_DESC", array());
                }
                // line 43
                echo "\t\t\t\t\t\t";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "MODERATORS", array())) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "MODERATORS", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_forumrow_, "subforum", array())) && $this->getAttribute($_forumrow_, "S_LIST_SUBFORUMS", array()))) {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["forumlist_body_subforums_before"])) { $_forumlist_body_subforums_before_ = $context["forumlist_body_subforums_before"]; } else { $_forumlist_body_subforums_before_ = null; }
                    // line 48
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 49
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_forumrow_, "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "SUBFORUM_NAME", array());
                        echo "</a>";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ( !$this->getAttribute($_subforum_, "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 51
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["forumlist_body_subforums_after"])) { $_forumlist_body_subforums_after_ = $context["forumlist_body_subforums_after"]; } else { $_forumlist_body_subforums_after_ = null; }
                    // line 53
                    echo "\t\t\t\t\t\t";
                }
                // line 54
                echo "
\t\t\t\t\t\t";
                // line 55
                if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                if ( !$_S_IS_BOT_) {
                    // line 56
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 57
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "CLICKS", array())) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "CLICKS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute($_forumrow_, "S_IS_LINK", array()) && $this->getAttribute($_forumrow_, "TOPICS", array()))) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "TOPICS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t\t";
                // line 66
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "CLICKS", array())) {
                    // line 67
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "CLICKS", array());
                    echo "</strong></span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute($_forumrow_, "S_IS_LINK", array())) {
                    // line 69
                    echo "\t\t\t\t\t<dd class=\"topics\">
\t\t\t\t\t\t";
                    // line 70
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo ": <strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "TOPICS", array());
                    echo "</strong><br />
\t\t\t\t\t\t";
                    // line 71
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo ": <strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "POSTS", array());
                    echo "</strong>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 74
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS", array())) {
                        // line 75
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        if (isset($context["UNAPPROVED_IMG"])) { $_UNAPPROVED_IMG_ = $context["UNAPPROVED_IMG"]; } else { $_UNAPPROVED_IMG_ = null; }
                        echo $_UNAPPROVED_IMG_;
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS", array())) {
                        // line 77
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS", array());
                        echo "\">";
                        if (isset($context["UNAPPROVED_POST_IMG"])) { $_UNAPPROVED_POST_IMG_ = $context["UNAPPROVED_POST_IMG"]; } else { $_UNAPPROVED_POST_IMG_ = null; }
                        echo $_UNAPPROVED_POST_IMG_;
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 80
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        if ($this->getAttribute($_forumrow_, "S_DISPLAY_SUBJECT", array())) {
                            // line 81
                            echo "\t\t\t\t\t\t\t";
                            if (isset($context["forumlist_body_last_post_title_prepend"])) { $_forumlist_body_last_post_title_prepend_ = $context["forumlist_body_last_post_title_prepend"]; } else { $_forumlist_body_last_post_title_prepend_ = null; }
                            // line 82
                            echo "\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-comments\"></i> <a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST", array());
                            echo "\" title=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 84
                        echo "\t\t\t\t\t\t<i class=\"fa fa-fw fa-user\"></i> ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t";
                        // line 85
                        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                        if ( !$_S_IS_BOT_) {
                            echo "<a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST", array());
                            echo "\">";
                            if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                            echo $_LAST_POST_IMG_;
                            echo "</a> ";
                        }
                        echo "<br /><i class=\"fa fa-fw fa-clock-o\"></i> ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_TIME", array());
                    } else {
                        echo "<span class=\"inventea-no-items\">";
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "</span>";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t</dl>
\t\t\t";
                // line 89
                if (isset($context["forumlist_body_forum_row_append"])) { $_forumlist_body_forum_row_append_ = $context["forumlist_body_forum_row_append"]; } else { $_forumlist_body_forum_row_append_ = null; }
                // line 90
                echo "\t\t</li>
\t\t";
                // line 91
                if (isset($context["forumlist_body_forum_row_after"])) { $_forumlist_body_forum_row_after_ = $context["forumlist_body_forum_row_after"]; } else { $_forumlist_body_forum_row_after_ = null; }
                // line 92
                echo "\t";
            }
            // line 93
            echo "
\t";
            // line 94
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ($this->getAttribute($_forumrow_, "S_LAST_ROW", array())) {
                // line 95
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 99
                if (isset($context["forumlist_body_last_row_after"])) { $_forumlist_body_last_row_after_ = $context["forumlist_body_last_row_after"]; } else { $_forumlist_body_last_row_after_ = null; }
                // line 100
                echo "\t";
            }
            // line 101
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 105,  444 => 103,  438 => 101,  435 => 100,  433 => 99,  427 => 95,  424 => 94,  421 => 93,  418 => 92,  416 => 91,  413 => 90,  411 => 89,  408 => 88,  385 => 85,  377 => 84,  364 => 82,  361 => 81,  358 => 80,  350 => 79,  340 => 77,  330 => 75,  327 => 74,  318 => 71,  311 => 70,  308 => 69,  298 => 67,  295 => 66,  291 => 64,  287 => 62,  277 => 60,  267 => 58,  264 => 57,  261 => 56,  258 => 55,  255 => 54,  252 => 53,  249 => 52,  243 => 51,  217 => 50,  212 => 49,  205 => 48,  202 => 47,  198 => 46,  187 => 44,  183 => 43,  176 => 42,  167 => 41,  159 => 40,  156 => 39,  131 => 38,  128 => 37,  120 => 36,  114 => 34,  108 => 33,  106 => 32,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  85 => 23,  83 => 22,  78 => 20,  74 => 19,  59 => 18,  56 => 17,  54 => 16,  48 => 12,  44 => 11,  42 => 10,  39 => 9,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT forumlist_body_category_header_before -->*/
/* 	<!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW  or forumrow.S_NO_CAT  -->*/
/* 		<div class="forabg">*/
/* 			<div class="inner">*/
/* 			<ul class="topiclist">*/
/* 				<li class="header">*/
/* 					<!-- EVENT forumlist_body_category_header_row_prepend -->*/
/* 					<dl class="icon">*/
/* 						<dt><div class="list-inner"><!-- IF forumrow.S_IS_CAT --><a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE -->{L_FORUM}<!-- ENDIF --></div></dt>*/
/* 						<dd class="topics">{L_STATISTICS}</dd>*/
/* 						<dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/* 					</dl>*/
/* 					<!-- EVENT forumlist_body_category_header_row_append -->*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist forums">*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT forumlist_body_category_header_after -->*/
/* */
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 		<!-- EVENT forumlist_body_forum_row_before -->*/
/* 		<li class="row">*/
/* 			<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 			<dl title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 				<dt class="icon {forumrow.FORUM_IMG_STYLE}"></dt>*/
/* 				<dd>*/
/* 					<!-- IF forumrow.S_UNREAD_FORUM --><a href="{forumrow.U_VIEWFORUM}" class="icon-link"></a><!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED --><!-- <a class="feed-icon-forum" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}"><img src="{T_THEME_PATH}/images/feed.gif" alt="{L_FEED} - {forumrow.FORUM_NAME}" /></a> --><!-- ENDIF -->*/
/* */
/* 						<!-- IF forumrow.FORUM_IMAGE --><span class="forum-image">{forumrow.FORUM_IMAGE}</span><!-- ENDIF -->*/
/* 						<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a>*/
/* 						<!-- IF forumrow.FORUM_DESC --><br />{forumrow.FORUM_DESC}<!-- ENDIF -->*/
/* 						<!-- IF forumrow.MODERATORS -->*/
/* 							<br /><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF .forumrow.subforum and forumrow.S_LIST_SUBFORUMS -->*/
/* 							<!-- EVENT forumlist_body_subforums_before -->*/
/* 							<br /><strong>{forumrow.L_SUBFORUM_STR}{L_COLON}</strong>*/
/* 							<!-- BEGIN subforum -->*/
/* 								<a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 							<!-- END subforum -->*/
/* 							<!-- EVENT forumlist_body_subforums_after -->*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF not S_IS_BOT -->*/
/* 						<div class="responsive-show" style="display: none;">*/
/* 							<!-- IF forumrow.CLICKS -->*/
/* 								{L_REDIRECTS}{L_COLON} <strong>{forumrow.CLICKS}</strong>*/
/* 							<!-- ELSEIF not forumrow.S_IS_LINK and forumrow.TOPICS -->*/
/* 								{L_TOPICS}{L_COLON} <strong>{forumrow.TOPICS}</strong>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</dd>*/
/* 				<!-- IF forumrow.CLICKS -->*/
/* 					<dd class="redirect"><span>{L_REDIRECTS}{L_COLON} <strong>{forumrow.CLICKS}</strong></span></dd>*/
/* 				<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 					<dd class="topics">*/
/* 						{L_TOPICS}: <strong>{forumrow.TOPICS}</strong><br />*/
/* 						{L_POSTS}: <strong>{forumrow.POSTS}</strong>*/
/* 					</dd>*/
/* 					<dd class="lastpost"><span>*/
/* 						<!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_TOPICS}">{UNAPPROVED_IMG}</a>*/
/* 						<!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_POSTS}">{UNAPPROVED_POST_IMG}</a>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF forumrow.LAST_POST_TIME --><dfn>{L_LAST_POST}</dfn>*/
/* 						<!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/* 							<!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 							<i class="fa fa-fw fa-comments"></i> <a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="lastsubject">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a> <br />*/
/* 						<!-- ENDIF -->*/
/* 						<i class="fa fa-fw fa-user"></i> {L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}*/
/* 						<!-- IF not S_IS_BOT --><a href="{forumrow.U_LAST_POST}">{LAST_POST_IMG}</a> <!-- ENDIF --><br /><i class="fa fa-fw fa-clock-o"></i> {forumrow.LAST_POST_TIME}<!-- ELSE --><span class="inventea-no-items">{L_NO_POSTS}</span><!-- ENDIF --></span>*/
/* 					</dd>*/
/* 				<!-- ENDIF -->*/
/* 			</dl>*/
/* 			<!-- EVENT forumlist_body_forum_row_append -->*/
/* 		</li>*/
/* 		<!-- EVENT forumlist_body_forum_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF forumrow.S_LAST_ROW -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- EVENT forumlist_body_last_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_FORUMS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END forumrow -->*/
/* */
