<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function followings()
	{
		return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
	}

	public function followers()
	{
		return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
	}

	public function is_following($userId)
	{
		return $this->followings()->where('follow_id', $userId)->exists();
	}

	public function follow($userId)
	{
		$existing = $this->is_following($userId);
		$myself = $this->id == $userId;

		//上の2つの変数が存在しなかったら実行
		if (!$existing && !$myself) {
			$this->followings()->attach($userId);
		}
	}

	public function unfollow($userId)
	{
		$existing = $this->is_following($userId);
		$myself = $this->id == $userId;

		//1つ目の変数があって2つ目の変数がない時実行
		//すでにフォロー済み、かつフォロー相手がユーザ自身ではない場合、フォローを外す
		if ($existing && !$myself) {
			$this->followings()->detach($userId);
		}
	}


}
