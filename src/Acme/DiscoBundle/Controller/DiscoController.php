<?php
// src/Acme/DiscoBundle/Controller/DiscoController.php
namespace Acme\DiscoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DiscoController extends Controller {
    public function discoAction($text) {
		return $this->render(
			'AcmeDiscoBundle:Disco:index.html.twig',
			array('text' => $text)
		);
    }
}