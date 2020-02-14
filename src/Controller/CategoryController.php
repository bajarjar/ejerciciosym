<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index()
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'Listar',
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create()
    {
        return $this->render('category/create.html.twig', [
            'controller_name' => 'Crear',
        ]);
    }

     /**
     * @Route("/update/{id}/", name="update")
     */
    public function update($id)
    {
        return $this->render('category/update.html.twig', [
            'controller_name' => 'Actualizar','parametro'=>$id
        ]);
    }


}
