<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


/**
 * App\Model\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $account
 * @property string $mobile
 * @property string $mobileCountry
 * @property string|null $email
 * @property string|null $emailStatus
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereEmailStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereMobileCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Role[] $roles
 * @property string $lastName
 * @property string $firstName
 * @property string $lastIp
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereLastName($value)
 */
class Admin extends Authenticatable
{
    //

    use Notifiable,EntrustUserTrait;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}