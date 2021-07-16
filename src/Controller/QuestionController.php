<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/how-to-tie-my-shoes-with-magic")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the question "%s"!',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}