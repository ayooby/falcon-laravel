<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
        /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['name'];


      /**
  	 * Get the Books associated with tie given genre.
  	 *
  	 * @return \Illuminate\Datebase\Eloquent\Relations\BelongsToMany
  	 */
  	public function books()
  	{
  		return $this->belongsToMany('App\Book');
  	}

}
