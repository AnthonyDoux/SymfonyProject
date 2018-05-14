<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Review;
use AppBundle\Entity\User;

/**
 * Listing controller.
 *
 * @Route("review")
 */

class ReviewController extends Controller
{
    /**
     * @Route("/", name="review_index")
     * @Method("GET")
     */

   public function indexAction()
   {

   }

    /**
     * Creates a new review entity.
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

   public function newAction(Request $request)
   {

   }
}
