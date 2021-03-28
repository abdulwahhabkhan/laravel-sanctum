<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class Project extends Model
{
    use HasFactory;

    public static function getProjects($params){

    }

    public function created_by(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function owner(){
        return $this->belongsTo(User::class, 'owner');
    }

    /**
     * Filter based on the request data
     *
     * @param Builder $query
     * @param Request $params
     * @return Builder
     */
    public function scopeFilter($query, $params)
    {
        if($params->has('completed')) {
            $query->where('status', $params->get('completed'));
        }
        return $query;
    }
}
