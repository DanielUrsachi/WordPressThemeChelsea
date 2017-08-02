<?php

/* @core/form.twig */
class __TwigTemplate_d1751749822a2f0a95ba7ce61c73b4f4f42bc3994047b058108eaeb7550f0455 extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($_method = null, $_action = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $_method,
            "action" => $_action,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
            echo "\" ";
            if ((!twig_test_empty((isset($context["action"]) ? $context["action"] : null)))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["tooltips"]) ? $context["tooltips"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon"), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "style"));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, trim((isset($context["property"]) ? $context["property"] : null)), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($_label = null, $_element = null, $_id = null, $_titleRow = null, $_row_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "element" => $_element,
            "id" => $_id,
            "titleRow" => $_titleRow,
            "row_id" => $_row_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ((!twig_test_empty((isset($context["row_id"]) ? $context["row_id"] : null)))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, (isset($context["row_id"]) ? $context["row_id"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($_label = null, $_link = null, $_id = null, $_element = null, $_titleRow = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "link" => $_link,
            "id" => $_id,
            "element" => $_element,
            "titleRow" => $_titleRow,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array((isset($context["link"]) ? $context["link"] : null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($_type = "text", $_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
    ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (twig_test_iterable((isset($context["val"]) ? $context["val"] : null))) {
                    // line 79
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["val"]) ? $context["val"] : null));
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : null), "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            echo $context["form"]->getinput("text", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            echo $context["form"]->getinput("password", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            echo $context["form"]->getinput("button", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            echo $context["form"]->getinput("checkbox", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            echo $context["form"]->getinput("file", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            echo $context["form"]->getinput("hidden", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            echo $context["form"]->getinput("radio", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            echo $context["form"]->getinput("color", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            echo $context["form"]->getinput("submit", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["text"]) ? $context["text"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($_name = null, $_text = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "text" => $_text,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($_actual = null, $_expected = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $_actual,
            "expected" => $_expected,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if (((isset($context["actual"]) ? $context["actual"] : null) == (isset($context["expected"]) ? $context["expected"] : null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  977 => 176,  965 => 175,  951 => 172,  939 => 171,  925 => 167,  908 => 166,  895 => 165,  883 => 162,  866 => 160,  862 => 159,  845 => 158,  819 => 154,  802 => 152,  798 => 151,  781 => 150,  767 => 149,  754 => 146,  751 => 145,  748 => 144,  745 => 143,  743 => 142,  740 => 141,  724 => 139,  711 => 136,  708 => 135,  705 => 134,  692 => 133,  679 => 130,  676 => 129,  673 => 128,  660 => 127,  647 => 124,  644 => 123,  641 => 122,  628 => 121,  615 => 118,  612 => 117,  609 => 116,  596 => 115,  583 => 112,  580 => 111,  577 => 110,  564 => 109,  551 => 106,  548 => 105,  540 => 102,  537 => 101,  534 => 100,  508 => 96,  505 => 95,  502 => 94,  457 => 87,  439 => 83,  431 => 81,  410 => 78,  406 => 77,  397 => 76,  383 => 75,  364 => 69,  355 => 65,  351 => 64,  340 => 63,  334 => 60,  330 => 59,  327 => 58,  325 => 57,  320 => 54,  317 => 53,  302 => 52,  286 => 47,  282 => 45,  276 => 43,  261 => 37,  250 => 36,  244 => 33,  235 => 30,  228 => 27,  222 => 25,  220 => 24,  217 => 23,  214 => 22,  199 => 21,  175 => 17,  171 => 16,  166 => 15,  161 => 13,  158 => 12,  156 => 11,  133 => 7,  124 => 6,  100 => 3,  91 => 2,  73 => 174,  67 => 164,  64 => 156,  43 => 108,  40 => 98,  37 => 92,  34 => 86,  31 => 74,  28 => 51,  25 => 20,  22 => 9,  19 => 5,  78 => 1,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  61 => 148,  58 => 138,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  46 => 114,  21 => 1,  2287 => 4,  2275 => 3,  2267 => 1675,  2263 => 1674,  2257 => 1671,  2253 => 1670,  2247 => 1667,  2243 => 1666,  2237 => 1663,  2233 => 1662,  2228 => 1659,  2217 => 1656,  2208 => 1655,  2203 => 1654,  2201 => 1637,  2196 => 1635,  2193 => 1634,  2189 => 1489,  2179 => 1485,  2170 => 1479,  2166 => 1478,  2161 => 1476,  2152 => 1470,  2148 => 1469,  2143 => 1468,  2138 => 1467,  2135 => 1466,  2131 => 1330,  2128 => 1329,  2119 => 1321,  2115 => 1320,  2108 => 1316,  2102 => 1313,  2099 => 1312,  2096 => 1311,  2091 => 1326,  2089 => 1311,  2083 => 1308,  2079 => 1307,  2072 => 1303,  2066 => 1300,  2062 => 1298,  2059 => 1297,  2048 => 1288,  2044 => 1287,  2040 => 1286,  2036 => 1285,  2032 => 1284,  2025 => 1283,  2021 => 1282,  2017 => 1281,  2013 => 1280,  2009 => 1279,  2005 => 1278,  1997 => 1273,  1988 => 1267,  1981 => 1263,  1970 => 1255,  1966 => 1254,  1961 => 1252,  1957 => 1251,  1949 => 1246,  1940 => 1240,  1933 => 1236,  1924 => 1230,  1917 => 1226,  1908 => 1220,  1901 => 1216,  1892 => 1210,  1885 => 1206,  1876 => 1200,  1869 => 1196,  1860 => 1190,  1853 => 1186,  1847 => 1182,  1845 => 1179,  1840 => 1176,  1837 => 1172,  1835 => 1171,  1831 => 1169,  1828 => 1168,  1819 => 920,  1815 => 919,  1807 => 914,  1801 => 911,  1797 => 909,  1794 => 908,  1789 => 904,  1781 => 899,  1777 => 898,  1770 => 894,  1765 => 892,  1759 => 888,  1749 => 878,  1743 => 875,  1736 => 871,  1731 => 869,  1725 => 865,  1723 => 864,  1719 => 862,  1716 => 858,  1714 => 857,  1710 => 855,  1707 => 854,  1701 => 846,  1698 => 833,  1694 => 830,  1691 => 821,  1687 => 818,  1685 => 817,  1682 => 816,  1675 => 849,  1672 => 816,  1668 => 813,  1665 => 805,  1660 => 801,  1657 => 785,  1653 => 782,  1650 => 774,  1646 => 771,  1643 => 762,  1639 => 759,  1636 => 751,  1632 => 748,  1629 => 740,  1625 => 737,  1622 => 718,  1618 => 715,  1615 => 708,  1611 => 705,  1608 => 698,  1604 => 695,  1601 => 683,  1597 => 680,  1594 => 673,  1590 => 670,  1587 => 655,  1582 => 651,  1579 => 632,  1576 => 631,  1572 => 628,  1569 => 627,  1561 => 621,  1559 => 620,  1555 => 618,  1553 => 617,  1549 => 615,  1547 => 614,  1543 => 612,  1541 => 611,  1537 => 609,  1535 => 608,  1526 => 602,  1520 => 601,  1515 => 599,  1509 => 598,  1504 => 596,  1498 => 595,  1491 => 591,  1481 => 584,  1474 => 580,  1464 => 573,  1458 => 572,  1454 => 571,  1448 => 570,  1441 => 566,  1434 => 561,  1431 => 560,  1423 => 554,  1421 => 552,  1417 => 550,  1415 => 549,  1411 => 547,  1409 => 545,  1406 => 544,  1403 => 528,  1401 => 517,  1397 => 515,  1394 => 514,  1390 => 484,  1387 => 483,  1380 => 485,  1378 => 483,  1374 => 481,  1372 => 465,  1368 => 463,  1366 => 462,  1361 => 459,  1358 => 455,  1356 => 454,  1352 => 452,  1349 => 451,  1342 => 446,  1334 => 441,  1330 => 440,  1326 => 439,  1321 => 437,  1317 => 435,  1314 => 434,  1307 => 430,  1303 => 429,  1297 => 426,  1293 => 424,  1288 => 421,  1286 => 412,  1282 => 410,  1280 => 401,  1276 => 399,  1274 => 389,  1270 => 387,  1267 => 386,  1265 => 385,  1261 => 383,  1259 => 382,  1255 => 380,  1253 => 371,  1249 => 369,  1247 => 360,  1243 => 358,  1241 => 348,  1237 => 346,  1234 => 345,  1232 => 344,  1228 => 342,  1226 => 341,  1222 => 339,  1220 => 330,  1216 => 328,  1214 => 327,  1210 => 325,  1208 => 320,  1204 => 318,  1201 => 317,  1199 => 316,  1194 => 313,  1192 => 309,  1188 => 307,  1185 => 306,  1181 => 300,  1178 => 299,  1173 => 295,  1170 => 290,  1167 => 289,  1160 => 301,  1158 => 299,  1154 => 297,  1152 => 289,  1148 => 287,  1146 => 286,  1142 => 284,  1139 => 277,  1136 => 265,  1132 => 262,  1130 => 260,  1126 => 258,  1124 => 256,  1119 => 253,  1117 => 251,  1114 => 250,  1110 => 243,  1108 => 242,  1104 => 240,  1101 => 233,  1097 => 230,  1095 => 228,  1091 => 226,  1089 => 224,  1084 => 221,  1082 => 220,  1078 => 218,  1076 => 216,  1073 => 215,  1069 => 211,  1067 => 202,  1060 => 198,  1051 => 192,  1047 => 191,  1040 => 186,  1038 => 185,  1034 => 183,  1031 => 182,  1027 => 1634,  1017 => 1627,  1012 => 1625,  1006 => 1622,  1002 => 1621,  998 => 1620,  992 => 1617,  987 => 1616,  985 => 1615,  978 => 1611,  971 => 1607,  946 => 1584,  936 => 1580,  930 => 1577,  920 => 1576,  910 => 1575,  907 => 1574,  903 => 1573,  899 => 1571,  897 => 1499,  891 => 1496,  886 => 1494,  880 => 1490,  878 => 1466,  873 => 1464,  870 => 1463,  864 => 1462,  857 => 1458,  846 => 1453,  840 => 1450,  836 => 1449,  831 => 157,  824 => 1444,  815 => 1438,  810 => 1436,  805 => 1434,  790 => 1423,  783 => 1419,  777 => 1416,  765 => 1408,  762 => 1407,  758 => 1406,  753 => 1404,  747 => 1400,  737 => 140,  732 => 1394,  726 => 1393,  720 => 1392,  717 => 1391,  713 => 1390,  710 => 1389,  707 => 1388,  704 => 1387,  702 => 1386,  699 => 1385,  697 => 1376,  691 => 1373,  686 => 1371,  678 => 1366,  671 => 1362,  661 => 1355,  656 => 1353,  650 => 1350,  645 => 1348,  640 => 1346,  633 => 1342,  629 => 1341,  622 => 1337,  616 => 1334,  611 => 1332,  608 => 1331,  606 => 1329,  603 => 1328,  601 => 1297,  597 => 1295,  595 => 1168,  588 => 1163,  585 => 1156,  581 => 1153,  578 => 1145,  573 => 1141,  570 => 1133,  566 => 1130,  563 => 1122,  559 => 1119,  556 => 1111,  552 => 1108,  549 => 1094,  545 => 104,  542 => 103,  538 => 1080,  535 => 1073,  531 => 1070,  528 => 1063,  524 => 1060,  521 => 99,  517 => 1049,  514 => 1041,  510 => 1038,  507 => 1030,  503 => 1027,  500 => 1019,  496 => 1016,  493 => 1008,  489 => 93,  486 => 993,  482 => 990,  479 => 970,  476 => 90,  473 => 89,  470 => 88,  467 => 959,  464 => 930,  458 => 925,  456 => 908,  452 => 906,  450 => 854,  447 => 853,  445 => 84,  442 => 626,  440 => 560,  437 => 559,  435 => 514,  427 => 508,  425 => 507,  413 => 79,  409 => 497,  401 => 494,  396 => 492,  391 => 489,  389 => 451,  386 => 450,  384 => 306,  381 => 305,  379 => 182,  373 => 179,  369 => 71,  365 => 177,  361 => 68,  357 => 175,  353 => 174,  350 => 173,  347 => 172,  344 => 171,  341 => 170,  333 => 165,  321 => 158,  313 => 157,  307 => 153,  300 => 149,  296 => 147,  283 => 137,  274 => 42,  271 => 41,  268 => 134,  265 => 38,  262 => 132,  260 => 131,  257 => 130,  254 => 129,  251 => 128,  248 => 127,  245 => 126,  243 => 125,  240 => 32,  237 => 31,  234 => 122,  232 => 29,  229 => 120,  226 => 119,  223 => 118,  221 => 117,  218 => 116,  216 => 115,  209 => 110,  203 => 108,  201 => 107,  198 => 106,  196 => 105,  188 => 100,  178 => 93,  173 => 91,  164 => 14,  159 => 83,  150 => 77,  145 => 10,  141 => 74,  138 => 73,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  118 => 55,  113 => 56,  111 => 55,  105 => 52,  97 => 47,  89 => 42,  81 => 37,  70 => 170,  63 => 13,  55 => 132,  52 => 126,  49 => 120,);
    }
}
