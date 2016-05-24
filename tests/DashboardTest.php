`<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use app\Timeline;
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
    
    
    public function testLoginButtonAppears()
    {
                $this->visit('/');
                $this->see('Login');
                $this->click('Login');
                $this->see('Welcome to NFT Dashboard');
    }
    
    public function testArchiveButtonForLoggedInUser()
    {
                $user = factory(App\User::class)->create();
                $this->actingAs($user);
                $backlog = factory(App\Backlog::class)->make();
                $backlog->save();
                //fwrite(STDERR, print_r('creating a backlogitem with the id ' .  $backlog->id, TRUE));
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
    
    
    public function testCheckPostBackLogAssociationAndViewBacklogCard()
    {
    
        
             $faker = Faker\Factory::create();
             $user = factory(App\User::class)->create();
             $this->actingAs($user);
             $backlog = factory(App\Backlog::class)->make();
             $backlog->save();
             $this->visit('/postupdate');
             $this->see($backlog->name);
             $this->select( $backlog->id,'bck');
             $testDescription = $faker->name();
             $this->type($testDescription, 'description');
             $this->press('Save');
             $this->seePageIs('/')->see($backlog->name);
             $record =  DB::table('backlog_timeline')->orderBy('backlog_id', 'desc')->first();
             
             
             $timeline = Timeline::find($record->timeline_id);
             
             
             
             //need to add check in database
             $this->seeInDatabase('backlog_timeline', ['backlog_id' => $backlog->id, 'timeline_id' => $timeline->id ]);
             $this->click($backlog->name);
           
           
           
             $this->seePageIs('viewbacklogcard/' . $backlog->id)->see($testDescription);
             $this->see($backlog->name);
             $this->see($testDescription);

             
    }
    
    

}
