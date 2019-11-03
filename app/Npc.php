<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Npc
 *
 * @property int $id
 * @property int|null $npc_id
 * @property int $type
 * @property string $name
 * @property string $ip_address
 * @property string $password
 * @property string|null $webserver
 * @property string $last_reset
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $human_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Npc[] $npcs
 * @property-read int|null $npcs_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Npc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereLastReset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereNpcId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc whereWebserver($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Npc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Npc withoutTrashed()
 * @mixin \Eloquent
 */
class Npc extends Model {
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'name',
        'ip_address',
        'password',
        'webserver',
        'last_reset',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function getHumanTypeAttribute() {
        switch ($this->type) {
            case 0: return 'npc';
            case 1: return 'whois';
            case 2: return 'bank';
            case 3: return 'puzzle';
            case 4: return 'riddle';
            case 5: return 'government';
            case 6: return 'doom';
        }
    }

    /**
     * Relationships
     */

    public function npcs() {
        return $this->hasMany(\App\Npc::class);
    }
}
