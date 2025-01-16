<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function create()
    {
        return view('post-job'); // Sesuaikan dengan nama file view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:255',
            'company_description' => 'nullable|string',
            'job_type' => 'required|string',
            'website' => 'nullable|url',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('featured_images', 'public');
        }
    
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }
    
        Job::create($validated);
    
        return redirect()->route('post-job.create')->with('success', 'Job posted successfully!');
    }
}    

