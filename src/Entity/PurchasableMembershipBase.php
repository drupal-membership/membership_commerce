<?php

namespace Drupal\membership_commerce\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\membership_commerce\PurchasableMembershipInterface;

abstract class PurchasableMembershipBase extends ContentEntityBase implements PurchasableMembershipInterface {

  /**
   * {@inheritDoc}
   */
  public function createMembership(array $providerData = []) {
    /** @var \Drupal\membership\Entity\MembershipTypeInterface $membershipType */
    $membershipType = \Drupal::entityTypeManager()
      ->getStorage('membership_type')->load($this->getMembershipTypeId());
    return $membershipType->createMembership(
      [],
      ['membership_offer' => $this] + $providerData
    );
  }

}
