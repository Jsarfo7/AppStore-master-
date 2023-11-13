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
      $response = applications[0];
      $this->assertSame("EcoExplorer", $response->name);
      $this->assertSame("Environmental" $response->category);
    }
  
    public function test_sort_returns_correct_order(): void {
      
    }
  
    public function test_filter_returns_correct_output(): void {
      
    }
  
    //Test to make sure that when you login as user@gmail.com : password
    public function test_login(): void {

    }
  
  }