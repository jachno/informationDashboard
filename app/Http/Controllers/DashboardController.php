<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\timeline;
use App\Backlog;
use Auth;
use Log;

class DashboardController extends Controller
{
    function index()
    {
      



          Log::info('view index');
        
        $timelines = timeline::orderBy('created_at', 'DESC')->get();
        $backlogs = backlog::orderBy('priority', 'ASC')->get();
        ;
        return view('dashboard.dashboard', compact('timelines', 'backlogs'));
    }
    
    
    function postUpdate($id = null)
    {
        return view('postupdate')->with('timeline', timeline::find($id));
    }
    
    
    function formPostUpdate(Request $request, $id = null)
    {
          Log::info('view postform');

        if ($id == null) {
            Log::info('new');

            $timeline = new timeline;
        } else {
            $timeline = timeline::findorfail($id);
        }

        Log::info($request);

        $this->validate($request, [
                            'description' => 'required|max:1000'
                            ]);
        
        $timeline->description = $request->description;
        $timeline->save();
        return redirect('');

    }

    function editBacklog(Request $request, $id = null)
    {
        return view('backlog')->with('backlog', backlog::find($id));
    }
    
    
    function deleteUpdate(Request $request, $id)
    {
        $update = timeline::find($id);
        
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
}
