<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LuckyController
 * @package App\Controller
 */
class LuckyController extends AbstractController
{
    /**
     * @Route ("/lucky/number")
     *
     * @return Response
     * @throws \Exception
     */
    public function number(): Response
    {

        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     *
     * @Route ("/lucky/generate")
     *
     * @return Response
     * @throws \Exception
     */
    public function generateData(): Response
    {
        $number = random_int(0, 100);


        $arr = ['w', 'ee', 'wq' , $number];

        return new Response(json_encode($arr));
    }
}