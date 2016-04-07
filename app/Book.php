<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = [
        'title',
        'price',
        'available',
        'release_date'
      ];

      /**
      * Additional fields to treat as Carbon instances.
      *
      * @var array
      */
      protected $dates = ['release_date'];


      /**
      * Get the genres associated with the given book
      *
      * @return \Illuminate\Datebase\Eloquent\Relations\BelongsToMany
      */
      public function genres()
      {
        return $this->belongsToMany('App\Genre');
      }


      /**
      * Get the Book Author
      *
      * @return \Illuminate\Datebase\Eloquent\Relations\BelongsToMany
      */
      public function author()
      {
        return $this->belongsTo('App\Author');
      }

      public function scopeAvailable($query)
      {
         return $query->where('available', 1);
      }
}
