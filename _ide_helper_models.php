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
 * @property string $_id 35 occurrences
 * @property string|null $content 35 occurrences
 * @property \Illuminate\Support\Carbon|null $created_at 35 occurrences
 * @property string|null $title 35 occurrences
 * @property \Illuminate\Support\Carbon|null $updated_at 35 occurrences
 * @property string|null $user_id 35 occurrences
 * @property-read mixed $id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
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
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereContent($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereId($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereTitle($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $_id 16 occurrences
 * @property \Illuminate\Support\Carbon|null $created_at 16 occurrences
 * @property string|null $email 16 occurrences
 * @property \Illuminate\Support\Carbon|null $email_verified_at 11 occurrences
 * @property string|null $name 16 occurrences
 * @property mixed|null $password 16 occurrences
 * @property string|null $remember_token 11 occurrences
 * @property string|null $role 16 occurrences
 * @property \Illuminate\Support\Carbon|null $updated_at 16 occurrences
 * @property-read mixed $id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
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
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereEmail($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereId($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereName($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User wherePassword($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereRememberToken($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereRole($value)
 * @method static \MongoDB\Laravel\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

