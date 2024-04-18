<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Blog $blog): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Blog $blog): bool
    {
        // Logic to determine if the user can update the blog
        //return $user->id === $blog->user_id; // For example, allow only the owner to update the blog
/*        if (Auth::check() && $blog->user_id == auth()->id()) {
            $userId = Auth::id();
            return true;
        }*/

        return (Auth::check() && $blog->user_id == auth()->id());
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Blog $blog): bool
    {
        // Logic to determine if the user can delete the blog
        //return $user->id === $blog->user_id; // For example, allow only the owner to delete the blog
        return (Auth::check() && $blog->user_id == auth()->id());
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Blog $blog): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Blog $blog): bool
    {
        //
    }
}
