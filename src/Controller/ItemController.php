<?php
/**
 * Created by PhpStorm.
 * User: dominik.wolf
 * Date: 28.01.2018
 * Time: 11:39
 */

namespace App\Controller;

use App\Entity\Item;
use App\Form\ItemFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends Controller
{
    /**
     * Matches /item exactly
     *
     * @Route("/item", name="item")
     * @throws \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     */
    public function indexAction()
    {
        $newItem = new Item();
        $form = $this->get('form.factory')
            ->createNamedBuilder('', ItemFormType::class, $newItem)
            ->getForm();

        $bindings = [
            'form' => $form->createView()
        ];

        return $this->render('item/item.html.twig', $bindings);
    }
}
