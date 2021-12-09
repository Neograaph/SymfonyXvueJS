<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemoDeuxController extends AbstractController
{
    /**
     * @Route("/demo2", name="demo2")
     */
    public function index(): Response
    {
        return $this->render('demo_deux/index.html.twig');
    }

    /**
    * @Route("/get-student-list", name="getStudentList")
    */
    public function getStudentList(Request $request) 
    {
        $formerStudents = $request->query->get('formerStudents');
        $studentList = [
            'Pierre',
            'Sophie',
            'Lucy',
            'Marc',
            'Nicolas'
        ];

        if($formerStudents == true){
            $formerStudentList = [
                'Julie',
                'Michael',
                'Johny',
                'Amber'
            ];
            $studentList = array_merge($studentList,$formerStudentList);
        }

        return new JsonResponse($studentList);
    }
}
