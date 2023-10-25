<?php

use App\Models\Project;
use App\Models\Section;
use App\Models\Settings;

function get_setting_value($key){
    $data = Settings::where('key', $key)->first();
    return $data = isset($data->value) ? $data->value : 'key is empty';
}


function get_section_data($key){
    $data = Section::where('post_as', $key)->first();
    return $data = isset($data) ? $data : 'cannot access section because key is valid';
}

function get_project(){
    $data = Project::all();
    return $data;
}

    // project 
    // $data = project::all();
    // return $data;



    // if(isset($data->value)){
    //     return $data->value;
    // }else{
    //     return 'key is empty';
    // }