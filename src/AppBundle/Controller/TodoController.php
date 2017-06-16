<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TodoController extends Controller
{
    /**
     * @Route("/", name="todo_list")
     */
    public function listAction()
    {
        $todos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();

        return $this->render('todo/index.html.twig', [
                'todos' => $todos
            ]);
    }

    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {

        $todo = new Todo;
        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px'],
                ])
            ->add('category', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px'],
                ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px'],
                ])
            ->add('priority', ChoiceType::class, [
                'choices' => ['Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High'], 
                'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px'],
                ])
            ->add('due_date', DateTimeType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'margin-bottom:15px'],
                ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            die('SUBMITTED');
        }

        return $this->render('todo/create.html.twig', [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/todo/edit", name="todo_edit")
     */
    public function editAction(Request $request)
    {
        return $this->render('todo/edit.html.twig');
    }

    /**
     * @Route("/todo/datails", name="todo_datails")
     */
    public function datailsAction(Request $request)
    {
        return $this->render('todo/datails.html.twig');
    }
}
