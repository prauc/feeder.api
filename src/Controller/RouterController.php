<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouterInterface;

class RouterController extends AbstractController
{
    /** @var RouterInterface $router */
    private $router;

    /**
     * LegacyController constructor.
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @Route("/legacy-gateway", name="legacy_gateway")
     * @param Request $request
     * @return RedirectResponse
     */
    public function legacy(Request $request): RedirectResponse
    {
        $controller = $request->get('controller');
        $action     = strlen($request->get('action') > 0) ? $request->get('action') : 'index';
        $version    = $request->get('version', '1');

        try {
            $url = "/v{$version}/{$controller}/{$action}";
            $this->router->match($url);
        } catch (ResourceNotFoundException $e) {
            $routeCollection = new ArrayCollection($this->router->getRouteCollection()->all());
            $url = $this->filterRouteCollection($routeCollection, $version, $controller, $action);
        }

        return $this->redirect($url);
    }



    /**
     * @Route("/version-gateway", name="version_gateway")
     * @param Request $request
     * @return RedirectResponse
     */
    public function version(Request $request): RedirectResponse
    {
        $controller = $request->get('controller');
        $action     = strlen($request->get('action') > 0) ? $request->get('action') : 'index';
        $version    = substr($request->get('version', '1'), 1, strlen($request->get('version', '1'))-1);

        $routeCollection = new ArrayCollection($this->router->getRouteCollection()->all());
        $url = $this->filterRouteCollection($routeCollection, $version, $controller, $action);

        return $this->redirect($url);
    }

    /**
     * @param ArrayCollection<Route> $routeCollection
     * @param String $version
     * @param String $controller
     * @param String $action
     * @return String
     */
    private function filterRouteCollection(ArrayCollection $routeCollection, String $version, String $controller, String $action): String
    {
        $filtered = $routeCollection->filter(function ($route, $name) use ($version, $controller, $action) {
            @list($routeVersion, $routeController, $routeAction) = explode('_', $name);
            $routeVersion = (float)$routeVersion;
            $version = (float)$version;

            return
                $routeController === $controller &&
                $routeAction === $action &&
                $routeVersion <= $version;
        });

        if(count($filtered) == 0) {
            throw new NotFoundHttpException("Route not found!!!!11");
        }

        /** @var \Symfony\Component\Routing\Route $url */
        return $filtered->last()->getPath();
    }
}
