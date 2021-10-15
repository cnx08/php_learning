<?php

namespace App\Controller;

use App\Entity\Directory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DirectoryController extends AbstractController
{
    /**
     * @Route("/directory", name="directory")
     */
    public function index(): Response
    {
        return $this->render('directory/index.html.twig', [
            'controller_name' => 'DirectoryController',
        ]);
    }

    /**
     * @Route ("/directory/create")
     * @return Response
     */
    public function createRecord(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $record = new Directory();
        $record->setName('asd')
            ->setDescription('asdasd');

        $entityManager->persist($record);
        $entityManager->flush();

        return new Response("saved with id" . $record->getId());




    }
}
