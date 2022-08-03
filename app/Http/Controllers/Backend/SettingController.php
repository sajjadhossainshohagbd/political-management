<?php

namespace App\Http\Controllers\Backend;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $setting = Settings::firstOrCreate([
                'key' => $type,
            ]);

            $setting->value = $request->hasFile($type) ? $request->file($type)->store('public/uploads/logo') : $request->{$type} ?? $setting->value;

            $setting->save();
        }

        Cache::forget('settings');

        return back()->with('success','Settings has been updated!');
    }
}
