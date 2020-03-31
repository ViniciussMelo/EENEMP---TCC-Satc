<?php

/* topic_notify.txt */
class __TwigTemplate_a58b3708f97fabab943088aeadef7c6b729233392ef5be84beef5cd15d6bdc87 extends Twig_Template
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
        echo "Subject: Notificação de resposta ao tópico - \"";
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "\"

Olá ";
        // line 3
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo ",

Você recebeu este e-mail porque está visualizando o tópico \"";
        // line 5
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "\" em \"";
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "\". Este tópico recebeu uma resposta";
        if (isset($context["AUTHOR_NAME"])) { $_AUTHOR_NAME_ = $context["AUTHOR_NAME"]; } else { $_AUTHOR_NAME_ = null; }
        if (($_AUTHOR_NAME_ != "")) {
            echo " por ";
            if (isset($context["AUTHOR_NAME"])) { $_AUTHOR_NAME_ = $context["AUTHOR_NAME"]; } else { $_AUTHOR_NAME_ = null; }
            echo $_AUTHOR_NAME_;
        }
        echo " desde a sua última visita. Você pode usar o seguinte endereço para ler as respostas escritas. Não serão enviadas mais notificações enquanto você não visitar este tópico.

Se você deseja visualizar a mensagem mais recente desde sua última visita, clique no seguinte link:
";
        // line 8
        if (isset($context["U_NEWEST_POST"])) { $_U_NEWEST_POST_ = $context["U_NEWEST_POST"]; } else { $_U_NEWEST_POST_ = null; }
        echo $_U_NEWEST_POST_;
        echo "

Se você deseja visualizar o tópico, clique no seguinte link:
";
        // line 11
        if (isset($context["U_TOPIC"])) { $_U_TOPIC_ = $context["U_TOPIC"]; } else { $_U_TOPIC_ = null; }
        echo $_U_TOPIC_;
        echo "

Se você deseja visualizar o fórum, clique no seguinte link:
";
        // line 14
        if (isset($context["U_FORUM"])) { $_U_FORUM_ = $context["U_FORUM"]; } else { $_U_FORUM_ = null; }
        echo $_U_FORUM_;
        echo "

Se você deseja parar de visualizar este tópico, clique no link \"Parar de visualizar este tópico\" na parte inferior esquerda do tópico, ou clique no seguinte endereço:

";
        // line 18
        if (isset($context["U_STOP_WATCHING_TOPIC"])) { $_U_STOP_WATCHING_TOPIC_ = $context["U_STOP_WATCHING_TOPIC"]; } else { $_U_STOP_WATCHING_TOPIC_ = null; }
        echo $_U_STOP_WATCHING_TOPIC_;
        echo "

";
        // line 20
        if (isset($context["EMAIL_SIG"])) { $_EMAIL_SIG_ = $context["EMAIL_SIG"]; } else { $_EMAIL_SIG_ = null; }
        echo $_EMAIL_SIG_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  71 => 18,  63 => 14,  56 => 11,  49 => 8,  32 => 5,  26 => 3,  19 => 1,);
    }
}
/* Subject: Notificação de resposta ao tópico - "{TOPIC_TITLE}"*/
/* */
/* Olá {USERNAME},*/
/* */
/* Você recebeu este e-mail porque está visualizando o tópico "{TOPIC_TITLE}" em "{SITENAME}". Este tópico recebeu uma resposta<!-- IF AUTHOR_NAME != '' --> por {AUTHOR_NAME}<!-- ENDIF --> desde a sua última visita. Você pode usar o seguinte endereço para ler as respostas escritas. Não serão enviadas mais notificações enquanto você não visitar este tópico.*/
/* */
/* Se você deseja visualizar a mensagem mais recente desde sua última visita, clique no seguinte link:*/
/* {U_NEWEST_POST}*/
/* */
/* Se você deseja visualizar o tópico, clique no seguinte link:*/
/* {U_TOPIC}*/
/* */
/* Se você deseja visualizar o fórum, clique no seguinte link:*/
/* {U_FORUM}*/
/* */
/* Se você deseja parar de visualizar este tópico, clique no link "Parar de visualizar este tópico" na parte inferior esquerda do tópico, ou clique no seguinte endereço:*/
/* */
/* {U_STOP_WATCHING_TOPIC}*/
/* */
/* {EMAIL_SIG}*/
/* */
