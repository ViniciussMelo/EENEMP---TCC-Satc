<?php

/* memberlist_team.html */
class __TwigTemplate_a5064b86ce4b02796320232d3ee407930f0dde04da5bafb0894eced3e8a3fbe0 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_team.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</h2>

<form method=\"post\" action=\"";
        // line 5
        if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
        echo $_S_MODE_ACTION_;
        echo "\">

";
        // line 7
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "group", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 8
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\" id=\"team\">
\t<thead>
\t<tr>
\t\t<th class=\"name\" data-dfn=\"";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\"><span class=\"rank-img\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "&nbsp;</span>";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ($this->getAttribute($_group_, "U_GROUP", array())) {
                echo "<a href=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo $this->getAttribute($_group_, "U_GROUP", array());
                echo "\">";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo $this->getAttribute($_group_, "GROUP_NAME", array());
                echo "</a>";
            } else {
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo $this->getAttribute($_group_, "GROUP_NAME", array());
            }
            echo "</th>
\t\t<th class=\"info\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("PRIMARY_GROUP");
            echo "</th>
\t\t";
            // line 16
            if (isset($context["S_DISPLAY_MODERATOR_FORUMS"])) { $_S_DISPLAY_MODERATOR_FORUMS_ = $context["S_DISPLAY_MODERATOR_FORUMS"]; } else { $_S_DISPLAY_MODERATOR_FORUMS_ = null; }
            if ($_S_DISPLAY_MODERATOR_FORUMS_) {
                echo "<th class=\"info\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                echo "</th>";
            }
            // line 17
            echo "\t</tr>
\t</thead>
\t<tbody>
";
            // line 20
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "user", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 21
                echo "\t<tr class=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (($this->getAttribute($_user_, "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "S_INACTIVE", array())) {
                    echo " inactive";
                }
                echo "\">
\t\t<td>";
                // line 22
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "RANK_IMG", array())) {
                    echo "<span class=\"rank-img\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $this->getAttribute($_user_, "RANK_IMG", array());
                    echo "</span>";
                } else {
                    echo "<span class=\"rank-img\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $this->getAttribute($_user_, "RANK_TITLE", array());
                    echo "</span>";
                }
                if (isset($context["memberlist_team_username_prepend"])) { $_memberlist_team_username_prepend_ = $context["memberlist_team_username_prepend"]; } else { $_memberlist_team_username_prepend_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $this->getAttribute($_user_, "USERNAME_FULL", array());
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "S_INACTIVE", array())) {
                    echo " (";
                    echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                    echo ")";
                }
                if (isset($context["memberlist_team_username_append"])) { $_memberlist_team_username_append_ = $context["memberlist_team_username_append"]; } else { $_memberlist_team_username_append_ = null; }
                echo "</td>
\t\t<td class=\"info\">";
                // line 23
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "U_GROUP", array())) {
                    // line 24
                    echo "\t\t\t<a";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if ($this->getAttribute($_user_, "GROUP_COLOR", array())) {
                        echo " style=\"font-weight: bold; color: #";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo $this->getAttribute($_user_, "GROUP_COLOR", array());
                        echo "\"";
                    }
                    echo " href=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $this->getAttribute($_user_, "U_GROUP", array());
                    echo "\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $this->getAttribute($_user_, "GROUP_NAME", array());
                    echo "</a>
\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo $this->getAttribute($_user_, "GROUP_NAME", array());
                    echo "
\t\t\t";
                }
                // line 27
                echo "</td>
\t\t";
                // line 28
                if (isset($context["S_DISPLAY_MODERATOR_FORUMS"])) { $_S_DISPLAY_MODERATOR_FORUMS_ = $context["S_DISPLAY_MODERATOR_FORUMS"]; } else { $_S_DISPLAY_MODERATOR_FORUMS_ = null; }
                if ($_S_DISPLAY_MODERATOR_FORUMS_) {
                    // line 29
                    echo "\t\t\t<td class=\"info\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if ($this->getAttribute($_user_, "FORUM_OPTIONS", array())) {
                        echo "<select style=\"width: 100%;\">";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo $this->getAttribute($_user_, "FORUMS", array());
                        echo "</select>";
                    } elseif ($this->getAttribute($_user_, "FORUMS", array())) {
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo $this->getAttribute($_user_, "FORUMS", array());
                    } else {
                        echo "-";
                    }
                    echo "</td>
\t\t";
                }
                // line 31
                echo "\t</tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 33
                echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"3\"><strong>";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
                echo "</strong></td>
\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t</tbody>
\t</table>
\t
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</form>

";
        // line 46
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_team.html", 46)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 47
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_team.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_team.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 47,  227 => 46,  222 => 43,  211 => 37,  202 => 34,  199 => 33,  193 => 31,  176 => 29,  173 => 28,  170 => 27,  163 => 26,  145 => 24,  142 => 23,  117 => 22,  103 => 21,  97 => 20,  92 => 17,  85 => 16,  81 => 15,  59 => 14,  51 => 8,  46 => 7,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="solo">{PAGE_TITLE}</h2>*/
/* */
/* <form method="post" action="{S_MODE_ACTION}">*/
/* */
/* <!-- BEGIN group -->*/
/* <div class="forumbg forumbg-table">*/
/* 	<div class="inner">*/
/* */
/* 	<table class="table1" id="team">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><span class="rank-img">{L_RANK}&nbsp;</span><!-- IF group.U_GROUP --><a href="{group.U_GROUP}">{group.GROUP_NAME}</a><!-- ELSE -->{group.GROUP_NAME}<!-- ENDIF --></th>*/
/* 		<th class="info">{L_PRIMARY_GROUP}</th>*/
/* 		<!-- IF S_DISPLAY_MODERATOR_FORUMS --><th class="info">{L_MODERATOR}</th><!-- ENDIF -->*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* <!-- BEGIN user -->*/
/* 	<tr class="<!-- IF group.user.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF group.user.S_INACTIVE --> inactive<!-- ENDIF -->">*/
/* 		<td><!-- IF group.user.RANK_IMG --><span class="rank-img">{group.user.RANK_IMG}</span><!-- ELSE --><span class="rank-img">{group.user.RANK_TITLE}</span><!-- ENDIF --><!-- EVENT memberlist_team_username_prepend -->{group.user.USERNAME_FULL}<!-- IF group.user.S_INACTIVE --> ({L_INACTIVE})<!-- ENDIF --><!-- EVENT memberlist_team_username_append --></td>*/
/* 		<td class="info"><!-- IF group.user.U_GROUP -->*/
/* 			<a<!-- IF group.user.GROUP_COLOR --> style="font-weight: bold; color: #{group.user.GROUP_COLOR}"<!-- ENDIF --> href="{group.user.U_GROUP}">{group.user.GROUP_NAME}</a>*/
/* 			<!-- ELSE -->*/
/* 				{group.user.GROUP_NAME}*/
/* 			<!-- ENDIF --></td>*/
/* 		<!-- IF S_DISPLAY_MODERATOR_FORUMS -->*/
/* 			<td class="info"><!-- IF group.user.FORUM_OPTIONS --><select style="width: 100%;">{group.user.FORUMS}</select><!-- ELSEIF group.user.FORUMS -->{group.user.FORUMS}<!-- ELSE -->-<!-- ENDIF --></td>*/
/* 		<!-- ENDIF -->*/
/* 	</tr>*/
/* <!-- BEGINELSE -->*/
/* 	<tr class="bg1">*/
/* 		<td colspan="3"><strong>{L_NO_MEMBERS}</strong></td>*/
/* 	</tr>*/
/* <!-- END user -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* <!-- END group -->*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
