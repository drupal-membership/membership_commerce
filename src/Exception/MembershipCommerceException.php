<?php

declare(strict_types=1);

namespace Drupal\membership_commerce\Exception;

/**
 * Generic exception for exceptions stemming from membership commerce
 * transactions, e.g. a failed payment during membership setup.
 */
class MembershipCommerceException extends \Exception {}
