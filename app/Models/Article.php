<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;



class Article extends Model{
    use HasFactory, HasRichText;

    protected $table = 'article';

    /**
     * Attributes of the post class.
     */
    protected $guarded = [];

    /**
     * Rich text attributes managed by the model.
     */
    protected $richTextAttributes = [
        'body',
        'notes',
    ];

    /**
     * Add attributes for the rich text editor.
     *
     * @param string $attributes
     */
    public function addRichTextAttributes($attributes)
    {
        if (!in_array($attributes, $this->richTextAttributes)) {
            $this->richTextAttributes[] = $attributes;
        }
    }

    /**
     * Set the article ID.
     *
     * @param int $id
     */
    public function set_id($id)
    {
        $this->attributes['id'] = $id;
    }

    /**
     * Get the article ID.
     *
     * @return int
     */
    public function get_id()
    {
        return $this->attributes['id'];
    }

    /**
     * Set the article title.
     *
     * @param string $title
     */
    public function set_title($title)
    {
        $this->attributes['title'] = $title;
    }

    /**
     * Get the article title.
     *
     * @return string
     */
    public function get_title()
    {
        return $this->attributes['title'];
    }

    /**
     * Set the user ID.
     *
     * @param int $user_id
     */
    public function set_user_id($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    /**
     * Get the user ID.
     *
     * @return int
     */
    public function get_user_id()
    {
        return $this->attributes['user_id'];
    }

    /**
     * Set the article slug.
     *
     * @param string $slug
     */
    public function set_slug($slug)
    {
        $this->attributes['slug'] = $slug;
    }

    /**
     * Get the article slug.
     *
     * @return string
     */
    public function get_slug()
    {
        return $this->attributes['slug'];
    }

    /**
     * Set the article thumbnail.
     *
     * @param string $thumbnail
     */
    public function set_thumbnail($thumbnail)
    {
        $this->attributes['thumbnail'] = $thumbnail;
    }

    /**
     * Get the article thumbnail.
     *
     * @return string
     */
    public function get_thumbnail()
    {
        return $this->attributes['thumbnail'];
    }

    /**
     * Set the article status.
     *
     * @param string $status
     */
    public function set_status($status)
    {
        $this->attributes['status'] = $status;
    }

    /**
     * Get the article status.
     *
     * @return string
     */
    public function get_status()
    {
        return $this->attributes['status'];
    }

    /**
     * Validation rules for creating/updating articles.
     *
     * @param \Illuminate\Http\Request $request
     */
    public static function validate($request)
    {
        $request->validate([
            'title' => ['required', 'unique:article', 'max:255'],
            'body' => ['required'],
            'notes' => ['nullable'],
            'slug' => ['required', 'unique:article', 'max:255'],
            'thumbnail' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:draft,published'], // Only allow specific statuses
        ]);
    }
}
