<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class CouponMember extends Model
{
    use Searchable;

    public function searchableAs()
    {
        return 'couponmembers_index';
    }

        /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
    
}