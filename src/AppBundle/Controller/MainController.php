<?php

namespace AppBundle\Controller;

use AppBundle\Exception\NoCookiesForYou;
use AppBundle\Exception\NoCookiesLeft;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

    /**
     * @Route("/crazy-dave")
     */
    public function cookiesAction()
    {
        try {
            if (random_int(0, 1)) {
                throw new NoCookiesForYou();
            }

            throw new NoCookiesLeft();
        } catch (NoCookiesForYou |  NoCookiesLeft $e) {
            $whisper = sprintf('Crazy Dave whispered "%s"', $e->getMessage());
        } catch (\Exception $e) {
            throw new Exception();
        }

        return new Response('<html lang="en"><body>'.$whisper.'</body></html>');
    }
}
