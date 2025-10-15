<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DashboardController extends Controller
{
    public function index () {
        return view('backend.pages.dashboard');
    }

    public function removeMedia ($id) {
        $media = Media::find($id);

        // $media->model->delete();
        $media->delete();

        return response()->json(['success' => 'Əməliyyat uğurla keçdi.']);
    }
}
