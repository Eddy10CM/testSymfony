<?php
/**Eddy Clickittech*/

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig',[
            'name' => $genusName,
            'notes' => $notes
        ]);
        return new Response($html);
    }
}