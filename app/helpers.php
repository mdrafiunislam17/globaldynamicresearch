<?php
use App\helpers.php;

use App\Models\Setting;

public function compactSetting()
{
    $settings = Setting::query()->pluck("value", "setting_name")->toArray();
}

}