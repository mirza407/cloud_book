<?php

namespace App\Services;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionService 
{
    public function getSectionList()
    {
        $sections = Section::with('children')->whereNull('parent_id')->get();
        return $sections;
    }

    public function saveSection($request) {
        $section = new Section();
        $section->title = $request->input('title');
        $section->parent_id = $request->input('parent_id');
        $section->save();
        
        return $section;
    }

    public function editSave($request) {
        $sections = Section::where('id', '<>', $request->id)->get();        
        return $sections;
    }

    public function editSection($request, $section) {
        $section->title = $request->input('title');
        $section->parent_id = $request->input('parent_id'); // Update the parent ID if necessary
        $section->save();

        return $section;
    }

    public function create() {
        $sections = Section::all(); // Fetch all sections for the dropdown
        return $sections;
    }
}
