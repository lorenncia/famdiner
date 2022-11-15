<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function edit(Profile $profile)
   {
      return view('famdiner.editProfile', [
         'profile' => $profile,
         'cities' => City::orderBy('name')->get()
      ]);
   }

   public function update(Request $request, Profile $profile)
   {
      $profile->update([
         'name' => $request->name,
         'gender' => $request->gender,
         'city_id' => $request->place_of_birth,
         'date_of_birth' => $request->date_of_birth,
         'address' => $request->address
      ]);
      return redirect()->route('profile.edit', $profile->id)->with('success-swal', 'Bidang Studi Berhasil Diubah');
   }
}
