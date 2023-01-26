<?php

namespace Seeder\Models;

use Illuminate\Database\Eloquent\Model;

class Seeder extends Model
{
    /**
     * Constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->table = config('utility.seeder.table');
        parent::__construct($attributes);
    }
}
