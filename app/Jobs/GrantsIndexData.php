<?php

namespace App\Jobs;

use App\Grant;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class GrantsIndexData extends Job implements SelfHandling
{
    protected $tag;

    /**
     * Constructor
     *
     * @param string|null $tag
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Execute the command.
     *
     * @return array
     */
    public function handle()
    {
        if ($this->tag) {
            return $this->tagIndexData($this->tag);
        }

        return $this->normalIndexData();
    }

    /**
     * Return data for normal index page
     *
     * @return array
     */
    protected function normalIndexData()
    {
        $grants = Grant::with('tags')
            ->where('published_at', '<=', Carbon::now())
            ->where('is_draft', 0)
            ->orderBy('published_at', 'desc')
            ->simplePaginate(config('grants.grants_per_page'));

        return [
            'title' => config('grants.title'),
            'subtitle' => config('grants.subtitle'),
            'grants' => $grants,
            'page_image' => config('grants.page_image'),
            'meta_description' => config('grants.description'),
            'reverse_direction' => false,
            'tag' => null,
        ];
    }

    /**
     * Return data for a tag index page
     *
     * @param string $tag
     * @return array
     */
    protected function tagIndexData($tag)
    {
        $tag = Tag::where('tag', $tag)->firstOrFail();
        $reverse_direction = (bool)$tag->reverse_direction;

        $grants = Grant::where('published_at', '<=', Carbon::now())
            ->whereHas('tags', function ($q) use ($tag) {
                $q->where('tag', '=', $tag->tag);
            })
            ->where('is_draft', 0)
            ->orderBy('published_at', $reverse_direction ? 'asc' : 'desc')
            ->simplePaginate(config('grants.grants_per_page'));
        $grants->addQuery('tag', $tag->tag);

        return [
            'title' => $tag->title,
            'subtitle' => $tag->subtitle,
            'grants' => $grants,
            'tag' => $tag,
            'reverse_direction' => $reverse_direction,
            'meta_description' => $tag->meta_description ?: \
                config('grants.description'),
        ];
    }
}