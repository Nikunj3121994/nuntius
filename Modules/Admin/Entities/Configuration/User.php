<?php

namespace Modules\Admin\Entities\Configuration;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * Class User
 * @package Modules\Admin\Entities\Configuration
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes, EntrustUserTrait {
        SoftDeletes::restore as soft_delete_restore;
        EntrustUserTrait::restore as entrust_restore;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ramal',
        'path_imagem',
        'cpf',
        'rg',
        'sexo',
        'data_aniversario',
        'remember_token',
        'funcao',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return HasMany
     */
    public function userAddress(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    /**
     * @return HasMany
     */
    public function userNumber(): HasMany
    {
        return $this->hasMany(UserNumber::class);
    }

    /**
     * @return BelongsToMany
     */
    public function company(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'empresa_user', 'users_id', 'empresa_id');
    }

    /**
     * @return bool|null
     */
    public function restore(): ?bool
    {
        $result = $this->soft_delete_restore();
        $this->entrust_restore();
        return $result;
    }

}
