<?php

/* user_welcome.txt */
class __TwigTemplate_793257f9863399283a1f8867b60b85d1ebde14b7f2f2dc865da8dea51a9d57b0 extends Twig_Template
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
        echo "Subject: Bem-vindo ao fórum \"";
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "\"

";
        // line 3
        if (isset($context["WELCOME_MSG"])) { $_WELCOME_MSG_ = $context["WELCOME_MSG"]; } else { $_WELCOME_MSG_ = null; }
        echo $_WELCOME_MSG_;
        echo "

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: ";
        // line 8
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "

Endereço: ";
        // line 10
        if (isset($context["U_BOARD"])) { $_U_BOARD_ = $context["U_BOARD"]; } else { $_U_BOARD_ = null; }
        echo $_U_BOARD_;
        echo "
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

";
        // line 17
        if (isset($context["EMAIL_SIG"])) { $_EMAIL_SIG_ = $context["EMAIL_SIG"]; } else { $_EMAIL_SIG_ = null; }
        echo $_EMAIL_SIG_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  41 => 10,  35 => 8,  26 => 3,  19 => 1,);
    }
}
/* Subject: Bem-vindo ao fórum "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:*/
/* */
/* ----------------------------*/
/* Usuário: {USERNAME}*/
/* */
/* Endereço: {U_BOARD}*/
/* ----------------------------*/
/* */
/* A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.*/
/* */
/* Obrigado por registrar-se!*/
/* */
/* {EMAIL_SIG}*/
/* */
