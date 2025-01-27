<?php

namespace App\Observers;

use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostObserver
{
    public function creating(BlogPost $blogPost)
    {
        // Generate slug dynamically
        $blogPost->slug = Str::slug($blogPost->title);
    }

    /**
     * Handle the BlogPost "created" event.
     */
    public function created(BlogPost $blogPost): void
    {
        $blogPost->slug = Str::slug($blogPost->title) . '-' . $blogPost->id;
        $blogPost->saveQuietly();   // avoid triggering observer
    }

    /**
     * Handle the BlogPost "updated" event.
     */
    public function updated(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "deleted" event.
     */
    public function deleted(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "restored" event.
     */
    public function restored(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "force deleted" event.
     */
    public function forceDeleted(BlogPost $blogPost): void
    {
        //
    }
}
