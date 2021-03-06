<?php

/* login.html.twig */
class __TwigTemplate_a8a423b6d0cc336c94b99ef97464ac38237930cf56ff1edecf8e0c56f8f2b5fb extends Twig_Template
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
<html lang=\"pt-br\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"../../assets/images/miniLogo.png\">


    <title>{Start By Code&Code}</title>

    <link href=\"https://fonts.googleapis.com/css?family=Lato:100,300,400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <style>
        @import url(\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400\");
        @import url(\"https://fonts.googleapis.com/css?family=Playfair+Display\");
        body, .message, .form, form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        body {
            height: 60vh;
            background: #E8E8E8;
            font-family: \"Source Sans Pro\", sans-serif;
            overflow: hidden;
        }

        .caixa {
            width: 900px;
            height: 400px;
            background: white;
            position: relative;
            display: grid;
            grid-template: 100% / 50% 50%;
            box-shadow: 2px 2px 10px 0 rgba(51, 51, 51, 0.2);
        }

        .message {
            position: absolute;
            background: white;
            width: 50%;
            height: 100%;
            transition: 0.5s all ease;
            transform: translateX(100%);
            z-index: 4;
        }
        .message:before {
            position: absolute;
            content: '';
            width: 1px;
            height: 70%;
            background: #C3C3D8;
            opacity: 0;
            left: 0;
        }
        .message .button {
            margin: 5px 0;
        }

        .signup:before {
            opacity: 0.3;
            left: 0;
        }

        .login:before {
            opacity: 0.3;
            left: 100%;
        }

        .btn-wrapper {
            width: 60%;
        }

        .form {
            width: 100%;
            height: 100%;
        }
        .form--heading {
            font-size: 18px;
            height: 50px;
            color: #809BCE;
            font-family: 'Playfair Display', serif;
        }

        .formulario {
            width: 70%;
        }
        .formulario > * {
            margin: 10px;
        }
        .formulario input {
            width: 90%;
            border: 0;
            border-bottom: 1px solid rgba(195, 195, 216, 0.5);
            font-size: 13px;
            font-weight: 300;
            color: #797A9E;
            letter-spacing: 0.11em;
        }
        .formulario input::placeholder {
            color: #C3C3D8;
            font-size: 10px;
        }
        .formulario input:focus {
            outline: 0;
            border-bottom: 1px solid rgba(128, 155, 206, 0.7);
            transition: 0.6s all ease;
        }

        .button {
            width: 100%;
            height: 30px;
            border: 0;
            outline: 0;
            color: white;
            font-size: 15px;
            font-weight: 300;
            position: relative;
            z-index: 3;
            letter-spacing: 2px;
            background: linear-gradient(45deg, #2c6ba1, #337cbb);
            font-family: 'Playfair Display', serif;
        }
        .button:hover {
            transform: translateY(4px);
            transition: 0.4s all ease;
        }

        @media (max-width: 750px) {
            .caixa {
                transform: scale(0.8);
            }
        }


    </style>

</head>
<body>

<div class=\"col-lg-6\">
    ";
        // line 146
        if (($this->env->getExtension('Cac\TwigHelper\TwigFunction')->getHasMessages() == true)) {
            // line 147
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cac\TwigHelper\TwigFunction')->getDisplay(), "html", null, true);
            echo "
    ";
        }
        // line 149
        echo "</div>

<div class=\"caixa\">

    <div class=\"message signup\">
        <div class=\"btn-wrapper\">
            <button class=\"button\" id=\"signup\">Cadastrar</button>
            <button class=\"button\" id=\"login\"> Login</button>
        </div>
    </div>
    <div class=\"form form--signup\">
        <div class=\"form--heading\">Bem Vindo! Faça seu cadastro!</div>
        <form method=\"post\" action=\"/register/store\" autocomplete=\"off\" class=\"formulario\">
            <input type=\"email\" name=\"email\" required placeholder=\"E-mail\" autofocus/>
            <input type=\"password\" name=\"password\" required placeholder=\"Senha\"/>
            <button class=\"button\">Cadastrar</button>
        </form>
    </div>
    <div class=\"form form--login\">
        <div class=\"form--heading\">Bem Vindo!</div>
        <form autocomplete=\"off\" method=\"post\" action=\"/auth/login\"  class=\"formulario\">
            <input type=\"email\"    name=\"email\"      placeholder=\"E-mail\" required >
            <input type=\"password\" name=\"password\"   placeholder=\"Senha\"  required>
            <button class=\"button\">Entrar</button>
        </form>
    </div>
</div>

</body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

<script>
    \$( document ).ready(function() {
        \$('#signup').toggle();
        \$(\"#signup\").click(function() {
            \$(\".message\").css(\"transform\", \"translateX(100%)\");
            if (\$(\".message\").hasClass(\"login\")) {
                \$(\".message\").removeClass(\"login\");
                \$('#signup').toggle();
                \$('#login').toggle();
            }
            \$(\".message\").addClass(\"signup\");
        });

        \$(\"#login\").click(function() {
            \$(\".message\").css(\"transform\", \"translateX(0)\");
            \$('#signup').toggle();
            \$('#login').toggle();
            if (\$(\".message\").hasClass(\"login\")) {
                \$(\".message\").removeClass(\"signup\");
            }
            \$(\".message\").addClass(\"login\");
        });

    });
</script>

</html>


";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 149,  168 => 147,  166 => 146,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "C:\\laragon\\www\\start\\vendor\\codeandcode\\auth-start\\src\\views\\login.html.twig");
    }
}
