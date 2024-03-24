<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team_id',
    ];

    protected static function booted(): void
    {
        $currentTeamId = auth()->user()->current_team_id;

        static::creating(function (Project $project) use ($currentTeamId) {
            $project->team_id = $currentTeamId;
        });

        static::addGlobalScope('project_team_id', function (Builder $builder) use ($currentTeamId) {
            $builder->where('team_id', $currentTeamId);
        });
    }
}
