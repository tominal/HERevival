<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Server
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $npc_id
 * @property string $name
 * @property int $cpu
 * @property int $hdd
 * @property int $ram
 * @property int $network
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Server onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereCpu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereHdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereNetwork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereNpcId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereRam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Server withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Server withoutTrashed()
 * @mixin \Eloquent
 */
class Server extends Model {
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'npc_id',
        'name',
        'cpu',
        'hdd',
        'ram',
        'network',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
