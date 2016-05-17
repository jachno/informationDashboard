<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Timeline;
use App\Backlog;
use Auth;
use Log;

class DashboardController extends Controller
{
    function index()
    {
      


        $timelines = Timeline::orderBy('created_at', 'DESC')->get();
        $backlogs = Backlog::where('archived',0)
        ->orderBy('priority', 'ASC')->get();
        
        

        return view('dashboard.dashboard', compact('timelines', 'backlogs'));
    }
    
    
    function postUpdate($id = null)
    {
        
     //$backlogs = Backlog::where('archived',0)
      //  ->orderBy('priority', 'ASC')->get();
        
     //   $backlogs = Backlog::lists('name','id')->where('archived',0);
     
     $backlogs = Backlog::where('archived',0)
        ->orderBy('priority', 'ASC')->lists('name','id');
     
        
        $timeline =  Timeline::find($id);
        
        return view('postupdate',compact('timeline', 'backlogs'));
        
    }
    
    
    function formPostUpdate(Request $request, $id = null)
    {
          Log::info('view postform');

        if ($id == null) {
            Log::info('new');

            $timeline = new Timeline;
        } else {
            $timeline = Timeline::findorfail($id);
        }

        Log::info($request);

        $this->validate($request, [
                            'description' => 'required|max:1000'
                            ]);
        
        $timeline->description = $request->description;
        
        $timeline->save();
        $timeline->backlogs()->sync($request->bck);
        
        
        var_export( $request->bck);
        
        //return redirect('');

    }

    function editBacklog(Request $request, $id = null)
    {
                return view('backlog')->with('backlog', backlog::find($id));
    }
    
    
    function deleteUpdate(Request $request, $id)
    {
        $update = Timeline::find($id);
        
        $update->delete();
        return redirect('');
        
        
    }
    
    
    function formPostBacklog(Request $request, $id = null)
    {
        if ($id == null) {
            $backlog = new backlog;
        } else {
                $backlog = backlog::findorfail($id);
        }
        
        $backlog->name = $request->name;
        $backlog->description = $request->description;
        
        if ($request->priority == null) {
            $backlog->priority = 99;
        } else {
            $backlog->priority = $request->priority;
        }
        
        $backlog->save();
        return redirect('');

    }
    
    function archivebacklogitem($id)
    {
       $backlog = backlog::findorfail($id);
       $backlog->archived = 1;
       $backlog->save();
       return redirect('');
    }
}
