<?php

namespace BH\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WsController extends Controller
{
    public function indexAction()
    {
	$content = $this
		 ->get('templating')
		 ->render('BHWebsiteBundle:Ws:index.html.twig');

        return new Response($content);
    }

    public function recipeAction()
    {
	$content = $this
		 ->get('templating')
		 ->render('BHWebsiteBundle:Ws:recipe.html.twig');

        return new Response($content);
    }

    public function mailAction(REquest $request)
    {
        if ($request->isMethod('POST')) {
        $content = $this
		 ->get('templating')
		 ->render('BHWebsiteBundle:Ws:confirmation.html.twig');

	return new Response($content);
	}

	return $this->render('BHWebsiteBundle:Ws:mail.html.twig');
    }
}