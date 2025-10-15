<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{

    public function index () {
        $settings = Setting::orderBy('created_at', 'desc')->get();
        return view('backend.pages.settings.index', compact('settings'));
    }

    public function edit ($id) {

        $setting = Setting::findOrFail($id);
        return view('backend.pages.settings.edit', compact('setting'));
    }

    public function update (Request $request, $id) {

        $rules = [
            'value' => ['required']
        ];
        $model = Setting::findOrFail($id);
        switch ($model->type) {
            case 1:
            case 2:
            {
                $rules['value'] = ['required', 'array'];
                $rules['value.*'] = ['max:500', 'required', 'string'];
                break;
            }
            case 4:
            {
                $rules['value'] = ['required', 'array'];
                $rules['value.*'] = ['required', 'string'];
                break;
            }
            case 3:
            {
                $rules['value'] = ['mimetypes:' . implode(',', Setting::ALLOWED_FILE_MIMES), 'max:' . Setting::ALLOWED_FILE_SIZE_KB];
                break;
            }
            default:
            {
                abort(404);
            }
        }

        $request->validate($rules);

        $value = $request->input('value');

        switch ($model->type) {
            case 1:
            case 2:
            case 4:
            {
                $model->value = collect($value)->map(fn ($value) => preg_replace(['#<script(.*?)>(.*?)</script>#is', '/\bon\w+=\S+(?=.*>)/'], '', $value));
                break;
            }
            case 3:
            {
                if ($request->value) {
                    $oldImage = $model->getMedia('image')->first();

                    if ($oldImage) {
                        $oldImage->delete();
                    }

                    $model->addMedia($request->value)->toMediaCollection("image");
                }
                break;
            }
            default:
            {
                abort(404);
            }
        }

        $model->save();

        Cache::forget('settings');

        return redirect()->route('admin.settings.index')->with(['success' => 'Yeniləndi']);
    }

    public function delete ($id) {

        $model = Setting::findOrFail($id);
        $model->clearMediaCollection('image');
        $model->delete();

        Cache::forget('settings');

        return redirect()->route('admin.settings.index')->with(['success' => 'Silindi']);
    }
}
