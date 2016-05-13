<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardTest extends TestCase
{
        use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDashboardLoads()
    {
        $this->visit('/');
        $this->see('NonFunctional Test Team');
    }
    
    
    public function testArchiveButtonForLoggedInUser()
    {
        
                $user = factory(App\User::class)->create();

                $this->actingAs($user);
        
                $backlog = factory(App\Backlog::class)->make();
                $backlog->save();
                fwrite(STDERR, print_r('creating a backlogitem with the id ' .  $backlog->id, TRUE));
                
                $this->visit('/');
                
                $this->see($backlog->name);
                $this->click('arvbtn_'. $backlog->id);
                
                $this->seeInDatabase('backlogs', ['id' => $backlog->id, 'archived' =>1 ]);

    }
    
    public function testArchiveButtonNotShownForLoggedoutUser()
    {
                    $this->visit('/');
                    $this->dontsee('arvbtn');
    }
    
}