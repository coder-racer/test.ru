<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AboutController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        // Перенаправляем на редактирование первой (или единственной) записи
        $id = \App\Models\About::firstOrFail()->id;
        return $this->edit($request, $id);
    }
}
