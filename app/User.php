<?php

namespace ree;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phonenumber', 'bio', 'company', 'location', 'website', 'ipaddr', 'photo', 'lastseen', 'access',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





    public function getName()
    {
    	if ($this->name && $this->email) {
    		return "{$this->name} {$this->email}";
    	}
    	
    	if ($this->name) {
    		return $this->name;
    	}
    	return null;
    }
    
    public function getNameOrUsername()
    {
    	return $this->getUser() ?: $this->name;
    }
    
    
        public function fileToUpload()
    {
    	return $this->photo();
    }
    
    public function getUser()
    {
    	return $this->name;
    }
           
            public function getUserOrUsername()
    {
    	return $this->getUser();
    }
    
       public function getEmail()
    {
    	return $this->email;
    }
    
        public function getEmailOrEmailAddress()
    {
    	return $this->getEmail() ?: $this->email;
    }
    
    public function getEmailOrUsername()
    {
      	return $this->email ?: $this->name;
    }
    
    public function getAvatarUrl()
    {
    	return "https://secure.gravatar.com/avatar/{{ md5( strtolower( trim(getEmailOrEmailAddress()))) }}?s=40";
    }
    
        public function getAvatar()
    {
    	return $this->avatar();
    }
    
    
    public function statuses()  {
    	return $this->hasMany('App\Models\Status', 'user_id');
    
    }
    
        public function  uploads() {
    	return $this->hasMany('App\Models\Upload', 'user_id');
    }
    
    public function  likes() {
    	return $this->hasMany('App\Models\Like', 'user_id');
    }
    
    
    public function friendsOfMine()
    {
    	return $this->belongsToMany('App\Models\User', 'friends', 'user_id', 'friend_id');
    }
    
     public function friendOf()
    {
    	return $this->belongsToMany('App\Models\User', 'friends', 'friend_id', 'user_id');
    }
    
        public function friends()
    {
    	return $this->friendsOfMine()->wherePivot('accepted', true)->get()
    	->merge ($this->friendOf()->wherePivot('accepted', true)->get());
    }
    
         public function friendRequests()
    {
    	return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }
    
         public function friendRequestsPending()
    {
    	return $this->friendOf()->wherePivot('accepted', false)->get();
    }
    
          public function hasFriendRequestsPending(User $user)
    {
    	return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    }
    
    
          public function hasFriendRequestsReceived(User $user)
    {
    	return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }
    
    
        public function addFriend(User $user)
    {
    	$this->friendOf()->attach($user->id);
    }
    
        public function deleteFriend(User $user)
    {
    	$this->friendOf()->detach($user->id);
    	$this->friendsOfMine()->detach($user->id);
    }
    
              public function acceptFriendRequest(User $user)
    {
    	$this->friendRequests()->where('id', $user->id)->first()->pivot->update([
    	
    	'accepted' => true,
    	]);
    }
    
            public function isFriendsWith(User $user)
    {
    	return (bool) $this->friends()->where('id', $user->id)->count();
    }
        
            public function hasLikedStatus(Status $status)
    {
    	return $status->likes->where('user_id', $this->id)->count();
    }
    


}
