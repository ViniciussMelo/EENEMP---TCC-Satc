<?php

/* overall_header.html */
class __TwigTemplate_7f40b3a2274f7180b922405fa4a24530b9283c0b160183ebfd9e08b81e889de3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        if ($_META_) {
            if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
            echo $_META_;
        }
        // line 8
        echo "<title>";
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 10
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 15
        if (isset($context["CURRENT_PAGE"])) { $_CURRENT_PAGE_ = $context["CURRENT_PAGE"]; } else { $_CURRENT_PAGE_ = null; }
        echo $_CURRENT_PAGE_;
        echo "';
var per_page = '";
        // line 16
        if (isset($context["PER_PAGE"])) { $_PER_PAGE_ = $context["PER_PAGE"]; } else { $_PER_PAGE_ = null; }
        echo $_PER_PAGE_;
        echo "';
var base_url = '";
        // line 17
        if (isset($context["BASE_URL"])) { $_BASE_URL_ = $context["BASE_URL"]; } else { $_BASE_URL_ = null; }
        echo twig_escape_filter($this->env, $_BASE_URL_, "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name && rb[r].disabled !== true)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

// ]]>
</script>

";
        // line 89
        if (isset($context["acp_overall_header_head_append"])) { $_acp_overall_header_head_append_ = $context["acp_overall_header_head_append"]; } else { $_acp_overall_header_head_append_ = null; }
        // line 90
        echo "
";
        // line 91
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "

";
        // line 93
        if (isset($context["acp_overall_header_stylesheets_after"])) { $_acp_overall_header_stylesheets_after_ = $context["acp_overall_header_stylesheets_after"]; } else { $_acp_overall_header_stylesheets_after_ = null; }
        // line 94
        echo "
</head>

<body class=\"";
        // line 97
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo " nojs\">

";
        // line 99
        if (isset($context["acp_overall_header_body_before"])) { $_acp_overall_header_body_before_ = $context["acp_overall_header_body_before"]; } else { $_acp_overall_header_body_before_ = null; }
        // line 100
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 103
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 104
        if (isset($context["U_ADM_INDEX"])) { $_U_ADM_INDEX_ = $context["U_ADM_INDEX"]; } else { $_U_ADM_INDEX_ = null; }
        echo $_U_ADM_INDEX_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 111
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 112
            echo "\t\t\t\t<li class=\"tab";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            if ($this->getAttribute($_t_block1_, "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            echo $this->getAttribute($_t_block1_, "U_TITLE", array());
            echo "\">";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            echo $this->getAttribute($_t_block1_, "L_TITLE", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 120
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "</strong> [&nbsp;<a href=\"";
        if (isset($context["U_LOGOUT"])) { $_U_LOGOUT_ = $context["U_LOGOUT"]; } else { $_U_LOGOUT_ = null; }
        echo $_U_LOGOUT_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        if (isset($context["U_ADM_LOGOUT"])) { $_U_ADM_LOGOUT_ = $context["U_ADM_LOGOUT"]; } else { $_U_ADM_LOGOUT_ = null; }
        echo $_U_ADM_LOGOUT_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 121
        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 122
        echo "\t\t\t\t\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 123
            echo "\t\t\t\t\t\t\t";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED", array())) {
                // line 124
                echo "\t
\t\t\t\t\t\t";
                // line 125
                if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block1_, "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 126
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_l_block2_, "l_block3", array()))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if ($this->getAttribute($_definition_, "LI_USED", array())) {
                            echo "</ul></div>";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 129
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 131
                        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 132
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 134
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block2_, "l_block3", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t<li";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        if ($this->getAttribute($_l_block3_, "S_SELECTED", array())) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        echo $this->getAttribute($_l_block3_, "U_TITLE", array());
                        echo "\"><span>";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        echo $this->getAttribute($_l_block3_, "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 136
                        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 137
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "LI_USED", array())) {
            // line 143
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 146,  353 => 143,  349 => 142,  343 => 141,  339 => 139,  333 => 138,  327 => 137,  323 => 136,  309 => 135,  304 => 134,  301 => 133,  298 => 132,  294 => 131,  288 => 129,  285 => 128,  279 => 127,  275 => 126,  270 => 125,  267 => 124,  263 => 123,  257 => 122,  253 => 121,  236 => 120,  228 => 114,  210 => 112,  205 => 111,  196 => 105,  184 => 104,  180 => 103,  175 => 100,  173 => 99,  164 => 97,  159 => 94,  157 => 93,  151 => 91,  148 => 90,  146 => 89,  70 => 17,  65 => 16,  60 => 15,  55 => 14,  47 => 10,  40 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* <!-- IF META -->{META}<!-- ENDIF -->*/
/* <title>{PAGE_TITLE}</title>*/
/* */
/* <link href="style/admin.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* var jump_page = '{LA_JUMP_PAGE}{L_COLON}';*/
/* var on_page = '{CURRENT_PAGE}';*/
/* var per_page = '{PER_PAGE}';*/
/* var base_url = '{BASE_URL|e('js')}';*/
/* */
/* /***/
/* * Jump to page*/
/* *//* */
/* function jumpto()*/
/* {*/
/* 	var page = prompt(jump_page, on_page);*/
/* */
/* 	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)*/
/* 	{*/
/* 		if (base_url.indexOf('?') == -1)*/
/* 		{*/
/* 			document.location.href = base_url + '?start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Mark/unmark checkboxes*/
/* * id = ID of parent container, name = name prefix, state = state [true/false]*/
/* *//* */
/* function marklist(id, name, state)*/
/* {*/
/* 	var parent = document.getElementById(id) || document[id];*/
/* */
/* 	if (!parent)*/
/* 	{*/
/* 		return;*/
/* 	}*/
/* */
/* 	var rb = parent.getElementsByTagName('input');*/
/* 	*/
/* 	for (var r = 0; r < rb.length; r++)*/
/* 	{*/
/* 		if (rb[r].name.substr(0, name.length) == name && rb[r].disabled !== true)*/
/* 		{*/
/* 			rb[r].checked = state;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Find a member*/
/* *//* */
/* function find_username(url)*/
/* {*/
/* 	popup(url, 760, 570, '_usersearch');*/
/* 	return false;*/
/* }*/
/* */
/* /***/
/* * Window popup*/
/* *//* */
/* function popup(url, width, height, name)*/
/* {*/
/* 	if (!name)*/
/* 	{*/
/* 		name = '_popup';*/
/* 	}*/
/* */
/* 	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);*/
/* 	return false;*/
/* }*/
/* */
/* // ]]>*/
/* </script>*/
/* */
/* <!-- EVENT acp_overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT acp_overall_header_stylesheets_after -->*/
/* */
/* </head>*/
/* */
/* <body class="{S_CONTENT_DIRECTION} {BODY_CLASS} nojs">*/
/* */
/* <!-- EVENT acp_overall_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<div id="page-header">*/
/* 		<h1>{L_ADMIN_PANEL}</h1>*/
/* 		<p><a href="{U_ADM_INDEX}">{L_ADMIN_INDEX}</a> &bull; <a href="{U_INDEX}">{L_FORUM_INDEX}</a></p>*/
/* 		<p id="skip"><a href="#acp">{L_SKIP}</a></p>*/
/* 	</div>*/
/* 	*/
/* 	<div id="page-body">*/
/* 		<div id="tabs">*/
/* 			<ul>*/
/* 			<!-- BEGIN t_block1 -->*/
/* 				<li class="tab<!-- IF t_block1.S_SELECTED --> activetab<!-- ENDIF -->"><a href="{t_block1.U_TITLE}">{t_block1.L_TITLE}</a></li>*/
/* 			<!-- END t_block1 -->*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 		<div id="acp">*/
/* 				<div id="content">*/
/* 					<div id="menu">*/
/* 						<p>{L_LOGGED_IN_AS}<br /><strong>{USERNAME}</strong> [&nbsp;<a href="{U_LOGOUT}">{L_LOGOUT}</a>&nbsp;][&nbsp;<a href="{U_ADM_LOGOUT}">{L_ADM_LOGOUT}</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>*/
/* 						<!-- DEFINE $LI_USED = 0 -->*/
/* 						<!-- BEGIN l_block1 -->*/
/* 							<!-- IF l_block1.S_SELECTED -->*/
/* 	*/
/* 						<!-- BEGIN l_block2 -->*/
/* 							<!-- IF .l_block1.l_block2.l_block3 -->*/
/* 							<!-- IF $LI_USED --></ul></div><!-- ENDIF -->*/
/* 							<div class="menu-block">*/
/* 								<a class="header" href="javascript:void(0);">{l_block1.l_block2.L_TITLE}</a>*/
/* 								<ul>*/
/* 							<!-- DEFINE $LI_USED = 1 -->*/
/* 							<!-- ENDIF -->*/
/* 	*/
/* 							<!-- BEGIN l_block3 -->*/
/* 								<li<!-- IF l_block1.l_block2.l_block3.S_SELECTED --> id="activemenu"<!-- ENDIF -->><a href="{l_block1.l_block2.l_block3.U_TITLE}"><span>{l_block1.l_block2.l_block3.L_TITLE}</span></a></li>*/
/* 								<!-- DEFINE $LI_USED = 1 -->*/
/* 							<!-- END l_block3 -->*/
/* 						<!-- END l_block2 -->*/
/* 						*/
/* 							<!-- ENDIF -->*/
/* 						<!-- END l_block1 -->*/
/* 						<!-- IF $LI_USED -->*/
/* 								</ul>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 	*/
/* 					<div id="main">*/
/* 						<div class="main">*/
/* */
