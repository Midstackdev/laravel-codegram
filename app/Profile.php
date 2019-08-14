<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	public function profileImage(){
		$imagePath = ($this->image) ? $this->image : "profile/eslwG06nrq9xO9jaJb3Yo3Pn2XPcnbAUdXhWHTFu.png";
		return '/storage/' .$imagePath;
	}

	public function followers(){
		return $this->belongsToMany(User::class);
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
