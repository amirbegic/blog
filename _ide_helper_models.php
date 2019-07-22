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
 * App\cities
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $countriesID
 * @property-read \App\countries $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities whereCountriesID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\cities whereUpdatedAt($value)
 */
	class cities extends \Eloquent {}
}

namespace App{
/**
 * App\company
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\company whereUpdatedAt($value)
 */
	class company extends \Eloquent {}
}

namespace App{
/**
 * App\countries
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\countries whereUpdatedAt($value)
 */
	class countries extends \Eloquent {}
}

namespace App{
/**
 * App\employees
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\employees whereUpdatedAt($value)
 */
	class employees extends \Eloquent {}
}

namespace App{
/**
 * App\tasks
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tasks whereUpdatedAt($value)
 */
	class tasks extends \Eloquent {}
}

namespace App{
/**
 * App\task_user
 *
 * @property int $user_id
 * @property int $task_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\task_user whereUserId($value)
 */
	class task_user extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $citiesID
 * @property-read \App\cities $city
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\tasks[] $task
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCitiesID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 */
	class User extends \Eloquent {}
}

