<?php

/* memberlist_view.html */
class __TwigTemplate_f5ce015f1b2372d6b590b9da1329eb71a11b8165dab218f1753b110a5c3b8463 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</h2>

";
        // line 5
        if (isset($context["memberlist_view_content_prepend"])) { $_memberlist_view_content_prepend_ = $context["memberlist_view_content_prepend"]; } else { $_memberlist_view_content_prepend_ = null; }
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        if (isset($context["S_PROFILE_ACTION"])) { $_S_PROFILE_ACTION_ = $context["S_PROFILE_ACTION"]; } else { $_S_PROFILE_ACTION_ = null; }
        echo $_S_PROFILE_ACTION_;
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if (isset($context["S_ONLINE"])) { $_S_ONLINE_ = $context["S_ONLINE"]; } else { $_S_ONLINE_ = null; }
        if ($_S_ONLINE_) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if (isset($context["S_ONLINE"])) { $_S_ONLINE_ = $context["S_ONLINE"]; } else { $_S_ONLINE_ = null; }
        if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
        if (($_S_ONLINE_ &&  !$_AVATAR_IMG_)) {
            // line 12
            echo "\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ONLINE");
            echo "</div>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
        if ($_AVATAR_IMG_) {
            // line 16
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">
\t\t\t\t";
            // line 18
            if (isset($context["S_ONLINE"])) { $_S_ONLINE_ = $context["S_ONLINE"]; } else { $_S_ONLINE_ = null; }
            if ($_S_ONLINE_) {
                // line 19
                echo "\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t<div class=\"inventea-online\" style=\"margin-bottom: 6px;\"><i class=\"fa fa-power-off\"></i> ";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("ONLINE");
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "
\t\t\t\t";
            // line 24
            if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
            echo $_AVATAR_IMG_;
            echo "
\t\t\t</dt>
\t\t\t";
            // line 26
            if (isset($context["memberlist_view_rank_avatar_before"])) { $_memberlist_view_rank_avatar_before_ = $context["memberlist_view_rank_avatar_before"]; } else { $_memberlist_view_rank_avatar_before_ = null; }
            // line 27
            echo "\t\t\t";
            if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
            if ($_RANK_TITLE_) {
                echo "<dd style=\"text-align: center;\">";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                echo $_RANK_TITLE_;
                echo "</dd>";
            }
            // line 28
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                echo "<dd style=\"text-align: center;\">";
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
                echo "</dd>";
            }
            // line 29
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_avatar_after"])) { $_memberlist_view_rank_avatar_after_ = $context["memberlist_view_rank_avatar_after"]; } else { $_memberlist_view_rank_avatar_after_ = null; }
            // line 30
            echo "\t\t</dl>
\t";
        }
        // line 32
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 36
        if (isset($context["USER_COLOR"])) { $_USER_COLOR_ = $context["USER_COLOR"]; } else { $_USER_COLOR_ = null; }
        if ($_USER_COLOR_) {
            echo "<span style=\"color: ";
            if (isset($context["USER_COLOR"])) { $_USER_COLOR_ = $context["USER_COLOR"]; } else { $_USER_COLOR_ = null; }
            echo $_USER_COLOR_;
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "</span>
\t\t\t";
        // line 37
        if (isset($context["U_EDIT_SELF"])) { $_U_EDIT_SELF_ = $context["U_EDIT_SELF"]; } else { $_U_EDIT_SELF_ = null; }
        if ($_U_EDIT_SELF_) {
            echo " [ <a href=\"";
            if (isset($context["U_EDIT_SELF"])) { $_U_EDIT_SELF_ = $context["U_EDIT_SELF"]; } else { $_U_EDIT_SELF_ = null; }
            echo $_U_EDIT_SELF_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 38
        echo "\t\t\t";
        if (isset($context["U_USER_ADMIN"])) { $_U_USER_ADMIN_ = $context["U_USER_ADMIN"]; } else { $_U_USER_ADMIN_ = null; }
        if ($_U_USER_ADMIN_) {
            echo " [ <a href=\"";
            if (isset($context["U_USER_ADMIN"])) { $_U_USER_ADMIN_ = $context["U_USER_ADMIN"]; } else { $_U_USER_ADMIN_ = null; }
            echo $_U_USER_ADMIN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 39
        echo "\t\t\t";
        if (isset($context["U_USER_BAN"])) { $_U_USER_BAN_ = $context["U_USER_BAN"]; } else { $_U_USER_BAN_ = null; }
        if ($_U_USER_BAN_) {
            echo " [ <a href=\"";
            if (isset($context["U_USER_BAN"])) { $_U_USER_BAN_ = $context["U_USER_BAN"]; } else { $_U_USER_BAN_ = null; }
            echo $_U_USER_BAN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 40
        echo "\t\t\t";
        if (isset($context["U_SWITCH_PERMISSIONS"])) { $_U_SWITCH_PERMISSIONS_ = $context["U_SWITCH_PERMISSIONS"]; } else { $_U_SWITCH_PERMISSIONS_ = null; }
        if ($_U_SWITCH_PERMISSIONS_) {
            echo " [ <a href=\"";
            if (isset($context["U_SWITCH_PERMISSIONS"])) { $_U_SWITCH_PERMISSIONS_ = $context["U_SWITCH_PERMISSIONS"]; } else { $_U_SWITCH_PERMISSIONS_ = null; }
            echo $_U_SWITCH_PERMISSIONS_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 41
        echo "\t\t</dd>
\t\t";
        // line 42
        if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
        if ( !$_AVATAR_IMG_) {
            // line 43
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_no_avatar_before"])) { $_memberlist_view_rank_no_avatar_before_ = $context["memberlist_view_rank_no_avatar_before"]; } else { $_memberlist_view_rank_no_avatar_before_ = null; }
            // line 44
            echo "\t\t\t";
            if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
            if ($_RANK_TITLE_) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                echo $_RANK_TITLE_;
                echo "</dd>";
            }
            // line 45
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                echo "<dt>";
                if (isset($context["RANK_TITLE"])) { $_RANK_TITLE_ = $context["RANK_TITLE"]; } else { $_RANK_TITLE_ = null; }
                if ($_RANK_TITLE_) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd>";
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
                echo "</dd>";
            }
            // line 46
            echo "\t\t\t";
            if (isset($context["memberlist_view_rank_no_avatar_after"])) { $_memberlist_view_rank_no_avatar_after_ = $context["memberlist_view_rank_no_avatar_after"]; } else { $_memberlist_view_rank_no_avatar_after_ = null; }
            // line 47
            echo "\t\t";
        }
        // line 48
        echo "\t\t";
        if (isset($context["S_USER_INACTIVE"])) { $_S_USER_INACTIVE_ = $context["S_USER_INACTIVE"]; } else { $_S_USER_INACTIVE_ = null; }
        if ($_S_USER_INACTIVE_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["USER_INACTIVE_REASON"])) { $_USER_INACTIVE_REASON_ = $context["USER_INACTIVE_REASON"]; } else { $_USER_INACTIVE_REASON_ = null; }
            echo $_USER_INACTIVE_REASON_;
            echo "</dd>";
        }
        // line 49
        echo "\t\t";
        if (isset($context["AGE"])) { $_AGE_ = $context["AGE"]; } else { $_AGE_ = null; }
        if (($_AGE_ !== "")) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["AGE"])) { $_AGE_ = $context["AGE"]; } else { $_AGE_ = null; }
            echo $_AGE_;
            echo "</dd>";
        }
        // line 50
        echo "\t\t";
        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
        if ($_S_GROUP_OPTIONS_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
            echo $_S_GROUP_OPTIONS_;
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 51
        echo "\t\t";
        if (isset($context["memberlist_view_non_contact_custom_fields_before"])) { $_memberlist_view_non_contact_custom_fields_before_ = $context["memberlist_view_non_contact_custom_fields_before"]; } else { $_memberlist_view_non_contact_custom_fields_before_ = null; }
        // line 52
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 53
            echo "\t\t\t";
            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
            if ( !$this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                // line 54
                echo "\t\t\t\t<dt>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 56
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t";
        if (isset($context["memberlist_view_non_contact_custom_fields_after"])) { $_memberlist_view_non_contact_custom_fields_after_ = $context["memberlist_view_non_contact_custom_fields_after"]; } else { $_memberlist_view_non_contact_custom_fields_after_ = null; }
        // line 58
        echo "\t\t";
        if (isset($context["memberlist_view_zebra_before"])) { $_memberlist_view_zebra_before_ = $context["memberlist_view_zebra_before"]; } else { $_memberlist_view_zebra_before_ = null; }
        // line 59
        echo "\t\t";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_ZEBRA"])) { $_S_ZEBRA_ = $context["S_ZEBRA"]; } else { $_S_ZEBRA_ = null; }
        if (($_S_USER_LOGGED_IN_ && $_S_ZEBRA_)) {
            // line 60
            echo "\t\t\t";
            if (isset($context["U_REMOVE_FRIEND"])) { $_U_REMOVE_FRIEND_ = $context["U_REMOVE_FRIEND"]; } else { $_U_REMOVE_FRIEND_ = null; }
            if (isset($context["U_REMOVE_FOE"])) { $_U_REMOVE_FOE_ = $context["U_REMOVE_FOE"]; } else { $_U_REMOVE_FOE_ = null; }
            if ($_U_REMOVE_FRIEND_) {
                // line 61
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                if (isset($context["U_REMOVE_FRIEND"])) { $_U_REMOVE_FRIEND_ = $context["U_REMOVE_FRIEND"]; } else { $_U_REMOVE_FRIEND_ = null; }
                echo $_U_REMOVE_FRIEND_;
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif ($_U_REMOVE_FOE_) {
                // line 63
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                if (isset($context["U_REMOVE_FOE"])) { $_U_REMOVE_FOE_ = $context["U_REMOVE_FOE"]; } else { $_U_REMOVE_FOE_ = null; }
                echo $_U_REMOVE_FOE_;
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t";
                if (isset($context["U_ADD_FRIEND"])) { $_U_ADD_FRIEND_ = $context["U_ADD_FRIEND"]; } else { $_U_ADD_FRIEND_ = null; }
                if ($_U_ADD_FRIEND_) {
                    // line 66
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    if (isset($context["U_ADD_FRIEND"])) { $_U_ADD_FRIEND_ = $context["U_ADD_FRIEND"]; } else { $_U_ADD_FRIEND_ = null; }
                    echo $_U_ADD_FRIEND_;
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t";
                if (isset($context["U_ADD_FOE"])) { $_U_ADD_FOE_ = $context["U_ADD_FOE"]; } else { $_U_ADD_FOE_ = null; }
                if ($_U_ADD_FOE_) {
                    // line 69
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    if (isset($context["U_ADD_FOE"])) { $_U_ADD_FOE_ = $context["U_ADD_FOE"]; } else { $_U_ADD_FOE_ = null; }
                    echo $_U_ADD_FOE_;
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 71
                echo "\t\t\t";
            }
            // line 72
            echo "\t\t";
        }
        // line 73
        echo "\t\t";
        if (isset($context["memberlist_view_zebra_after"])) { $_memberlist_view_zebra_after_ = $context["memberlist_view_zebra_after"]; } else { $_memberlist_view_zebra_after_ = null; }
        // line 74
        echo "\t</dl>

\t</div>
</div>

";
        // line 79
        if (isset($context["memberlist_view_contact_before"])) { $_memberlist_view_contact_before_ = $context["memberlist_view_contact_before"]; } else { $_memberlist_view_contact_before_ = null; }
        // line 80
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 87
        if (isset($context["U_EMAIL"])) { $_U_EMAIL_ = $context["U_EMAIL"]; } else { $_U_EMAIL_ = null; }
        if ($_U_EMAIL_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_EMAIL"])) { $_U_EMAIL_ = $context["U_EMAIL"]; } else { $_U_EMAIL_ = null; }
            echo $_U_EMAIL_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 88
        echo "\t\t";
        if (isset($context["U_PM"])) { $_U_PM_ = $context["U_PM"]; } else { $_U_PM_ = null; }
        if ($_U_PM_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_PM"])) { $_U_PM_ = $context["U_PM"]; } else { $_U_PM_ = null; }
            echo $_U_PM_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 89
        echo "\t\t";
        if (isset($context["U_JABBER"])) { $_U_JABBER_ = $context["U_JABBER"]; } else { $_U_JABBER_ = null; }
        if (isset($context["S_JABBER_ENABLED"])) { $_S_JABBER_ENABLED_ = $context["S_JABBER_ENABLED"]; } else { $_S_JABBER_ENABLED_ = null; }
        if (isset($context["USER_JABBER"])) { $_USER_JABBER_ = $context["USER_JABBER"]; } else { $_USER_JABBER_ = null; }
        if (($_U_JABBER_ && $_S_JABBER_ENABLED_)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            if (isset($context["U_JABBER"])) { $_U_JABBER_ = $context["U_JABBER"]; } else { $_U_JABBER_ = null; }
            echo $_U_JABBER_;
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ($_USER_JABBER_) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["USER_JABBER"])) { $_USER_JABBER_ = $context["USER_JABBER"]; } else { $_USER_JABBER_ = null; }
            echo $_USER_JABBER_;
            echo "</dd>";
        }
        // line 90
        echo "\t\t";
        if (isset($context["memberlist_view_contact_custom_fields_before"])) { $_memberlist_view_contact_custom_fields_before_ = $context["memberlist_view_contact_custom_fields_before"]; } else { $_memberlist_view_contact_custom_fields_before_ = null; }
        // line 91
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 92
            echo "\t\t\t";
            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
            if ($this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                // line 93
                echo "\t\t\t\t<dt>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 94
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ($this->getAttribute($_custom_fields_, "PROFILE_FIELD_CONTACT", array())) {
                    // line 95
                    echo "\t\t\t\t\t<dd><a href=\"";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t<dd>";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            }
            // line 100
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t";
        if (isset($context["memberlist_view_contact_custom_fields_after"])) { $_memberlist_view_contact_custom_fields_after_ = $context["memberlist_view_contact_custom_fields_after"]; } else { $_memberlist_view_contact_custom_fields_after_ = null; }
        // line 102
        echo "\t\t";
        if (isset($context["S_PROFILE_FIELD1"])) { $_S_PROFILE_FIELD1_ = $context["S_PROFILE_FIELD1"]; } else { $_S_PROFILE_FIELD1_ = null; }
        if ($_S_PROFILE_FIELD1_) {
            // line 103
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 104
            if (isset($context["PROFILE_FIELD1_NAME"])) { $_PROFILE_FIELD1_NAME_ = $context["PROFILE_FIELD1_NAME"]; } else { $_PROFILE_FIELD1_NAME_ = null; }
            echo $_PROFILE_FIELD1_NAME_;
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["PROFILE_FIELD1_VALUE"])) { $_PROFILE_FIELD1_VALUE_ = $context["PROFILE_FIELD1_VALUE"]; } else { $_PROFILE_FIELD1_VALUE_ = null; }
            echo $_PROFILE_FIELD1_VALUE_;
            echo "</dd>
\t\t";
        }
        // line 106
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 112
        if (isset($context["memberlist_view_user_statistics_before"])) { $_memberlist_view_user_statistics_before_ = $context["memberlist_view_user_statistics_before"]; } else { $_memberlist_view_user_statistics_before_ = null; }
        // line 113
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        if (isset($context["JOINED"])) { $_JOINED_ = $context["JOINED"]; } else { $_JOINED_ = null; }
        echo $_JOINED_;
        echo "</dd>
\t\t\t<dt>";
        // line 114
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        if (isset($context["LAST_ACTIVE"])) { $_LAST_ACTIVE_ = $context["LAST_ACTIVE"]; } else { $_LAST_ACTIVE_ = null; }
        echo $_LAST_ACTIVE_;
        echo "</dd>
\t\t\t";
        // line 115
        if (isset($context["S_WARNINGS"])) { $_S_WARNINGS_ = $context["S_WARNINGS"]; } else { $_S_WARNINGS_ = null; }
        if ($_S_WARNINGS_) {
            // line 116
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 117
            if (isset($context["WARNINGS"])) { $_WARNINGS_ = $context["WARNINGS"]; } else { $_WARNINGS_ = null; }
            echo $_WARNINGS_;
            echo "</strong>";
            if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
            if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
            if (($_U_NOTES_ || $_U_WARN_)) {
                echo " [ ";
                if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                if ($_U_NOTES_) {
                    echo "<a href=\"";
                    if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                    echo $_U_NOTES_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
                if ($_U_WARN_) {
                    if (isset($context["U_NOTES"])) { $_U_NOTES_ = $context["U_NOTES"]; } else { $_U_NOTES_ = null; }
                    if ($_U_NOTES_) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    if (isset($context["U_WARN"])) { $_U_WARN_ = $context["U_WARN"]; } else { $_U_WARN_ = null; }
                    echo $_U_WARN_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 119
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 120
        if (isset($context["POSTS"])) { $_POSTS_ = $context["POSTS"]; } else { $_POSTS_ = null; }
        echo $_POSTS_;
        echo " ";
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            echo "| <strong><a href=\"";
            if (isset($context["U_SEARCH_USER"])) { $_U_SEARCH_USER_ = $context["U_SEARCH_USER"]; } else { $_U_SEARCH_USER_ = null; }
            echo $_U_SEARCH_USER_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 121
        echo "\t\t\t\t\t";
        if (isset($context["POSTS_PCT"])) { $_POSTS_PCT_ = $context["POSTS_PCT"]; } else { $_POSTS_PCT_ = null; }
        if ($_POSTS_PCT_) {
            echo "<br />(";
            if (isset($context["POSTS_PCT"])) { $_POSTS_PCT_ = $context["POSTS_PCT"]; } else { $_POSTS_PCT_ = null; }
            echo $_POSTS_PCT_;
            echo " / ";
            if (isset($context["POSTS_DAY"])) { $_POSTS_DAY_ = $context["POSTS_DAY"]; } else { $_POSTS_DAY_ = null; }
            echo $_POSTS_DAY_;
            echo ")";
        }
        // line 122
        echo "\t\t\t\t\t";
        if (isset($context["POSTS_IN_QUEUE"])) { $_POSTS_IN_QUEUE_ = $context["POSTS_IN_QUEUE"]; } else { $_POSTS_IN_QUEUE_ = null; }
        if (isset($context["U_MCP_QUEUE"])) { $_U_MCP_QUEUE_ = $context["U_MCP_QUEUE"]; } else { $_U_MCP_QUEUE_ = null; }
        if (($_POSTS_IN_QUEUE_ && $_U_MCP_QUEUE_)) {
            echo "<br />(<a href=\"";
            if (isset($context["U_MCP_QUEUE"])) { $_U_MCP_QUEUE_ = $context["U_MCP_QUEUE"]; } else { $_U_MCP_QUEUE_ = null; }
            echo $_U_MCP_QUEUE_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ($_POSTS_IN_QUEUE_) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 123
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 124
        if (isset($context["S_SHOW_ACTIVITY"])) { $_S_SHOW_ACTIVITY_ = $context["S_SHOW_ACTIVITY"]; } else { $_S_SHOW_ACTIVITY_ = null; }
        if (isset($context["POSTS"])) { $_POSTS_ = $context["POSTS"]; } else { $_POSTS_ = null; }
        if (($_S_SHOW_ACTIVITY_ && $_POSTS_)) {
            // line 125
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["ACTIVE_FORUM"])) { $_ACTIVE_FORUM_ = $context["ACTIVE_FORUM"]; } else { $_ACTIVE_FORUM_ = null; }
            if (($_ACTIVE_FORUM_ != "")) {
                echo "<strong><a href=\"";
                if (isset($context["U_ACTIVE_FORUM"])) { $_U_ACTIVE_FORUM_ = $context["U_ACTIVE_FORUM"]; } else { $_U_ACTIVE_FORUM_ = null; }
                echo $_U_ACTIVE_FORUM_;
                echo "\">";
                if (isset($context["ACTIVE_FORUM"])) { $_ACTIVE_FORUM_ = $context["ACTIVE_FORUM"]; } else { $_ACTIVE_FORUM_ = null; }
                echo $_ACTIVE_FORUM_;
                echo "</a></strong><br />(";
                if (isset($context["ACTIVE_FORUM_POSTS"])) { $_ACTIVE_FORUM_POSTS_ = $context["ACTIVE_FORUM_POSTS"]; } else { $_ACTIVE_FORUM_POSTS_ = null; }
                echo $_ACTIVE_FORUM_POSTS_;
                echo " / ";
                if (isset($context["ACTIVE_FORUM_PCT"])) { $_ACTIVE_FORUM_PCT_ = $context["ACTIVE_FORUM_PCT"]; } else { $_ACTIVE_FORUM_PCT_ = null; }
                echo $_ACTIVE_FORUM_PCT_;
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (isset($context["ACTIVE_TOPIC"])) { $_ACTIVE_TOPIC_ = $context["ACTIVE_TOPIC"]; } else { $_ACTIVE_TOPIC_ = null; }
            if (($_ACTIVE_TOPIC_ != "")) {
                echo "<strong><a href=\"";
                if (isset($context["U_ACTIVE_TOPIC"])) { $_U_ACTIVE_TOPIC_ = $context["U_ACTIVE_TOPIC"]; } else { $_U_ACTIVE_TOPIC_ = null; }
                echo $_U_ACTIVE_TOPIC_;
                echo "\">";
                if (isset($context["ACTIVE_TOPIC"])) { $_ACTIVE_TOPIC_ = $context["ACTIVE_TOPIC"]; } else { $_ACTIVE_TOPIC_ = null; }
                echo $_ACTIVE_TOPIC_;
                echo "</a></strong><br />(";
                if (isset($context["ACTIVE_TOPIC_POSTS"])) { $_ACTIVE_TOPIC_POSTS_ = $context["ACTIVE_TOPIC_POSTS"]; } else { $_ACTIVE_TOPIC_POSTS_ = null; }
                echo $_ACTIVE_TOPIC_POSTS_;
                echo " / ";
                if (isset($context["ACTIVE_TOPIC_PCT"])) { $_ACTIVE_TOPIC_PCT_ = $context["ACTIVE_TOPIC_PCT"]; } else { $_ACTIVE_TOPIC_PCT_ = null; }
                echo $_ACTIVE_TOPIC_PCT_;
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 128
        echo "\t\t\t";
        if (isset($context["memberlist_view_user_statistics_after"])) { $_memberlist_view_user_statistics_after_ = $context["memberlist_view_user_statistics_after"]; } else { $_memberlist_view_user_statistics_after_ = null; }
        // line 129
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 134
        if (isset($context["memberlist_view_contact_after"])) { $_memberlist_view_contact_after_ = $context["memberlist_view_contact_after"]; } else { $_memberlist_view_contact_after_ = null; }
        // line 135
        echo "
";
        // line 136
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        if ($_SIGNATURE_) {
            // line 137
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 142
            if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
            echo $_SIGNATURE_;
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 147
        echo "
</form>

";
        // line 150
        if (isset($context["memberlist_view_content_append"])) { $_memberlist_view_content_append_ = $context["memberlist_view_content_append"]; } else { $_memberlist_view_content_append_ = null; }
        // line 151
        echo "
";
        // line 152
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 152)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 153
        echo "
";
        // line 154
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 154)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 154,  754 => 153,  742 => 152,  739 => 151,  737 => 150,  732 => 147,  723 => 142,  718 => 140,  713 => 137,  710 => 136,  707 => 135,  705 => 134,  698 => 129,  695 => 128,  670 => 126,  645 => 125,  641 => 124,  638 => 123,  622 => 122,  610 => 121,  597 => 120,  591 => 119,  555 => 117,  549 => 116,  546 => 115,  538 => 114,  529 => 113,  527 => 112,  522 => 110,  516 => 106,  506 => 104,  503 => 103,  499 => 102,  496 => 101,  490 => 100,  487 => 99,  480 => 97,  470 => 95,  467 => 94,  460 => 93,  456 => 92,  450 => 91,  447 => 90,  423 => 89,  409 => 88,  396 => 87,  390 => 84,  384 => 80,  382 => 79,  375 => 74,  372 => 73,  369 => 72,  366 => 71,  357 => 69,  353 => 68,  344 => 66,  340 => 65,  331 => 63,  322 => 61,  317 => 60,  312 => 59,  309 => 58,  306 => 57,  300 => 56,  289 => 54,  285 => 53,  279 => 52,  276 => 51,  262 => 50,  250 => 49,  238 => 48,  235 => 47,  232 => 46,  215 => 45,  203 => 44,  200 => 43,  197 => 42,  194 => 41,  183 => 40,  172 => 39,  161 => 38,  151 => 37,  137 => 36,  131 => 34,  127 => 32,  123 => 30,  120 => 29,  111 => 28,  102 => 27,  100 => 26,  94 => 24,  91 => 23,  85 => 20,  82 => 19,  79 => 18,  75 => 16,  72 => 15,  69 => 14,  63 => 12,  59 => 11,  50 => 8,  45 => 7,  42 => 6,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="memberlist-title">{PAGE_TITLE}</h2>*/
/* */
/* <!-- EVENT memberlist_view_content_prepend -->*/
/* */
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/* <div class="panel bg1<!-- IF S_ONLINE --> online<!-- ENDIF -->">*/
/* 	<div class="inner">*/
/* */
/* 	<!-- IF S_ONLINE and not AVATAR_IMG -->*/
/* 		<div class="inventea-online"><i class="fa fa-power-off"></i> {L_ONLINE}</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF AVATAR_IMG -->*/
/* 		<dl class="left-box">*/
/* 			<dt class="profile-avatar">*/
/* 				<!-- IF S_ONLINE -->*/
/* 					<div style="text-align: center;">*/
/* 						<div class="inventea-online" style="margin-bottom: 6px;"><i class="fa fa-power-off"></i> {L_ONLINE}</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				{AVATAR_IMG}*/
/* 			</dt>*/
/* 			<!-- EVENT memberlist_view_rank_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dd style="text-align: center;">{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dd style="text-align: center;">{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_avatar_after -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<dl class="left-box details profile-details">*/
/* 		<dt>{L_USERNAME}{L_COLON}</dt>*/
/* 		<dd>*/
/* 			<!-- IF USER_COLOR --><span style="color: {USER_COLOR}; font-weight: bold;"><!-- ELSE --><span><!-- ENDIF -->{USERNAME}</span>*/
/* 			<!-- IF U_EDIT_SELF --> [ <a href="{U_EDIT_SELF}">{L_EDIT_PROFILE}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_ADMIN --> [ <a href="{U_USER_ADMIN}">{L_USER_ADMIN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_BAN --> [ <a href="{U_USER_BAN}">{L_USER_BAN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_SWITCH_PERMISSIONS --> [ <a href="{U_SWITCH_PERMISSIONS}">{L_USE_PERMISSIONS}</a> ]<!-- ENDIF -->*/
/* 		</dd>*/
/* 		<!-- IF not AVATAR_IMG -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dt>{L_RANK}{L_COLON}</dt> <dd>{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dt><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></dt> <dd>{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_after -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_USER_INACTIVE --><dt>{L_USER_IS_INACTIVE}{L_COLON}</dt> <dd>{USER_INACTIVE_REASON}</dd><!-- ENDIF -->*/
/* 		<!-- IF AGE !== '' --><dt>{L_AGE}{L_COLON}</dt> <dd>{AGE}</dd><!-- ENDIF -->*/
/* 		<!-- IF S_GROUP_OPTIONS --><dt>{L_USERGROUPS}{L_COLON}</dt> <dd><select name="g">{S_GROUP_OPTIONS}</select> <input type="submit" name="submit" value="{L_GO}" class="button2" /></dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt> <dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 		<!-- EVENT memberlist_view_zebra_before -->*/
/* 		<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/* 			<!-- IF U_REMOVE_FRIEND -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FRIEND}" data-ajax="zebra"><strong>{L_REMOVE_FRIEND}</strong></a></dd>*/
/* 			<!-- ELSEIF U_REMOVE_FOE -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FOE}" data-ajax="zebra"><strong>{L_REMOVE_FOE}</strong></a></dd>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF U_ADD_FRIEND -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FRIEND}" data-ajax="zebra"><strong>{L_ADD_FRIEND}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_ADD_FOE -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FOE}" data-ajax="zebra"><strong>{L_ADD_FOE}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_zebra_after -->*/
/* 	</dl>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- EVENT memberlist_view_contact_before -->*/
/* <div class="panel bg2">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="column1">*/
/* 		<h3>{L_CONTACT_USER}</h3>*/
/* */
/* 		<dl class="details">*/
/* 		<!-- IF U_EMAIL --><dt>{L_EMAIL_ADDRESS}{L_COLON}</dt> <dd><a href="{U_EMAIL}">{L_SEND_EMAIL_USER}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_PM --><dt>{L_PM}{L_COLON}</dt> <dd><a href="{U_PM}">{L_SEND_PRIVATE_MESSAGE}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_JABBER and S_JABBER_ENABLED --><dt>{L_JABBER}{L_COLON}</dt> <dd><a href="{U_JABBER}" onclick="popup(this.href, 750, 320); return false;">{L_SEND_JABBER_MESSAGE}</a></dd><!-- ELSEIF USER_JABBER --><dt>{L_JABBER}{L_COLON}</dt> <dd>{USER_JABBER}</dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt>*/
/* 				<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 					<dd><a href="{custom_fields.PROFILE_FIELD_CONTACT}">{custom_fields.PROFILE_FIELD_DESC}</a></dd>*/
/* 				<!-- ELSE -->*/
/* 					<dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_after -->*/
/* 		<!-- IF S_PROFILE_FIELD1 -->*/
/* 			<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dt>{PROFILE_FIELD1_NAME}{L_COLON}</dt> <dd>{PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	<div class="column2">*/
/* 		<h3>{L_USER_FORUM}</h3>*/
/* 		<dl class="details">*/
/* 			<!-- EVENT memberlist_view_user_statistics_before -->*/
/* 			<dt>{L_JOINED}{L_COLON}</dt> <dd>{JOINED}</dd>*/
/* 			<dt>{L_LAST_ACTIVE}{L_COLON}</dt> <dd>{LAST_ACTIVE}</dd>*/
/* 			<!-- IF S_WARNINGS -->*/
/* 			<dt>{L_WARNINGS}{L_COLON} </dt>*/
/* 			<dd><strong>{WARNINGS}</strong><!-- IF U_NOTES or U_WARN --> [ <!-- IF U_NOTES --><a href="{U_NOTES}">{L_VIEW_NOTES}</a><!-- ENDIF --> <!-- IF U_WARN --><!-- IF U_NOTES --> | <!-- ENDIF --><a href="{U_WARN}">{L_WARN_USER}</a><!-- ENDIF --> ]<!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dt>{L_TOTAL_POSTS}{L_COLON}</dt>*/
/* 				<dd>{POSTS} <!-- IF S_DISPLAY_SEARCH -->| <strong><a href="{U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a></strong><!-- ENDIF -->*/
/* 					<!-- IF POSTS_PCT --><br />({POSTS_PCT} / {POSTS_DAY})<!-- ENDIF -->*/
/* 					<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE --><br />(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)<!-- ELSEIF POSTS_IN_QUEUE --><br />({L_POSTS_IN_QUEUE})<!-- ENDIF -->*/
/* 				</dd>*/
/* 			<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 				<dt>{L_ACTIVE_IN_FORUM}{L_COLON}</dt> <dd><!-- IF ACTIVE_FORUM != '' --><strong><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a></strong><br />({ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 				<dt>{L_ACTIVE_IN_TOPIC}{L_COLON}</dt> <dd><!-- IF ACTIVE_TOPIC != '' --><strong><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a></strong><br />({ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_user_statistics_after -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- EVENT memberlist_view_contact_after -->*/
/* */
/* <!-- IF SIGNATURE -->*/
/* <div class="panel bg1">*/
/* 	<div class="inner">*/
/* */
/* 		<h3>{L_SIGNATURE}</h3>*/
/* */
/* 		<div class="postbody"><div class="signature standalone">{SIGNATURE}</div></div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- EVENT memberlist_view_content_append -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
