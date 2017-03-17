<?php
  namespace Drupal\drupal_day\Controller;
  use Drupal\Core\Controller\ControllerBase;
  /*
   * example controller
   */
  class PageController extends ControllerBase{
    public function  content(){
      $build = array(
          '#type'=> 'markup',
          '#markup'=> t('Primera pagina de drupal'),
      );
      return $build;
    }
  }