<?php

/**
 * @file
 * Definition of \Drupal\commerce_tax\Tests\CommerceTaxTestBase.
 */

namespace Drupal\commerce_tax\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Defines the base class for tax test cases.
 */
abstract class CommerceTaxTestBase extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['commerce', 'commerce_tax', 'commerce_product'];

  /**
   * User with permission to administer products.
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser([
      'administer stores',
      'access administration pages',
    ]);
    $this->drupalLogin($this->adminUser);
  }
}
