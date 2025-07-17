<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $settings = Setting::pluck("value", "setting_name")->toArray();
        return view('admin.profile.index', compact('user','settings'));
    }

    public function profileUpdate(Request $request): RedirectResponse
    {
        $user = Auth::user();

        if ($request->input("form") === "profile") {
            // Profile Update
            $request->validate([
                "name" => "required",
                "email" => "required|email|unique:users,email," . $user->__get("id"),
            ]);

            try {
                User::query()
                    ->where("id", $user->__get("id"))
                    ->update([
                        "name" => $request->input("name"),
                        "email" => $request->input("email"),
                    ]);

                return redirect()->back()->with("success", "Profile has been updated successfully.");

            }  catch (QueryException $exception) {
                return redirect()->back()->with("error", "QueryException code: " . $exception->getCode());
            }
        }

        if ($request->input("form") === "password") {
            // Password Update
            $request->validate([
                "password" => [
                    "required",
                    "string",
                    Password::min(6)
                        ->mixedCase()
                        ->numbers(),
                ]
            ]);

            try {
                User::query()
                    ->where("id", $user->__get("id"))
                    ->update([
                        "password" => Hash::make($request->input("password")),
                    ]);

                return redirect()->back()->with("success", "Password has been updated successfully.");

            }  catch (QueryException $exception) {
                return redirect()->back()->with("error", "QueryException code: " . $exception->getCode());
            }
        }

        return redirect()->back();
    }
}
