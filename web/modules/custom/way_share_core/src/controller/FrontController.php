<?php

namespace Drupal\way_share_core\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\taxonomy\Entity\Term;
use Drupal\node\Entity\Node;

/**
 * Class FrontController.
 */
class FrontController extends ControllerBase
{

    /**
     *   Return front page.
     */
    public function show()
    {

        return [
             '#theme' => 'home',
        ];
    }

}
