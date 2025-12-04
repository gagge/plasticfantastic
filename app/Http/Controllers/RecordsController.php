<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Record;

class RecordsController extends Controller {
  public function index(Record $record) {
    $records = $record->all()->sortBy('title');
    return view('records')->with('records', $records);
  }
}
