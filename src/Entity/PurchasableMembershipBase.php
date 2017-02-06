<?php

namespace Drupal\membership_commerce\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\membership\Entity\Membership;
use Drupal\membership_commerce\PurchasableMembership;

abstract class PurchasableMembershipBase extends ContentEntityBase implements PurchasableMembership {

  /**
   * @inheritDoc
   */
  public function createMembership() {
    $membership = Membership::create([
      'type' => $this->getMembershipTypeId(),
    ]);
    return $membership;
  }

}
