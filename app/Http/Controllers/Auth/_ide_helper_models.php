<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Npc
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Npc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Npc query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Npc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Npc withoutTrashed()
 */
	class Npc extends \Eloquent {}
}

namespace App{
/**
 * App\Server
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Server onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Server query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Server withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Server withoutTrashed()
 */
	class Server extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

