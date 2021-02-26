<?php
namespace App\Controller;
header("Access-Control-Allow-Origin: *");
use App\Repository\TestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/test", name="test")
 */
class TestController extends AbstractController
{

    private $entityManager;
    private $testRepository;
    //check test entity last function
    public function __construct(EntityManagerInterface $entityManager, TestRepository $testRepository){

        $this->entityManager = $entityManager;
        $this->testRepository = $testRepository;
    }

    /**
     * @Route("/read", name="test")
     */
    public function index()
    {
        $tests = $this->testRepository->findAll();
        $arrayOfTest = [];
        foreach($tests as $test){
            $arrayOfTest[] = $test->toArray();
        }
        return $this->json($arrayOfTest);
    }
}
