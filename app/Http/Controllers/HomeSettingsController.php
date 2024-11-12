<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class HomeSettingsController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        // Перенаправляем на редактирование первой (или единственной) записи
        $id = HomeSetting::firstOrFail()->id;
        return $this->edit($request, $id);
    }
}
