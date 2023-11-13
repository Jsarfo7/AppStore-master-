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
    public function test_clicked_application_returns_correct_info () : void {
      $response = application[0];
      $this->assertSame("EcoExplorer", $response->name);
      $this->assertSame("Environmental" $response->category);
    }
  
    public function test_sort_returns_correct_order(): void {
      String[] $sortApps = applications.sort(app => app.category.toLowerCase().includes("Entertainment"));
      $this->assertSame("MindMaze")
    }
  
    public function test_filter_returns_correct_output(): void {
      String[] $filteredApps = applications.filter(app => app.category.toLowerCase().includes("Fitness"));
      $this->assertSame("FitFusion", $filteredApps[0].name);
    }
  
    //Test to make sure that when you login as user@gmail.com : password
    public function test_login(): void {

    }
  
  }