<?php

namespace MQM\BlogBundle\Twig\Extension;

use Symfony\Bundle\TwigBundle\TwigEngine;

class TwigStringExtension extends \Twig_Extension
{
    private $twigEngine;

    public function __construct(TwigEngine $twigEngine)
    {
        $this->twigEngine = $twigEngine;
    }
    
    public function getName()
    {
        return 'mqm_blog.twig_string_extension';
    }

    public function getFunctions()
    {
        return array(
            'mqm_blog_render_string' => new \Twig_Function_Method($this, 'renderString', array(
                'is_safe' => array('html') // this enables raw-html output
            )),
        );
    }
    
    public function getFilters()
    {
        return array(
            'mqm_blog_render_string' => new \Twig_Filter_Method($this, 'renderString', array(
                'is_safe' => array('html') // this enables raw-html output
            ))
        );
    }

    public function renderString($template, $data = array())
    {
        return $this->twigEngine->render($template, $data);
    }
}