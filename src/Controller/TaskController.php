<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Task;
USE App\Form\Type\TaskType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

class TaskController extends AbstractController
{
    /**
     *  @Route("/task", name="task")
     */
   
    public function new(Request $request): Response
    {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $dueDateIsRequired = false;

        $form = $this->createForm(TaskType::class, $task, [
            'require_due_date' => $dueDateIsRequired,
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            $task = $form->getData();
            
             return $this->renderForm('task/new.html.twig', [
                'form' => $form,
            ]);   }

        return $this->renderForm('task/new.html.twig', [
            'form' => $form,
        ]);
    }
}