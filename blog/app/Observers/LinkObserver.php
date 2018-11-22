<?php

namespace App\Observers;

use App\Models\Link;
use Cache;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class LinkObserver
{
    //public function creating(User $user)
    //{
    //    //
    //}

    //public function updating(User $user)
    //{
    //    //
    //}

    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}