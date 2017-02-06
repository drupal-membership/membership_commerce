<?php

namespace Drupal\membership_commerce;

use Drupal\commerce\PurchasableEntityInterface;

interface PurchasableMembership extends PurchasableEntityInterface {

  /**
   * Get the membership type (bundle) ID to create when purchasing this membership.
   *
   * @return string
   */
  public function getMembershipTypeId();

  /**
   * Factory method for creating a membership to fulfill this purchase.
   *
   * @return \Drupal\membership\Entity\MembershipInterface
   */
  public function createMembership();

}
