<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property-read mixed $id
 * @property-read \App\Models\User|null $user
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post addHybridHas(\Illuminate\Database\Eloquent\Relations\Relation $relation, string $operator = '>=', string $count = 1, string $boolean = 'and', ?\Closure $callback = null)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post aggregate($function = null, $columns = [])
 * @method static \Database\Factories\PostFactory factory($count = null, $state = [])
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post getConnection()
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post insert(array $values)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post insertGetId(array $values, $sequence = null)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post newModelQuery()
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post newQuery()
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post query()
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post raw($value = null)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property mixed $password
 * @property-read mixed $id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \MongoDB\Laravel\Eloquent\Builder|User addHybridHas(\Illuminate\Database\Eloquent\Relations\Relation $relation, string $operator = '>=', string $count = 1, string $boolean = 'and', ?\Closure $callback = null)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User aggregate($function = null, $columns = [])
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \MongoDB\Laravel\Eloquent\Builder|User getConnection()
 * @method static \MongoDB\Laravel\Eloquent\Builder|User insert(array $values)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User insertGetId(array $values, $sequence = null)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User newModelQuery()
 * @method static \MongoDB\Laravel\Eloquent\Builder|User newQuery()
 * @method static \MongoDB\Laravel\Eloquent\Builder|User query()
 * @method static \MongoDB\Laravel\Eloquent\Builder|User raw($value = null)
 */
	class User extends \Eloquent {}
}

