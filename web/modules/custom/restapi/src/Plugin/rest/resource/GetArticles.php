<?php

namespace Drupal\res_tapi\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\Core\Entity\EntityStorageException;


/**
 * Provides a Artcles Resource
 *
 * @RestResource(
 *   id = "articles",
 *   label = @Translation("Articles Listing"),
 *   uri_paths = {
 *     "canonical" =  "/api/articles"
 *   }
 * )
 */

class GetArticles extends ResourceBase{

  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */

  public function get()
  {

    try {
      return $query =  \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'article']);
      return $response = new ResourceResponse($query);
    } catch (EntityStorageException $e) {
      \Drupal::logger('custom-rest')->error($e->getMessage());
    }
  }
}
