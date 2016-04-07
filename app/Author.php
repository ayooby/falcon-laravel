<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
        /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['name', 'surname'];

      /**
    	 * A author can have many books
    	 *
    	 * @return \Illuminate\Datebase\Eloquent\Relations\HasMany
    	 */
    	public function books()
    	{
    		return $this->hasMany('App\Book');
    	}


}
