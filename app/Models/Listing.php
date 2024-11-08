<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room', 'checkin', 'checkout', 'price', 'tags', 'accommodations', 'members', 'email', 'youremail', 'fullname', 'logo', 'name', 'phonenumber', 'contactnumber', 'location', 'address'];

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['tag']);
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('room', 'like', '%' . request('search') . '%')
                ->orwhere('checkin', 'like', '%' . request('search') . '%')
                ->orwhere('checkout', 'like', '%' . request('search') . '%')
                ->orwhere('price', 'like', '%' . request('search') . '%')
                ->orwhere('tags', 'like', '%' . request('search') . '%')
                ->orwhere('accommodations', 'like', '%' . request('search') . '%')
                ->orwhere('members', 'like', '%' . request('search') . '%')
                ->orwhere('email', 'like', '%' . request('search') . '%')
                ->orwhere('youremail', 'like', '%' . request('search') . '%')
                ->orwhere('fullname', 'like', '%' . request('search') . '%')
                ->orwhere('name', 'like', '%' . request('search') . '%')
                ->orwhere('phonenumber', 'like', '%' . request('search') . '%')
                ->orwhere('contactnumber', 'like', '%' . request('search') . '%')
                ->orwhere('location', 'like', '%' . request('search') . '%')
                ->orwhere('address', 'like', '%' . request('search') . '%');
        }
    }


    // Relationship To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
