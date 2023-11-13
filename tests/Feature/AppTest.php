<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

Class AppTest extends TestCase {
  
    public function test_clicked_application_returns_correct_info () : void {
      $response = resources.views."welcome.blade.php".applications[0].name;
      $response->assertStatus("EcoExplorer");
    }
  
    public function test_sort_returns_correct_order(): void {
    
    }
  
    public function test_filter_returns_correct_output(): void {
      
    }
  
    //Test to make sure that when you login as user@gmail.com : password
    public function test_login(): void {
    }
  
  }