<?php

namespace App\Controller;

use App\Entity\VodContent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BenchController extends Controller
{
    /**
     * @Route("/bench", name="bench")
     */
    public function index()
    {
        $id = 1;
        $product = $this->getDoctrine()
            ->getRepository(VodContent::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        return $this->render('bench/index.html.twig', [
            'cva' => $product,
        ]);
    }
}
