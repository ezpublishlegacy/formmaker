<?php

namespace MakingWaves\FormMakerBundle\Form\FormAttributesDecorator;
use Symfony\Component\Form\Form;

class CssDecorator implements FormAttributesDecoratorInterface
{
    public function decorate(Form $form)
    {
        var_dump(__CLASS__);
    }
}