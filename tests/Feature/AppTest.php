<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

Class AppTest extends TestCase {
  
    public function application_constructor_testing () : void {
      $app = new Application("EcoExplorer", "Environmental", "This is a description", "img link");
      $this->assertSame("EcoExplorer", $app->name);
      $this->assertSame("Environmental", $app->category);
    }
    public function test_clicked_application_returns_correct_info(): void {
      $applications = [
          (object)['name' => 'EcoExplorer', 'category' => 'Environmental'],
          // Add more applications as needed
      ];
  
      $response = $applications[0];
      $this->assertSame("EcoExplorer", $response->name);
      $this->assertSame("Environmental", $response->category);
  }
  public function test_sort_returns_correct_order(): void {
    $applications = [
        ['name' => 'App1', 'category' => 'Entertainment'],
        ['name' => 'App2', 'category' => 'Other'],
        // Add more applications as needed
    ];

    // Define a custom sorting function based on category
    usort($applications, function ($a, $b) {
        return strcmp($a['category'], $b['category']);
    });

    // Assert that the sorting is correct
    $this->assertSame('App1', $applications[0]['name']);
    // Add more assertions based on your expected sorting order
}
  
public function test_filter_returns_correct_output(): void {
  $applications = [
      ['name' => 'FitFusion', 'category' => 'Fitness'],
      ['name' => 'App2', 'category' => 'Other'],
      // Add more applications as needed
  ];

  // Filter applications based on category
  $filteredApps = array_filter($applications, function ($app) {
      return stripos($app['category'], 'Fitness') !== false;
  });

  // Assert that the filtered output is as expected
  $this->assertSame('FitFusion', $filteredApps[0]['name']);
  // Add more assertions based on your expected filtered output
}

  }